<?php

  include("../../Login/conecta.php");
  session_start();
  $pasta = "arquivo_img/";

  /* Cadastrar normal */
  
  $situacao = $_POST["situacao"];
  $tipo = $_POST["tipo"];
  $valor = $_POST["valor"];
  $descricao = $_POST["descricao"];
  $bairro = $_POST["bairro"];
  $quarto = $_POST["quarto"];
  $banheiro = $_POST["banheiro"];
  $cozinha = $_POST["cozinha"];
  $salaJ = $_POST["salaJ"];
  $salaE = $_POST["salaE"];
  $garagem = $_POST["garagem"];

  /* Cadastrar up 1*/
  $caminho1 = $pasta.basename($_FILES["arquivo1"]["name"]);
  $uploadOk1 = 1;
  $extencao1 = strtolower(pathinfo($caminho1,PATHINFO_EXTENSION));
  $filenome1 = $_FILES["arquivo1"]["name"];
  if (empty($filenome1)) {
    $filenome1="null";
  }
  /* Cadastrar up 2*/
  $caminho2 = $pasta.basename($_FILES["arquivo2"]["name"]);
  $uploadOk2 = 1;
  $extencao2 = strtolower(pathinfo($caminho2,PATHINFO_EXTENSION));
  $filenome2 = $_FILES["arquivo2"]["name"];
  if (empty($filenome2)) {
    $filenome2="null";
  }
  /* Cadastrar up 3*/
  $caminho3 = $pasta.basename($_FILES["arquivo3"]["name"]);
  $uploadOk3 = 1;
  $extencao3 = strtolower(pathinfo($caminho3,PATHINFO_EXTENSION));
  $filenome3 = $_FILES["arquivo3"]["name"];
  if (empty($filenome3)) {
    $filenome3="null";
  }
  /* Cadastrar up 4*/
  $caminho4 = $pasta.basename($_FILES["arquivo4"]["name"]);
  $uploadOk4 = 1;
  $extencao4 = strtolower(pathinfo($caminho4,PATHINFO_EXTENSION));
  $filenome4 = $_FILES["arquivo4"]["name"];
  if (empty($filenome4)) {
    $filenome4="null";
  }
  /* Cadastrar up 5*/
  $caminho5 = $pasta.basename($_FILES["arquivo5"]["name"]);
  $uploadOk5 = 1;
  $extencao5 = strtolower(pathinfo($caminho5,PATHINFO_EXTENSION));
  $filenome5 = $_FILES["arquivo5"]["name"];
  if (empty($filenome5)) {
    $filenome5="null";
  }
  /* Cadastrar up 6*/
  $caminho6 = $pasta.basename($_FILES["arquivo6"]["name"]);
  $uploadOk6 = 1;
  $extencao6 = strtolower(pathinfo($caminho6,PATHINFO_EXTENSION));
  $filenome6 = $_FILES["arquivo6"]["name"];
  if (empty($filenome6)) {
    $filenome6="null";
  }
  
  /* Testes up 1*/
  if ($filenome1 =="null") {
    /* Testes up 2*/
    if ($filenome2 == "null") {
      /* Testes up 3*/
      if ($filenome3 == "null") {
        /* Testes up 4*/
        if ($filenome4 == "null") {
          /* Testes up 5*/
          if ($filenome5 == "null") {
            /* Testes up 6*/
            if ($filenome6 == "null") {
              /* OPÇÃO 6 */
              if ($filenome6 == "null" and $filenome5 == "null" and $filenome4 == "null" and $filenome3 == "null" and $filenome2 == "null" and $filenome1 == "null" ){
    
                if ((empty($situacao)) or (empty($tipo)) or (empty($valor)) or (empty($descricao)) or (empty($bairro))) {    
      
                  $_SESSION['erro'] = "Campos Obrigatórios!";
                  header("Location:../formCadastrarImovel.php");
                } else {
                      
                      $sql = "INSERT INTO `imoveis`(`imgnome1`,`imgnome2`,`imgnome3`,`imgnome4`,`imgnome5`,`imgnome6`,`situacao`, `tipo`, `valor`, `descricao`, `bairro`) VALUES (\"$filenome1\",\"$filenome2\",\"$filenome3\",\"$filenome4\",\"$filenome5\",\"$filenome6\",\"$situacao\",\"$tipo\",\"$valor\",\"$descricao\",\"$bairro\")"; 
                      mysqli_query($conexao,$sql);
                      
                      $linhasAfetadas = mysqli_affected_rows($conexao);
                      if($linhasAfetadas > 0){
            
                          $idimoveis = mysqli_insert_id($conexao);
                          $sql2= "INSERT INTO `caracteres`(`quarto`, `cozinha`, `banheiro`, `salaJ`, `salaE`, `garagem`, `idimoveis` ) VALUES (\"$quarto\",\"$cozinha\",\"$banheiro\",\"$salaJ\",\"$salaE\",\"$garagem\",\"$idimoveis\")";
                          mysqli_query($conexao,$sql2);
            
                          $_SESSION['cadastrar'] = "Cadastrado com sucesso!";
                          header("Location:../pagADM.php");
                      } else {  
                          $_SESSION['erro'] = "Dados inválido!";
                          header("Location:../pagADM.php");
                      }             
                }/*fim do else*/
              } 
            }
          }
        }
      }
    }
  }else{
    if (file_exists($caminho1)) {
    }
    if ($_FILES["arquivo1"]["size"] > 5242880) {
      $uploadOk1 = 0;
    }
    if ($extencao1 != "png" && $extencao1 != "jpeg" && $extencao1 != "jpg") {
      $uploadOk1 = 0;
    }
    if ($uploadOk1 == 0) {
      $_SESSION['erro'] = "Verifique seu arquivo. ";
      header("Location:../pagADM.php");
    }else{
      /* Testes up 2*/
      if ($filenome2 == "null") {
          /* Testes up 3*/
          if ($filenome3 == "null") {
            /* Testes up 4*/
            if ($filenome4 == "null") {
              /* Testes up 5*/
              if ($filenome5 == "null") {
                /* Testes up 6*/
                if ($filenome6 == "null") {
                  /* OPÇÃO 6 */
                  if ($filenome6 == "null" and $filenome5 == "null" and $filenome4 == "null" and $filenome3 == "null" and $filenome2 == "null" and $filenome1 != "null" ){
                    if (move_uploaded_file($_FILES["arquivo1"]["tmp_name"],$caminho1)) {
                                
                                if ((empty($situacao)) or (empty($tipo)) or (empty($valor)) or (empty($descricao)) or (empty($bairro))) {    
                      
                                  $_SESSION['erro'] = "Campos Obrigatórios!";
                                  header("Location:../formCadastrarImovel.php");
                                } else {
                                      
                                      $sql = "INSERT INTO `imoveis`(`imgnome1`,`imgnome2`,`imgnome3`,`imgnome4`,`imgnome5`,`imgnome6`,`situacao`, `tipo`, `valor`, `descricao`, `bairro`) VALUES (\"$filenome1\",\"$filenome2\",\"$filenome3\",\"$filenome4\",\"$filenome5\",\"$filenome6\",\"$situacao\",\"$tipo\",\"$valor\",\"$descricao\",\"$bairro\")"; 
                                      mysqli_query($conexao,$sql);
                                      
                                      $linhasAfetadas = mysqli_affected_rows($conexao);
                                      if($linhasAfetadas > 0){
                            
                                          $idimoveis = mysqli_insert_id($conexao);
                                          $sql2= "INSERT INTO `caracteres`(`quarto`, `cozinha`, `banheiro`, `salaJ`, `salaE`, `garagem`, `idimoveis` ) VALUES (\"$quarto\",\"$cozinha\",\"$banheiro\",\"$salaJ\",\"$salaE\",\"$garagem\",\"$idimoveis\")";
                                          mysqli_query($conexao,$sql2);
                            
                                          $_SESSION['cadastrar'] = "Cadastrado com sucesso!";
                                          header("Location:../pagADM.php");
                                      } else {  
                                          $_SESSION['erro'] = "Dados inválido!";
                                          header("Location:../pagADM.php");
                                      }             
                                }/*fim do else*/
                    } else {
                      $_SESSION['erro'] = "Erro ao mover o arquivo 1.";
                      header("Location:../pagADM.php");
                    } 
                  } 
                }
              }
            }
          }
      } else {
        if (file_exists($caminho2)) {
        }
        if ($_FILES["arquivo2"]["size"] > 5242880) {
          $uploadOk2 = 0;
        }
        if ($extencao2 != "png" && $extencao2 != "jpeg" && $extencao2 != "jpg") {
          $uploadOk2 = 0;
        }
        if ($uploadOk2 == 0) {
          $_SESSION['erro'] = "Verifique seu arquivo. ";
          header("Location:../pagADM.php");
        }else{
          /* Testes up 3*/
          if ($filenome3 == "null") {
            /* Testes up 4*/
            if ($filenome4 == "null") {
              /* Testes up 5*/
              if ($filenome5 == "null") {
                /* Testes up 6*/
                if ($filenome6 == "null") {
                  /* OPÇÃO 6 */
                  if ($filenome6 == "null" and $filenome5 == "null" and $filenome4 == "null" and $filenome3 == "null" and $filenome2 != "null" and $filenome1 != "null" ){
                    if (move_uploaded_file($_FILES["arquivo1"]["tmp_name"],$caminho1)) {
                      if (move_uploaded_file($_FILES["arquivo2"]["tmp_name"],$caminho2)) {
                                
                                if ((empty($situacao)) or (empty($tipo)) or (empty($valor)) or (empty($descricao)) or (empty($bairro))) {    
                      
                                  $_SESSION['erro'] = "Campos Obrigatórios!";
                                  header("Location:../formCadastrarImovel.php");
                                } else {
                                      
                                      $sql = "INSERT INTO `imoveis`(`imgnome1`,`imgnome2`,`imgnome3`,`imgnome4`,`imgnome5`,`imgnome6`,`situacao`, `tipo`, `valor`, `descricao`, `bairro`) VALUES (\"$filenome1\",\"$filenome2\",\"$filenome3\",\"$filenome4\",\"$filenome5\",\"$filenome6\",\"$situacao\",\"$tipo\",\"$valor\",\"$descricao\",\"$bairro\")"; 
                                      mysqli_query($conexao,$sql);
                                      
                                      $linhasAfetadas = mysqli_affected_rows($conexao);
                                      if($linhasAfetadas > 0){
                            
                                          $idimoveis = mysqli_insert_id($conexao);
                                          $sql2= "INSERT INTO `caracteres`(`quarto`, `cozinha`, `banheiro`, `salaJ`, `salaE`, `garagem`, `idimoveis` ) VALUES (\"$quarto\",\"$cozinha\",\"$banheiro\",\"$salaJ\",\"$salaE\",\"$garagem\",\"$idimoveis\")";
                                          mysqli_query($conexao,$sql2);
                            
                                          $_SESSION['cadastrar'] = "Cadastrado com sucesso!";
                                          header("Location:../pagADM.php");
                                      } else {  
                                          $_SESSION['erro'] = "Dados inválido!";
                                          header("Location:../pagADM.php");
                                      }             
                                }/*fim do else*/
                      } else {
                        $_SESSION['erro'] = "Erro ao mover o arquivo 2.";
                        header("Location:../pagADM.php");
                      }
                    } else {
                      $_SESSION['erro'] = "Erro ao mover o arquivo 1.";
                      header("Location:../pagADM.php");
                    } 
                  } 
                }
              }
            }
          } else {
            if (file_exists($caminho3)) {
            }
            if ($_FILES["arquivo3"]["size"] > 5242880) {
              $uploadOk3 = 0;
            }
            if ($extencao3 != "png" && $extencao3 != "jpeg" && $extencao3 != "jpg") {
              $uploadOk3 = 0;
            }
            if ($uploadOk3== 0) {
              $_SESSION['erro'] = "Verifique seu arquivo. ";
              header("Location:../pagADM.php");
            }else{
              /* Testes up 4*/
              if ($filenome4 == "null") {
                /* Testes up 5*/
                if ($filenome5 == "null") {
                  /* Testes up 6*/
                  if ($filenome6 == "null") {
                    /* OPÇÃO 6 */
                    if ($filenome6 == "null" and $filenome5 == "null" and $filenome4 == "null" and $filenome3 != "null" and $filenome2 != "null" and $filenome1 != "null" ){
                      if (move_uploaded_file($_FILES["arquivo1"]["tmp_name"],$caminho1)) {
                        if (move_uploaded_file($_FILES["arquivo2"]["tmp_name"],$caminho2)) {
                          if (move_uploaded_file($_FILES["arquivo3"]["tmp_name"],$caminho3)) {
                                  
                                  if ((empty($situacao)) or (empty($tipo)) or (empty($valor)) or (empty($descricao)) or (empty($bairro))) {    
                        
                                    $_SESSION['erro'] = "Campos Obrigatórios!";
                                    header("Location:../formCadastrarImovel.php");
                                  } else {
                                        
                                        $sql = "INSERT INTO `imoveis`(`imgnome1`,`imgnome2`,`imgnome3`,`imgnome4`,`imgnome5`,`imgnome6`,`situacao`, `tipo`, `valor`, `descricao`, `bairro`) VALUES (\"$filenome1\",\"$filenome2\",\"$filenome3\",\"$filenome4\",\"$filenome5\",\"$filenome6\",\"$situacao\",\"$tipo\",\"$valor\",\"$descricao\",\"$bairro\")"; 
                                        mysqli_query($conexao,$sql);
                                        
                                        $linhasAfetadas = mysqli_affected_rows($conexao);
                                        if($linhasAfetadas > 0){
                              
                                            $idimoveis = mysqli_insert_id($conexao);
                                            $sql2= "INSERT INTO `caracteres`(`quarto`, `cozinha`, `banheiro`, `salaJ`, `salaE`, `garagem`, `idimoveis` ) VALUES (\"$quarto\",\"$cozinha\",\"$banheiro\",\"$salaJ\",\"$salaE\",\"$garagem\",\"$idimoveis\")";
                                            mysqli_query($conexao,$sql2);
                              
                                            $_SESSION['cadastrar'] = "Cadastrado com sucesso!";
                                            header("Location:../pagADM.php");
                                        } else {  
                                            $_SESSION['erro'] = "Dados inválido!";
                                            header("Location:../pagADM.php");
                                        }             
                                  }/*fim do else*/
                          } else {
                            $_SESSION['erro'] = "Erro ao mover o arquivo 3.";
                            header("Location:../pagADM.php");
                          }
                        } else {
                          $_SESSION['erro'] = "Erro ao mover o arquivo 2.";
                          header("Location:../pagADM.php");
                        }
                      } else {
                        $_SESSION['erro'] = "Erro ao mover o arquivo 1.";
                        header("Location:../pagADM.php");
                      } 
                    } 
                  }
                }
                
              } else {
                if (file_exists($caminho4)) {
                }
                if ($_FILES["arquivo4"]["size"] > 5242880) {
                  $uploadOk4 = 0;
                }
                if ($extencao4 != "png" && $extencao4 != "jpeg" && $extencao4 != "jpg") {
                  $uploadOk4 = 0;
                }
                if ($uploadOk4== 0) {
                  $_SESSION['erro'] = "Verifique seu arquivo. ";
                  header("Location:../pagADM.php");
                }else{
                  /* Testes up 5*/
                  if ($filenome5 == "null") {
                    /* Testes up 6*/
                    if ($filenome6 == "null") {
                      /* OPÇÃO 6 */
                      if ($filenome6 == "null" and $filenome5 == "null" and $filenome4 != "null" and $filenome3 != "null" and $filenome2 != "null" and $filenome1 != "null" ){
                        if (move_uploaded_file($_FILES["arquivo1"]["tmp_name"],$caminho1)) {
                          if (move_uploaded_file($_FILES["arquivo2"]["tmp_name"],$caminho2)) {
                            if (move_uploaded_file($_FILES["arquivo3"]["tmp_name"],$caminho3)) {
                              if (move_uploaded_file($_FILES["arquivo4"]["tmp_name"],$caminho4)) {
                                    
                                    if ((empty($situacao)) or (empty($tipo)) or (empty($valor)) or (empty($descricao)) or (empty($bairro))) {    
                          
                                      $_SESSION['erro'] = "Campos Obrigatórios!";
                                      header("Location:../formCadastrarImovel.php");
                                    } else {
                                          
                                          $sql = "INSERT INTO `imoveis`(`imgnome1`,`imgnome2`,`imgnome3`,`imgnome4`,`imgnome5`,`imgnome6`,`situacao`, `tipo`, `valor`, `descricao`, `bairro`) VALUES (\"$filenome1\",\"$filenome2\",\"$filenome3\",\"$filenome4\",\"$filenome5\",\"$filenome6\",\"$situacao\",\"$tipo\",\"$valor\",\"$descricao\",\"$bairro\")"; 
                                          mysqli_query($conexao,$sql);
                                          
                                          $linhasAfetadas = mysqli_affected_rows($conexao);
                                          if($linhasAfetadas > 0){
                                
                                              $idimoveis = mysqli_insert_id($conexao);
                                              $sql2= "INSERT INTO `caracteres`(`quarto`, `cozinha`, `banheiro`, `salaJ`, `salaE`, `garagem`, `idimoveis` ) VALUES (\"$quarto\",\"$cozinha\",\"$banheiro\",\"$salaJ\",\"$salaE\",\"$garagem\",\"$idimoveis\")";
                                              mysqli_query($conexao,$sql2);
                                
                                              $_SESSION['cadastrar'] = "Cadastrado com sucesso!";
                                              header("Location:../pagADM.php");
                                          } else {  
                                              $_SESSION['erro'] = "Dados inválido!";
                                              header("Location:../pagADM.php");
                                          }             
                                    }/*fim do else*/
                              } else {
                                $_SESSION['erro'] = "Erro ao mover o arquivo 4.";
                                header("Location:../pagADM.php");
                              }
                            } else {
                              $_SESSION['erro'] = "Erro ao mover o arquivo 3.";
                              header("Location:../pagADM.php");
                            }
                          } else {
                            $_SESSION['erro'] = "Erro ao mover o arquivo 2.";
                            header("Location:../pagADM.php");
                          }
                        } else {
                          $_SESSION['erro'] = "Erro ao mover o arquivo 1.";
                          header("Location:../pagADM.php");
                        } 
                      } 
                    }       
                  }else {
                    if (file_exists($caminho5)) {
                    }
                    if ($_FILES["arquivo5"]["size"] > 5242880) {
                      $uploadOk5 = 0;
                    }
                    if ($extencao5 != "png" && $extencao5 != "jpeg" && $extencao5 != "jpg") {
                      $uploadOk5 = 0;
                    }
                    if ($uploadOk5== 0) {
                      $_SESSION['erro'] = "Verifique seu arquivo. ";
                      header("Location:../pagADM.php");
                    }else{
                      /* Testes up 6*/
                      if ($filenome6 == "null") {
                        /* OPÇÃO 10 */
                        if ($filenome6 == "null" and $filenome5 != "null" and $filenome4 != "null" and $filenome3 != "null" and $filenome2 != "null" and $filenome1 != "null" ){
                          if (move_uploaded_file($_FILES["arquivo1"]["tmp_name"],$caminho1)) {
                            if (move_uploaded_file($_FILES["arquivo2"]["tmp_name"],$caminho2)) {
                              if (move_uploaded_file($_FILES["arquivo3"]["tmp_name"],$caminho3)) {
                                if (move_uploaded_file($_FILES["arquivo4"]["tmp_name"],$caminho4)) {
                                  if (move_uploaded_file($_FILES["arquivo5"]["tmp_name"],$caminho5)) {
                                      
                                      if ((empty($situacao)) or (empty($tipo)) or (empty($valor)) or (empty($descricao)) or (empty($bairro))) {    
                            
                                        $_SESSION['erro'] = "Campos Obrigatórios!";
                                        header("Location:../formCadastrarImovel.php");
                                      } else {
                                            
                                            $sql = "INSERT INTO `imoveis`(`imgnome1`,`imgnome2`,`imgnome3`,`imgnome4`,`imgnome5`,`imgnome6`,`situacao`, `tipo`, `valor`, `descricao`, `bairro`) VALUES (\"$filenome1\",\"$filenome2\",\"$filenome3\",\"$filenome4\",\"$filenome5\",\"$filenome6\",\"$situacao\",\"$tipo\",\"$valor\",\"$descricao\",\"$bairro\")"; 
                                            mysqli_query($conexao,$sql);
                                            
                                            $linhasAfetadas = mysqli_affected_rows($conexao);
                                            if($linhasAfetadas > 0){
                                  
                                                $idimoveis = mysqli_insert_id($conexao);
                                                $sql2= "INSERT INTO `caracteres`(`quarto`, `cozinha`, `banheiro`, `salaJ`, `salaE`, `garagem`, `idimoveis` ) VALUES (\"$quarto\",\"$cozinha\",\"$banheiro\",\"$salaJ\",\"$salaE\",\"$garagem\",\"$idimoveis\")";
                                                mysqli_query($conexao,$sql2);
                                  
                                                $_SESSION['cadastrar'] = "Cadastrado com sucesso!";
                                                header("Location:../pagADM.php");
                                            } else {  
                                                $_SESSION['erro'] = "Dados inválido!";
                                                header("Location:../pagADM.php");
                                            }             
                                      }/*fim do else*/
                                  } else {
                                    $_SESSION['erro'] = "Erro ao mover o arquivo 5. ";
                                    header("Location:../pagADM.php");
                                  }
                                } else {
                                  $_SESSION['erro'] = "Erro ao mover o arquivo 4.";
                                  header("Location:../pagADM.php");
                                }
                              } else {
                                $_SESSION['erro'] = "Erro ao mover o arquivo 3.";
                                header("Location:../pagADM.php");
                              }
                            } else {
                              $_SESSION['erro'] = "Erro ao mover o arquivo 2.";
                              header("Location:../pagADM.php");
                            }
                          } else {
                            $_SESSION['erro'] = "Erro ao mover o arquivo 1.";
                            header("Location:../pagADM.php");
                          } 
                        }
                        
                      }else{
                        if (file_exists($caminho6)) {
                        }
                        if ($_FILES["arquivo6"]["size"] > 5242880) {
                          $uploadOk6 = 0;
                        }
                        if ($extencao6 != "png" && $extencao6 != "jpeg" && $extencao6 != "jpg") {
                          $uploadOk6 = 0;
                        }
                        if ($uploadOk6== 0) {
                          $_SESSION['erro'] = "Verifique seu arquivo. ";
                          header("Location:../pagADM.php");
                        }else{
                            /* OPÇÃO 6 */
                            if ($filenome6 != "null" and $filenome5 != "null" and $filenome4 != "null" and $filenome3 != "null" and $filenome2 != "null" and $filenome1 != "null" ){
                              if (move_uploaded_file($_FILES["arquivo1"]["tmp_name"],$caminho1)) {
                                if (move_uploaded_file($_FILES["arquivo2"]["tmp_name"],$caminho2)) {
                                  if (move_uploaded_file($_FILES["arquivo3"]["tmp_name"],$caminho3)) {
                                    if (move_uploaded_file($_FILES["arquivo4"]["tmp_name"],$caminho4)) {
                                      if (move_uploaded_file($_FILES["arquivo5"]["tmp_name"],$caminho5)) {
                                        if (move_uploaded_file($_FILES["arquivo6"]["tmp_name"],$caminho6)) {
                                          
                                          if ((empty($situacao)) or (empty($tipo)) or (empty($valor)) or (empty($descricao)) or (empty($bairro))) {    
                                
                                            $_SESSION['erro'] = "Campos Obrigatórios!";
                                            header("Location:../formCadastrarImovel.php");
                                          } else {
                                                
                                                $sql = "INSERT INTO `imoveis`(`imgnome1`,`imgnome2`,`imgnome3`,`imgnome4`,`imgnome5`,`imgnome6`,`situacao`, `tipo`, `valor`, `descricao`, `bairro`) VALUES (\"$filenome1\",\"$filenome2\",\"$filenome3\",\"$filenome4\",\"$filenome5\",\"$filenome6\",\"$situacao\",\"$tipo\",\"$valor\",\"$descricao\",\"$bairro\")"; 
                                                mysqli_query($conexao,$sql);
                                                
                                                $linhasAfetadas = mysqli_affected_rows($conexao);
                                                if($linhasAfetadas > 0){
                                      
                                                    $idimoveis = mysqli_insert_id($conexao);
                                                    $sql2= "INSERT INTO `caracteres`(`quarto`, `cozinha`, `banheiro`, `salaJ`, `salaE`, `garagem`, `idimoveis` ) VALUES (\"$quarto\",\"$cozinha\",\"$banheiro\",\"$salaJ\",\"$salaE\",\"$garagem\",\"$idimoveis\")";
                                                    mysqli_query($conexao,$sql2);
                                      
                                                    $_SESSION['cadastrar'] = "Cadastrado com sucesso!";
                                                    header("Location:../pagADM.php");
                                                } else {  
                                                    $_SESSION['erro'] = "Dados inválido!";
                                                    header("Location:../pagADM.php");
                                                }             
                                          }/*fim do else*/
                          

                                        } else {
                                          $_SESSION['erro'] = "Erro ao mover o arquivo 6.";
                                          header("Location:../pagADM.php");
                                        }
                                      } else {
                                        $_SESSION['erro'] = "Erro ao mover o arquivo 5. ";
                                        header("Location:../pagADM.php");
                                      }
                                    } else {
                                      $_SESSION['erro'] = "Erro ao mover o arquivo 4.";
                                      header("Location:../pagADM.php");
                                    }
                                  } else {
                                    $_SESSION['erro'] = "Erro ao mover o arquivo 3.";
                                    header("Location:../pagADM.php");
                                  }
                                } else {
                                  $_SESSION['erro'] = "Erro ao mover o arquivo 2.";
                                  header("Location:../pagADM.php");
                                }
                              } else {
                                $_SESSION['erro'] = "Erro ao mover o arquivo 1.";
                                header("Location:../pagADM.php");
                              } 
                            }
                        }
                      }
                    } 
                  } 
                }
              }
            } 
          }
        }
      }
    }
   }
?>