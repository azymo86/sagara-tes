<?php

$N = 13;
$i = 1;
$a = 0;

while ($a < $N){

  if ($i % 3 == 0) {
    echo $i.", ";
    $a++;
  }elseif ($i % 7 == 0) {
    echo $i.", ";
    $a++;
  }

  $i++;

}
