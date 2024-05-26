<?php

class Acta {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function create($asunto, $resultado, $responsable, $fecha, $horario_inicio, $horario_final) {
        $stmt = $this->db->prepare("INSERT INTO actas (asunto, resultado, responsable, fecha, horario_inicio, horario_final) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $asunto, $resultado, $responsable, $fecha, $horario_inicio, $horario_final);

        if ($stmt->execute()) {
            return ['status' => 'success', 'message' => 'Acta creada con éxito'];
        } else {
            return ['status' => 'error', 'message' => 'Error al crear el acta'];
        }
    }
}

?>
