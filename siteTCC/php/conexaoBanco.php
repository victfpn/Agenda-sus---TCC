<?php
$connection = mysqli_connect("localhost","root","","posto")
or die ("Não foi possível a conexão ao gerenciamento banco de dados!");
$db = mysqli_select_db($connection, "posto") or die ("Banco de dados não localizado!");
?>