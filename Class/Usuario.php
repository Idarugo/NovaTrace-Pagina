<?php
class Usuario{
	private $id;
	private $idemp;
	private $nom;
	private $rut;
	private $ema;
	private $tel;
	private $pas;


	public function Usuario($id,$idemp,$nom,$rut,$ema,$tel,$pas){
		$this->id = $id;
		$this->idemp = $idemp;
		$this->nom = $nom;
		$this->rut = $rut;
		$this->ema = $ema;
		$this->tel = $tel;
		$this->pas = $pas;
	}

	public function getidUsu(){
		return $this->id;
	}

	public function getidEmp(){
		return $this->idemp;
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

