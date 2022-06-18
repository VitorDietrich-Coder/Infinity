<?php
include("conexao.class.php");
if(empty($_POST['emp']) || empty($_POST['senha']))
{
    header('Location: index.php');
    exit();
}
$emp = mysqli_real_escape_string($conexao, $_POST['emp']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "SELECT emp, SENHA FROM cad WHERE emp = '{emp}' and SENHA = md5('{}')";

$result = mysqli_query($conexao,$query);

$row = mysqli_num_rows($result);

if($row == 1)
{
    $_SESSION['emp'] = $emp;
    header('Location: index.php');
}
else
{
    header('Location: login.php');
    exit();
}
?>