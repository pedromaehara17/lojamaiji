<?php

function manipular(){
	$arq = fopen("./servicos/manipulacao.txt", "r");
	$banco = array();
		while(!feof($arq)){
			$banco[] = trim(fgets($arq));
		}
		return $banco;
}
?>