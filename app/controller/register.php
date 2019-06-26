<?php

if (session('user_id')) {
    header('Location:' . (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : site_url()));
    exit;
}

if (post('submit')) {

    $avatar = singleFileupload($_FILES['avatar']);
    $username = post('username');
    $password = post('password');
    $password_again = post('password_again');
    $email = post('email');

    if (!$username) {
        $error = 'Kullanıcı boş bırakılamaz!';
    } else if (!$email) {
        $error = 'E-posta boş bırakılamaz!';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Lütfen geçerli bir E-posta adresi girin';
    } else if (!$password) {
        $error = 'Şifre boş bırakılamaz!';
    } else if (strlen(trim($password)) < 6) {
        $error = 'Şifreniz en az 6 karakter uzunlukta olmalıdır!';
    } else if (!$password_again) {
        $error = 'Şifrenizi tekrar giriniz!';
    } else if ($password !== $password_again) {
        $error = 'Girdiğiniz şifreler uyuşmuyor';
    } elseif (isset($avatar['error'])) {
        $error = $avatar['error'];
    } else {

        $row = User::UserExist($username, $email);

        if ($row) {
            $error = 'Bu bilgilere sahip kullanıcı sisteme zaten kayıtlı!';
        } else {
            $result = User::Register([
                'username' => $username,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'email' => $email,
                'user_url' => permalink($username),
                'user_avatar' => $avatar['file'],
            ]);
            if ($result) {
                $success = 'Sisteme başarıyla kayıt oldunuz!';
                User::Login([
                    'user_id' => $db->lastInsertId(),
                    'username' => $username,
                    'user_rank'=> 3
                ]);
               // header('Refresh:2;url=' . site_url());
            } else {
                $error = 'Kayıt esnasında bir hata meydana geldi!';
            }

        }

    }
}
require view('register');