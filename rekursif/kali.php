<?php
function kali($a, $b)
{
	if ($b == 1) {
		return $a;
	} else {
		return $a + kali($a, $b - 1);
	}
}

$a = 10;
$b = 19;

$c = kali($a, $b);

echo "{$a} x $b = {$c}";