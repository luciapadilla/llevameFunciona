<?php 

/**
* 
*/
class Session{
	
	function __construct()
	{
		session_start();

	}


	function loguear($email) {
	  $_SESSION["usuarioLogueado"] = $email;
	}

	function recordarUsuario($email) {
	  setcookie("usuarioLogueado", $email, time() + 60*60*24*7);
	}

	function estaLogueado() {
	  if (isset($_SESSION["usuarioLogueado"])) {
	    return true;
	  }
	  else {
	    return false;
	  }
	}
	function usuarioLogueado() {
		$db = new DB();
	  if ($this->estaLogueado()) {
	    return $db->traerPorEmail($_SESSION["usuarioLogueado"]);
	  }
	  else {
	    return NULL;
	  }
	}

	function signOut(){
	  session_destroy();
	  setcookie("usuarioLogueado","", -1);
	}

}


 ?>