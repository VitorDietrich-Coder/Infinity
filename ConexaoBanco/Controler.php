<?php
	include("conexao.class.php");

	$id = $_POST['id'];
	$emp = $_POST['emp'];
	$cnpj = $_POST['cnpj'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $numcasa = $_POST['numcasa'];
	$senha = md5($_POST['senha']);
	
	$sql = "INSERT INTO cad (id, emp, cnpj, email, telefone, cep, estado, cidade, bairro, numcasa, senha) 
			VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
	$stm = bdinfinity::prepare($sql);

	$stm->bindValue(1, $id);
	$stm->bindValue(2, $emp);
	$stm->bindValue(3, $cnpj);
	$stm->bindValue(4, $email);
	$stm->bindValue(5, $telefone);
    $stm->bindValue(6, $cep);
    $stm->bindValue(7, $estado);
    $stm->bindValue(8, $cidade);
    $stm->bindValue(9, $bairro);
    $stm->bindValue(10, $numcasa);
	$stm->bindValue(11, $senha);
	
	$stm->execute();

	header('location:../index.php?signup=success');
?>