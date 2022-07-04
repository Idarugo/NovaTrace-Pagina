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
        <title>Listado De Encuesta</title>
    
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
                                <li><a href="listadousuario.php">Listado Trabajadores</a></li>
                                <li><a href="principal.php">Ventana Principal</a></li>
                            </ul>
                        </nav>
                    </div>
                </header>
    </div>
    
    <body>
    <table id="tblData" class="tablaencuesta"  style="margin: 0 auto;margin-bottom:400px">
      <tr>
          <th>Nro</th>
          <th>Fecha</th>
          <th>ID_Usuario</th>
          <th>Dolor De Cabeza</th>
          <th>Dificultad Respiratoria</th>
          <th>Tos Seca</th>
          <th>Dolor Muscular</th>
          <th>Eliminar</th>
      </tr>
       <?php
     
        
          session_start();
          require 'Class/DAO.php'; 
          $d = new DAO();
          $lista = $d->listarEncuesta($_SESSION["idad"]);
          for ($i = 0; $i < count($lista); $i++) {
            $en = $lista[$i];
            echo "<tr>";
            echo "<td>" . $en->getidEnc()  . "</td>";
            echo "<td>" . $en->getfecha() . "</td>";
            echo "<td>" . $en->getidUsuario() . "</td>";
            echo "<td>" . $r = $en->getidCabeza() == 1 ? 'Si' : 'No' . "</td>";
            echo "<td>" . $r = $en->getidRespiracion() == 1 ? 'Si' : 'No' . "</td>";
            echo "<td>" . $r = $en->getidTos() == 1 ? 'Si' : 'No' . "</td>";
            echo "<td>" . $r = $en->getidMusculo() == 1 ? 'Si' : 'No' . "</td>";
            echo "<td><a href='listadoencuesta.php?id_eli=" . $en->getidEnc() . "&fecha=" . $en->getfecha() . "'> ELIMINAR</a></td>";
            echo "</tr>";
          }
        
      
      ?>

    </table>
 
    

    <div style="text-align: center;">
      <button class="buttonlistado" onclick="exportTableToExcel('tblData', 'Reporte Encuesta')"> <img src="./imagen/iconodescarga.png" width="13px"> Exportar a Excel</button>
    </div> 
    
    
        <div>
        <form style="text-align: center" action="listadoencuesta.php" method="post">
          <tr>
            <td><label><FONT COLOR="FFFFFF">ID_Usuario</label></td></FONT>
            <td><input name="txt_id" type="text" placeholder="1" /></td>
            </tr>
            <tr>
            <td><label><input type="submit" name="btn_enviar"  value="Mostrar Datos"></input></label></td>
            </tr>
         </form>
        </div>
          
   
    </body>

<?php
if(isset($_POST["btn_enviar"])){
    $id = $_POST["txt_id"];
    if(strlen($id) != 0){
    $d = new DAO();
    $verificar = $d->VerificiarIdUsuario($id, $_SESSION["idad"]);
    if($verificar == 1 ){
    $lista = array();
    $lista = $d->listarUsuario($id, $_SESSION["idad"]);
    $nombre;$rut;$telefono;$email;
    for ($i = 0; $i < count($lista); $i++) {
            $usu = $lista[$i];
            $nombre = $usu->getNom();
            $rut = $usu->getRut();
            $email = $usu->getEmail();
            $telefono = $usu->getTel();
    }
    echo "
        <table  id='tblData' class='tablaencuesta'  style='margin: 0 auto;margin-top:10px'>
        <tr>
        <th>ID</th>
        <th>RUT</th>
        <th>NOMBRE</th>
        <th>EMAIL</th>
        <th>TELEFONO</th>
        </tr>
        <tr>
        <td>$id</td>
        <td>$rut</td>
        <td>$nombre</td>
        <td>$email</td>
        <td>$telefono</td>
        </tr>
    
    ";
    }else{
        echo "<table  id='tblData' class='tablaencuesta'  style='margin: 0 auto;margin-top:10px'>
        <tr>
        <th>ID</th>
        <th>RUT</th>
        <th>NOMBRE</th>
        <th>EMAIL</th>
        <th>TELEFONO</th>
        </tr>
        <td colspan='5'>NO HAY USUARIO EXISTENTE QUE LISTAR CON ESE ID</td>";
    }
}
}
?>
</html>
