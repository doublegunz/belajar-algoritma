<?php
function ujiPrima($x){
	if ($x < 2) {
		return false;
	} else {
		$y = $x-1;
		$test = true;
		while (($test) and ($y > 1)) {
			if ($x % $y == 0) {
				$test = false;
			} else {
				$y = $y -1;
			}	
		}
		return $test;		
	}
}

$bilangan = 7;
echo ujiPrima($bilangan) ? $bilangan.' adalah bilangan Prima' : $bilangan.' adalah bukan bilangan prima';