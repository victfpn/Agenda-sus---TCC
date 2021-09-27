<?php
if(isset($_SESSION['nome_paciente'])){
    unset($_SESSION['nome_paciente']);
}
echo ("<script> alert('Logoff realizado com sucesso'); </script>");
echo("<script>window.location.href = '../paginas/loginPaciente.html';</script>");
?>