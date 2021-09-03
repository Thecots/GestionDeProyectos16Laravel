<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Srcots</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/index.css">
</head>
<body>
    <?php 
        session_start();
        if(isset($_SESSION['id'])){
           header('location: dashboard.php');
        }

        include("templates/index/panel1.php"); 
        include("templates/index/panel2.php"); 
        include("templates/index/panel3.php"); 

    ?>

    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/sessions.js"></script>
</body>
</html>