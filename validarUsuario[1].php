<?php
    error_reporting(E_WARNING|E_ERROR);
    session_start();
	require('funcoes.php');
	require('conexao.php');
	
	
	$login = preg_replace("[^0-9a-z]","",$_POST["nome"]);
	$senha = preg_replace("[^0-9a-z]","",$_POST["sen"]);
	
	
		
    if (($login != '') && ($senha != '')){
	   $sql = "select * from usuario where login = '$login' and senha = '$senha'";
	   $confirma = mysqli_query($conexao,$sql);
	   
	   if($registro =  mysqli_fetch_object($confirma)){		   
		  $_SESSION['sessaoCodigo'] = $registro->id;
		  $_SESSION['sessaoNome'] = $registro->login;
		  direciona('index.php');
		  exit;
	   }
	   else{
	     alerta("Usuário não válido");
		  voltar();
		  exit;
	   }
	}
	else{
	    alerta("Você precisa digitar o usuário e a senha");
		  voltar();
		  exit;
	}
?>