<?php
require "modelo/cupomModelo.php";
/** admin */
function index() {
    $dados["cupons"] = pegarTodosCupons();
    exibir("cupom/listar", $dados);

}
/** admin */
function adicionar() {
    if (ehPost()) {
        echo "<pre>";
        print_r($_POST);
        $nomecupom = $_POST["nomecupom"];
        $valorcupom = $_POST["valorcupom"];
        alert(adicionarCupom($nomecupom, $valorcupom));
        redirecionar("cupom/index");
    } else {
        exibir("cupom/formulario");
    }
}

/** admin */
function deletar($idcupom) {
    alert(deletarCupom($idcupom));
    redirecionar("cupom/index");
}
/** admin */
function editar($idcupom) {
    if (ehPost()) {
        $nomecupom = $_POST["nomecupom"];
        $valorcupom = $_POST["valorcupom"];
        
        alert(editarCupom($idcupom, $nomecupom, $valorcupom));
        redirecionar("cupom/index");
    } else {
        $dados['cupom'] = pegarCupomPorId($idcupom);
        $dados['acao'] 
        = "./cupom/editar/$idcupom";
        exibir("cupom/formulario", $dados);
    } 
}





?>