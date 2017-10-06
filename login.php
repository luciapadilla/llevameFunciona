<?php

require_once("funciones.php");

if (estaLogueado()) {
  header("Location:home.php");
}

$mail = "";

$arrayErrores = [];
if ($_POST) {

  //Validar
  $arrayErrores = validarLogin($_POST);

  //Si es valido, loguear
  if (count($arrayErrores) == 0) {
    loguear($_POST["email"]);
    if (isset($_POST["recordame"])) {
      recordarUsuario($_POST["email"]);
    }
    header("Location:home.php");exit;
  }else{
    $mail = $_POST["email"];
  }
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
  <link rel="stylesheet" type="text/css" href="CSS/estilos.css">
  <style type="text/css">
    input::placeholder {
    color: white;
    }
  </style>
</head>
<body>
    <div class="form-login">
    <h1 class="h1-login">Iniciar sesión en Llevame</h1>
     <form action="login.php" method="post">
     <?php if(isset($arrayErrores['email'])){?>
                <label style="color: red"><?= $arrayErrores["email"]."<br>" ?></label>
      <?php } ?>
      <input class="input" type="email" name="email" placeholder ="Email" value="<?php echo $mail ?>">
       <br>
      <?php if(isset($arrayErrores['password'])){?>
                <label style="color: red"><?= $arrayErrores["password"]."<br>"?></label>
      <?php } ?>
       <input class="input" type="password" name="password" placeholder ="Contraseña" >
       <br><br>
        <input class="boton-ingresar" type="submit" value="INGRESAR"> <br><br>
       <label class="recuerdame">Recuérdame</label>
       <input class="input-checkbox" type="checkbox" name="recordame" value="">
       <br>
       <p><a href="register.php" target="new">Crear cuenta</a></p>
     </form>
    </div>
</body>
</html>
