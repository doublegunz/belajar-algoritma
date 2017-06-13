<?php 
//sequential search

  $arr = array(1, 2, 3, 21, 5, 4, 6, 9, 8);
  // x bilangan yang dicari
  $x = 21;
  $k = 1;
  for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] == $x) {
        $k = $i;
    }
  }  if ($arr[$k] == $x) {
    echo "$x ditemukan di indeks elemen ke $k";
  } else {
    echo "$x tidak ditemukan";
  }
?>