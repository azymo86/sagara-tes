<?php

$input = [8, 6, 7, 12];

$a = max($input);

for ($i = 2; $i < $a; $i++) {
  if (!in_array($i, $input)) {
    $hilang[] = $i;
  }
}

echo min($hilang);
