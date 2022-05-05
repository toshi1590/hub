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
$runtime6 = new \parallel\Runtime();

$runtime1->run(function($data){
  for ($i = 0; $i < 150; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));

$runtime2->run(function($data){
  for ($i = 150; $i < 300; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));


$runtime3->run(function($data){
  for ($i = 300; $i < 450; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));


$runtime4->run(function($data){
  for ($i = 450; $i < 600; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));


$runtime5->run(function($data){
  for ($i = 600; $i < 750; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));


$runtime6->run(function($data){
  for ($i = 750; $i < 900; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));

