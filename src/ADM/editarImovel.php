<?php

    echo '<meta charset="UTF-8">';

    session_start();
	if (isset($_SESSION["UsuarioNome"]) == "usuario" ) {
		$usuario = $_SESSION["UsuarioNome"];
	} else {
		header("Location:../index.php");
	}
	include("../Login/conecta.php");

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
    $id = $_GET['id'];

    if ((empty($situacao)) or (empty($tipo)) or (empty($valor)) or (empty($descricao)) or (empty($bairro))) {    
        
        $_SESSION['erro'] = "Campos Obrigatórios!";
        header("Location:formEditarImovel.php");
    } else {
            
            $sql= "UPDATE `imoveis` SET `situacao`=\"$situacao\",`tipo`=\"$tipo\",`valor`=\"$valor\",`descricao`=\"$descricao\",`bairro`=\"$bairro\" WHERE `idimoveis`=\"$id\"";
            mysqli_query($conexao,$sql);
            
            $linhasAfetadas = mysqli_affected_rows($conexao);
            if($linhasAfetadas > 0){

               // $idimoveis = mysqli_insert_id($conexao);
                $sql2= "UPDATE `caracteres` SET `quarto`=\"$quarto\",`cozinha`=\"$cozinha\",`banheiro`=\"$banheiro\",`salaJ`=\"$salaJ\",`salaE`=\"$salaE\",`garagem`=\"$garagem\",`idimoveis`=\"$id\" WHERE `idimoveis`=\"$id\"";
                mysqli_query($conexao,$sql2);

                $_SESSION['alterado'] = "Editado com sucesso!";
                header("Location:pagADM.php");
            } else {  
                $_SESSION['erro'] = "Não foi alterado nenhum dado ou os dados são inválidos.";
                header("Location:pagADM.php");
            }        
            
    }
?>