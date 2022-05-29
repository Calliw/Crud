<?php 

		
	$bd_local = 'localhost';
	$usuario = 'root';
	$senha = '';
	$bd = 'crudwyndb';
	
	$link = mysqli_connect($bd_local,$usuario,$senha,$bd);
	mysqli_set_charset($link, 'utf8');
	
	if (mysqli_connect_errno()) {
		echo "Erro de Conexão" . mysqli_connect_error();
	}


 ?>