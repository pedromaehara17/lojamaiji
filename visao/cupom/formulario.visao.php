<br><br><br><br><br><br>
<form action="<?=@$acao?>" method="POST">
    Nome Cupom: <input type="text" name="nomecupom" value="<?=@$cupom['nomecupom']?>"><br>
	Desconto: <input type="number" name="valorcupom" value="<?=@$cupom['valorcupom']?>"><br>
	 <button type="submit">Enviar</button>
 </form>