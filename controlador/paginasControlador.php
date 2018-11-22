<?php

require "modelo/produtoModelo.php";

/** anon */
function index() {

	$dados["produtos"] = pegarTodosProdutos();
	exibir("paginas/index", $dados);
}



/** anon */
function exibirHq(){

	$dados['produtos'] = hqs();
	exibir("paginas/hqs", $dados);
}

/** anon */
function exibirnacionais(){

	$dados['produtos'] = nacionais();
	exibir("paginas/nacionais", $dados);
}

/** anon */
function exibirInfantis(){

	$dados['produtos'] = infantis();
	exibir("paginas/infantis", $dados);
}

