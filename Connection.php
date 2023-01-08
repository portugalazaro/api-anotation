<?php

class Connection
{
    public static function connection()
    {
        $pdo = new PDO("mysql:host=localhost;dbname=devsnote", "root", "adminlpds");
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        return $pdo;
    }
}