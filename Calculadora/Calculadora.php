<?php
    class Calculadora{

        private $numero_1;
        private $numero_2;
        

        public function __set($p,$v){
            $this->$p = $v;
        }
    
        public function __get($p){
            return $this->$p;
        }

        public function somar(){
            return $numero_1 + $numero_2;
        }
        public function subtracao(){
            return $numero_1 - $numero_2;
        }
        public function multiplicacao(){
            return $numero_1 * $numero_2;
        }
        public function divisao(){
            if ($numero_2 == 0) {
                echo "Não divisivel por 0";
            } else {
                $res= $numero_1 * $numero_2;
            }
            return $res;
            
        }
    }

?>