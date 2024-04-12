<?php
//Crie uma classe Carro com atributos privados como modelo, cor e ano. Adicione métodos públicos para configurar e obter o valor desses atributos.

    class Carro {
        private $modelo;
        private $cor;
        private $ano;
        private $combustivel;
        private $ligado;
        private $idCarro;

        public function __construct($idCarro, $modelo, $cor, $ano) {
            $this->idCarro = $idCarro;
            $this->modelo = $modelo;
            $this->cor = $cor;
            $this->ano = $ano;
            $this->combustivel = 0;
            $this->ligado = false;
        }

        public function setId($idCarro) {
            $this->id = $idCarro;
        }

        public function getId() {
            return $this->id;
        }

        public function setCor($cor) {
            $this->cor = $cor;
        }

        public function setAno($ano) {
            $this->ano = $ano;
        }

        public function getModelo() {
            return $this->modelo;
        }

        public function getCor() {
            return $this->cor;
        }

        public function getAno() {
            return $this->ano;
        }

        public function abastecer($quantidade) {
            $this->combustivel += $quantidade;
        }

        public function ligar() {
            if ($this->combustivel > 0) {
                $this->ligado = true;
            } else {
                echo "{$this->idCarro}: Não há combustivel suficiente para liga-lo\n";
            }
        }

        public function desligar() {
            $this->ligado = false;
        }

        public function andar() {
            if($this->ligado && $this->combustivel > 0) {
                echo "{$this->idCarro}: Em movimento";
                $this->combustivel -= 1; //Supõe-se um consumo
            } else if ($this->ligado) {
                echo "{$this->idCarro}: Está desligado.";
            } else if($this->combustivel <= 0) {
                echo "{$this->idCarro}: Está sem combustível";
                $this->desligar(); // Desliga automaticamente quando acaba o combustível.
            }
        }
    }

    $carro1 = new Carro("Carro1", "Toyota", "Cinza", 2021);
    $carro1->abastecer(10); // Abastece o carro
    $carro1->ligar();
    $carro1->andar();
    echo "\n";
    $carro2 = new Carro("Carro2", "Honda", "Preto", 2000);
    $carro2->abastecer(0);
    $carro2->ligar();
    $carro2->andar();

?>