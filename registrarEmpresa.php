<!DOCTYPE html>
<html>
    <head>
        <title>Registrar Empresa</title>
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
          background-image:url('./imagen/fondoregistrarempresa.jpg');
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
                     </ul>
                 </nav>
             </div>
         </header>

        

         <body>
  
            <form method="post">
                <section id="wrap" class="login">                    
                <h5>Datos De Empresa</h5>
            <tr>
            <td><label><FONT COLOR="FFFFFF">Nombre de la empresa</label></td></FONT>
            <td><input type="text" name="NomEmpresa" placeholder="NovaTrace" /></td>
            </tr>
            
            <tr>
            <td><label><input type="submit" name="enviar" value="Registrate"></input></label></td>
            </tr>
            
            <?php
            include("conexionEmpresa.php");
            ?>
        </section>
        </form>
        </body>

    </div>
</html>
