<?php
    require_once('Lutador.php');

    class Luta{

    //atributos
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

    //getters
        function getDesafiado(){
            return $this-> desafiado;
        }
        function getDesafiante(){
            return $this-> desafiante;
        }
        function getRounds(){
            return $this-> rounds;
        }
        function getAprovada(){
            return $this-> aprovada;
        }

    //setters
        function setDesafiado($desafiado){
            return $this-> desafiado = $desafiado;
        }
        function setDesafiante($desafiante){
            return $this-> desafiante = $desafiante;
        }
        function setRounds($rounds){
            return $this-> rounds = $rounds;
        }
        function setAprovada($aprovada){
            return $this-> aprovada = $aprovada;
        }
    
    //métodos
    function lutar(){
        if(!$this->getAprovada()){
            echo "Luta não foi aprovada";
        }else{
            $this->getDesafiado()-> apresentar();
            $this->getDesafiante()-> apresentar();
            $vencedor = rand(0, 2);
            switch($vencedor) {
                case 0: 
                    echo "Empatou!";
                    $this->getDesafiado()->empatarLuta();
                    $this->getDesafiante()->empatarLuta();
                    break;
                case 1: 
                    echo "Vitória do desafiado: " . $this->getDesafiado()->getNome();
                    $this->getDesafiado()->ganharLuta();
                    $this->getDesafiante()->perderLuta();
                    break;
                case 2: 
                    echo "Vitória do desafiante: " . $this->getDesafiante()->getNome();
                    $this->getDesafiante()->ganharLuta();
                    $this->getDesafiado()->perderLuta();
                    break;
            }
        }
    }

    function marcarLuta($l1, $l2){
        if($l1->getCategoria() === $l2->getCategoria() && ($l1 !== $l2)) {
            $this->setAprovada(true);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);

        } else {
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }
    }
}