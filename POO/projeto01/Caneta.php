<?php

class Caneta{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function __construct($m, $p){ // metodo construtor
        $this -> modelo = $m;
        $this -> carga = $p;
        $this->cor = "Azul"; 
        $this->tampar();
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($m){
        $this->modelo = $m;
    }

    public function getPonta(){
        return $this->ponta;
    }

    public function setPonta($p){
        $this->ponta = $p;
    }

    public function rabiscar(){
        if($this->tampada == true){
            echo "Estou tampada";    
        }else{
            echo "Estou rabiscando";    
        }
    }

    public function tampar(){
        $this->tampada = true;
    }

    public function destampar(){
        $this->tampada = false;
    }
}

?>