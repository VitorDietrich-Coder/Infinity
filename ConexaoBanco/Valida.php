<?php
  session_start();
  error_reporting(0);

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

	include("conexao.class.php");
    $nome = preg_replace('/[À-Úà-ú]/','', $_POST['nome']);
    $senha =  addslashes ($_POST['senha']); 
    $senhash = md5($senha);


  $sql = "SELECT ID, nome, senha FROM cad WHERE nome= :nome and senha= :senha ";
  $stm = bdinfinity::prepare($sql);
  $stm->bindParam(':nome', $nome);
  $stm->bindParam(':senha', $senhash);
	$stm->execute();
if($stm->rowCount()>0){		
    $_SESSION ['nome'] = $_POST['nome'];
    $_SESSION ['usuario'] = $_POST['usuario'];
    $row=$stm->fetch(PDO::FETCH_ASSOC);
    $_SESSION ['iduser'] = $row['id'];
    $_SESSION ['senha'] = $senhash; 	
    echo $mensagem;	
    header("refresh: 1.5; ../index.php?signin=success");
   /* foreach ($stm as $key => $value) {
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
      } */
  }

      else { 
          $erro_mensagem = 'Erro ao tentar logar, Verifique se as Informações digitadas estão corretas. <br>Erro [041]';
          echo '<div class="loader">'.$erro_mensagem.'</div>';
          $_SESSION['ErroLogin'] = "Erro ao tentar logar, Verifique se as Informações digitadas estão corretas. <br>Erro [041]";
           header("refresh: 1; ../index.php?signup=failed"); //Redireciona pra caso o infeliz clique em logar e deixe tudo em branco ou tente copiar a url de validação
      }

?>