$(document).ready(function() {

	$('.obj').hover(function(){
		$(this).css("background-color","red");
		$(this).children(".spot").css("color","white");

	},function(){
		$(this).css("background-color","white");
		$(this).children(".spot").css("color","red");
	});


	$('.obj').on("click",function(){

	});

	

});
