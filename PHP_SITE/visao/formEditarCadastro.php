<?php include("../controle/controleCliente.php")?>
<?php $id = $_POST['id'];
///echo $id
?>
<!doctype html>
<html>
<head>
	
<meta charset="utf-8">
<title>Formulario de Edição</title>
</head>
<?php
	///Instanciar classe cliente -  Start
	$cliente_obj_resultado = new Cliente();
	///Instanciar classe cliente -  End

	$arraylistar = $cliente_obj_resultado->busca($id);
	/*echo '<pre>';
	var_dump($arraylistar);
	echo '</pre>';*/
?>
	<!--JAVA Script-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>	
	<script type="application/x-javascript" src="../JS/cliente.js">	</script>

	
<body>
	<form action="">
		Nome: <input type="text" name="nome" id="nome" value="<?php echo $arraylistar[0]['Cliente']?>">
		<br>
		Idade: <input type="text" name="idade" id="idade" value="<?php echo $arraylistar[0]['idadeCliente']?>">
		<br>
		<input type="hidden" name = "id" id="id" value="<?php echo $arraylistar[0]['idCliente']?>">
		<input type="button" id="atualizarCadastro" value="Alterar" onClick="atualizar();">
		<input type="hidden" name = "acao" value="altera">
	</form>
		<input type="button" value="Tela de Listar Clientes" onClick="telaListar();">
</body>
</html>