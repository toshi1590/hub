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

$data = [];

for ($i=1; $i <= $pages; $i++) {
  ${'runtime'.$i} = new \parallel\Runtime();
}

echo "a";


if ($pages >= 1) {
  $future1 = $runtime1->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[0]));
}


if ($pages >= 2) {
  $future2 = $runtime2->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[1]));
}


if ($pages >= 3) {
  $future3 = $runtime3->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[2]));
}


if ($pages >= 4) {
  $future4 = $runtime4->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[3]));
}


if ($pages >= 5) {
  $future5 = $runtime5->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[4]));
}


if ($pages >= 6) {
  $future6 = $runtime6->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[5]));
}


if ($pages >= 7) {
  $future7 = $runtime7->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[6]));
}


if ($pages >= 8) {
  $future8 = $runtime8->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[7]));
}


if ($pages >= 9) {
  $future9 = $runtime9->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[8]));
}


if ($pages >= 10) {
  $future10 = $runtime10->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[9]));
}


if ($pages >= 11) {
  $future11 = $runtime11->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[10]));
}


if ($pages >= 12) {
  $future12 = $runtime12->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[11]));
}


if ($pages >= 13) {
  $future13 = $runtime13->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[12]));
}


if ($pages >= 14) {
  $future14 = $runtime14->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[13]));
}


if ($pages >= 15) {
  $future15 = $runtime15->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[14]));
}


if ($pages >= 16) {
  $future16 = $runtime16->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[15]));
}


if ($pages >= 17) {
  $future17 = $runtime17->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[16]));
}


if ($pages >= 18) {
  $future18 = $runtime18->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[17]));
}


if ($pages >= 19) {
  $future19 = $runtime19->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[18]));
}


if ($pages >= 20) {
  $future20 = $runtime20->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[19]));
}


if ($pages >= 21) {
  $future21 = $runtime21->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[20]));
}


if ($pages >= 22) {
  $future22 = $runtime22->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[21]));
}


if ($pages >= 23) {
  $future23 = $runtime23->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[22]));
}


if ($pages >= 24) {
  $future24 = $runtime24->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[23]));
}


if ($pages >= 25) {
  $future25 = $runtime25->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[24]));
}


if ($pages >= 26) {
  $future26 = $runtime26->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[25]));
}


if ($pages >= 27) {
  $future27 = $runtime27->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[26]));
}


if ($pages >= 28) {
  $future28 = $runtime28->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[27]));
}


if ($pages >= 29) {
  $future29 = $runtime29->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[28]));
}


if ($pages >= 30) {
  $future30 = $runtime30->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[29]));
}


if ($pages >= 31) {
  $future31 = $runtime31->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[30]));
}


if ($pages >= 32) {
  $future32 = $runtime32->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[31]));
}


if ($pages >= 33) {
  $future33 = $runtime33->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[32]));
}


if ($pages >= 34) {
  $future34 = $runtime34->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[33]));
}


if ($pages >= 35) {
  $future35 = $runtime35->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[34]));
}


if ($pages >= 36) {
  $future36 = $runtime36->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[35]));
}


if ($pages >= 37) {
  $future37 = $runtime37->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[36]));
}


if ($pages >= 38) {
  $future38 = $runtime38->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[37]));
}


if ($pages >= 39) {
  $future39 = $runtime39->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[38]));
}


if ($pages >= 40) {
  $future40 = $runtime40->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[39]));
}


if ($pages >= 41) {
  $future41 = $runtime41->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[40]));
}


if ($pages >= 42) {
  $future42 = $runtime42->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[41]));
}


if ($pages >= 43) {
  $future43 = $runtime43->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[42]));
}


if ($pages >= 44) {
  $future44 = $runtime44->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[43]));
}


if ($pages >= 45) {
  $future45 = $runtime45->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[44]));
}


if ($pages >= 46) {
  $future46 = $runtime46->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[45]));
}


if ($pages >= 47) {
  $future47 = $runtime47->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[46]));
}


if ($pages >= 48) {
  $future48 = $runtime48->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[47]));
}


if ($pages >= 49) {
  $future49 = $runtime49->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[48]));
}


if ($pages >= 50) {
  $future50 = $runtime50->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[49]));
}


if ($pages >= 51) {
  $future51 = $runtime51->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[50]));
}


