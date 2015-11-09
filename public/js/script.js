$("#registro").click(function(){
	var dato = $("#tipo").val();
	var route = "/tipo";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data:{tipo: dato},

		success:function(){
			$("#msj-success").fadeIn();
		},
		error:function(msj){
			$("#msj").html(msj.responseJSON.tipo);
			$("#msj-error").fadeIn();
		}
	});
});
