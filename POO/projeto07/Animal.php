<?php

abstract class Animal {
    protected $peso;
    protected $idade;
    protected $inteiro; 

    abstract function locomover();
    abstract function alimentar();
    abstract function emitirSom();

    public function getPeso() {
        return $this->peso;
    }
    public function setPeso($peso) {
        $this->peso = $peso;
    }

    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getInteiro() {
        return $this->inteiro;
    }
    public function setInteiro($inteiro) {
        $this->inteiro = $inteiro;
    }
}