<?php
$servername = "localhost";
$username = "root";
$password = "root";


try {
    $conn = new PDO("mysql:host=$servername;dbname=llevame_db", $username, $password);
    }
catch(PDOException $e)
    { 
    echo "Connection failed: " . $e->getMessage();
    }

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
  global $conn;
  $nombre = $usuario["username"];
  $email = $usuario["email"];
  $password = $usuario["password"];

  $query = $conn->exec("INSERT INTO users(username,email,password) VALUES('$nombre','$email','$password');");
}

function traerTodos() {
  global $conn;

  $query = $conn->prepare("SELECT * FROM users");
  $query->execute();

  $resultado = $query->fetchall(PDO::FETCH_ASSOC);

  return $resultado;
}


function traerPorEmail($email) {
  global $conn;

  $query = $conn->prepare("SELECT * FROM users WHERE email = '$email'");
  $query->execute();

  $resultado = $query->fetch(PDO::FETCH_ASSOC);

  return $resultado;
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
    // if (count($usuario) == 1) {
    //   $usuario = $usuario[0];
    // }
    // var_dump($informacion);

    // echo "<pre>";
    // var_dump($usuario);
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
