<?php
include("../conexao/conexaoBanco.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/buscarEspecialidade.css">
    <title>Buscar especialidade</title>
</head>
<body>
    <section class="form">
        <div class="caixaRegistro">
           <h2 class="titulo">Especialidade</h2>
            <div class="formulario"></div>
                <form method="POST" class="formularioConsulta" action="./buscarvaga.php" name="form" >
                    <select class="primeiraLinha" name="selectConsulta">
                        <?php
                        $query = "SELECT * from especialidade";
                        mysqli_set_charset($connection,"utf-8");
                        if($result=mysqli_query($connection,$query)){
                            while($dados = mysqli_fetch_assoc($result)){
                            $codigoEspec=$dados['cod_espec'];
                            $nomeEspec=$dados['tipo'];
                            echo '<option value="' .$codigoEspec,'">'.$nomeEspec.'</option>';
                            }
                        mysqli_free_result($result);
                        }
                        ?>
                    </select>
                    <input class="botao" type="submit">
                </form>
        </div>
    </section>
</body>
</html>
<?php
            