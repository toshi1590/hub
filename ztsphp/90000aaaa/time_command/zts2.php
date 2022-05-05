<?php
$data = [];

for ($i=0; $i < 90000; $i++) {
  array_push($data, "aaaa");
}
  
$runtime1 = new \parallel\Runtime();
$runtime2 = new \parallel\Runtime();

$runtime1->run(function($data){
  for ($i=0; $i < 45000; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));

$runtime2->run(function($data){
  for ($i = 45000; $i < 90000; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));
