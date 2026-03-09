<?php
    require_once('Controlador.php');

    //Atributos
    class ControleRemoto implements Controlador{
        private $volume;
        private $ligado;
        private $tocando;

        //metodos especiais
        function __construct(){
            $this->volume = 100;
            $this->ligado = false;
            $this->tocando = false;
        }

        //setters
        public function setVolume($volume){
            $this->volume = $volume;
        }
        public function setLigado($ligado){
            $this->ligado = $ligado;
        }
        public function settocando($tocando){
            $this->tocando = $tocando;
        }

        //getters
        public function getVolume(){
            return $this->volume;
        }
        public function getLigado(){
            return $this->ligado;
        }
        public function gettocando(){
            return $this->tocando;
        }

        // métodos implementados
        public function ligar(){
            $this->setLigado(true);
        }
        public function desligar(){
            $this->setLigado(false);
        }
        public function abrirMenu(){
            echo "<br>Está ligado?:" . ($this->getLigado() ? "SIM":"NÃO") ;
            echo "<br>Está tocando?:" . ($this->gettocando() ? "SIM":"NÃO") ;
            echo "<br>Volume: " . $this->getVolume();
        }
        public function fecharMenu(){
            echo "<br><br>Fechando menu...";
        }
        public function maisVolume(){
            if($this->getLigado() && $this->getVolume() <= 95){
                $this->setVolume($this->getVolume() + 5);
            }
        }
        public function menosVolume(){
            if($this->getLigado() && $this->getVolume() >= 5){
                $this->setVolume($this->getVolume() - 5);
            }
        }
        public function play(){
            if($this->getLigado() && !$this->gettocando()){
                $this->settocando(true);
            }
        }
        public function pause(){
            if($this->getLigado() && $this->gettocando()){
                $this->settocando(false);
            }
        }
    }