<?php

require_once __DIR__ . '/../models/Asistente.php';

class AsistenteController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function create($data) {
        if (isset($data['acta_id']) && isset($data['nombre']) && isset($data['email'])) {
            $asistente = new Asistente($this->db);
            return $asistente->create($data['acta_id'], $data['nombre'], $data['email']);
        }
        return ['status' => 'error', 'message' => 'Datos insuficientes'];
    }
}

?>
