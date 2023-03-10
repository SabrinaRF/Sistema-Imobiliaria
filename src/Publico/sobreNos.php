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

        /*-- Footer --*/
        footer{margin-top:50px; padding-bottom:20%;}
            
            #footer {background: #5b9179 !important;}
                
            #footer h5{padding-left: 10px; border-left: 3px solid #eeeeee; padding-bottom: 6px; margin-bottom: 20px; color:#ffffff;}

            #footer a {color: #ffffff; text-decoration: none !important; background-color: transparent; -webkit-text-decoration-skip: objects;}
                
            #footer ul.social li{ padding: 3px 0;}
            
            #footer ul.social li a i {margin-right: 5px; font-size:25px;-webkit-transition: .5s all ease;-moz-transition: .5s all ease;transition: .5s all ease;}   
            
            #footer ul.social li:hover a i {font-size:30px; margin-top:-10px;}
                
            #footer ul.social li a,#footer ul.quick-links li a{color:#ffffff;}
    
            #footer ul.social li a:hover{color:#eeeeee;}
            
            #footer ul.quick-links li{padding: 3px 0;-webkit-transition: .5s all ease; -moz-transition: .5s all ease; transition: .5s all ease;}
                
            #footer ul.quick-links li:hover{padding: 3px 0; margin-left:5px; font-weight:700;}    
            
            #footer ul.quick-links li a i{margin-right: 5px;}
                
            #footer ul.quick-links li:hover a i {font-weight: 700;}
        /*-- Fim Footer --*/

        /*-- Sobre N??s --*/
        @media (max-width:767px){#footer h5 {padding-left: 0; border-left: transparent; padding-bottom: 0px; margin-bottom: 10px;}}

        .aboutus-area {padding-top:40px; padding-bottom:10px;}

        /*-- aboutus Content --*/ 
        .aboutus-content h2 {font-size: 40px; font-weight: 800; line-height: 40px; margin-bottom: 2px; color:#588f7a;}

        @media only screen and (max-width: 479px) { .aboutus-content h2 {font-size: 30px; line-height: 30px; }}

        .aboutus-content h2 span {color: #5a917b; }

        .aboutus-content h2 {color:#a4ab78;}

        .aboutus-content h4 {font-size: 18px; font-weight: 500; color: #9b9b9b; margin-bottom: 23px; }

        .aboutus-content p {font-size: 16px; line-height: 27px; width:450%;}

    </style>
</head>
<body>

    <header>
            <!-- BARRA DE NAVEGA????O -->
            <nav class="navbar navbar-expand-lg navbar-light " id="nav1">
                    <a class="navbar-brand" href="../index.php">
                        <img class="logo" src="../imagens/logoNome.png" width="190" height="90">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navega????o">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="../index.php">In??cio</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="sobreNos.php">Sobre n??s</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contato.php">Contato</a>
                            </li>
                        </ul>

                        
                        <!--Fim--> 
                        <a class="nav-link" href="../Login/pagLogin.php" >
                            <button class="btn btn-outline-info btn-sm my-2 my-sm-0" type="button">
                                Entrar
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

            <!--Sobre N??s -->
            <div class="aboutus-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">    
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="aboutus-content ">
                                    <h2><p><span>Corretora de Im??veis</span></p>
                                    <br>
                                    <p>Ol??, meu nome ?? Imobiliaria DEVmob, sou corretora de im??veis com inscri????o no CRECI-RS sob n?? xxxxxx. Queremos oferecer a voc?? uma assessoria pesonalizada com toda a seguran??a jur??dica para seu neg??cio.</p>
                                    <p>Nosso prop??sito consiste em oferecer excelentes oportunidades de compra e venda de im??veis, al??m administra????o de loca????es, com agilidade e efici??ncia, mediante um trabalho ??tico, com lisura e profissionalismo.</p>
                                    <p>Eu e minha equipe gostar??amos de poder contribuir com o seu sonho.</p>
                                    <!--ARRUMAR IMAGEM -->
                                   
                                </div>
                            </div>    
                        </div>
                        </div>
                    </div>
                </div>
            </div>  
            <!--Fim-->	

    </main>

    <!-- Footer -->
    <footer class="py-4 flex-shrink-0 mt-5" style="background-color: #5b9179; color: white;">
        <div class="container text-center">
            <p class="h6">?? Todos direitos reservados aos desenvolvedores.</p>
        </div>
    </footer>
    <!-- Fim -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>