

<br><br><br>
<center><h2>Quantidade de produtos:</h2> <h3><?=$quantidadeProdutos?></h3>

	<h2>Subtotal:</h2> <h3>R$ <?=$totalTotal?></h3><br>
	<?php
	if (empty($cupons)) { ?>
	<h1>Não há cupons</h1>
	<h2>Total a pagar:</h2> <h3>R$ <?=$totalTotal?></h3><br>
	<?php 
} else {
	?>
	<h1>Cupom:<?=$cupons["nomecupom"]?></h1>
<h1>Desconto: R$  <?=$cupons["valorcupom"]?></h1><br>
<br><br>
<h1>Total a pagar: R$ <?=$totalTotal-$cupons["valorcupom"]?></h1><br>
	<?php
}
?>


</center>
<h4>Nome: <?=$usuario["nome"]?></h4>
<h4>Endereço: <?=$usuario["rua"]?></h4>
<h4>CEP: <?=$usuario["cep"]?></h4>

<br>
<center>
	<form action="./compra" METHOD="POST">
		<h3>Possui cupom?</h3>

		<input type="text" name="cupom">
		<button type="submit">Aplicar</button>
	</form>
</center>


<br><br>
<center> Forma de pagamento:<select name="forma">
	<option value="" <?=@assinalarCampo($produto['categoria'], 'nacionais')?>>cartao de credito</option>
	<option value="" <?=@assinalarCampo($produto['categoria'], 'hqs')?>>boleto</option>
	<option value="" <?=@assinalarCampo($produto['categoria'], 'infantis')?>>debito</option>
</select><br><br><br><br>
<a href="./pedido/finalizarPedido" class="btn btn-primary">Finalizar Compra</a>
</center>
<br><br>



