<?php

function pegarTodosProdutos() {
    $sql = "SELECT * FROM produto";
    $resultado = mysqli_query(conn(), $sql);
    $produtos = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $produtos[] = $linha;
    }
    return $produtos;
}


function pegarProdutosPorCategoria($categoria) {
    $sql = "SELECT * FROM produto WHERE categoria = '$categoria'";
    $resultado = mysqli_query(conn(), $sql);
    $produtos = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $produtos[] = $linha;
    }
    return $produtos;  
}

function pegarProdutoPorId($id) {
    $sql = "SELECT * FROM produto WHERE idproduto= '$id'";
    $resultado = mysqli_query(conn(), $sql);
    $produto = mysqli_fetch_assoc($resultado);
    return $produto;
}

function adicionarProduto($nomeproduto, $categoria, $preco, $descricao, $quantidade, $imagem) {
    $sql = "INSERT INTO produto (nomeproduto, categoria, preco, descricao, quantidade, imagem) 
			VALUES ('$nomeproduto', '$categoria', '$preco', '$descricao', '$quantidade', '$imagem')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar produto' . mysqli_error($cnx)); }
    return 'Produto cadastrado com sucesso!';
}

function editarProduto($id, $nomeproduto, $categoria, $preco,$descricao, $quantidade, $imagem) {
    $sql = "UPDATE produto SET nomeproduto = '$nomeproduto', categoria = '$categoria', quantidade = '$quantidade', preco = '$preco', descricao='$descricao', imagem= '$imagem' WHERE idproduto = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar produto' . mysqli_error($cnx)); }
    return 'Produto alterado com sucesso!';
}

function deletarProduto($id) {
    $sql = "DELETE FROM produto WHERE idproduto = '$id'";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar produto' . mysqli_error($cnx)); }
    return 'Produto deletado com sucesso!';
            
}

function pegarVariosProdutosPorId($carrinhoProdutos){
            for ($i=0; $i < count($carrinhoProdutos); $i++) {
                $id = $carrinhoProdutos[$i];
                $comando    = "SELECT * FROM produto WHERE idproduto = '$id'";
                $query  = mysqli_query($cnx = conn(),$comando); 
                
                if(!$query) {
                    die(mysqli_error($cnx));
                }
                $produtos[] = mysqli_fetch_assoc($query); 
            }
            if(!empty($produtos)){
                return $produtos;
            }
        }
		
		
		
		function pegarProdutoPorNome($pesquisa) {
			$sql 	= "SELECT * FROM produto WHERE nomeproduto LIKE '%$pesquisa%'";
			$resultado 		= mysqli_query(conn(), $sql);
			if($resultado){
			$produtos 	= array();
			while ($linha = mysqli_fetch_assoc($resultado)) {
				$produtos[] = $linha;
			}
			return $produtos;
			}else{
				return false;
			}
		}
		
		function hqs() {
    $sql = "SELECT * FROM produto WHERE categoria = 'hqs'";
    $resultado = mysqli_query(conn(), $sql);
    $produtos = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $produtos[] = $linha;
    }
    return $produtos;  
}

function nacionais() {
    $sql = "SELECT * FROM produto WHERE categoria = 'nacionais'";
    $resultado = mysqli_query(conn(), $sql);
    $produtos = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $produtos[] = $linha;
    }
    return $produtos;  
}

function infantis() {
    $sql = "SELECT * FROM produto WHERE categoria = 'infantis'";
    $resultado = mysqli_query(conn(), $sql);
    $produtos = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $produtos[] = $linha;
    }
    return $produtos;  
}
		?>