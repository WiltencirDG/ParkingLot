<?php

Class Db extends PDO
{
    private static $db;

    public function __construct()
    {
        try {
            $user = "root";
            $pass = "root";
            self::$db = new PDO("mysql:host=localhost;dbname=estacionamento", $user, $pass);

        } catch (PDOException $e) {
            return "Erro ao se conectar! ERROR: " . $e->getMessage();
        }
        return self::$db;
    }

    function initPark()
    {
        $query = self::$db->prepare("SELECT * FROM estar");
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }

}
