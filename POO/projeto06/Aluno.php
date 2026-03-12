<?php
require_once('Pessoa.php');

class Aluno extends Pessoa {
    private $matricula;
    private $curso;

    // Construtor do Aluno
    public function __construct($nome, $idade, $genero, $matricula, $curso) {
        //caracteristicas da classe mãe
        parent::__construct($nome, $idade, $genero);
        $this->matricula = $matricula;
        $this->curso = $curso;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }

    public function cancelarMatricula() {
        $this->setMatricula(false); 
        echo "<p>Matrícula cancelada!</p>";
    }
}