<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<section class="navv">
   <div class="navbar-fixed">
        <nav class="teal darken-1">
            <div class="nav-wrapper container">
            <a href="./index.php" class="brand-logo">Logo</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="./revistas.php">Revistas</a></li>
                <li><a href="./videos.php">Videos</a></li>
                <li><a href="./documentales.php">Documentales</a></li>
            </ul>
            </div>
        </nav>
    </div>
    <ul class="sidenav" id="mobile-demo">
        <li><a href="./index.php">Inicio</a></li>
        <li><a href="./revistas.php">Revistas</a></li>
        <li><a href="./videos.php">Videos</a></li>
        <li><a href="./documentales.php">Documentales</a></li>
     </ul>
</section>
<?php
session_start();
if (@!$_SESSION['nombre']) {
 ?>
 hola guapo
 <?php
}elseif ($_SESSION['rol']==null) {
	?>
  usuario guapo
  <?php
}
?>


   <footer class="page-footer teal darken-1">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Contáctanos</h5>
                <ul>

                <li><a class="grey-text text-lighten-3" href="./contactanos.php">(998)1887007
               </a></li>
                </ul>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Visítanos</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="./revistas.php">Revistas</a></li>
                  <li><a class="grey-text text-lighten-3" href="./videos.php">Videos</a></li>
                  <li><a class="grey-text text-lighten-3" href="./documentales.php">Documentales</a></li>
                  <li><a class="grey-text text-lighten-3" href="./contactanos.php">Contactanos</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2019 Copyright 
            
            </div>
          </div>
        </footer>

   <!--JavaScript at end of body for optimized loading-->
   <script type="text/javascript" src="js/materialize.min.js"></script>
   <script>
      document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
  });
      </script>
</body>
</html>