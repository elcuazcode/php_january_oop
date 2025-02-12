<?php
require_once("001Ejercicio.php");

$jose = New Persona();
$jose->nombre = "Raul";

echo $jose->nombre."\n";

$maria = New Persona();
$maria->nombre = "Maria";

echo $maria->nombre."\n";


$jose->hablar("Chui");



?>