<?php 

class Produtos extends Categoria{

    public function __construct($nome, $funcao, $classificacao, $faixaetaria) {
        parent::__construct($nome, $funcao, $classificacao, $faixaetaria);
    }

}