<?php 
//cari faktor

function cariFactor($n)
{
	for ($i=1; $i <= $n; $i++) { 
		if ($n % $i ==0) {
			echo $i." ";
		}
		
	}
}

cariFactor(15);