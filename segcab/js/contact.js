function sendContact(){
	var email = $("#ctc_email").val(), subject = $("#ctc_subject").val(), message = $("#ctc_message").val();
	if(!email || !subject || !message){
		writeMess("No todos los campos han sido llenados");
	}else
		$.ajax({
			"method" : "POST",
			data : {
				email : email,
				subject : subject,
				message : message
			},
			url : "http://localhost/segcab/php/contact.php",
			success : (data) => {
				if(data)
					writeMess("Mensaje enviado correctamente");
				else
					writeMess("El mensaje no pudo ser enviado, intente más tarde");
			},
			error : (jqXHR, textStatus, errorThrown) => {
				console.log(jqXHR, textStatus, errorThrown);
				writeMess("El mensaje no pudo ser enviado, intente más tarde");
			}
		});
}
function writeMess(message){
	$("#message").text(message);
	setTimeout( () => $("#message").text(""), 5000);
}