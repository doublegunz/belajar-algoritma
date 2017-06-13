<?php
function pangkat($bilangan, $pangkat)
{
	$hasil = 1;
	for ($i=0; $i < $pangkat; $i++) { 
		$hasil = $hasil * $bilangan;
	}
	return $hasil;
}

$bilangan = 5;
$pangkat = 2;
$hasil = pangkat($bilangan, $pangkat);

echo $hasil;