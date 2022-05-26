var cliente = {};
cliente.alta = (domicilio, nombre_cliente, callback) => {
	$.ajax({
		method: "POST",
		url: "http://localhost/segcab/php/clientes/alta.php",
		data: {
			domicilio: domicilio,
			nombre_cliente: nombre_cliente
		},
		success : callback,
		error: (jqXHR, textStatus, errorThrown) => {
			location.reload();
			console.log(jqXHR, textStatus, errorThrown);
		}
	});
}
cliente.listar = (callback) => {
	$.ajax({
		method: "POST",
		url: "http://localhost/segcab/php/clientes/lista.php",
		success: callback
	});
}