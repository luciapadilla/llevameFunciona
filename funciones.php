<?php
session_start();

if (!estaLogueado() && isset($_COOKIE["usuarioLogueado"])) {
  loguear($_COOKIE["usuarioLogueado"]);
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
function createUser($data) {
  return [
    "username" => $data["username"],
    "email" => $data["email"],
    "password" => password_hash($data["password"], PASSWORD_DEFAULT),
  ];
}

function saveUser($usuario) {
  $usuarioJSON = json_encode($usuario);
  file_put_contents("usuarios.json", $usuarioJSON . PHP_EOL, FILE_APPEND);
}

function traerTodos() {
  $archivo = file_get_contents("usuarios.json");
  $array = explode(PHP_EOL, $archivo);
  array_pop($array);

  $arrayFinal = [];
  foreach ($array as $usuario) {
    $arrayFinal[] = json_decode($usuario, true);
  }

  return $arrayFinal;
}


function traerPorEmail($email) {
  $todos = traerTodos();

  foreach ($todos as $usuario) {
    if ($usuario["email"] == $email) {
      return $usuario;
    }
  }
}
function validarLogin($informacion) {
  $arrayDeErrores = [];

  if (strlen($informacion["email"]) == 0) {
    $arrayDeErrores["email"] = "Eu, ni pusiste mail";
  }
  else if(filter_var($informacion["email"], FILTER_VALIDATE_EMAIL) == false) {
    $arrayDeErrores["email"] = "Pusiste un mail que no era valido";
  }
  else if (traerPorEmail($informacion["email"]) == NULL) {
    $arrayDeErrores["email"] = "Usuario inexistente";
  } else {
    //Validar la contraseña
    $usuario = traerPorEmail($informacion["email"]);
    if (password_verify($informacion["password"], $usuario["password"]) == false) {
      $arrayDeErrores["password"] = "La contraseña no verifica";
    }
  }
  return $arrayDeErrores;

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
  if (estaLogueado()) {
    return traerPorEmail($_SESSION["usuarioLogueado"]);
  }
  else {
    return NULL;
  }
}

function signOut(){
  session_destroy();
  setcookie("usuarioLogueado","", -1);
}

?>
