<?php
	// 1. INICIA A SESSÃO (Deve ser a primeira linha do arquivo)
	if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}

	// 2. VETOR DE PERGUNTAS (Bloco 1)
	$perguntas = array (
		"Qual é a capital do estado do Pará?",
		"Qual é o rio mais longo que corta o território paraense e deságua próximo a Belém?",
		"O Pará pertence a qual região brasileira de acordo com o IBGE?",
		"Qual destas opções é a maior ilha fluviomarítima do mundo, localizada no Pará?",
		"Qual município paraense é famoso por abrigar a maior mina de ferro a céu aberto do mundo?",
		"O clima predominante no estado do Pará é o:",
		"Qual rodovia federal corta o Pará conectando a capital Belém a Brasília?",
		"Qual a principal cobertura vegetal nativa que cobre a maior parte do território do Pará?",
		"O Pará faz fronteira internacional com qual destes países?",
		"Qual o nome do segundo município mais populoso do estado do Pará?",
		"Qual destas bacias hidrográficas ocupa a maior parte do território paraense?",
		"Qual fruto típico do Pará representa uma das maiores forças da economia agrícola do estado?",
		"Qual importante usina hidrelétrica está instalada no Rio Tocantins, em território paraense?",
		"Como são chamadas as divisões regionais oficiais utilizadas pelo governo do Estado para planejamento?",
		"Qual município paraense é conhecido pelas praias de água doce banhadas pelo Rio Tapajós, como Alter do Chão?",
		"Em termos de extensão territorial, qual é a posição do Pará entre os estados do Brasil?",
		"Qual desses estados NÃO faz fronteira com o Pará?",
		"O pico mais alto do estado do Pará localiza-se em qual formação de relevo?",
		"Qual setor econômico ganhou enorme destaque no Pará com os projetos implantados na década de 1970 e 1980?",
		"Qual é o principal bioma encontrado no território paraense?",
		"O Estreito de Breves conecta quais importantes corpos d'água na região de ilhas?",
		"Qual cidade paraense desenvolveu-se fortemente devido à Estrada de Ferro Carajás?",
		"Qual município paraense é historicamente conhecido como a 'Capital do Tapajós'?",
		"Qual dessas formações vegetais ocorre na região litorânea e em áreas de maré no Pará?",
		"Qual das seguintes opções descreve corretamente o relevo predominante no Pará?",
		"O arquipélago do Marajó é banhado pelo Oceano Atlântico e por quais rios?",
		"Qual rodovia corta o sul do Pará ligando o estado ao Nordeste e ao Centro-Oeste?",
		"Qual das alternativas apresenta um impacto ambiental crítico frequentemente debatido na geografia do Pará?",
		"Qual destas cidades localiza-se na chamada Região Metropolitana de Belém?",
		"Qual a importância das Unidades de Conservação e Terras Indígenas no território paraense?",
		"Qual é o principal produto mineral de exportação do estado do Pará?",
		"Qual rio paraense é famoso por ser palco do fenômeno da Pororoca em sua foz?",
		"A que microrregião ou área geográfica pertence a famosa região da 'Calha Norte'?",
		"A rodovia Transamazônica recebe qual código de identificação federal?",
		"Qual município paraense destaca-se historicamente pela forte influência da colonização japonesa na agricultura?",
		"O porto de Vila do Conde, de grande importância para a exportação mineral, fica em qual município?",
		"Qual das alternativas representa uma característica demográfica marcante do Pará?",
		"Qual região do Pará sofreu intensa modificação na paisagem natural devido à expansão da fronteira agrícola e da soja?",
		"O Rio Xingu, importante curso d'água que corta o Pará, abriga qual usina hidrelétrica?",
		"Qual cidade no oeste paraense é o principal polo administrativo, econômico e educacional da região?",
				// --- BLOCO 2 (Perguntas 40 a 79) ---
		"Qual importante rodovia federal corta o oeste do Pará no sentido Norte-Sul, ligando Cuiabá a Santarém?",
		"O famoso 'Arco do Desmatamento' afeta predominantemente qual região geográfica do território paraense?",
		"Qual rodovia estadual paraense, conhecida como a 'Rodovia da Mineração', interliga os municípios do sudeste do estado?",
		"Qual é o tipo de vegetação adaptada a solos alagados e salinos que domina a foz do rio Amazonas no Pará?",
		"O município de Oriximiná, no oeste paraense, destaca-se mundialmente pela extração de qual minério?",
		"A divisa natural entre os estados do Pará e do Maranhão na porção litorânea é feita por qual rio?",
		"Qual a maior região metropolitana do estado do Pará em densidade demográfica e importância política?",
		"Qual importante acidente geográfico do relevo paraense funciona como um divisor de águas entre as bacias do sul do estado?",
		"A Zona Bragantina, localizada no Nordeste Paraense, historicamente se destacou por qual atividade econômica?",
		"Qual município paraense abriga a famosa Vila de Joanes, sítio histórico e arqueológico na Ilha de Marajó?",
		"O fenômeno natural da Pororoca no Pará é causado por qual processo geográfico?",
		"Qual atividade agropecuária é a principal responsável pela alteração da paisagem e abertura de áreas no sul do Pará?",
		"Qual o nome do canal que separa a Ilha de Marajó do continente na porção sul/sudeste?",
		"Qual etnia indígena dá nome a uma das maiores Reservas Extrativistas (RESEX) e terras demarcadas no vale do Rio Xingu?",
		"O Pará possui uma faixa litorânea voltada para qual oceano?",
		"A produção paraense de Dendê (óleo de palma) está concentrada fortemente em qual região do estado?",
		"Qual município paraense abriga a maior densidade de indústrias voltadas ao beneficiamento de alumínio Albras/Alunorte?",
		"Qual município paraense faz fronteira direta com o estado do Tocantins e é um forte polo pecuário do sul do estado?",
		"Qual das seguintes unidades de conservação paraenses possui proteção integral e proíbe atividades extrativistas comerciais?",
		"Qual o principal meio de transporte utilizado pela população para integração entre Belém e o arquipélago do Marajó?",
		"Qual curso d'água serve de limite natural e fronteira política entre o Pará e o estado do Amazonas a oeste?",
		"A expansão da cultura da soja no Pará ganhou grande impulso logístico com a construção de qual terminal portuário?",
		"Qual o nome do principal aquífero que abastece com água subterrânea a microrregião de Santarém e o oeste do estado?",
		"Qual município do Nordeste Paraense é amplamente conhecido por sua forte produção histórica de pimenta-do-reino?",
		"A Serra do Cachimbo, importante formação geomorfológica do Pará, localiza-se em qual porção do território?",
		"Qual a principal característica do regime de chuvas na maior parte do território do estado do Pará?",
		"O município de Almeirim, no norte do Pará, ficou mundialmente conhecido na geografia econômica devido a qual megaprojeto?",
		"Qual rodovia federal cruza o Pará de Leste a Oeste, cortando municípios como Altamira e Marabá?",
		"Qual cidade paraense destaca-se no cenário nacional como o maior polo de produção de cacau do Brasil?",
		"Qual das seguintes etnias indígenas possui território tradicional demarcado na região do Alto Rio Guamá?",
		"O clima do Pará, embora majoritariamente superúmido, apresenta uma estação seca mais acentuada em qual porção geográfica?",
		"Qual acidente geográfico de relevo no Pará é famoso por abrigar cavernas e formações rochosas na região de Altamira?",
		"A atividade de extração de madeira ilegal no Pará pressiona severamente os limites de qual tipo de área protegida?",
		"Qual cidade paraense localiza-se na confluência (encontro) dos rios Tocantins e Itacaiúnas?",
		"Qual baía contorna a cidade de Belém e serve de escoamento para os rios Guamá e Moju?",
		"A usina hidrelétrica de Belo Monte foi construída em qual queda d'água natural do Rio Xingu?",
		"Qual município do Marajó destaca-se como o maior produtor de queijo do Marajó e detém grande rebanho bubalino?",
		"O distrito de Mosqueiro, pertencente ao município de Belém, possui praias fluviais com ondas devido a qual fator?",
		"Qual rodovia estadual interliga o município de Castanhal diretamente a várias cidades do Nordeste Paraense?",
		"Qual o principal minério extraído no município de Paragominas, que é enviado por mineroduto até Barcarena?"

	);
	
	// 3. ALTERNATIVAS DO BLOCO 1
	$alternativas0 = array ("Manaus", "Macapá", "Belém", "Santarém");
	$alternativas1 = array ("Rio Amazonas", "Rio Tapajós", "Rio Xingu", "Rio Tocantins");
	$alternativas2 = array ("Região Nordeste", "Região Norte", "Região Centro-Oeste", "Região Sudeste");
	$alternativas3 = array ("Ilha de Maracá", "Ilha de Santana", "Ilha de Marajó", "Ilha do Bananal");
	$alternativas4 = array ("Parauapebas", "Marabá", "Oriximiná", "Castanhal");
	$alternativas5 = array ("Semiárido", "Subtropical", "Equatorial úmido", "Tropical de altitude");
	$alternativas6 = array ("BR-101", "BR-163", "BR-230", "BR-010");
	$alternativas7 = array ("Cerrado", "Caatinga", "Mata Atlântica", "Floresta Amazônica");
	$alternativas8 = array ("Colômbia", "Venezuela", "Suriname", "Peru");
	$alternativas9 = array ("Santarém", "Ananindeua", "Marabá", "Castanhal");
	$alternativas10 = array ("Bacia do Paraná", "Bacia do São Francisco", "Bacia Amazônica", "Bacia do Parnaíba");
	$alternativas11 = array ("Guaraná", "Açaí", "Cupuaçu", "Castanha-do-Pará");
	$alternativas12 = array ("Usina de Belo Monte", "Usina de Itaipu", "Usina de Tucuruí", "Usina de Jirau");
	$alternativas13 = array ("Mesorregiões", "Regiões de Integração", "Microrregiões", "Zonas Francas");
	$alternativas14 = array ("Salinópolis", "Marudá", "Santarém", "Bragança");
	$alternativas15 = array ("1º lugar", "2º lugar", "3º lugar", "4º lugar");
	$alternativas16 = array ("Amazonas", "Amapá", "Maranhão", "Piauí");
	$alternativas17 = array ("Serra dos Carajás", "Serra do Tumucumaque", "Serra do Cachimbo", "Planalto Central");
	$alternativas18 = array ("Indústria automobilística", "Mineração industrial", "Polo tecnológico", "Turismo internacional");
	$alternativas19 = array ("Cerrado", "Pantanal", "Amazônia", "Caatinga");
	$alternativas20 = array ("Rio Amazonas e Rio Tocantins", "Rio Tapajós e Rio Xingu", "Rio Tocantins e Rio Gurupi", "Rio Paraguai e Rio Paraná");
	$alternativas21 = array ("Paragominas", "Marabá", "Breves", "Castanhal");
	$alternativas22 = array ("Itaituba", "Santarém", "Alenquer", "Juruti");
	$alternativas23 = array ("Cocais", "Caatinga", "Manguezal", "Restinga Seca");
	$alternativas24 = array ("Montanhoso com grandes altitudes", "Predomínio de planícies, depressões e baixos planaltos", "Predomínio de cordilheiras escarpadas", "Grandes planaltos serranos acima de 3000 metros");
	$alternativas25 = array ("Rio Amazonas e Rio Tocantins", "Rio Tapajós e Rio Xingu", "Rio Negro e Rio Solimões", "Rio Trombetas e Rio Jari");
	$alternativas26 = array ("BR-163", "BR-230", "BR-010", "BR-153");
	$alternativas27 = array ("Desertificação severa", "Derretimento de geleiras", "Desmatamento e queimadas", "Acidificação extrema das chuvas urbanas");
	$alternativas28 = array ("Santarém", "Marabá", "Ananindeua", "Paragominas");
	$alternativas29 = array ("Preservação ambiental e garantia de direitos", "Apenas atração de turismo", "Isolamento total do estado", "Substituição por eucalipto");
	$alternativas30 = array ("Ouro", "Bauxita", "Minério de Ferro", "Cobre");
	$alternativas31 = array ("Rio Tapajós", "Rio Tocantins", "Rio Amazonas", "Rio Guamá");
	$alternativas32 = array ("Sul do Pará", "Norte do Rio Amazonas", "Região Metropolitana de Belém", "Marajó");
	$alternativas33 = array ("BR-101", "BR-316", "BR-163", "BR-230");
	$alternativas34 = array ("Tomé-Açu", "Castanhal", "Capanema", "Cametá");
	$alternativas35 = array ("Belém", "Ananindeua", "Barcarena", "Benevides");
	$alternativas36 = array ("População concentrada no sul", "População urbana menor", "Concentração na capital e eixos rodoviários/fluviais", "Ausência de migrações");
	$alternativas37 = array ("Marajó", "Calha Norte", "Sul e Sudeste Paraense", "Nordeste Paraense");
	$alternativas38 = array ("Usina de Tucuruí", "Usina de Belo Monte", "Usina de Balbina", "Usina de Estreito");
	$alternativas39 = array ("Santarém", "Marabá", "Altamira", "Redenção");
		// --- BLOCO 2 (Alternativas 40 a 79) ---
	$alternativas40 = array ("BR-010", "BR-163", "BR-230", "BR-316");
	$alternativas41 = array ("Norte e Marajó", "Nordeste Paraense", "Sul e Sudeste Paraense", "Calha Norte");
	$alternativas42 = array ("PA-150", "PA-279", "PA-444", "PA-252");
	$alternativas43 = array ("Cerrado de Altitude", "Vegetação de Mangue", "Caatinga", "Campos de Terra Firme");
	$alternativas44 = array ("Manganês", "Ouro", "Bauxita", "Níquel");
	$alternativas45 = array ("Rio Tocantins", "Rio Gurupi", "Rio Araguaia", "Rio Pará");
	$alternativas46 = array ("R.M. de Santarém", "R.M. de Marabá", "R.M. de Belém", "R.M. de Castanhal");
	$alternativas47 = array ("Serra dos Carajás", "Serra do Cachimbo", "Planalto da Borborema", "Serra de Tumucumaque");
	$alternativas48 = array ("Pecuária extensiva", "Agricultura da borracha", "Policultura e colonização agrícola", "Mineração de ferro");
	$alternativas49 = array ("Breves", "Salvaterra", "Soure", "Anajás");
	$alternativas50 = array ("Efeito estufa global", "Encontro das águas de rios", "Encontro das águas fluviais com as correntes marítimas", "Construção de barragens");
	$alternativas51 = array ("Pecuária Bovinocultura", "Plantio de Maçã", "Cultivo de Trigo", "Viticultura");
	$alternativas52 = array ("Canal de Breves", "Rio Guamá", "Baía de Marajó", "Furo do Limão");
	$alternativas53 = array ("Kayapó", "Tembé", "Anambé", "Suruí");
	$alternativas54 = array ("Oceano Pacífico", "Oceano Atlântico", "Oceano Índico", "Mar do Caribe");
	$alternativas55 = array ("Oeste Paraense", "Sudeste Paraense", "Nordeste Paraense", "Arquipélago do Marajó");
	$alternativas56 = array ("Microrregião de Belém", "Microrregião de Cametá", "Microrregião de Guamá", "Barcarena");
	$alternativas57 = array ("Santana do Araguaia", "Altamira", "Paragominas", "Oriximiná");
	$alternativas58 = array ("Parque Nacional da Amazônia", "RESEX Juruá", "APA do Marajó", "Floresta Nacional");
	$alternativas59 = array ("Transporte Rodoviário", "Transporte Ferroviário", "Transporte Hidroviário", "Transporte Aéreo");
	$alternativas60 = array ("Rio Gurupi", "Rio Nhamundá", "Rio Araguaia", "Rio Tapajós");
	$alternativas61 = array ("Porto de Vila do Conde", "Porto de Santarém", "Porto de Óbidos", "Porto de Belém");
	$alternativas62 = array ("Aquífero Alter do Chão", "Aquífero Guarani", "Aquífero Cabeças", "Aquífero Itapecuru");
	$alternativas63 = array ("Tomé-Açu", "Castanhal", "Capanema", "Bragança");
	$alternativas64 = array ("Extremo Norte", "Extremo Sul", "Nordeste Paraense", "Litoral Atlântico");
	$alternativas65 = array ("Inexistência de chuvas", "Chuvas bem distribuídas o ano todo", "Altos índices pluviométricos na maior parte do ano", "Seca severa de 8 meses");
	$alternativas66 = array ("Projeto Jari", "Projeto Carajás", "Projeto Trombetas", "Projeto Alunorte");
	$alternativas67 = array ("BR-163", "BR-316", "BR-230", "BR-010");
	$alternativas68 = array ("Medicilândia", "Marabá", "Belém", "Santarém");
	$alternativas69 = array ("Tembé", "Munduruku", "Xikrin", "Gavião");
	$alternativas70 = array ("Extremo Norte", "Leste e Nordeste", "Sul e Sudeste", "Calha Norte");
	$alternativas71 = array ("Planalto de Carajás", "Formação Itaituba", "Serra do Cachimbo", "Grutas de Altamira");
	$alternativas72 = array ("Propriedades Privadas", "Terras Indígenas e Unidades de Conservação", "Áreas Industriais urbanas", "Zonas Francas comerciais");
	$alternativas73 = array ("Parauapebas", "Marabá", "Redenção", "Xinguara");
	$alternativas74 = array ("Baía do Guajará", "Baía de Marajó", "Baía do Sol", "Baía de São Marcos");
	$alternativas75 = array ("Volta Grande do Xingu", "Cachoeira de Tucuruí", "Estreito do Rio Xingu", "Foz do Rio Iriri");
	$alternativas76 = array ("Afuá", "Soure", "Chaves", "Muaná");
	$alternativas77 = array ("Proximidade com o Oceano Atlântico e amplitude da Baía de Marajó", "Passagem de navios cargueiros", "Ventos vindos do Cerrado", "Profundidade artificial do rio");
	$alternativas78 = array ("PA-150", "PA-324", "PA-136", "PA-256");
	$alternativas79 = array ("Cobre", "Níquel", "Bauxita", "Ouro");
	
	// 4. GABARITO DO BLOCO 1
	$respostas = array (
		"Belém", "Rio Amazonas", "Região Norte", "Ilha de Marajó", "Parauapebas",
		"Equatorial úmido", "BR-010", "Floresta Amazônica", "Suriname", "Ananindeua",
		"Bacia Amazônica", "Açaí", "Usina de Tucuruí", "Regiões de Integração", "Santarém",
		"2º lugar", "Piauí", "Serra do Tumucumaque", "Mineração industrial", "Amazônia",
		"Rio Amazonas e Rio Tocantins", "Marabá", "Santarém", "Manguezal",
		"Predomínio de planícies, depressões e baixos planaltos", "Rio Amazonas e Rio Tocantins",
		"BR-153", "Desmatamento e queimadas", "Ananindeua",
		"Preservação ambiental e garantia de direitos", "Minério de Ferro",
		"Rio Amazonas", "Norte do Rio Amazonas", "BR-230", "Tomé-Açu", "Barcarena",
		"Concentração na capital e eixos rodoviários/fluviais", "Sul e Sudeste Paraense",
		"Usina de Belo Monte", "Santarém",
				// --- BLOCO 2 (Gabarito 40 a 79) ---
		"BR-163",
		"Sul e Sudeste Paraense",
		"PA-150",
		"Vegetação de Mangue",
		"Bauxita",
		"Rio Gurupi",
		"R.M. de Belém",
		"Serra do Cachimbo",
		"Policultura e colonização agrícola",
		"Salvaterra",
		"Encontro das águas fluviais com as correntes marítimas",
		"Pecuária Bovinocultura",
		"Canal de Breves",
		"Kayapó",
		"Oceano Atlântico",
		"Nordeste Paraense",
		"Barcarena",
		"Santana do Araguaia",
		"Parque Nacional da Amazônia",
		"Transporte Hidroviário",
		"Rio Nhamundá",
		"Porto de Santarém",
		"Aquífero Alter do Chão",
		"Tomé-Açu",
		"Extremo Sul",
		"Altos índices pluviométricos na maior parte do ano",
		"Projeto Jari",
		"BR-230",
		"Medicilândia",
		"Tembé",
		"Sul e Sudeste",
		"Grutas de Altamira",
		"Terras Indígenas e Unidades de Conservação",
		"Marabá",
		"Baía do Guajará",
		"Volta Grande do Xingu",
		"Soure",
		"Proximidade com o Oceano Atlântico e amplitude da Baía de Marajó",
		"PA-136",
		"Bauxita"

	);

	// 5. VARIÁVEIS DE CONTROLE DE ESTADO E FLUXO
	$total_perguntas = count($perguntas);
	$mostrar_feedback = false; 
	$status_acerto = false;
	$resposta_correta = "";
	$imagem_feedback = ""; // Variável que receberá o caminho final da imagem (.png ou .jpg)

	// Inicializa as chaves de sessão caso não existam na memória do servidor
	if (!isset($_SESSION['respondidas'])) { $_SESSION['respondidas'] = array(); }
	if (!isset($_SESSION['pontos'])) { $_SESSION['pontos'] = 0; }
	if (!isset($_SESSION['tentativas_rodada'])) { $_SESSION['tentativas_rodada'] = 0; }

	// AÇÃO A: O USUÁRIO RESPONDEU À QUESTÃO
	if (isset($_POST["BotaoResponder"])) {
		$pos = $_POST["pos"];
		$resposta_aluno = isset($_POST["resposta"]) ? $_POST["resposta"] : "";
		$resposta_correta = $respostas[$pos];
		
		$mostrar_feedback = true; 
		$_SESSION['tentativas_rodada']++; 

		if (!in_array($pos, $_SESSION['respondidas'])) {
			$_SESSION['respondidas'][] = $pos;
		}

		if ($resposta_correta == $resposta_aluno) {
			$status_acerto = true;
			$_SESSION['pontos']++; 
		} else {
			$status_acerto = false;
		}

		// --- LÓGICA DE EXIBIÇÃO DAS IMAGENS ---
		$pontos_atuais = $_SESSION['pontos'];
		$tentativas_atuais = $_SESSION['tentativas_rodada'];
		$nome_base = ""; 

		// Regra 1: Se for o FIM do jogo (Atingiu a 10ª tentativa)
		if ($tentativas_atuais >= 10) {
			if ($pontos_atuais >= 7) {
				$nome_base = "03"; // medalha/troféu de campeão
			} else {
				$nome_base = "04"; // tela de tente novamente
			}
		} 
		// Regra 2: Se for no MEIO do jogo (Tentativas de 1 a 9)
		else {
			if ($pontos_atuais == 3) {
				$nome_base = "01"; // conquista de 3 pontos
			} elseif ($pontos_atuais == 5) {
				$nome_base = "02"; // conquista de 5 pontos
			}
		}

		// Se a lógica definiu um número, o PHP procura o formato correto na pasta 'img'
		if (!empty($nome_base)) {
			if (file_exists("img/" . $nome_base . ".png")) {
				$imagem_feedback = "img/" . $nome_base . ".png";
			} elseif (file_exists("img/" . $nome_base . ".jpg")) {
				$imagem_feedback = "img/" . $nome_base . ".jpg";
			} elseif (file_exists("img/" . $nome_base . ".jpeg")) {
				$imagem_feedback = "img/" . $nome_base . ".jpeg";
			}
		}
	} 
	// AÇÃO B: O USUÁRIO VIU O FEEDBACK E CLICOU EM AVANÇAR
	elseif (isset($_POST["BotaoProxima"])) {
		if ($_SESSION['tentativas_rodada'] >= 10) {
			$_SESSION['tentativas_rodada'] = 0;
			$_SESSION['pontos'] = 0;
			$_SESSION['respondidas'] = array();
		}
		$pos = GeraPerguntaSemRepetir($total_perguntas);
	}
	// AÇÃO C: PRIMEIRO ACESSO OU PULAR PERGUNTA
	else {
		$pos = GeraPerguntaSemRepetir($total_perguntas);
	}




	// 6. SINCRONIZAÇÃO E FUNÇÃO DO MOTOR DE SORTEIO
	$perg = $pos;
	function GeraPerguntaSemRepetir($total) {
		$disponiveis = array_diff(range(0, $total - 1), $_SESSION['respondidas']);
		if (empty($disponiveis)) {
				$_SESSION['respondidas'] = array();
				$disponiveis = range(0, $total - 1);
		}
		return $disponiveis[array_rand($disponiveis)];
	}
