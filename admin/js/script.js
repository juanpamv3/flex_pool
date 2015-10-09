$(function(){

	var disponibilidad = ["booked","half_booked","available"];

	$(".circle").on("click", function(event){
		event.preventDefault();
		var current_state = this.className.split(" ")[1];
		var circle = $(this);
		for(var i = 0; i < disponibilidad.length; i++){
			if(disponibilidad[i] === current_state){
				
				if(i < 2){
					circle.css("background","url(../images/" + disponibilidad[i + 1] + ".png)");	
				}else{
					circle.css("background","url(../images/" + disponibilidad[0] + ".png)");
				}
			}
		}
	});
});