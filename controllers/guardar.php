<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include './config/config.php';

if (isset($_POST['register'])) {
    $tipo = $_POST['tipo'];
    $archivo = $_FILES['archivos'];
    $usuario = $_POST['usuario'];

    if ($archivo['type'] === 'application/pdf') {
        if ($tipo === '1') {
            if (file_exists('Facturas/')) {
                if (
                    move_uploaded_file(
                        $archivo['tmp_name'],
                        'Facturas/' . $archivo['name']
                    )
                ) {
                    echo '<center>Archivo guardado con exito</center>';
                } else {
                    echo '<center>Archivo no se pudo guardar</center>';
                }
            }
        }

        if ($tipo === '2') {
            if (file_exists('Cuentas/')) {
                if (
                    move_uploaded_file(
                        $archivo['tmp_name'],
                        'Cuentas/' . $archivo['name']
                    )
                ) {
                    echo '<center>Archivo guardado con exito</center>';
                } else {
                    echo '<center>Archivo no se pudo guardar</center>';
                }
            }
        }

        if ($tipo === '3') {
            if (file_exists('Cheques/')) {
                if (
                    move_uploaded_file(
                        $archivo['tmp_name'],
                        'Cheques/' . $archivo['name']
                    )
                ) {
                    echo '<center>Archivo guardado con exito</center>';
                } else {
                    echo '<center>Archivo no se pudo guardar</center>';
                }
            }
        }

        $query = $connection->prepare(
            'INSERT INTO archivos(tipo_archivo,nombre_archivo,usuario) VALUES (:tipo,:archivonombre,:usuario)'
        );
        $query->bindParam('tipo', $tipo, PDO::PARAM_INT);
        $query->bindParam('archivonombre', $archivo['name'], PDO::PARAM_STR);
        $query->bindParam('usuario', $usuario, PDO::PARAM_INT);
        $result = $query->execute();

        if ($result) {
            echo '<center><p class="success">Se ha guardado exitosamente!</p></center>';
        } else {
            echo '<center><p class="error">Algo malo pasó</p></center>';
        }
    } else {
        echo '<center>Solo se admiten archivos PDF</center>';
    }
}
