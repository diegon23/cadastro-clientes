<?php 
	include_once("../db/db_connnection.php");

	function saveCustomerDb($cliente){
		$conn = OpenCon();
		
		$sqlSalvar = 'insert into clientes
		(nome, dt_cadastro, dt_nascimento, cpf, telefone, email)
		values
		("'.$cliente['nome'].'",  CURDATE(), STR_TO_DATE("'.$cliente['nascimento'].'", "%d/%m/%Y"), "'.$cliente['cpf'].'", "'.$cliente['telefone'].'", "'.$cliente['email'].'")';
	
		if($conn->query($sqlSalvar) === TRUE){
			
		} else {
			echo $conn->error;
		}
		
		CloseCon($conn);
	}
	
	function getAllCustomersDb(){
		$conn = OpenCon();
		$retorno = "";
		$sqlConsulta = 'select nome, dt_nascimento, cpf,telefone, email from clientes where dt_cancelamento is null';
		$cliente = $conn->query($sqlConsulta);
		$retorno = array();
		if (isset($cliente) && $cliente != null && is_object($cliente) && $cliente->num_rows > 0) {
			while($row = mysqli_fetch_array($cliente, MYSQLI_ASSOC)) {
				$retorno[] = $row;
			}
		}
		
		CloseCon($conn);
		return $retorno;
	}
	
	function existeClienteCpfEmail($cpf, $email){
		$conn = OpenCon();
		$retorno = "";
		$sqlConsulta = 'select * from clientes where (cpf = "'.$cpf. '" or email = "'. $email.'")'; 
		$cliente = $conn->query($sqlConsulta);
		if (isset($cliente) && $cliente != null && is_object($cliente) && $cliente->num_rows > 0) {
			return true;
		}
		CloseCon($conn);
		
		return false;
	}

?>