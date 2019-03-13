<?php
include 'classes/Database.php';
class Model extends Database
{
    public function getLogin()
    {
        $users = self::query("SELECT * FROM users WHERE username = :username AND password = :password",array(':username' => $_GET['username'], ':password' => $_GET['password']));

        if(!empty($users)) {
            return true;
        } else {
            return false;
        }
    }

    public function showArtists()
    {
        $artists = self::query("SELECT * FROM artists");
    }
}