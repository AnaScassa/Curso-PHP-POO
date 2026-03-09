<?php
    class Usuario{
    
        private $nome;
        private $sobrenome;
        private $dataNascimento;
        private $genero;

        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getSobrenome(){
            return $this->sobrenome;
        }
        public function setSobrenome($sobrenome){
            $this->sobrenome = $sobrenome;
        }
        public function getDataNascimento(){
            return $this->dataNascimento;
        }
        public function setDataNascimento($dataNascimento){
            $this->dataNascimento =$dataNascimento;
        }
        public function getGenero(){
            return $this->genero;
        }
        public function setGenero($genero){
            $this->genero = $genero;
        }

    }

?>