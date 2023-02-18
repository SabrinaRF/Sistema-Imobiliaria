<?php

	session_start();
	if (isset($_SESSION["UsuarioNome"]) == "usuario" ) {
		$usuario = $_SESSION["UsuarioNome"];
	} else {
		header("Location:../index.php");
	}
	include("../Login/conecta.php");

    $situacao = $_POST["situacao"];
    $tipo = $_POST["tipo"];
    $bairro = $_POST["bairro"];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
    <title>Sandro Desessards ADM</title>
    <link rel="icon" href="../imagens/logo.png">

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

             
    </style>

</head>

<body>
        <header>
            <!-- BARRA DE NAVEGAÇÃO -->
            <nav class="navbar navbar-expand-lg navbar-light" id="nav1">
                    <a class="navbar-brand" href="pagADM">
                        <img class="logo" src="../imagens/logoNome.png" width="190" height="90">
                        ADM
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active" id="act">
                                <a class="nav-link" href="pagADM.php">Início</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sobreNosADM.php">Sobre nós</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contatoADM.php">Contato</a>
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


                                    
            <div class="container" id="container-princial">
                <h2 style="text-align:center;"><img src="../imagens/logoNome" style="height:200px;"></h2>
                
                <p><a class="btn btn-outline-info" href="formCadastrarImovel.php" role="button">Adicionar Imóvel</a></p>

                
                <!-- CARDS DOS IMÓVEIS -->
                <?php 
                    echo '<div id="imoveis" class="row view-group">';
                    

                    if (empty($bairro) && empty($tipo)) {
                        $sql="SELECT * FROM `imoveis` WHERE `situacao`=\"$situacao\"";
                        $resultado = mysqli_query($conexao,$sql);
                        $linhasAfetadas = mysqli_affected_rows($conexao);
                        if($linhasAfetadas > 0){
                            $n=1 ;
                            while ($dados = mysqli_fetch_assoc($resultado)) { 
                                //echo $qtd;
                                echo '<div class="item col-xs-4 col-lg-4 mt-4">
                                        <div class="thumbnail card">
                                            <div class="img-event">
                                                <img class="card-img-top img-fluid" src="../ADM/arquivo/arquivo_img/'.$dados["imgnome1"].'"/>
                                            </div>
                                            <div class="caption card-body">
                                                <h4 class="group card-title inner list-group-item-heading">
                                                    Descrição</h4>
                                                <p class="group inner list-group-item-text">
                                                '.$dados["descricao"].'</p>
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-4">
                                                        <p class="lead"> R$'.$dados["valor"].',00</p>
                                                        
                                                    </div>
                                                    <br><br>
                                                    <div class="col-xs-12 col-md-4">
                                                    <a class="btn btn-success" href="formEditarImovel.php?id='.$dados['idimoveis'].'">Editar</a>
                                                    </div>
                                                    <div class="col-xs-12 col-md-4">
                                                        <a class="btn btn-danger" href="excluirImovel.php?id='.$dados['idimoveis'].'">Deletar</a>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>         
                                </div>';
                                $n++;
                            }
                            echo '</div>';
                        }
                    }
                    if (empty($bairro)) {
                        $sql="SELECT * FROM `imoveis` WHERE `situacao`=\"$situacao\" and `tipo`=\"$tipo\"";
                        $resultado = mysqli_query($conexao,$sql);
                        $linhasAfetadas = mysqli_affected_rows($conexao);
                        if($linhasAfetadas > 0){
                            $n=1 ;
                            while ($dados = mysqli_fetch_assoc($resultado)) { 
                                //echo $qtd;
                                echo '<div class="item col-xs-4 col-lg-4 mt-4">
                                        <div class="thumbnail card">
                                            <div class="img-event">
                                                <img class="card-img-top img-fluid" src="../ADM/arquivo/arquivo_img/'.$dados["imgnome1"].'"/>
                                            </div>
                                            <div class="caption card-body">
                                                <h4 class="group card-title inner list-group-item-heading">
                                                    Descrição</h4>
                                                <p class="group inner list-group-item-text">
                                                '.$dados["descricao"].'</p>
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-4">
                                                        <p class="lead"> R$'.$dados["valor"].',00</p>
                                                        
                                                    </div>
                                                    <br><br>
                                                    <div class="col-xs-12 col-md-4">
                                                    <a class="btn btn-success" href="formEditarImovel.php?id='.$dados['idimoveis'].'">Editar</a>
                                                    </div>
                                                    <div class="col-xs-12 col-md-4">
                                                        <a class="btn btn-danger" href="excluirImovel.php?id='.$dados['idimoveis'].'">Deletar</a>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>         
                                </div>';
                                $n++;
                            }
                            echo '</div>';

                        }
                    }
                    if (empty($tipo)) {
                        $sql="SELECT * FROM `imoveis` WHERE `situacao`=\"$situacao\" and `bairro`=\"$bairro\"";
                        $resultado = mysqli_query($conexao,$sql);
                        $linhasAfetadas = mysqli_affected_rows($conexao);
                        if($linhasAfetadas > 0){
                            $n=1 ;
                            while ($dados = mysqli_fetch_assoc($resultado)) { 
                                //echo $qtd;
                                echo '<div class="item col-xs-4 col-lg-4 mt-4">
                                        <div class="thumbnail card">
                                            <div class="img-event">
                                                <img class="card-img-top img-fluid" src="../ADM/arquivo/arquivo_img/'.$dados["imgnome1"].'"/>
                                            </div>
                                            <div class="caption card-body">
                                                <h4 class="group card-title inner list-group-item-heading">
                                                    Descrição</h4>
                                                <p class="group inner list-group-item-text">
                                                '.$dados["descricao"].'</p>
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-4">
                                                        <p class="lead"> R$'.$dados["valor"].',00</p>
                                                        
                                                    </div>
                                                    <br><br>
                                                    <div class="col-xs-12 col-md-4">
                                                    <a class="btn btn-success" href="formEditarImovel.php?id='.$dados['idimoveis'].'">Editar</a>
                                                    </div>
                                                    <div class="col-xs-12 col-md-4">
                                                        <a class="btn btn-danger" href="excluirImovel.php?id='.$dados['idimoveis'].'">Deletar</a>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>         
                                </div>';
                                $n++;
                            }
                            echo '</div>';

                        }
                    } 
                    if (empty($situacao) && empty($tipo)) {
                        $sql="SELECT * FROM `imoveis` WHERE `bairro`=\"$bairro\"";
                        $resultado = mysqli_query($conexao,$sql);
                        $linhasAfetadas = mysqli_affected_rows($conexao);
                        if($linhasAfetadas > 0){
                            $n=1 ;
                            while ($dados = mysqli_fetch_assoc($resultado)) { 
                                //echo $qtd;
                                echo '<div class="item col-xs-4 col-lg-4 mt-4">
                                        <div class="thumbnail card">
                                            <div class="img-event">
                                                <img class="card-img-top img-fluid" src="../ADM/arquivo/arquivo_img/'.$dados["imgnome1"].'"/>
                                            </div>
                                            <div class="caption card-body">
                                                <h4 class="group card-title inner list-group-item-heading">
                                                    Descrição</h4>
                                                <p class="group inner list-group-item-text">
                                                '.$dados["descricao"].'</p>
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-4">
                                                        <p class="lead"> R$'.$dados["valor"].',00</p>
                                                        
                                                    </div>
                                                    <br><br>
                                                    <div class="col-xs-12 col-md-4">
                                                    <a class="btn btn-success" href="formEditarImovel.php?id='.$dados['idimoveis'].'">Editar</a>
                                                    </div>
                                                    <div class="col-xs-12 col-md-4">
                                                        <a class="btn btn-danger" href="excluirImovel.php?id='.$dados['idimoveis'].'">Deletar</a>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>         
                                </div>';
                                $n++;
                            }
                            echo '</div>';

                        }
                    }
                    if (empty($situacao)) {
                        $sql="SELECT * FROM `imoveis` WHERE `bairro`=\"$bairro\" and `tipo`=\"$tipo\"";
                        $resultado = mysqli_query($conexao,$sql);
                        $linhasAfetadas = mysqli_affected_rows($conexao);
                        if($linhasAfetadas > 0){
                            $n=1 ;
                            while ($dados = mysqli_fetch_assoc($resultado)) { 
                                //echo $qtd;
                                echo '<div class="item col-xs-4 col-lg-4 mt-4">
                                        <div class="thumbnail card">
                                            <div class="img-event">
                                                <img class="card-img-top img-fluid" src="../ADM/arquivo/arquivo_img/'.$dados["imgnome1"].'"/>
                                            </div>
                                            <div class="caption card-body">
                                                <h4 class="group card-title inner list-group-item-heading">
                                                    Descrição</h4>
                                                <p class="group inner list-group-item-text">
                                                '.$dados["descricao"].'</p>
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-4">
                                                        <p class="lead"> R$'.$dados["valor"].',00</p>
                                                        
                                                    </div>
                                                    <br><br>
                                                    <div class="col-xs-12 col-md-4">
                                                    <a class="btn btn-success" href="formEditarImovel.php?id='.$dados['idimoveis'].'">Editar</a>
                                                    </div>
                                                    <div class="col-xs-12 col-md-4">
                                                        <a class="btn btn-danger" href="excluirImovel.php?id='.$dados['idimoveis'].'">Deletar</a>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>         
                                </div>';
                                $n++;
                            }
                            echo '</div>';

                        }
                    } 
                    if (empty($bairro) && empty($situacao)) {
                        $sql="SELECT * FROM `imoveis` WHERE `tipo`=\"$tipo\"";
                        $resultado = mysqli_query($conexao,$sql);
                        $linhasAfetadas = mysqli_affected_rows($conexao);
                        if($linhasAfetadas > 0){
                            $n=1 ;
                            while ($dados = mysqli_fetch_assoc($resultado)) { 
                                //echo $qtd;
                                echo '<div class="item col-xs-4 col-lg-4 mt-4">
                                        <div class="thumbnail card">
                                            <div class="img-event">
                                                <img class="card-img-top img-fluid" src="../ADM/arquivo/arquivo_img/'.$dados["imgnome1"].'"/>
                                            </div>
                                            <div class="caption card-body">
                                                <h4 class="group card-title inner list-group-item-heading">
                                                    Descrição</h4>
                                                <p class="group inner list-group-item-text">
                                                '.$dados["descricao"].'</p>
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-4">
                                                        <p class="lead"> R$'.$dados["valor"].',00</p>
                                                        
                                                    </div>
                                                    <br><br>
                                                    <div class="col-xs-12 col-md-4">
                                                    <a class="btn btn-success" href="formEditarImovel.php?id='.$dados['idimoveis'].'">Editar</a>
                                                    </div>
                                                    <div class="col-xs-12 col-md-4">
                                                        <a class="btn btn-danger" href="excluirImovel.php?id='.$dados['idimoveis'].'">Deletar</a>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>         
                                </div>';
                                $n++;
                            }
                            echo '</div>';

                        }
                    }else {
                        $sql="SELECT * FROM `imoveis` WHERE `tipo`=\"$tipo\" and `bairro`=\"$bairro\" and `situacao`=\"$situacao\"";
                        $resultado = mysqli_query($conexao,$sql);
                        $linhasAfetadas = mysqli_affected_rows($conexao);
                        if($linhasAfetadas > 0){
                            $n=1 ;
                            while ($dados = mysqli_fetch_assoc($resultado)) { 
                                //echo $qtd;
                                echo '<div class="item col-xs-4 col-lg-4 mt-4">
                                        <div class="thumbnail card">
                                            <div class="img-event">
                                                <img class="card-img-top img-fluid" src="../ADM/arquivo/arquivo_img/'.$dados["imgnome1"].'"/>
                                            </div>
                                            <div class="caption card-body">
                                                <h4 class="group card-title inner list-group-item-heading">
                                                    Descrição</h4>
                                                <p class="group inner list-group-item-text">
                                                '.$dados["descricao"].'</p>
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-4">
                                                        <p class="lead"> R$'.$dados["valor"].',00</p>
                                                        
                                                    </div>
                                                    <br><br>
                                                    <div class="col-xs-12 col-md-4">
                                                    <a class="btn btn-success" href="formEditarImovel.php?id='.$dados['idimoveis'].'">Editar</a>
                                                    </div>
                                                    <div class="col-xs-12 col-md-4">
                                                        <a class="btn btn-danger" href="excluirImovel.php?id='.$dados['idimoveis'].'">Deletar</a>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>         
                                </div>';
                                $n++;
                            }
                            echo '</div>';

                        }
                    }
                        
                    ?>

                
                <!-- FIM-->	 

            </div></div>
            

            <!-- Footer -->
                <footer class="py-4 flex-shrink-0">
                    <section id="footer">
                        <div class="container">
                            <div class="row text-center text-xs-center text-sm-left text-md-left">
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <h5>Endereço</h5>
                                    <ul class="list-unstyled quick-links">
                                        <li><a href="contatoADM.php"><i class="fa fa-angle-double-right"></i>Cidade: Uruguaiana - RS</a></li>
                                        <li><a href="contatoADM.php"><i class="fa fa-angle-double-right"></i>Rua: Gen. Bento Martins</a></li>
                                        <li><a href="contatoADM.php"><i class="fa fa-angle-double-right"></i>Número: 2778</a></li>
                                        <li><a href="contatoADM.php"><i class="fa fa-angle-double-right"></i>Bairro: Centro</a></li>
                                        <li><a href="contatoADM.php"><i class="fa fa-angle-double-right"></i>Sala: 07</a></li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <h5>Formas de contato</h5>
                                    <ul class="list-unstyled quick-links">
                                        <li><a></i>Celular: (55) 99946-5893</a></li>
                                        <li><a></i>Fixo: (55) 3411-5698</a></li>
                                        <li><a></i>Email: desessards@hotmail.com</a></li>
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
                                        <li class="list-inline-item"><a href="https://www.facebook.com/sandrodesessards"><img src="../imagens/facebook.png"></a></li>
                                        <li class="list-inline-item"><a href="https://instagram.com/sandrodiasdesessards?utm_medium=copy_link"><img src="../imagens/instagram.png"></a></li>
                                    </ul>
                                </div>
                                <hr>
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
