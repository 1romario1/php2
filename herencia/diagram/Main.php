<?php 
require_once ('Corriente.php');
require_once ('Ahorros.php');

$cuenta=new Corriente(,10,'2023-10-04','20',500.0,200.0);
echo 'La cuenta es',$cuenta->get_num_cuenta();
?>