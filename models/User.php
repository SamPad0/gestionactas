<?php

require_once __DIR__ . '/../database.php';

class User {
    // Método para crear un nuevo usuario
    public static function create($username, $password) {
        $conn = connect_to_database();
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuarios (username, password) VALUES ('$username', '$hashed_password')";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }

    // Método para leer los detalles de un usuario por su ID
    public static function read($id) {
        $conn = connect_to_database();
        $sql = "SELECT * FROM usuarios WHERE id = $id";
        $result = $conn->query($sql);
        $conn->close();
        return $result->fetch_assoc();
    }

    // Método para actualizar los datos de un usuario
    public static function update($id, $newUsername, $newPassword) {
        $conn = connect_to_database();
        $hashed_password = password_hash($newPassword, PASSWORD_DEFAULT);
        $sql = "UPDATE usuarios SET username = '$newUsername', password = '$hashed_password' WHERE id = $id";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }

    // Método para eliminar un usuario por su ID
    public static function delete($id) {
        $conn = connect_to_database();
        $sql = "DELETE FROM usuarios WHERE id = $id";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }

    // Método para buscar un usuario por su nombre de usuario
    public static function findByUsername($username) {
        $conn = connect_to_database();
        $sql = "SELECT * FROM usuarios WHERE username = '$username'";
        $result = $conn->query($sql);
        $conn->close();
        return $result->fetch_assoc();
    }

    // Método para autenticar un usuario por su nombre de usuario y contraseña
    public static function login($username, $password) {
        $user = self::findByUsername($username);
        if ($user && password_verify($password, $user['password'])) {
            // Las credenciales son válidas
            return true;
        } else {
            // Las credenciales son inválidas
            return false;
        }
    }

    // Otros métodos adicionales según las necesidades de tu aplicación
}

?>
