<?php
$data = [];

for ($i=0; $i < 900; $i++) {
  array_push($data, "aaaa");
}

$runtime1 = new \parallel\Runtime();
$runtime2 = new \parallel\Runtime();

$future1 = $runtime1->run(function($data){
  $start = microtime(true);
  
  for ($i = 0; $i < 450; $i++) {
    $data[$i];    
  }

  $end = microtime(true);
  $time = $end - $start;
  return $time;
}, array($data));

$future2 = $runtime2->run(function($data){
  $start = microtime(true);
  
  for ($i = 450; $i < 900; $i++) {
    $data[$i];    
  }

  $end = microtime(true);
  $time = $end - $start;
  return $time;
}, array($data));

echo $future1->value() . PHP_EOL;
echo $future2->value() . PHP_EOL;
