<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../styles.css">
	<title>Resultado</title>
</head>

<body>
	<div class="titulo-tabela-atividade">
		<h1>RESULTADO:</h1>
	</div>
	<table class="resultado">
		<tr>
			<td>
				<?php
				$c = $_POST['bola'];
				$c = strtolower($c);
				if ($c == 'círculo' || $c == 'circular') echo "<h1> PARABÉNS! VOCÊ ACERTOU! </h1>";
				else echo "<h1>QUE AZAR! VOCÊ ERROU! NA PRÓXIMA SERÁ MELHOR!</h1>"
				?>
			</td>
		</tr>
		<tr>
			<td>
				<a href="../index.html"><img src="../imagens/return.png" alt="retornar"></a>
			</td>
			<td>
				<a href="formas.html">
					<img src="../imagens/repeat.png" alt="repetir">
				</a>
			</td>

		</tr>
	</table>

</body>

</html>