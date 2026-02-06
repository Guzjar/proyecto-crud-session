<?php
// index.php en la raíz
require_once "autoload.php"; // Sin el "views/" delante

$controlador = new productocontroller();
$controlador->ejecutar();