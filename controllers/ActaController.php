<?php

require_once __DIR__ . '/../models/Acta.php';

class ActaController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function create($data) {
        if (isset($data['asunto']) && isset($data['resultado']) && isset($data['responsable']) &&
            isset($data['fecha']) && isset($data['horario_inicio']) && isset($data['horario_final'])) {
            $acta = new Acta($this->db);
            return $acta->create($data['asunto'], $data['resultado'], $data['responsable'], $data['fecha'], $data['horario_inicio'], $data['horario_final']);
        }
        return ['status' => 'error', 'message' => 'Datos insuficientes'];
    }
}

?>
