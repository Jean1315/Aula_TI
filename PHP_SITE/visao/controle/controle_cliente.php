<?php
///Modulos - Start
include("../../controle/controleCliente.php");
///Modulos - End
	
///Recebe valores - Start
$nomeCliente  = $_POST["nome"];
$idadeCliente = $_POST["idade"];
$idCliente    = $_POST["id"];

$acao         = $_POST["acao"];

///Instanciar classe cliente -  Start
$insere_obj = new Cliente();
///Instanciar classe cliente -  End

if($acao == "insere"){
	
	$result = $insere_obj->insere($nomeCliente,$idadeCliente);

}elseif($acao == "altera"){
			
	$result = $insere_obj->update($nomeCliente,$idadeCliente,$idCliente);
	
}elseif($acao == "deletar"){
			
	$result = $insere_obj->delete($idCliente);
}
	

?>