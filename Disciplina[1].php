<?php    
	error_reporting(E_ERROR);
    session_start();
	include "conexao.php";
         //$conexao = mysqli_connect("localhost", "id2829238_root", "123mudar", "id2829238_cadastro") ;
	$nome = $_SESSION['sessaoNome'];
	if($_SESSION['sessaoCodigo'] == 0)
	{
		require('funcoes.php');
		direciona('index.php?pagina=login&acao=login');
		exit;
	}
	
?>
<link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
	
	
	<div id="produto">
		<h1><label>Cadastro de disciplinas</label></h1><br />	
			
					<p class="campoObg" >* Campos obrigatorios para cadastro de Produtos</p>
					<form id="cadastroProduto" name="cadastroProdutos" method="POST" action="index.php?pagina=validarCadastroProduto" onsubmit="" enctype="multipart/form-data">
					<label class="nomeP" >Nome *</label>
						<input type="text" id="nome_prod" name="nome_prod" maxlength="100" size="50"   /></br>
				
					<label class="qtd" >Quantidade de semestres *</label>
						<input type="text" class="qtd1" id="qtd_prod" name="qtd_prod" maxlength="40" size="5"   />
					<label class="valor">Valor mensalidade *</label>
						<input type="text" class="valor1" id="valor_prod" name="valor_prod" maxlength="20" size="5"   />							
					<label class="cliente">aluno *</label>
						<label class="cliente1">
					       <?php    

                            	echo $_SESSION['sessaoNome'];
	
                            ?>
                            </br>
								<select class="cat" name="cat_prod" id="cat_prod" >
									<option>Categoria</option>
									<option value="1">Humanas</option>
									<option value="2">Exatas</option>							
								</select>
					    
					    
				
					<label class="info">informocoes adicionais *</label></br>						
	                <textarea class="info1" id="desc_prod" name="desc_prod" cols="50" rows="6" maxlength="1000"></textarea><br /></br>
					
					
					<input class="btncad" value="Cadastrar" type="submit">
						
								
					</form>
					<form name="formprod"   method="post" action="index.php?pagina=cadastroDisciplina">
						
						<input class="btnsair" value="Cadastro de disciplinas" type="submit">	
					</form>	
	</div>
	