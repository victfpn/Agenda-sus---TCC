<?php
session_start();
include("../conexao/conexaoBanco.php");

// Capturando Valores do formúlario de registro.
$nomeMedico=$_POST["nome"];
$crmMedico=$_POST["crm"];
$codigoEspecialidade=$_POST["codigoEspecialidade"];
 
$query = "INSERT INTO medicos (nome, crm) VALUES 
('$nomeMedico', '$crmMedico' )";
$return=mysqli_query($connection, $query) or die ('Não foi possivel inserir os dados na tabela medicos');

$query2 = "INSERT INTO medico_espec (cod_medico, cod_espec) VALUES 
(1, '$codigoEspecialidade' )";
$return2=mysqli_query($connection, $query2) or die ('Não foi possivel inserir os dados na tabela Medicos Espcialidades');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Fazendo login</title>
	<script type="text/javascript">
		alert("Medico cadastrado com sucesso!");
		window.location.href = "../../paginas/index.php"
	</script>
</head>
<body>