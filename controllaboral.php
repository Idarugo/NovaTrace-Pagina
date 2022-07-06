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
        <title>Control Laboral</title>
    </head>

    <style>
        body {
          background-image:url('./imagen/controllaboral.jpg');
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
    </div>

    <body>
        <table id="tblData" class="tablaencuesta"  style="margin: 0 auto;">
          <tr>
            <th rowspan="1" style="text-align: center">Fecha</th>
            <td colspan="2" style="text-align: center">xx/xx</td>
            <td colspan="2" style="text-align: center">xx/xx</td>
            <td colspan="2" style="text-align: center">xx/xx</td>
            <td colspan="2" style="text-align: center">xx/xx</td>
            <td colspan="2" style="text-align: center">xx/xx</td>
            <td colspan="2" style="text-align: center">xx/xx</td>
            <td colspan="3" style="text-align: center">Semana xx</td>

          </tr>
          <tr>
            <th rowspan="2">Empleado</th>
            <td colspan="2" style="text-align: center">Lunes</td>
            <td colspan="2" style="text-align: center">Martes</td>
            <td colspan="2" style="text-align: center">Miercoles</td>
            <td colspan="2" style="text-align: center">Jueves</td>
            <td colspan="2" style="text-align: center">Viernes</td>
            <td colspan="2" style="text-align: center">Sabado</td>
            <th rowspan="2" style="text-align: center">Hora Normales</th>
            <th rowspan="2" style="text-align: center">Hora Extra</th>
            <th rowspan="2" style="text-align: center">Hora Total</th>
          </tr>
          <tr>
            <th style="text-align: center">Inicio</th>
            <th style="text-align: center">Fin</th>
            <th style="text-align: center">Inicio</th>
            <th style="text-align: center">Fin</th>
            <th style="text-align: center">Inicio</th>
            <th style="text-align: center">Fin</th>
            <th style="text-align: center">Inicio</th>
            <th style="text-align: center">Fin</th>
            <th style="text-align: center">Inicio</th>
            <th style="text-align: center">Fin</th>
            <th style="text-align: center">Inicio</th>
            <th style="text-align: center">Fin</th>
          </tr>
          <tr>
            <th>Marcelo</th>

                <th style="text-align: center">8:00</th>
                <th style="text-align: center">14:00</th>
                <th style="text-align: center">8:00</th>
                <th style="text-align: center">14:00</th>
                <th style="text-align: center">8:00</th>
                <th style="text-align: center">14:00</th>
                <th style="text-align: center">8:00</th>
                <th style="text-align: center">14:00</th>
                <th style="text-align: center">8:00</th>
                <th style="text-align: center">14:00</th>
                <th style="text-align: center">8:00</th>
                <th style="text-align: center">14:00</th>
                
                <th style="text-align: center">5.000</th>
                <th style="text-align: center">1:30</th>
                <th style="text-align: center">31:00</th>

          </tr>

          <tr>
            <th>Empleado 2</th>
          </tr>

          <tr>
            <th>Empleado 3</th>
          </tr>

          <tr>
            <th>Empleado 4</th>
          </tr>

          <tr>
            <th>Empleado 5</th>
          </tr>

        </table>
    </body>
    
        <br/>
    
        <div style="text-align: center;">
          <button class="buttonlistado" onclick="exportTableToExcel('tblData', 'Reporte Laboral')"> <img src="./imagen/iconodescarga.png" width="20px"> Exportar a Excel</button>
        </div>  
    
</html>