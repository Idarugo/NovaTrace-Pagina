<?php
class Administradores{
	private $idad;
	private $nom;
	private $rut;
	private $ema;
	private $tel;
	private $pas;


	public function Administradores($idad,$nom,$rut,$ema,$tel,$pas){
		$this->idad = $idad;
		$this->nom = $nom;
		$this->rut = $rut;
		$this->ema = $ema;
		$this->tel = $tel;
		$this->pas = $pas;
	}

	public function getidadm(){
		return $this->idad;
	}

	public function getNom(){
		return $this->nom;
	}

	public function getRut(){
		return $this->rut;
	}

	public function getEmail(){
		return $this->ema;
	}

	public function getTel(){
		return $this->tel;
	}

	public function getPassword(){
		return $this->pas;
	}
}
?>

