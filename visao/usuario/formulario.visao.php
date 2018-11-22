<br><br><br><br><br><br>
<form action="<?=@$acao?>" method="POST">
    nome completo: <input type="text" name="nome" value="<?=@$usuario['nome']?>"><br>
email: <input type="text" name="email" value="<?=@$usuario['email']?>"><br>
    Sexo:<select name="sexo">
        <option value="m" <?=@assinalarCampo($usuario['sexo'], 'm')?>>Masculino</option>
        <option value="f" <?=@assinalarCampo($usuario['sexo'], 'f')?>>Feminino</option>
    </select><br>

    


    <label for="din">Data de nascimento:</label>
	<input type="text" name="dia" size="2" maxlength="2" placeholder="Dia" value="<?=@$usuario['dia']?>"> 
<input type="text" name="mes" size="2" maxlength="2"  placeholder="Mês" value="<?=@$usuario['mes']?>"> 
<input type="text" name="ano" size="4" maxlength="4" placeholder="Ano" value="<?=@$usuario['ano']?>"><br>


 CPF: <input type="text" name="cpf" data-mask="000.000.000-00" value="<?=@$usuario['cpf']?>"><br>



 CEP: <input type="text" name="cep" data-mask="00000-000" value="<?=@$usuario['cep']?>"><br>

 Endereço: <input type="text" name="rua" value="<?=@$usuario['rua']?>"><br>
   

    Telefone: <input type="text" name="telefone" data-mask="(00)0000-0000" value="<?=@$usuario['telefone']?>"><br>

   <label for="sen">Senha:</label>

	<input maxlength="16" min="8" id="sen" type="password" name="senha" value="<?=@$usuario['senha']?>"><br>

    <label for="sen">Confirmar senha:</label>

	<input maxlength="16" min="8" id="sen" type="password" name="confsenha" value="<?=@$usuario['confsenha']?>">
    <br>

    <button type="submit">Enviar</button>
</form>

<script src="jquery-3.3.1.min.js"></script>
<script src="jquery.mask.js"></script>

