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
        <div class="table-principal">
            <table class="table">
                <tr class="principal-row">
                    <th>Especialidade</th>
                    <th >Médico</th>
                    <th >Dia</th>
                    <th >Hora</th>
                </tr>    
                <?php
                    $query = "SELECT * from consultas, medicos WHERE codpaciente ='$ID_Paciente' and status = 1 and medico = matricula";
                    mysqli_set_charset($connection,"utf-8");
                    if($result=mysqli_query($connection,$query)){
                        while($dados = mysqli_fetch_assoc($result)){
                        $codigoEspecialidade=$dados['espec'];
                        $dataConsulta=$dados['data'];
                        $horaConsulta=$dados['hora'];
                        $medicoConsulta=$dados['nome'];
                        
                            echo '<tr><td class="th-left">'.$codigoEspecialidade.'</td><td>'.$medicoConsulta.'</td><td>'.$dataConsulta.'</td><td>'.$horaConsulta.'</td></tr>';
                        }
                        mysqli_free_result($result);
                    }
                ?>
            
    </section>
</body>
</html>
<?php
            