<?php
$data = [];

for ($i=0; $i < 900; $i++) {
  array_push($data, "aaaa");
}
  
$runtime1 = new \parallel\Runtime();
$runtime2 = new \parallel\Runtime();

$runtime1->run(function($data){
  for ($i=0; $i < 450; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));

$runtime2->run(function($data){
  for ($i = 450; $i < 900; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));
