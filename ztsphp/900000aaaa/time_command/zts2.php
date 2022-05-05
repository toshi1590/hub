<?php
$data = [];

for ($i=0; $i < 900000; $i++) {
  array_push($data, "aaaa");
}
  
$runtime1 = new \parallel\Runtime();
$runtime2 = new \parallel\Runtime();

$runtime1->run(function($data){
  for ($i=0; $i < 450000; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));

$runtime2->run(function($data){
  for ($i = 450000; $i < 900000; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));
