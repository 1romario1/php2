<?php
class Cuenta{
    private string $num_cuenta;
    private float $saldo_pesos;
    private float $saldo_dolares;

    public function __construct(string $num_cuenta,float $saldo_pesos,float $saldo_dolares){
        $this->num_cuenta=$num_cuenta;
        $this->saldo_pesos=$saldo_pesos;
        $this->saldo_dolares=$saldo_dolares;        
    }
    public function mostrar_datos(){
        echo 'Los datos son los siguientes:','<br>';        
    }
    public function get_num_cuenta(){
        return $this->num_cuenta;
    }
    public function get_saldo_pesos(){
        return $this->saldo_pesos;
    }
    public function get_saldo_dolares(){
        return $this->saldo_dolares;
    }
}
?>