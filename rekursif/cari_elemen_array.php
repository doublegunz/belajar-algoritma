<?php
function cari($A, $n, $x, $j)
{
	if ($A[$j] == $x) {
		return $j;
	} else {
		if ($j > $n) {
			return -1;
		} else {
			return cari($A, $n, $x, $j + 1);
		}
	}
}


$A = array();
for ($i=1; $i <=100 ; $i++) {
	$A[] = $i;
}

$n = count($A);
$x = 35;
$j = 1;

$hasil = cari($A, $n, $x, $j);

echo "{$hasil}";