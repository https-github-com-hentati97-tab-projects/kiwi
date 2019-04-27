<?php

class client
{
	private $nomclient;
	private $nomcommerce;
	private $cin;
	private $mail;
	private $telephone;
	private $adresse;
	private $motdepasse;
	private $datee;
	private $status;
	public function __construct($nomclient,$nomcommerce,$cin,$mail,$telephone,$adresse,$motdepasse,$datee,$status)
	
	{
		$this->nomclient=$nomclient;
		$this->nomcommerce=$nomcommerce;
		$this->cin=$cin;
		$this->mail=$mail;
		$this->telephone=$telephone;
		$this->adresse=$adresse;
		$this->motdepasse=$motdepasse;
		$this->datee=$datee;
		$this->status=$status;
	}
	public function getnomclient(){return $this->nomclient;}
	public function getnomcommerce(){return $this->nomcommerce;}
	public function getcin(){return $this->cin;}
	public function getmail(){return $this->mail;}
	public function gettelephone(){return $this->telephone;}
	public function getadresse(){return $this->adresse;}
	public function getmotdepasse(){return $this->motdepasse;}
	public function getdatee(){return $this->datee;}
	public function getstatus(){return $this->status;}
	public function setnomclient($nomclient){$this->nomclient=$nomclient;}
	public function setnomcommerce($nomcommerce){$this->nomcommerce=$nomcommerce;}
	public function setcin($cin){$this->cin=$cin;}
	public function setmail($mail){$this->mail=$mail;}
	public function settelephone($telephone){$this->telephone=$telephone;}
	public function setadresse($adresse){$this->adresse=$adresse;}
	public function setmotdepasse($motdepasse){$this->motdepaase=$motdepasse;}
	public function setdatee($datee){$this->datee=$datee;}
	public function setstatus($status){$this->status=$status;}	
}
?>