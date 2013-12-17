<html>
	<head>
		<title>
			Adicionar Filme
		</title>
	</head>

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">


	<body>

		<h1>Adicionar Filme</h1>

		<form action="dbactions/cadastrar.php" method="post">
			
			<div>
				<label for="titulo">Titulo:</label>
				<input type="text" name="titulo" value="" id="titulo">
			</div>
			
			<div>
				<label for="descricao">Descricao:</label>
				<textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
			</div>

			<div>
				<label for="ano">Ano:</label>
				<input type="text" name="ano" value="">
			</div>

			<input type="submit" value="salvar">
		</form>
		
	</body>
</html>