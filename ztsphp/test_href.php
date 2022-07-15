<?php
$start_time = microtime(true);

for ($i = 1; $i <= 500; $i++) {
  ${'href_runtime'.$i} = new \parallel\Runtime();
}

$end_time = microtime(true);
$execution_time = ($end_time - $start_time);

echo $execution_time . PHP_EOL; 
?>
