<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<title>BINGO - Resultados</title>
		

		<link href="960.min.css" rel="stylesheet" type="text/css" />
		<link href="bingo.css" rel="stylesheet" type="text/css" />

		<script type="text/javascript" src="jquery-1.11.3.js"></script>
		<script type="text/javascript" src="bingo.js"></script>

	</head>

 
	<body>


		<div class="container_12">

			<?php
				$id_sort = $_GET['id_sort'];
			?>

			<h2>Cartelas e resultados do sorteio : <?php echo  $id_sort; ?></h2>


			<table class='container_4 cartela_inteira'>

				<tr>
					<td>Id da artela  </td><td>Numeros</td>
				</tr>	

				<?php

					$con = new PDO("mysql:host=mysql.hostinger.com.br;dbname=bingo_bd", "root", "");

					$rs = $con->query("SELECT id_cartela, id_sorteio, valores_cartela FROM cartelas_bingo WHERE id_sorteio = ".$id_sort);
					while($row = $rs->fetch(PDO::FETCH_OBJ)){
						$Id_cartela = $row->id_cartela;
						$Numeros_cartela = $row->valores_cartela;
						?>

						<tr>
							<td><?php echo $Id_cartela; ?> </td><td><?php echo $Numeros_cartela; ?></td>
						</tr>	


						<?php

					}



				?>

			</table>


			<br>

			<h2>Numeros sorteados no sorteio : <?php echo  $id_sort; ?></h2>

			<table class='container_4 cartela_inteira'>

				<tr>
					<td>  </td><td>Numeros sorteados</td>
				</tr>	

				<?php

					$rst = $con->query("SELECT DISTINCT numeros_sorteados FROM numeros_sorteados WHERE id_sorteio = ".$id_sort);
					while($rowe = $rst->fetch(PDO::FETCH_OBJ)){
						$Numeros_sort = $rowe->numeros_sorteados;
						?>

						<tr>
							<td> </td><td><?php echo $Numeros_sort; ?></td>
						</tr>	


						<?php

					}



				?>

			</table>


			<p><a href="index.php">Voltar para sorteios</a>/</p>

		</div>


	</body>




</html>