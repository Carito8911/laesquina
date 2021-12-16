<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include './config/config.php';
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['usuario'];
    $password = $_POST['password'];

    $query = $connection->prepare(
        'SELECT * FROM users WHERE usuario=:username AND password=:pass'
    );

    $query->bindParam('username', $username, PDO::PARAM_STR);
    $query->bindParam('pass', $password, PDO::PARAM_STR);
    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);

    if (!$result) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {
        $_SESSION['user_id'] = $result['id'];
        header('Location: home.php');
    }
}

?>
