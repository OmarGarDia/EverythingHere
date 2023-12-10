<?php
require_once './DB.php';
class UsuarioModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
    public function verificarCredenciales($correo, $contrasena)
    {
        $query = "SELECT * FROM usuarios WHERE correo = :correo";

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(':correo', $correo);
        $stmt->execute();

        $contrasenaAlmacenada = $stmt->fetchColumn(); // Obtener la contraseña almacenada desde la base de datos

        if ($contrasenaAlmacenada !== false && $contrasena === $contrasenaAlmacenada) {
            return true; // Las credenciales son válidas
        }

        return false; // Las credenciales no son válidas
    }
}
