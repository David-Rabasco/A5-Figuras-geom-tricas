<?php     
    include_once "FiguraGeometrica.php";
    class Rectangulo extends FiguraGeometrica{
        //Atributos
        public $lado2;

        //Constructor
        public function __construct($tipoFigura, $lado1, $lado2){
            $this->tipoFigura = $tipoFigura;
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
            return $this->lado1 * $this->lado2;
        }

        public function calcularPerimetro(){
            return 2 * ($this->lado1 + $this->lado2);
        }
    }
?>