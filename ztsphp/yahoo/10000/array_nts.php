<?php
$url = "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=1";
$pages = $_POST['pages'];
$data = [];

for ($i = 0; $i < $pages; $i++) {
  $html = file_get_contents($url);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $tds = $dom->getElementsByTagName('td');
  
  for ($j = 0; $j < $tds->length; $j++) {
    array_push($data, $tds->item($j)->nodeValue);
  }
}

for ($i = 0; $i < count($data); $i++) {
  echo $data[$i] . PHP_EOL;
}

