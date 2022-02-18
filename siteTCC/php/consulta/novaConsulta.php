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
    <link rel="stylesheet" href="../../css/novaConsulta.css">
    <title>Marcar Consulta</title>
</head>
<body>
    <section class="form">
        <div class="caixaRegistro">
            <h2 class="titulo">
                Cadastrar Consulta
            </h2>
            <form method="POST" action="../cadastro/marcarConsulta.php" class="marcarHorario" name="marcarHorario">
                <input class="primeiraLinha" type="date" name="data" required>
                <input class="primeiraLinha" type="time" name="horario" required min="07:00" max="18:00">
                <select class="segundaLinha" type="text" name="codigoMedico" required placeholder="Medico">
                <?php
                    $query = "SELECT nome,matricula from medicos";
                    mysqli_set_charset($connection,"utf-8");
                    if($result=mysqli_query($connection,$query)){
                        while($dados = mysqli_fetch_assoc($result)){
                        $matriculaMedico=$dados['matricula'];
                        $nomeMedico=$dados['nome'];
                            echo '<option value="' .$matriculaMedico,'">'.$nomeMedico.'</option>';
                        }
                        mysqli_free_result($result);
                    }
                ?>
                </select>
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