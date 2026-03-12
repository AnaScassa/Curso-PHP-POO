<?php
require_once('Pessoa.php');

    class Funcionario extends Pessoa{
        private $setor;
        private $trabalhando;

        public function __construct($nome, $idade, $genero, $setor) {
        // Chama o construtor da classe Pessoa
        parent::__construct($nome, $idade, $genero);
        $this->setor = $setor;
        $this->trabalhando = false; 
    }

        public function getSetor() {
            return $this->setor;
        }
        public function setSetor($setor) {
            $this->setor = $setor;
        }
        public function getTrabalhando() {
            return $this->trabalhando;
        }
        public function setTrabalhando($trabalhando) {
            $this->trabalhando = $trabalhando;
        }

        public function mudarTrabalho() {
            $novoEstado = !$this->getTrabalhando();
            $this->setTrabalhando($novoEstado);
        }
    }