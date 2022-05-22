<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./styles/style.css">
        <script src="JS/funcionesLogin.js"></script>
        <script>
            $(function () {
                $("#slideshow").slidesjs();
            });
        </script>
        <title>Iniciar Seccion</title>
    </head>
    
    <style>
        body {
          background-image:url('./imagen/fondologin.jpg');
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
                                <li><a href="">Encuesta</a></li>
                                <li><a href="">Control Laboral</a></li>
                                <li><a href="index.html">Cerrar Sesion</a></li>
                            </ul>
                        </nav>
                    </div>
                </header>

        </div>
        <form method="post">
        <section id="wrap" class="login">
            <section id="main">

               <section class="form-login">
                <h5>Formulario Login</h5>
           
                <input type="text" class="controls" name="txt_rut" id="txt_rut"  placeholder="Ingrese RUT" >
                <input class="controls"  name="txt_pas" id="txt_pas" type="password" value="" placeholder="Contraseña">

              <div style="text-align: center;">
                <button  class="buttons" name="btnvalida" type="submit">Ingresar</button>
                <?php include('control_sesion.php');?>
              </div>  
              
                <p><a href="recuperar.html">¿Olvidastes tu Contraseña?</a></p>
             </form>
              </section>
            </section>
        </section>
</html>