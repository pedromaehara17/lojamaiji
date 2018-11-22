<?php

require_once "./servicos/manipulacaoPHP.php";



function conn() {
	$dados = manipular();
    $cnx = mysqli_connect($dados[0], $dados[1],$dados[2],$dados[3]);
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}