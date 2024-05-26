<?php

require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../config/auth.php';

class UserController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function create($data) {
        // Validar los datos recibidos
        if (isset($data['username']) && isset($data['password'])) {
            $user = new User($this->db);
            $result = $user->create($data['username'], $data['password']);

            if ($result['status'] === 'success') {
                return ['status' => 'success', 'message' => 'Usuario creado con éxito'];
            } else {
                return ['status' => 'error', 'message' => 'Error al crear el usuario'];
            }
        } else {
            return ['status' => 'error', 'message' => 'Datos insuficientes'];
        }
    }

    public function login($data) {
        // Validar los datos recibidos
        if (isset($data['username']) && isset($data['password'])) {
            $user = new User($this->db);
            if ($user->authenticate($data['username'], $data['password'])) {
                $token = Auth::createToken(['username' => $data['username']]);
                return ['status' => 'success', 'token' => $token];
            } else {
                return ['status' => 'error', 'message' => 'Credenciales incorrectas'];
            }
        } else {
            return ['status' => 'error', 'message' => 'Datos insuficientes'];
        }
    }
}

?>
