
<?php 
	$con = mysqli_connect("us-cdbr-east-06.cleardb.net","bd2afeddb63b20","df20e8da","heroku_a50bea369876c7e"));

	if(!$con){
	echo "no pudo conectarse al sv";
	}else{
	/*echo "Conexion satisfactoria";*/
	}
	
	if(isset($_POST['enviar'])){//inicio if post
	$nombres  = $_POST['nombreuser'];
	$email    = $_POST['emailuser'];
	$telefono = $_POST['telefono'];
	$mensaje  = $_POST['mensaje'];
 
	if(strlen($nombres) >= 1 && strlen($email) >= 1 && strlen($telefono) >= 1 && strlen($mensaje) >= 1){//validacion

	$sql = "INSERT INTO Contactos(nombres,email,telefono,mensaje) VALUES ('$nombres', '$email', $telefono, '$mensaje');";
	
	$resultado = mysqli_query($con,$sql);
	if($resultado){//iniicio resultado
	    echo '<h6 style="color:yellow">Te contactaremos dentro de 24 horas para saber de tu proyecto y tomarnos un café.</h6>';
	}else{
	    echo '<h6 style="color:white">Error</h6>';
	}//fin resultado


	}else{//else validacion
	    echo '<h6 style="color:white">Porfavor Completar los Campos</h6>';
	}//validacion
}//fin post
  ?>