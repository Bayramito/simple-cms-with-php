<?php
if (session('user_rank') == 3 || !session('user_rank')) {
    header('Location:' . admin_url('login'));
    exit;
}
if (!permission('users', 'show')) {
    die('Bu alanı görüntülemeye yetkiniz yok!');
}
$user = User::listUsers(get('id'))[0];
if (!$user) {
    header('Location:' . admin_url('users'));
    exit;
}


if (post('submit')) {
    if (!permission('users', 'edit')) {
        $error = 'Üye düzenleme yetkiniz yok!';
    } else {
        if ($data = form_control()) {
            $data['user_id'] = get('id');
            $data['user_url'] = permalink($data['username']);
            $data['permissions'] = isset($_POST['permissions']) ? json_encode($_POST['permissions']) : NULL;

            $update = User::Update($data);
            User::Login($data);

            if ($update) {
                header('Location:' . admin_url('users'));
            } else {
                $error = 'bir hata var';
            }
        } else {
            $error = 'Eksik alanlar var';
        }
    }
}
$permissions = json_decode($user['permissions'], true);
require admin_view('edit-user');