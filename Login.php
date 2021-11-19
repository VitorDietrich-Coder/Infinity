<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/login.css">
    <title>Document</title>
</head>
<body>
    <?php
    include "footer.php";
    ?>
<div class="contento">   
    
<form method="POST" action="php/Valida.php">
    <div id="modal" class="modal">
     <form class="modal-content" action="/action_page.php" method="post">
        <div class="container-modal">
            <label for="nameUser"><b>Nome</b></label>
            <input type="text" id="cnpj" placeholder="Insira seu nome de usuário" name="cnpj" required>
            <br><br>
            <label for="pswUser"><b>Senha</b></label>
            <input type="password" id="senha" placeholder="Insira sua senha" name="senha" required>
            <br><br>
            <button type="submit">Login</button><br><br>
            <input type="button" onclick="document.getElementById('modal').style.display='none'" class="cancelbtn" value="Cancelar">
        </div>
     </div>  
        <br>
    </form>
</div>
            <?php
            include "Rodape.php";
            ?>
</body>
</html>