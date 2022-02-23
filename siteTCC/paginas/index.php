<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Marcar Consulta</title>
</head>
<body>
<?php
include("../php/conexao/conexaoBanco.php");
session_start();
?>
<main>
    <header>
        <nav>
            <a class="logo" href="#">SUS</a>
            <?php
            if(isset($_SESSION['nome_paciente'])){
            echo '<ul>
                <li><a href="../php/consulta/verConsultas.php">Minhas Consultas</a></li>
                <li><a href="../php/consulta/buscarEspecialidade.php">Consultas</a></li>
                <li><a href="../php/paciente/perfilPaciente.php">Perfil</a></li>
                
            </ul>';
            }
            if(isset($_SESSION['nome_atendente'])){
                echo '<ul>
                <li><a href="../php/consulta/novaConsulta.php">Cadastrar consulta</a></li>
                <li><a href="../php/cadastro/cadastrarMedico.php">Cadastrar medico</a></li>
                <li><a href="../php/cadastro/cadastrarAtendente.php">Cadastrar atendente</a></li>  
                <li><a href="../php/consulta/buscarMedicos.php">Ver consultas</a></li>          
            </ul>';
            }
            ?>
        </nav>
    </header>
    <div class="texto_meio">
        <h2 class="texto_principal">Venha marcar a sua Consulta!</h2>
        <p class="texto_secundario">Mais rápido e pratico!</p>
        
    </div>
    <div class="saiba_mais">
        <a href="../php/consulta/buscarEspecialidade.php" class="botao_meio">Clique aqui!</a>
    </div>
    </main>
    <div class="texto_final">
        <h2 class="texto_principal_final">Vantagem do SUS</h2>
        <p class="texto_secundario_final">Desde consultas, procedimento ambulatorial, aplicação de vacina e até transplante de órgãos, o SUS beneficia cerca de 180 milhões de brasileiros, somando mais de 2,8 bilhões de atendimentos por ano. Segundo dados do Instituto Brasileiro de Geografia e Estatística (IBGE), em 2019, mais de 70% da população era dependente do sistema – número que pode ter aumentado com a pandemia.</p>

    </div>
   <footer>
       <div class="rodape">
        <h1 class="perfil">
            <?php
                if(isset($_SESSION['nome_paciente'])){
                    $paciente = $_SESSION['id_paciente'];
                    $query = "SELECT * from paciente WHERE ID_Paciente = '$paciente'";
                    mysqli_set_charset($connection,"utf-8");
                    if($result=mysqli_query($connection,$query)){
                        while($dados = mysqli_fetch_assoc($result)){
                            $nomePaciente = $dados['Nome_Paciente'];
                        }
                    mysqli_free_result($result);
                    } else{ echo 'Não tem ninguem!'; }
                    echo' '.$nomePaciente.' ';
                }
                if(isset($_SESSION['nome_atendente'])){
                    $atendente = $_SESSION['id_atendente'];
                    $query = "SELECT * from atendentes WHERE ID_Atendente = '$atendente'";
                    mysqli_set_charset($connection,"utf-8");
                    if($result=mysqli_query($connection,$query)){
                        while($dados = mysqli_fetch_assoc($result)){
                            $nomeAtendente = $dados['Nome_Atendente'];
                        }
                    mysqli_free_result($result);
                    } else{ echo 'Não tem ninguem!'; }
                    echo' '.$nomeAtendente.' ';
                }
                
            ?>
        </h1>
            <a class="logout" href="../php/logoff.php"><ion-icon name="log-out-outline"></ion-icon></a> 

       </div>
       
   </footer>

</body>
</html>