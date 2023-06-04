<?php
    session_start();
    //echo $_SESSION['id_usuario'];
    
    if(!isset($_SESSION["id_usuario"])){
		  header("Location: ../../index.php");
	  }
?>

<?php
    include("../config/connectionDB.php");
    $id = $_SESSION['id_usuario'];
    $sql = "SELECT * FROM USUARIOS WHERE id = '$id'";
    $result = $conn -> query($sql);
    if($result -> num_rows){
        while($row = $result -> fetch_assoc()){
            $f_name = $row['nombres'];
            $l_name = $row['apellidos'];
            $ident = $row['cedula'];
            $mobile = $row['celular'];
            $email = $row['correo'];
        }
    }else{
        echo "NO DATA FOUND";
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
    <title>Registrar Usuario</title>

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
    
    <form name="edit form" action="http://127.0.0.1/Asesorias_Unicesmag/back/src/cargar_datos_estu.php" method="post">
        <div class="bg order-1 order-md-2" style="background-image: url('../../front/images/front2.jpeg');">
        <br><br><br><br><br>
            <div class="wrapper wrapper--w680">
                <div class="card card-4">
                    <div class="card-body">
                        <h2 class="title">DATOS PERSONALES</h2>
                        <form method="POST">
                            <input type="hidden" name="uId" value='<?php echo $id; ?> readonly="yes"'>
                            <br> 
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Nombres</label>
                                        <input class="input--style-4" type="text" name="nombres" value= '<?php echo $f_name; ?>' required>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Apellidos</label>
                                        <input class="input--style-4" type="text" name="apellidos" value= '<?php echo $l_name; ?>' required>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Cedula</label>
                                        <input class="input--style-4" type="text" name="cedula" value= '<?php echo $ident; ?>' required>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Celular</label>
                                        <input class="input--style-4" type="text" name="celular" value= '<?php echo $mobile; ?>' required>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Correo</label>
                                    <input type="email" class="input--style-4" name="correo" value= '<?php echo $email; ?>' required>
                                </div>    
                                </div>
                            </div>    
                            <br><br>
                            <div class="p-t-15">
                                <center><button class="btn btn--radius-2 btn--blue" type="submit">Cargar</button></center>
                            </div>
                            <br>               
                            <div class="p-t-15">
                                <center><button class="btn btn--radius-2 btn--blue" type="submit"><a href="http://127.0.0.1/Asesorias_Unicesmag/front/src/home_estudiante.php">ATRAS</a></button></center>
                            </div>
                        </form>
                    </div>
                </div>
            </div><br><br><br>
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

