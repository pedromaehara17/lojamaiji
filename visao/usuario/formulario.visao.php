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

     Municipio: <input type="text" name="municipio" value="<?=@$usuario['municipio']?>"><br>


     Estado:<select name="estado">
        <option value="AC" <?=@assinalarCampo($usuario['estado'], 'AC')?>>AC</option>
        <option value="AL" <?=@assinalarCampo($usuario['estado'], 'AL')?>>AL</option>
        <option value="AP" <?=@assinalarCampo($usuario['estado'], 'AP')?>>AP</option>
        <option value="AM" <?=@assinalarCampo($usuario['estado'], 'AM')?>>AM</option>
        <option value="BA" <?=@assinalarCampo($usuario['estado'], 'BA')?>>BA</option>
        <option value="CE" <?=@assinalarCampo($usuario['estado'], 'CE')?>>CE</option>
        <option value="DF" <?=@assinalarCampo($usuario['estado'], 'DF')?>>DF</option>
        <option value="ES" <?=@assinalarCampo($usuario['estado'], 'ES')?>>ES</option>
        <option value="GO" <?=@assinalarCampo($usuario['estado'], 'GO')?>>GO</option>
        <option value="MA" <?=@assinalarCampo($usuario['estado'], 'MA')?>>MA</option>
        <option value="MT" <?=@assinalarCampo($usuario['estado'], 'MT')?>>MT</option>
        <option value="MS" <?=@assinalarCampo($usuario['estado'], 'MS')?>>MS</option>
        <option value="MG" <?=@assinalarCampo($usuario['estado'], 'MG')?>>MG</option>
        <option value="PA" <?=@assinalarCampo($usuario['estado'], 'PA')?>>PA</option>
        <option value="PB" <?=@assinalarCampo($usuario['estado'], 'PB')?>>PB</option>
        <option value="PR" <?=@assinalarCampo($usuario['estado'], 'PR')?>>PR</option>
        <option value="PE" <?=@assinalarCampo($usuario['estado'], 'PE')?>>PE</option>
        <option value="PI" <?=@assinalarCampo($usuario['estado'], 'PI')?>>PI</option>
        <option value="RJ" <?=@assinalarCampo($usuario['estado'], 'RJ')?>>RJ</option>
        <option value="RN" <?=@assinalarCampo($usuario['estado'], 'RN')?>>RN</option>
        <option value="RS" <?=@assinalarCampo($usuario['estado'], 'RS')?>>RS</option>
        <option value="RO" <?=@assinalarCampo($usuario['estado'], 'RO')?>>RO</option>
        <option value="RR" <?=@assinalarCampo($usuario['estado'], 'RR')?>>RR</option>
        <option value="SC" <?=@assinalarCampo($usuario['estado'], 'SC')?>>SC</option>
        <option value="SP" <?=@assinalarCampo($usuario['estado'], 'SP')?>>SP</option>
        <option value="SE" <?=@assinalarCampo($usuario['estado'], 'SE')?>>SE</option>
        <option value="TO" <?=@assinalarCampo($usuario['estado'], 'TO')?>>TO</option>
    </select><br>

   <label for="sen">Senha:</label>

	<input maxlength="16" min="8" id="sen" type="password" name="senha" value="<?=@$usuario['senha']?>"><br>

    <label for="sen">Confirmar senha:</label>

	<input maxlength="16" min="8" id="sen" type="password" name="confsenha" value="<?=@$usuario['confsenha']?>">
    <br>

    <button type="submit">Enviar</button>
</form>

<script src="jquery-3.3.1.min.js"></script>
<script src="jquery.mask.js"></script>

