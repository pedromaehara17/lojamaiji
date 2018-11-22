<style>
	#img{
		width:300px;
		height:400px;
	}
</style>

<center>

<p>nome: <?=$produto['nomeproduto']?></p>
<p>categoria: <?=$produto['categoria']?></p>
<p>preço: <?=$produto['preco']?></p>
<p>descrição: <?=$produto['descricao']?></p>
<p><br><img src="./publico/imagens/<?=$produto['imagem']?>" id="img"></p>

 <?php 
            if (isset($_SESSION["auth"])) :
              ?>
  
            <td><a href="./carrinho/adicionar/<?= $produto['idproduto']?>" class="btn btn-danger">adicionar ao carinho</a></td>
           <?php else : ?>
		   
            <?php endif ; ?>
</center>