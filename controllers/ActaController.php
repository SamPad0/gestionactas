<?php

require_once __DIR__ . '/../models/Acta.php';

class ActaController {
    public function create($asunto, $resultado, $responsable, $fecha, $horario_inicio, $horario_final) {
        return Acta::create($asunto, $resultado, $responsable, $fecha, $horario_inicio, $horario_final);
    }

    public function read($id) {
        return Acta::read($id);
    }

    public function update($id, $asunto, $resultado, $responsable, $fecha, $horario_inicio, $horario_final) {
        return Acta::update($id, $asunto, $resultado, $responsable, $fecha, $horario_inicio, $horario_final);
    }

    public function delete($id) {
        return Acta::delete($id);
    }

    // Método para autenticar un usuario
    public function login($username, $password) {
        // Aquí iría la lógica para autenticar al usuario
        // Puedes implementar la lógica de autenticación aquí o redirigir la solicitud a otro controlador de autenticación
    }
}

?>
