<?php
$start = microtime(true);

function get_total1(){
  $total = 0;

  for ($i = 0; $i < 300000000; $i++) {
    $total+=$i;
  }

  return $total;
}

echo "total1: " . get_total1() . "\n";

$end = microtime(true);
echo $end - $start;
