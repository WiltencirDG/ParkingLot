<!DOCTYPE html>

<html lang='en'>
<header>
    <title>Estacionamento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
                    if ($spot['status'] == 0) { ?>
                        <div class="obj" id="<?php print_r($spot['id']); ?>" status="0">
                            <img class="car" src="img/car.png">
                            <p class="spot text-center"><?php print_r($spot['id']); ?></p>
                        </div>
                        <?php
                    } else {
                        ?>
                        <div class="obj" id="<?php print_r($spot['id']); ?>" status="1">
                            <img class="car" src="img/car-busy.png">
                            <p class="spot text-center"><?php print_r($spot['id']); ?></p>
                        </div>
                    <?php }
                } ?>
            </div>

            <div id="pop" style="display: none">
                <div class="col-md-12 popform">
                    <h3 class="text-center">Vaga #<span class="num"></span></h3>
                    <form class="popForm">
                        <label for="placa">Placa do Veículo</label>
                        <input type="text" id="placa" name="placa" class="form-control"><br>
                        <label for="modelo">Modelo do Veículo</label>
                        <input type="text" id="modelo" name="modelo" class="form-control"><br>
                        <button type="submit" id="btnSub" class="btn btn-primary btn-block">Ocupar Vaga</button>
                    </form>
                </div>
            </div>
            <div id="pop1" style="display: none">
                <div class="col-md-12 popform">
                    <h3 class="text-center">Vaga #<span class="num"></span></h3>
                    <form class="popForm">
                        <label>Vaga ocupada por:</label><br><br>
                        <label>Placa: </label><p id="placa"></p>
                        <label>Modelo: </label><p id="modelo"></p>
                        <label>Hora Entrada: </label><p id="hora"></p><br>
                        <button type="submit" id="btnSub" class="btn btn-primary btn-block">Desocupar Vaga</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="js/scripts.js"></script>
</body>
</html>