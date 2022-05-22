<?php
class Encuesta{
    private $idEnc;
    private $nomclie;
	private $cabeza;
	private $respiracion;
	private $tos;
	private $musculo;


	public function Encuesta($idEnc,$nomclie,$cabeza,$respiracion,$tos,$musculo){

		$this->idEnc        = $idEnc;
        $this->nomclie      = $nomclie;
		$this->cabeza       = $cabeza;
		$this->respiracion  = $respiracion;
		$this->tos          = $tos;
		$this->musculo      = $musculo;
	}

	public function getidEnc(){
		return $this->idEnc;
	}

    public function getnomClien(){
		return $this->nombrecliente;
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


