<?php
class Trabajadores{
	private $idtra;
	private $nom;
	private $rut;
	private $ema;
	private $pas;

	public function Trabajadores($idtra,$nom,$rut,$ema,$pas){
		$this->idtra = $idtra;
		$this->nom = $nom;
		$this->rut = $rut;
		$this->ema = $ema;
		$this->pas = $pas;
	}

	public function getidtra(){
		return $this->idtra;
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

	public function getPassword(){
		return $this->pas;
	}
}
?>



