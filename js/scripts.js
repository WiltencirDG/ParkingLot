$(document).ready(function () {

    $('.obj').hover(function () {
        $(this).css("background-color", "red");
        $(this).children(".spot").css("color", "white");

    }, function () {
        $(this).css("background-color", "white");
        $(this).children(".spot").css("color", "red");
    });


    $('.obj').on("click", function () {
        var id = $(this).attr('id');
        $.ajax({
            url: '../php/checkSpot.php',
            data: {"vaga_id": id},
            type: "POST",
            success: function (resp) {
                var obj = $.parseJSON(resp);
                $(".num").html(id);
                if (obj[0]["status"] === "1") {

                    $("#placaS").html(" " + obj[0]["placa"]);
                    $("#modeloS").html(" " + obj[0]["modelo"]);
                    $("#hora").html(" " + obj[0]["checkin"]);

                    $("#pop1").dialog();
                    if ($("#pop").dialog('instance')) {
                        $("#pop").dialog('close');
                    }
                } else {
                    $("#pop").dialog();
                    if ($("#pop1").dialog('instance')) {
                        $("#pop1").dialog('close');
                    }
                }
            }

        });

    });

    $('.popFormOcup').on("submit", function (e) {
        $('#pop1').dialog('close');
        $("#pop2").dialog();
        $.ajax({
            success: function () {

                var checkin = $('#hora').text();
                $('#horaO').html(checkin);
                $('#placaO').html($('#placaS').text());
                var d = new Date();
                var checkout = " " + d.getDate()+"/"+(d.getMonth()+1)+" "+d.toTimeString().substring(0,8);
                $('#horasO').html(checkout);

                function timediff(d1, d2) {
                    var year = new Date().getFullYear();
                    var month = d1.substring(4,6);
                    var day = d1.substring(1,3);
                    var hours = d1.substring(7,9);
                    var minutes = d1.substring(10,12);
                    var seconds = d1.substring(13,16);
                    d1 = new Date(year, month, day, hours, minutes, seconds);

                    var year2 = new Date().getFullYear();
                    var month2 = d2.substring(5,7);
                    var day2 = d2.substring(2,4);
                    var hours2 = d2.substring(8,10);
                    var minutes2 = d2.substring(11,13);
                    var seconds2 = d2.substring(14,16);
                    d2 = new Date(year2, month2, day2, hours2, minutes2, seconds2);

                    return Math.abs(d1-d2) / 36e5;
                }

                var df = timediff(checkout,checkin);

                console.log(df);

                if(df <= 1){
                    $("#payO").html("R$5.00");
                }else if(df === 2){
                    $("#payO").html("R$10.00");
                }else{
                    $("#payO").html("R$30.00");
                }


            }
        });


        e.preventDefault();
    });

    $('.popFormPay').on("submit", function (e) {
        var vaga = $('#vaga').text();

        if (vaga < 9) {
            vaga.substring(0, 2);
        } else {
            vaga.substring(0, 1);
        }


        $.ajax({
            url: "../php/clearSpot.php",
            type: "POST",
            data: {'id': vaga},
            success: function (resp) {
                $('#pop2').dialog("close");
                $('div#' + vaga).children('img').attr('src', 'img/car.png');
            }
        });

        e.preventDefault();
    });

    $('.popFormFree').on("submit", function (e) {

        var vaga = $('#vaga').text();

        console.log(vaga);

        if (vaga < 9) {
            vaga.substring(0, 2);
        } else {
            vaga.substring(0, 1);
        }

        console.log(vaga);

        var placa = $("#placa").val();
        var modelo = $("#modelo").val();
        var d = new Date();
        var checkin = " " + d.getDate()+"/"+(d.getMonth()+1)+" "+d.toTimeString().substring(0,8);

        $.ajax({
            url: "../php/ocupaSpot.php",
            type: "POST",
            data: {'vaga': vaga, 'placa': placa, 'modelo': modelo, 'checkin':checkin},
            success: function (e) {
                $("#pop").dialog('close');
                $('div#' + vaga).children('img').attr('src', 'img/car-busy.png');
            }
        });
        e.preventDefault();
    });

});

