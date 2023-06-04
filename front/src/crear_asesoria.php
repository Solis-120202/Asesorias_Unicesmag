
<?php
    session_start();
    //echo $_SESSION['id_usuario'];
    
    if(!isset($_SESSION["id_usuario"])){
		  header("Location: ../../index.php");
	  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Crear Asesoria</title>

    <!-- Icons font CSS-->
    <link href="../../plantillas/colorlib-regform-4/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../../plantillas/colorlib-regform-4/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../../plantillas/colorlib-regform-4/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../../plantillas/colorlib-regform-4/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../../plantillas/colorlib-regform-4/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    
    <form name="Login Form" action="http://127.0.0.1/Asesorias_Unicesmag/back/src/crear_asesoria.php" method="post">
        <div class="bg order-1 order-md-2" style="background-image: url('../images/front2.jpeg');">
            <br><br><br><br><br><br>
            <div class="wrapper wrapper--w680">
                <div class="card card-4">
                    <div class="card-body">
                        
                        <h2 class="title">Asesoria</h2>
                        <form method="POST">
                            <div class="input-group">
                                <label class="label" required>Tipo de Asesoria</label>
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="t_aseso" required>
                                        <option disabled="disabled" selected="selected">Escoja una opción</option>
                                        <option value="Virtual">Virtual</option>
                                        <option value="Presencial">Presencial</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="input-group">
                                    <label class="label" required>Duración</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="duraci" required>
                                            <option disabled="disabled" selected="selected">Escoja una opción</option>
                                            <option value="5 minutos">5 minutos</option>
                                            <option value="15 minutos">15 minutos</option>
                                            <option value="20 minutos">20 minutos</option>
                                            <option value="30 minutos">30 minutos</option>
                                            <option value="1 hora">1 hora</option>
                                            <option value="2 horas">2 horas</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                                
                                <div class="input-group">
                                    <label class="label" required>Asignatura</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="asig" required>
                                            <option disabled="disabled" selected="selected">Escoja una opción</option>
                                            <option value="1">Programación Avanzada</option>
                                            <option value="2">Base de datos III</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Fecha</label>
                                        <input class="input--style-4" type="date" name="fecha" required>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Hora</label>
                                        <input class="input--style-4" type="time" name="hora" required>
                                    </div>
                                </div>
                            </div>
                                
                            
                                              
                            <div class="p-t-15">
                                <center><button class="btn btn--radius-2 btn--blue" type="submit">Registrar</button></center>
                            </div><br>
                            <center><button class="btn btn--radius-2 btn--blue" type="submit"><a href="http://127.0.0.1/Asesorias_Unicesmag/front/src/home_estudiante.php">Cancelar</a>
                            </button></center>
                        </form>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br>
        </div>

        <!-- Jquery JS-->
        <script src="../../plantillas/colorlib-regform-4/vendor/jquery/jquery.min.js"></script>
        <!-- Vendor JS-->
        <script src="../../plantillas/colorlib-regform-4/vendor/select2/select2.min.js"></script>
        <script src="../../plantillas/colorlib-regform-4/vendor/datepicker/moment.min.js"></script>
        <script src="../../plantillas/colorlib-regform-4/vendor/datepicker/daterangepicker.js"></script>

        <!-- Main JS-->
        <script src="../../plantillas/colorlib-regform-4/js/global.js"></script>
    </form>
</body>
</html>