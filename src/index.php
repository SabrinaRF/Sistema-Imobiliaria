<?php
    session_start();

    include("Login/conecta.php");
    $sql = "SELECT `idimoveis`,`imgnome1`,`imgnome2`,`imgnome3`,`imgnome4`,`imgnome5`,`imgnome6`, `situacao`, `tipo`,`valor`, `descricao`, `bairro` FROM `imoveis` WHERE 1";

    $resultado = mysqli_query($conexao,$sql);

    $linhasAfetadas = mysqli_affected_rows($conexao);
    $qtd = mysqli_num_rows($resultado);

    if($linhasAfetadas > 0){
       
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
    <link rel="icon" href="imagens/logo.png">

    <style>
        #nav1 .navbar-brand{color:#A5AB7B;}

        #imoveis{margin-top: 20px; margin-bottom:20px;}

        main{background-color:white}

        #formulario{margin-bottom:20px; margin-top:50px;}

        #container-princial{margin-top: 20px;}

        select{font-size:20px; margin-right:30px; padding-right:50px;}

        form{margin-top:50px; margin-bottom:50px;}

        section {padding: 60px 0;}   

        section .section-title {text-align: center; color: #007b5e; margin-bottom: 50px; text-transform: uppercase;}

        /*-- Footer --*/
            footer{margin-top:50px;}
            
            #footer {background: #5b9179 !important; margin-bottom:-25px;}
                
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

     
    </style>

</head>

<body>
        <header>
            <!-- BARRA DE NAVEGAÇÃO -->
            <nav class="navbar navbar-expand-lg navbar-light " id="nav1">
                    <a class="navbar-brand" href="#">
                        <img class="logo" src="imagens/logoNome.png" width="190" height="90">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Início</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Publico/sobreNos.php">Sobre nós</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Publico/contato.php">Contato</a>
                            </li>
                        </ul>

                        
                        <!--Fim--> 
                        <a class="nav-link" href="Login/pagLogin.php" >
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
                        <img src="imagens/bannerEditado.png" class="d-block w-100">
                    </div>
                </div>
            </div>
            <!-- FIM-->	
                                    
            <div class="container" id="container-princial">
                <h2 style="text-align:center;"><img src="imagens/logoNome"  width="400" height="200"></h2>
                <!-- FORMULÁRIO DE ESPECIFICAÇÕES -->

                <form class="needs-validation" method="post" action="Publico/buscarImovel.php" novalidate>
                    <div class="form-row">
                        <div class="col">
                            <label for="Situacao">Situação</label>
                            <select id="Situacao" class="form-control" name="situacao">
                                <option selected> </option>
                                <option>Alugar</option>
                                <option>Comprar</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="Tipo">Tipo</label>
                            <input id="Tipo" class="form-control" type="text" name="tipo">
                            <!--<select id="Tipo" class="form-control">
                                <option selected> </option>
                                <option>Casa</option>
                                <option>Apartamento</option>
                                <option>Kitnet</option>
                                <option>Área comercial</option>
                            </select>-->
                        </div>
                        <div class="col">
                            <label for="Bairro">Bairro</label>
                            <select id="Bairro" class="form-control" name="bairro">
                                    <option selected> </option>
                                    <optgroup label="A">
                                    <option>Áreas Verdes</option>
                                    <option>Ascouros</option>
                                    </optgroup>

                                    <optgroup label="B">
                                    <option>Bela Vista</option>
                                    </optgroup>

                                    <optgroup label="C">
                                    <option>Cabo Luís Quevedo</option>
                                    <option>Campinas</option>
                                    <option>Centro</option>
                                    <option>Chácara Sol</option>
                                    <option>Cidade Alegria</option>
                                    <option>Cidade Alta</option>
                                    <option>Cidade Nova</option>
                                    <option>Cohab 1</option>
                                    <option>Cohab 2</option>
                                    <option>Colbec Sul</option>
                                    </optgroup>
                                    
                                    <optgroup label="D">
                                    <option>Distrito Rodoviário</option>
                                    <option>Domingos Tellechea</option>
                                    </optgroup>

                                    <optgroup label="E">
                                    <option>Emílio Brandi</option>
                                    </optgroup>

                                    <optgroup label="F">
                                    <option>Francisco Tarrago</option>
                                    </optgroup>

                                    <optgroup label="I">
                                    <option>Ipiranga</option>
                                    <option>Isacouro</option>
                                    </optgroup>

                                    <optgroup label="J">
                                    <option>Jardim Salso</option>
                                    <option>Jóquei Clube</option>
                                    </optgroup>

                                    <optgroup label="L">
                                    <option>Loteamento Tellechea</option>
                                    </optgroup>

                                    <optgroup label="M">
                                    <option>Mascarenhas de Moraes</option>
                                    </optgroup>

                                    <optgroup label="N">
                                    <option>Nova Esperança</option>
                                    </optgroup>

                                    <optgroup label="P">
                                    <option>Parque Itá</option>
                                    <option>Pedro Mendizabal</option>
                                    <option>Perimetral Leste</option>
                                    <option>Pro-morar 1</option>
                                    <option>Pro-morar 2</option>
                                    <option>Proficar</option>
                                    <option>Profilurb</option>
                                    <option>Prolar</option>
                                    </optgroup>

                                    <optgroup label="R">
                                    <option>Rio Branco</option>
                                    <option>Rui Ramos</option>
                                    </optgroup>

                                    <optgroup label="S">
                                    <option>Santana</option>
                                    <option>Santo Antônio</option>
                                    <option>Santo Inácio</option>
                                    <option>São João</option>
                                    <option>São José</option>
                                    <option>São Miguel</option>
                                    <option>Subúrbios</option>
                                    </optgroup>

                                    <optgroup label="T">
                                    <option>Tabajara Brites</option>
                                    </optgroup>

                                    <optgroup label="U">
                                    <option>União das Vilas</option>
                                    </optgroup>

                                    <optgroup label="V">
                                    <option>Vila Barragem Sanchuri</option>
                                    <option>Vila Gessy</option>
                                    <option>Vila Hípica 1</option>
                                    <option>Vila Hípica 2</option>
                                    <option>Vila Júlia</option>
                                    <option>Vila Juliaipiranga</option>
                                    <option>Vila Tarrago</option>
                                    </optgroup>

                                    <optgroup label="Z">
                                    <option>Zona Rural</option>
                                    </optgroup>
                            </select>
                        </div>
                        
                        <button class="btn btn-outline-info " type="submit">Buscar</button>
                        
                    </div>            
                </form>
                        

                <!-- FIM-->	

                <!-- CARDS DOS IMÓVEIS -->
                <?php 

                    if($qtd == 0){
                        echo '<p class="lead"> Ainda não existem imóveis cadastrados no sistema. </p>';
                    } else {
        
                        echo '<div id="imoveis" class="row view-group">';
                        $n= 1 ;
                        while ($dados = mysqli_fetch_assoc($resultado)) { 
                        
                            echo '<div class="item col-xs-4 col-lg-4 mt-4">
                                    <div class="thumbnail card">
                                        <div class="img-event">
                                            <img class="card-img-top img-fluid" src="ADM/arquivo/arquivo_img/'.$dados["imgnome1"].'" width="250" height="400"/>
                                        </div>
                                        <div class="caption card-body">
                                            <h4 class="group card-title inner list-group-item-heading">
                                                Descrição</h4>
                                            <p class="group inner list-group-item-text">
                                            '.$dados["descricao"].'</p>
                                            <div class="row">
                                                <div class="col-xs-12 col-md-6">
                                                    <p class="lead"> R$'.$dados["valor"].',00</p>
                                                    
                                                </div>
                                                <div class="col-xs-12 col-md-6">
                                                    <a class="btn btn-success" href="Publico/visualizarImovel.php?id='.$dados['idimoveis'].'">Visualizar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>         
                            </div>';
                            $n++;
                        }
                        echo '</div>';
                    }
                ?>
                
                <!-- FIM-->	   
             
            </div>  

            <!-- Footer -->
                <footer class="py-4 flex-shrink-0">
                    <section id="footer">
                        <div class="container">
                            <div class="row text-center text-xs-center text-sm-left text-md-left">
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <h5>Endereço</h5>
                                    <ul class="list-unstyled quick-links">
                                        <li><a><i class="fa fa-angle-double-right"></i>Cidade: Uruguaiana - RS</a></li>
                                        <li><a><i class="fa fa-angle-double-right"></i>Rua: xxxxxxxx</a></li>
                                        <li><a><i class="fa fa-angle-double-right"></i>Número: xxxx</a></li>
                                        <li><a><i class="fa fa-angle-double-right"></i>Bairro: Centro</a></li>
                                        <li><a><i class="fa fa-angle-double-right"></i>Sala: xx</a></li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <h5>Formas de contato</h5>
                                    <ul class="list-unstyled quick-links">
                                        <li><a></i>Celular: (xx) xxxxx-xxxx</a></li>
                                        <li><a></i>Fixo: (xx) xxxx-xxxx</a></li>
                                        <li><a></i>Email: xxxxxxxxx@gmail.com</a></li>
                                    </ul>
                                </div>
                                <!-- Créditos -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <h5>Creditos</h5>
                                    <ul class="list-unstyled quick-links">
                                        
                                        
                                        <li><a><p>Ícones feitos por <a href="https://www.flaticon.com/br/autores/pixel-perfect" title="Pixel perfect">Pixel perfect</a> <a>do</a> <a href="https://www.flaticon.com/br/" title="Flaticon">www.flaticon.com</a></p></a></li>                                        
                                       
                                    </ul>
                                </div>
                                <!-- Fim-->
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                                    <ul class="list-unstyled list-inline social text-center">
                                        <li class="list-inline-item"><a href="#"><img src="imagens/facebook.png"></a></li>
                                        <li class="list-inline-item"><a href="#"><img src="imagens/instagram.png"></a></li>
                                    </ul>
                                </div>
                            </div>	
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                                    <p class="h6">© Todos direitos reservados aos desenvolvedores.</p>
                                </div>
                            </div>	
                        </div>
                    </section>
                </footer>
                <!-- Fim -->


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
