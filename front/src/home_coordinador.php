<?php
    session_start();
    //echo $_SESSION['id_usuario'];
    
    if(!isset($_SESSION["id_usuario"])){
		  header("Location: ../../index.php");
	  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="../../plantillas/website-menu-03/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../../plantillas/website-menu-03/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../plantillas/website-menu-03/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="../../plantillas/website-menu-03/css/style.css">

    <title>Home Coordinador</title>
  </head>
  <body>


    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="home_coordinador.php" class="text-white mb-0">UNICESMAG</a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="has-children">
                  <a href="about.html"><span>Registrar</span></a>
                  <ul class="dropdown arrow-top">
                    <li><a href="crear_facultad.html">Facultad</a></li>
                    <li><a href="crear_programa.html">Programa</a></li>
                    <li><a href="crear_asignatura.html">Asignatura</a></li>
                    <li><a href="crear_estu_doce.html">Estudiante o Docente</a></li>
                    </li>
                  </ul>
                </li>
                <li><a href="../../back/src/listar_asesorias_coor.php"><span>Ver asesorias</span></a></li>
                <li><a href="../../back/src/editar_datos_coor.php"><span>Datos Personales</span></a></li>
                <li><a href="../../back/src/listar_usuarios.php"><span>Usuarios</span></a></li>
                <li><a href="../../back/src/logout.php"><span>Cerrar Sesion</span></a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

    <div class="hero" style="background-image: url('../images/front2.jpeg');"></div>
  
    <script src="../../plantillas/website-menu-03/js/jquery-3.3.1.min.js"></script>
    <script src="../../plantillas/website-menu-03/js/popper.min.js"></script>
    <script src="../../plantillas/website-menu-03/js/bootstrap.min.js"></script>
    <script src="../../plantillas/website-menu-03/js/jquery.sticky.js"></script>
    <script src="../../plantillas/website-menu-03/js/main.js"></script>
  </body>
</html>