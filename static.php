<?php 
declare(strict_types=1);

class Prueba{
    public function no_static(){
        echo 'No estatico';
    }
    static public function si_static(){
        return 'Si estatico';
    }

}
$prueba=new Prueba();
$prueba->no_static();
echo '<br>';

$prueba2=Prueba::si_static();
echo $prueba2;
?>