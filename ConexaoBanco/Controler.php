<?php
	include("conexao.class.php");

	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$cnpj = $_POST['cnpj'];
	$E_email = $_POST['E_email'];
	$E_telefone = $_POST['E_telefone'];
	$senha = md5($_POST['senha']);
	
	$sql = "INSERT INTO empresa (id, nome, cnpj, E_email, E_telefone, senha) 
			VALUES (?, ?, ?, ?, ?, ?)";
	$stm = Conexao::prepare($sql);

	$stm->bindValue(1, $id);
	$stm->bindValue(2, $nome);
	$stm->bindValue(3, $cnpj);
	$stm->bindValue(4, $E_email);
	$stm->bindValue(5, $E_telefone);
	$stm->bindValue(6, $senha);
	
	$stm->execute();

	header('location:../home.php?signup=success');
?>