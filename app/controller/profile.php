<?php

$menu_title = menu(3)['menu_title'];
$menu_content = menu(3)['menu_content'];
$menus = json_decode($menu_content,true);
$row = User::UserExist(session('username'));

    require view('profile');
?>

