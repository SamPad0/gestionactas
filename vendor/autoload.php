<?php

// Incluir el autoloader de Composer
require_once __DIR__ . '/vendor/autoload.php';

// Cargar las clases y archivos necesarios aquí si es necesario
require_once __DIR__ . '/controllers/ActaController.php';
require_once __DIR__ . '/controllers/AsistenteController.php';
require_once __DIR__ . '/controllers/CompromisoController.php';
require_once __DIR__ . '/controllers/GeneralController.php';
require_once __DIR__ . '/controllers/UserController.php';

require_once __DIR__ . '/models/Acta.php';
require_once __DIR__ . '/models/Asistente.php';
require_once __DIR__ . '/models/Compromiso.php';
require_once __DIR__ . '/models/User.php';

require_once __DIR__ . '/config/auth.php';

?>
