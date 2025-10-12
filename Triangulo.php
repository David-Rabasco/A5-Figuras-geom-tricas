<?php
    include_once "FiguraGeometrica.php";
    class Triangulo extends FiguraGeometrica{

        //Atributos
        public $lado2;
        public $lado3;

        //Constructor
        public function __construct($tipoFigura, $lado1, $lado2, $lado3){
            $this->tipoFigura = $tipoFigura;
            $this->lado1 = $lado1;
            $this->lado2 = $lado2;
            $this->lado3 = $lado3;
        }

        //Destructor
        public function __destruct(){

        }

        //Getters y setters
        public function setLado2($lado2){
            $this->lado2 = $lado2;
        }

        public function setLado3($lado3){
            $this->lado3 = $lado3;
        }

        public function getLado2(){
            return $this->lado2;
        }

        public function getLado3(){
            return $this->lado3;
        }
            
        //Métodos
        public function trianguloValido(){ //Funcion para calcular si al recibir los 3 lados el triangulo es válido o imposible
            if ($this->lado1 + $this->lado2 > $this->lado3 && $this->lado1 + $this->lado3 > $this->lado2 && $this->lado2 + $this->lado3 > $this->lado1){
                return true;
            } else {
                return false;
            }
        }

        public function calcularArea(){
            if ($this->trianguloValido()){
                $s = ($this->lado1 + $this->lado2 + $this->lado3) / 2; //Semiperímetro
                $area = sqrt($s * ($s - $this->lado1) * ($s - $this->lado2) * ($s - $this->lado3)); //Fórmula de Herón
                return $area;
            } else {
                return "Triángulo imposible";
            }
        }
        
        public function calcularPerimetro(){
            if ($this->trianguloValido()){
                $perimetro = $this->lado1 + $this->lado2 + $this->lado3;
                return $perimetro;
            } else {
                return "Triángulo imposible";
            }
        }
        
    }
?>