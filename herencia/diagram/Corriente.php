<?php 
require_once('Cuenta.php');

class Corriente extends Cuenta{
    private int $numero_chequera;
    private string $fecha_emision;
    
    public function __construct(int $numero_chequera,string $fecha_emision, $num_cuenta, $saldo_pesos, $saldos_dolares){
        parent::__construct($num_cuenta,$saldo_pesos,$saldo_dolares);
        $this->numero_chequera=$numero_chequera;
        $this->fecha_emision=$fecha_emision;
    }

    public function set_numero_chequera($numero_chequera){
        $this->numero_chequera=$numero_chequera;
    }
    public function get_numero_chequera(){
        return $this->numero_chequera;
    }

    public function set_fecha_emision($fecha_emision){
        $this->fecha_emision=$fecha_emision;
    }
    public function get_fecha_emision(){
        return $this->fecha_emision;
    }
}
?>