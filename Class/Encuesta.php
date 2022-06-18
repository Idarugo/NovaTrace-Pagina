<?php
class Encuesta{
    private $idEnc;
    private $clientes;
	private $cabeza;
	private $respiracion;
	private $tos;
	private $musculo;


	public function Encuesta($idEnc,$clientes,$cabeza,$respiracion,$tos,$musculo){

		$this->idEnc        = $idEnc;
        $this->clientes     = $clientes;
		$this->cabeza       = $cabeza;
		$this->respiracion  = $respiracion;
		$this->tos          = $tos;
		$this->musculo      = $musculo;
	}

	public function getidEnc(){
		return $this->idEnc;
	}

    public function getidClientes(){
		return $this->clientes;
	}
	
	public function getidCabeza(){
		return $this->cabeza;
	}

    public function getidRespiracion(){
		return $this->respiracion;
	}

	public function getidTos(){
		return $this->tos;
	}

	public function getidMusculo(){
		return $this->musculo;
	}

}
?>


