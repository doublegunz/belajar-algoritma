<?php
function maks($A, $n)
{
	if ($n == 1) {
		return $A[0];
	} else {
		if ($A[$n-1] > maks($A, $n-1)) {
			return $A[$n];
		} else {
			return maks($A, $n-1);
		}
	}
}

$A = array(2,3,4,7,8,1);
$n = count($A);

$hasil = maks($A, $n);

echo "{$hasil}";