<?php
    include ("Conexao.php");

    class Resultado extends Conexao{
        private $funcao;
        private $resultado;
        private $texto;
        private $numero_1, $numero_2, $numero_3;
        

        public function __set($p,$v){
            $this->$p = $v;
        }
    
        public function __get($p){
            return $this->$p;
        }

        public function salvar(){}
        
        public function calcular(){

        }
    }

?>