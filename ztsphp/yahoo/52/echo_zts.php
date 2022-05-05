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

for ($i=1; $i <= $pages; $i++) {
  ${'runtime'.$i} = new \parallel\Runtime();
}

echo 'a';


if ($pages >= 1) {
  $runtime1->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[0]));
}


if ($pages >= 2) {
  $runtime2->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[1]));
}


if ($pages >= 3) {
  $runtime3->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[2]));
}


if ($pages >= 4) {
  $runtime4->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[3]));
}


if ($pages >= 5) {
  $runtime5->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[4]));
}


if ($pages >= 6) {
  $runtime6->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[5]));
}


if ($pages >= 7) {
  $runtime7->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[6]));
}


if ($pages >= 8) {
  $runtime8->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[7]));
}


if ($pages >= 9) {
  $runtime9->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[8]));
}


if ($pages >= 10) {
  $runtime10->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[9]));
}


if ($pages >= 11) {
  $runtime11->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[10]));
}


if ($pages >= 12) {
  $runtime12->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[11]));
}


if ($pages >= 13) {
  $runtime13->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[12]));
}


if ($pages >= 14) {
  $runtime14->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[13]));
}


if ($pages >= 15) {
  $runtime15->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[14]));
}


if ($pages >= 16) {
  $runtime16->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[15]));
}


if ($pages >= 17) {
  $runtime17->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[16]));
}


if ($pages >= 18) {
  $runtime18->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[17]));
}


if ($pages >= 19) {
  $runtime19->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[18]));
}


if ($pages >= 20) {
  $runtime20->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[19]));
}


if ($pages >= 21) {
  $runtime21->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[20]));
}


if ($pages >= 22) {
  $runtime22->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[21]));
}


if ($pages >= 23) {
  $runtime23->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[22]));
}


if ($pages >= 24) {
  $runtime24->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[23]));
}


if ($pages >= 25) {
  $runtime25->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[24]));
}


if ($pages >= 26) {
  $runtime26->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[25]));
}


if ($pages >= 27) {
  $runtime27->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[26]));
}


if ($pages >= 28) {
  $runtime28->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[27]));
}


if ($pages >= 29) {
  $runtime29->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[28]));
}


if ($pages >= 30) {
  $runtime30->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[29]));
}


if ($pages >= 31) {
  $runtime31->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[30]));
}


if ($pages >= 32) {
  $runtime32->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[31]));
}


if ($pages >= 33) {
  $runtime33->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[32]));
}


if ($pages >= 34) {
  $runtime34->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[33]));
}


if ($pages >= 35) {
  $runtime35->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[34]));
}


if ($pages >= 36) {
  $runtime36->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[35]));
}


if ($pages >= 37) {
  $runtime37->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[36]));
}


if ($pages >= 38) {
  $runtime38->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[37]));
}


if ($pages >= 39) {
  $runtime39->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[38]));
}


if ($pages >= 40) {
  $runtime40->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[39]));
}


if ($pages >= 41) {
  $runtime41->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[40]));
}


if ($pages >= 42) {
  $runtime42->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[41]));
}


if ($pages >= 43) {
  $runtime43->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[42]));
}


if ($pages >= 44) {
  $runtime44->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[43]));
}


if ($pages >= 45) {
  $runtime45->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[44]));
}


if ($pages >= 46) {
  $runtime46->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[45]));
}


if ($pages >= 47) {
  $runtime47->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[46]));
}


if ($pages >= 48) {
  $runtime48->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[47]));
}


if ($pages >= 49) {
  $runtime49->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[48]));
}


if ($pages >= 50) {
  $runtime50->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[49]));
}


if ($pages >= 51) {
  $runtime51->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[50]));
}


if ($pages >= 52) {
  $runtime52->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');

    for ($i = 0; $i < $tds->length; $i++) {
      echo $tds->item($i)->nodeValue . PHP_EOL;
    }
  }, array($urls[51]));
}


