<!DOCTYPE html>
<html>
    <head>
        <title>Contacto</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./styles/style.css">

        <script>
            $(function () {
                $("#slideshow").slidesjs();
            });
        </script>
    </head>

    <style>
        body {
          background-image:url('./imagen/contacto.jpg');
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
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="quiensomos.php">Quienes Somos</a></li>
                        <li><a href="servicios.php">Servicios</a></li>
                        <li><a href="covid.php">Covid</a></li>
                        <li><a href="contacto.php">Contacto</a></li>
                        <li><a href="login.php">Iniciar Sesion</a></li>
                     </ul>
                 </nav>
             </div>
         </header>


          <form method="post">
            <section id="wrap" class="login">
                <section id="main">
    
                   <section class="form-login">
                    <h5>CONTACTO</h5>
                    
                    <input class="controls"  name="nombreuser"  type="text"  placeholder="Nombre Y Apellido">

                    <input type="text" class="controls" name="emailuser"  placeholder="example@mail.com" >

                    <input type="text" class="controls" name="telefono"  placeholder="Telefono" >

                    <input type="text" class="controls" name="mensaje"  placeholder="Mensaje" >

                  <div style="text-align: center;">
                    <button  class="buttons" name="enviar" type="submit">ENVIAR</button>
                    <?php include("conexioncontacto.php");?>
                </div>  
                  </section>
                </section>
            </section>
          </form>

    </div>
</html>