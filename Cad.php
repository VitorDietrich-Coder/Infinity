<?php
session_start();

$cx = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($cx, "conexao");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/footer.css">
    <link rel="stylesheet" href="Style/Cad.css">
    <title>Document</title>
</head>
<body>
    <?php
    include "footer.php";
    ?>
        <div class="content">
            <form method="POST" action="ConexaoBanco/controler.php" class="conteudo2" type="submit">
            <h1 class="TEXT">CADASTRE-SE</h1>
            <br>
                <h1 class="NOME-INPUT">NOME DA EMPRESA</h1> 
                <input type="text" id="emp" class="EMP"></input>
                <br>
                <h1 class="NOME-INPUT">CNPJ</h1>  
                <input type="text" id="cnpj" class="CNPJ"></input>
                <br>
                <h1 class="NOME-INPUT">E-MAIL</h1> 
                <input type="text" id="email" class="EMAIL"></input>
                <br>
                <h1 class="NOME-INPUT">TELEFONE</h1>
                <input type="text" id="telefone" class="TELEFONE"></input>
                <br>
                <h1 class="NOME-INPUT">CEP</h1> 
                <input type="text" id="cep" class="CEP"></input>
                <br>
                <h1 class="NOME-INPUT">ESTADO</h1> 
                <input type="text" id="estado" class="ESTADO"></input>
                <br>
                <h1 class="NOME-INPUT">CIDADE</h1> 
                <input type="text" id="cidade"class="CIDADE"></input>
                <br>
                <h1 class="NOME-INPUT">BAIRRO</h1>
                <input type="text" id="bairro" class="BAIRRO"></input>
                <h1 class="NOME-INPUT">NÚMERO</h1>  
                <input type="number" id="numcasa" class="NUMERO"></input>  

                <h1 class="NOME-INPUT">SENHA</h1>  
                <input type="password" id="senha" class="SENHA"></input>  

                <h1 class="NOME-INPUT">CONFIRMAR SENHA</h1>  
                <input type="password" id="confsenha"class="CONFSENHA"></input> <br>

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