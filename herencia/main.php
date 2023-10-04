<?php
require('Empleado.php');
$empleado=new Empleado('mesero',500.0,1012320202,'romario','gonzalez','masculino');
echo 'El nombre del cargo',$empleado->get_nombre();
echo $empleado->get_cargo();
?>