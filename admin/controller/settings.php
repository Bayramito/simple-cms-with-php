<?php

if (session('user_rank') == 3 || !session('user_rank')) {
    header('Location:' . admin_url('login'));
    exit;
}
if (!permission('settings', 'show')) {
    die('Bu alanı görüntülemeye yetkiniz yok!');
}

foreach (glob(PATH . '/app/view/*/') as $file) {
    $file = array_filter(explode('/', $file));
    $themes[] = end($file);
}

if (post('submit')) {
    if (!permission('settings', 'edit')) {
        die('Bu alanı görüntülemeye yetkiniz yok!');
    } else {
        $settings = '<?php' . PHP_EOL . PHP_EOL;

        foreach (post('settings') as $key => $setting) {
            $settings .= '$setting["' . $key . '"] = "' . $setting . '"; ' . PHP_EOL;
        }
        file_put_contents(PATH . '/app/settings.php', $settings);
        $success = 'Ayarlar kaydediliyor...';
        header('Refresh:1;url=' . admin_url('settings'));
    }
}

require admin_view('settings');
