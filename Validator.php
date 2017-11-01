<?php 
/**
* 
*/
class Validator{
	
	function __construct()
	{
		# code...
	}

	function validarInformacion($informacion) {
	  $arrayDeErrores = [];

	  foreach ($informacion as $key => $value) {
	    $informacion[$key] = trim($value);
	  }

	  if(strlen($informacion["username"]) < 3 || strlen($informacion["username"]) > 20) {
	    $arrayDeErrores["username"] = "Username no valido";
	  }

	  if (strlen($informacion["email"]) == 0) {
	    $arrayDeErrores["email"] = "Tu email esta vacio";
	  }
	  else if(filter_var($informacion["email"], FILTER_VALIDATE_EMAIL) == false) {
	    $arrayDeErrores["email"] = "Pusiste un mail que no era valido";
	  }

	  if (strlen($informacion["password"]) < 6) {
	    $arrayDeErrores["password"] = "La contraseña tiene que tener al menos 6 caracteres";
	  } 
	  else if (($informacion["cpassword"]) != ($informacion["password"])) {
	    $arrayDeErrores["cpassword"] = "Contraseñas distintas";
	  }
	  $errorDeLaFoto = $_FILES["foto-perfil"]["error"];
	  $nombreDeLaFoto = $_FILES["foto-perfil"]["name"];
	  $extension = pathinfo($nombreDeLaFoto, PATHINFO_EXTENSION);

	  if ($errorDeLaFoto != UPLOAD_ERR_OK) {
	    $arrayDeErrores["foto-perfil"] = "Hubo un error al cargar la foto, prueba de vuelta";
	  }
	  else if ($extension != "jpg" && $extension != "jpeg" && $extension != "png" && $extension != "gif") {
	    $arrayDeErrores["foto-perfil"] = "Subiste algo que no era una imagen";
	  }

	  if(!isset($informacion["acceptterm"])){
	    $arrayDeErrores["acceptterm"] = "Si no aceptas nuestras condiciones no te registras";
	  }

	  return $arrayDeErrores;
	}


	function validarLogin($informacion) {
		$db = new DB();
	  $arrayDeErrores = [];

	  if (strlen($informacion["email"]) == 0) {
	    $arrayDeErrores["email"] = "Eu, ni pusiste mail";
	  }
	  else if(filter_var($informacion["email"], FILTER_VALIDATE_EMAIL) == false) {
	    $arrayDeErrores["email"] = "Pusiste un mail que no era valido";
	  }
	  else if ($db->traerPorEmail($informacion["email"]) == NULL) {
	    $arrayDeErrores["email"] = "Usuario inexistente";
	  } else {
	    //Validar la contraseña
	    $usuario = $db->traerPorEmail($informacion["email"]);


	    if (password_verify($informacion["password"], $usuario->getPassword()) == false) {
	      $arrayDeErrores["password"] = "La contraseña no verifica";

	    }
	  }
	  return $arrayDeErrores;

	}
}

?>