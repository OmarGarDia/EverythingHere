<?php
session_start();

require_once 'DB.php'; // Reemplaza 'DB.php' con el archivo que contiene tu lógica de conexión a la base de datos
require_once 'controllers/LoginController.php';
// Crear una instancia de tu conexión a la base de datos
$db = new DB();


// Obtener la URL desde la variable $_GET o establecerla en 'login' por defecto
$url = isset($_GET['url']) ? $_GET['url'] : 'login';

// Crear el controlador correspondiente según la URL
switch ($url) {
    case 'olvidar-contrasena':
        require_once 'controllers/OlvidoContrasenaController.php';
        $controller = new OlvidoContrasenaController();
        break;
    case 'registro':
        require_once 'controllers/RegistroController.php';
        $controller = new RegistroController();
        break;
    case 'sign-up':
        require_once 'controllers/signupController.php';
        $controller = new signupController();
        break;
    case 'inicio':
        require_once 'controllers/HomeController.php';
        $controller = new HomeController();
        break;
    case 'profile':
        require_once 'controllers/ProfileController.php';
        $controller = new ProfileController();
        break;
    default:
        // Por defecto, carga el controlador de login
        require_once 'controllers/LoginController.php';
        $controller = new LoginController($db);
        break;
}

// Llamar al método index del controlador
$controller->index();
