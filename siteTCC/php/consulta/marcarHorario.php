<?php
include("../conexao/conexaoBanco.php");
session_start();
$ID_Paciente = $_SESSION['id_paciente'];
$data=$_POST['data'];
$hora=$_POST['hora'];
$nomeMedico=$_POST['nomeMedico'];
$return=mysqli_query($connection, $query) or die ('Não foi possivel inserir os dados na tabela paciente');
?>