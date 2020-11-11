<?php


function test($A)
{
	$combinations = [
		'}' => '{', ']' => '[', ')' => '('
	];
	$brackets = str_split($A);

	$i = 0;
	$j = count($brackets) - 1;
	while ($i < $j) {
		if (array_key_exists($brackets[$j], $combinations) && $brackets[$i] === $combinations[$brackets[$j]]) {
			unset($brackets[$i]);
			unset($brackets[$j]);
		}

		$i++;
		$j--;
	}
	
	if (count($brackets) === 0) {
		return 'Successful';
	}

	if (count($brackets) > 12) {
		return 'Too many brackets';
	} else {
		return 'Failed';
	}
}
