<?php

if(session('user_rank') == 3 || !session('user_rank')){
    header('Location:'. admin_url('login'));
    exit;
}

if(!permission('users', 'show')){
    die('Bu alanı görüntülemeye yetkiniz yok!');
}

$limit = 1;
$paramName = 'sayfa';
$totalRecords = $db->query('SELECT count(user_id) as TotalUsers FROM users')->fetch(PDO::FETCH_ASSOC)['TotalUsers'];
$Pagination = new Pagination;
$start = $Pagination->Setup($limit, $paramName, $totalRecords);
$users = $db->query('SELECT * FROM users ORDER BY user_id DESC LIMIT '.$start['start'].' ,'.$start['limit'].' ');

require admin_view('users');

