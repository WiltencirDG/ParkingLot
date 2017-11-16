<?php

require_once ('db.php');
$db = new Db();

if (isset($_POST['vaga_id'])) {
    $vaga_id = $_POST['vaga_id'];
    $query = $db->prepare("SELECT e.*,v.* FROM vagas v INNER JOIN estar e ON v.vaga_id = e.id WHERE v.vaga_id = :vaga_id");
    $query->bindParam(":vaga_id",$vaga_id,PDO::PARAM_INT);
    $query->execute();
    print_r($query->fetchAll(PDO::FETCH_ASSOC));
} else {
    echo "not checked";
}
