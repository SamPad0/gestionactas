<?php

require_once __DIR__ . '/../models/Compromiso.php';

class CompromisoController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function create($data) {
        if (isset($data['acta_id']) && isset($data['descripcion']) && isset($data['responsable']) && isset($data['fecha_cumplimiento'])) {
            $compromiso = new Compromiso($this->db);
            return $compromiso->create($data['acta_id'], $data['descripcion'], $data['responsable'], $data['fecha_cumplimiento']);
        }
        return ['status' => 'error', 'message' => 'Datos insuficientes'];
    }
}

?>
