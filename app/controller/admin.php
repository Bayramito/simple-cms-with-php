<?php

if (!route(1)) {
    $route[1] = 'index';
}
if (!file_exists(admin_controller(route(1)))) {
    $route[1] = '404';
}

$menus = [
    'index' => [
        'title' => 'Anasayfa',
        'icon' => 'tachometer',
        'permissions' => [
            'show' => 'Görüntüleme',
        ]
    ],
    'users' => [
        'title' => 'Üyeler',
        'icon' => 'user',
/*        'submenu' => [
            'edit-user' => 'Üye Düzenle',
            'users' => 'Üye Listele'
        ],*/
        'permissions' => [
            'show' => 'Görüntüleme',
            'edit' => 'Düzenleme',
            'delete' => 'Silme'
        ]
    ],
    'contact' => [
        'title' => 'İletişim Mesajları',
        'icon' => 'envelope',
        'permissions' => [
            'show' => 'Görüntüleme',
            'read' => 'Okunma',
            'edit' => 'Düzenleme',
            'delete' => 'Silme',
        ]
    ],
    'menus' => [
        'title' => 'Menü Yönetimi',
        'icon' => 'bars',
        'permissions' => [
            'show' => 'Görüntüleme',
            'edit' => 'Düzenleme',
            'add' => 'Ekleme',
            'delete' => 'Silme',
        ]
    ],
    'settings' => [
        'title' => 'Ayarlar',
        'icon' => 'cog',
        'permissions' => [
            'show' => 'Görüntüleme',
            'edit' => 'Düzenleme'
        ]
    ]
];


require admin_controller(route(1));