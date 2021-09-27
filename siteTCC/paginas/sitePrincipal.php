<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/sitePrincipal.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


    <title>Document</title>
</head>

<body>
    <!-- ========== Cabecalho ========== -->
    <header class="cabecalho" id="home">
        <a href="#" class="logo">SUS</a>
        <div class="menu_navbar" id="menu-navbar">
            <ul class="lista">
                <li class="item">
                    <a href="#home" class="link_navbar">
                       Home
                    </a>
                </li>
                <li class="item">
                    <a href="#medicos" class="link_navbar">
                        Medicos
                    </a>
                </li>
                <li class="item">
                    <a href="#horarios" class="link_navbar">
                        Horarios
                    </a>
                </li>
                <li class="item">
                    <a href="#perfil" class="link_navbar">
                        Perfil
                    </a>
                </li>
            </ul>
        </div>
    </header>
    <!-- ========== Home ========== -->
    <section class="home">
        <?php
			if(	isset($_SESSION['id_paciente'])){
				echo ("<h1> Bem vindo " . $_SESSION['nome_paciente'] .  " *isso é um teste pra ver se ta funcionando*</h1>");
			}
		?>
        <div class="noticia">
            <div class="noticia_home">
                <h1>Bom dia Com vacinação!</h1>
            </div>
            <div class="texto_noticia">
                <h3>A vacinação começou, venha vacinar agora mlk namoral só vem! <span class="saiba_mais">Saiba mais</span> </h3>
            </div>
        </div>
    </section>

    <!-- ========== Medicos ========== -->
    <section class="medicos" id="medicos">
        <div class="conteudo_medicos">
            <div class="medicos_home"><h2>Conheça nossos médicos aqui</h2>
            </div>
            <div class="alinhar-card">
                <div class="medicos_card">
                    <div class="top">
                        <div class="imagem">
                            <img src="../img/desenhomedico.jpeg" alt="" class="imagem_card">
                        </div>
                    </div>
                    <div class="bottom">
                        <h3>Irineu da Silva</h3>
                        <h4>Pediatra</h4>
                        <p>Eu atendo de segunda a quarta-feira</p>
                        <a href="#" class="botao">Sobre mim</a>
                    </div>
                </div>
                <div class="medicos_card">
                    <div class="top">
                        <div class="imagem">
                            <img src="../img/desenhomedico.jpeg" alt="" class="imagem_card">
                        </div>
                    </div>
                    <div class="bottom">
                        <h3>Irineu da Silva</h3>
                        <h4>Dermatologista</h4>
                        <p>Eu atendo de segunda a quarta-feira</p>
                        <a href="#" class="botao">Sobre mim</a>
                    </div>
                </div>
                <div class="medicos_card">
                    <div class="top">
                        <div class="imagem">
                            <img src="../img/desenhomedico.jpeg" alt="" class="imagem_card">
                        </div>
                    </div>
                    <div class="bottom">
                        <h3>Irineu da Silva</h3>
                        <h4>Pediatra</h4>
                        <p>Eu atendo de segunda a quarta-feira</p>
                        <a href="#" class="botao">Sobre mim</a>
                    </div>
                </div>
                <div class="medicos_card">
                    <div class="top">
                        <div class="imagem">
                            <img src="../img/desenhomedico.jpeg" alt="" class="imagem_card">
                        </div>
                    </div>
                    <div class="bottom">
                        <h3>Irineu da Silva</h3>
                        <h4>Psicologo</h4>
                        <p>Eu atendo de segunda a quarta-feira</p>
                        <a href="#" class="botao">Sobre mim</a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- ========== Horarios ========== -->
    <section class="horarios" id="horarios">
        <div class="marcar_horarios">
            <div class="medicos_home"><h2>Marque um horario aqui!</h2></div>
            <div class="formulario">
                <form action="#" method="post" class="form_horarios">
                    <select class="" type="text" name="especializacao" placeholder="Especializacao" autocomplete="off"
                        required="true">
                        <option value="">ESPECIALIZACAO</option>
                        <option value="Pediatra">Pediatra</option>
                        <option value="Dermatologista">Dermatologista</option>
                        <option value="Psicologo">Psicologo</option>
                    </select>
                </form>
            </div>
        </div>
    </section>
</body>

</html>