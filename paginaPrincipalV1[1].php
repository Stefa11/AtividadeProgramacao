<link rel="stylesheet" type="text/css" media="all" href="css/stylesV1.css">
	<?php 
           
		    include("conexao.php");
            
			

		
		
	?>
		<div id="destaques">
		    <div id="main">
				<p><span class="texto">Disciplinas
</span></p>
				
				<div class="imagemPrincipal">
				<a href="index.php?pagina=busca&acao=maisInformacoes&id=<?=$imagem->id?>">
					<?php 
					echo "<img src='foto/".$imagem->foto."' alt='- banner1' width='425px' height='370px' /> "; ?></a>
					<div class="desc">
						<a href="#" class="collapse"></a>
						<div class="bloco">
							<?php echo " <p>".($imagem->nomeProd)."</p>"; ?>
						</div>
					</div>
				</div>
				<div class="overflow conteudoImagem">							
								<ul id="listaImagens">
					<?php 
						mysqli_data_seek($result,0);
						while($imagem = mysqli_fetch_object($result))
						{ ?>
									<li>
									<?php 
									echo "<a href='foto/".$imagem->foto."' title=\"{$imagem->id}\"><img src='foto/".$imagem->foto."' width='90px' height='60px' alt='Imagens' /></a>
										<div class='bloco'>
											<p>".($imagem->descricao)."</p>
										</div>
										"; ?>
									</li>
					<?php } ?>
								</ul>
				</div>
			</div>
			
			<div class='destaques'>
			<div class='imoveis'><p>Produtos em Promoção</p></div>
			<?php
				$result = mysqli_query($conexao,$consulta);
				
				if(mysqli_num_rows($result)<4){				
				?>				
			<div class="imagemLado"><img src="img/cprev.jpg" alt="Logotipo"/></div>
			<div class="imagemLadoDireito"><img src="img/cnext.jpg" alt="Logotipo"/></div>
			<?php
			}
			
			else
			{
			?>
						<div class="imagemLado"><a href="#" id="next"><img src="img/cprev.jpg" alt="Logotipo"/></a></div>
			<div class="imagemLadoDireito"><a href="#" id="prev"><img src="img/cnext.jpg" alt="Logotipo"/></a></div>
			<?php
			}
			?>
				<div id="carrosel">
					<ul><?php
							$cont = 0;
							while ($usuario = mysqli_fetch_object($result))
							{
								$id = $usuario->id; ?>
								
										<li>
								<?php echo "	<a href='index.php?pagina=busca&acao=maisInformacoes&id=$id'><img src='foto/".$usuario->foto."' width='130px' height='130px' alt='Logotipo' /></a>
										<div class='info'><p>Valor: ". $usuario->valor."<br />Quantidade:".$usuario->qtd."<br />Categoria:".$usuario->tipo."</p></div> "; ?>
									</li>
								
						<?php 	}   ?>
					</ul>
				</div>
		</div>
		    
		
			
		</div>
	</div>