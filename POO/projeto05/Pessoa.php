<?php
    class Pessoa{
        private $nome;
        private $idade;

        function getNome(){
            return $this-> nome;
        }

        function getIdade(){
            return $this-> idade;
        }

        function setNome($n){
            return $this->nome = $n;
        }
        function setIdade($i){
            return $this-> idade = $i;
        }

    }