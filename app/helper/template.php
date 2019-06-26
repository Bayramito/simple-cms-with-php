<?php

function menu($menuID){
    global $db;
    $query = $db->prepare('SELECT * FROM menus WHERE menu_id = :menu_id');
    $query->execute([
        'menu_id' => $menuID
    ]);
    $row = $query->fetch(PDO::FETCH_ASSOC);
    if($row){
        $menu_content = json_decode($row['menu_content'],true);
    }
    return $menu_content;
}
