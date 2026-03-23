<?php

abstract class Pessoa {
    protected $nome; 
    protected $idade;
    protected $genero;
    protected $experiencia;

    public function __construct($nome, $idade, $genero) {
        $this->nome = $nome;    
        $this->idade = $idade;
        $this->genero = $genero;
        $this->experiencia = 0; 
    }


    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function setGenero($genero) {
        $this->genero = $genero;
    }

    public function getExperiencia() {
        return $this->experiencia;
    }

    public function setExperiencia($experiencia) {
        $this->experiencia = $experiencia;
    }

    protected function ganharExp($n) {
        $this->experiencia += $n;
    }
}