<?php

if(session('user_id')){
    header('Location:'. (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : site_url()));
    exit;
}

if (post('submit')) {
    $username = post('username');
    $password = post('password');

    if (!$username) {
        $error = 'Kullanıcı adı boş bırakılamaz!';
    } else if (!$password) {
        $error = 'Şifre alanı boş bırakılamaz!';
    } else {
        $row = User::UserExist($username);

        if ($row) {
           $passowrd_verify =  password_verify($password, $row['password']);
           if($passowrd_verify){
                $success = 'Başarıyla giriş yaptınız.Yönlendiriliyorsunuz...';
                User::Login($row);
                header('Refresh:2;url='.site_url());
           }else{
               $error = 'Şifrenizi hatalı girdiniz!';
           }
        } else {
            $error = 'Böyle bir kullanıcı sisteme kayıtlı değil! Şimdi <a href="'.site_url('register').'"> Kayıt </a> olmak ister misin?';
        }
    }
}

require view('login');