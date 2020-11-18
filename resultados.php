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

			<h2>Sorteios já feitos</h2>


			<table class='container_4'>

				<tr>
					<td>Id do sorteio </td><td>Link</td>
				</tr>	

				<?php

					$con = new PDO("mysql:host=mysql.hostinger.com.br;dbname=bingo_bd", "root", "");

					$rs = $con->query("SELECT id_sorteio FROM sorteio");
					while($row = $rs->fetch(PDO::FETCH_OBJ)){
						$id_sorteio = $row->id_sorteio;

						?>

						<tr>
							<td><?php echo $id_sorteio; ?> </td><td> <a href="resultado_sorteio.php?id_sort=<?php echo $id_sorteio; ?>"> Link </a></td>
						</tr>	


						<?php

					}



				?>

			</table>


			<p><a href="index.php">Voltar para sorteios</a>/</p>
		</div>


	</body>




</html>