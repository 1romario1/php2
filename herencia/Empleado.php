<?php
require_once('persona.php');

class Empleado extends Persona{
    private string $cargo;
    private float $salario;

    public function __construct(int $nro_documento, string $nombre, string $apellido, string $genero,string $cargo,float $salario){
        parent::__construct($nro_documento, $nombre, $apellido, $genero);
        $this->cargo=$cargo;
        $this->salario=$salario;
    }
    public function set_cargo($cargo){
        $this->cargo=$cargo;
    }
    public function get_cargo(){
        return $this->cargo;
    }
    
    public function set_salario($salario){
        $this->salario=$salario;
    }
    public function get_salario(){
        return $this->salario;
    }
}
?>