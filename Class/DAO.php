<?php
require('Encuesta.php');
require("Administradores.php");

class DAO {
  private $mi;

  private function conexion(){
    $this->mi = new mysqli("localhost","id17942319_novatrace2","novaTrace2.0","id17942319_novaempresa");
    if ($this->mi->connect_errno) {
      die("Error al establecer la conexion a la BD -> id17942319_nova");
    }
  }

  private function desconexion()
  {
    $this->mi->close();
  }

  public function ListarAdministradores(){
    $this->conexion();
    $lista = array();
    $sql = "select * from administrador; ";
    $st = $this->mi->querid_admy($sql);
    while ($rs = mysqli_fetch_array($st)) {
      $i   = $rs['id_adm'];
      $n   = $rs['nom_adm'];
      $r   = $rs['rut_adm'];
      $e   = $rs['email_adm'];
      $tel = $rs['tel_adm'];
      $p   = $rs['pas_adm'];
      $a   = new Administradores($i,$n,$r,$e,$tel,$p);
      $lista[] = $a;
    }
    $this->desconexion();
    return $lista;
  }

   public function buscarId($id_admin){ 
    $sql = "Select id_emp from empresa WHERE id_adm = $id_admin"; 
                 $this->conexion(); 
                 $st = $this->mi->query($sql); 
                 $valor = mysqli_fetch_array($st); 
                 $this->desconexion(); 
                 return $valor[0]; 
}


  /*
  public function ListarTrabajadores(){
    $this->conexion();
    $lista = array();
    $sql = "select * from trabajadores; ";
    $st = $this->mi->query($sql);
    while ($rs = mysqli_fetch_array($st)) {
      $i = $rs['id_tra'];
      $n = $rs['nomcom_tra'];
      $r = $rs['rut_tra'];
      $e = $rs['email_tra'];
      $p = $rs['pas_tra'];
      $t = new Trabajadores($i,$n,$r,$e,$p);
      $lista[] = $t;
    }
    $this->desconexion();
    return $lista;
  }
  */



  /*
  public function EliminarEncuesta(){
    $this->conexion();
    $lista = array();
    $sql = "delete from encuesta where id_enc='$idenc'";
    if(mysqli_query($con,$sql)){
    echo "Encuesta Eliminada Correctamente!!";
      }else{
    echo "Error : " . mysqli_error($con);
      }
         mysqli_close($con);
  }
  */


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

  public function Perfil()
  {
    $this->conexion();
    $lista = array();
    $sql = "SELECT 
trabajadores.id_tra, trabajadores.nomcom_tra as trabajadores.rut_tra as trabajadores.email_tra 
FROM
trabajadores
WHERE
trabajadores.id_tra";
    $st = $this->mi->query($sql);
    while ($rs = mysqli_fetch_array($st)) {
      $idTra = $rs['id_tra'];
      $nom = $rs['nomcom_tra'];
      $rut = $rs['rut_tra'];
      $ema = $rs['email_tra'];
    
      $en  = new Trabajadores($idTra,$nom,$rut,$ema);
      $lista[] = $en;
    }
    $this->desconexion();
    return $lista;
  }





   public function Encuesta() {
    $this->conexion();
    $lista = array();
    $sql = "SELECT 
encuesta.id_enc, clientes.nom_clie as id_clie, cabeza.nom_cab as id_cab,respiracion.nom_resp as id_resp,tos.nom_tos as id_tos,musculo.nom_mus as id_mus
FROM
encuesta,clientes,cabeza,respiracion,tos,musculo
WHERE
encuesta.id_clie = clientes.id_clie && encuesta.id_cab = cabeza.id_cab && encuesta.id_resp = respiracion.id_resp && encuesta.id_tos = tos.id_tos && encuesta.id_mus = musculo.id_mus;
";
    $st = $this->mi->query($sql);
    while ($rs = mysqli_fetch_array($st)) {
      $idEnc = $rs['id_enc'];
      $idclie = $rs['id_clie'];
      $cab = $rs['id_cab'];
      $resp = $rs['id_resp'];
      $tos = $rs['id_tos'];
      $mus = $rs['id_mus'];

      $en  = new Encuesta($idEnc,$idclie,$cab,$resp,$tos,$mus);
      $lista[] = $en;
    }
    $this->desconexion();
    return $lista;
  }

}
