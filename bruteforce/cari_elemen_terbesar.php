<?php
//cari elemen terbesar
$a = array(1,3,21,7,8,10,2);

$maks = $a[0];

for ($k=0; $k < count($a); $k++) { 
	if ($a[$k] > $maks) {
		$maks = $a[$k];
	}
}

echo $maks;