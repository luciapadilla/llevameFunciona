<?php
require_once("funciones.php");


if($_POST){
	signOut();
	header("Location:login.php");exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<div class="jumbotron">
 	 <?php if (estaLogueado()) : ?>
    <h1>Bienvenido <?=usuarioLogueado()["username"]."!!" ?></h1>
    <form action="home.php" method="post">
		<button type="submit" name="sarasa">Cerrar Sesion</button>
	</form>
  	<?php else: ?>
    <h1>Bienvenidos a mi sitio!</h1>
  	<?php endif; ?>
	</div>
</body>
</html>