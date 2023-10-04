<?php

class Roles{
    private $id_rol;
    private $nombre_rol;

/*Se inicia la clase con la ayuda del constructor*/
    public function __construct(int $id_rol, string $nombre_rol){
        $this->id_rol=$id_rol;
        $this->nombre_rol=$nombre_rol;

    }

/*Metodos get y set para cada una de las propiedades*/
    public function set_id_rol($id_rol){
        $this->id_rol=$id_rol;
    }
    public function get_id_rol(){
        return $this->id_rol;
    }
    public function set_nombre_rol($nombre_rol){
        $this->nombre_rol=$nombre_rol;
    }
    public function get_nombre_rol(){
        return $this->nombre_rol;
    }

}
/*Instancia de nuestra clase*/
$rol1=new Roles(1,'Administrador');
$rol2=new Roles(2,'Recepcionista');


/*Muestra de cada propiedad*/ 

echo "el primero rol se es el: " . $rol1->get_id_rol() . "  ".  "y se llama" . "   ".  $rol1->get_nombre_rol() ; 
echo "<br>";
echo "<br>";
echo "el nombre del segundo rol es:  " .  $rol2->get_nombre_rol(), "<br>",
$rol2->set_nombre_rol("mesero"), "<br>";
echo "el nuevo rol actualizado  es:  " . $rol2->get_nombre_rol();
?>