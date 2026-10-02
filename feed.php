<?php
	
	$respostas = array (
		"Belém", "Rio Amazonas", "Região Norte", "Ilha de Marajó", "Parauapebas",
		"Equatorial úmido", "BR-010", "Floresta Amazônica", "Suriname", "Ananindeua",
		"Bacia Amazônica", "Açaí", "Usina de Tucuruí", "Regiões de Integração", "Santarém",
		"2º lugar", "Piauí", "Serra do Tumucumaque", "Mineração industrial", "Amazônia",
		"Rio Amazonas e Rio Tocantins", "Marabá", "Santarém", "Manguezal",
		"Predomínio de planícies, depressões e baixos planaltos", "Rio Amazonas e Rio Tocantins",
		"BR-153", "Desmatamento e queimadas", "Ananindeua",
		"Preservação ambientais", "Minério de Ferro",
		"Rio Amazonas", "Norte do Rio Amazonas", "BR-230", "Tomé-Açu", "Barcarena",
		"Concentração na capital e eixos rodoviários/fluviais", "Sul e Sudeste Paraense",
		"Usina de Belo Monte", "Santarém"
	);
	
	
	$pos = 0;
	$mensagem = "";
	$pontos = fopen("contador.txt","r");
	$cont = fread($pontos, filesize("contador.txt"));
	fclose($pontos);
	$msg = "";
	$chances = fopen("tentativas.txt","r");
	$contachance = fread($chances, filesize("tentativas.txt"));
	
	if(isset($_POST["BotaoNovaPergunta"])){
		$pos = GeraPergunta(10);
	}
	if(isset($_POST["BotaoResponder"])){
		$pos = $_POST["pos"];
		$resposta = $respostas[$pos];
		if($resposta == $_POST["resposta"]){
			$chances = fopen("tentativas.txt","w");
			$contachance++;
			fputs($chances,$contachance);
			fclose($chances);
			$pos = GeraPergunta(10);
			$mensagem = "<h1>Muito Bem! Você acertou.</h1>";
			
			if($cont<=9){
				$pontos = fopen("contador.txt","w");
				$cont++;
				fputs($pontos,$cont);
				fclose($pontos);
			}else{
				$pontos = fopen("contador.txt","w");
				
				$cont= 0;
				fputs($pontos,$cont);
				fclose($pontos);
			}
				
			
		}else if($resposta != $_POST["resposta"]){
			$chances = fopen("tentativas.txt","w");
			$contachance++;
			fputs($chances,$contachance);
			fclose($chances);
			$pos = GeraPergunta(10);
			$mensagem = "<h1>Que pena! Você errou.</h1>";
		}else if($contachance==10 and $cont<10){
			$mensagem = "<h1>Suas Chances acabaram!</h1>";
		}else{
			
		}
	}else{
		$pos = GeraPergunta(10);
	}
	
	function GeraPergunta ($vetor1){
		return rand (0, $vetor1-1);
	}
?>	


<!DOCTYPE html!>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link href="estilo.css" rel="stylesheet" type="text/css" media="all">		
		<title>Elementos da Estrutura</title>
		
	</head>
	<body>
		<div id="container">
			<header id="cabecalho"><img src ="layout/01.png"/></header>			
			<div id="corpo">
				<nav><img src ="layout/02.png"/></nav>
				<section>
					<header class="cabecalho_artigo" align="center"><h1>Quiz Sobre o Pará</h1></header>
					<article class="artigo" align="center">
					<h2><?php echo $mensagem; ?></h2>
				<h3>Você possui <?php include("contador.txt"); ?> pontos</h3>
				
				 <?php if($contachance==10 and $cont<10){
							$pontos = fopen("contador.txt","w");
							$cont= 0;
							fputs($pontos,$cont);
							fclose($pontos);
							
							$chances = fopen("tentativas.txt","w");
							$contachance=0;
							fputs($chances,$contachance);
							fclose($chances);
							echo "<img src = img/04.jpg />";
						}else If($cont==3){
							
							echo "<img src = img/01.jpg />";
						}else If($cont==6){
							echo "<img src = img/02.jpg />";
						
						}else if($cont==10){
							$pontos = fopen("contador.txt","w");
							$cont= 0;
							fputs($pontos,$cont);
							fclose($pontos);
							
							$chances = fopen("tentativas.txt","w");
							$contachance=0;
							fputs($chances,$contachance);
							fclose($chances);
							echo "<img src = img/03.jpg />";
						}else{
							
						}
				?>
				<form method="post" action="index.php">
				<input type="submit" name="BotaoNovaPergunta" value="Próxima Pergunta" /><br><br>
				</form>
					</article>
					<footer class="rodape_artigo">footer</footer>
				</section>
				<aside id="propaganda"><img src ="layout/02.png"/></aside>
			</div>
			<footer id="rodape"><img src ="layout/04.jpg"</footer>		
		</div>
	</body>
</html>