<?php
require "modelo/produtoModelo.php";

/** anon */
function index()
{


    if (isset($_SESSION["carrinho"])) {
        
        $produtosCarrinho = array();
        $total = 0;
        $totalquantidade = 0;

        foreach ($_SESSION["carrinho"] as $produtoSessao) {
            $produtoBanco = pegarProdutoPorId($produtoSessao["id"]);
            $produtosCarrinho[] =  $produtoBanco;

            $total = $total + ($produtoBanco["preco"] * $produtoSessao["quantidade"]);
            $totalquantidade = $totalquantidade + $produtoSessao["quantidade"];
        }
        $dados["produtos"] = $produtosCarrinho;

        $dados["quantidadeProdutos"] = $totalquantidade;
        $dados["totalTotal"] = $total;
        exibir("carrinho/listar", $dados);
    } else {
        echo "Nao existem produtos no carrinho!";
    }
}

//http://localhost/app/carrinho/adicionar/2
/** user */
function adicionar($id)
{
    if (!isset($_SESSION["carrinho"])) {
        $_SESSION["carrinho"] = array();
        //$_SESSION["carrinho"][] = $produto;
    }




    //vai existir a sessao carrinho!
    $alt = false ;


    for ($i=0; $i < count($_SESSION["carrinho"]); $i++) {
        if ($_SESSION["carrinho"][$i]["id"] == $id) {
            $alt = true;
            $_SESSION["carrinho"][$i]["quantidade"]++;


        }
    }
    if (!$alt) {
        $produto["id"] = $id;
        $produto["quantidade"]=1;
        $_SESSION["carrinho"][] = $produto;
    }

 
   echo "<pre>";
   print_r($_SESSION["carrinho"]);
    redirecionar("carrinho");
}

//http://localhost/app/carrinho/deletar/2

/** user */
function deletar($id)
{
    
    foreach ($_SESSION["carrinho"] as $chave => $produto) {
        if ($id == $produto["id"]) {
            echo $produto["id"];
            unset($_SESSION["carrinho"][$chave]);
        }
    }

    
    

    
   $_SESSION["carrinho"] = array_values($_SESSION["carrinho"]);
   
    redirecionar("carrinho/index");
}

function limparSessao() {
    unset($_SESSION["carrinho"]);
}

function adicionarQuantidade($id){
for($i=0; $i< count($_SESSION["carrinho"]);$i++){
    if($_SESSION["carrinho"][$i]["id"]==$id){
        $_SESSION["carrinho"][$i]["quantidade"]+=1;
    }

}
redirecionar("carrinho/index");
}


function diminuirQuantidade($id){
for($i=0; $i< count($_SESSION["carrinho"]);$i++){
    if($_SESSION["carrinho"][$i]["id"]==$id){
        $_SESSION["carrinho"][$i]["quantidade"]-=1;
    if($_SESSION["carrinho"][$i]["quantidade"]==0){
        unset($_SESSION["carrinho"][$i]);

        $_SESSION["carrinho"]=array_values($_SESSION["carrinho"]);
        redirecionar("carrinho/index");
    }   
    }

}
redirecionar("carrinho/index");
}