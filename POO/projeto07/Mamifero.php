<?php
require_once('Animal.php');

class Mamifero extends Animal {
    private $corPelo;

    public function __construct($peso, $idade, $inteiro, $corPelo) {
        $this->peso = $peso;
        $this->idade = $idade;
        $this->inteiro = $inteiro;
        $this->corPelo = $corPelo;
    }

    public function alimentar() {
        echo "<p>Mamando...</p>";
    }

    public function emitirSom() {
        echo "<p>Som de Mamífero</p>";
    }

    public function locomover() {
        echo "<p>Correndo</p>";
    }

    public function getCorPelo() {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }
}