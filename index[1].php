<?php    
	error_reporting(E_ERROR);
    session_start();
	include "conexao.php";
         //$conexao = mysqli_connect("localhost", "id2829238_root", "123mudar", "id2829238_cadastro") ;
	$nome = $_SESSION['sessaoNome'];

?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
	
		<meta charset="utf-8" />
		<title>Sistemas Acadêmico </title>
		<meta name="GOOGLEBOT" content="index,follow" />
		<meta name="robots" content="all" />
		<meta name="RATING" content="general" />
		<meta name="language" content="pt-br" />
		
		
		
		<link rel="stylesheet" type="text/css" href="css/estiloV2.css" />
		<link rel="stylesheet" type="text/css" href="css/resete.css" />
		
		<link rel="stylesheet" type="text/css" href="css/informacao.css"/>		

		
		<script type="text/javascript" src="js/jqueryV1-1.9.1.min.js"></script>
		<script type="text/javascript" src="funcoesV1.js"></script>
		<script type="text/javascript" src="js/validarV1.js"></script>
		<script type="text/javascript" src="js/jcarouselliteV1_1.0.1.min.js"></script>
		<script type="text/javascript" src="js/carroselV1.js"></script>
		
	</head>
	<body>

	    <div id="geral">			
		    <header id="topo"><a href="index.php?pagina=inicio&acao=inicio">
				<?php
					require('header.php');
				?>
						
			
		    </header>			
			<nav id="menu">
				<ul>
					<li><a href="index.php?pagina=inicio&acao=inicio">Disciplina</a></li>
					<li><a href="index.php?pagina=inicio&acao=inicio">Atividades</a></li>
					
					<li><a href="index.php?pagina=inicio&acao=inicio">Curso</a></li>
					<li><a href="index.php?pagina=inicio&acao=inicio">Notas</a></li>
					
					<li><a href="index.php?pagina=inicio&acao=inicio">Perfil</a>
						<ul>
							<li><a href="index.php?pagina=cadastroUsuario&acao=cadastroUsuario">Usuário</a></li>
						</ul>	

					</li>
					<li>
					    <?php
					      
					        if($_SESSION['sessaoNome']){
					            if($_SESSION['sessaoNome'] == "Administrador")
					                 echo "<a href='index.php?pagina=meusProdutosADM&acao=meusProdutosADM'>Listar Alunos </a>";
					            else
					             echo "<a href='index.php?pagina=meusProdutos&acao=meusProdutos'>Meus cadastros </a>";
					           
					        }
					    ?>
					</li>	
					
				</ul>
			</nav>
			<section id="conteudo">
				<?php
				    error_reporting(E_WARNING|E_ERROR);
					$pagina = $_REQUEST['pagina'];
						
					if($pagina == "cao")						
						require('cao.php');	
					else if($pagina == "login")						
						require('login.php');
					else if ($pagina == "busca")
						require('acao.php');
					else if($pagina == "cadastroUsuario")						
						require('cadastroUsuario.php');
					else if($pagina == "Disciplina")						
						require('disciplina.php');
					else if($pagina == "validarUsuario")
					    require('validarUsuario.php');
					else if($pagina == "logof")
					    require('logof.php');
					else
						require('paginaPrincipalV1.php');			 
				?>
			</section>			 
			<aside id="propaganda">
				<div id="busca">
					<p><span class="texto">Busca R&aacute;pida</span></p>					
					<form name="buscaPer" id="buscaPer" method="get" action="index.php">
						
														
						<div class="lateral">
							<label>Teste</label><br />
							<input type="text" name="valorMin" id="valorMin" onkeypress="mascara(this,Metros)" />
						</div>
						<div class="lateral">
							<label>Teste 2</label><br />
							<input type="text" id = "valorMax" name="valorMax" onkeypress="mascara(this,Metros)" />
						</div>
						<input class="btnEnviar" value="Pesquisar"  type="submit">
					</form>
					<p><span class="texto">Busca por Nome</span></p>
					<form name="formBusca"  class="formBusca" method="post" action="index.php?pagina=inicio">
						<input type="text" name="id" id="id"/>
						<input class="btnEnviarCodigo" value="Pesquisar" type="submit">
					</form>
					<p><span class="texto">Busca por Disciplina</span></p>
					<form name="formBusca"  class="formBusca" method="post" action="index.php?pagina=incio">
						<input type="text" name="id" id="id"/>
						<input class="btnEnviarCodigo" value="Pesquisar" type="submit">
					</form>	

					<form name="formBusca"  class="formBusca" method="post" action="index.php?pagina=produtos">
						
						<input class="btnCadastroNovo" value="Novo Cadastro de Produtos" type="submit">
					</form>	
						
				</div>
				
				<div class="prop">
					 <h1></h1>
					<a href="" ><img src="" alt="" /></a>
				</div>
				<div class="prop">
				    
				    <?php 
           
		                include("conexao.php");
	                	$sql = "select foto,descricao,id from produto where novidade = 1";
		                $result = mysqli_query($conexao,$sql) ;	
		                $imagem = mysqli_fetch_object($result);
	               ?>
	               	<h1>Novidades</h1>	
				    <div class="imagemNovidade">
				<a href="index.php?pagina=busca&acao=maisInformacoes&id=<?=$imagem->id?>">
					<?php 
					echo "<img src='foto/".$imagem->foto."' alt='- banner1' width='290px' height='300px' /> "; ?></a>
					
				</div>
				    
							
				<!--	<a href="index.php?pagina=produtos" ><img src="img/mcmv2.jpg" alt="logoCaixa" /></a>-->
				</div>
				<div class="prop">
					<h1>Novidades por Email</h1>
					<p>Cadastre-se e seja o primeiro a receber a novidades no E-mail!</p>										  
					<form name="formBusca" method="post" action="cadastrarEmail.php">
						<div class="lateral">
							<label>Nome:</label><br />
							<input type="text" name="nome" id="nome"  />
						</div>
						<div class="lateral">
							<label>E-mail:</label><br />
							<input type="text" name="email" id="email"  />
						</div>
						<input class="btnEnviar" value="Enviar" type="submit">
					</form>					
				</div>				 
			 </aside>			 
			<footer id="rodape">
				<div id="mapaSite">
						
				</div>
			 </footer>
			 <div class="faixaRodape">
				<p>COPYRIGHT 2018-TODOS OS DIREITOS RESERVADOS</p>			
			 </div>			 
	    </div>
	</body>
</html>