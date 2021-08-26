<?php
session_start();
include("conexaoBanco.php");

// Capturando Valores do formúlario de registro.
$nome=$_POST["nome"];
$data=$_POST["data"];
$cpf=$_POST["cpf"];
$carteirinha=$_POST["carteirinha"];
$sexo=$_POST["sexo"];
$senha=$_POST["senha"];
echo("</h1>".$cpf."<p></p>". $carteirinha . "</h1>");
 
$query = "INSERT INTO paciente (Nome_Paciente, Data_Paciente, CPF_Paciente, Carteirinha_Paciente, Sexo_Paciente, Senha_Paciente) VALUES 
('$nome','$data', '$cpf', '$carteirinha', '$sexo', '$senha')";

$return=mysqli_query($connection, $query) or die ('Não foi possivel inserir os dados na tabela paciente');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Fazendo login</title>
	<script type="text/javascript">
		alert("Cadastro finalizado com sucesso!");
	</script>
</head>
<body>