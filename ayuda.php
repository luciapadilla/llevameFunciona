<!DOCTYPE html>
<html>
<head>
  <title>Ayuda</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Nunito|Nunito+Sans" rel="stylesheet">
  <link rel="stylesheet" href="CSS/estilos.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


</head>
<body>
  <?php  require_once("header.php");?>
   <div class="help-container">
     <div class="tit-ayuda">
       <h1 class="h1-ayuda">AYUDA</h1>
       <h2 class="h2-ayuda">¿COMO FUNCIONA?</h2>
     </div>
     <div class="grafico">
       <img class="grafico-img" src="../imagenes/comofunciona.png" alt="">
       <img class="grafico-web"src="../imagenes/comofuncionaweb.png" alt="">
     </div>
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
</body>
</hmtl>
