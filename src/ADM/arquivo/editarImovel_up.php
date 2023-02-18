<?php

    include("../../Login/conecta.php");
    session_start();
    $pasta = "arquivo_img/";

   
    $arr=$_GET['array'];
    $array = explode(" ",$arr);
    $id=$array[0];
    $nomeimg=$array[1];
    $img=$array[2];
    
    if ($img == "imgnome1") {
        $sql= "SELECT * FROM `imoveis` WHERE `imgnome1` = \"$nomeimg\"";
        $resultado = mysqli_query($conexao,$sql);
        $dados= mysqli_fetch_assoc($resultado);
        $nomeAntigo = $dados['imgnome1'];
        //$id=$dados['idimoveis'];

        $caminho = $pasta.basename($_FILES["arquivo"]["name"]);
        $uploadOk = 1;
        $extencao = strtolower(pathinfo($caminho,PATHINFO_EXTENSION));
      
        $imgnome = $_FILES["arquivo"]["name"];

        if (file_exists($caminho)) {
          $uploadOk = 0;

        }
        if ($_FILES["arquivo"]["size"] > 5242880) {
          $uploadOk = 0;

        }
        if ($extencao != "png" && $extencao != "jpeg" && $extencao != "jpg") {
          $uploadOk = 0;

        }
        if ($uploadOk == 0) {
          $_SESSION['erro'] = "Verifique a extensão (PNG, JPEG ou JPG) ou o tamanho do arquivo (máx. 5MB).".$caminho."";
          header("Location:../pagADM.php");

        }else{
          if (move_uploaded_file($_FILES["arquivo"]["tmp_name"],$caminho)) {

              $sql= "UPDATE `imoveis` SET `imgnome1`=\"$imgnome\" WHERE `idimoveis`=\"$id\"";
              mysqli_query($conexao,$sql);
                    
              $linhasAfetadas = mysqli_affected_rows($conexao);
              
              if($linhasAfetadas > 0){

                  $deletado = unlink('arquivo_img/'.$nomeAntigo.'');

                  $_SESSION['alterado'] = "Editado com sucesso!";
                  header('Location:../formEditarImovel.php?id='.$id.'');
              } else {  
                $_SESSION['erro'] = "Dados inválido!1".$nomeimg."".$id."".$img."";
                header("Location:../pagADM.php");
              }
          
          } else {
            $_SESSION['erro'] = "Erro ao mover o arquivo.";
            header("Location:../pagADM.php");
          }
        }
    } else {
      if ($img == "imgnome2") {
          $sql= "SELECT * FROM `imoveis` WHERE `imgnome2` = \"$nomeimg\"";
          $resultado = mysqli_query($conexao,$sql);
          $dados= mysqli_fetch_assoc($resultado);
          $nomeAntigo = $dados['imgnome2'];
          //$id=$dados['idimoveis'];

          $caminho = $pasta.basename($_FILES["arquivo"]["name"]);
          $uploadOk = 1;
          $extencao = strtolower(pathinfo($caminho,PATHINFO_EXTENSION));
        
          $imgnome = $_FILES["arquivo"]["name"];
  
          if (file_exists($caminho)) {
            $uploadOk = 0;
  
          }
          if ($_FILES["arquivo"]["size"] > 5242880) {
            $uploadOk = 0;
  
          }
          if ($extencao != "png" && $extencao != "jpeg" && $extencao != "jpg") {
            $uploadOk = 0;
  
          }
          if ($uploadOk == 0) {
            $_SESSION['erro'] = "Verifique a extensão (PNG, JPEG ou JPG) ou o tamanho do arquivo (máx. 5MB).".$extencao."";
            header("Location:../pagADM.php");
  
          }else{
            if (move_uploaded_file($_FILES["arquivo"]["tmp_name"],$caminho)) {
  
                $sql= "UPDATE `imoveis` SET `imgnome2`=\"$imgnome\" WHERE `idimoveis`=\"$id\"";
                mysqli_query($conexao,$sql);
                      
                $linhasAfetadas = mysqli_affected_rows($conexao);
                
                if($linhasAfetadas > 0){
  
                    $deletado = unlink('arquivo_img/'.$nomeAntigo.'');
  
                    $_SESSION['alterado'] = "Editado com sucesso!";
                    header('Location:../formEditarImovel.php?id='.$id.'');
                } else {  
                  $_SESSION['erro'] = "Dados inválido!2";
                  header("Location:../pagADM.php");
                }
            
            } else {
              $_SESSION['erro'] = "Erro ao mover o arquivo.";
              header("Location:../pagADM.php");
            }
          }
  
      } else {
        if ($img == "imgnome3") {
            $sql= "SELECT * FROM `imoveis` WHERE `imgnome3` = \"$nomeimg\"";
            $resultado = mysqli_query($conexao,$sql);
            $dados= mysqli_fetch_assoc($resultado);
            $nomeAntigo = $dados['imgnome3'];
            //$id=$dados['idimoveis'];

            $caminho = $pasta.basename($_FILES["arquivo"]["name"]);
            $uploadOk = 1;
            $extencao = strtolower(pathinfo($caminho,PATHINFO_EXTENSION));
          
            $imgnome = $_FILES["arquivo"]["name"];
    
            if (file_exists($caminho)) {
              $uploadOk = 0;
    
            }
            if ($_FILES["arquivo"]["size"] > 5242880) {
              $uploadOk = 0;
    
            }
            if ($extencao != "png" && $extencao != "jpeg" && $extencao != "jpg") {
              $uploadOk = 0;
    
            }
            if ($uploadOk == 0) {
              $_SESSION['erro'] = "Verifique a extensão (PNG, JPEG ou JPG) ou o tamanho do arquivo (máx. 5MB).".$extencao."";
              header("Location:../pagADM.php");
    
            }else{
              if (move_uploaded_file($_FILES["arquivo"]["tmp_name"],$caminho)) {
    
                  $sql= "UPDATE `imoveis` SET `imgnome3`=\"$imgnome\" WHERE `idimoveis`=\"$id\"";
                  mysqli_query($conexao,$sql);
                        
                  $linhasAfetadas = mysqli_affected_rows($conexao);
                  
                  if($linhasAfetadas > 0){
    
                      $deletado = unlink('arquivo_img/'.$nomeAntigo.'');
    
                      $_SESSION['alterado'] = "Editado com sucesso!";
                      header('Location:../formEditarImovel.php?id='.$id.'');
                  } else {  
                    $_SESSION['erro'] = "Dados inválido!3";
                    header("Location:../pagADM.php");
                  }
              
              } else {
                $_SESSION['erro'] = "Erro ao mover o arquivo.";
                header("Location:../pagADM.php");
              }
            }
    
        } else {
          if ($img == "imgnome4") {
            $sql= "SELECT * FROM `imoveis` WHERE `imgnome4` = \"$nomeimg\"";
            $resultado = mysqli_query($conexao,$sql);
            $dados= mysqli_fetch_assoc($resultado);
            $nomeAntigo = $dados['imgnome4'];
            $id=$dados['idimoveis'];
  
            $caminho = $pasta.basename($_FILES["arquivo"]["name"]);
            $uploadOk = 1;
            $extencao = strtolower(pathinfo($caminho,PATHINFO_EXTENSION));
          
            $imgnome = $_FILES["arquivo"]["name"];
    
            if (file_exists($caminho)) {
              $uploadOk = 0;
    
            }
            if ($_FILES["arquivo"]["size"] > 5242880) {
              $uploadOk = 0;
    
            }
            if ($extencao != "png" && $extencao != "jpeg" && $extencao != "jpg") {
              $uploadOk = 0;
    
            }
            if ($uploadOk == 0) {
              $_SESSION['erro'] = "Verifique a extensão (PNG, JPEG ou JPG) ou o tamanho do arquivo (máx. 5MB).".$extencao."";
              header("Location:../pagADM.php");
    
            }else{
              if (move_uploaded_file($_FILES["arquivo"]["tmp_name"],$caminho)) {
    
                  $sql= "UPDATE `imoveis` SET `imgnome4`=\"$imgnome\" WHERE `idimoveis`=\"$id\"";
                  mysqli_query($conexao,$sql);
                        
                  $linhasAfetadas = mysqli_affected_rows($conexao);
                  
                  if($linhasAfetadas > 0){
    
                      $deletado = unlink('arquivo_img/'.$nomeAntigo.'');
    
                      $_SESSION['alterado'] = "Editado com sucesso!";
                      header('Location:../formEditarImovel.php?id='.$id.'');
                  } else {  
                    $_SESSION['erro'] = "Dados inválido!4";
                    header("Location:../pagADM.php");
                  }
              
              } else {
                $_SESSION['erro'] = "Erro ao mover o arquivo.";
                header("Location:../pagADM.php");
              }
            }
    
          } else {
            if ($img == "imgnome5") {
              $sql= "SELECT * FROM `imoveis` WHERE `imgnome5` = \"$nomeimg\"";
              $resultado = mysqli_query($conexao,$sql);
              $dados= mysqli_fetch_assoc($resultado);
              $nomeAntigo = $dados['imgnome5'];
              $id=$dados['idimoveis'];
    
              $caminho = $pasta.basename($_FILES["arquivo"]["name"]);
              $uploadOk = 1;
              $extencao = strtolower(pathinfo($caminho,PATHINFO_EXTENSION));
            
              $imgnome = $_FILES["arquivo"]["name"];
      
              if (file_exists($caminho)) {
                $uploadOk = 0;
      
              }
              if ($_FILES["arquivo"]["size"] > 5242880) {
                $uploadOk = 0;
      
              }
              if ($extencao != "png" && $extencao != "jpeg" && $extencao != "jpg") {
                $uploadOk = 0;
      
              }
              if ($uploadOk == 0) {
                $_SESSION['erro'] = "Verifique a extensão (PNG, JPEG ou JPG) ou o tamanho do arquivo (máx. 5MB).".$extencao."";
                header("Location:../pagADM.php");
      
              }else{
                if (move_uploaded_file($_FILES["arquivo"]["tmp_name"],$caminho)) {
      
                    $sql= "UPDATE `imoveis` SET `imgnome5`=\"$imgnome\" WHERE `idimoveis`=\"$id\"";
                    mysqli_query($conexao,$sql);
                          
                    $linhasAfetadas = mysqli_affected_rows($conexao);
                    
                    if($linhasAfetadas > 0){
      
                        $deletado = unlink('arquivo_img/'.$nomeAntigo.'');
      
                        $_SESSION['alterado'] = "Editado com sucesso!";
                        header('Location:../formEditarImovel.php?id='.$id.'');
                    } else {  
                      $_SESSION['erro'] = "Dados inválido!5";
                      header("Location:../pagADM.php");
                    }
                
                } else {
                  $_SESSION['erro'] = "Erro ao mover o arquivo.";
                  header("Location:../pagADM.php");
                }
              }
      
            } else {
              if ($img == "imgnome6") {
                $sql= "SELECT * FROM `imoveis` WHERE `imgnome6` = \"$nomeimg\"";
                $resultado = mysqli_query($conexao,$sql);
                $dados= mysqli_fetch_assoc($resultado);
                $nomeAntigo = $dados['imgnome6'];
                $id=$dados['idimoveis'];
      
                $caminho = $pasta.basename($_FILES["arquivo"]["name"]);
                $uploadOk = 1;
                $extencao = strtolower(pathinfo($caminho,PATHINFO_EXTENSION));
              
                $imgnome = $_FILES["arquivo"]["name"];
        
                if (file_exists($caminho)) {
                  $uploadOk = 0;
        
                }
                if ($_FILES["arquivo"]["size"] > 5242880) {
                  $uploadOk = 0;
        
                }
                if ($extencao != "png" && $extencao != "jpeg" && $extencao != "jpg") {
                  $uploadOk = 0;
        
                }
                if ($uploadOk == 0) {
                  $_SESSION['erro'] = "Verifique a extensão (PNG, JPEG ou JPG) ou o tamanho do arquivo (máx. 5MB).".$extencao."";
                  header("Location:../pagADM.php");
        
                }else{
                  if (move_uploaded_file($_FILES["arquivo"]["tmp_name"],$caminho)) {
        
                      $sql= "UPDATE `imoveis` SET `imgnome6`=\"$imgnome\" WHERE `idimoveis`=\"$id\"";
                      mysqli_query($conexao,$sql);
                            
                      $linhasAfetadas = mysqli_affected_rows($conexao);
                      
                      if($linhasAfetadas > 0){
        
                          $deletado = unlink('arquivo_img/'.$nomeAntigo.'');
        
                          $_SESSION['alterado'] = "Editado com sucesso!";
                          header('Location:../formEditarImovel.php?id='.$id.'');
                      } else {  
                        $_SESSION['erro'] = "Dados inválido!6";
                        header("Location:../pagADM.php");
                      }
                  
                  } else {
                    $_SESSION['erro'] = "Erro ao mover o arquivo.";
                    header("Location:../pagADM.php");
                  }
                }
        
              } else {
                $_SESSION['erro'] = "Erro TOTAL.".$nomeimg."".$img."";
                header("Location:../pagADM.php");
             
            }
           
          }
         
        }
       
      }
       
    }
  }
?>