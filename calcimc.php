<?php 
	$nome = $_POST['nome'];
	$peso = $_POST['peso'];
	$altura = $_POST['altura'];

	$valorPeso = (double) $peso;
	$valorAltura = (double) $altura;

	$resp = $valorPeso / ($valorAltura * $valorAltura);

	if ($resp < 18.5 ) {
		$imc = "Abaxo do peso.";
	}else if ($resp <= 24.9) {
		$imc = "Normal.";
	}else if ($resp > 25) {
		$imc = "Sobrepeso.";
	}else if ($resp <= 29.9) {
		$imc = "Obeso I.";
	}else if ($resp <= 34.9) {
		$imc = "Obeso II.";
	}else{
		$imc = "Obeso III.";
	}

	echo "Olá " . $nome . "<br>";
	echo "Baseado nos dados fornecidos de <br> peso: " . $peso . "<br> Altura: " . $altura . "<br>";
	echo "O seu indice de massa corporal é: " . $resp . "<br> Status: " . $imc;


 ?>