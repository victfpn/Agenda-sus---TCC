<?php
session_start();
include("conexaoBanco.php");

// Capturando Valores do formúlario de registro.
$cpf=$_POST["cpf"];
$senha=$_POST["senha"];


//Verificando se existe a carteirinha e a senha no banco de dados.
$query = "SELECT * FROM paciente WHERE CPF_Paciente='". $cpf. "' AND Senha_Paciente='".$senha."'";
$return=mysqli_query($connection, $query) or die ('Não foi possivel inserir os dados na tabela paciente');

//Contando quantas linhas a consulta retornou
$linhas = mysqli_num_rows($return);

/*Se o número de linhas > 0 então o cpf foi encontrado. Neste caso, armazena na sessão as informações deste paciente.*/
if($linhas > 0 ){
    // Foi econtrado o código e o nome
    // Transformando o retorno em um array de linhas
    $array= mysqli_fetch_assoc($return);
    do{
        $_SESSION['id_paciente']= $array['ID_Paciente'];
    }while($array=mysqli_fetch_assoc($return));
}else{
    //Caso não encontre nenhum cpf ou código
    echo ("<script> alert('Carteirinha ou Senha inválida.'); </script>");
    echo("<script>window.location.href = '../html/loginPaciente.html';</script>");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
</head>
<body>
    <script type="text/javascript">
        alert('Login realizado com sucesso!');
        window.location.href = '../paginas/sitePrincipal.php';
    </script>
</body>
</html>
