<?php
class Empresa{
	private $idemp;
	private $idadm;
	private $nomemp;

    public function Empresa($idemp,$idadm,$nomemp){
		$this->idemp = $idemp;
		$this->idadm = $idadm;
		$this->nomemp = $nomemp;
	}

	public function getidemp(){
		return $this->idemp;
	}

    public function getidadm(){
		return $this->idadm;
	}

	public function getNomemp(){
		return $this->nomemp;
	}
}
?>
