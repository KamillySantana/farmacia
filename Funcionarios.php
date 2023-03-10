<?php

class Funcionarios extends Pessoas{
    public function __construct($nome, $rg, $email, $cpf, $telefone) {
        parent::__construct($nome, $rg, $email, $cpf, $telefone);
    }
}