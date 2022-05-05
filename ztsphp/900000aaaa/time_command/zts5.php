<?php
$data = [];

for ($i = 0; $i < 900000; $i++) {
  array_push($data, "aaaa");
}

$runtime1 = new \parallel\Runtime();
$runtime2 = new \parallel\Runtime();
$runtime3 = new \parallel\Runtime();
$runtime4 = new \parallel\Runtime();
$runtime5 = new \parallel\Runtime();

$runtime1->run(function($data){
  for ($i = 0; $i < 180000; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));

$runtime2->run(function($data){
  for ($i = 180000; $i < 360000; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));


$runtime3->run(function($data){
  for ($i = 360000; $i < 540000; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));


$runtime4->run(function($data){
  for ($i = 540000; $i < 720000; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));


$runtime5->run(function($data){
  for ($i = 720000; $i < 900000; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));

