<?php
include_once('AcoesVideo.php');

    final class Video implements AcoesVideo {
        private $titulo;
        private $avaliacoes;
        private $views;
        private $curtidas;
        private $reproduzindo;

        public function __construct($titulo) {
            $this->titulo = $titulo;
            $this->avaliacoes = 0;
            $this->views = 0;
            $this->curtidas = 0;
            $this->reproduzindo = false;
        }

        public function getTitulo() {
            return $this->titulo;
        }

        public function setTitulo($titulo) {
            $this->titulo = $titulo;
        }

        public function getAvaliacoes() {
            return $this->avaliacoes;
        }

        public function setAvaliacoes($avaliacoes) {
            $this->avaliacoes = $avaliacoes;
        }

        public function getViews() {
            return $this->views;
        }

        public function setViews($views) {
            $this->views = $views;
        }

        public function getCurtidas() {
            return $this->curtidas;
        }

        public function setCurtidas($curtidas) {
            $this->curtidas = $curtidas;
        }

        public function getReproduzindo() {
            return $this->reproduzindo;
        }

        public function setReproduzindo($reproduzindo) {
            $this->reproduzindo = $reproduzindo;
        }

        public function play(){
            if(!$this->reproduzindo){
                $this->reproduzindo = true;
                echo "<p>Video está reproduzindo</p>";
            }else{
                echo "<p>O video já esta reproduzindo</p>";
            }
        }

        public function pause(){
            if($this->reproduzindo){
                $this->reproduzindo = false;
                echo "<p>Video está pausado</p>";
            }else{
                echo "<p>Video já está pausado</p>";
            }
        }

        public function like(){
            $this->curtidas += 1;
            echo "<p>Você curtiu o video</p>";
        }
    }