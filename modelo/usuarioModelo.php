<?php

function pegarTodosUsuarios() {
    $sql = "SELECT * FROM usuario";
    $resultado = mysqli_query(conn(), $sql);
    $usuarios = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $usuarios[] = $linha;
    }
    return $usuarios;
}

function pegarUsuarioPorId($id) {
    $sql = "SELECT * FROM usuario WHERE id= '$id'";
    $resultado = mysqli_query(conn(), $sql);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}

function pegarUsuarioPorEmailSenha($email, $senha) {

$email = mysqli_real_escape_string(conn(), $email);
$senha = mysqli_real_escape_string(conn(), $senha);
        
    $sql = "SELECT * FROM usuario WHERE email= '$email' and senha= '$senha'";
    $resultado = mysqli_query(conn(), $sql);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}

function adicionarUsuario($nome, $email, $sexo,$dia,$mes,$ano,$cpf,$cep,$rua,$telefone,$senha,$confsenha) {
    $sql = "INSERT INTO usuario (nome, email, sexo, dia, mes, ano, cpf, cep, rua, telefone, senha, confsenha) 
			VALUES ('$nome', '$email', '$sexo','$dia','$mes','$ano','$cpf','$cep','$rua', '$telefone','$senha','$confsenha')";


if ((strlen($nome) < 3)){
        echo "Você deve inserir um nome válido";echo"<br>";
        $erro = true;
    }
        if ( ($dia == 0)or($dia>31)or($mes>13)or($ano>2018)or($ano==0)or($mes==0)) {
        echo "Você deve inserir uma data de nascimento válida";echo"<br>"; 
        $erro = true;
    }
        if (strlen($cpf) == 0) {
        echo "Você deve inserir um número de CPF válido";echo"<br>"; 
        $erro = true;
    }
        if ((strlen($telefone) == 0)) {
        echo "Você deve inserir um número de telefone válido";echo"<br>"; 
        $erro = true;
    }
        if ((strlen($email) == 0)) { 
        echo "Você deve inserir um e-mail";echo"<br>";
        $erro = true;
    }
        if (((strlen($senha)<8)and(strlen($senha>16)))or(strlen($senha)==0)) {
        echo "Você deve inserir uma senha";echo"<br>"; 
        $erro = true;
    }
        if (($senha) <> ($confsenha)) {
        echo "Você deve inserir a senha igual à anterior";echo"<br>"; 
        $erro = true;
    } 
$cnx = conn();
if($erro==true){
    die('Erro ao cadastrar usuário' . mysqli_error($cnx));
}else{
    $resultado = mysqli_query($cnx = conn(), $sql);
}
if (!$resultado){
     die('Erro ao cadastrar usuário' . mysqli_error($cnx));
 }else{
     return 'Usuario cadastrado com sucesso!';
 }

       

}
    



function editarUsuario($id, $nome, $email, $sexo,$dia,$mes,$ano,$cpf,$cep,$rua,$telefone,$senha,$confsenha) {
    $sql = "UPDATE usuario SET nome = '$nome', email = '$email', sexo = '$sexo',dia = '$dia',mes = '$mes',ano = '$ano',cpf = '$cpf',cep = '$cep', rua = '$rua',telefone = '$telefone',senha = '$senha',confsenha = '$confsenha' WHERE id = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar usuário' . mysqli_error($cnx)); }
    return 'Usuário alterado com sucesso!';
}

function deletarUsuario($id) {
    $sql = "DELETE FROM usuario WHERE id = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar usuário' . mysqli_error($cnx)); }
    return 'Usuario deletado com sucesso!';
            
}




