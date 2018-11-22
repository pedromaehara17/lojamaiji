<?php

require "modelo/produtoModelo.php";
/** anon */
function index() {
    $dados["produtos"] = pegarTodosProdutos();
    exibir("produto/listar", $dados);
    exibir("paginas/", $dados);

}
/** admin */
function adicionar() {
    if (ehPost()) {
        extract($_POST);
		
		$foto = $_FILES['imagem'];
		
		// Caminho de onde ficará a imagem
		$caminho_imagem = "publico/imagens/" . $foto["name"];

		// Faz o upload da imagem para seu respectivo caminho
		move_uploaded_file($foto["tmp_name"], $caminho_imagem);
		
		$imagem = $foto["name"];
		
        alert(adicionarProduto($nomeproduto, $categoria, $preco, $descricao, $quantidade, $imagem));
        redirecionar("produto/index");
    } else {
        exibir("produto/formulario");
    }
}
/** anon */
function visualizar($id) {
    $dados['produto'] = pegarProdutoPorId($id);
    exibir("produto/visualizar", $dados);
 
}
/** admin */
function deletar($id) {
    alert(deletarProduto($id));
    redirecionar("produto/index");
}
/** admin */
function editar($id) {
    if (ehPost()) {
        $nomeproduto = $_POST["nomeproduto"];
        $categoria = $_POST["categoria"];
		$preco = $_POST["preco"];
            $descricao = $_POST["descricao"];
             $quantidade = $_POST["quantidade"];
        $foto = $_FILES['imagem'];
        
        // Caminho de onde ficará a imagem
        $caminho_imagem = "publico/imagens/" . $foto["name"];

        // Faz o upload da imagem para seu respectivo caminho
        move_uploaded_file($foto["tmp_name"], $caminho_imagem);
        
		$imagem = $foto["name"];
        alert(editarProduto($id, $nomeproduto, $categoria, $preco,$descricao, $quantidade, $imagem));
        redirecionar("produto/index");
    } else {
        $dados['produto'] = pegarProdutoPorId($id);
        $dados['acao'] 
		= "./produto/editar/$id";
        exibir("produto/formulario", $dados);
    }
}


/** anon */
	function search(){
		if(ehPost()){
			extract($_POST);
			$dados["produtos"] = pegarProdutoPorNome($pesquisa);
			exibir("produto/listar", $dados);
		}else{
		}
	}

?>