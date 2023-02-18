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
    if (empty($id)) {
        $id = $_GET['id'];
    } else {
       $id = $_GET['id '];
    }
    
    
    $sql1 = "SELECT caracteres.quarto, caracteres.cozinha, caracteres.banheiro, caracteres.salaJ,caracteres.salaE, caracteres.garagem, imoveis.idimoveis, imoveis.imgnome1,imoveis.imgnome2,imoveis.imgnome3,imoveis.imgnome4,imoveis.imgnome5,imoveis.imgnome6, imoveis.situacao, imoveis.valor, imoveis.tipo, imoveis.descricao, imoveis.bairro FROM `imoveis`, `caracteres` WHERE imoveis.idimoveis = caracteres.idimoveis AND imoveis.idimoveis = \"$id\"";

    $resultado1 = mysqli_query($conexao,$sql1);

    $linhasAfetadas1 = mysqli_affected_rows($conexao);
    $qtd1 = mysqli_num_rows($resultado1);
    $dados1 = mysqli_fetch_assoc($resultado1); 
    

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

        /*-- Sobre Nós --*/
            @media (max-width:767px){#footer h5 {padding-left: 0; border-left: transparent; padding-bottom: 0px; margin-bottom: 10px;}}

            .aboutus-area {padding-top:40px; padding-bottom:10px;}

            /*-- aboutus Content --*/ 
            .aboutus-content h2 {font-size: 40px; font-weight: 800; line-height: 40px; margin-bottom: 2px; color:#588f7a:}

            @media only screen and (max-width: 479px) { .aboutus-content h2 {font-size: 30px; line-height: 30px; }}
        
            .aboutus-content h2 span {color: #5a917b; }

            .aboutus-content h2 {color:#a4ab78;}

            .aboutus-content h4 {font-size: 18px; font-weight: 500; color: #9b9b9b; margin-bottom: 23px; }

            .aboutus-content p {font-size: 16px; line-height: 27px; width:200%;}
            
        /*-- Fim Sobre Nós --*/

        #container-corpo{margin-top: 100px; box-sizing: 100px; display: flex; flex-direction: row; justify-content: center; align-items: center;}

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
                            <li class="nav-item active">
                                <a class="nav-link" href="pagADM.php">Início</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sobreNosADM.php">Sobre nós</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contatoADM.php">Contato</a>
                            </li>
                        </ul>

                        
                        
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
        <div class="container" id="container-corpo" > <!-- -fluid-->
            <div class="col-md-10 order-md-1 bg-light border border-secondary" style="border-radius:10px;"><!---->
            <h4 class="mb-3 mt-4 text-center">Formulário de edição</h4>
            <!-- CÓDIGO EM PHP DO ALERTA --> 
			<?php
                      if ((isset($_SESSION['erro']))) {
                        echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
                              '.$_SESSION['erro'].'
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>';
                          unset($_SESSION['erro']);
                      }

                      if ((isset($_SESSION['alterado']))) {
                        echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
                              '.$_SESSION['alterado'].'
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </div>';
                          unset($_SESSION['alterado']);
                      }
            ?>
            <!--------------------------------------------------------------------------------------------------------->
    
                		

            <form class="needs-validation" method="post" action="editarImovel.php?id=<?php echo $id;?>" novalidate>
                <div class="row">
                    <?php
                        if ($dados1['imgnome1'] == "null") {
                        } else {
                            $arr = [$dados1["idimoveis"] ,$dados1["imgnome1"] ,"imgnome1"];
                            $array = implode(" ", $arr);
                            echo'<div class="col-12 mt-4 col-md-4">
                                        <button type="button" class="btn btn-light btn-sm bg-transparent" data-toggle="modal" data-target="#modalupload1" >
                                            <a class="" href="formEditar_up.php?array='.$array.'">
                                                <img src="arquivo/arquivo_img/'.$dados1["imgnome1"].'" alt="Editar" class="border"  width="150" height="150">
                                            </a>
                                        </button>
                                        
                                </div>';
                        }
                        if ($dados1['imgnome2'] == "null") {
                        } else {
                            $arr = [$dados1["idimoveis"] ,$dados1["imgnome2"] ,"imgnome2"];
                            $array = implode(" ", $arr);
                            echo'<div class="col-12 mt-4 col-md-4">
                                        <button type="button" class="btn btn-light btn-sm bg-transparent" data-toggle="modal" data-target="#modalupload1" >
                                            <a class="" href="formEditar_up.php?array='.$array.'">
                                                <img src="arquivo/arquivo_img/'.$dados1["imgnome2"].'" alt="Editar" class="border"  width="150" height="150">
                                            </a>
                                        </button>
                                        
                                </div>';
                        }
                        if ($dados1['imgnome3'] == "null") {
                        } else {
                            $arr = [$dados1["idimoveis"] ,$dados1["imgnome3"] ,"imgnome3"];
                            $array = implode(" ", $arr);
                            echo'<div class="col-12 mt-4 col-md-4">
                                        <button type="button" class="btn btn-light btn-sm bg-transparent" data-toggle="modal" data-target="#modalupload1" >
                                            <a class="" href="formEditar_up.php?array='.$array.'">
                                                <img src="arquivo/arquivo_img/'.$dados1["imgnome3"].'" alt="Editar" class="border"  width="150" height="150">
                                            </a>
                                        </button>
                                        
                                </div>';
                        }
                    ?>
                </div>
                <div class="row">
                    <?php
                        if ($dados1['imgnome4'] == "null") {
                        } else {
                            $arr = [$dados1["idimoveis"] ,$dados1["imgnome4"] ,"imgnome4"];
                            $array = implode(" ", $arr);
                            echo'<div class="col-12 mt-4 col-md-4">
                                        <button type="button" class="btn btn-light btn-sm bg-transparent" data-toggle="modal" data-target="#modalupload1" >
                                            <a class="" href="formEditar_up.php?array='.$array.'">
                                                <img src="arquivo/arquivo_img/'.$dados1["imgnome4"].'" alt="Editar" class="border"  width="150" height="150">
                                            </a>
                                        </button>
                                        
                                </div>';
                        }
                        if ($dados1['imgnome5'] == "null") {
                        } else {
                            $arr = [$dados1["idimoveis"] ,$dados1["imgnome5"] ,"imgnome5"];
                            $array = implode(" ", $arr);
                            echo'<div class="col-12 mt-4 col-md-4">
                                        <button type="button" class="btn btn-light btn-sm bg-transparent" data-toggle="modal" data-target="#modalupload1" >
                                            <a class="" href="formEditar_up.php?array='.$array.'">
                                                <img src="arquivo/arquivo_img/'.$dados1["imgnome5"].'" alt="Editar" class="border"  width="150" height="150">
                                            </a>
                                        </button>
                                        
                                </div>';
                        }
                        if ($dados1['imgnome6'] == "null") {
                        } else {
                            $arr = [$dados1["idimoveis"] ,$dados1["imgnome6"] ,"imgnome6"];
                            $array = implode(" ", $arr);
                            echo'<div class="col-12 mt-4 col-md-4">
                                        <button type="button" class="btn btn-light btn-sm bg-transparent" data-toggle="modal" data-target="#modalupload1" >
                                            <a class="" href="formEditar_up.php?array='.$array.'">
                                                <img src="arquivo/arquivo_img/'.$dados1["imgnome6"].'" alt="Editar" class="border"  width="150" height="150">
                                            </a>
                                        </button>
                                        
                                </div>';
                        }
                    ?>
                </div>
                <br>
                <div class="mb-3">
                    <label for="situacao">Situação:</label>
                    <!--<input type="text" class="form-control" id="situacao" placeholder="" name="situacao"required value="<?php// echo $dados1['situacao']; ?>">-->
                    <select id="situacao" class="form-control" required name="situacao">
                                <option selected><?php echo $dados1['situacao']; ?> </option>
                                <option>Alugar</option>
                                <option>Comprar</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tipo">Tipo:</label>
                    <input type="text" class="form-control" id="tipo" placeholder="" name="tipo" required value="<?php echo $dados1['tipo']; ?>">
                </div>
                <div class="mb-3">
                    <label for="valor">Valor:</label>
                    <input type="number" class="form-control" id="valor" placeholder="" name="valor" required value="<?php echo $dados1['valor']; ?>">
                </div>
                <div class="mb-3">
                    <label for="descricao">Descrição:</label>
                    <input type="text" class="form-control" id="descricao" placeholder="" name="descricao" required value="<?php echo $dados1['descricao']; ?>">
                </div>
                <div class="mb-3">
                    <label for="bairro">Bairro:</label>
                    <!-- <input type="text" class="form-control" id="bairro" placeholder="" name="bairro"required value="<?php //cho $dados1['bairro']; ?>"> -->
                    <select id="bairro" class="form-control" required name="bairro">
                                <option selected><?php echo $dados1['bairro']; ?> </option>
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
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <label for="quarto">Dorimitório(s):</label>
                        <input type="number" class="form-control" id="quarto" placeholder="" name="quarto"required value="<?php echo $dados1['quarto']; ?>">  
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <label for="bainheiro">Banheiro(s):</label>
                        <input type="number" class="form-control" id="banheiro" placeholder="" name="banheiro"required value="<?php echo $dados1['banheiro']; ?>">
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <label for="cozinha">Cozinha(s):</label>
                        <input type="number" class="form-control" id="cozinha" placeholder="" name="cozinha"required value="<?php echo $dados1['cozinha']; ?>">    
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <label for="salaJ">Sala(s) de Jantar:</label>
                        <input type="number" class="form-control" id="salaJ" placeholder="" name="salaJ"required value="<?php echo $dados1['salaJ']; ?>">    
                    </div>
                    <div class="col-xs-12 col-md-4 mb-4">
                        <label for="salaE">Sala(s) de Estar:</label>
                        <input type="number" class="form-control" id="salaE" placeholder="" name="salaE"required value="<?php echo $dados1['salaE']; ?>">    
                    </div>
                    <div class="col-xs-12 col-md-4 mb-4">
                        <label for="garagem">Vagas de Garagem:</label>
                        <input type="number" class="form-control" id="garagem" placeholder="" name="garagem"required value="<?php echo $dados1['garagem']; ?>">    
                    </div>
                    
                </div>
                <hr class="mb-4">
          
                    <button class="btn btn-primary btn-lg btn-block mb-4" type="submit">Editar</button>
                </form>
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

      <script>
        //Código em JavaScript do file
        $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
</body>
</html>