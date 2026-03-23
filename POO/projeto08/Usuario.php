<?php
require_once 'Pessoa.php';

    final class Usuario extends Pessoa {
        private $login;
        private $totalAssistido;

        public function __construct($nome, $idade, $genero, $login) {
            parent::__construct($nome, $idade, $genero);
            
            $this->login = $login;
            $this->totalAssistido = 0; 
        }

        public function getLogin() {
            return $this->login;
        }

        public function setLogin($login) {
            $this->login = $login;
        }

        public function getTotalAssistido() {
            return $this->totalAssistido;
        }

        public function setTotalAssistido($totalAssistido) {
            $this->totalAssistido = $totalAssistido;
        }

        
        public function viuMaisUm() {
            $this->totalAssistido++;
            $this->setExperiencia($this->getExperiencia() + 1);
        }
    }