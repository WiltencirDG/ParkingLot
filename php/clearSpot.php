<?php

require_once ('db.php');
$db = new Db();

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $query = $db->prepare("UPDATE vagas,estar SET placa = '', modelo = '', checkin = '' ,status = 0 WHERE vaga_id = :vaga and id_estar = :vaga;");
    $query->bindParam(":vaga", $id, PDO::PARAM_INT);
    $query->execute();
}else if(isset($_POST['checkin'])){
    $idvag = $_POST['checkin'];
    $time = $db->prepare("SELECT checkin FROM vagas WHERE vaga_id = :vaga");
    $time->bindParam(":vaga",$idvag,PDO::PARAM_INT);
    $time->execute();
    print_r(json_encode($time->fetchAll(PDO::FETCH_ASSOC)));
}
