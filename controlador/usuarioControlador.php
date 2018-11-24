<?php

require_once "modelo/usuarioModelo.php";


function index() {
    $dados["usuarios"] = pegarTodosUsuarios();
    exibir("usuario/listar", $dados);
}
/** anon */
function adicionar() {
    if (ehPost()) {
        extract($_POST);
        alert(adicionarUsuario($nome, $email, $sexo,$dia,$mes,$ano,$cpf,$cep,$rua,$telefone,$municipio,$estado,$senha,$confsenha));
        redirecionar("usuario/index");
    } else {
        exibir("usuario/formulario");
    }
}
/** user, admin */
function deletar($id) {

    $usarioLogado = pegarUsuarioLogado();
    $usuario = $usarioLogado["user"];

    if($id == $usuario["id"]) {
        alert(deletarUsuario($id));
        redirecionar("login/logout");     
    } else {
        alert("Pare de tentar deletar outros usuarios!");
        redirecionar("usuario/index"); 
    }
}

/** user, admin */
function editar($id) {
    
 $usarioLogado = pegarUsuarioLogado();
    $usuario = $usarioLogado["user"];

if($id == $usuario["id"]) {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $sexo = $_POST["sexo"];
        $dia = $_POST["dia"];
        $mes = $_POST["mes"];
        $ano = $_POST["ano"];
        $cpf = $_POST["cpf"];
        $cep = $_POST["cep"];
        $rua = $_POST["rua"];
        $telefone = $_POST["telefone"];
        $municipio = $_POST["municipio"];
        $estado = $_POST["estado"];
        $senha = $_POST["senha"];
        $confsenha = $_POST["confsenha"];
        alert(editarUsuario($id, $nome, $email,$sexo,$dia,$mes,$ano,$cpf,$cep,$rua,$telefone,$municipio,$estado,$senha,$confsenha));
        redirecionar("usuario/index");
    } else {
        $dados['usuario'] = pegarUsuarioPorId($id);
        $dados['acao'] = "./usuario/editar/$id";
        exibir("usuario/formulario", $dados);

    }
}else{
   alert("Pare de tentar editar outros usuarios!");
    redirecionar("usuario/index"); 
}
}
/** anon */
function visualizar($id) {
     $usarioLogado = pegarUsuarioLogado();
    $usuario = $usarioLogado["user"];

if($id == $usuario["id"]) {
    $dados['usuario'] = pegarUsuarioPorId($id);
    exibir("usuario/visualizar", $dados);
}else{
alert("Pare de tentar visualizar outros usuarios!");
        redirecionar("usuario/index"); 
}
}

