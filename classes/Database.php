<?php
class Database {

    //Database variables
    public static $host = "127.0.0.1";
    public static $dbName = "songapp";
    public static $username = "root";
    public static $password = "";

    private static function connect() {
        //Create command for database connection
        $pdo = new PDO("mysql:host=".self::$host.";dbname=".self::$dbName.";charset=utf8", self::$username, self::$password);
        //Add attributes (in this case it shows a error if the connection failed).
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    public static function query($query, $params = array()) {
        //Connect with database
        $statement = self::connect()->prepare($query);
        $statement->execute($params);
        if (explode(' ', $query)[0] == 'SELECT') {
            $data = $statement->fetchAll();
            return $data;
        }
    }
}