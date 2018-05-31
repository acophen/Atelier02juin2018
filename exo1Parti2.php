<?php
class Hotel{
	private $nom;
	private $capacite;
	private $chambres=array('4116,15,Est','4117,15,Nord','4118,30,Sud');
	
	
	public function __construct($nom,$capacite){
		$this->nom=$nom;
		$this->chambdispo=$capacite;
		$this->chambreserv= $capacite *0;
		$this->chambreserv1=3;
		$this->chambdispo1 -=$capacite;
	}
	public function affiche(){
		echo "le nom de l'hotel: ".$this->nom."<br/>";
		echo "le nombre de chambres reservées dans l'hôtel: ".$this->chambreserv."<br/>";
		echo "le nombre de chambres disponibles: ".$this->chambdispo."<br/>";
		echo "le détail des réservations : <br/>";
		echo" Aucune réservation!  <br/>";
		echo"-----------------------<br/>";
	}
	public function afficher(){
		echo "le nom de l'hotel: ".$this->nom."<br/>";
		echo "le nombre de chambres reservées dans l'hôtel: ".$this->chambreserv1."<br/>";
		echo "le nombre de chambres disponibles: ".$this->chambdispo1."<br/>";
		echo "le détail des réservations : <br/>";
		
}
$hotelBordeaux= new Hotel("Hôtel Bordeaux", 50);
echo $hotelBordeaux->affiche();
echo $hotelBordeaux->afficher();
	
?>