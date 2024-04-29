<?php

require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../database.php';

class UserController {
    public function create($username, $password) {
        return User::create($username, $password);
    }

    public function read($id) {
        return User::read($id);
    }

    public function update($id, $newUsername, $newPassword) {
        return User::update($id, $newUsername, $newPassword);
    }

    public function delete($id) {
        return User::delete($id);
    }

    // Método para autenticar un usuario
    public function login($username, $password) {
        // Aquí va la lógica para autenticar al usuario
        // Por ejemplo, verificar las credenciales en la base de datos

        // Conexión a la base de datos
        $conn = connect_to_database();

        // Preparar la consulta para seleccionar el usuario por nombre de usuario
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE username = ?");
        $stmt->bind_param("s", $username);

        // Ejecutar la consulta
        $stmt->execute();

        // Obtener el resultado de la consulta
        $result = $stmt->get_result();

        $user = $result->fetch_assoc();

        // Verificar si se encontró un usuario con el nombre de usuario dado
        if ($result->num_rows > 0) {
            // Obtener los datos del usuario

    
            // Verificar si la contraseña proporcionada coincide con la contraseña almacenada en la base de datos
            if (password_verify($password, $user['password'])) {

                // Las credenciales son válidas
                $stmt->close();
                $conn->close();
                return true;
            }
        }

        // Cerrar la conexión y liberar los recursos
        $stmt->close();
        $conn->close();

        // Si las credenciales no son válidas o el usuario no existe, devolver false
        return false;
    }
}

?>
