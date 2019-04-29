<?php
	require_once("config.php");

	use Cliente\Cadastro;

	$cad = new Cadastro();

	$cad->setNome("derp");
	$cad->setEmail("derp@email.com");
	$cad->setSenha("123456");

	echo $cad;
?>