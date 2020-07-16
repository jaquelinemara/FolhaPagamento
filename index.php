<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta name="charset" content="utf-8" />
		<title>CRUD - Cadastrar</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		 	
	</head>	
	<body>
		<h1>Cadastro de Funcionarios</h1><br>
		<form method="POST" action="pagamento.php">
			<label>Nome: </label>
			<input type="text" name="nome" id="nome" required placeholder="Digite o nome do funcionario" size = 30><br><br>
			
			<label>Numero de horas trabalhadas: </label>
			<input type="text" name="qtdhoras" id="qtdhoras" required placeholder="Digite a quantidade de horas" size = 30><br><br>
			
			<label>Valor da hora trabalhada: </label>
			<input type="text" name="valorhora" id="valorhora" required placeholder="Digite o valor/hora" size = 20><br><br>
			
			<input type="submit" value="Cadastrar">			
		</form>
	</body>
</html>