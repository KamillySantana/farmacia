<?php 

class Categoria {
    private $nome;
    private $funcao;
    private $classificacao;


    public function __construct($nome, $funcao, $classificacao) {
        $this->nome = $nome;
        $this->funcao = $funcao;
        $this->classificacao = $classificacao;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getFuncao() {
        return $this->funcao;
    }

    public function getClassificacao() {
        return $this->classificacao;
    }
}