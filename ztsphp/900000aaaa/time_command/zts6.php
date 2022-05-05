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
$runtime6 = new \parallel\Runtime();

$runtime1->run(function($data){
  for ($i = 0; $i < 150000; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));

$runtime2->run(function($data){
  for ($i = 150000; $i < 300000; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));


$runtime3->run(function($data){
  for ($i = 300000; $i < 450000; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));


$runtime4->run(function($data){
  for ($i = 450000; $i < 600000; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));


$runtime5->run(function($data){
  for ($i = 600000; $i < 750000; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));


$runtime6->run(function($data){
  for ($i = 750000; $i < 900000; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));

