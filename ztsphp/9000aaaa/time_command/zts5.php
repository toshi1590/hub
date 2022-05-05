<?php
$data = [];

for ($i=0; $i < 9000; $i++) {
  array_push($data, "aaaa");
}

$runtime1 = new \parallel\Runtime();
$runtime2 = new \parallel\Runtime();
$runtime3 = new \parallel\Runtime();
$runtime4 = new \parallel\Runtime();
$runtime5 = new \parallel\Runtime();

$runtime1->run(function($data){
  for ($i = 0; $i < 1800; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));

$runtime2->run(function($data){
  for ($i = 1800; $i < 3600; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));


$runtime3->run(function($data){
  for ($i = 3600; $i < 5400; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));


$runtime4->run(function($data){
  for ($i = 5400; $i < 7200; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));


$runtime5->run(function($data){
  for ($i = 7200; $i < 9000; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));

