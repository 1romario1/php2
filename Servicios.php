<?php

class Servicios{
    private $id_servicio;
    private $nombre_servicio;
    private $descripcion_servicio;
    private $precio;

/*Se inicia la clase con la ayuda del constructor*/
    public function __construct(int $id_servicio, string $nombre_servicio, string $descripcion_servicio, float $precio){
        $this->id_servicio=$id_servicio;
        $this->nombre_servicio=$nombre_servicio;
        $this->descripcion_servicio=$descripcion_servicio;
        $this->precio=$precio;

    }
/*Metodos get y set para cada una de las propiedades*/
    public function set_id_servicio($id_servicio){
        $this->id_servicio=$id_servicio;
    }
    public function get_id_servicio(){
        return $this->id_servicio;
    }

    public function set_nombre_servicio($nombre_servicio){
        $this->nombre_servicio=$nombre_servicio;
    }
    public function get_nombre_servicio(){
        return $this->nombre_servicio;
    }

    public function set_descripcion_servico($descripcion_servicio){
        $this->descripcion_servicio=$descripcion_servicio;
    }
    public function get_descripcion_servicio(){
        return $this->descripcion_servicio;
    }

    public function set_precio($precio){
        $this->precio=$precio;
    }
    public function get_precio(){
        return $this->precio;
    }
}

/*Instancia de nuestra clase*/
$servicio=new Servicios(1,'piscina','12 horas',40.00);
$servicio2=new Servicios(3,'minibar','24/7',150.00);

/*Muestra de cada propiedad*/ 

echo "el primer servicio se llama: " . $servicio->get_nombre_servicio() . "  ".  "y su precio es" . "   ".  $servicio->get_precio() ; 
echo "<br>";
echo "<br>";
echo "el nombre del servicio2 es:  " .  $servicio2->get_nombre_servicio(), "<br>",
$servicio2->set_nombre_servicio("Lavanderia"), "<br>";
echo "el nuevo servicio actualizado  es:  " . $servicio2->get_nombre_servicio();


?>