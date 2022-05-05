<?php
$start = microtime(true);

$runtime1 = new \parallel\Runtime();
$runtime2 = new \parallel\Runtime();
$runtime3 = new \parallel\Runtime();
$runtime4 = new \parallel\Runtime();
$runtime5 = new \parallel\Runtime();
$runtime6 = new \parallel\Runtime();
$runtime7 = new \parallel\Runtime();
$runtime8 = new \parallel\Runtime();

$future1 = $runtime1->run(function(){
  $total = 0;

  for ($i = 0; $i < 300000000; $i++) {
    $total+=$i;
  }

  return $total;
});


$future2 = $runtime2->run(function(){
  $total = 0;

  for ($i = 0; $i < 300000000; $i++) {
    $total+=$i;
  }

  return $total;
});


$future3 = $runtime3->run(function(){
  $total = 0;

  for ($i = 0; $i < 300000000; $i++) {
    $total+=$i;
  }

  return $total;
});


$future4 = $runtime4->run(function(){
  $total = 0;

  for ($i = 0; $i < 300000000; $i++) {
    $total+=$i;
  }

  return $total;
});


$future5 = $runtime5->run(function(){
  $total = 0;

  for ($i = 0; $i < 300000000; $i++) {
    $total+=$i;
  }

  return $total;
});


$future6 = $runtime6->run(function(){
  $total = 0;

  for ($i = 0; $i < 300000000; $i++) {
    $total+=$i;
  }

  return $total;
});


$future7 = $runtime7->run(function(){
  $total = 0;

  for ($i = 0; $i < 300000000; $i++) {
    $total+=$i;
  }

  return $total;
});


$future8 = $runtime8->run(function(){
  $total = 0;

  for ($i = 0; $i < 300000000; $i++) {
    $total+=$i;
  }

  return $total;
});

echo "future1: " . $future1->value() . "\n";
echo "future2: " . $future2->value() . "\n";
echo "future3: " . $future3->value() . "\n";
echo "future4: " . $future4->value() . "\n";
echo "future5: " . $future5->value() . "\n";
echo "future6: " . $future6->value() . "\n";
echo "future7: " . $future7->value() . "\n";
echo "future8: " . $future8->value() . "\n";

$end = microtime(true);
echo $end - $start;
