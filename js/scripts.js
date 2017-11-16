$(document).ready(function() {

	$('.obj').hover(function(){
		$(this).css("background-color","red");
		$(this).children(".spot").css("color","white");

	},function(){
		$(this).css("background-color","white");
		$(this).children(".spot").css("color","red");
	});


	$('.obj').on("click",function(){
        var id = $(this).attr('id');
        var status = $(this).attr('status');

		document.querySelector('.num').innerHTML = id;

		$.ajax({
			url:'../php/checkSpot.php',
			data:{"vaga_id":id},
			type:"POST",
			success: function (resp) {
                PEGAR PLACA E MODELO DO ARRAY RESP
            }
		});

        if(status == '0'){
            $( "#pop" ).dialog();
        }else if (status == '1'){
            $( "#pop1" ).dialog();

        }
    });

	$('.popForm').on("submit",function (e) {
		var id = $(this).parent().children('h3').children('span').text();
		$.ajax({
			url:"../php/clearSpot.php",
			type:"POST",
			data:{'id':id},
			success:function (c) {
                console.log(c);
            }
		});
		e.preventDefault();
    })
});
