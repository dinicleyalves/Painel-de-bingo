<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<title>BINGO</title>
		

		<link href="960.min.css" rel="stylesheet" type="text/css" />
		<link href="bingo.css" rel="stylesheet" type="text/css" />

		<script type="text/javascript" src="jquery-1.11.3.js"></script>
		<script type="text/javascript" src="bingo.js"></script>


	</head>


	<body>

		<?php

		$id_sorteio = 0;

		//Carregar o último Id de sorteio...
		//Está sendo utilizado o PDO do php....

		$con = new PDO("mysql:host=localhost;dbname=bingo", "root", "");

		// configuraçôes que estavam em meu localhost

		// db_name = bingo_bd
		// usuario = root
		// senha = ''

		$rs = $con->query("SELECT id_sorteio FROM sorteio");
		while($row = $rs->fetch(PDO::FETCH_OBJ)){
			$id_sorteio = $row->id_sorteio . "<br />";
		}

		//Gera o id do novo sorteio...

		$id_sorteio = $id_sorteio + 1;

		$stmt = $con->prepare("INSERT INTO sorteio(id_sorteio) VALUES(?)");
		$stmt->bindParam(1,$id_sorteio);
		$stmt->execute();

		?>

		<div class="container_12">

			<h2>Gerando as cartelas</h2>

			<br>
			<h3>Sorteio de numero : <span id="sorteio_numero"><?php echo $id_sorteio; ?></span></h3>

			<?php

				// Loop para gerar as 5 cartelas
				for ($t = 0; $t <= 4; $t++)
				{

					$b = array();
					$in = array();
					$n = array();
					$g = array();
					$o = array();

					$numeros_cartela = array();

					// loops para gerar os 5 numeros para cada letra

					for ($i = 0; $i <= 5; $i++)
					{
						do {
							$val = rand(1,15);
						} while (in_array($val,$b));
						if (strlen($val) == 1)
							{ 
								$val = '0'.$val;
							} // adiciona 0 antes do número para exibir corretamente
							array_push($numeros_cartela, $val);
						$b[(100+$i)] = $val;
						
					}

					for ($j = 0; $j <= 5; $j++)
					{
						do {
							$val = rand(16,30);
						} while (in_array($val,$in));
						array_push($numeros_cartela, $val);
						$in[(100+$j)] = $val;
					}

					for ($i = 0; $i <= 5; $i++)
					{
						do {
							$val = rand(31,45);
						} while (in_array($val,$n));
						array_push($numeros_cartela, $val);
						$n[(100+$i)] = $val;
					}

					for ($i = 0; $i <= 5; $i++)
					{
						do {
							$val = rand(46,60);
						} while (in_array($val,$g));
						array_push($numeros_cartela, $val);
						$g[(100+$i)] = $val;
					}

					for ($i = 0; $i <= 5; $i++)
					{
						do {
							$val = rand(61,99);
						} while (in_array($val,$o));
						array_push($numeros_cartela, $val);
						$o[(100+$i)] = $val;
 
					}

					//metodo utilizado para que as cartelas ficarem salvas de maneira mais organizada no bd 
					$nums_sorteados = implode(", ", $numeros_cartela); 
					//var_dump($nums_sorteados);

				//Salvar a cartela no bando de dados...

				$stmt_cartela = $con->prepare("INSERT INTO cartelas_bingo( id_sorteio, valores_cartela) VALUES( ?, ?)");
				$stmt_cartela->bindParam(1,$id_sorteio);
				$stmt_cartela->bindParam(2,$nums_sorteados);
				$stmt_cartela->execute();



				$tal = sprintf("%02s",$t+1);
				// exibição simples dos numeros via colunas...

				echo "
					  <div class='grid_4'>
						<table class='cartela_inteira cartela_".$tal."'>
						    	<tr>
						    		<td>
						    			 <p align=\"center\"><b><font face=\"Arial\">Cartela ".$tal."</font></b></p>
						    		</td>
						    	</tr>
						           
						        <tr class='tableLinha_0'>
						        	<td class='celula celula_0'><p>$b[101]</span></p></td>
						            <td class='celula celula_1'><p>$in[101]</span></p></td>
						            <td class='celula celula_2'><p>$n[101]</span></p></td>
						            <td class='celula celula_3'><p>$g[101]</span></p></td>
						            <td class='celula celula_4'><p>$o[101]</span></p></td>
						        </tr>
						       <tr class='tableLinha_1'>
						       		<td class='celula celula_5'><p>$b[102]</span></p></td>
						            <td class='celula celula_6'><p>$in[102]</span></p></td>
						            <td class='celula celula_7'><p>$n[102]</span></p></td>
						            <td class='celula celula_8'><p>$g[102]</span></p></td>
						            <td class='celula celula_9'><p>$o[102]</span></p></td>
						        </tr>
						        <tr class='tableLinha_2'>
						        	<td class='celula celula_10'><p>$b[103]</span></p></td>
						            <td class='celula celula_11'><p>$in[103]</span></p></td>
						            <td class='celula celula_12'><p>$n[103]</span></p></td>
						            <td class='celula celula_13'><p>$g[103]</span></p></td>
						            <td class='celula celula_14'><p>$o[103]</span></p></td>
						       </tr>
						       <tr class='tableLinha_3'>
						       		<td class='celula celula_15'><p>$b[104]</span></p></td>
						            <td class='celula celula_16'><p>$in[104]</span></p></td>
						            <td class='celula celula_17'><p>$n[104]</span></p></td>
						            <td class='celula celula_18'><p>$g[104]</span></p></td>
						            <td class='celula celula_19'><p>$o[104]</span></p></td>
						        </tr>
						        <tr class='tableLinha_4'>
						        	<td class='celula celula_20'><p>$b[105]</span></p></td>
						            <td class='celula celula_21'><p>$in[105]</span></p></td>
						            <td class='celula celula_22'><p>$n[105]</span></p></td>
						            <td class='celula celula_23'><p>$g[105]</span></p></td>
						            <td class='celula celula_24'><p>$o[105]</span></p></td>
						        </tr>
						     
					    </table>
				   	  </div>
				      " ;
					}

			?>	


		</div>

		<div class="clear"></div>

		<div class="container_12">
			<h1 id="resultado_bingo"></h1>
		</div>
		

		<div class="clear"></div>

		<div class="container_12 executar_sorteio">

			<h2>Executar o sorteio</h2>

			<div>
				
				<button id="sortear">Sortear numero</button>

				<div class="clear"></div>

				<div class="num_sorteados">
					<h3 id="lista_sorteados"><h3>
				</div>

				<button id="apagar_btn">Resetar sorteio</button>

				<div class="clear"></div>

				<div class="link_resultados">
					<h3 id=""><a href="resultados.php">Listar sorteios realizados</a><h3>
				</div>

			</div>
				

		</div>


	<body/>


<html>