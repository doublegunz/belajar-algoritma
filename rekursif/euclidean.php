<?php
/*function gcd($x, $y)
{
	while ($y != 0) {
		$r = $x % $y;
		$x = $y;
		$y = $r;
	}
	return $x;
}*/


//pakai rekursif
function gcd($x, $y)
{
	if ($y == 0) {
		return $x;
	} else {
		return gcd($y, $x % $y);
	}
}

$x = 24;
$y = 9;

$c = gcd($x, $y);

echo "{$c}";