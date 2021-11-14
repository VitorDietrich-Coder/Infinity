<?php
session_start();

$cx = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($cx, "bdinfinity");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/footer.css">
    <link rel="stylesheet" href="Style/Cad.css">
    <script type="text/javascript" href="valida.js"></script>
    <script type="text/javascript" href="IntegraReceita.js"></script>
    <title>Document</title>
</head>
<body>
    <?php
    include "footer.php";
    ?>
        <div class="content">
            <form method="POST" action="ConexaoBanco/controler.php" class="conteudo2" >
            <h1 class="TEXT">CADASTRE-SE</h1>
            <br>
                <h1 class="NOME-INPUT">NOME DA EMPRESA</h1> 
                <input type="text" name="emp" id="emp" class="EMP" required>
                <br>
                <h1 class="NOME-INPUT">CNPJ</h1>  
                <input type="text" name="cnpj" onblur="checkCNPJ(this.value)" id="cnpj" class="CNPJ" /*onkeyup="FormataCnpj(this.event)"*/ data-mask="00.000.000/0000-00" ng-model="cadastro.cnpj" placeholder="Digite seu CNPJ" required>
                <br>
                <h1 class="NOME-INPUT">E-MAIL</h1> 
                <input type="text" name="email" id="email" class="EMAIL" placeholder="exemplo@dominio.com" required>
                <br>
                <h1 class="NOME-INPUT">TELEFONE</h1>
                <input type="text" name="telefone" id="telefone" class="TELEFONE" required>
                <br>
                <h1 class="NOME-INPUT">CEP</h1> 
                <input type="text" name="cep" id="cep" class="CEP" required>
                <br>
                <h1 class="NOME-INPUT">ESTADO</h1> 
                <input type="text" name="estado"id="estado" class="ESTADO" required>
                <br>
                <h1 class="NOME-INPUT">CIDADE</h1> 
                <input type="text" name="cidade" id="cidade"class="CIDADE" required>
                <br>
                <h1 class="NOME-INPUT">BAIRRO</h1>
                <input type="text" name="bairro" id="bairro" class="BAIRRO" required>
                <h1 class="NOME-INPUT">NÚMERO</h1>  
                <input type="number" name="numcasa" id="numcasa" class="NUMERO" required>

                <h1 class="NOME-INPUT">SENHA</h1>  
                <input type="password" name="senha" id="senha" class="SENHA" required>

                <h1 class="NOME-INPUT">CONFIRMAR SENHA</h1>  
                <input type="password" name="confsenha" id="confsenha"class="CONFSENHA" required> <br>

                <button type="submit" id="butao" class="boton">BUTOON</button>
                
        </form>
     
    <script> 
   
				function validaSenha(input) {
					if (input.value != document.getElementById('senha').value) {
						input.setCustomValidity('As senhas sao diferentes');
					} else {
						input.setCustomValidity('');
					}
				}

			</script>
        </div>
        <?php
            include "Rodape.php";
           ?>

</body>
</html>