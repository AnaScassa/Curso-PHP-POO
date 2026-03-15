<?php
require_once("Mamifero.php");

class Cachorro extends Mamifero {

    // Polimorfismo de Sobreposição (Override)
    public function emitirSom() {
        echo "<p>AU! AU! AU!</p>";
    }

    // Polimorfismo de Sobrecarga     
    public function reagirFrase($frase) {
        if ($frase == "Toma comida" || $frase == "Olá") {
            echo "<p>Abanar e Latir</p>";
        } else {
            echo "<p>Rosnar</p>";
        }
    }

    public function reagirHora($hora, $min) {
        if ($hora < 12) {
            echo "<p>Abanar</p>";
        } elseif ($hora >= 18) {
            echo "<p>Ignorar</p>";
        } else {
            echo "<p>Abanar e Latir</p>";
        }
    }

    public function reagirDono($dono) {
        if ($dono == true) {
            echo "<p>Abanar</p>";
        } else {
            echo "<p>Rosnar e Latir</p>";
        }
    }

    public function reagirIdadePeso($idade, $peso) {
        if ($idade < 5) {
            if ($peso < 10) {
                echo "<p>Abanar</p>";
            } else {
                echo "<p>Latir</p>";
            }
        } else {
            if ($peso < 10) {
                echo "<p>Rosnar</p>";
            } else {
                echo "<p>Ignorar</p>";
            }
        }
    }
}