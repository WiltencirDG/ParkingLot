<?php

Class Db extends PDO
{
    public $db;

    public function __construct($dbuser = 'root', $dbpass = 'root')
    {
        parent::__construct("mysql:host=localhost;dbname=estacionamento", $dbuser, $dbpass);
    }

    function initPark()
    {
        try {
            $query = $this->prepare("SELECT * FROM estar");
            $query->execute();
            return $query->fetchAll(\PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            return "ERROR : " . $e->getMessage();
        }
    }

}
