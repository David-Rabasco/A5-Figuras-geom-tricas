<?php
    class Rectangulo extends FiguraGeometrica{
        //Atributos
        public $lado2;

        //Constructor
        public function __construct($lado1, $lado2){
            $this->lado1 = $lado1;
            $this->lado2 = $lado2;
        }
        
        //Getters y setters
        public function setLado2($lado2){
            $this->lado2 = $lado2;
        }

        public function getLado2(){
            return $this->lado2;
        }

        //Métodos
        public function calcularArea(){

        }

        public function calcularPerimetro(){
            
        }
    }
?>