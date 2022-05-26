var curso = {};
curso.listar = (callback) => {
	$.ajax({
		method: "POST",
		url: "http://localhost/segcab/php/cursos/lista.php",
		success : callback,
		error: (jqXHR, textStatus, errorThrown) => {
			console.log(jqXHR, textStatus, errorThrown);
		}
	});
}
curso.alta = (fechaInicio, fechaFin, nombre, horario, instructor, callback) => {
	$.ajax({
		method: "POST",
		url: "http://localhost/segcab/php/cursos/alta.php",
		data: {
			fecha_inicio: fechaInicio,
			fecha_final: fechaFin,
			nombre_curso: nombre,
			horario: horario,
			instructor: instructor
		},
		success : callback,
		error: (jqXHR, textStatus, errorThrown) => {
			location.reload();
			console.log(jqXHR, textStatus, errorThrown);
		}
	});
}