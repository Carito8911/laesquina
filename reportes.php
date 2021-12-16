<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
} else {
    include 'controllers/reporte.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/css/all.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Reportes</title>
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
            <h1>REPORTES</h1>
        </div>
        <div class="col-lg-12">
            <?php if (!$result) {
                echo '<p class="error">No hay datos disponibles</p>';
            } else {
                 ?>
                <table>
                    <thead>
                    <tr>
                        <th>Nombre Archivo</th>
                        <th>Tipo</th>
                        <th>Ver Archivo</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $row) { ?>
                            <tr>
                                <td><?php echo $row['nombre_archivo']; ?></td>
                                <td><?php if ($row['tipo_archivo'] === '1') {
                                    echo 'FACTURA';
                                } elseif ($row['tipo_archivo'] === '2') {
                                    echo 'CUENTAS DE COBRO';
                                } elseif ($row['tipo_archivo'] === '3') {
                                    echo 'CHEQUES';
                                } ?></td>
                                <td><?php if ($row['tipo_archivo'] == '1') {
                                    echo '<a href="Facturas/' .
                                        $row['nombre_archivo'] .
                                        '" target="_blank">' .
                                        $row['nombre_archivo'] .
                                        '</>';
                                } elseif ($row['tipo_archivo'] === '2') {
                                    echo '<a href="Cuentas/' .
                                        $row['nombre_archivo'] .
                                        '" target="_blank">' .
                                        $row['nombre_archivo'] .
                                        '</>';
                                } elseif ($row['tipo_archivo'] === '3') {
                                    echo '<a href="Cheques/' .
                                        $row['nombre_archivo'] .
                                        '" target="_blank">' .
                                        $row['nombre_archivo'] .
                                        '</>';
                                } ?></td>
                            </tr>
                            <?php } ?>
                    </tbody>
                </table>
                <?php
            } ?>
        </div>
    </div>
</body>
</html>
<?php
}
?>
