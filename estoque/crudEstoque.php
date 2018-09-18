<?php 
	include 'conexaoBD.php';

	function cadastrarProduto($descricao, $quantidade){
		conectar();
		query("INSERT INTO PRODUTO(descricao, quantidade) VALUES ('$descricao', $quantidade)");
		fechar();
	}

	function mostrarProduto(){
		conectar();
		$resultado=query("SELECT * FROM PRODUTO");
		fechar();
		return $resultado;
	}

	function mostrarProdutoAlterar($codigo){
		conectar();
		$resultado=query("SELECT PRODUTO.CODIGO FROM PRODUTO WHERE codigo=$codigo");
		fechar();
		return $resultado;

	}

	function alterarProduto($codigo, $descricao, $quantidade){
		conectar();
		query("UPDATE PRODUTO SET descricao='$descricao', quantidade=$quantidade WHERE codigo=$codigo");
		fechar();
	}

	function excluirProduto($codigo){
		conectar();
		query("DELETE FROM PRODUTO WHERE codigo=$codigo");
		fechar();
	}



?>