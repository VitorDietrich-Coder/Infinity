<?php
  session_start();
  error_reporting(0);
	include("conexao.class.php");
    $nome = preg_replace('/[À-Úà-ú]/','', $_POST['nome']);
    $senha =  addslashes ($_POST['senha']); 
    $senhash = md5($senha);
      $sql = "SELECT nome, senha FROM user WHERE nome= :nome and senha= :senha ";
  $stm = Conexao::prepare($sql);
  $stm->bindParam(':nome', $nome);
  $stm->bindParam(':senha', $senhash);
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
    header("refresh: 1.5; ../home.php?signin=success");

        $id = $value->id;
        $nome = $value->nome;
        $cpf = $value->cpf;
        $U_email = $value->U_email;
        $U_telefone = $value->U_telefone;
        $senha = $value->senha;
        

        $_SESSION['id'] = $id;
        $_SESSION['nome'] = $nome;
        $_SESSION['cpf'] = $cpf;
        $_SESSION['U_email'] = $U_email;
        $_SESSION['U_telefone'] = $telefone;
        $_SESSION['senha'] = $senha;
      }
  }else{
    $sql = "SELECT nome, senha FROM empresa WHERE nome= :nome and senha= :senha ";
    $stm = Conexao::prepare($sql);
    $stm->bindParam(':nome', $nome);
    $stm->bindParam(':senha', $senhash);
    $stm->execute();
    if($stm->rowCount()>0){
        foreach ($stm as $key => $value) {
        echo $mensagem;
        header("refresh: 1.5; ../home.php?signin=success");

          $id = $value->id;
          $nome = $value->nome;
          $cnpj = $value->cnpj;
          $E_email = $value->E_email;
          $E_telefone = $value->E_telefone;
          $senha = $value->senha;
        

          $_SESSION['id'] = $id;
          $_SESSION['nome'] = $nome;
          $_SESSION['cnpj'] = $cnpj;
          $_SESSION['E_email'] = $E_email;
          $_SESSION['E_telefone'] = $E_telefone;
          $_SESSION['senha'] = $senha;
        }
      }
      else { 
          $erro_mensagem = 'Erro ao tentar logar, Verifique se as Informações digitadas estão corretas. <br>Erro [041]';
          echo '<div class="loader">'.$erro_mensagem.'</div>';
          $_SESSION['ErroLogin'] = "Erro ao tentar logar, Verifique se as Informações digitadas estão corretas. <br>Erro [041]";
           header("refresh: 1; ../index.php?signup=failed"); //Redireciona pra caso o infeliz clique em logar e deixe tudo em branco ou tente copiar a url de validação
      }
}
?>