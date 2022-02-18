<?php
session_start();
include("../conexao/conexaoBanco.php");

// Capturando Valores do formúlario de registro.
$data=$_POST["data"];
$horario=$_POST["horario"];
$medico=$_POST["codigoMedico"];
$especialide=$_POST["codigoEspecialidade"];
$status = 0;
$codpaciente = 0;

$query = "INSERT INTO consultas (data, hora, medico, status, codpaciente, espec) VALUES ('$data', '$horario', '$medico','$status','$codpaciente','$especialide')";
$return=mysqli_query($connection, $query) or die ('Não foi possivel inserir os dados na tabela atendentes');

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
</head>
<body>
    <script type="text/javascript">
        alert('Horario marcado com sucesso!');
        window.location.href = '../../paginas/index.php';
    </script>
</body>
</html>
