<?php

class User
{
	private $login;
	private $password;
	
	public function __construct($login,$password)
	{
		$this->login=$login;
		$this->password=$password;
		
	}
	public function getLogin()
	{return $this->login;}
	public function getPassword()
	{return $this->password;}
		
	public function setLogin($login)
	{return $this->login=$login;}
	public function setPassword($password)
	{return $this->password=$password;}
	

	public static function findUserByLogin($username, $password){
		$req = "SELECT * FROM user WHERE login='$username' AND password='$password'";
				var_dump($req);

		$db = DB::getConnexion();
        $res = $db->query($req);
        foreach($res as $row){
	        if($row){
	  	 		$user = new self($row['login'],$row['password']);
	  	 		return $user;
	        }else{
	        	return NULL;
	        }
        }

	}
}
?>