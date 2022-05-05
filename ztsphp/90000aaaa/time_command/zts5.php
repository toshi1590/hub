<?php
$data = [];

for ($i=0; $i < 90000; $i++) {
  array_push($data, "aaaa");
}

$runtime1 = new \parallel\Runtime();
$runtime2 = new \parallel\Runtime();
$runtime3 = new \parallel\Runtime();
$runtime4 = new \parallel\Runtime();
$runtime5 = new \parallel\Runtime();

$runtime1->run(function($data){
  for ($i = 0; $i < 18000; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));

$runtime2->run(function($data){
  for ($i = 18000; $i < 36000; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));


$runtime3->run(function($data){
  for ($i = 36000; $i < 54000; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));


$runtime4->run(function($data){
  for ($i = 54000; $i < 72000; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));


$runtime5->run(function($data){
  for ($i = 72000; $i < 90000; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));

