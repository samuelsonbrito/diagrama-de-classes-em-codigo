<?php 

require_once 'Fabricante.php';
require_once 'Produto.php';

$fabricante = new Fabricante();
$fabricante->setNome("Pepsi");
$fabricante->setCnpj("123456789");

$produto = new Produto();
$produto->setDescricao("Toddynho");
$produto->setEstoque(1000);
$produto->setPreco(1.50);
$produto->setFabricante($fabricante);

echo "O fabricante do produto {$produto->getDescricao()} é {$produto->getFabricante()->getNome()}";