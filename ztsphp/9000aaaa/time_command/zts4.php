<?php
$data = [];

for ($i=0; $i < 9000; $i++) {
  array_push($data, "aaaa");
}

$runtime1 = new \parallel\Runtime();
$runtime2 = new \parallel\Runtime();
$runtime3 = new \parallel\Runtime();
$runtime4 = new \parallel\Runtime();

$runtime1->run(function($data){
  for ($i = 0; $i < 2250; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));

$runtime2->run(function($data){
  for ($i = 2250; $i < 4500; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));


$runtime3->run(function($data){
  for ($i = 4500; $i < 6750; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));


$runtime4->run(function($data){
  for ($i = 6750; $i < 9000; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));

