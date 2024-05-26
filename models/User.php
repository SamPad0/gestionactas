<?php

class User {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function create($username, $password) {
        // Hash de la contraseña antes de almacenarla en la base de datos
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insertar el usuario en la base de datos
        $stmt = $this->db->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $hashed_password);

        if ($stmt->execute()) {
            return ['status' => 'success'];
        } else {
            return ['status' => 'error', 'message' => 'Error al crear el usuario'];
        }
    }

    public function authenticate($username, $password) {
        // Obtener la contraseña hash del usuario desde la base de datos
        $stmt = $this->db->prepare("SELECT password FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            $stored_password = $user['password'];

            // Verificar si la contraseña proporcionada coincide con la almacenada en la base de datos
            if (password_verify($password, $stored_password)) {
                return true;
            }
        }
        return false;
    }

    public function getByUsername($username) {
        // Obtener información del usuario por su nombre de usuario
        $stmt = $this->db->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }
}

?>
