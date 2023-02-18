<?php
    echo '<meta charset="UTF-8">';
	session_start();
	if (isset($_SESSION["UsuarioNome"]) == "usuario" ) {
		$usuario = $_SESSION["UsuarioNome"];
	} else {
		header("Location:../index.php");
	}
	include("../Login/conecta.php");

    $id = $_GET["id"];

    $sql = "SELECT * FROM imoveis WHERE `idimoveis`=\"$id\"";
    $resultado=mysqli_query($conexao,$sql); 
    $dados=mysqli_fetch_assoc($resultado);
    $imgnome1= $dados['imgnome1'];
    $imgnome2= $dados['imgnome2'];
    $imgnome3= $dados['imgnome3'];
    $imgnome4= $dados['imgnome4'];
    $imgnome5= $dados['imgnome5'];
    $imgnome6= $dados['imgnome6'];

    $sql2 = "DELETE `imoveis`.*, `caracteres`.* FROM `imoveis`, `caracteres` WHERE `imoveis`.idimoveis = `caracteres`.idimoveis AND `imoveis`.idimoveis= \"$id\"";
    mysqli_query($conexao,$sql2); 

    $linhasAfetadas = mysqli_affected_rows($conexao);

    if($linhasAfetadas > 0){
        if ($imgnome1 == "null") {
            $_SESSION["excluido"] = "Imóvel excluído com sucesso.";
            header("Location:pagADM.php");
        }else{
           unlink('arquivo/arquivo_img/'.$imgnome1.'');
           if ($imgnome2 == "null") {
                $_SESSION["excluido"] = "Imóvel excluído com sucesso.";
                header("Location:pagADM.php"); 
            }else {   
                unlink('arquivo/arquivo_img/'.$imgnome2.'');
                if ($imgnome3 == "null") {
                    $_SESSION["excluido"] = "Imóvel excluído com sucesso.";
                    header("Location:pagADM.php");
                }else {   
                    unlink('arquivo/arquivo_img/'.$imgnome3.'');
                    if ($imgnome4 == "null") {
                        $_SESSION["excluido"] = "Imóvel excluído com sucesso.";
                        header("Location:pagADM.php");
                    }else {   
                        unlink('arquivo/arquivo_img/'.$imgnome4.'');
                        if ($imgnome5 == "null") {
                            $_SESSION["excluido"] = "Imóvel excluído com sucesso.";
                            header("Location:pagADM.php");
                        }else {   
                            unlink('arquivo/arquivo_img/'.$imgnome5.'');
                            if ($imgnome6 == "null") {
                                $_SESSION["excluido"] = "Imóvel excluído com sucesso.";
                                header("Location:pagADM.php"); 
                            }else {   
                                unlink('arquivo/arquivo_img/'.$imgnome6.'');
                                $_SESSION["excluido"] = "Imóvel excluído com sucesso.";
                                header("Location:pagADM.php"); 
                            } 
                        } 
                    } 
                } 
            } 
        }
        
    } else {
        $_SESSION["erro"] = "Ocorreu um erro ao excluir imóvel.".$id."";
        header("location:pagADM.php");
        
    }


?>