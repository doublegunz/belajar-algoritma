<?php
/*
 * function faktorial(input n : integer)-> integer
 * {mengembalikan nilai n!}
 *
 * DEKLARASI:
 * 	F : integer
 * 	i : integer
 *
 * ALGORITMA :
 * 	F <- 1
 * 	i <- 1
 * 	while i <= n do
 * 		F <- F * 1
 * 		i <- i + 1
 * 	endwhile
 * 	{i > n}
 *
 * return F
 */
function faktorial($n)
{
	$F = 1;
	$i = 1;

	while ($i <= $n) {
		$F = $F * $i;
		$i++;
	}
	return $F;
}

$n = 5;
$F = faktorial($n);

echo "{$F}";