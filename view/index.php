<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Cadastro de Cliente</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<script type="text/javascript">
	function validatePass(e){
		if(e.value.length < 6){
			alert("A senha deve ter no mínimo 6 digitos!");
			document.getElementById("password").value = "";
		}
	}
	
	function validateCPF(e){
		strCPF = e.value;
		var Soma;
		var Resto;
		Soma = 0;
		if (strCPF == "00000000000") { 
			alert("CPF inválido!");
			document.getElementById("cpf").value = "";
		}
		 
		for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
		Resto = (Soma * 10) % 11;
	   
		if ((Resto == 10) || (Resto == 11))  Resto = 0;
		if (Resto != parseInt(strCPF.substring(9, 10)) ) {
			alert("CPF inválido!");
			document.getElementById("cpf").value = "";
	    }
		Soma = 0;
		for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
		Resto = (Soma * 10) % 11;
	   
		if ((Resto == 10) || (Resto == 11))  Resto = 0;
		if (Resto != parseInt(strCPF.substring(10, 11) ) ) {
			alert("CPF inválido!");
			document.getElementById("cpf").value = "";
		}
	}
	
	function validateDDD(e){
		if(e.value.length != 2 || e.value == "00" || isNaN(e.value)){
			alert("O DDD deve ser um número de 2 digitos e ser diferente de zero!");
			document.getElementById("ddd").value = "";
		}
	}
	
	function validatePhone(e){
		if(e.value.length < 9 || isNaN(e.value)){
			alert("O telefone deve ser um número e ter 9 digitos!");
			document.getElementById("phone").value = "";
		}
	}
</script>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
					<?php if(isset($_GET['mensagem'])){ 
						echo '<p style= "color: red" class="text-center">'.$_GET['mensagem'].'</p>';
					}?>
                    <h2 class="title">Dados do Cliente</h2>
                    <form method="POST" action="../controller/ClienteCOntroller.php">
                        <div class="input-group">
                            <input required class="input--style-1" type="text" placeholder="Seu nome..." name="nome">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input required class="input--style-1 js-datepicker" type="text" placeholder="Data de Nascimento" name="nascimento">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
								<div class="input-group">
									<input required class="input--style-1" type="text" placeholder="Seu cpf..." name="cpf">
								</div>
                            </div>
                        </div>
						<div class="input-group">
							<input required class="input--style-1" type="text" placeholder="Seu e-mail..." name="email">
						</div>
						<div class="input-group">
							<input required class="input--style-1" type="text" placeholder="Seu telefone..." name="telefone">
						</div>
						<div class="input-group">
							<input required class="input--style-1" type="text" placeholder="Seu endereço..." name="endereco">
						</div>
                        <div class="row row-space">
							<div class="p-t-20">
								<button class="btn btn--radius btn--green" type="submit">Salvar Cliente</button>
							</div>
							<div class="p-t-20">
								<button class="btn btn--radius btn--green" onclick="">Arquivo de Clientes</button>
							</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
