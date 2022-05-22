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
        <title>Listado De Encuesta</title>
    
    </head>
    <style>
        body {
          background-image:url('./imagen/listarencuesta.jpeg');
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
                                <li><a href="#">Encuesta</a></li>
                                <li><a href="controllaboral.html">Control Laboral</a></li>
                                <li><a href="index.html">Cerrar Sesion</a></li>
                            </ul>
                        </nav>
                    </div>
                </header>
    </div>

    <head>
        <title>LISTADO DE ENCUESTA</title>
        <link href="css/estilos2.css" rel="stylesheet" type="text/css" />
      </head>
      
      <body>

    <?php
    require 'Class/DAO.php';
    if (isset($_GET["id_eli"])) {
      $rut = "";
      $rut = $_GET["rut"];
      $d = new DAO();
      $id_eli = $_GET["id_eli"];
      $msg = $d->eliminarRegistro($id_eli, "id_enc", "encuesta", $rut);
      echo "<script language='javascript'>alert('$msg');</script>";
    }
    ?>

    <table border="0" align="center" width="1000" class="tablas">

        <tr>
          <td colspan=70>
            <center><label>LISTADO DE ENCUESTAS</label></center>
          </td>
        </tr>
        <tr>
          <td>| Id |</td>
          <td>| Dolor Cabeza |</td>
         <td>| Dificultad Respiratoria |</td>
          <td>| Tos Seca |</td>
          <td>| Dolor Muscular |</td>
        </tr>
    
        <?php
        if (isset($_GET["orden"])) {
          $con  = "order by " . $_GET["orden"] . " ASC";
        }
          if (empty($idEnc)) {
            $d = new DAO();
            $lista = $d->Encuesta();
            for ($i = 0; $i < count($lista); $i++) {
              $en = $lista[$i];
              echo "<tr>";
              echo "<td>" . $en->getidEnc() . "</td>";
              echo "<td>" . $en->getidCabeza() . "</td>";
              echo "<td>" . $en->getidRespiracion() . "</td>";
              echo "<td>" . $en->getidTos() . "</td>";
              echo "<td>" . $en->getidMusculo() . "</td>";
              echo "</tr>";
            }
          } 
        
        ?>
      </table>


</html>
