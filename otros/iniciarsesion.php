<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>JOPE.GG - LOGIN</title>
  <meta name="description" content="Free Bootstrap 4 Template by uicookies.com">
  <meta name="keywords"
    content="Free website templates, Free bootstrap themes, Free template, Free bootstrap, Free website template">

  <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400"
    rel="stylesheet">

  <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="../assets/fonts/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../assets/fonts/law-icons/font/flaticon.css">

  <link rel="stylesheet" href="../assets/fonts/fontawesome/css/font-awesome.min.css">


  <link rel="stylesheet" href="../assets/css/slick.css">
  <link rel="stylesheet" href="../assets/css/slick-theme.css">

  <link rel="stylesheet" href="../assets/css/helpers.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/landing-2.css">
</head>

<body data-spy="scroll" data-offset="200">

  <!--Cabecera-->
  <nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar">
    <div class="container">
      <a class="navbar-brand" href="../index.html">JOPE.GG</a>
      <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#probootstrap-navbar"
        aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span><i class="ion-navicon"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="probootstrap-navbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="../index.html#section-home">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="galeria.html">Galería</a></li>
          <li class="nav-item"><a class="nav-link" href="../index.html#section-reviews">Sobre Nosotros</a></li>
        </ul>
      </div>
    </div>
  </nav>



  <!--Formulario inicio-->
  <section class="pb_cover_v3 overflow-hidden cover-bg-indigo cover-bg-opacity pb_gradient_v1 pb_slant-white"
    id="section-home">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-1">
        </div>
        <div class="col-md-5 relative align-self-center">
        <?php
            if( !empty( $_GET[ 'success' ] ) && ( $_GET[ 'success' ] == FALSE ) ){
              $message = "Username and/or Password incorrect.\\nTry again.";
              echo "<script type='text/javascript'>alert('$message');</script>";
            }
          ?>
          <form action="login.php" method="POST" class="bg-white rounded pb_form_v1">
            <h2 class="mb-4 mt-0 text-center">Iniciar Sesión</h2>
            <div class="form-group">
              <input type="email" name="email" class="form-control pb_height-50 reverse" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="password" name="contrasena" class="form-control pb_height-50 reverse"
                placeholder="Contraseña">
            </div>
            <div class="form-group">
              <input type="submit" name="iniciarsesion"
                class="btn btn-primary btn-lg btn-block pb_btn-pill  btn-shadow-blue" value="Entrar">
              <p></p>
              <div class="text-center">
                <a href="registrarse.html">
                  <p style="color: teal">¿No tienes una cuenta?</p>
                </a>
              </div>
            </div>
          </form>
          
        </div>
      </div>
    </div>
  </section>

  <div class="container text-center">
    <p>Copyright © 2018 · JOPE.GG by Robert Filip</p>
  </div>
  <!-- loader -->
  <div id="pb_loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#1d82ff" /></svg></div>



  <script src="../assets/js/jquery.min.js"></script>

  <script src="../assets/js/popper.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/slick.min.js"></script>
  <script src="../assets/js/jquery.mb.YTPlayer.min.js"></script>

  <script src="../assets/js/jquery.waypoints.min.js"></script>
  <script src="../assets/js/jquery.easing.1.3.js"></script>

  <script src="../assets/js/main.js"></script>

</body>

</html>