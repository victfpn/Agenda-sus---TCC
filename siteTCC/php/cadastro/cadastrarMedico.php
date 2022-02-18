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
    <link rel="stylesheet" href="../../css/cadastrarMedico.css">
    <title>Cadastrar Médico</title>
</head>
<body>
    <section class="form">
        <div class="caixaRegistro">
            <h2 class="titulo">
                Cadastrar Médico
            </h2>
            <form method="POST" action="../cadastro/novoMedico.php" class="CadastrarMedico" name="cadastrarMedico">
                <input class="primeiraLinha" type="text" name="nome" placeholder="Nome" required>
                <input type="text" class="primeiraLinha" name="crm" pattern="[0-9]+" placeholder="Crm" autocomplete="off" required="true" minlength="8" maxlength="8">
                <select class="segundaLinha" type="text" name="codigoEspecialidade" required placeholder="Especialidade">
                <?php
                    $query = "SELECT cod_espec,tipo from especialidade e";
                    mysqli_set_charset($connection,"utf-8");
                    if($result=mysqli_query($connection,$query)){
                        while($dados = mysqli_fetch_assoc($result)){
                        $codigoEspecialidade=$dados['cod_espec'];
                        $tipoEspecialidade=$dados['tipo'];
                            echo '<option value="' .$codigoEspecialidade,'">'.$tipoEspecialidade.'</option>';
                        }
                        mysqli_free_result($result);
                    }
                ?>
                </select>
                <input type="submit" value="Cadastrar">
        
            </form>
        </div>
    </section>
</body>
</html>