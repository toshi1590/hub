<?php
$urls = [
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=1",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=2",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=3",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=4",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=5",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=6",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=7",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=8",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=9",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=10",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=11",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=12",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=13",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=14",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=15",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=16",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=17",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=18",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=19",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=20",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=21",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=22",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=23",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=24",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=25",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=26",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=27",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=28",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=29",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=30",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=31",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=32",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=33",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=34",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=35",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=36",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=37",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=38",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=39",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=40",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=41",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=42",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=43",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=44",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=45",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=46",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=47",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=48",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=49",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=50",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=51",
  "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=52"
];
$pages = $_POST['pages'];

for ($i = 0; $i < $pages; $i++) {
  $html = file_get_contents($urls[$i]);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $tds = $dom->getElementsByTagName('td');
  
  for ($j = 0; $j < $tds->length; $j++) {
    echo $tds->item($j)->nodeValue . PHP_EOL;
  }
}
