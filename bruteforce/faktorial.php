<?php
function faktorial($a)
{
	$hasil = 1;

	for ($i=1; $i <= $a ; $i++) { 
		$hasil = $hasil * $i;
	}
	return $hasil;
}

$a = 5;

$f = faktorial($a);

echo $f;