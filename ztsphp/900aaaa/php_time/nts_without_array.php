<?php
$start = microtime(true);

for ($i=0; $i < 900; $i++) {
  echo "aaaa" . PHP_EOL;
}

$end = microtime(true);
print_r($end - $start . PHP_EOL);
?>
