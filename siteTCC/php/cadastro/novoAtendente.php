<?php
session_start();
include("../conexao/conexaoBanco.php");

// Capturando Valores do formúlario de registro.
$nome=$_POST["nome"];
$senha=$_POST["senha"];

 
$query = "INSERT INTO atendentes (Nome_Atendente,Senha_Atendente) VALUES 
('$nome','$senha')";

$return=mysqli_query($connection, $query) or die ('Não foi possivel inserir os dados na tabela paciente');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Fazendo login</title>
	<script type="text/javascript">
		alert("Atendente cadastrado com sucesso!");
		window.location.href = "../../paginas/index.php"
	</script>
</head>
<body>