<?php
function pegarTodosCupons() {
    $sql = "SELECT * FROM cupom order by idcupom";
    $resultado = mysqli_query(conn(), $sql);
    $cupons = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $cupons[] = $linha;
    }
    return $cupons;
}

function pegarCupomPorId($idcupom) {
    $sql = "SELECT * FROM cupom WHERE idcupom= '$idcupom'";
    $resultado = mysqli_query(conn(), $sql);
    $cupom = mysqli_fetch_assoc($resultado);
    return $cupom;
}


function adicionarCupom($nomecupom, $valorcupom) {
    $sql = "INSERT INTO cupom (nomecupom, valorcupom) 
			VALUES ('$nomecupom', '$valorcupom')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar cupom' . mysqli_error($cnx)); }
    return 'Cupom cadastrado com sucesso!';
}

function editarCupom($idcupom, $nomecupom, $valorcupom) {
    $sql = "UPDATE cupom SET nomecupom = '$nomecupom', valorcupom = '$valorcupom' WHERE idcupom = '$idcupom'";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar cupom' . mysqli_error($cnx)); }
    return 'Cupom alterado com sucesso!';
}

function deletarCupom($idcupom) {
    $sql = "DELETE FROM cupom WHERE idcupom = '$idcupom'";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar cupom' . mysqli_error($cnx)); }
    return 'Cupom deletado com sucesso!';
            
}


function BuscarCupom($cupom) {
    $sql = "SELECT * FROM cupom WHERE nomecupom LIKE  '%$cupom%'";
    $resultado = mysqli_query($cnx = conn(), $sql);
    $cupom = mysqli_fetch_assoc($resultado);
    return $cupom;
}
?>