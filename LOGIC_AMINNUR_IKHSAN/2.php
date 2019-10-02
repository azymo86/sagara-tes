<?php

$teks = "Berikut adalah kisah sang gajah. Sang gajah memiliki teman bernama serigala. Gajah sering dibela oleh serigala ketika harimau mendekati gajah.";
//memasukkan dalam arry
$kata = explode(" ", $teks);

// gajah serigala harimau
for ($i = 0; $i < count($kata); $i++) {

  // mencari kesamaan kata
  if (preg_match("/gajah/i", $kata[$i]) == 1) {
    echo "Gajah - ";
  }elseif (preg_match("/serigala/i", $kata[$i]) == 1) {
    echo "Serigala - ";
  }elseif (preg_match("/harimau/i", $kata[$i]) == 1) {
    echo "Harimau - ";
  }
}
