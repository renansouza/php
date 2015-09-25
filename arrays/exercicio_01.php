<?php 

// Exercícios com arrays

// Push - usado para adicionar elemento ao final do array

echo "<h2>Array Push</h2>";
	$nomes = array('Renan', 'Bruno', 'Vitor');
		array_push($nomes, 'Lucas');
	var_dump($nomes);

// Pop - usado para remover o último elemento do array

echo "<h2>Array Pop</h2>";
	array_pop($nomes);
	var_dump($nomes);

// Shift - usado para remove elemento do início do array

echo "<h2>Array Shift</h2>";
	array_shift($nomes);
	var_dump($nomes);

?>