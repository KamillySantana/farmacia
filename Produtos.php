<?php 

class Produtos extends Categoria{

    public function __construct($nome, $funcao, $classificacao){
        parent::__construct($nome, $funcao, $classificacao);
    }

}