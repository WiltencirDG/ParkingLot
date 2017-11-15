<!DOCTYPE html>

<html lang='en'>
<header>
    <title>Estacionamento</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</header>
<body>
<?php
require_once("php/db.php");
$db = new Db();

?>
<div class="container">
    <div class="row">
        <div class="col-md-9 col-md-offset-1">
            <div class="panel panel-heading">
                <h2 class="text-center head">Estacione Seguro, Estacione Melhor!</h2><br>
                <p class="text-center head">Escolha a vaga</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-9 col-md-offset-1">
            <div class="panel panel-spots">
                <?php
                foreach ($db->initPark() as $spot) {
                    if ($spot['status'] == 0){ ?>
                    <div class="obj" id="<?php print_r($spot['id']); ?>">
                        <img class="car" src="img/car.png">
                        <p class="spot text-center"><?php print_r($spot['id']); ?></p>
                    </div>
                <?php
                    }else{?>
                        <div class="obj" id="<?php print_r($spot['id']); ?>">
                            <img class="car" src="img/car-busy.png">
                            <p class="spot text-center"><?php print_r($spot['id']); ?></p>
                        </div>
                    <?php }} ?>
            </div>
        </div>
    </div>
</div>


<script src="js/scripts.js"></script>
</body>
</html>