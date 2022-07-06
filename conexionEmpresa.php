
<?php 
    $con = mysqli_connect("us-cdbr-east-06.cleardb.net","bd2afeddb63b20","df20e8da","heroku_a50bea369876c7e");

	if(!$con){
	echo "no pudo conectarse al sv";
	}else{
	/*echo "Conexion satisfactoria";*/
	}
	
	if(isset($_POST['enviar'])){//inicio if post
		session_start();
		$idad = $_SESSION["idad"]; 
		$nomemp = $_POST['NomEmpresa'];
    
 
	if(strlen($idad) >= 1 && strlen($nomemp) >= 1){//validacion

	$sql = "INSERT INTO empresa(id_emp,id_adm,nom_emp) VALUES (NULL,$idad,'$nomemp');";
	
	$resultado = mysqli_query($con,$sql);
	if($resultado){//iniicio resultado
	    echo '<h6 style="color:white">Usuario Registrado Correctamente.</h6>';
		echo '<script> window.location.replace("login.php");  
		</script>';  
	}else{
		echo '<h6 style="color:white">Error</h6>';
	}//fin resultado

	}else{//else validacion
	    echo '<h6 style="color:white">Porfavor Completar los Campos</h6>';
	}//validacion
}//fin post
  ?>




