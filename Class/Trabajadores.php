<?php
class Trabajadores{
	private $idtra;
	private $rut;
	private $pas;

	public function Trabajadores($idtra,$rut,$pas){
		$this->idtra = $idtra;
		$this->rut = $rut;
		$this->password = $password;
	}

	public function getidtra(){
		return $this->idtra;
	}

	public function getRut(){
		return $this->rut;
	}

	public function getPassword(){
		return $this->pas;
	}
}
?>

