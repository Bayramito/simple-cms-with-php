<?php

if(session('user_rank') == 3 || !session('user_rank')){
    header('Location:'. admin_url('login'));
    exit;
}

if(!permission('contact', 'show')){
    die('Bu alanı görüntülemeye yetkiniz yok!');
}

$limit = 5;
$paramName = 'sayfa';
$totalRecords = $db->query('SELECT count(contact_id) as TotalRecords FROM contact')->fetch(PDO::FETCH_ASSOC)['TotalRecords'];
$Pagination = new Pagination;
$start = $Pagination->Setup($limit, $paramName, $totalRecords);
$contacts = $db->query('SELECT * FROM contact LEFT JOIN users ON users.user_id = contact.contact_reader  ORDER BY contact_id DESC LIMIT '.$start['start'].' ,'.$start['limit'].' ')->fetchAll(PDO::FETCH_ASSOC);
$query = $db->query('SELECT * FROM users');
$reader = $query->fetchAll(PDO::FETCH_ASSOC);

require admin_view('contact');

