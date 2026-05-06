<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario IMC</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h1>Calcular IMC</h1>
<form action="calcimc.php" method="post" id="formulario">
	<label for="name">Nome:</label>
	<input type="text" name="nome" id="nome">

	<label for="peso">Peso:</label>
	<input type="text" name="peso" maxlength="4" id="peso">

	<label for="altura">Altura:</label>
	<input type="text" name="altura" maxlength="4" id="altura">

	<input type="submit" name="Calcular">
	<input type="reset" name="Limpar">
</form>
</body>
</html>