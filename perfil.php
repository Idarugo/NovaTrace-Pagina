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
        <title>Perfil</title>
    
    </head>
    <style>
        body {
          background-image:url('./imagen/perfil.jpg');
          background-repeat: no-repeat;
          background-size: cover;
        }
      </style>  
      
         <?php
                    session_start();
                    if (!isset($_SESSION["idad"])) {
                        header("Location: perfil.php");
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
                                <li><a href="principal.php">Ventana Principal</a></li>
                            </ul>
                        </nav>
                    </div>
                </header>
        </div>

               
        <form method="post">
            <section id="wrap" class="login">
                <section id="main">
    
                   <section class="form-login">
                       
                       
<img src="./imagen/iconoperfil.png" style="width: 50px !important; top: auto !important; margin-left: 170px !important; border-right-style: solid !important; border-right-width: 0px !important;">
<h5>Perfil Usuario</h5>
                    </div>
                    <th>Nombre : <?php echo $nombre; ?> </th>
                    <br/>
                    <br/>
                    <th>Rut    : <?php echo $rut; ?> </th>
                    <br/>
                    <br/>
                    <th>Email  : <?php echo $email; ?> </th>
                    <br/>
                    <br/>
                    <th>Telefono : <?php echo $tel; ?> </th>
                    <br/>
                    <br/>
                    <p><a href="modificarContraseña.php">Modificar Contraseña</a></p>
                </section>
                </section>
            </section>
            </form>
</html>