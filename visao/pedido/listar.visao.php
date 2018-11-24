<?php if(empty($pedidos)) :?>

	<h1>Você não realizou nenhum pedido até agora</h1>

<?php else: ?>
	<div class="container">
		<h2>PEDIDOS</h2>
		<div class="panel panel-default">
			<table class="table">
				<thead class="thead-dark">
					<tr>

						<th>Número do Pedido</th>
						<th>Data do pedido</th>
						<th>Total</th>
					</tr>
				</thead>




				<tr>

					<td><?=$pedidosFeitos["idpedido"]?></td>
					<td><?=$pedidosFeitos['dtpedido']?></td>
					<td><?=$pedidosFeitos["total"]?></td>	
				</tr> 


			</table> 
		</div>
	</div>
		<div class="container">
		<h2>Produtos</h2>
		<div class="panel panel-default">
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th>Nome</th>
						<th>Quantidade</th>

					</tr>
				</thead>
				


			<?php foreach ($produtos_comprados as $produto) :?>
				<tr>
					<td><?=$produto['nomeproduto']?></td>
					<td><?=$produto['quantidade']?></td>	
				</tr> 
				<?php endforeach;?> 
				
			</table> 
		</div>
	</div>

<?php endif; ?>
