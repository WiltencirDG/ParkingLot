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
            <div class="panel panel-heading text-center">
                <h2 class="text-center head">Estacione Seguro, Estacione Melhor!</h2><br>
                <div class="">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Hora</th>
                            <th>Valor</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Até 1 hora</td>
                            <td>R$5.00</td>
                        </tr>
                        <tr>
                            <td>2 horas</td>
                            <td>R$10.00</td>
                        </tr>
                        <tr>
                            <td>Acima de 2 horas</td>
                            <td>R$30.00</td>
                        </tr>
                        </tbody>
                    </table>
                </div><br><br>
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
                        <div class="obj" id="<?php print_r($spot['id_estar']); ?>">
                            <img class="car" src="img/car.png">
                            <p class="spot text-center"><?php print_r($spot['id_estar']); ?></p>
                        </div>
                        <?php
                    } else {
                        ?>
                        <div class="obj" id="<?php print_r($spot['id_estar']); ?>">
                            <img class="car" src="img/car-busy.png">
                            <p class="spot text-center"><?php print_r($spot['id_estar']); ?></p>
                        </div>
                    <?php }
                } ?>
            </div>

            <div id="pop" style="display: none">
                <div class="col-md-12 popform">
                    <h3 class="text-center">Vaga #<span class="num" id="vaga"></span></h3>
                    <form class="popFormFree">
                        <label for="placa">Placa do Veículo</label>
                        <input type="text" id="placa" name="placa" class="form-control" required="required"><br>
                        <label for="modelo">Modelo do Veículo</label>
                        <input type="text" id="modelo" name="modelo" class="form-control" required="required"><br>
                        <button type="submit" id="btnSub" class="btn btn-primary btn-block">Ocupar Vaga</button>
                    </form>
                </div>
            </div>

            <div id="pop1" style="display: none">
                <div class="col-md-12 popform">
                    <h3 class="text-center">Vaga #<span class="num"></span></h3>
                    <form class="popFormOcup">
                        <label>Vaga ocupada por:</label><br><br>
                        <label>Placa: </label><span id="placaS"></span><br>
                        <label>Modelo: </label><span id="modeloS"></span><br>
                        <label>Hora Entrada: </label><span id="hora"></span><br><br>
                        <button type="submit" id="btnSub" class="btn btn-primary btn-block">Desocupar Vaga</button>
                    </form>
                </div>
            </div>

            <div id="pop2" style="display: none">
                <div class="col-md-12 popform">
                    <h3 class="text-center">Vaga #<span class="num"></span></h3>
                    <form class="popFormPay">
                        <label>Vaga ocupada por:</label><br><br>
                        <label>Placa: </label><span id="placaO"></span><br>
                        <label>Hora Entrada: </label><span id="horaO"></span><br>
                        <label>Hora Saída: </label><span id="horasO"></span><br>
                        <label>Total à pagar: </label><span id="payO"></span><br><br>
                        <button type="submit" id="btnSub" class="btn btn-primary btn-block">Receber Dinheiro</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="js/scripts.js"></script>
</body>
</html>