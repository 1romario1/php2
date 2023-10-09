<?php 
class Persona{
    private int $nro_documento;
    private string $nombre;
    private string $apellido;
    private string $genero;

    public function __construct(int $nro_documento,string $nombre,string $apellido,string $genero){
        $this->nro_documento=$nro_documento;
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->genero=$genero;
    }

    public function saludo(){
        echo "Bienvenido a la funcion saludo a la clase {$this->nombre}",'<br>';
    }
    public function set_nro_documento($nro_documento){
        $this->nro_documento=$nro_documento;
    }
    public function get_nro_documento(){
        return $this->nro_documento;
    }

    public function set_nombre($nombre){
        $this->nombre=$nombre;
    }
    public function get_nombre(){
        return $this->nombre;
    }

    public function set_apellido($apellido){
        $this->apellido=$apellido;
    }
    public function get_apellido(){
        return $this->apellido;
    }

    public function set_genero($genero){
        $this->genero=$genero;
    }
    public function get_genero(){
        return $this->genero;
    }
}
/*$persona=new Persona(1193557345,'luz','reina','femenino');
$persona->saludo();
echo 'El nombre de la persona es ',$persona->get_nombre(),'<br>';
echo $persona->set_nombre('Luz');
echo ' El nuevo nombre de la persona es ',$persona->get_nombre(),'<br>';*/

?>