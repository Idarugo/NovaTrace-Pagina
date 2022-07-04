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
        <title>Recuperar Contraseña</title>
    </head>

    <style>
        body {
          background-image:url('./imagen/fondorecuperar.jpg');
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
                    <li><a href="login.php">Login</a></li>
                    <li><a href="registrarAdministrador.php">Registrate</a></li>
                    <li><a href="index.html">Cerrar Sesion</a></li>
                </ul>
            </nav>
        </div>
    </header>
</div>      

<form action="recuperar.php" method="post">
    <section id="wrap">
        <section id="main">
               <section class="form-login">
                <h5>Recuperar Contraseña</h5>
                <input type="email" class="controls" name="txt_cor" id="txt_cor" placeholder="Correo" >        

                <div style="text-align: center;">
                <button  class="buttons" name="btnrecuperar" type="submit">Recuperar Contraseña</button>
                <?php include('control_correo.php');?>
              </div>
                <p><a href="login.php">Volver Inicio De Sesion</a></p>
            </section>
        </section>
    </section>
</html>