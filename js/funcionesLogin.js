

$(document).ready(function(){
	$('#txt_rut').mask('00.000.000-A');
});

function iniciar(){
	var rut = $('#txt_rut').val();
	var pas = $("#txt_pas").val();

	$.ajax({
		url: 'buscar_trabajador.php',
		type: "POST",
		data: {rut:rut,pas:pas},
		success: function(datos){
			resp = datos.replace(/^\s+/, '');
			if(resp == "ok"){
			window.top.location.replace("principal.html");
			}else{
				alert(datos);
			}
		}
	});

	return false;
}


