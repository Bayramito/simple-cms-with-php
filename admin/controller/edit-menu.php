<?php

if (session('user_rank') == 3 || !session('user_rank')) {
    header('Location:' . admin_url('login'));
    exit;
}

if (!permission('menus', 'show')) {
    die('Bu alanı görüntülemeye yetkiniz yok!');
    exit;
}

$query = $db->prepare('SELECT * FROM menus WHERE menu_id = :menu_id');
$query->execute([
    'menu_id' => get('id')
]);
$row = $query->fetch(PDO::FETCH_ASSOC);

if (!$row) {
    header('Location:' . admin_url('menus'));
    exit;
}
$menu_content = json_decode($row['menu_content'], true);

//UPDATE MENU

if (post('submit')) {
    if (!permission('menus', 'edit')) {
        $error = 'Menü düzenleme yetkiniz yok!';
    } else {
        $menu = [];
        $menu_title = post('menu_title');

        if (count(array_filter(post('title'))) == 0) {
            $error = 'En az 1 menü içeriği girmeniz gerekiyor';
        } else if (!$menu_title) {
            $error = 'Lütfen menü başlığı girin!';
        } else {
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
            $result = Menu::updateMenu([
                'id' => get('id'),
                'menu_title' => $menu_title,
                'menu' => $menu
            ]);
            if ($result) {
                $success = 'Menü eklendi!';
                header('Location:' . admin_url('menus'));
            }
        }
    }
}
require admin_view('edit-menu');