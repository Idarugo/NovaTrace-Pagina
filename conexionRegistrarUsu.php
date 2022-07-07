
<?php 
    $con = mysqli_connect("us-cdbr-east-06.cleardb.net","bd2afeddb63b20","df20e8da","heroku_a50bea369876c7e");

	if(!$con){
	echo "no pudo conectarse al sv";
	}else{
	/*echo "Conexion satisfactoria";*/
	}
	
	if(isset($_POST['enviar'])){//inicio if post
		session_start();
    $idemp  = $_SESSION["idemp"]; 
	$nom     = $_POST['Nombre'];
    $rut     = $_POST['Rut'];
	$email   = $_POST['Email'];
	$tel     = $_POST['Telefono'];
    $pas     = $_POST['txt_pas'];

    
	if( strlen($idemp) >= 1 && strlen($nom) >= 1 && strlen($rut) >= 1 && strlen($email) >= 1 && strlen($tel) >= 1  && strlen($pas) >=  1){//validacion

	$sql = "INSERT INTO usuario(id_usu, id_emp ,nom_usu, rut_usu, email_usu, tel_usu,pas_usu) VALUES (NULL,$idemp,'$nom','$rut','$email',$tel,'$pas');";
	
	$resultado = mysqli_query($con,$sql);
	if($resultado){//iniicio resultado
	    echo '<h6 style="color:white">Usuario Registrado Correctamente.</h6>';
	}else{
	    echo '<h6 style="color:white">Error</h6>';
	}//fin resultado

	}else{//else validacion
	    echo '<h6 style="color:white">Porfavor Completar los Campos</h6>';
	}//validacion
}//fin post
  ?>
	






  

