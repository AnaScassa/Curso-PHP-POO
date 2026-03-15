<?php
require_once('Animal.php');

class Ave extends Animal {
    private $corPena;

    // Construtor
    public function __construct($peso, $idade, $inteiro, $corPena) {
        $this->peso = $peso;
        $this->idade = $idade;
        $this->inteiro = $inteiro;
        $this->corPena = $corPena;
    }

    public function locomover() {
        echo "<p>Voando</p>";
    }

    public function alimentar() {
        echo "<p>Comendo frutas/sementes</p>";
    }

    public function emitirSom() {
        echo "<p>Som de Ave (Cantando)</p>";
    }

    public function fazerNinho() {
        echo "<p>Construiu um ninho</p>";
    }

    public function getCorPena() {
        return $this->corPena;
    }
    public function setCorPena($corPena) {
        $this->corPena = $corPena;
    }
}