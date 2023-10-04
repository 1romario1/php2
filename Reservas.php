<?php


class Reservas{
    private $nro_reserva;
    private $nro_habitacion;
    private $id_cliente;
    private $fecha_entrada;
    private $fecha_salida;
    private $estado;


/*Se inicia la clase con la ayuda del constructor*/
    public function __construct(int $nro_reserva, int $nro_habitacion, int $id_cliente, string $fecha_entrada, string $fecha_salida){
        $this->nro_reserva=$nro_reserva;
        $this->nro_habitacion=$nro_habitacion;
        $this->id_cliente=$id_cliente;
        $this->fecha_entrada=$fecha_entrada;
        $this->fecha_salida=$fecha_salida;

    }

/*Metodos get y set para cada una de las propiedades*/
    public function set_nro_reserva($nro_reserva){
        $this->nro_reserva=$nro_reserva;
    }
    public function get_nro_reserva(){
        return $this->nro_reserva;
    }

    public function set_nro_habitacion($nro_habitacion){
        $this->nro_habitacion=$nro_habitacion;
    }
    public function get_nro_habitacion(){
        return $this->nro_habitacion;
    }

    public function set_id_cliente($id_cliente){
        $this->id_cliente=$id_cliente;
    }
    public function get_id_cliente(){
        return $this->id_cliente;
    }

    public function set_fecha_entrada($fecha_entrada){
        $this->fecha_entrada=$fecha_entrada;
    }
    public function get_fecha_entrada(){
        return $this->fecha_entrada;
    }

    public function set_fecha_salida($fecha_salida){
        $this->fecha_salida=$fecha_salida;
    }
    public function get_fecha_salida(){
        return $this->fecha_salida;
    }

}
/*Instancia de nuestra clase*/
$reserva=new Reservas(1,1,1,'2023-10-03','2023-10-08');

/*Muestra de cada propiedad*/ 

echo "Numero de la habitacion reservada: " , $reserva->get_nro_habitacion(); 
echo "<br>";
echo "<br>";
echo "Fecha de reservacion: " , $reserva->get_fecha_entrada(), "<br>",
$reserva->set_fecha_entrada("2023-09-07"), "<br>";
echo "Actualizacion de la reserva con el numero de habitacion:  " ,$reserva->get_nro_reserva(),'es', $reserva->get_fecha_entrada();


?>