<?php
date_default_timezone_set ("America/Sao_Paulo");
function adicionarPedido ($id,$dtpedido,$cpf,$cep,$municipio,$estado,$rua,$total) {
	$sql = "INSERT INTO pedido (id,dtpedido,cpf,cep,municipio,estado,rua,total)
	VALUES ('$id','$dtpedido','$cpf','$cep','$municipio','$estado','$rua','$total')";
	$resultado = mysqli_query($cnx = conn(), $sql);
	$id_pedido = mysqli_insert_id($cnx);

	if (!$resultado) {
		echo "erro ao cadastrar pedido ".mysqli_error($cnx);
	} 
	return $id_pedido;
}


function inserirItemPedido($idpedido,$idproduto,$quantidade){
	$sql = "INSERT INTO itempedido (idpedido,idproduto,quantidade) VALUES ('$idpedido','$idproduto','$quantidade')";
	$resultado = mysqli_query($cnx = conn(), $sql);
	if (!$resultado) {
		echo "erro ao inserir produto " . mysqli_error($cnx);
		die();
	}
}



function pegarProdutosPorId($id){
	$sql = "SELECT cp.nomeproduto, cp.imagem, cp.preco, pp.quantidade from pedido as p 
	INNER JOIN itempedido as pp ON (p.idpedido = pp.idpedido)
	INNER JOIN produto as cp ON (pp.idproduto = cp.idproduto)
	WHERE p.IDpedido = '$id'";
	$resultado = mysqli_query($cnx = conn(), $sql);
	$produtos_pedidos=array();
	if (!$resultado) {
		echo "Erro inesperado ".mysqli_error($cnx);

	}
	while ($linha = mysqli_fetch_array($resultado)) {
		$produtos_pedidos[] = $linha;
	}
	return $produtos_pedidos;
}


function receberPedidosFeitos ($id) {
	$sql = "SELECT * FROM pedido WHERE idpedido = '$id'";
	$resultado = mysqli_query($cnx = conn(), $sql);
	if (!$resultado) {
		echo "erro inesperado".mysqli_error($cnx);
		die();
	}
	while($linha = mysqli_fetch_array($resultado)){
$produtos_comprados["produtos_comprados"] = pegarProdutosPorId($linha["idpedido"]);	
$pedidosFeitos = array_merge_recursive($linha,$produtos_comprados);
	}
	if (!empty($pedidosFeitos)) {
		return $pedidosFeitos;
	} else {
		return null;
	}
}


function pegarMunicipio($municipio){
	$comando = "SELECT * FROM pedido WHERE municipio = '$municipio'";
	$query = mysqli_query($cnx = conn(), $comando);
	if (!$query) {
		echo "Erro: " . mysqli_error($cnx);
		die();
	}
	while ($row = mysqli_fetch_assoc($query)){
		$pedidos[] = $row;
	}
	if (!empty($pedidos)) {
		return $pedidos;
	}else{
		return "";
	}
}
function pegarData($dtInicio,$dtFim){
	$comando = "SELECT * FROM pedido WHERE dtpedido BETWEEN ('$dtInicio') AND ('$dtFim');";
	$query = mysqli_query($cnx = conn(), $comando);
	if (!$query) {
		echo "Erro: " . mysqli_error($cnx);
		die();
	}
	while ($row = mysqli_fetch_assoc($query)){
		$pedidos[] = $row;
	}
	if (!empty($pedidos)) {
		return $pedidos;
	}else{
		return "";
	}
}

function pegarEstado($estado){
	$comando = "SELECT * FROM pedido WHERE estado = '$estado'";
	$query = mysqli_query($cnx = conn(), $comando);
	if (!$query) {
		echo "Erro: " . mysqli_error($cnx);
		die();
	}
	while ($row = mysqli_fetch_assoc($query)){
		$pedidos[] = $row;
	}
	if (!empty($pedidos)) {
		return $pedidos;
	}else{
		return "";
	}
}
?>