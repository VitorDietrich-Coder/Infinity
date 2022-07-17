<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['razaoSocial']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$cnpj = mysqli_real_escape_string($conexao, trim($_POST['cnpj']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
$cep = mysqli_real_escape_string($conexao, trim($_POST['cep']));
$estado = mysqli_real_escape_string($conexao, trim($_POST['estado']));
$cidade = mysqli_real_escape_string($conexao, trim($_POST['cidade']));
$bairro = mysqli_real_escape_string($conexao, trim($_POST['bairro']));
$numeroCasa = mysqli_real_escape_string($conexao, trim($_POST['numeroCasa']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['Senha'])));
$confsenha = mysqli_real_escape_string($conexao, trim(md5($_POST['ConfSenha'])));


$sql = "select count(*) as total from caduser where Email = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: ../Cad.php');
	exit;
}

$sql = "INSERT INTO cad (razaoSocial, email, cnpj, telefone, cep, estado, cidade, bairro, numeroCasa, senha) VALUES ('$nome', '$email', '$cnpj', '$telefone', '$cep', '$estado', '$cidade', '$bairro', '$numeroCasa', '$senha')";
if ($_POST['Senha'] != $_POST['ConfSenha'])
{
	header('Location: ../../Cad.php');
	exit;
}

 if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
	echo "realizado com banco de dados realizado com sucesso!";
}

$conexao->close();
header('Location: ../Login.php');
exit;