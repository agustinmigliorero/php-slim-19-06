<?php

class DB {
    private static $user = "root";
    private static $pass = "";
    public static function connection() {
            $dbh = new PDO('mysql:host=localhost;dbname=videogame_db', "root", "");

            return $dbh;
    }
}