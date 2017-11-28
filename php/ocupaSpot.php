<?php

require_once('db.php');
$db = new Db();

if (isset($_POST['placa'])) {
    if (isset($_POST['modelo'])) {
        if (isset($_POST['vaga'])) {
            if(isset($_POST['checkin'])){
                $vaga = $_POST['vaga'];
                $placa = $_POST['placa'];
                $modelo = $_POST['modelo'];
                $checkin = $_POST['checkin'];

                $query = $db->prepare("UPDATE vagas,estar SET placa = :placa, modelo = :modelo, checkin = :checkin ,status = 1 WHERE vaga_id = :vaga and id_estar = :vaga");
                $query->bindParam(":vaga", $vaga, PDO::PARAM_INT);
                $query->bindParam(":placa", $placa, PDO::PARAM_STR);
                $query->bindParam(":modelo", $modelo, PDO::PARAM_STR);
                $query->bindParam(":checkin", $checkin, PDO::PARAM_STR);
                $query->execute();

            }else{
                return "Problema na data";
            }
        } else {
            return "Problema na Vaga";
        }
    } else {
        return "Problema no Modelo";
    }
} else {
    return "Problema na Placa";
}





