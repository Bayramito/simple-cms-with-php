<?php

if (session('user_rank') == 1 || session('user_rank') == 2) {
    header('Location:' . admin_url('index'));
}

if (post('submit')) {

    if ($data = form_control()) {

        //Check if user exists on DB
        $user = User::UserExist($data['username']);
        if (!$user) {
            $error = 'Böyle bir kullanıcı sisteme kayıtlı değil!';
        } else {
            //Check if User Password is correct
            $password_verify = password_verify($data['password'], $user['password']);
            if ($password_verify) {
                if ($user['user_rank'] == 3) {
                    $error = 'Bu alana giriş yapmak için yetkiniz yok!';
                } else {
                    $success = 'Başarıyla giriş yaptınız.Yönlendiriliyorsunuz!';
                    User::Login($user);
                    header('Refresh:1;url=' . admin_url('index'));
                }
            } else {
                $error = 'Şifrenizi yalnış girdiniz, lütfen tekrar deneyin!';
            }
        }

    } else {
        $error = 'Lütfen boş alan bırakmayınız!';
    }

}
require admin_view('login');