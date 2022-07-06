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
                                <li><a href="index.php">Volver Al Inicio</a></li>
                            </ul>
                        </nav>
                    </div>
                </header>
        </div>

        <form method="post">
        <section id="wrap" class="login">
            <section id="main">

               <section class="form-login">
                <h5>Login</h5>
           
                    <input type="text" class="controls" name="txt_rut" id="txt_rut"  maxlength="12" name="cliente" id="cliente" maxlength="12" onkeyup="formatCliente(this)"  placeholder="Ingrese RUT" >        
                    <script type="text/javascript">
                    function formatCliente(cliente)
                    {cliente.value=cliente.value.replace(/[.-]/g, '')
                    .replace( /^(\d{1,2})(\d{3})(\d{3})(\w{1})$/, '$1.$2.$3-$4')}
                    </script>                 
                    <input class="controls"  name="txt_pas" id="txt_pas" type="password" value="" placeholder="Contraseña">

              <div style="text-align: center;">
                <button  class="buttons" name="btnvalida" type="submit">Ingresar</button>
                <?php include('control_sesion.php');?>
              </div>  
                <p><a href="recuperar.php">¿Olvidastes tu Contraseña?</a></p>
                <p><a href="registrarAdministrador.php">¿No tienes Cuenta? Registrate</a></p>
              </section>
            </section>
        </section>
        </form>
</html>