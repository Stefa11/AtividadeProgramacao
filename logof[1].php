<?php  
    require('funcoes.php');
    session_start();
	$_SESSION['sessaoCodigo'] = 0;
    $_SESSION['sessaoNome'] = "Visitante";
    alerta("Volte sempre!");
	direciona('index.php?pagina=login&acao=login');
	exit;
?>