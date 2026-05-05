<?php 
	$email = $_POST['email'];
	 $senha = $_POST['senha'];
	 	$emailrequired = 'etecia@etecia.com';
	 	$senharequired = '123456';
	 //primeiro metodo de validação, verifica se a a variavel global tem algum valor dentro dela.
	/*if (isset($email)&& isset($senha)) {
		echo "Existe.";
	}else{
		echo "Não existe.";
	}*/

	if (strcasecmp($email, $emailrequired) == 0 && strcasecmp($senha, $senharequired)==0) {
		echo "Existe.";
	}else{
		echo "Não existe.";
	}
 ?>