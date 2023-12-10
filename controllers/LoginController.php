<?php
require_once 'models/UsuarioModel.php'; // Asegúrate de incluir el archivo con la definición de UsuarioModel
class LoginController
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Se recibieron datos del formulario de login
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];

            // Verificar credenciales
            $usuarioModel = new UsuarioModel($this->db);
            if ($usuarioModel->verificarCredenciales($correo, $contrasena)) {
                // Credenciales válidas, establecer la sesión y redirigir a la página de inicio
                $_SESSION['correo'] = $correo;
                header('Location: index.php?url=inicio');
                exit();
            } else {
                // Credenciales inválidas, mostrar mensaje de error o realizar otras acciones
                echo "Credenciales inválidas";
            }
        } else {
            // Mostrar el formulario de login
            require 'views/modulos/login.php';
        }
    }
}
