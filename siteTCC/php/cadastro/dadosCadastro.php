<?php
session_start();
include("../conexao/conexaoBanco.php");

// Capturando Valores do formúlario de registro.
$nome=$_POST["nome"];
$data=$_POST["data"];
$cpf=$_POST["cpf"];
$carteirinha=$_POST["carteirinha"];
$sexo=$_POST["sexo"];
$senha=$_POST["senha"];
$email=$_POST["email"];
$telefone=$_POST["telefone"];
 
$query = "INSERT INTO paciente (Nome_Paciente, Data_Paciente, CPF_Paciente, Carteirinha_Paciente, Sexo_Paciente, Senha_Paciente, Email_Paciente, Telefone_Paciente) VALUES 
('$nome','$data', '$cpf', '$carteirinha', '$sexo', '$senha','$email','$telefone' )";

$return=mysqli_query($connection, $query) or die ('Não foi possivel inserir os dados na tabela paciente');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Fazendo login</title>
	<script type="text/javascript">
		alert("Cadastro finalizado com sucesso!");
		window.location.href = "../../paginas/loginPaciente.html"
	</script>
</head>
<body>