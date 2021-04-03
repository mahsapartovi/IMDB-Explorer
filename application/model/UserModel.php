<?php


namespace application\model;

class UserModel extends Model
{

    // select user from DB to check if user exists or not
    public function checkUserExists($request)
    {
        $db = new Model();
        $user = $db->select("SELECT * FROM `users` WHERE (`email` = ?); ", [$request['email']])->fetch();
        if ($user != null)
            return false;
        else
            return true;
    }

    public function checkUserNameExists($request)
    {
        $db = new Model();
        $user = $db->select("SELECT * FROM `users` WHERE (`username` = ?); ", [$request['username']])->fetch();
        if ($user != null)
            return false;
        else
            return true;
    }

    // store user in DB
    public function storeUser($request,$token)
    {

        $db = new Model();
        $db->insert('users', ['username', 'email', 'password', 'token'], [$_POST['username'], $_POST['email'], $_POST['password'], $token]);
        return true;
    }

    public function checkAdmin()
    {
        $db = new Model();
        $user = $db->select("SELECT * FROM `users` WHERE `id`=? ;", [$_SESSION['userId']])->fetch();
        if ($user != null) {
            return true;
        } else
            return true;
    }
}