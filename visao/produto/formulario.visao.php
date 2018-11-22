<form action="<?=@$acao?>" method="POST" enctype="multipart/form-data">
    nome: <input type="text" name="nomeproduto" value="<?=@$produto['nomeproduto']?>"><br>
    Categoria:<select name="categoria">
        <option value="nacionais" <?=@assinalarCampo($produto['categoria'], 'nacionais')?>>nacionais</option>
        <option value="hqs" <?=@assinalarCampo($produto['categoria'], 'hqs')?>>hqs</option>
        <option value="infantis" <?=@assinalarCampo($produto['categoria'], 'infantis')?>>infantis</option>
    </select><br>
    preço: <input type="text" name="preco" value="<?=@$produto['preco']?>"><br>
    Descrição: <input type="text" name="descricao" value="<?=@$produto['descricao']?>"><br>

	imagem: <input type="file" name="imagem" value="<?=@$produto['imagem']?>"><br>

     quantidade: <input type="text" name="quantidade" value="<?=@$produto['quantidade']?>"><br>
  <br>
    <button type="submit">Enviar</button>
</form>