<?php
///Modulos - Start
include("../../controle/controleCliente.php");
//include("../../modelo/conexaoBD.php");
///Modulos - End
	
///Recebe valores - Start
$nomeCliente  = $_POST["nome"];
$idadeCliente = $_POST["idade"];
$idCliente    = $_POST["id"];

$acao         = $_POST["acao"];
///Recebe valores - End

///Instanciar classe cliente -  Start
$insere_obj = new Cliente();
///Instanciar classe cliente -  End

if($acao == "insere"){
	
	///Chama o metodo - Start
	$result = $insere_obj->insere($nomeCliente,$idadeCliente);
	///Chama o metodo - End
	
	///Voltar a tela do formulario
	/*if($result === true){
		header("location: ../formCadastro.php");
	}else{
		echo "ERRO:001";
	}*/
}elseif($acao == "altera"){
			
	///Chama o metodo - Start
	$result = $insere_obj->update($nomeCliente,$idadeCliente,$idCliente);
	//echo $result;
	//header("location: ../listarClientes.php");
	
}elseif($acao == "deletar"){
			
	///Chama o metodo - Start
	$result = $insere_obj->delete($idCliente);
}
	

?>