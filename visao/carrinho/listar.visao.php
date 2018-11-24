<head>

<meta charset="UTF-8">
</head>
<?php

$total = 0;
$totalprodutos = 0;

?>


<h2>Carrinho</h2>
<table class="table">



    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descricao</th>
            <th>Preco</th>
            <th>Quantidade</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <?php foreach ($produtos as $produto): ?>

        <?php 
        foreach ($_SESSION["carrinho"] as $prod) {
            if ($produto["idproduto"] == $prod["id"]) {
                $quantidade = $prod["quantidade"];
            }

        }

        ?>

        <tr>
            <td><?=$produto["idproduto"]?></td>
            <td><?=$produto['nomeproduto']?></td>
            <td><?=$produto['descricao']?></td>
            <td><?=$quantidade * $produto["preco"]?></td>
<td><a href="./carrinho/adicionarQuantidade/<?=$produto['idproduto']?>"><img src="./publico/imagens/cima.jpg" height=20px>
</a><?=$quantidade?>      <a href="./carrinho/diminuirQuantidade/<?=$produto['idproduto']?>"><img src="./publico/imagens/baixo.jpg" height=20px>
</a></td>
            <td><a href="./carrinho/deletar/<?=$produto['idproduto']?>">excluir</a></td>
        </tr>

        <?php
        ?>
    <?php endforeach; ?>
</table>


<h1>Total: <?=$quantidadeProdutos?></h1>

    </p>
<h1>Total: <?=$totalTotal?></h1><br>


<a href="./compra" class="btn btn-primary">Continuar</a>
<br><br>

