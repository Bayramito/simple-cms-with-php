<?php

$type = route(1);
$json = [];
if(!$type){
    exit;
}
if(file_exists(controller('api/' . $type))){
    require controller('api/' . $type);
}
echo json_encode($json);