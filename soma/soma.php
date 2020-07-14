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
				$a = $_POST['op1'];
				$b = $_POST['op2'];
				$c = $_POST['op3'];
				$d = $_POST['op4'];
				$e = $_POST['op5'];
				$f = $_POST['op6'];
				$g = $_POST['op7'];
				$h = $_POST['op8'];
				$i = $_POST['op9'];
				$j = $_POST['op10'];
				$pt = 0;

				if ($a == 6) $pt = $pt + 1;
				if ($b == 8) $pt = $pt + 1;
				if ($c == 5) $pt = $pt + 1;
				if ($d == 10) $pt = $pt + 1;
				if ($e == 2) $pt = $pt + 1;
				if ($f == 8) $pt = $pt + 1;
				if ($g == 10) $pt = $pt + 1;
				if ($h == 9) $pt = $pt + 1;
				if ($i == 4) $pt = $pt + 1;
				if ($j == 7) $pt = $pt + 1;

				if ($pt == 10) echo "<h1> PARABÉNS! VOCÊ ACERTOU TODAS! </h1>";
				else if ($pt >= 5) echo "<h1>PARABÉNS! VOCÊ ACERTOU $pt DE 10!</h1>";
				else echo "<h1>VOCÊ ACERTOU $pt DE 10! NA PRÓXIMA SERÁ MELHOR!</h1>"
				?>
			</td>
		</tr>
		<tr>
			<td>
				<a href="../index.html"><img src="../imagens/return.png" alt="retornar"></a>
			</td>
			<td>
				<a href="recebendosoma.html">
					<img src="../imagens/repeat.png" alt="repetir">
				</a>
			</td>

		</tr>
	</table>

</body>

</html>