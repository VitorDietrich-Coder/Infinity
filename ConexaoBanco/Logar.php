<?php
session_start();
include("conexao.php");

if(empty($_POST['Email']) || empty($_POST['Senha'])) {
	header('Location: ../Login.php');
	exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['Email']);
$senha = mysqli_real_escape_string($conexao, $_POST['Senha']);

$query = "select email from cad where email = '{$email}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$usuario_bd = mysqli_fetch_assoc($result);
	$_SESSION['Email'] = $usuario_bd['Email'];
	header('Location: ../Index.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: ../Login.php');
	exit();
}