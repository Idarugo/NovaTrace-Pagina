<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./styles/style.css">
        <script src="./js/exportTableToExcel.js"></script>

        <script>
            $(function () {
                $("#slideshow").slidesjs();
            });
        </script>
        <title>Listado De Usuarios</title>
    
    </head>
    <style>
        body {
          background-image:url('./imagen/listadoencuesta.jpg');
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
                                <li><a href="listadoencuesta.php">Listado Encuesta</a></li>
                                <li><a href="principal.php">Ventana Principal</a></li>
                            </ul>
                        </nav>
                    </div>
                </header>
    </div>
    
    <body>
    <table id="tblData" class="tablaencuesta"  style="margin: 0 auto;margin-bottom:400px">
      <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>RUT</th>
        <th>EMAIL</th>
        <th>TELEFONO</th>
        <th>Eliminar</th>
      </tr>
       <?php

          session_start();
          require 'Class/DAO.php'; 
          $d = new DAO();
          $lista = $d->listadoUsuario($_SESSION["idemp"]);
          for ($i = 0; $i < count($lista); $i++) {
            $en = $lista[$i];
            echo "<tr>";
            echo "<td>" . $en->getidUsu()  . "</td>";
            echo "<td>" . $en->getNom()  . "</td>";
            echo "<td>" . $en->getRut() . "</td>";
            echo "<td>" . $en->getEmail() . "</td>";
            echo "<td>" . $en->getTel() . "</td>";
            echo "<td><a href='listadousuario.php?id_eli=" . $en->getidUsu() . "&id_usu=" . "'> ELIMINAR</a></td>";
            echo "</tr>";
          }
      ?>

    </table>
 
    <br/>

    <div style="text-align: center;">
      <button class="buttonlistado" onclick="exportTableToExcel('tblData', 'Reporte Encuesta')"> <img src="./imagen/iconodescarga.png" width="13px"> Exportar a Excel</button>
    </div>
    <?php
    if(strlen($_GET['id_eli']) > 0 ){
        echo $_GET['id_eli'];
    }
    ?>
</html>
