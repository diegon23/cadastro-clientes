<?php 
	include_once("../dao/cliente.php");
	try{
		$clientes = getAllCustomersDb();
		
		if (count($clientes) == 0) {
			header("Location: ../view/index.php?mensagem=Não há clientes a serem exportados!");
			die();
		}
		
		$fp = fopen('exportacaoClientes'.time().'.csv', 'w');

		foreach ($clientes as $fields) {
			fputcsv($fp, $fields, ';');
		}

		fclose($fp);
			
		header("Location: ../view/index.php?mensagem=Clientes exportados com sucesso!");
		die();
	} catch (Exception $e){
		header("Location: ../view/index.php?mensagem=Erro ao exportar clientes!");
		die();
	}
 
?>