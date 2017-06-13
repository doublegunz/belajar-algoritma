<?php
/*
 * function pangkat(input a, n : integer)
 * 
 */

function pangkat($a, $n)
{
	if ( $n == 0) {
		return 1;
	} else {
		return $a * pangkat($a, $n - 1);
	}
}

$a = 10;
$n = 2;

$hasilPangkat = pangkat($a, $n);

echo "{$a} pangkat {$n} = {$hasilPangkat}"; 