<?php
require_once('Pessoa.php');

    class Professor extends Pessoa{
        private $especialidade;
        private $salario;

        public function __construct($nome, $idade, $genero, $especialidade, $salario) {
            parent::__construct($nome, $idade, $genero);
            $this->especialidade = $especialidade;
            $this->salario = $salario;
    }

        public function getEspecialidade() {
            return $this->especialidade;
        }
        public function setEspecialidade($especialidade) {
            $this->especialidade = $especialidade;
        }
        public function getSalario() {
            return $this->salario;
        }
        public function setSalario($salario) {
            $this->salario = $salario;
        }

        public function receberAumento($aum) {
            $novoSalario = $this->getSalario() + $aum;
            $this->setSalario($novoSalario);
        }
    }