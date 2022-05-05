<?php
$data = [];

for ($i=0; $i < 90000; $i++) {
  array_push($data, "aaaa");
}

for ($i=0; $i < 90000; $i++) {
  echo $data[$i] . PHP_EOL;
}
?>
