<?php

class Pessoas {
    private $nome;
    private $rg;
    private $email;
    private $cpf;
    private $telefone;

    public function __construct($nome, $rg, $email, $cpf, $telefone) {
        $this->nome = $nome;
        $this->rg = $rg;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getRg() {
        return $this->rg;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getTelefone() {
        return $this->telefone;
    }
}
