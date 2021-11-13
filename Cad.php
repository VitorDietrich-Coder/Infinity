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
            <form class="conteudo2" type="submit">
            <h1 class="TEXT">CADASTRE-SE</h1>
            <br>
                <h1 class="NOME-INPUT">NOME DA EMPRESA</h1> 
                <input type="text" class="EMP"></input>
                <br>
                <h1 class="NOME-INPUT">CNPJ</h1>  
                <input type="text" class="CNPJ"></input>
                <br>
                <h1 class="NOME-INPUT">E-MAIL</h1> 
                <input type="text" class="EMAIL"></input>
                <br>
                <h1 class="NOME-INPUT">TELEFONE</h1>
                <input type="text" class="TELEFONE"></input>
                <br>
                <h1 class="NOME-INPUT">CEP</h1> 
                <input type="text" class="CEP"></input>
                <br>
                <h1 class="NOME-INPUT">ESTADO</h1> 
                <input type="text" class="ESTADO"></input>
                <br>
                <h1 class="NOME-INPUT">CIDADE</h1> 
                <input type="text" class="CIDADE"></input>
                <br>
                <h1 class="NOME-INPUT">BAIRRO</h1>
                <input type="text" class="BAIRRO"></input>
                <h1 class="NOME-INPUT">NÚMERO</h1>  
                <input type="number" class="NUMERO"></input>  

                <h1 class="NOME-INPUT">SENHA</h1>  
                <input type="senha" class="SENHA"></input>  

                <h1 class="NOME-INPUT">CONFIRMAR SENHA</h1>  
                <input type="senha" class="CONFSENHA"></input> <br>

                <button type="submit" id="butao" class="boton">BUTOON</button>
</form>
        </div>
        <?php
            include "Rodape.php";
           ?>

</body>
</html>