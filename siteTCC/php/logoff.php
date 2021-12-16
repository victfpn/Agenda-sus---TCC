<?php

session_start();
session_unset();
session_destroy();

echo "<p>Saida efetuada com sucesso</p>";
echo '<p>Clique <a href="../paginas/loginPaciente.html">AQUI</a> para retornar ao inicio.</p></strong>';
?>