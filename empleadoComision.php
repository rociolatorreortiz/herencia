<?php

include "empleado.php";


class empleadoComision extends empleado{

    private $comision;
    private $unidadesVendidas;

    function __construct($nombre, $apellido, $salario, $comision){
        parent::__construct($nombre, $apellido, $salario);
        $this->comision = $comision;
    }

    public function calcularPago(){

        $salario = $this->getSalario();        
        return $salario + ($this->comision * $this->unidadesVendidas);
    }

    public function sumarVentas($unidadesVendidas){
        $this->unidadesVendidas = $this->unidadesVendidas + $unidades;
    }

    public function reiniciarVentas(){
        $this->unidadesVendidas = 0;
    }

}