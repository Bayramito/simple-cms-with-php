<?php

class User
{
    public static function userExist($username, $email = '@@')
    {
        global $db;
        $query = $db->prepare('SELECT * FROM users WHERE username = :username || email = :email');
        $query->execute([
            'username' => $username,
            'email' => $email
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public static function Register($data)
    {
        global $db;
        $query = $db->prepare('INSERT INTO users SET username = :username, password = :password, email = :email, user_url = :user_url, user_avatar = :user_avatar');
        return $query->execute($data);
    }

    public static function Login($data)
    {
        $_SESSION['user_id'] = $data['user_id'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['user_rank'] = $data['user_rank'];
        isset($data['permissions']) ? $_SESSION['permissions'] = $data['permissions'] : NULL;
    }

    public static function Update($data)
    {
        global $db;
        $sql = 'UPDATE users SET username = :username, email = :email, user_url = :user_url, user_rank = :user_rank, permissions = :permissions WHERE user_id = :user_id ';
        $query = $db->prepare($sql);
        return $query->execute($data);
    }

    public static function listUsers($id = NULL)
    {
        global $db;
        $sql = 'SELECT * FROM users';
        if (isset($id)) {
            $sql .= ' WHERE user_id = ' . $id . '';
        }
        $query = $db->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);

    }
}