<?php 

/**
* 
*/


class DB {

	private $servername;
	private $usernames;
	private $password;
	private $conn;

	function __construct(){
		$servername = "localhost";
		$username = "root";
		$password = "root";
		try {
		    $this->conn = new PDO("mysql:host=$servername;dbname=llevame_db", $username, $password);
		}
		catch(PDOException $e){ 
		    echo "Connection failed: " . $e->getMessage();
		}
	}


	
	public function saveUser($usuario) {
	  	$nombre = $usuario->getName();
	 	$email = $usuario->getEmail();
	 	$password = $usuario->getPassword();

	  	$query = $this->conn->exec("INSERT INTO users(username,email,password) VALUES('$nombre','$email','$password');");
	}



	public function traerPorEmail($email) {
	  $query = $this->conn->prepare("SELECT * FROM users WHERE email = '$email'");
	  $query->execute();

	  $resultado = $query->fetch(PDO::FETCH_ASSOC);

	  $user = new User($resultado['username'],$resultado['email'],$resultado['password']);

	  return $user;
	}

}

?>