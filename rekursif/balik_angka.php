<?php
/*function balikAngka($n)
{
	while ($n >= 10) {
		echo $n % 10;
		$n = $n / 10;
	}
	echo "{$n}";
}*/

function balikAngka($n)
{
	if ($n < 10) {
		echo "{$n}";
	} else {
		echo $n % 10;
		balikAngka($n / 10);
	}
}

$n = 4567;

balikAngka($n);