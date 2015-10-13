$(function(){

	var disponibilidad = ["booked","half_booked","available"];
	var data = {};

	$(".circle").on("click", function(event){
		event.preventDefault();
		var current_state = this.className.split(" ")[1];
		var current_className = this.className;
		var day;
		var circle = $(this);
		for(var i = 0; i < disponibilidad.length; i++){
			if(disponibilidad[i] === current_state){
				if(i < 2){
					circle.css("background","url(../images/" + disponibilidad[i + 1] + ".png)");
					current_className = current_className.replace(current_state, disponibilidad[i + 1]);
				}else{
					circle.css("background","url(../images/" + disponibilidad[0] + ".png)");
					current_className = current_className.replace(current_state, disponibilidad[0]);
				}
			}
		}
		this.className = current_className;
		current_state = this.className.split(" ")[1]; 
		day = this.className.split(" ")[2]; 
		data[day] = current_state;
		console.log(data);
		//Tengo datos dia y current_states
	});

	document.getElementById("availability_btn").addEventListener("click", function(){
		//envio los datos as servidor
		$.ajax({
			url: "https://eddesign.co",
			method: "POST",
			data: data
		})
		 .done(function(){
		 	console.log('success');
		 });
	});

});