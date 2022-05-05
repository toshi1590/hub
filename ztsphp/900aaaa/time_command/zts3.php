<?php
$data = [];

for ($i=0; $i < 900; $i++) {
  array_push($data, "aaaa");
}
  
$runtime1 = new \parallel\Runtime();
$runtime2 = new \parallel\Runtime();
$runtime3 = new \parallel\Runtime();

$runtime1->run(function($data){
  for ($i=0; $i < 300; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));

$runtime2->run(function($data){
  for ($i = 300; $i < 600; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));

$runtime3->run(function($data){
  for ($i = 600; $i < 900; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));
