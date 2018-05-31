<?php
class Chambre {
	
	private $numero;
	private $superficie;
	private $orientation;
	public function __construct($numero= null,$superficie= null,$orientation= null){
		$this->numero;
		$this->superficie;
		$this->orientation;
	}
	public function affiche(){
		echo "le numero de la chambre est: ".$this->numero."<br/>";
		echo"la superficie est de: ".$this->superficie."<br/>";
		echo "et l'orientation: ".$this->orientation;
}
}
$chamb= new Chambre (null, null, null);
echo $chamb->affiche();