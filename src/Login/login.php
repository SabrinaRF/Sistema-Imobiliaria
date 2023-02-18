<?php

	include("conecta.php");

	session_start();


	if ((isset($_POST['usuario'])) && (isset($_POST['senha']))) {
		
		$usuario = mysqli_real_escape_string($conexao,$_POST["usuario"]);
		$senha = mysqli_real_escape_string($conexao,$_POST["senha"]);
		$senha = md5($senha);

		$sql ="SELECT * FROM `usuarios` WHERE usuario = \"$usuario\" AND senha = \"$senha\" LIMIT 1";

		$query = mysqli_query($conexao,$sql); 
		
		$linhasAfetadas = mysqli_affected_rows($conexao);

		if($linhasAfetadas > 0){
		    
			$resultado= mysqli_fetch_assoc($query);
			
			$_SESSION['IDusuario'] = $resultado['idusuarios'];
			$_SESSION['UsuarioNome'] = $resultado['nome'];

			header("Location:../ADM/pagADM.php");
				
		} else {
		
			$_SESSION['loginErro'] = "Usuário ou senha não encontrados!";
			header("Location:pagLogin.php");
		} 
	} else{
		$_SESSION['loginErro'] = "Usuário ou senha inválido!";
		header("Location:pagLogin.php");
	}
?>
