<?php

class Lutador{
    //atributos
    private $nome, $idade;
    private $nacionalidade, $altura;
    private $categoria, $vitoria;
    private $derrota, $empates, $peso;

    //metodos
    function apresentar(){
        echo "<p>----------------------------</p>";
        echo "<p>Olá lutador ".$this->getNome()." de ".$this->getNacionalidade()."</p>";
        echo "<p>Que tem ".$this->getIdade()." anos, e ".$this->getPeso()." quilos</p>";
        echo "<p>Ele tem ".$this->getVitoria()." vitórias, ".$this->getDerrota()." derrotas e ".$this->getEmpates()." empates</p>";
    }

    function status(){
        echo "<p>----------------------------</p>";
        echo "<p>Nome: ".$this->getNome()."</p>";
        echo "<p>Nacionalidade: ".$this->getNacionalidade()."</p>";
        echo "<p>Idade: ".$this->getIdade()."</p>";
        echo "<p>Peso: ".$this->getPeso()." kg</p>";
        echo "<p>Vitórias: ".$this->getVitoria()."</p>";
        echo "<p>Derrotas: ".$this->getDerrota()."</p>";
        echo "<p>Empates: ".$this->getEmpates()."</p>";
        echo "<p>----------------------------</p>";
    }

    function ganharLuta(){
        $this->setVitoria($this->getVitoria() + 1);
    }

    function perderLuta(){
        $this->setDerrota($this->getDerrota() + 1);
    }

    function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }

    //metodos especiais
    function __construct($nome, $idade, $nacionalidade, $altura, $vitoria, $derrota, $empates, $peso){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->nacionalidade = $nacionalidade;
        $this->altura = $altura;
        $this->vitoria = $vitoria;
        $this->derrota = $derrota;
        $this->empates = $empates;
        $this->setPeso($peso);
    }

    //GETTERS
    function getNome(){
        return $this->nome;
    }

    function getIdade(){
        return $this->idade;
    }

    function getNacionalidade(){
        return $this->nacionalidade;
    }

    function getAltura(){
        return $this->altura;
    }

    function getCategoria(){
        return $this->categoria;
    }

    function getVitoria(){
        return $this->vitoria;
    }

    function getDerrota(){
        return $this->derrota;
    }

    function getEmpates(){
        return $this->empates;
    }

    function getPeso(){
        return $this->peso;
    }

    //SETTERS
    function setNome($nome){
        $this->nome = $nome;
    }

    function setIdade($idade){
        $this->idade = $idade;
    }

    function setNacionalidade($nacionalidade){
        $this->nacionalidade = $nacionalidade;
    }

    function setAltura($altura){
        $this->altura = $altura;
    }

    function setCategoria($peso){

        if($peso < 52){
            $this->categoria = "Inválido";
        }
        else if($peso <= 70){
            $this->categoria = "Leve";
        }
        else if($peso <= 83.9){
            $this->categoria = "Médio";
        }
        else if($peso <= 120){
            $this->categoria = "Pesado";
        }
        else{
            $this->categoria = "Inválido";
        }
    }

    function setVitoria($vitoria){
        $this->vitoria = $vitoria;
    }

    function setDerrota($derrota){
        $this->derrota = $derrota;
    }

    function setEmpates($empates){
        $this->empates = $empates;
    }

    function setPeso($peso){
        $this->peso = $peso;
        $this->setCategoria($peso);
    }
}