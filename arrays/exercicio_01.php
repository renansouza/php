<?php 
header('Content-Type: text/html; charset=UTF-8');
// Exercícios com arrays

// Push - usado para adicionar elemento ao final do array

echo "<h2>Array Push - adiciona elemento ao final do array</h2>";
	$nomes = array('Renan', 'Bruno', 'Vitor');
		array_push($nomes, 'Lucas');
	var_dump($nomes);

// Pop - usado para remover o último elemento do array

echo "<h2>Array Pop - remove último elemento do array</h2>";
	array_pop($nomes);
	var_dump($nomes);

// Shift - usado para remove elemento do início do array

echo "<h2>Array Shift - remove elemento do início do array</h2>";
	array_shift($nomes);
	var_dump($nomes);

// Unshift - usado para adicionar elemento no início do array

echo "<h2>Array Unshift - adiciona elemento do início do array</h2>";
	array_unshift($nomes, "Lucas");
	var_dump($nomes);

?>