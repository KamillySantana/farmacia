<?php

include("Categoria.php");
include("Clientes.php");
include("Funcionarios.php");
include("Pessoas.php");
include("Produtos.php");

$clie = new Clientes("Marie", 34567896, "marie@gmail.com", 15372518, '(18)99876500' );
$fun = new Funcionarios("Lidia", "lidia@gmail.com", 35726284, '(18)99876201');

echo "Nome: " . $clie->getNome() . " <br>";
echo "rg: " . $clie->getrg() . " <br>";
echo "email: " . $clie->getemail() . " <br>";
echo "cpf: " . $clie->getcpf() . " <br>";
echo "telefone: " . $clie->gettelefone() . " <br>";


echo "<hr>";

echo "Nome: " . $fun->getNome() . " <br>";
echo "email: " . $fun->getemail() . " <br>";
echo "cpf: " . $fun->getcpf() . " <br>";
echo "telefone: " . $fun->gettelefone() . " <br>";
