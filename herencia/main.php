<?php
require_once 'persona.php';
require_once 'Empleado.php';

$persona=new Persona(1012325451,'juan','gonzalez','masculino');
echo 'El numero de documento de la persona es:',$persona->get_nro_documento(),'<br>';
echo 'El nombre de la persona es:',$persona->get_nombre(),'<br>';
echo 'El apellido de la persona es:',$persona->get_apellido(),' y el genero es: ',$persona->get_genero();
echo '<br>';
echo 'Ahora con sus datos en empleado:','<br>';
$empleado=new Empleado(1012325451,'juan','gonzalez','masculino','mesero',500.0);
echo 'El usuario con el numero de documento:',$empleado->get_nro_documento(),' Tiene como cargo:',$empleado->get_cargo(),' y gana:',$empleado->get_salario();
?>