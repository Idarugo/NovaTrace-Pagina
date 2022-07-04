<?php
class Encuesta{
    private $idEnc;
	private $fecha;
	private $usuario;
	private $cabeza;
	private $respiracion;
	private $tos;
	private $musculo;


	public function Encuesta($idEnc,$fecha,$usuario,$cabeza,$respiracion,$tos,$musculo){

		$this->idEnc        = $idEnc;
        $this->fecha        = $fecha;
		$this->usuario      = $usuario;
		$this->cabeza       = $cabeza;
		$this->respiracion  = $respiracion;
		$this->tos          = $tos;
		$this->musculo      = $musculo;
	}

	public function getidEnc(){
		return $this->idEnc;
	}

	public function getfecha(){
		return $this->fecha;
	}

    public function getidUsuario(){
		return $this->usuario;
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


