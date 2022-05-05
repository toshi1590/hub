<?php
$start = microtime(true);

$runtime1 = new \parallel\Runtime();

$future1 = $runtime1->run(function(){
  $total = 0;

  for ($i = 0; $i < 300000000; $i++) {
    $total+=$i;
  }

  return $total;
});

echo "future1: " . $future1->value() . "\n";

$end = microtime(true);
echo $end - $start;
