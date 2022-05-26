var ficha = {};
ficha.alta = (nombre, edad, dedicación, fecha, lugar, razón, callback) => {
	var date = new Date(fecha);
	fecha = date.getDate() + '/' + (date.getMonth() + 1) + '/' + date.getFullYear();
	$.ajax({
		method: "POST",
		url: "http://localhost/segcab/php/ficha/alta.php",
		success : callback,
		data: {
			nombre_detenido: nombre,
			fecha_detencion: fecha,
			lugar_detencion: lugar,
			razon_detencion: razón,
			edad_detenido: edad,
			dedicacion_detenido: dedicación
		},
		error: (jqXHR, textStatus, errorThrown) => {
			$('#altaFicha').trigger('reset');
			console.log(jqXHR, textStatus, errorThrown);
		}
	});
}
ficha.lista = (callback) => {
	$.ajax({
		method: "POST",
		url: "http://localhost/segcab/php/ficha/lista.php",
		success : callback,
		error: (jqXHR, textStatus, errorThrown) => {
			console.log(jqXHR, textStatus, errorThrown);
		}
	});
}