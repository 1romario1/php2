<?php 
require_once('Cuenta.php');
class Ahorros extends Cuenta{
    private string $surcursal_apertura;
    private string $fecha_apertura;
    private float $tasa_interes;

    public function __construct(string $num_cuenta, float $saldo_pesos, float $saldo_dolares, string $surcursal_apertura, string $fecha_apertura, float $tasa_interes){
        parent::__construct($num_cuenta,$saldo_pesos,$saldo_dolares);
        $this->surcursal_apertura=$surcursal_apertura;
        $this->fecha_apertura=$fecha_apertura;
        $this->tasa_interes=$tasa_interes;
    } 
    public function set_surcursal_apertura($surcursal_apertura){    
        $this->surcursal_apertura=$surcursal_apertura;
    }   
    public function get_surcursal_apertura(){
        return $this->surcursal_apertura;
    }

    public function set_fecha_apertura($fecha_apertura){
        $this->fecha_apertura=$fecha_apertura;
    }
    public function get_fecha_apertura(){
        return $this->fecha_apertura;
    }
    
    public function set_tasa_interes($tasa_interes){
        $this->tasa_interes=$tasa_interes;
    }
    public function get_tasa_interes(){
        return $this->tasa_interes;
    }
}
?>