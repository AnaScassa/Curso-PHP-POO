<?php

    class ContaBanco{
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        public function __construct() {
            $this->saldo = 0;
            $this->status = false;
        }

        public function getNumConta() { return $this->numConta; }
        public function setNumConta($n) { $this->numConta = $n; }

        public function getTipo() { return $this->tipo; }
        public function setTipo($t) { $this->tipo = $t; }

        public function getDono() { return $this->dono; }
        public function setDono($d) { $this->dono = $d; }

        public function getSaldo() { return $this->saldo; }
        public function setSaldo($s) { $this->saldo = $s; }

        public function getStatus() { return $this->status; }
        public function setStatus($s) { $this->status = $s; }

        public function abrirConta($t) {
            $this->setTipo($t);
            $this->setStatus(true);
            if ($t == "CC") { 
                $this->setSaldo(50);
            } elseif ($t == "CP") { 
                $this->setSaldo(150);
            }
        }

        public function fecharConta() {
            if ($this->getSaldo() > 0) {
                echo "<p>Erro: Conta com dinheiro. Saque primeiro!</p>";
            } elseif ($this->getSaldo() < 0) {
                echo "<p>Erro: Conta em débito. Pague sua dívida!</p>";
            } else {
                $this->setStatus(false);
                echo "<p>Conta de {$this->getDono()} fechada com sucesso.</p>";
            }
        }

        public function depositar($v) {
            if ($this->getStatus()) {
                $this->setSaldo($this->getSaldo() + $v);
                echo "<p>Depósito de R$ $v na conta de {$this->getDono()}</p>";
            } else {
                echo "<p>Erro: Conta fechada.</p>";
            }
        }

        public function sacar($v) {
            if ($this->getStatus()) {
                if ($this->getSaldo() >= $v) {
                    $this->setSaldo($this->getSaldo() - $v);
                    echo "<p>Saque de R$ $v autorizado na conta de {$this->getDono()}</p>";
                } else {
                    echo "<p>Saldo insuficiente!</p>";
                }
            } else {
                echo "<p>Impossível sacar de conta fechada.</p>";
            }
        }

        public function pagarMensal() { 
            if ($this->getStatus()) { 
                $t = $this->getTipo(); 
                
                if ($t == "CC") {
                    $valorMensal = 12; 
                } else {
                    $valorMensal = 20; 
                }
                $this->setSaldo($this->getSaldo() - $valorMensal);
                echo "<p>Mensalidade de R$ $valorMensal debitada da conta de {$this->getDono()}</p>";
            } else {
                echo "<p>Erro: Conta fechada.</p>";
            }
        }
}
?>