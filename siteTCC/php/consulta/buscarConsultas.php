<?php
include("../conexao/conexaoBanco.php");
session_start();
$matriculaMedico=$_POST["selectMedico"];
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
                    <th >Dia</th>
                    <th >Hora</th>
                </tr>    
                <?php

                    $query = "SELECT * from consultas WHERE medico = $matriculaMedico and status = 1";
                    mysqli_set_charset($connection,"utf-8");
                    if($result=mysqli_query($connection,$query)){
                        while($dados = mysqli_fetch_assoc($result)){
                            $diaConsulta=$dados['data'];
                            $horaConsulta=$dados['hora'];
                            $especialidade=$dados['espec'];
                            echo '<tr><td class="th-left">'.$especialidade.'</td><td>'.$diaConsulta.'</td><td>'.$horaConsulta.'</td></tr>';
                        }
                        mysqli_free_result($result);
                    }
                ?>
            
    </section>
</body>
</html>
<?php
            