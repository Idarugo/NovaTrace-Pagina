<?php 
    $conexion = new mysqli("us-cdbr-east-06.cleardb.net","bd2afeddb63b20","df20e8da","heroku_a50bea369876c7e");
    if($conexion-> connect_error){
        die('No se pudo conectar al servidor');
    }

?>

