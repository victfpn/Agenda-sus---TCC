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
    <section class="tabela">
            <div class="table-principal">
                <table class="table">
                    <tr class="principal-row">
                        <th >Médico</th>
                        <th >Dia</th>
                        <th >Hora</th>
                        <th class="th-right">Marcar</th>
                    </tr>
                    <?php
                    $codigoEspec=$_POST["selectConsulta"]; 
                    $query = "SELECT c.codigo, m.nome, c.data as datamarcada, c.hora as horamarcada, c.status
                    FROM medicos m, consultas c WHERE c.medico = m.matricula and c.espec = $codigoEspec and c.status = 0 ORDER BY datamarcada"; 
                    $result=mysqli_query($connection,$query);   
	                $registros=mysqli_num_rows($result);    
	                if ($registros !=0){
		            //$i = 0;
		                while ($dados = mysqli_fetch_assoc($result)) {
			            $nome=$dados['nome'];
			            $ahora=$dados['horamarcada'];
			            $adata=$dados['datamarcada'];
                        $codigo=$dados['codigo'];

                            echo '<tr><td>'.$nome.'</td><td>'.$adata.'</td><td>'.$ahora.'</td><td class="td-right"><a href="../cadastro/clienteConsulta.php?codigo='.$codigo.'">Marcar</a></td></tr>';
		                }
  
	                }else { echo '<option> Não há vagas disponiveis para esse horario </option>';}
                    
                ?>
                </table>
            </div>
    </section>


</body>

</html>
