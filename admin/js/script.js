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
<<<<<<< HEAD
		current_state = this.className.split(" ")[1]; 
		day = this.className.split(" ")[2]; 
=======
		current_state = this.className.split(" ")[1];
		day = this.className.split(" ")[2];
>>>>>>> FETCH_HEAD
		data[day] = current_state;
		//Tengo datos dia y current_states
	});

	//Envía datos al servidor
	function SendData(datos){
		this.datos = datos;
	}


	SendData.prototype.ajaxCall = function(){
		var datos = this.datos;
		var form = $( "#profile_form" ).serializeArray();
		form = JSON.stringify(form);
		datos["formData"] = form;

		$.post( "../scripts/createUser.php", datos)
  			.done(function(data) {
<<<<<<< HEAD
    	
=======

>>>>>>> FETCH_HEAD
  		});
	}

	document.getElementById("availability_btn").addEventListener("click", function(event){
		//envio los datos as servidor
		event.preventDefault();
		var sendData = new SendData(data);
		$( ".circle" ).each(function( index ) {
			current_state = this.className.split(" ")[1];
<<<<<<< HEAD
			day = this.className.split(" ")[2]; 
=======
			day = this.className.split(" ")[2];
>>>>>>> FETCH_HEAD
			data[day] = current_state;
		});
		sendData.ajaxCall(data);
	});

<<<<<<< HEAD
});
=======
});
>>>>>>> FETCH_HEAD
