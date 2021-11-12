<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/Cad.css">
    <title>Document</title>
</head>
<body>
    <?php
    include "footer.php";
    ?>
        <div class="content">
            <form class="conteudo2" type="submit">
            <a class="TEXT">CADASTRE-SE</a>
            <br>
                <input type="text" class="EMP"></input>
                <br>
                <input type="text" class="CNPJ"></input>
                <br>
                <input type="text" class="EMAIL"></input>
                <br>
                <input type="text" class="TELEFONE"></input>
                <br>
                <input type="text" class="CEP"></input>
                <br>
                <input type="text" class="ESTADO"></input>
                <br>
                <input type="text" class="CIDADE"></input>
                <br>
                <input type="text" class="BAIRRO"></input>
                <input type="number" class="NUMERO"></input>

            </form>
        </div>
        <?php
            include "Rodape.php";
            ?>

</body>
</html>