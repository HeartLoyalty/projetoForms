<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formularios PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h1>Formularios PHP</h1>
<form action="valida.php" method="post">
	<label for="email">Emal:</label>
	<input type="email" name="email" id="email" maxlength="50" required autocomplete="off" autofocus>

	<label for="senha">Senha:</label>
	<input type="password" name="senha" id="senha" maxlength="15" required size="15">
	<div class="buttons">
	<input type="submit" name="entrar" value="entrar">
	<input type="reset" name="limpar" value="limpar">
	</div>
</form>

<script src="js/script.js"></script>
</body>
</html>