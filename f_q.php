<!DOCTYPE html>
<html>
<head>
  <title>FaQs</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Nunito|Nunito+Sans" rel="stylesheet">
  <link rel="stylesheet" href="CSS/estilos.css">
</head>
<body>
    <?php  require_once("header.php");?>
  <div class="preg-container">
    <h1 class="h1-faqs">FAQs</h1>

   <div class="preg1-2">
      <div class="preg-1">
      <h2 class="h2-preg">¿ES GRATIS? </h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
        nisi ut aliquip ex ea commodo consequat. </p>
    </div>
    <div class="preg">
      <h2 class="h2-preg">¿ME BUSCAN?</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
        nisi ut aliquip ex ea commodo consequat. </p>
    </div>
  </div>

  <div class="preg3-4">
    <div class="preg">
      <h2 class="h2-preg">¿Y SI NO LLEGO AL PUNTO DE ENCUENTRO?</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
        nisi ut aliquip ex ea commodo consequat.  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut

       </p>
    </div>
    <div class="preg">
      <h2 class="h2-preg">¿CON QUIENES VIAJO?</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
        nisi ut aliquip ex ea commodo consequat.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
          labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
              labore et dolore magna aliqua</p>
    </div>
  </div>

  <div class="preg5-img">
    <div class="preg">
      <h2 class="h2-preg">¿ES SEGURO? </h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
        nisi ut aliquip ex ea commodo consequat. </p>
    </div>
    <img class="img-faqs"src="../imagenes/faqs1.jpg" alt="">
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
</html>
