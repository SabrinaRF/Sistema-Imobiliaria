<?php
    session_start();

    include("../Login/conecta.php");
    $id = $_GET['id'];
    $sql = "SELECT caracteres.quarto, caracteres.banheiro, caracteres.salaJ,caracteres.salaE,caracteres.garagem, imoveis.imgnome1, imoveis.imgnome2, imoveis.imgnome3, imoveis.imgnome4, imoveis.imgnome5, imoveis.imgnome6, imoveis.situacao, imoveis.valor, imoveis.tipo, imoveis.descricao, imoveis.bairro FROM `imoveis`, `caracteres` WHERE imoveis.idimoveis = caracteres.idimoveis AND imoveis.idimoveis = \"$id\"";

    $resultado = mysqli_query($conexao,$sql);

    $linhasAfetadas = mysqli_affected_rows($conexao);
    $qtd = mysqli_num_rows($resultado);
    $dados = mysqli_fetch_assoc($resultado); 

    if($linhasAfetadas > 0){
       
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sandro Desessards</title>
    <link rel="icon" href="../imagens/logo.png">

    <style>
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
        
        /*-- Principal --*/
            .header-navigation {display: flex;flex-direction: row; justify-content: flex-start; align-items: center; font-size: .80rem;}

            .header-navigation a {font-size: .80rem;}

            .header-navigation .breadcrumb {margin-bottom: 0; background-color: transparent; padding: 0.20rem 1rem;}

            .header-navigation .btn-group {margin-left: auto;}

            .header-navigation .btn-share {position: relative;}

            .header-navigation .btn-share::after {content: ""; width: 1px; height: 50%; background-color: #ccc; position: absolute; top: 50%; left: 100%; transform: translateY(-50%);}

            .store-body {display: flex; flex-direction: row; padding: 0;}

            .store-body .product-info {width: 60%; border-right: 1px solid rgba(0,0,0,.125);}
     
            .store-body .product-payment-details {width: 40%; padding: 15px 15px 0 15px;}

            .product-info .product-gallery {display: flex; flex-direction: row; border-bottom: 1px solid rgba(0,0,0,.125);}

            .product-gallery-featured {display: flex; width: 100%; flex-direction: row; justify-content: center; align-items: flex-start; padding: 15px 0; cursor: zoom-in;}

            .product-gallery-thumbnails .thumbnails-list li {margin-bottom: 5px; cursor: pointer; position: relative; width: 70px; height: 70px;}

            .thumbnails-list li img {display: block; width: 100%;}

            .product-gallery-thumbnails .thumbnails-list li:hover::before {content: ""; width: 3px; height: 100%; background: #007bff; position: absolute; top: 0; left: 0;}
            
            .product-info .product-seller-recommended {padding: 20px 20px 0 20px;}

            .product-comments textarea {height: 50px;}

            .last-questions-list li {margin-bottom: 20px;}
 
            .last-questions-list li span {padding-left: 10px;}
        /*-- Fim principal --*/
            
    </style>

</head>

<body>
        <header>
            <!-- BARRA DE NAVEGAÇÃO -->
            <nav class="navbar navbar-expand-lg navbar-light " id="nav1">
                    <a class="navbar-brand" href="../index.php">
                        <img class="logo" src="../imagens/logoNome.png" width="190" height="90">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="../index.php">Início</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sobreNos.php">Sobre nós</a>
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
            <div class="container" style="padding-top:35px">
                <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-10">
                    <div class="card-body store-body">
                        <div class="product-info">
                        <div class="product-gallery">
                            <div id="carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel" data-slide-to="1"></li>
                                <li data-target="#carousel" data-slide-to="2"></li>
                                <li data-target="#carousel" data-slide-to="3"></li>
                                <li data-target="#carousel" data-slide-to="4"></li>
                                <li data-target="#carousel" data-slide-to="5"></li>
                            </ol>
                                <div class="carousel-inner">
                                 
                                     <?php
                                        if ($dados['imgnome1'] == "null") {
                                        } else {
                                            echo'<div class="carousel-item active">
                                                    <img src="../ADM/arquivo/arquivo_img/'. $dados["imgnome1"].'"  style="width:400px; height:500px;" class="d-block w-100 ">
                                                 </div>';
                                        }
                                        if ($dados['imgnome2'] == "null") {
                                        } else {
                                            echo'<div class="carousel-item ">
                                                    <img src="../ADM/arquivo/arquivo_img/'.$dados["imgnome2"].'"  style="width:400px; height:500px;" class="d-block w-100 ">
                                                 </div>';
                                        }
                                        if ($dados['imgnome3'] == "null") {
                                        } else {
                                            echo'<div class="carousel-item ">
                                                    <img src="../ADM/arquivo/arquivo_img/'.$dados["imgnome3"].'"  style="width:400px; height:500px;" class="d-block w-100 ">
                                                 </div>';
                                        }
                                        if ($dados['imgnome4'] == "null") {
                                        } else {
                                            echo'<div class="carousel-item ">
                                                    <img src="../ADM/arquivo/arquivo_img/'. $dados["imgnome4"].'"  style="width:400px; height:500px;" class="d-block w-100 ">
                                                 </div>';
                                        }
                                        if ($dados['imgnome5'] == "null") {
                                        } else {
                                            echo'<div class="carousel-item ">
                                                    <img src="../ADM/arquivo/arquivo_img/'.$dados["imgnome5"].'"  style="width:400px; height:500px;" class="d-block w-100 ">
                                                 </div>';
                                        }
                                        if ($dados['imgnome6'] == "null") {
                                        } else {
                                            echo'<div class="carousel-item ">
                                                    <img src="../ADM/arquivo/arquivo_img/'.$dados["imgnome6"].'"  style="width:400px; height:500px;" class="d-block w-100 ">
                                                 </div>';
                                        }
                                        
                                    ?>
                                        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Anterior</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Próximo</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <div class="product-seller-recommended">
                            
                            <!-- Características -->
                            <div class="product-description mb-5">
                            <h2 class="mb-5">Características</h2>
                            <dl class="row mb-5">
                                <dt class="col-sm-3">Situação</dt>
                                    <dd class="col-sm-9"><?php echo $dados["situacao"];?></dd>
                                <dt class="col-sm-3">Bairro</dt>
                                    <dd class="col-sm-9"><?php echo $dados["bairro"];?></dd>
                                <dt class="col-sm-3">Tipo</dt>
                                    <dd class="col-sm-9"><?php echo $dados["tipo"];?></dd>
                                <dt class="col-sm-3">Dormitórios</dt>
                                    <dd class="col-sm-9"><?php echo $dados["quarto"];?></dd>
                                <dt class="col-sm-3">Banheiros</dt>
                                    <dd class="col-sm-9"><?php echo $dados["banheiro"];?></dd>
                                <dt class="col-sm-3">Salas de Jantar</dt>
                                    <dd class="col-sm-9"><?php echo $dados["salaJ"];?></dd>
                                <dt class="col-sm-3">Salas de Estar</dt>
                                    <dd class="col-sm-9"><?php echo $dados["salaE"];?></dd>
                                <dt class="col-sm-3">Vagas de garagem</dt>
                                    <dd class="col-sm-9"><?php echo $dados["garagem"];?></dd>

                            </dl>
                            <!-- Fim -->

                            <!-- Descrição 
                            <h2 class="mb-5">Descrição</h2>
                            <p><?php //echo $dados["descricao"];?></p>-->
                            </div>
                            
                        </div>
                        </div>
                        <div class="product-payment-details">
                            <h2 class="product-price display-4"><?php echo $dados["situacao"];?><hr>Valor: R$ <?php echo $dados["valor"];?>.00</h2>
                            <hr><br><h4 class="product-title mb-2">Descrição do imóvel: <?php echo $dados["descricao"];?></h4>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="py-4 flex-shrink-0 mt-5" style="background-color: #5b9179; color: white;">
        <div class="container text-center">
            <p class="h6">© Todos direitos reservados aos desenvolvedores.</p>
        </div>
    </footer>
                <!-- Fim -->


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
