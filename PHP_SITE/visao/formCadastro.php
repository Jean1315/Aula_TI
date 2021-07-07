<?php include("../controle/controleCliente.php")?>
<!doctype html>
<html>
<head>
	
	<meta charset="utf-8">
	<title>Formulario de Cadastro</title>
	
</head>
	<!--JAVA Script-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="application/x-javascript" src="../JS/cliente.js"></script>	
	
	<body>
		<form action="">
			Nome: <input type="text" name="nome" id="nome" <br>
			<br><br>
			Idade: <input type="text" name="idade" id="idade">
			<br><br>
		<input type="button" id="inserir" value="Gravar" onClick="cadastrar();">
			<input type="hidden" name = "acao" value="insere">
			<input type="button" value="Tela de Listar Clientes" onClick="telaListar();">
			<br>
		</form>
			<br>
	</body>
</html>