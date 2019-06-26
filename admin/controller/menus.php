<?php

if(session('user_rank') == 3 || !session('user_rank')){
    header('Location:'. admin_url('login'));
    exit;
}
if(!permission('menus', 'show')){
    die('Bu alanı görüntülemeye yetkiniz yok!');
}

$PaginationLimit = 5;
$paramName = 'sayfa';
$totalRecords = $db->query('SELECT count(menu_id) as Total FROM menus ')->fetch(PDO::FETCH_ASSOC)['Total'];
$Pagination = new Pagination;
$limit = $Pagination->Setup($PaginationLimit, $paramName, $totalRecords);
$pages = $db->query('SELECT * FROM menus ORDER BY menu_id DESC LIMIT '.$limit['start'].', '.$limit['limit'].' ');

require admin_view('menus');