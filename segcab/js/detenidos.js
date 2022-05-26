var detenido = {};
detenido.listar = (callback) => {
	$.ajax({
		method: "POST",
		url: "http://localhost/segcab/php/detenidos/lista.php",
		success : callback,
		error: (jqXHR, textStatus, errorThrown) => {
			console.log(jqXHR, textStatus, errorThrown);
		}
	});
}