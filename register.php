<?php
 require_once("funciones.php");
if (estaLogueado()) {
  header("Location:home.php");
}

$arrayErrores = [];

$mail = "";
$username = "";
// Si vino por POST
if (isset($_POST["Submit"])) {
  $arrayErrores = validarInformacion($_POST);

  if (count($arrayErrores) == 0) {

    $usuario = createUser($_POST);


    $usuarios = traerTodos();
    foreach ($usuarios as $unUser) {
      if($unUser["email"] == $usuario["email"]){
        echo "ya estas en nuestra base";
        break;
      }else{
        saveUser($usuario);
      }
    }
    $archivo = $_FILES["foto-perfil"]["tmp_name"];

    $nombreDeLaFoto = $_FILES["foto-perfil"]["name"];
    $extension = pathinfo($nombreDeLaFoto, PATHINFO_EXTENSION);

    $nombre = dirname(__FILE__) . "/subidos/" . $_POST["email"] . ".$extension";

    move_uploaded_file($archivo, $nombre);
    if(file_exists($nombre)){
        header("Location:login.php");exit();
    }
  }
}
if(isset($_POST["LogIn"])){
        header("Location:login.php");exit();
}


if($_POST){
  if(!isset($arrayErrores["email"])) {
    $mail = $_POST["email"];
  }
  if(!isset($arrayErrores["username"])) {
    $username = $_POST["username"];
  }
}

?>


<!DOCTYPE html>
<html>
<head>
  <title>Registrarse</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="CSS/estilos.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito|Nunito+Sans" rel="stylesheet">
</head>
<body>
  <div class="form-registrarse">
    <h1 class="h1-cuenta">Crear cuenta</h1>
    <form action="register.php" method="post" enctype="multipart/form-data">
      <?php if(isset($arrayErrores['username'])){?>
                <label style="color: red"><?= $arrayErrores["username"]."<br>" ?></label>
      <?php } ?>
      <input class="input-cuenta" type="text" name="username" placeholder="Username" value="<? echo $username ?>"><br>


      <label style="color:black" for="">Foto de Perfil</label>
      <?php if(isset($arrayErrores['foto-perfil'])){?>
                <label style="color: red"><?= $arrayErrores["foto-perfil"]."<br>" ?></label>
      <?php } ?>
                  <input class="form-control" type="file" name="foto-perfil"><br>


      <?php if(isset($arrayErrores['email'])){?>
                <label style="color: red"><?= $arrayErrores["email"]."<br>" ?></label>
      <?php } ?>
      <input class="input-cuenta" type="text" name="email" placeholder="Email" value="<? echo $mail ?>"><br>

      <?php if(isset($arrayErrores['password'])){?>
                <label style="color: red"><?= $arrayErrores["password"]."<br>"?></label>
      <?php } ?>
      <input class="input-cuenta" type="password" name="password" placeholder="Contraseña" value=""><br>


      <?php if(isset($arrayErrores['cpassword'])){?>
                <label style="color: red"><?= $arrayErrores["cpassword"]."<br>"?></label>
      <?php } ?>
      <input class="input-cuenta"t type="password" name="cpassword" placeholder="Confirmar Contraseña" value=""><br>
      <br>


      <label class="termino-condiciones">Acepto terminos y condiciones</label>
      <?php if(isset($arrayErrores['acceptterm'])){?>
                <label style="color: red"><?= $arrayErrores["acceptterm"]."<br>"?></label>
      <?php } ?>
      <input class="input-checkbox-cuenta" type="checkbox" name="acceptterm">
      <br><br>
      <input class="boton-ingresar-cuenta" type="submit" name="Submit" value="CREAR CUENTA">
      <br><br>

      <label><a type="submit" href="login.php">¿Ya tenes cuenta?</a></label>

    </form>
  </div>
</body>
</html>
