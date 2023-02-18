<?php
    session_start();
    if (isset($_SESSION["UsuarioNome"]) == "usuario" ) {
		$usuario = $_SESSION["UsuarioNome"];
	} else {
		header("Location:../index.php");
	}
	include("../Login/conecta.php");

    $sql="SELECT * FROM `usuarios` WHERE 1";
    $resultado = mysqli_query($conexao,$sql);

    $linhasAfetadas = mysqli_affected_rows($conexao);

    if($linhasAfetadas > 0){
       $dados=mysqli_fetch_assoc($resultado);   
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
    <title>Sandro Desessards</title>
    <link rel="icon" href="../imagens/logo.png">

    <style>
        #nav1 .navbar-brand{color:#A5AB7B;}

        body {
        background: white;
        }

        .container {
        width: 1500px;
        height: 650px;
        margin: 5% auto;
        position: relative;
        }
        .container .map {
        width: 45%;
        float: left;
        }
        .container .contact-form {
        width: 53%;
        margin-left: 2%;
        float: left;
        }
        .container .contact-form .title {
        font-size: 2.5em;
        font-family: "Roboto", sans-serif;
        font-weight: 700;
        color: #242424;
        margin: 5% 8%;
        }
        .container .contact-form .subtitle {
        font-size: 1.2em;
        font-weight: 400;
        margin: 0 4% 5% 8%;
        }
        .container .contact-form input,
        .container .contact-form textarea {
        width: 330px;
        padding: 3%;
        margin: 2% 8%;
        color: #242424;
        border: 1px solid #B7B7B7;
        }
        .container .contact-form input::placeholder,
        .container .contact-form textarea::placeholder {
        color: #242424;
        }
        .container .contact-form .btn-send {
        background: #A383C9;
        width: 180px;
        height: 60px;
        color: #FFFFFF;
        font-weight: 700;
        margin: 2% 8%;
        border: none;
        }
    </style>

</head>
<body>

        <header>
            <!-- BARRA DE NAVEGAÇÃO -->
            <nav class="navbar navbar-expand-lg navbar-light " id="nav1">
                    <a class="navbar-brand" href="pagADM.php">
                        <img class="logo" src="../imagens/logoNome.png" width="190" height="90">
                        ADM
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="pagADM.php">Início</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sobreNosADM.php">Sobre nós</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="contatoADM.php">Contato</a>
                            </li>
                        </ul>
                         

                        <!--PERFIL-->
                        <li class="navbar-nav nav-item dropdown ">
                        <div class="btn-group ">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item" id="act">
                                    <a class="nav-link" href="#"></a>
                                </li>
                            </ul>
                        </div>
                        </li>
                        <!--Fim--> 
                        <a class="nav-link" href="../Login/sair.php" >
                            <button class="btn btn-outline-danger btn-sm my-2 my-sm-0" type="button">
                                Sair
                            </button>
                        </a>      
                    </div>
            </nav>
            <!-- FIM-->	
            
        </header>

        <main>
            <!-- CARROSSEL -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../imagens/bannerEditado.png" class="d-block w-100">
                    </div>
                </div>
            </div>
            <!-- FIM-->	
            <section id="quick-support" class="site-quick-support section-white">
                <div class="container">
                    <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d865.9393132258!2d-57.0858357!3d-29.7557378!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94535b44befe3637%3A0x317a36102ab822f5!2sR.%20Gen.%20Bento%20Martins%2C%202778%20-%20Cal%C3%A7ad%C3%A3o%2C%20Uruguaiana%20-%20RS%2C%2097501-520!5e0!3m2!1spt-BR!2sbr!4v1634683816031!5m2!1spt-BR!2sbr" width="100%" height="625" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="contact-form">
                        <h1 class="title">Contato</h1>
                        <hr>
                        <h3 style="padding-left:47px">Endereço</h3>
                                <p style="padding-left:47px">Cidade: Uruguaiana - RS</p>
                                <p style="padding-left:47px">Rua: Gen. Bento Martins</p>
                                <p style="padding-left:47px">Número: 2778</p>
                                <p style="padding-left:47px">Bairro: Centro</p>
                                <p style="padding-left:47px">Sala: 07</p>
                        <h3 style="padding-left:47px">Telefone</h3> 
                            <p style="padding-left:47px">Celular: (55) 99946-5893</p>
                            <p style="padding-left:47px">Fixo: (55) 3411-5698</p>
                        <h3 style="padding-left:47px">Email:</h3>
                            <p style="padding-left:47px">Email: desessards@hotmail.com</p>
                        <hr>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                                    <ul class="list-unstyled list-inline social text-left" style="padding-left:47px;">
                                        <li class="list-inline-item"><a href="https://www.facebook.com/sandrodesessards"><img src="../imagens/facebook64.png"></a></li>
                                        <li class="list-inline-item"><a href="https://instagram.com/sandrodiasdesessards?utm_medium=copy_link"><img src="../imagens/instagram64.png"></a></li>
                                    </ul>
                                </div>
                                <hr>
                            </div>	
                    </div>
                </div>                
            </section>
        </main>

        <!-- Footer -->
        <footer class="py-4 flex-shrink-0 mt-5" style="background-color: #5b9179; color: white; text-align:center;">
            <div>
                <p class="h6">© Todos direitos reservados aos desenvolvedores.</p>
            </div>
        </footer>
        <!-- Fim -->

        
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
        