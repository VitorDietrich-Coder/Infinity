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
    <script type="text/php" href="IntegraReceita.php"></script>
    <title>Document</title>
</head>
<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.11.2/jquery.mask.js"></script>
    <?php
    include "footer.php";
    ?>
        <div class="content">
            <form method="POST"  action="ConexaoBanco/controler.php"  class="conteudo2" >
                <form method="get">
            <h1 class="TEXT">CADASTRE-SE</h1>
            <br>
                <h1 class="NOME-INPUT">NOME DA EMPRESA</h1> 
                <input type="text" name="emp" id="emp" class="EMP" required>
                <br>
                <h1 class="NOME-INPUT">CNPJ</h1>  
                <input type="text" name="cnpj" onblur="checkcnpj(this.value)" id="cnpj" class="CNPJ" data-mask="00.000.000/0000-00" ng-model="cadastro.cnpj" placeholder="Digite seu CNPJ" required>
                <br>
                <h1 class="NOME-INPUT">E-MAIL</h1> 
                <input type="text" name="email" id="email" class="EMAIL" placeholder="exemplo@dominio.com" required>
                <br>
                <h1 class="TELEFONE">TELEFONE</h1>
                <input type="text" name="telefone" id="telefone" class="TELEFONE" required>
                <br>
                <h1 class="CEP">CEP</h1> 
                <input type="text" name="cep" id="cep" class="CEP" required>
                <br>
                <h1 class="ESTADO">ESTADO</h1> 
                <input type="text" name="estado"id="estado" class="ESTADO" required>
                <br>
                <h1 class="CIDADE">CIDADE</h1> 
                <input type="text" name="cidade" id="cidade"class="CIDADE" required>
                <br>
                <h1 class="BAIRRO">BAIRRO</h1>
                <input type="text" name="bairro" id="bairro" class="BAIRRO" required>

                <h1 class="numero">NÚMERO</h1>  
                <input type="number" name="numcasa" id="numcasa" class="NUMERO" required>

                <h1 class="senha">SENHA</h1>  
                <input type="password" name="senha" id="senha" class="SENHA" required>

                <h1 class="confsenha">CONFIRMAR SENHA</h1>  
                <input type="password" name="confsenha" id="confsenha"class="CONFSENHA" required> <br>

                <button type="submit" id="butao" onclick="checkcnpj(cnpj)" class="boton">BUTOON</button>
                </form>
        </form>
        </div>
 
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>

    <!-- Adicionando Javascript -->
    <script>

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#estado").val("");  
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");
                        

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#estado").val(dados.uf);
            
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>
   
        <?php
            include "Rodape.php";
           ?>
    </body>
    </html>
    

