<?php

require_once __DIR__ . '/../database.php';

class Acta {
    public static function create($asunto, $resultado, $responsable, $fecha, $horario_inicio, $horario_final) {
        $conn = connect_to_database();
        $sql = "INSERT INTO actas (asunto, resultado, responsable, fecha, horario_inicio, horario_final) VALUES ('$asunto', '$resultado', '$responsable', '$fecha', '$horario_inicio', '$horario_final')";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }

    public static function read($id) {
        $conn = connect_to_database();
        $sql = "SELECT * FROM actas WHERE id = $id";
        $result = $conn->query($sql);
        $conn->close();
        return $result->fetch_assoc();
    }

    public static function update($id, $asunto, $resultado, $responsable, $fecha, $horario_inicio, $horario_final) {
        $conn = connect_to_database();
        $sql = "UPDATE actas SET asunto = '$asunto', resultado = '$resultado', responsable = '$responsable', fecha = '$fecha', horario_inicio = '$horario_inicio', horario_final = '$horario_final' WHERE id = $id";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }

    public static function delete($id) {
        $conn = connect_to_database();
        $sql = "DELETE FROM actas WHERE id = $id";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }
}

?>
