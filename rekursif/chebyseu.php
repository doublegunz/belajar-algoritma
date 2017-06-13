<?php
function T($n, $x)
{
	if ($n == 0) {
		return 1;
	} else {
		if ($n == 1) {
			return $x;
		} else {
			return 2 * $x * T($n-1, $x);
		}
	}
}

$n = 10;
$x = 2;

$t = T($n, $x);

echo "{$t}";