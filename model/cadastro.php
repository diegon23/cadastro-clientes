<?php 
	include_once("../dao/cliente.php");
	
	function salvarCliente($cliente){
		saveCustomerDb($cliente);
	}
	
	function existeClienteModel($cliente){
		return existeClienteCpfEmail($cliente['cpf'], $cliente['email']);
	}

?>