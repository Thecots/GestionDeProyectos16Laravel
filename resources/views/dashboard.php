<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Srcots</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/global.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <link rel="stylesheet" href="css/panels/panel1.css">
    <link rel="stylesheet" href="css/panels/panel2.css">
    <link rel="stylesheet" href="css/panels/panel3.css">
    <link rel="stylesheet" href="css/panels/panel4.css">

</head>
<body>
    <?php 
        session_start();
        if(!isset($_SESSION['id'])){
           header('location: index.php');
        }
        include("templates/header.php"); 
        include("templates/menu.php"); 
    ?>
    <div class="body">
        <div class="box">
           <?php
                include("templates/panels/panel1.php");
                include("templates/panels/panel2.php");
                include("templates/panels/panel3.php");
                include("templates/panels/panel4.php");

           ?>
        </div>
    </div>
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/cerrar_session.js"></script>
    <script src="js/menu.js"></script>
</body>
</html>