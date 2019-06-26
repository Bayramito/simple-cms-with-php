<?php


if(session('user_rank') == 3 || !session('user_rank')){
    header('Location:'. admin_url('login'));
    exit;
}

require admin_view('index');
?>
