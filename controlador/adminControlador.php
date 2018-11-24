<?php
require_once 'modelo/produtoModelo.php';
require_once 'modelo/pedidoModelo.php';
require_once 'modelo/categoriaModelo.php';

/** admin */
function index() {
    //Município
	if (!empty($_POST["municipio"])) {
		extract($_POST);  
		$dados["pedidosMunicipio"] = pegarMunicipio($municipio); 
	}else{
		$dados["pedidosMunicipio"] = "";
	}
	if (!empty($_POST["dtInicio"]) && !empty($_POST["dtFim"])) {
		extract($_POST);  
		$dados["pedidosPorData"] = pegarData($dtInicio,$dtFim); 
	}else{
		$dados["pedidosMunicipio"] = "";
	}
	if (!empty($_POST["estado"])) {
		extract($_POST);  
		$dados["pedidosEstado"] = pegarEstado($estado); 
	}else{
		$dados["pedidosEstado"] = "";
	}
	
	exibir("administrador/index",$dados);
}
?>