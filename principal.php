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
        <title>Principal</title>
    
    </head>
    <style>
        body {
          background-image:url('./imagen/fondoprincipal.jpg');
          background-repeat: no-repeat;
          background-size: cover;
        }
      </style>  
      
      
      <?php
      session_start();
      if (!isset($_SESSION["idad"])) {
          header("Location: principal.php");
      }
      $idad = $_SESSION["idad"];
      require 'Class/DAO.php'; 
      $d = new DAO();
      $lista = array();
      $lista = $d ->listarAdministrador($idad);
      $nombre;$rut;$email;$tel;
      for ($i=0; $i < count($lista); $i++) { 
              $m = $lista[$i];
              $nombre= $m->getNom();
              $rut = $m->getrut();
              $email = $m->getemail();
              $tel = $m->gettel();
      }
          
      ?>

       <div class="contenedor">
                <header>
                    <div id="subheader">
                        <div id="logotipo">
                            <p><a href="">NovaTrace</a></p>
                        </div>
                        <nav>
                            <ul>
                                <li><a href="listadoencuesta.php">Listados</a></li>
                                <li><a href="registrarUsuario.php">Registro</a></li>
                                <li><a href="perfil.php">Perfil</a></li>
                                <li><a href="index.html">Cerrar Sesion</a></li>
                            </ul>
                        </nav>
                    </div>
                </header>
        </div>

               
        <section id="posicionprincipal">
            <article>
                <div style="text-align: left">
                    <h1 style="color: aliceblue;">Bienvenido  <?php echo $nombre; ?> </h1>
                </div>
                <br/>
                <div style="text-align: left">
                     <h1 style="color: aliceblue;">Has ingresado a la plataforma de NovaTrace con la que realizamos nuestra gestion de prevencion de riesgo y control operacional</h1>
                    </h5>
                </div>
                <br/>

                <div style="border-left:3px solid gray;height: 35px;">
                    <h1 style="color: aliceblue;">Llevar un Registro oportuno nos permitira mantener vigente nuestro sistema,apoyar a nuestros clientes y asegurar </h1>
                    <h1 style="color: aliceblue;">nuestra continuidad operacional</h1>
                   </h5>
               </div>
               <br/>
               <div style="text-align: left">
                <h1 style="color: aliceblue;">Muchas Gracias</h1>
               </div>
           </article>
        </section>
</html>