
<?php
session_start();
error_reporting(0);

if (!isset($_SESSION['nome'])) {
    header("Location: footer.php");
    exit;
  }
  
  else{
    if (!isset($_SESSION['senha'])) {
      header("Location: footer.php");
      exit;
    }
  }
?>

<link rel="stylesheet" href="style/footer.css">

 <footer class="superior">
            <img class="escrita" src="src/Infinity.png"></img>
            <img class="carrinho" src="src/carrinho-de-compras.png"></img>
            <img class="LOGIN" src="src/LOGIN.png"></img>
            <?php
            if ($_SESSION['nome'] == true) {
            echo'<a href="perfil.php">'.$_SESSION['nome'].'</a>';
            echo'<a style="background-color:red; border-radius:  5px 0px; margin-right:1%; !important" href="logout.php">Sair</a>';}
          ?>
            <a class="login" type="button" href="Login.php"><strong>Faça login</strong></a>
            <a class="ou">ou</a>
            <a class="cadastrar" type="button" href="Cad.php"> <strong> Cadastre-se </strong> </a>
            <input type="text" class="pesquisa" placeholder="Pesquisar..." ><i class="fa fa-search"></i>
            <input type="text" class="pesquisa" placeholder="Pesquisar..." >
            <section class="container flex">
               <div class="item"><a type="button" href="index.php" class="button-1">HOME</a></div>
                <div class="item"><a type="button" href="Produtos.php" class="button-2">PRODUTOS</a></div>
                <div class="item"><a type="button" href="Sobre.php" class="button-3">SOBRE NÓS</a></div>
                <div class="item"><a type="button" href="Localização.php" class="button-4">LOCALIZAÇÃO</a></div>
                <div class="item"><a type="button" href="Promo.php" class="button-5">PROMOÇÕES</a></div>
            </section>
         </footer>