?>


<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link href="estilo.css" rel="stylesheet" type="text/css" media="all">		
		<title>Pará Quiz</title>
		<style>
			/* Estilos específicos para o painel de feedback visual */
			.box-feedback { padding: 25px; border-radius: 8px; margin: 20px auto; border: 2px solid; text-align: center; max-width: 550px; }
			.acertou { background-color: #e6f4ea; border-color: #137333; color: #137333; }
			.errou { background-color: #fce8e6; border-color: #c5221f; color: #c5221f; }
			.btn-avancar { padding: 12px 30px; font-size: 16px; background-color: #1a73e8; color: white; border: none; border-radius: 4px; cursor: pointer; font-weight: bold; margin-top: 15px; }
			.btn-avancar:hover { background-color: #1557b0; }
			.radio-container { display: inline-block; text-align: left; margin: 15px 0; width: 100%; max-width: 500px; }
			.radio-label { display: block; background: #f8f9fa; padding: 12px; margin-bottom: 8px; border: 1px solid #dadce0; border-radius: 4px; cursor: pointer; font-size: 15px; transition: 0.2s; }
			.radio-label:hover { background: #f1f3f4; border-color: #bdc1c6; }
			.radio-input { margin-right: 10px; transform: scale(1.2); vertical-align: middle; }
		</style>
	</head>
	
	<body>
		<div id="container">
			<header id="cabecalho"><img src="layout/01.png" alt="Cabeçalho"/></header>			
			<div id="corpo">
				<nav><img src="layout/02.png" alt="Navegação"/></nav>
				<section>
					<header class="cabecalho_artigo" align="center"><h1>Quiz Sobre o Pará</h1></header>
					
					<article class="artigo" align="center">
					
											<?php if ($mostrar_feedback): ?>
						<!-- TELA 1: ESTADO DE FEEDBACK (Exibido apenas após clicar em Responder) -->
						<div class="box-feedback <?php echo $status_acerto ? 'acertou' : 'errou'; ?>">
							<?php if ($status_acerto): ?>
								<h1>🎉 Muito Bem! Você acertou.</h1>
								<p>Sua resposta está correta!</p>
							<?php else: ?>
								<h1>❌ Que pena! Você errou.</h1>
								<p>A alternativa correta era: <strong><?php echo $resposta_correta; ?></strong></p>
							<?php endif; ?>
							
							<hr style="border: 0; border-top: 1px solid #ddd; margin: 15px 0;">
							<h3>📊 Seu Desempenho Atual:</h3>
							<p style="font-size: 16px;">Você acertou <strong><?php echo $_SESSION['pontos']; ?></strong> de <strong><?php echo $_SESSION['tentativas_rodada']; ?></strong> perguntas respondidas.</p>
							
							<?php 
								// Exibe a imagem do Yoda ou demais conquistas
								if (!empty($imagem_feedback)) {
									echo "<div style='margin: 20px 0;'>";
									echo "<img src='" . $imagem_feedback . "' alt='Conquista' style='max-width: 180px; height: auto; border-radius: 8px;'><br>";
									echo "</div>";
								}
							?>
							
							<!-- Botão com estilo inline puro e forçado para garantir que apareça na tela -->
							<form method="post" action="">
								<input type="submit" name="BotaoProxima" value="<?php echo ($_SESSION['tentativas_rodada'] >= 10) ? 'Concluir Simulado e Recomeçar ➔' : 'Ir para a Próxima Pergunta ➔'; ?>" style="padding: 12px 30px; font-size: 16px; background-color: #1a73e8; color: white; border: none; border-radius: 4px; cursor: pointer; font-weight: bold; margin-top: 10px; display: inline-block;" />
							</form>
						</div>

					<?php else: ?>


						<!-- TELA 2: ESTADO DE JOGO (Exibido por padrão e ao avançar as perguntas) -->
						<h2>Responda as perguntas (Progresso: <?php echo $_SESSION['tentativas_rodada'] + 1; ?> de 10):</h2>
						<h3 style="font-size: 18px; margin: 20px 0; color: #202124;">Pergunta: <?php echo $perguntas[$pos]; ?></h3>
						
						<form method="post" action="">
							Dicas (Selecione a alternativa correta):<br><br>
							
							<div class="radio-container">
								<?php 
									$nome_array = "alternativas" . $perg;
									$alternativas_atuais = $$nome_array;
									
									if (isset($alternativas_atuais)) {
										echo "<label class='radio-label'><input type='radio' name='resposta' class='radio-input' value='" . $alternativas_atuais[0] . "' required> <strong>A)</strong> " . $alternativas_atuais[0] . "</label>";
										echo "<label class='radio-label'><input type='radio' name='resposta' class='radio-input' value='" . $alternativas_atuais[1] . "'> <strong>B)</strong> " . $alternativas_atuais[1] . "</label>";
										echo "<label class='radio-label'><input type='radio' name='resposta' class='radio-input' value='" . $alternativas_atuais[2] . "'> <strong>C)</strong> " . $alternativas_atuais[2] . "</label>";
										echo "<label class='radio-label'><input type='radio' name='resposta' class='radio-input' value='" . $alternativas_atuais[3] . "'> <strong>D)</strong> " . $alternativas_atuais[3] . "</label>";
									}
								?>
							</div>
							
							<input type="hidden" name="pos" value="<?php echo $pos; ?>">
							<br><input type="submit" name="BotaoResponder" value="Responder" style="padding: 10px 25px; font-size: 15px; cursor:pointer;" /><br>
						</form>

						<form method="post" action="">
							<br><input type="submit" name="BotaoProxima" value="Pular Pergunta" /><br><br>
						</form>
					<?php endif; ?>
		
					</article>
					<footer class="rodape_artigo"></footer>
				</section>
				<aside id="propaganda"><img src="layout/03.png" alt="Propaganda"/></aside>
			</div>
			<footer id="rodape"><img src="layout/04.jpg" alt="Rodapé"></footer>
		</div>
	</body>
</html>