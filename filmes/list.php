<?php 
$filmes = require_once(__DIR__ . '/dbactions/consultar.php');
?>

<html>
<head>
	<title>
		Adicionar Filme
	</title>

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

</head>
<body>

	<h1>Exbir Filmes</h1>
	
	<table style="width:100%">
		<tr>
			<td><strong>Titulo</strong></td>
			<td><strong>Descricao</strong></td>
			<td><strong>Ano</strong></td>
			<td><strong>Acoes</strong></td>
		</tr>

		<?php foreach ($filmes as $filme) : ?>			
			<tr>
				<td><?php echo $filme['titulo'] ?></td>
				<td><?php echo $filme['descricao'] ?></td>
				<td><?php echo $filme['ano'] ?></td>
				<td> editar | deletar</td>
			</tr>

		<?php endforeach; ?>
	</table>



</body>
</html>