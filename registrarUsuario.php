<!DOCTYPE html>
<html>
    <head>
        <title>Registrar</title>
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
          background-image:url('./imagen/fondoregistrarusuario.jpg');
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
                     <li><a href="listadoencuesta.php">Encuesta</a></li>
                     <li><a href="principal.html">Ventana Principal</a></li>
                     </ul>
                 </nav>
             </div>
         </header>

        
         <body>
            <form method="post">
                <section id="wrap" class="login">                    
                <h5>Registrar Usuario</h5>
            <tr>
            <td><label><FONT COLOR="FFFFFF">Nombre Y Apellido </label></td></FONT>
            <td><input type="text" name="Nombre" placeholder="Nombre Y Apellido" /></td>
            </tr>
            
            <tr>
            <td><label><FONT COLOR="FFFFFF">Rut</label></td></FONT>
            <td><input type="text" name="Rut"  class="inputs" maxlength="12" name="cliente" id="cliente" maxlength="12" onkeyup="formatCliente(this)" placeholder="XX-XXX-XXX-X" /></td>

            <script type="text/javascript">
            function formatCliente(cliente)
            {cliente.value=cliente.value.replace(/[.-]/g, '')
            .replace( /^(\d{1,2})(\d{3})(\d{3})(\w{1})$/, '$1.$2.$3-$4')}
            </script>
            </tr>
    
    
            <tr>
            <td><label><FONT COLOR="FFFFFF">Correo electronico</label></td></FONT>
            <td><input type="text" name="Email" placeholder="example@mail.com" /></td>
            </tr>
    
            <tr>
            <td><label><FONT COLOR="FFFFFF">Telefono</label></td></FONT>
            <td><input type="text" name="Telefono" placeholder="Telefono" /></td>
            </tr>
        
            <tr>
            <td><label><FONT COLOR="FFFFFF">Password</label></td></FONT>
            <td><input name="txt_pas" type="Password" placeholder="*******" /></td>
            </tr>

            <tr>
            <td><label><input type="submit" name="enviar" value="Registrate"></input></label></td>
            </tr>
            
            <?php
            include("conexionRegistrarUsu.php");
            ?>
        </section>
        </form>
        </body>

    </div>
</html>