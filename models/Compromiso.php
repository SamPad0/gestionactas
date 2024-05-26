<?php

class Compromiso {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function create($acta_id, $descripcion, $responsable, $fecha_cumplimiento) {
        $stmt = $this->db->prepare("INSERT INTO compromisos (acta_id, descripcion, responsable, fecha_cumplimiento) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isss", $acta_id, $descripcion, $responsable, $fecha_cumplimiento);

        if ($stmt->execute()) {
            return ['status' => 'success', 'message' => 'Compromiso creado con éxito'];
        } else {
            return ['status' => 'error', 'message' => 'Error al crear el compromiso'];
        }
    }
}

?>
