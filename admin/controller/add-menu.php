<?php

if(session('user_rank') == 3 || !session('user_rank')){
    header('Location:'. admin_url('login'));
    exit;
}

if(!permission('menus', 'show')){
    die('Bu alanı görüntülemeye yetkiniz yok!');
}
if (post('submit')) {

    permission('menus', 'add');
    $menu = [];
    $menu_title = post('menu_title');
     unset($_POST['submit']);

    if (count(array_filter(post('title'))) == 0) {
        $error = 'En az 1 menü içeriği girmeniz gerekiyor';
    } else if (!$menu_title) {
        $error = 'Lütfen menü başlığı girin!';
    }  else {
        $urls = post('url');
        foreach (post('title') as $key => $title) {
            $arr = [
                'title' => $title,
                'url' => $urls[$key]
            ];
            if (post('sub_title' . $key)) {
                $submenu = [];
                $sub_urls = post('sub_url' . $key);
                foreach (post('sub_title' . $key) as $k => $subtitle) {
                    $submenu[] = [
                        'title' => $subtitle,
                        'url' => $sub_urls[$k]
                    ];
                }
                $arr['submenu'] = $submenu;
            }
            $menu[] = $arr;
        }
        //Veri tabanı kaydı
        $result = Menu::addMenu([
            'menu_title' => $menu_title,
            'menu'       => $menu
            ]);
       if($result){
           $success = 'Menü eklendi!';
           header('Location:'.admin_url('menus'));
       }
    }
}

require admin_view('add-menu');