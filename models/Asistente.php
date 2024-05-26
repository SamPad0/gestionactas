<?php

class Asistente {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function create($acta_id, $nombre, $email) {
        $stmt = $this->db->prepare("INSERT INTO asistentes (acta_id, nombre, email) VALUES (?, ?, ?)");
        $stmt->bind_param("iss", $acta_id, $nombre, $email);

        if ($stmt->execute()) {
            return ['status' => 'success', 'message' => 'Asistente agregado con éxito'];
        } else {
            return ['status' => 'error', 'message' => 'Error al agregar el asistente'];
        }
    }
}

?>
