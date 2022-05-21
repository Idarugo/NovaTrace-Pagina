

var Fn = {
	// Valida el rut con su cadena completa "XXXXXXXX-X"
	validaRut : function (rutCompleto) {
		rutCompleto = rutCompleto.replace(".","");
		rutCompleto = rutCompleto.replace(".","");
		rutCompleto = rutCompleto.replace("‐","-");
		
		if (!/^[0-9]+[-|‐]{1}[0-9kK]{1}$/.test( rutCompleto ))
			return false;
		var tmp 	= rutCompleto.split('-');
		var digv	= tmp[1]; 
		var rut 	= tmp[0];
		if ( digv == 'K' ) digv = 'k' ;
		
		return (Fn.dv(rut) == digv );
	},
	dv : function(T){
		var M=0,S=1;
		for(;T;T=Math.floor(T/10))
			S=(S+T%10*(9-M++%6))%11;
		return S?S-1:'k';
	}
}

/*
var Fn = {
	validaPassword : function (passwordCompleto){
		passwordCompleto = passwordCompleto.replace("AAAAAAAA");


	}
}
*/


$("#btnvalida").click(function(){
	if (Fn.validaRut( $("#txt_rut").val() )){
		console.log("El Usuario ingresado es válido :D");
	    $("#msgerror").html("El Usuario ingresado es válido :D");
	} else {
		console.log("El Usuario no es válido :'( ");
		$("#msgerror").html("El Usuario no es válido :'( ");
	}
});




function verificar(){
  if (Fn.validaRut( $("#txt_rut").val() )){
    $('#ok').show();
    $('#no').hide();
    mensaje.innerHTML = 'Ingresó Un Usuario O Contraseña Erronea';
  } else {
    $('#ok').hide();
    $('#no').show();
  }
}