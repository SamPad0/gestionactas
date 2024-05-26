<?php

require_once __DIR__ . '/database.php';
require_once __DIR__ . '/controllers/GeneralController.php';

header('Content-Type: application/json');

$db = Database::getInstance()->getConnection();
$controller = new GeneralController($db);

$requestData = json_decode(file_get_contents('php://input'), true);
$response = $controller->handleRequest($requestData);

echo json_encode($response);

?>
