<?php
include("../conexao/conexaoBanco.php");
session_start();

$paciente = $_SESSION['id_paciente'];
$query = "SELECT Nome_Paciente, CPF_Paciente, Email_Paciente,Data_Paciente, Carteirinha_Paciente, Telefone_Paciente FROM paciente WHERE ID_Paciente = '$paciente' ";
$return=mysqli_query($connection, $query) or die ('Não foi possivel se conectar com o banco');
$linhas = mysqli_num_rows($return);
if($linhas > 0 ){
    // Foi econtrado o código e o nome
    // Transformando o retorno em um array de linhas
    $array= mysqli_fetch_assoc($return);
    do{
        $_SESSION['nome_paciente']= $array['Nome_Paciente'];
        $_SESSION['cpf_paciente']=$array['CPF_Paciente'];
        $_SESSION['email_paciente']=$array['Email_Paciente'];
        $_SESSION['data_paciente']=$array['Data_Paciente'];
        $_SESSION['carteirinha_paciente']=$array['Carteirinha_Paciente'];
        $_SESSION['telefone_paciente']=$array['Telefone_Paciente'];
        
    }while($array=mysqli_fetch_assoc($return));
}else{
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/perfilPaciente.css">
    <title>Perfil</title>
</head>
<body>
    <section class="form">
        <div class="caixaRegistro">
           <h2 class="titulo">Modifique seu perfil aqui!</h2>
           <div class="formulario"></div>
               <form method="POST" action="../cadastro/atualizarPaciente.php" name="form">
                    <input class="primeiraLinha" type="text" name="nome" placeholder="Nome" pattern="[a-zA-Z ]+" required="true" autocomplete="off" maxlength="255" 
                    <?php
                        echo 'value="'.$_SESSION['nome_paciente'].'"';
                    ?>>
                    <input class="primeiraLinha" type="date" name="data" placeholder="Data de nascimento" autocomplete="off" required="true" 
                    <?php
                        echo 'value="'.$_SESSION['data_paciente'].'"';
                    ?>>
                    <input class="segundaLinha" type="text" name="cpf" placeholder="CPF" pattern="[0-9]+" autocomplete="off" required="true" minlength="11" maxlength="11" readonly
                    <?php
                        echo 'value="'.$_SESSION['cpf_paciente'].'"';
                    ?>>
                    <input class="segundaLinha" type="text" name="carteirinha" pattern="[0-9]+" placeholder="Carteirinha (Opcional)" autocomplete="off" maxlength="15"
                    <?php
                        echo 'value="'.$_SESSION['carteirinha_paciente'].'"';
                    ?>>
                    <input type="email" class="quartaLinha" name="email" placeholder="Email" autocomplete="off" required="true" maxlength="64"
                    <?php
                        echo 'value="'.$_SESSION['email_paciente'].'"';
                    ?>
                    >
                    <input type="text" class="quintaLinha" name="telefone" pattern="[0-9]+" placeholder="Telefone" autocomplete="off" required="true" minlength="11" maxlength="11"
                    <?php
                        echo 'value="'.$_SESSION['telefone_paciente'].'"';
                    ?>>
                    <input class="botao" type="submit" value="Alterar">
                    
               </form>
               <h2 class="tituloBaixo">Deseja alterar a senha?<a class="cadastrado" href="#">Clique aqui!</a></h2>
           </div>
    </section>
</body>
</html>