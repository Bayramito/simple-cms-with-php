<?php

if (!permission(get('table'), 'delete')) {
    die('Bu alanı görüntülemeye yetkiniz yok!');
    exit;
} else {
    if (get('id')) {
        $db->query('DELETE FROM ' . get('table') . ' WHERE ' . get('column') . ' = ' . get('id') . ' ');
        header('Location:' . (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : admin_url()));

    } else {
        $db->query('DELETE FROM ' . get('table') . ' WHERE ' . get('column') . ' = ' . get('id') . ' ');
        header('Location:' . (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : admin_url()));
        exit;
    }
}