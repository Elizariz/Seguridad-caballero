var empleado = {};
empleado.listar = (callback) => {
	$.ajax({
		method: "POST",
		url: "http://localhost/segcab/php/empleados/lista.php",
		success : callback,
		error: (jqXHR, textStatus, errorThrown) => {
			console.log(jqXHR, textStatus, errorThrown);
		}
	});
}
empleado.alta = (nombre, correo, curp, rfc, contratacion, nacimiento) => {
	$.ajax({
		method: "POST",
		url: "http://localhost/segcab/php/empleados/alta.php",
		data: {
			nombre_empleado: nombre,
			correo: correo,
			curp: curp,
			rfc: rfc,
			fecha_contratacion: contratacion,
			fecha_nacimiento: nacimiento
		},
		success : (response) => {
			console.log(response);
			location.reload();
		},
		error: (jqXHR, textStatus, errorThrown) => {
			console.log(jqXHR, textStatus, errorThrown);
		}
	});
}