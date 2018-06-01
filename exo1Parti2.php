<?php
class Hotel {
	private $nom;
	private $capacite;
	private $chambres=array("4116,15,Est","4117,15,Nord","4118,30,Sud");
	
	public function __construct ($nom, $capacite){
		$this ->nom=$nom;
		$this ->capacite=$capacite;
	}
	public function getNom() {
		return $this->nom;
	}
	public function getCapacite (){
		return $this->capacite;
	}
	public function ChambreDisponible (){
		if (isset($this->chambres[0])|| isset($this->chambres[1])|| isset($this->chambres[2]){
			return $this ->chambrDispo= $capacite;
		}
?>