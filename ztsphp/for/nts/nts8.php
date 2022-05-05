<?php
$start = microtime(true);

function get_total1(){
  $total = 0;

  for ($i = 0; $i < 300000000; $i++) {
    $total+=$i;
  }

  return $total;
}

function get_total2(){
  $total = 0;

  for ($i = 0; $i < 300000000; $i++) {
    $total+=$i;
  }

  return $total;
}

function get_total3(){
  $total = 0;

  for ($i = 0; $i < 300000000; $i++) {
    $total+=$i;
  }

  return $total;
}

function get_total4(){
  $total = 0;

  for ($i = 0; $i < 300000000; $i++) {
    $total+=$i;
  }

  return $total;
}

function get_total5(){
  $total = 0;

  for ($i = 0; $i < 300000000; $i++) {
    $total+=$i;
  }

  return $total;
}

function get_total6(){
  $total = 0;

  for ($i = 0; $i < 300000000; $i++) {
    $total+=$i;
  }

  return $total;
}

function get_total7(){
  $total = 0;

  for ($i = 0; $i < 300000000; $i++) {
    $total+=$i;
  }

  return $total;
}

function get_total8(){
  $total = 0;

  for ($i = 0; $i < 300000000; $i++) {
    $total+=$i;
  }

  return $total;
}

echo "total1: " . get_total1() . "\n";
echo "total2: " . get_total2() . "\n";
echo "total3: " . get_total3() . "\n";
echo "total4: " . get_total4() . "\n";
echo "total5: " . get_total5() . "\n";
echo "total6: " . get_total6() . "\n";
echo "total7: " . get_total7() . "\n";
echo "total8: " . get_total8() . "\n";

$end = microtime(true);
echo $end - $start;
