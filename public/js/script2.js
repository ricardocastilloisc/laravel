$(document).ready(function(){
	var tablaDatos = $("#datos");
	var route = "http://localhost:8000/tipos";
	$.get(route, function(res){
		$(res).each(function(key,value){
			tablaDatos.append("<tr><td>"+value.tipo+"</td><td><button class='btn btn-primary'>Editar</button><button class='btn btn-danger'>Eliminar</button></td></tr>");
		});
	});
});