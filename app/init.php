<?php
session_start();
ob_start();
date_default_timezone_set('Europe/Sofia');
//Classları Yükle
function loadClasses($className)
{
    require __DIR__ . '/classes/' . strtolower($className) . '.php';
}

spl_autoload_register('loadClasses');

//Config Dosyası
$config = require __DIR__ . '/config.php';

//Veritabanı Bağlantısı
try {
    $db = new PDO('mysql:host=' .$config['db']['host'] .';dbname='.$config['db']['name'],$config['db']['user'],$config['db']['pass']);

} catch (PDOException $e){
    $error = $e->getMessage();
    echo $error;
}
//Helper Load
foreach(glob(__DIR__ . '/helper/*.php') as $helperFile )
{
    require $helperFile;
}

//Settings Load
require __DIR__ . '/settings.php';
