<?php
  session_start();
  error_reporting(0);
	include("conexao.class.php");
    $cnpj = preg_replace('/[À-Úà-ú]/','', $_POST['cnpj']);
    $senha =  addslashes ($_POST['senha']); 
    $confsenha = md5($senha);
      $sql = "SELECT cnpj, senha FROM user WHERE cnpj= :cnpj and senha= :senha ";
  $stm = bdinfinity::prepare($sql);
  $stm->bindParam(':cnpj', $cnpj);
  $stm->bindParam(':senha', $confsenha);
	$stm->execute();
  $mensagem = '
  <div id="mensagem">
    <style>
          body{
            background: #002848;
          }
          h1{
            text-align: justify;
            letter-spacing: 3px;
          }
          #mensagem{
            position: absolute;
            top: 45%;
            left: 45%;
            color:white;
          }
    </style>
      <h1>Bem Vindo<h1>
  </div>';
if($stm->rowCount()>0){
    
    foreach ($stm as $key => $value) {
      echo $mensagem;
    header("refresh: 1.5; ../index.php?signin=success");

        $id = $value->id;
        $nome = $value->nome;
        $cnpj = $value->cnpj;
        $email = $value->email;
        $telefone = $value->telefone;
        $cep = $value->cep;
        $estado = $value->estado;
        $cidade = $value->cidade;
        $bairro = $value->bairro;
        $numero = $value->numcasa;
        $senha = $value->senha;
    

        $_SESSION['id'] = $id;
        $_SESSION['nome'] = $nome;
        $_SESSION['cnpj'] = $cnpj;
        $_SESSION['email'] = $email;
        $_SESSION['telefone'] = $telefone;
        $_SESSION['cep'] = $cep;
        $_SESSION['estado'] = $estado;
        $_SESSION['cidade'] = $cidade;
        $_SESSION['bairro'] = $bairro;
        $_SESSION['numcasa'] = $numcasa;
        $_SESSION['senha'] = $senha;
      }

      else { 
          $erro_mensagem = 'Erro ao tentar logar, Verifique se as Informações digitadas estão corretas. <br>Erro [041]';
          echo '<div class="loader">'.$erro_mensagem.'</div>';
          $_SESSION['ErroLogin'] = "Erro ao tentar logar, Verifique se as Informações digitadas estão corretas. <br>Erro [041]";
           header("refresh: 1; ../index.php?signup=failed"); //Redireciona pra caso o infeliz clique em logar e deixe tudo em branco ou tente copiar a url de validação
      }
}
?>