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
    <title>buscar Consultas</title>
</head>
<body>
    <section class="form">
        <div class="caixaRegistro">
           <h2 class="titulo">Médico</h2>
            <div class="formulario"></div>
                <form method="POST" class="formularioConsulta" action="./buscarConsultas.php" name="form" >
                    <select class="primeiraLinha" name="selectMedico">
                        <?php
                        $query = "SELECT * from medicos ";
                        mysqli_set_charset($connection,"utf-8");
                        if($result=mysqli_query($connection,$query)){
                            while($dados = mysqli_fetch_assoc($result)){
                                $matriculaMedico=$dados['matricula'];
                                $nomeMedico=$dados['nome'];
                            echo '<option value="' .$matriculaMedico.'">'.$nomeMedico.'</option>';
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
            