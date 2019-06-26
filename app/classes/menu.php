<?php

class Menu{
    public static function addMenu($data){
        global $db;
        $query = $db->prepare('INSERT INTO menus SET menu_title = :menu_title, menu_content = :menu_content ');
        return $query->execute([
            'menu_title' => $data['menu_title'],
            'menu_content' => json_encode($data['menu'],true)
        ]);
    }

    public static function updateMenu($data){
        global $db;
        $query = $db->prepare('UPDATE menus  SET menu_title = :menu_title, menu_content = :menu_content WHERE menu_id = :menu_id ');
        return $query->execute([
            'menu_id' => $data['id'],
            'menu_title' => $data['menu_title'],
            'menu_content' => json_encode($data['menu'], true)
        ]);
    }

    public static function listMenu(){
        global $db;
        $query = $db->prepare('SELECT * FROM menus ORDER BY menu_id DESC');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}