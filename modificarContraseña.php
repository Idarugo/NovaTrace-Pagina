<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./styles/style.css">
        <script>
            $(function () {
                $("#slideshow").slidesjs();
            });
        </script>
        <title>Modificar Contraseña</title>
    </head>

    <style>
        body {
          background-image:url('./imagen/modificarContraseña.jpg');
          background-repeat: no-repeat;
          background-size: cover;
        }
      </style> 

                
<div class="contenedor">
    <header>
        <div id="subheader">
            <div id="logotipo">
                <p><a href="">NovaTrace</a></p>
            </div>
            <nav>
                <ul>
                    <li><a href="perfil.php">Perfil</a></li>
                    <li><a href="principal.php">Ventana Principal</a></li>
                </ul>
            </nav>
        </div>
    </header>
</div>      

<form method="post" action="modificarContraseña.php">
    <section id="wrap">
        <section id="main">
               <section class="form-login">
                <h5>Modificar Contraseña</h5>
                <input class="controls"  name="txt_pas" id="txt_pas" type="Password" value="" placeholder="Nueva Contraseña">
                <input class="controls"  name="txt_pas1" id="txt_pas" type="Password" value="" placeholder="Confirmar Contraseña">

                <div style="text-align: center;">
                <button  class="buttons" name="btnvalida" type="submit">Modificar</button>
 
                             
                       </div>  

                <p><a href="principal.php">Volver Principal</a></p>
                <?php
                if(isset($_POST['btnvalida'])){
                    if(strlen($_POST['txt_pas']) > 0 && strlen($_POST['txt_pas1']) > 0){
                        if($_POST['txt_pas'] == $_POST['txt_pas1']){
                            session_start();
                            $clave = $_POST['txt_pas'];
                            $idad = $_SESSION["idad"];
                            require 'Class/DAO.php'; 
                            $d = new DAO();
                            $valor = $d ->ModificarContraseñaAdm($idad,$clave);
                            echo '<script>alert("Clave Modificada");
                            location.replace("cerrar_sesion.php");</script>';
                        }else{
                            echo "<h1 style='color:white'>Las Contraseñas no son iguales</h1>";
                        }
                    }else{
                        echo "<h1 style='color:white'>Falta llenar Campos</h1>";
                    }
                    }   ?>
                </section>
            </section>
        </section>
        </form>
</html>


