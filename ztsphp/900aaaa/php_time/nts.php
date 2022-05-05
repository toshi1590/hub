<?php
$data = [];

for ($i=0; $i < 900; $i++) {
  array_push($data, "aaaa");
}

$start = microtime(true);

for ($i=0; $i < 900; $i++) {
  echo $data[$i] . PHP_EOL;
}

$end = microtime(true);
print_r($end - $start . PHP_EOL);
?>
