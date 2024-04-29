<?php

require_once 'controllers/ActaController.php'; 
require_once 'controllers/UserController.php';

session_start();

error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'create_acta') {

    $actaController = new ActaController(); // Corregir la instancia del controlador de autenticación

    $result = $actaController->create($_POST['asunto'], $_POST['resultado'], $_POST['responsable'], $_POST['fecha'], $_POST['horario_inicio'], $_POST['horario_final']);

    include "views/create_acta.php";

} else

// Rutas para autenticación
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'login') {

    $authController = new UserController(); // Corregir la instancia del controlador de autenticación

    $result = $authController->login($_POST['username'], $_POST['password']);


    if ($result) {
        echo "Inicio de sesión casi exitoso.";

        include "views/create_acta.php";
    } else {
        echo "Nombre de usuario o contraseña incorrectos.";
        include "views/login.php";
    }

} else if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'create_user') {

    $userController = new UserController();

    $result = $userController->create($_POST['username'], $_POST['password']);

    if ($result) {
        echo "Usuario creado exitosamente.";
    } else {
        echo "Error al crear el usuario.";
    }

} else if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['view']) && $_GET['view'] === 'login') {
    include 'views/login.php';
} else if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['view']) && $_GET['view'] === 'register') {
    include 'views/create_user.php';
}


