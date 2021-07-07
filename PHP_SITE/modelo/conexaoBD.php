<?php

class conexaoBD{
	function con(){
	$conectar = mysqli_connect("localhost","root","") or die(mysqli_error());
		
	mysqli_select_db($conectar,"mvc") or die(mysqli_error());
	
	return $conectar;
	}
}
	/// modelo - Start
	///conexao banco
	$conectar = mysqli_connect("localhost","root","") or die(mysqli_error());
	///seleciona Banco
	mysqli_select_db($conectar,"mvc") or die(mysqli_error());
	/// modelo - End
	
	/*
	$sql = "SELECT * FROM cliente";

	$resultado = mysqli_query($conectar,$sql);

	while($dados = mysqli_fetch_assoc($resultado)){
		echo "Nome". $dados['Cliente']; '<br>';
		echo "idade". $dados['Cliente'];
	}*/
?>

