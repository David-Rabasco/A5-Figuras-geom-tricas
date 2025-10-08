<?php
    class FiguraGeometrica{

        //Atributos
        public $tipoFigura;
        public $lado1;

        //Constructor
        public function __construct($tipoFigura, $lado1){
            $this->tipoFigura = $tipoFigura;
            $this->lado1 = $lado1;
        }

        //Destructor
        public function __destruct(){

        }
        
        //Getters y setters
        public function setFigura($tipoFigura){
            $this->tipoFigura = $tipoFigura;
        }

        public function setLado1($lado1){
            $this->lado1 = $lado1;
        }

        public function getFigura(){
            return $this->tipoFigura;
        }

        public function getLado1(){
            return $this->lado1;
        }

        //Métodos

        public function calcularArea(){
            
        }
    }
?>