<?php  

/**
* 
*/
class User 
{
	private $name;
	private $mail;
	private $password;

	function __construct($name,$mail,$password){
		$this->name = $name;
		$this->mail = $mail;
		$this->password = $password;
		
	}


	public function getName()
	{
		return $this->name;
	}
	public function getEMail()
	{
		return $this->mail;
	}
	public function getPassword(){
			return $this->password;
	}	


	public function setName($name){
		$this->name = $name;
	}
	public function setEmail($email)
	{
		$this->email = $email;
	}
	public function setPassword($password){
		$this->password = password_hash($password, PASSWORD_DEFAULT);
	}	
}


?>