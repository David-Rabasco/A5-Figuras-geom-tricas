<?php
    include_once "FiguraGeometrica.php";
    class Circulo extends FiguraGeometrica{

        //Atributos de FiguraGeométrica

        //Constructor

        public function __construct($tipoFigura, $lado1){
            $this->tipoFigura = $tipoFigura;
            $this->lado1 = $lado1;
        }

        //Métodos

        public function calcularArea(){
            return pi() * ($this->lado1 ** 2);
        }

        public function calcularPerimetro(){
            return 2 * pi() * $this->lado1;
        }
    }
?>