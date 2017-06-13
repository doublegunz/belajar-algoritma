<?php
function polinom($a, $x, $i, $n)
{
	if ($i == $n) {
		return $a[$n];
	} else {
		return $a[$i] + $x * polinom($a, $x, $i + 1, $n);
	}
}