<?php

require __DIR__ . '/app/init.php';
$route = explode('?',$_SERVER['REQUEST_URI']);
$route = array_filter(explode('/', $route[0]));

if (SUBFOLDER == true) {
    array_shift($route);
}
if (!route(0)) {
    $route[0] = 'index';
}

if (!file_exists(controller(route(0)))) {
    $route[0] = '404';
}

if(setting('maintenence_mode') == 1 && route(0) != 'admin'){
    $route[0] = 'maintenence_mode';
}
require controller(route(0));