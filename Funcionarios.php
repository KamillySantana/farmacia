<?php

class Funcionarios extends Pessoas{
    public function __construct($nome, $email, $cpf, $telefone) {
        parent::__construct($nome, $email, $cpf, $telefone);
    }
    
}