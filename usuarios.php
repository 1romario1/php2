<?php 
declare(strict_types=1);

class Usuarios{
    private int $nro_doc;
    private string $nombre_usuario;
    private string $contraseña;
    private int $id_rol;

    public function __construct(int $nro_doc, string $nombre_usuario, string $contraseña, int $id_rol){
        $this->nro_doc=$nro_doc;
        $this->nombre_usuario=$nombre_usuario;
        $this->contraseña=$contraseña;
        $this->id_rol=$id_rol;
    }

    public function set_nro_doc($nro_doc){
        $this->nro_doc=$nro_doc;
    }
    public function get_nro_doc(){
        return $this->nro_doc;
    }

    public function set_nombre_usuario($nombre_usuario){
        $this->nombre_usuario=$nombre_usuario;
    }
    public function get_nombre_usuario(){
        return $this->nombre_usuario;
    }

    public function set_contraseña($contraseña){
        $this->contraseña=$contraseña;
    }
    public function get_contraseña(){
        return $this->contraseña;
    }

    public function set_id_rol($id_rol){
        $this->id_rol=$id_rol;
    }
    public function get_id_rol(){
        return $this->id_rol;
    }
}
$usuario=new Usuarios(1012012012,'negan','lucille',2200);
echo 'El numero de documento:',$usuario->get_nro_doc(),'<br>';
echo 'El nombre del usuario:',$usuario->get_nombre_usuario(),'<br>';
echo 'La contraseña del usuario:',$usuario->get_contraseña(),'<br>';
echo 'El id del rol pertenenciente:',$usuario->get_id_rol(),'<br>';
echo $usuario->set_nombre_usuario('negan smith');
echo 'El nuevo nombre del usuario con el numero de documento ',$usuario->get_nro_doc(),' es ',$usuario->get_nombre_usuario();

?>