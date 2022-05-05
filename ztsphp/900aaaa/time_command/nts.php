<?php
$data = [];

for ($i=0; $i < 900; $i++) {
  array_push($data, "aaaa");
}

for ($i=0; $i < 900; $i++) {
  echo $data[$i] . PHP_EOL;
}
?>
