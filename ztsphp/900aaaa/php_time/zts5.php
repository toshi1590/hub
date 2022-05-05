<?php
$data = [];

for ($i=0; $i < 900; $i++) {
  array_push($data, "aaaa");
}

$runtime1 = new \parallel\Runtime();
$runtime2 = new \parallel\Runtime();
$runtime3 = new \parallel\Runtime();
$runtime4 = new \parallel\Runtime();
$runtime5 = new \parallel\Runtime();

$runtime1->run(function($data){
  $start = microtime(true);
  
  for ($i = 0; $i < 180; $i++) {
    echo $data[$i] . PHP_EOL;    
  }

  $end = microtime(true);
  print_r($end - $start . PHP_EOL);
}, array($data));

$runtime2->run(function($data){
  $start = microtime(true);
  
  for ($i = 180; $i < 360; $i++) {
    echo $data[$i] . PHP_EOL;    
  }

  $end = microtime(true);
  print_r($end - $start . PHP_EOL);
}, array($data));


$runtime3->run(function($data){
  $start = microtime(true);
  
  for ($i = 360; $i < 540; $i++) {
    echo $data[$i] . PHP_EOL;    
  }

  $end = microtime(true);
  print_r($end - $start . PHP_EOL);
}, array($data));


$runtime4->run(function($data){
  $start = microtime(true);
  
  for ($i = 540; $i < 720; $i++) {
    echo $data[$i] . PHP_EOL;    
  }

  $end = microtime(true);
  print_r($end - $start . PHP_EOL);
}, array($data));


$runtime5->run(function($data){
  $start = microtime(true);
  
  for ($i = 720; $i < 900; $i++) {
    echo $data[$i] . PHP_EOL;    
  }

  $end = microtime(true);
  print_r($end - $start . PHP_EOL);
}, array($data));

