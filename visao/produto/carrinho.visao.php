<style>
#lala{
	width:200px;
	height:250px;
}
</style>

<section class="container">
		<div class="row">

			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 class="text-center">CARRINHO DE COMPRAS <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></h1>
				</div>
				<div class="panel-body">
				<?php if (isset($produtos)) { ?>
					<table class="table">
						<tr>
							<th>IMAGEM</th>
							<th>PRODUTO</th>
						
							<th>PREÇO</th>
							<th>Excluir</th>
						</tr>	
						<!-- products date -->
						<?php 
							$i = 0;
							foreach ($produtos as $produto) {
						?>
							<tr>
								<td><img src="./publico/imagens/<?=$produto['imagem']?>" id="lala">
								</td>
								<td><?= $produto['nomeproduto'] ?></td>
								
								<td>R$ <?= $produto["preco"] ; ?></td>
								<td><a href="<?='carrinho/deletar/' . $i?>">excluir</a></td>
							</tr>
						<?php 
							$i++;}
							}else{
								echo "<h1 class='text-center'>Não há produtos existentes no seu carrinho!</h1>";
							}
						?>

					</table>
				</div>

				<div class="panel-footer">
					<div class="col-lg-10">
						<div class="row">
						</div>
					</div>
					<a href="#" class="btn btn-primary" role="button">COMPRAR</a>
				</div>

			</div>
		</div>
	</section>