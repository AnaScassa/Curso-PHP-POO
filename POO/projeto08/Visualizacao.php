<?php

final class Visualizacao {
    private $espectador;
    private $filme;

    public function __construct($espectador, $filme) {
        $this->espectador = $espectador;
        $this->filme = $filme;
        
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotalAssistido($this->espectador->getTotalAssistido() + 1);
    }

    public function getEspectador() {
        return $this->espectador;
    }

    public function setEspectador($espectador) {
        $this->espectador = $espectador;
    }

    public function getFilme() {
        return $this->filme;
    }

    public function setFilme($filme) {
        $this->filme = $filme;
    }

    public function avaliar(){
        
    }
}