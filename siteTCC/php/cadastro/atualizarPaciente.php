<?php
session_start();
include("../conexao/conexaoBanco.php");
$ID_Paciente = $_SESSION['id_paciente'];

// Capturando Valores do formúlario de registro.
$nome=$_POST["nome"];
$data=$_POST["data"];
$cpf=$_POST["cpf"];
$carteirinha=$_POST["carteirinha"];
$email=$_POST["email"];
$telefone=$_POST["telefone"];
 
$query = "UPDATE paciente SET Nome_Paciente ='$nome',Data_Paciente ='$data',CPF_Paciente ='$cpf', Carteirinha_Paciente = '$carteirinha',Email_Paciente ='$email',Telefone_Paciente ='$telefone' WHERE ID_Paciente = '$ID_Paciente'";

$return=mysqli_query($connection, $query) or die ('Não foi possivel inserir os dados na tabela paciente');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Alterando Dados</title>
	<script type="text/javascript">
		alert("Dados alterados com sucesso!");
		window.location.href = "../../paginas/index.php"
	</script>
</head>
<body>