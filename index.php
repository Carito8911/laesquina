<?php
include 'controllers/inicioSesion.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Bankolombia - FolderBank</title>
</head>

<body>
    <div class="container">
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <div class="fadeIn first">
                    <img src="img/archivo-e1418047657309.jpg" id="icon" alt="User Icon" />
                </div>
                <div>
                    <h2>FolderBank</h2>
                </div>
                <form method="post" action="">
                    <input type="text" id="usuario" class="fadeIn second" name="usuario" placeholder="Usuario">
                    <input type="password" id="password" class="fadeIn third" name="password" placeholder="Clave">
                    <input type="submit" name="login" class="fadeIn fourth" value="Ingresar">
                </form>

            </div>
        </div>
    </div>
</body>

</html>