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
    
<form method="POST" action="ConexaoBanco\Logar.php">
        <div class="container-modal">
            <label for="email"><b>E-mail</b></label>
            <input type="Email" id="Email" placeholder="Insira seu E-mail" name="Email">
            <br><br>
            <label for="senha"><b>Senha</b></label>
            <input type="password" id="Senha" placeholder="Insira sua senha" name="Senha">
            <br><br>
            <button type="submit" id="butao" class="boton">Login</button><br><br>
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