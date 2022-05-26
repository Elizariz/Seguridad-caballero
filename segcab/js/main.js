function cerrar_sesion(){
	$.ajax({
		method : "POST",
		url : "http://localhost/segcab/php/usuarios/logout.php",
		success : (data) => {
			location.reload();
		},
		error : (jqXHR, textStatus, errorThrown) => {
			console.log(jqXHR, textStatus, errorThrown);
		}
	});
}