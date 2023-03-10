<?php
    class Clientes extends Pessoas{
        private $rg;

        public function __construct($nome, $email, $cpf, $telefone, $rg) {
            parent::__construct($nome, $email, $cpf, $telefone);

            $this->rg = $rg;
        }

        public function getRg() {
            return $this->rg;
        }

    }

