<?php

require_once ("db.php");
$db = new Db();

function getVagaData($data){
    return $this->$data;
}

function setVagaData(){
    $id = $_POST['id'];
    $vaga_id = $_POST['vaga_id'];
    $placa = $_POST['placa'];
    $modelo = $_POST['modelo'];
    $checkin = $_POST['checkin'];
}