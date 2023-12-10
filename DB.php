<?php
class DB
{

    private static $conn;

    public function __construct()
    {
        // Aquí configuras tu conexión a la base de datos
        self::$conn = new PDO('mysql:host=localhost;dbname=everythinghere', 'omar', "root");
        var_dump(self::$conn);
    }

    public function getConnection()
    {
        return self::$conn;
    }
}
