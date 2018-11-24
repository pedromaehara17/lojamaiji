<head>
<meta charset="UTF-8">
</head>
<style>
	#imagem{
		width:100px;
		height:150px;
		}
	</style>
<?php
    $_SESSION["produtos"] = $produtos;




?>


<h2>Listar produtos</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>CATEGORIA</th>
            <th>PREÇO</th>
            <th>QUANTIDADE</th>
			<th>IMAGEM</th>
        </tr>
    </thead>
    <?php foreach ($produtos as $produto): ?>
    <tr>
        <td><?=$produto['idproduto']?></td>
        <td><?=$produto['nomeproduto']?></td>
        <td><?=$produto['categoria']?></td>
        <td><?=$produto['preco']?></td>
        <td><?=$produto['quantidade']?></td>
		<td><img src="./publico/imagens/<?=$produto['imagem']?>" id="imagem"> 	</td>
        <td><a href="./produto/visualizar/<?=$produto['idproduto']?>" class="btn btn-secondary">view</a></td>
        <td><a href="./produto/editar/<?=$produto['idproduto']?>" class="btn btn-info">edit</a></td>
        <td><a href="./produto/deletar/<?=$produto['idproduto']?>" class="btn btn-danger">del</a></td>
    </tr>
    <?php endforeach; ?>
</table>


<a href="./produto/adicionar" class="btn btn-primary">Adicionar novo produto</a>
<br><br>

