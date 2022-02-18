<?php
include("../conexao/conexaoBanco.php");
session_start();
if(isset($_SESSION['id_atendente'])){
}else{
    echo ("<script> alert('Entre com uma conta admininstrativa!'); </script>");
    echo("<script>window.location.href = '../paginas/index.php';</script>");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/cadastrarAtendente.css">
    <title>Cadastrar Atendente</title>
</head>
<body>
    <section class="form">
        <div class="caixaRegistro">
            <h2 class="titulo">
                Cadastrar Atendente
            </h2>
            <form method="POST" action="../cadastro/novoAtendente.php" class="CadastrarMedico" name="cadastrarMedico">
                <input class="primeiraLinha" type="text" name="nome" placeholder="Nome" required>
                <input class="primeiraLinha" id="senha" type="password" name="senha" pattern="[a-zA-Z0-9]+" placeholder="Senha"
                    autocomplete="off" required="true" minlength="8" maxlength="32">
                <input type="submit" value="Cadastrar">
        
            </form>
        </div>
    </section>
</body>
</html>