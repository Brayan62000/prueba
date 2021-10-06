<?php

class Persona{
    public $nombre;
    public $peso;
    public $estatura;

    public function __construct($nombre,$peso,$estatura)
    {
        $this->nombre=$nombre;
        $this->peso=$peso;
        $this->estatura=$estatura;
    }

    public function calcularIMC(){
        $estaturaCuadrado = $this->estatura*$this->estatura;
        $IMC = $this->peso / $estaturaCuadrado;
        $mensaje="";

        if ($IMC<18.5){
            $mensaje = " el cual corresponde a delgadez o bajo peso.";
        }else if ($IMC>=18.5 && $IMC<=24.9){
            $mensaje = " el cual corresponde a saludable.";
        }else if ($IMC>=25 && $IMC<=29.9){
            $mensaje = " el cual corresponde a sobrepeso.";
        }else if ($IMC>=30){
            $mensaje = " el cual corresponde a obesidad.";
        }

        return $this->nombre." con un peso de: ".$this->peso."kg. y una estatura de: ".$this->estatura."m. tiene un IMC de: ".$IMC.$mensaje; 


    }

}

?>