
<link rel="stylesheet" href="CSS/estilos.css">

<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<meta name="viewport"content="width=device-width, initial-scale=1">
<header>
	<div class="headercontainer">
		<div class="header_main">
			<img class="logo" src="imagenes/logoblanco.png" >
			<img class="iconomenumobile" src="imagenes/iconomenumobile.png" onclick="openNav(this)">
			<div class="topnav" id="myTopnav">
  			<a href="index.php">INICIO</a>
  			<a href="index.php">QUIENES SOMOS</a>
 			<a href="index.php">FAQs</a>
 			<a href="index.php">AYUDA</a>
 			<a href="login.php">INGRESAR</a>
		</div>

		</div>
		<nav class="panel">
			<div id="mySidenav" class="sidenav">
			  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			  <a href="index.php">Inicio</a>
			  <a href="index.php">Quienes Somos</a>
			  <a href="index.php">FAQs</a>
			  <a href="index.php">Ayuda</a>
			  <a href="login.php">Ingresar</a>

			</div>

		</nav>


	</div>
	<script>
		var hamburgerView;
		function openNav(x) {
			hamburgerView = x;
		    x.classList.toggle("change");
		    document.getElementById("mySidenav").style.width = "250px";
    		document.getElementById("main").style.marginLeft = "250px";
    		document.body.style.backgroundColor = "rgba(0,0,0,0.4)";

		}

		function closeNav() {
			hamburgerView.classList.toggle("change");
    		document.getElementById("mySidenav").style.width = "0";
   		 	document.getElementById("main").style.marginLeft = "0";
   		 	document.body.style.backgroundColor = "white";
		}
	</script>
</header>
