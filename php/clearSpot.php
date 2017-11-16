<?php

require_once ('db.php');
$db = new Db();

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $query = $db->prepare("DELETE FROM vagas WHERE vaga_id=:vaga_id");
    $query->bindParam(":vaga_id",$id,PDO::PARAM_INT);
    $query->execute();
    return "Done";
} else {
    return "DEU RUIM";
}
