<?php

include("Pessoas.php");
include("Categoria.php");
include("Clientes.php");
include("Funcionarios.php");
include("Produtos.php");

$clie = new Clientes("Marie", 34567896, "marie@gmail.com", 15372518, '(18)99876500' );
$fun = new Funcionarios("Lidia", "lidia@gmail.com", 35726284, '(18)99876201');
$pro = new Produtos("Dipirona", "Dor e febre", "Remédio");

echo "Nome: " . $clie->getNome() . " <br>";
echo "RG: " . $clie->getrg() . " <br>";
echo "E-mail: " . $clie->getemail() . " <br>";
echo "Cpf: " . $clie->getcpf() . " <br>";
echo "Telefone: " . $clie->gettelefone() . " <br>";

echo "<hr>";

echo "Nome: " . $fun->getNome() . " <br>";
echo "E-mail: " . $fun->getemail() . " <br>";
echo "Cpf: " . $fun->getcpf() . " <br>";
echo "Telefone: " . $fun->gettelefone() . " <br>";

echo "<hr>";

echo "Nome: " . $pro->getNome() . " <br>";
echo "Função: " . $pro->getFuncao() . " <br>";
echo "Classificação: " . $pro->getClassificacao() . " <br>";


