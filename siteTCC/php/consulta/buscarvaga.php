<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/buscarvaga.css">
    <title>Marcar consulta</title>
</head>
<body>
    <?php
        include("../conexao/conexaoBanco.php");
        session_start();  
    ?>
    <section class="form">
        <div class="caixaRegistro">
            <h2 class="titulo">Escolha a consulta</h2>
            <div class="formulario"></div>
            <form action="../cadastro/clienteConsulta.php" name="clienteConsulta" method="POST">
                <select class="primeiraLinha" name="valorCodigo">
                <?php
                    $codigoEspec=$_POST["selectConsulta"]; 
                    $dataConsulta=$_POST["dataConsulta"];
                    $query = "SELECT c.codigo, m.nome, c.data as datamarcada, c.hora as horamarcada, c.status
                    FROM medicos m, consultas c WHERE c.medico = m.matricula and c.espec = $codigoEspec and c.status = 0"; 
                    $result=mysqli_query($connection,$query);   
	                $registros=mysqli_num_rows($result);    
	                if ($registros !=0){
		            //$i = 0;
		                while ($dados = mysqli_fetch_assoc($result)) {
			            $nome=$dados['nome'];
			            $ahora=$dados['horamarcada'];
			            $adata=$dados['datamarcada'];
                        $codigo=$dados['codigo'];
                            if($dataConsulta == $adata){
                                echo '<option value="' .$codigo,'">'.$adata.' - às '.$ahora.' - Médico: Dr(a): '.$nome.' </option>';
                                echo '<input class="botao" type="submit">';
                            }
		                }   
	                }else { echo '<option> Não há vagas disponiveis para esse horario </option>';}
                    
                ?>
                </select>
                
            </form>
        </div>
    </section>


</body>

</html>
