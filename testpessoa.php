<?php //iniciando
require_once("Pessoa.class.php"); //requirindo outro arquivo

$pessoa = new Pessoa();//atribuindo a classe
$pessoa->setNome("Miguel Freitas de Souza");//dando valor a variável do encapsulamento
echo $pessoa->getNome();//exibindo
//espaço
//finalizando?> 