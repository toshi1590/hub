<?php
$runtime1 = new \parallel\Runtime();
$runtime2 = new \parallel\Runtime();

$future1 = $runtime1->run(function(){
  $start = microtime(true);
  
  for ($i = 0; $i < 450; $i++) {
    echo "aaaa" . PHP_EOL;    
  }

  $end = microtime(true);
  $time = $end - $start;
  return $time;
});

$future2 = $runtime2->run(function(){
  $start = microtime(true);
  
  for ($i = 450; $i < 900; $i++) {
    echo "aaaa" . PHP_EOL;    
  }

  $end = microtime(true);
  $time = $end - $start;
  return $time;
});

echo $future1->value() . PHP_EOL;
echo $future2->value() . PHP_EOL;
