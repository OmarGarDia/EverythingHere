<?php
class MainController
{
    public function index()
    {
        $pagina = isset($_GET['url']) ? $_GET['url'] : 'login';

        // Agrega esta línea para mostrar la página que estás intentando cargar
        echo "Intentando cargar la página: $pagina";

        switch ($pagina) {
            case 'login':
                require 'controllers/LoginController.php';
                $controller = new LoginController();
                break;
            case 'olvidar-contrasena':
                require 'controllers/OlvidoContrasenaController.php';
                $controller = new OlvidoContrasenaController();
                break;
            case 'sign-up':
                require 'controllers/RegistroController.php';
                $controller = new RegistroController();
                break;
                // Puedes agregar más casos según tus necesidades
            case 'inicio':
                require_once 'controllers/HomeController.php';
                $controller = new HomeController();
                break;
            default:
                // Agrega una lógica para manejar páginas no válidas (página de error)
                $this->mostrarPaginaError(404);
                return;
        }

        $controller->index();
        die;
    }

    public function mostrarPaginaError($codigo)
    {
        http_response_code($codigo);

        switch ($codigo) {
            case 403:
                include "views/modulos/403.php";
                break;
            case 404:
                include "views/modulos/404.php";
                break;
            case 500:
                include "views/modulos/500.php";
                break;
            default:
                // Puedes agregar lógica adicional o redirección aquí si es necesario
                include "views/modulos/404.php";
                break;
        }

        // Termina la ejecución del script después de mostrar la página de error
        die;
    }
}