if ($pages >= 52) {
  $future52 = $runtime52->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($urls[51]));
}


if ($pages >= 1) {
  $data = array_merge($data, $future1->value());
}

if ($pages >= 2) {
  $data = array_merge($data, $future2->value());
}

if ($pages >= 3) {
  $data = array_merge($data, $future3->value());
}

if ($pages >= 4) {
  $data = array_merge($data, $future4->value());
}

if ($pages >= 5) {
  $data = array_merge($data, $future5->value());
}

if ($pages >= 6) {
  $data = array_merge($data, $future6->value());
}

if ($pages >= 7) {
  $data = array_merge($data, $future7->value());
}

if ($pages >= 8) {
  $data = array_merge($data, $future8->value());
}

if ($pages >= 9) {
  $data = array_merge($data, $future9->value());
}

if ($pages >= 10) {
  $data = array_merge($data, $future10->value());
}

if ($pages >= 11) {
  $data = array_merge($data, $future11->value());
}

if ($pages >= 12) {
  $data = array_merge($data, $future12->value());
}

if ($pages >= 13) {
  $data = array_merge($data, $future13->value());
}

if ($pages >= 14) {
  $data = array_merge($data, $future14->value());
}

if ($pages >= 15) {
  $data = array_merge($data, $future15->value());
}

if ($pages >= 16) {
  $data = array_merge($data, $future16->value());
}

if ($pages >= 17) {
  $data = array_merge($data, $future17->value());
}

if ($pages >= 18) {
  $data = array_merge($data, $future18->value());
}

if ($pages >= 19) {
  $data = array_merge($data, $future19->value());
}

if ($pages >= 20) {
  $data = array_merge($data, $future20->value());
}

if ($pages >= 21) {
  $data = array_merge($data, $future21->value());
}

if ($pages >= 22) {
  $data = array_merge($data, $future22->value());
}

if ($pages >= 23) {
  $data = array_merge($data, $future23->value());
}

if ($pages >= 24) {
  $data = array_merge($data, $future24->value());
}

if ($pages >= 25) {
  $data = array_merge($data, $future25->value());
}

if ($pages >= 26) {
  $data = array_merge($data, $future26->value());
}

if ($pages >= 27) {
  $data = array_merge($data, $future27->value());
}

if ($pages >= 28) {
  $data = array_merge($data, $future28->value());
}

if ($pages >= 29) {
  $data = array_merge($data, $future29->value());
}

if ($pages >= 30) {
  $data = array_merge($data, $future30->value());
}

if ($pages >= 31) {
  $data = array_merge($data, $future31->value());
}

if ($pages >= 32) {
  $data = array_merge($data, $future32->value());
}

if ($pages >= 33) {
  $data = array_merge($data, $future33->value());
}

if ($pages >= 34) {
  $data = array_merge($data, $future34->value());
}

if ($pages >= 35) {
  $data = array_merge($data, $future35->value());
}

if ($pages >= 36) {
  $data = array_merge($data, $future36->value());
}

if ($pages >= 37) {
  $data = array_merge($data, $future37->value());
}

if ($pages >= 38) {
  $data = array_merge($data, $future38->value());
}

if ($pages >= 39) {
  $data = array_merge($data, $future39->value());
}

if ($pages >= 40) {
  $data = array_merge($data, $future40->value());
}

if ($pages >= 41) {
  $data = array_merge($data, $future41->value());
}

if ($pages >= 42) {
  $data = array_merge($data, $future42->value());
}

if ($pages >= 43) {
  $data = array_merge($data, $future43->value());
}

if ($pages >= 44) {
  $data = array_merge($data, $future44->value());
}

if ($pages >= 45) {
  $data = array_merge($data, $future45->value());
}

if ($pages >= 46) {
  $data = array_merge($data, $future46->value());
}

if ($pages >= 47) {
  $data = array_merge($data, $future47->value());
}

if ($pages >= 48) {
  $data = array_merge($data, $future48->value());
}

if ($pages >= 49) {
  $data = array_merge($data, $future49->value());
}

if ($pages >= 50) {
  $data = array_merge($data, $future50->value());
}

if ($pages >= 51) {
  $data = array_merge($data, $future51->value());
}

if ($pages >= 52) {
  $data = array_merge($data, $future52->value());
}


for ($i = 0; $i < count($data); $i++) {
  echo $data[$i] . PHP_EOL;
}
