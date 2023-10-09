<?php 
require_once ('Corriente.php');
require_once ('Ahorros.php');

$cuenta=new Cuenta('1542',500.00,800.00);
echo $cuenta->mostrar_datos();



?>