<?php
require_once('Publicacao.php');

class Livro implements Publicacao {
    private $titulo;
    private $autor;
    private $pagAtual;
    private $totalPag;
    private $aberto;
    private $leitor;

    // Construtor 
    public function __construct($titulo, $autor, $totalPag, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totalPag = $totalPag;
        $this->leitor = $leitor;
        $this->pagAtual = 0;
        $this->aberto = false;
    }

    // Getters
    public function getTitulo() { return $this->titulo; }
    public function getAutor() { return $this->autor; }
    public function getTotalPag() { return $this->totalPag; }
    public function getAberto() { return $this->aberto; }
    public function getLeitor() { return $this->leitor; } 
    public function getPagAtual() { return $this->pagAtual; }

    // Setters
    public function setTitulo($t) { $this->titulo = $t; }
    public function setAutor($a) { $this->autor = $a; }
    public function setAberto($ab) { $this->aberto = $ab; }
    public function setLeitor($l) { $this->leitor = $l; }
    public function setPagAtual($pa) { $this->pagAtual = $pa; }
    public function setTotalPag($tp) { $this->totalPag = $tp; }

    public function detalhes() {
        echo "Livro: {$this->getTitulo()} <br>";
        echo "Autor: {$this->getAutor()} <br>";
        echo "Páginas: {$this->getTotalPag()} <br>";
        echo "Dono: {$this->getLeitor()->getNome()} <br>";
        if($this->getAberto()){
            echo "Livro está aberto";
        }else{
            echo "Livro está fechado";
        }
    }

    // Métodos da Interface
    public function abrir() { $this->setAberto(true); }
    public function fechar() { $this->setAberto(false); }
    
    public function avancarPag() {
        if ($this->getPagAtual() < $this->getTotalPag()) {
            $this->setPagAtual($this->getPagAtual() + 1);
            echo "Você está na página {$this->getPagAtual()}";
        } else {
            echo "Você já chegou ao fim do livro.";
        }
    }

    public function voltarPag() {
        if ($this->getPagAtual() > 0) {
            $this->setPagAtual($this->getPagAtual() - 1);
            echo "Você está na página {$this->getPagAtual()}";
        } else {
            echo "Você já está no início do livro.";
        }
    }
}