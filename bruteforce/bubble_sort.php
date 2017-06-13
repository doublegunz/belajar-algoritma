<?php 
function bubblesort($L) {
    $n = count($L);
    for ($i=0; $i<$n; $i++) {
        for ($k=$n-1; $k > ($i); $k--) {
            if ($L[$k] < $L[$k-1]) {
                $temp = $L[$k];
                $L[$k] = $L[$k-1];
                $L[$k-1] = $temp;
            }
        }
    }
    return $L;
}


echo "sebelum disortir:";
$L = array(8,4,1,9,5,7,3,2,6,0);
print_r($L);

echo "<br/>sesudah disortir:";
$L = bubblesort($L);
print_r($L);

?>