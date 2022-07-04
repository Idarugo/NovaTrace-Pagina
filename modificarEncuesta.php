<!DOCTYPE html>
<html>
    <head>
        <title>Modificar Encuesta</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./styles/estilocontacto.css">

        <script>
            $(function () {
                $("#slideshow").slidesjs();
            });
        </script>
    </head>

<style>
        body {
          background-image:url('./imagen/modificarencuesta.jpg');
          background-repeat: no-repeat;
          background-size: cover;
        }
    </style> 
    
    <div class="contenedor">
         <header>
             <div id="subheader">
                 <div id="logotipo">
                     <p><a href="principal.php">NovaTrace</a></p>
                 </div>
                 <nav>
                     <ul>
                     <li><a href="registrarUsuario.php">Registrar Usuario</a></li>
                     <li><a href="principal.php">Ventana Principal</a></li>
                     </ul>
                 </nav>
             </div>
         </header>

        
         <body>
            <form method="post">
                <section id="wrap" class="login">                    
                <h5>Modificar  Encuesta</h5>
            <tr>
            <td><label><FONT COLOR="FFFFFF">Pregunta 1 </label></td></FONT>
            <td><input type="text" name="Nombre" placeholder="Dolor de Cabeza?" /></td>
            </tr>

            <tr>
            <td><label><FONT COLOR="FFFFFF">Pregunta 2 </label></td></FONT>
            <td><input type="text" name="Nombre" placeholder="Dificultad Respiratoria?" /></td>
            </tr>

            <tr>
            <td><label><FONT COLOR="FFFFFF">Pregunta 3 </label></td></FONT>
            <td><input type="text" name="Nombre" placeholder="Tos Seca?" /></td>
            </tr>

            <tr>
            <td><label><FONT COLOR="FFFFFF">Pregunta 4 </label></td></FONT>
            <td><input type="text" name="Nombre" placeholder="Dolor Muscular?" /></td>
            </tr>
            
           
            <tr>
            <td><label><input type="submit" name="enviar" value="Modificar"></input></label></td>
            </tr>
            
            <?php
            include("conexionRegistrarUsu.php");
            ?>
        </section>
        </form>
        </body>

    </div>
</html>