$(document).ready(function(){
	Carga();
});
function Carga()
{
	var tablaDatos = $("#datos");
	var route = "/tipos";
	$("#datos").empty();
	$.get(route, function(res){
		$(res).each(function(key,value){
			tablaDatos.append("<tr><td>"+value.tipo+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value='"+value.id+"' OnClick='Eliminar(this)'>Eliminar</button></td></tr>");
		});
	});
}
function Eliminar(btn)
{
	var route = "/tipo/"+btn.value+"";
	var token = $("#token").val();
	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			Carga();
			$("#msj-success").fadeIn();
		}
	});

}
function Mostrar(btn)
{
	var route= "/tipo/"+btn.value+"/edit";
	$.get(route, function(res){
		$("#tipo").val(res.tipo);
		$("#id").val(res.id);
	});
}
$("#actualizar").click(function(){
	var value = $("#id").val();
	var dato = $("#tipo").val();
	var route = "/tipo/"+value+"";
	var token = $("#token").val();
	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data: {tipo: dato},
		success: function(){
			Carga();
			$("#myModal").modal('toggle');
			$("#msj-success").fadeIn();
		}
	});
});