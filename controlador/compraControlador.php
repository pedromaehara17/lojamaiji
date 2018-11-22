<?php
require "modelo/produtoModelo.php";
require_once "modelo/usuarioModelo.php";
require_once 'modelo/cupomModelo.php';
/** user */
function index(){
	$produtosCarrinho = array();
        $total = 0;
        $totalquantidade = 0;
if (ehPost()) {
    $cupom = $_POST["cupom"];
    $dados["cupons"] = BuscarCupom($cupom);




}
        foreach ($_SESSION["carrinho"] as $produtoSessao) {
            $produtoBanco = pegarProdutoPorId($produtoSessao["id"]);
            $produtosCarrinho[] =  $produtoBanco;

            $total = $total + ($produtoBanco["preco"] * $produtoSessao["quantidade"]);
            $totalquantidade = $totalquantidade + $produtoSessao["quantidade"];
        }
        $dados["produtos"] = $produtosCarrinho;

        $dados["quantidadeProdutos"] = $totalquantidade;
        $dados["totalTotal"] = $total;
       	$dados["usuario"] = $_SESSION["auth"]["user"];


		exibir("compra/index",$dados);

}

?>