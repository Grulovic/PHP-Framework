$(document).ready(function(){

	$("h1").click(function(){
	
		var current_color = $(this).css("color");

		if( current_color == "rgb(0, 0, 0)" ){
			$(this).css("color","white").css("background-color","dimgray");
		}
		else{
			$(this).css("color","black").css("background-color","darkgray");
		}

		$(this).next().slideToggle(1000);

	});
	
});