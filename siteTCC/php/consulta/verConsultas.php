<?php
include("../conexao/conexaoBanco.php");
session_start();
$ID_Paciente = $_SESSION['id_paciente'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/verConsultas.css">
    <title>Minhas consultas</title>
</head>
<body>
    <section class="form">
        <div class="caixaRegistro">
           <h2 class="titulo">Consultas marcadas</h2>
            <div class="formulario"></div>
                <form method="" class="consultasMarcadas" action="" name="form">
                    <select class="primeiraLinha" name="selectConsulta">
                        <?php
                        $query = "SELECT * from consultas, medicos WHERE codpaciente ='$ID_Paciente' and status = 1 and medico = matricula";
                        mysqli_set_charset($connection,"utf-8");
                        if($result=mysqli_query($connection,$query)){
                            while($dados = mysqli_fetch_assoc($result)){
                            $dataConsulta=$dados['data'];
                            $horaConsulta=$dados['hora'];
                            $medicoConsulta=$dados['nome'];
                            echo '<option value="">'.$dataConsulta.' - às '.$horaConsulta.' - Médico: Dr(a): '.$medicoConsulta.' </option>';
                            }
                        mysqli_free_result($result);
                        }
                        ?>
                    </select>
                </form>
        </div>
    </section>
</body>
</html>
<?php
            