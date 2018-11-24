<?php
require 'modelo/produtoModelo.php';
require 'modelo/cupomModelo.php';
require_once 'modelo/pedidoModelo.php';
require_once 'modelo/usuarioModelo.php';

function index () {
	$id_cliente = $_SESSION['auth']['user']['id'];
	if($pedidos = receberPedidosFeitos($id_cliente)){
		$dados["pedidos"] = true;
			foreach ($pedidos as $pedido => $valor) {
				if ($pedido == "produtos_comprados") {
					$produtos = $pedidos[$pedido];
					$dados["produtos_comprados"] = $produtos;
				} else {
					$pedidosFeitos[$pedido] = $pedidos[$pedido];
					$dados["pedidosFeitos"] = $pedidosFeitos;
				}        
			}
		
	}else{
		$dados["pedidos"] = null;
	}
exibir("pedido/listar", $dados);
}





function finalizarPedido () {
	$cupom = pegarTodosCupons();
	if (!empty($cupom)) {
		echo "<pre>";
		print_r($cupom);
		$desconto = $cupom["desconto"];
		
	} else {
		$desconto = 0;
	}
	//die();
	$data_pedido_realizado = strftime("%Y/%m/%d") . " " . strftime("%H:%M:%S");
	$usuario = $_SESSION["auth"]["user"];
	$id = $usuario["id"];
	$cliente = pegarUsuarioPorId($id);
	$total = 0;
	foreach ($_SESSION["carrinho"] as $key => $value) {
		$produto[] = pegarProdutoPorId($value["id"]);
		foreach ($produto as $key => $prod) {
			if ($value["id"] == $prod["idproduto"]) {
				$total += $prod["preco"] * $value["quantidade"];
				$quantidade_comprada = $value["quantidade"];
				$estoque_atual = $prod["quantidade"];	
			}
		}
	}

	$total = $total - ($total * ($desconto/100));

	$id_pedido = adicionarPedido($id,$data_pedido_realizado,$cliente["cpf"],$cliente["cep"],$cliente["municipio"],$cliente["estado"],$cliente["rua"],$total);

	foreach ($produto as $key => $value) {
		inserirItemPedido($id_pedido,$value["idproduto"],$quantidade_comprada);
		atualizarEstoque($value["idproduto"],$estoque_atual,$quantidade_comprada);
	}
	unset($_SESSION["carrinho"]);
	redirecionar("produto/index");
}
