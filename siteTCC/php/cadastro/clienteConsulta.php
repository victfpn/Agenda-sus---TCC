<?php
include("../conexao/conexaoBanco.php");
session_start();

$valorCodigo=$_GET['codigo'];
$idPaciente=$_SESSION['id_paciente'];

$query = "UPDATE consultas SET codpaciente = '$idPaciente', status = '1' WHERE codigo = '$valorCodigo'";
$return=mysqli_query($connection, $query) or die ('Não foi possivel inserir os dados na tabela paciente');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Consulta marcada</title>
	<script type="text/javascript">
		alert("Consulta marcada com sucesso!");
		window.location.href = "../../paginas/index.php"
	</script>
</head>
<body>