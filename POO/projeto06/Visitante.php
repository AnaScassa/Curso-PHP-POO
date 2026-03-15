<?php
    require_once('Pessoa.php');

    class Visitante extends Pessoa{
    
        public function __construct($nome, $idade, $genero) {
            parent::__construct($nome, $idade, $genero);
        }

    }