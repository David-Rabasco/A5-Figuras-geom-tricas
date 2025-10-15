<?php
    include_once "FiguraGeometrica.php";
    class Cuadrado extends FiguraGeometrica{
        
        //Utiliza atributos y constructor de FiguraGeometrica

        //Métodos
        public function calcularArea(){
            return $this->lado1 * $this->lado1;
        }   
    
        public function calcularPerimetro(){
            return 4 * $this->lado1;
        }
    
    }
?>