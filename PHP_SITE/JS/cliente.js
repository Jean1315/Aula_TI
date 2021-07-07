// JavaScript Document

function telaListar(){
	//console.log('Foi para a tela de cadastro');//LOG de erro (olhar no console do navegdor)
	window.location.href = 'listarClientes.php';
}

function telaCadastro(){
	window.location.href = 'formCadastro.php';
}

function cadastrar(){
	
	//Jquery - Start - Puxa o valor do input
	nome = $('#nome').val();
	idade = $('#idade').val();
	//Jquery - End

	//Envia para o controle cliente - Start
	$.ajax({
		type:"POST",
		url:"controle/controle_cliente.php",
		data:{acao:"insere",nome:nome,idade:idade},
		
		success: function(data){
		alert("Cliente Cadastro com Sucesso!");
		telaListar();
		}
	})
}

function atualizar(){
	//Jquery - Start - Puxa o valor do input
	id = $('#id').val();
	nome = $('#nome').val();
	idade = $('#idade').val();
	//Jquery - End

	$.ajax({
		type:"POST",
		url:"controle/controle_cliente.php",
		data:{acao:"altera",nome:nome,idade:idade,id:id},
		
		success: function(data){
		alert("Cliente Atualizado!");
		telaListar();
		}
	})
}
function telaEdicao(valor){
	///window.location.href = 'formEditarCadastro.php?id='+valor;
	
	$('#idFormulario').val(valor);
	$('#formulario').submit();
	

}

function deletar(valor){
	
	var result = confirm("Você tem certeza?")
	
	if(result == true){
		$.ajax({
			type:"POST",
			url:"controle/controle_cliente.php",
			data:{acao:"deletar",id:valor},
			
			success: function(data){
				console.log("Deletado");			
				window.location.href = 'listarClientes.php';
				alert("Cliente Deletado!");
			}
		});	
	}else {
		alert("Registro não deletado!");
	}
}
