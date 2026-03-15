<?php
require_once('Animal.php');

class Reptil extends Animal {
    private $corEscama;

    public function __construct($peso, $idade, $inteiro, $corEscama) {
        $this->peso = $peso;
        $this->idade = $idade;
        $this->inteiro = $inteiro;
        $this->corEscama = $corEscama;
    }

    // Métodos Abstratos Implementados
    public function locomover() {
        echo "<p>Rastejando</p>";
    }
    public function alimentar() {
        echo "<p>Comendo vegetais/insetos</p>";
    }
    public function emitirSom() {
        echo "<p>Som de Réptil (Sibilar)</p>";
    }

    public function getCorEscama() {
        return $this->corEscama;
    }
    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }
}