<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
} else {
    include 'controllers/guardar.php'; ?>
    <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/css/all.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <title>Guardar Archivos</title>
</head>

<body>
    <div class="nav-side-menu">
        <div class="brand">
            <img src="img/archivo-e1418047657309.jpg" alt="MarkSysNer" class="logo">
        </div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                    <a href="home.php">
                        <i class="fas fa-spell-check fa-lg"></i> Guardar Archivos
                    </a>
                </li>
                <li data-toggle="collapse" data-target="#products" class="collapsed">
                    <a href="reportes.php">
                        <i class="fas fa-boxes fa-lg"></i> Ver Archivos
                    </a>
                </li>
                <li>
                    <a href="index.php">
                        <i class="fa fa-power-off fa-lg"></i> Cerrar Sesión
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="section">
        <div class="col-lg-12">
            <h1>GUARDAR ARCHIVOS</h1>
        </div>
        <div class="col-lg-12">
            <div class="wrapper">
                <div id="formContent">
                    <div>
                        <h2>Registrar Archivos</h2>
                    </div>
                    <form method="POST" action="" enctype="multipart/form-data">
                        <select name="tipo" id="tipo" class="select_option">
                            <option value="1">FACTURA</option>
                            <option value="2">CUENTA DE COBRO</option>
                            <option value="3">CHEQUE</option>
                        </select>
                        <br/>
                        <br/>
                        <input type="file" class="fadeIn third" name="archivos" placeholder="Seleccione Archivo">
                        <input type="hidden" class="fadeIn third" name="usuario" value="<?php $_SESSION[
                            'user_id'
                        ]; ?>">
                        <br/>
                        <br/>
                        <input type="submit" name="register" class="fadeIn fourth" value="Guardar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
    <?php
}
?>
