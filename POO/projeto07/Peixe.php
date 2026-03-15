<?php
    require_once('Animal.php');

    class Peixe extends Animal{
        private $corEscama;

        public function __construct($peso, $idade, $inteiro, $corEscama) {
        $this->peso = $peso;
        $this->idade = $idade;
        $this->inteiro = $inteiro;
        $this->corEscama = $corEscama;
    }

    public function alimentar() {
        echo'<p>Comendo algo</p>';
    }

    public function emitirSom() {
        echo'<p>Peixe não faz som</p>';
    }

    public function locomover() {
        echo '<p>Nadando...</p>';
    }

    public function soltarBolha(){
        echo '<p>Soltou uma bolha</p>';
    }

    public function getCorEscama() {
        return $this->corEscama;
    }
    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }
    }