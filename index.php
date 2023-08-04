<?php
// en este archivo empieza la aplicacion

//requiere
require_once './modelo/bootcammodel.php';
require_once './controles/bootcamp.controlle.php';

$controller = new BootcampController();
$controller->add();



?>