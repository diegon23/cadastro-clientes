<?php
	include_once("../model/cadastro.php");  
	$dados = $_POST;
	if(!existeClienteModel($dados)){
		salvarCliente($dados);
	} else {
		header("Location: ../view/index.php?mensagem=Usuário já cadastrado com o cpf/email informados!");
		die();
	}
		
	header("Location: ../view/index.php?mensagem=Usuário cadastrado com sucesso!");
	die();
?>