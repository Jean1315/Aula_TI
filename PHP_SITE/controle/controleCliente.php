	<?php
///Load Modelo - Start 
	///Arquivos de controle não tem ../
	include($_SERVER['DOCUMENT_ROOT']."/modelo/conexaoBD.php");
///Load Modelo - End
/*
	$Cliente = $_POST["nome"];
	$idadeCliente = $_POST["idade"];

	$acao = $_POST["acao"];

	if($acao = "insere"){
		$sqliInsert = "INSERT INTO cliente (Cliente, idadeCliente) VALUES ('".$Cliente."', ".$idadeCliente.")";
		mysqli_query($conectar,$sqliInsert);
		echo("Dados inserido com sucesso!");
	}else if($acao = "editar"){
		echo 'UPDATE';
	}else if($acao = 'busca'){
		$sqliSelect = 'SELECT idCliente,Cliente,idadeCliente FROM cliente';
		mysqli_query($conectar,$sqliSelect);
	}else if($acao = "deleta"){
		echo 'Deleta';
	}

?>
*/
class Cliente{
	///metodo Busca - Start
	function busca($id = false){
		
	$obj_con = new ConexaoBD();
	$conectar = $obj_con->con();

	///Instrucao SQL - Start
	$sql = "SELECT * FROM cliente ";
	if($id > 0){
		$sql .="WHERE idCliente = ".$id;
	}
				
	$resultado = mysqli_query($conectar,$sql);
		$r=0;
	while($dados = mysqli_fetch_assoc($resultado)){
		$linha[$r]['idCliente']    = $dados['idCliente'];
		$linha[$r]['Cliente']      = $dados['Cliente'];
		$linha[$r]['idadeCliente'] = $dados['idadeCliente'];
		$r++;
	}
	///Instrucao SQL - End

	return $linha;
	}
	///metodo Busca - End
	 function insere($nome,$idade){
		$resultado = true;
		$obj_con = new ConexaoBD();
		$conectar = $obj_con->con();
		
		$sql = "
		INSERT INTO cliente(
		Cliente, 
		idadeCliente
		) VALUES (
		'".$nome."',
		".$idade.");";
		
		mysqli_query($conectar,$sql) or die($resultado = false);
		
		if($resultado === false){
			return false;
		}else{
			return true;
		}
	}
	
	function update($nome,$idade,$id){
		$resultado = true;
		
		$obj_con = new ConexaoBD();
		$conectar = $obj_con->con();
		
		$sqlUpdate = 
		"UPDATE cliente SET Cliente ='".$nome."', idadeCliente=".$idade."
		WHERE idCliente = ".$id;
		
		mysqli_query($conectar,$sqlUpdate) or die($resultado = false);
	}
	
	function delete($id){
		$result = true;
		
		$obj_con = new ConexaoBD();
		$conectar = $obj_con->con();
		
		$sqlDelete = 
		"DELETE FROM cliente WHERE idCliente = ".$id;
		mysqli_query($conectar,$sqlDelete) or die ($resultado = false);
	}
}
