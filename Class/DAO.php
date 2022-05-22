<?php
require("Trabajadores.php");

class DAO {
  private $mi;

  private function conexion(){
    $this->mi = new mysqli("localhost","id17942319_novatrace","IncapaMedicos2021!","id17942319_nova");
    if ($this->mi->connect_errno) {
      die("Error al establecer la conexion a la BD -> id17942319_nova");
    }
  }

  private function desconexion()
  {
    $this->mi->close();
  }



public function ValidarLogin($rut, $pas){
        $this->conexion();
        $sql ="select * FROM trabajadores WHERE rut_tra = '$rut' and pas_tra = '$pas'";
        $ejecutar = $this->mi->query($sql);
        if ($rs = mysqli_fetch_array($ejecutar)) {
            $this->desconexion();
            return 1;
        }
        $this->desconexion();
        return 0;
    }


  public function ListarTrabajadores(){
    $this->conexion();
    $lista = array();
    $sql = "select * from trabajadores; ";
    $st = $this->mi->query($sql);
    while ($rs = mysqli_fetch_array($st)) {
      $i = $rs['id_tra'];
      $r = $rs['rut_tra'];
      $p = $rs['pas_tra'];
      $t = new Trabajadores($i, $r, $p);
      $lista[] = $t;
    }
    $this->desconexion();
    return $lista;
  }


  public function eliminarRegistro($id_eli, $campo, $tabla, $rut)
  {
    $msg = "";
    $this->conexion();
    $sql = "Delete from $tabla where $campo = $id_eli";
    $ejecutar = $this->mi->query($sql);
    if ($this->mi->affected_rows) {
      $msg = "Registro de ID = $id_eli con Rut = $rut Eliminado Correctamente!!!";
    } else {
      $msg = "Error Al Intentar Eliminar El Registro $id_eli !!!";
    }
    return $msg;
  }

  public function Encuesta()
  {
    $this->conexion();
    $lista = array();
    $sql = "SELECT 
encuesta.id_enc,nombrecliente.nom_clie cabeza.nom_cab as id_cab,respiracion.nom_resp as id_resp,tos.nom_tos as id_tos,musculo.nom_mus as id_mus
FROM
encuesta,cabeza,respiracion,tos,musculo
WHERE
encuesta.id_cab = cabeza.id_cab && encuesta.id_resp = respiracion.id_resp && encuesta.id_tos = tos.id_tos && encuesta.id_mus = musculo.id_mus;
";
    $st = $this->mi->query($sql);
    while ($rs = mysqli_fetch_array($st)) {
      $idEnc = $rs['id_enc'];
      $nomcli = $rs['nom_clie'];
      $cab = $rs['id_cab'];
      $resp = $rs['id_resp'];
      $tos = $rs['id_tos'];
      $mus = $rs['id_mus'];

      $en  = new Encuesta($idEnc,$nomcli,$cab,$resp,$tos,$mus);
      $lista[] = $en;
    }
    $this->desconexion();
    return $lista;
  }


}
