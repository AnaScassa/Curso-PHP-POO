<?php
require_once('Aluno.php');

    final class AlunoBolsista extends Aluno{
        private $bolsa;

        public function __construct($nome, $idade, $genero, $bolsa, $matricula, $curso) {
            parent::__construct($nome, $idade, $genero, $matricula, $curso);
            $this->bolsa = $bolsa;
        }

        public function renovarBola(){
            echo "Bolsa renovada";
        }
        public function pagarMensalidade(){
            echo $this->getNome() . " é bolsista! Então nao paga mensalidade";
        }
    }