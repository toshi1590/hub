<?php
$url = "https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=1";
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
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
  }, array($url));
}


if ($pages >= 53) {
  $future53 = $runtime53->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 54) {
  $future54 = $runtime54->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 55) {
  $future55 = $runtime55->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 56) {
  $future56 = $runtime56->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 57) {
  $future57 = $runtime57->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 58) {
  $future58 = $runtime58->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 59) {
  $future59 = $runtime59->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 60) {
  $future60 = $runtime60->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 61) {
  $future61 = $runtime61->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 62) {
  $future62 = $runtime62->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 63) {
  $future63 = $runtime63->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 64) {
  $future64 = $runtime64->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 65) {
  $future65 = $runtime65->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 66) {
  $future66 = $runtime66->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 67) {
  $future67 = $runtime67->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 68) {
  $future68 = $runtime68->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 69) {
  $future69 = $runtime69->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 70) {
  $future70 = $runtime70->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 71) {
  $future71 = $runtime71->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 72) {
  $future72 = $runtime72->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 73) {
  $future73 = $runtime73->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 74) {
  $future74 = $runtime74->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 75) {
  $future75 = $runtime75->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 76) {
  $future76 = $runtime76->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 77) {
  $future77 = $runtime77->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 78) {
  $future78 = $runtime78->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 79) {
  $future79 = $runtime79->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 80) {
  $future80 = $runtime80->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 81) {
  $future81 = $runtime81->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 82) {
  $future82 = $runtime82->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 83) {
  $future83 = $runtime83->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 84) {
  $future84 = $runtime84->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 85) {
  $future85 = $runtime85->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 86) {
  $future86 = $runtime86->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 87) {
  $future87 = $runtime87->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 88) {
  $future88 = $runtime88->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 89) {
  $future89 = $runtime89->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 90) {
  $future90 = $runtime90->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 91) {
  $future91 = $runtime91->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 92) {
  $future92 = $runtime92->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 93) {
  $future93 = $runtime93->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 94) {
  $future94 = $runtime94->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 95) {
  $future95 = $runtime95->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 96) {
  $future96 = $runtime96->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 97) {
  $future97 = $runtime97->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 98) {
  $future98 = $runtime98->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 99) {
  $future99 = $runtime99->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 100) {
  $future100 = $runtime100->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 101) {
  $future101 = $runtime101->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 102) {
  $future102 = $runtime102->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 103) {
  $future103 = $runtime103->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 104) {
  $future104 = $runtime104->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 105) {
  $future105 = $runtime105->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 106) {
  $future106 = $runtime106->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 107) {
  $future107 = $runtime107->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 108) {
  $future108 = $runtime108->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 109) {
  $future109 = $runtime109->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 110) {
  $future110 = $runtime110->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 111) {
  $future111 = $runtime111->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 112) {
  $future112 = $runtime112->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 113) {
  $future113 = $runtime113->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 114) {
  $future114 = $runtime114->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 115) {
  $future115 = $runtime115->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 116) {
  $future116 = $runtime116->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 117) {
  $future117 = $runtime117->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 118) {
  $future118 = $runtime118->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 119) {
  $future119 = $runtime119->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 120) {
  $future120 = $runtime120->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 121) {
  $future121 = $runtime121->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 122) {
  $future122 = $runtime122->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 123) {
  $future123 = $runtime123->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 124) {
  $future124 = $runtime124->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 125) {
  $future125 = $runtime125->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 126) {
  $future126 = $runtime126->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 127) {
  $future127 = $runtime127->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 128) {
  $future128 = $runtime128->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 129) {
  $future129 = $runtime129->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 130) {
  $future130 = $runtime130->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 131) {
  $future131 = $runtime131->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 132) {
  $future132 = $runtime132->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 133) {
  $future133 = $runtime133->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 134) {
  $future134 = $runtime134->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 135) {
  $future135 = $runtime135->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 136) {
  $future136 = $runtime136->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 137) {
  $future137 = $runtime137->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 138) {
  $future138 = $runtime138->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 139) {
  $future139 = $runtime139->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 140) {
  $future140 = $runtime140->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 141) {
  $future141 = $runtime141->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 142) {
  $future142 = $runtime142->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 143) {
  $future143 = $runtime143->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 144) {
  $future144 = $runtime144->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 145) {
  $future145 = $runtime145->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 146) {
  $future146 = $runtime146->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 147) {
  $future147 = $runtime147->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 148) {
  $future148 = $runtime148->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 149) {
  $future149 = $runtime149->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 150) {
  $future150 = $runtime150->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 151) {
  $future151 = $runtime151->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 152) {
  $future152 = $runtime152->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 153) {
  $future153 = $runtime153->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 154) {
  $future154 = $runtime154->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 155) {
  $future155 = $runtime155->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 156) {
  $future156 = $runtime156->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 157) {
  $future157 = $runtime157->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 158) {
  $future158 = $runtime158->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 159) {
  $future159 = $runtime159->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 160) {
  $future160 = $runtime160->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 161) {
  $future161 = $runtime161->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 162) {
  $future162 = $runtime162->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 163) {
  $future163 = $runtime163->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 164) {
  $future164 = $runtime164->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 165) {
  $future165 = $runtime165->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 166) {
  $future166 = $runtime166->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 167) {
  $future167 = $runtime167->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 168) {
  $future168 = $runtime168->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 169) {
  $future169 = $runtime169->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 170) {
  $future170 = $runtime170->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 171) {
  $future171 = $runtime171->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 172) {
  $future172 = $runtime172->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 173) {
  $future173 = $runtime173->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 174) {
  $future174 = $runtime174->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 175) {
  $future175 = $runtime175->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 176) {
  $future176 = $runtime176->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 177) {
  $future177 = $runtime177->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 178) {
  $future178 = $runtime178->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 179) {
  $future179 = $runtime179->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 180) {
  $future180 = $runtime180->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 181) {
  $future181 = $runtime181->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 182) {
  $future182 = $runtime182->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 183) {
  $future183 = $runtime183->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 184) {
  $future184 = $runtime184->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 185) {
  $future185 = $runtime185->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 186) {
  $future186 = $runtime186->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 187) {
  $future187 = $runtime187->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 188) {
  $future188 = $runtime188->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 189) {
  $future189 = $runtime189->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 190) {
  $future190 = $runtime190->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 191) {
  $future191 = $runtime191->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 192) {
  $future192 = $runtime192->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 193) {
  $future193 = $runtime193->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 194) {
  $future194 = $runtime194->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 195) {
  $future195 = $runtime195->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 196) {
  $future196 = $runtime196->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 197) {
  $future197 = $runtime197->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 198) {
  $future198 = $runtime198->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 199) {
  $future199 = $runtime199->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 200) {
  $future200 = $runtime200->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 201) {
  $future201 = $runtime201->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 202) {
  $future202 = $runtime202->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 203) {
  $future203 = $runtime203->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 204) {
  $future204 = $runtime204->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 205) {
  $future205 = $runtime205->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 206) {
  $future206 = $runtime206->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 207) {
  $future207 = $runtime207->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 208) {
  $future208 = $runtime208->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 209) {
  $future209 = $runtime209->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 210) {
  $future210 = $runtime210->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 211) {
  $future211 = $runtime211->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 212) {
  $future212 = $runtime212->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 213) {
  $future213 = $runtime213->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 214) {
  $future214 = $runtime214->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 215) {
  $future215 = $runtime215->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 216) {
  $future216 = $runtime216->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 217) {
  $future217 = $runtime217->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 218) {
  $future218 = $runtime218->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 219) {
  $future219 = $runtime219->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 220) {
  $future220 = $runtime220->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 221) {
  $future221 = $runtime221->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 222) {
  $future222 = $runtime222->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 223) {
  $future223 = $runtime223->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 224) {
  $future224 = $runtime224->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 225) {
  $future225 = $runtime225->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 226) {
  $future226 = $runtime226->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 227) {
  $future227 = $runtime227->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 228) {
  $future228 = $runtime228->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 229) {
  $future229 = $runtime229->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 230) {
  $future230 = $runtime230->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 231) {
  $future231 = $runtime231->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 232) {
  $future232 = $runtime232->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 233) {
  $future233 = $runtime233->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 234) {
  $future234 = $runtime234->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 235) {
  $future235 = $runtime235->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 236) {
  $future236 = $runtime236->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 237) {
  $future237 = $runtime237->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 238) {
  $future238 = $runtime238->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 239) {
  $future239 = $runtime239->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 240) {
  $future240 = $runtime240->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 241) {
  $future241 = $runtime241->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 242) {
  $future242 = $runtime242->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 243) {
  $future243 = $runtime243->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 244) {
  $future244 = $runtime244->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 245) {
  $future245 = $runtime245->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 246) {
  $future246 = $runtime246->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 247) {
  $future247 = $runtime247->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 248) {
  $future248 = $runtime248->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 249) {
  $future249 = $runtime249->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 250) {
  $future250 = $runtime250->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 251) {
  $future251 = $runtime251->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 252) {
  $future252 = $runtime252->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 253) {
  $future253 = $runtime253->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 254) {
  $future254 = $runtime254->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 255) {
  $future255 = $runtime255->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 256) {
  $future256 = $runtime256->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 257) {
  $future257 = $runtime257->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 258) {
  $future258 = $runtime258->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 259) {
  $future259 = $runtime259->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 260) {
  $future260 = $runtime260->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 261) {
  $future261 = $runtime261->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 262) {
  $future262 = $runtime262->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 263) {
  $future263 = $runtime263->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 264) {
  $future264 = $runtime264->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 265) {
  $future265 = $runtime265->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 266) {
  $future266 = $runtime266->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 267) {
  $future267 = $runtime267->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 268) {
  $future268 = $runtime268->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 269) {
  $future269 = $runtime269->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 270) {
  $future270 = $runtime270->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 271) {
  $future271 = $runtime271->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 272) {
  $future272 = $runtime272->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 273) {
  $future273 = $runtime273->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 274) {
  $future274 = $runtime274->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 275) {
  $future275 = $runtime275->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 276) {
  $future276 = $runtime276->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 277) {
  $future277 = $runtime277->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 278) {
  $future278 = $runtime278->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 279) {
  $future279 = $runtime279->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 280) {
  $future280 = $runtime280->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 281) {
  $future281 = $runtime281->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 282) {
  $future282 = $runtime282->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 283) {
  $future283 = $runtime283->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 284) {
  $future284 = $runtime284->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 285) {
  $future285 = $runtime285->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 286) {
  $future286 = $runtime286->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 287) {
  $future287 = $runtime287->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 288) {
  $future288 = $runtime288->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 289) {
  $future289 = $runtime289->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 290) {
  $future290 = $runtime290->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 291) {
  $future291 = $runtime291->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 292) {
  $future292 = $runtime292->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 293) {
  $future293 = $runtime293->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 294) {
  $future294 = $runtime294->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 295) {
  $future295 = $runtime295->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 296) {
  $future296 = $runtime296->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 297) {
  $future297 = $runtime297->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 298) {
  $future298 = $runtime298->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 299) {
  $future299 = $runtime299->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 300) {
  $future300 = $runtime300->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 301) {
  $future301 = $runtime301->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 302) {
  $future302 = $runtime302->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 303) {
  $future303 = $runtime303->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 304) {
  $future304 = $runtime304->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 305) {
  $future305 = $runtime305->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 306) {
  $future306 = $runtime306->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 307) {
  $future307 = $runtime307->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 308) {
  $future308 = $runtime308->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 309) {
  $future309 = $runtime309->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 310) {
  $future310 = $runtime310->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 311) {
  $future311 = $runtime311->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 312) {
  $future312 = $runtime312->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 313) {
  $future313 = $runtime313->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 314) {
  $future314 = $runtime314->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 315) {
  $future315 = $runtime315->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 316) {
  $future316 = $runtime316->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 317) {
  $future317 = $runtime317->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 318) {
  $future318 = $runtime318->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 319) {
  $future319 = $runtime319->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 320) {
  $future320 = $runtime320->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 321) {
  $future321 = $runtime321->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 322) {
  $future322 = $runtime322->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 323) {
  $future323 = $runtime323->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 324) {
  $future324 = $runtime324->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 325) {
  $future325 = $runtime325->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 326) {
  $future326 = $runtime326->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 327) {
  $future327 = $runtime327->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 328) {
  $future328 = $runtime328->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 329) {
  $future329 = $runtime329->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 330) {
  $future330 = $runtime330->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 331) {
  $future331 = $runtime331->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 332) {
  $future332 = $runtime332->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 333) {
  $future333 = $runtime333->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 334) {
  $future334 = $runtime334->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 335) {
  $future335 = $runtime335->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 336) {
  $future336 = $runtime336->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 337) {
  $future337 = $runtime337->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 338) {
  $future338 = $runtime338->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 339) {
  $future339 = $runtime339->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 340) {
  $future340 = $runtime340->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 341) {
  $future341 = $runtime341->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 342) {
  $future342 = $runtime342->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 343) {
  $future343 = $runtime343->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 344) {
  $future344 = $runtime344->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 345) {
  $future345 = $runtime345->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 346) {
  $future346 = $runtime346->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 347) {
  $future347 = $runtime347->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 348) {
  $future348 = $runtime348->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 349) {
  $future349 = $runtime349->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 350) {
  $future350 = $runtime350->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 351) {
  $future351 = $runtime351->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 352) {
  $future352 = $runtime352->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 353) {
  $future353 = $runtime353->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 354) {
  $future354 = $runtime354->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 355) {
  $future355 = $runtime355->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 356) {
  $future356 = $runtime356->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 357) {
  $future357 = $runtime357->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 358) {
  $future358 = $runtime358->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 359) {
  $future359 = $runtime359->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 360) {
  $future360 = $runtime360->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 361) {
  $future361 = $runtime361->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 362) {
  $future362 = $runtime362->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 363) {
  $future363 = $runtime363->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 364) {
  $future364 = $runtime364->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 365) {
  $future365 = $runtime365->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 366) {
  $future366 = $runtime366->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 367) {
  $future367 = $runtime367->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 368) {
  $future368 = $runtime368->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 369) {
  $future369 = $runtime369->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 370) {
  $future370 = $runtime370->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 371) {
  $future371 = $runtime371->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 372) {
  $future372 = $runtime372->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 373) {
  $future373 = $runtime373->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 374) {
  $future374 = $runtime374->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 375) {
  $future375 = $runtime375->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 376) {
  $future376 = $runtime376->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 377) {
  $future377 = $runtime377->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 378) {
  $future378 = $runtime378->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 379) {
  $future379 = $runtime379->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 380) {
  $future380 = $runtime380->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 381) {
  $future381 = $runtime381->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 382) {
  $future382 = $runtime382->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 383) {
  $future383 = $runtime383->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 384) {
  $future384 = $runtime384->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 385) {
  $future385 = $runtime385->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 386) {
  $future386 = $runtime386->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 387) {
  $future387 = $runtime387->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 388) {
  $future388 = $runtime388->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 389) {
  $future389 = $runtime389->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 390) {
  $future390 = $runtime390->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 391) {
  $future391 = $runtime391->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 392) {
  $future392 = $runtime392->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 393) {
  $future393 = $runtime393->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 394) {
  $future394 = $runtime394->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 395) {
  $future395 = $runtime395->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 396) {
  $future396 = $runtime396->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 397) {
  $future397 = $runtime397->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 398) {
  $future398 = $runtime398->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 399) {
  $future399 = $runtime399->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 400) {
  $future400 = $runtime400->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 401) {
  $future401 = $runtime401->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 402) {
  $future402 = $runtime402->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 403) {
  $future403 = $runtime403->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 404) {
  $future404 = $runtime404->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 405) {
  $future405 = $runtime405->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 406) {
  $future406 = $runtime406->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 407) {
  $future407 = $runtime407->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 408) {
  $future408 = $runtime408->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 409) {
  $future409 = $runtime409->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 410) {
  $future410 = $runtime410->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 411) {
  $future411 = $runtime411->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 412) {
  $future412 = $runtime412->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 413) {
  $future413 = $runtime413->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 414) {
  $future414 = $runtime414->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 415) {
  $future415 = $runtime415->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 416) {
  $future416 = $runtime416->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 417) {
  $future417 = $runtime417->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 418) {
  $future418 = $runtime418->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 419) {
  $future419 = $runtime419->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 420) {
  $future420 = $runtime420->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 421) {
  $future421 = $runtime421->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 422) {
  $future422 = $runtime422->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 423) {
  $future423 = $runtime423->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 424) {
  $future424 = $runtime424->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 425) {
  $future425 = $runtime425->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 426) {
  $future426 = $runtime426->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 427) {
  $future427 = $runtime427->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 428) {
  $future428 = $runtime428->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 429) {
  $future429 = $runtime429->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 430) {
  $future430 = $runtime430->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 431) {
  $future431 = $runtime431->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 432) {
  $future432 = $runtime432->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 433) {
  $future433 = $runtime433->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 434) {
  $future434 = $runtime434->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 435) {
  $future435 = $runtime435->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 436) {
  $future436 = $runtime436->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 437) {
  $future437 = $runtime437->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 438) {
  $future438 = $runtime438->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 439) {
  $future439 = $runtime439->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 440) {
  $future440 = $runtime440->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 441) {
  $future441 = $runtime441->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 442) {
  $future442 = $runtime442->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 443) {
  $future443 = $runtime443->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 444) {
  $future444 = $runtime444->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 445) {
  $future445 = $runtime445->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 446) {
  $future446 = $runtime446->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 447) {
  $future447 = $runtime447->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 448) {
  $future448 = $runtime448->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 449) {
  $future449 = $runtime449->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 450) {
  $future450 = $runtime450->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 451) {
  $future451 = $runtime451->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 452) {
  $future452 = $runtime452->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 453) {
  $future453 = $runtime453->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 454) {
  $future454 = $runtime454->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 455) {
  $future455 = $runtime455->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 456) {
  $future456 = $runtime456->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 457) {
  $future457 = $runtime457->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 458) {
  $future458 = $runtime458->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 459) {
  $future459 = $runtime459->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 460) {
  $future460 = $runtime460->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 461) {
  $future461 = $runtime461->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 462) {
  $future462 = $runtime462->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 463) {
  $future463 = $runtime463->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 464) {
  $future464 = $runtime464->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 465) {
  $future465 = $runtime465->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 466) {
  $future466 = $runtime466->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 467) {
  $future467 = $runtime467->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 468) {
  $future468 = $runtime468->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 469) {
  $future469 = $runtime469->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 470) {
  $future470 = $runtime470->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 471) {
  $future471 = $runtime471->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 472) {
  $future472 = $runtime472->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 473) {
  $future473 = $runtime473->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 474) {
  $future474 = $runtime474->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 475) {
  $future475 = $runtime475->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 476) {
  $future476 = $runtime476->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 477) {
  $future477 = $runtime477->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 478) {
  $future478 = $runtime478->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 479) {
  $future479 = $runtime479->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 480) {
  $future480 = $runtime480->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 481) {
  $future481 = $runtime481->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 482) {
  $future482 = $runtime482->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 483) {
  $future483 = $runtime483->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 484) {
  $future484 = $runtime484->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 485) {
  $future485 = $runtime485->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 486) {
  $future486 = $runtime486->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 487) {
  $future487 = $runtime487->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 488) {
  $future488 = $runtime488->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 489) {
  $future489 = $runtime489->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 490) {
  $future490 = $runtime490->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 491) {
  $future491 = $runtime491->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 492) {
  $future492 = $runtime492->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 493) {
  $future493 = $runtime493->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 494) {
  $future494 = $runtime494->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 495) {
  $future495 = $runtime495->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 496) {
  $future496 = $runtime496->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 497) {
  $future497 = $runtime497->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 498) {
  $future498 = $runtime498->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 499) {
  $future499 = $runtime499->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 500) {
  $future500 = $runtime500->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 501) {
  $future501 = $runtime501->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 502) {
  $future502 = $runtime502->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 503) {
  $future503 = $runtime503->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 504) {
  $future504 = $runtime504->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 505) {
  $future505 = $runtime505->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 506) {
  $future506 = $runtime506->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 507) {
  $future507 = $runtime507->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 508) {
  $future508 = $runtime508->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 509) {
  $future509 = $runtime509->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 510) {
  $future510 = $runtime510->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 511) {
  $future511 = $runtime511->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 512) {
  $future512 = $runtime512->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 513) {
  $future513 = $runtime513->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 514) {
  $future514 = $runtime514->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 515) {
  $future515 = $runtime515->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 516) {
  $future516 = $runtime516->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 517) {
  $future517 = $runtime517->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 518) {
  $future518 = $runtime518->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 519) {
  $future519 = $runtime519->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 520) {
  $future520 = $runtime520->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 521) {
  $future521 = $runtime521->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 522) {
  $future522 = $runtime522->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 523) {
  $future523 = $runtime523->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 524) {
  $future524 = $runtime524->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 525) {
  $future525 = $runtime525->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 526) {
  $future526 = $runtime526->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 527) {
  $future527 = $runtime527->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 528) {
  $future528 = $runtime528->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 529) {
  $future529 = $runtime529->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 530) {
  $future530 = $runtime530->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 531) {
  $future531 = $runtime531->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 532) {
  $future532 = $runtime532->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 533) {
  $future533 = $runtime533->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 534) {
  $future534 = $runtime534->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 535) {
  $future535 = $runtime535->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 536) {
  $future536 = $runtime536->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 537) {
  $future537 = $runtime537->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 538) {
  $future538 = $runtime538->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 539) {
  $future539 = $runtime539->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 540) {
  $future540 = $runtime540->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 541) {
  $future541 = $runtime541->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 542) {
  $future542 = $runtime542->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 543) {
  $future543 = $runtime543->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 544) {
  $future544 = $runtime544->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 545) {
  $future545 = $runtime545->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 546) {
  $future546 = $runtime546->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 547) {
  $future547 = $runtime547->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 548) {
  $future548 = $runtime548->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 549) {
  $future549 = $runtime549->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 550) {
  $future550 = $runtime550->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 551) {
  $future551 = $runtime551->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 552) {
  $future552 = $runtime552->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 553) {
  $future553 = $runtime553->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 554) {
  $future554 = $runtime554->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 555) {
  $future555 = $runtime555->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 556) {
  $future556 = $runtime556->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 557) {
  $future557 = $runtime557->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 558) {
  $future558 = $runtime558->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 559) {
  $future559 = $runtime559->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 560) {
  $future560 = $runtime560->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 561) {
  $future561 = $runtime561->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 562) {
  $future562 = $runtime562->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 563) {
  $future563 = $runtime563->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 564) {
  $future564 = $runtime564->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 565) {
  $future565 = $runtime565->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 566) {
  $future566 = $runtime566->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 567) {
  $future567 = $runtime567->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 568) {
  $future568 = $runtime568->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 569) {
  $future569 = $runtime569->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 570) {
  $future570 = $runtime570->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 571) {
  $future571 = $runtime571->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 572) {
  $future572 = $runtime572->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 573) {
  $future573 = $runtime573->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 574) {
  $future574 = $runtime574->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 575) {
  $future575 = $runtime575->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 576) {
  $future576 = $runtime576->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 577) {
  $future577 = $runtime577->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 578) {
  $future578 = $runtime578->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 579) {
  $future579 = $runtime579->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 580) {
  $future580 = $runtime580->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 581) {
  $future581 = $runtime581->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 582) {
  $future582 = $runtime582->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 583) {
  $future583 = $runtime583->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 584) {
  $future584 = $runtime584->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 585) {
  $future585 = $runtime585->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 586) {
  $future586 = $runtime586->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 587) {
  $future587 = $runtime587->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 588) {
  $future588 = $runtime588->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 589) {
  $future589 = $runtime589->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 590) {
  $future590 = $runtime590->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 591) {
  $future591 = $runtime591->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 592) {
  $future592 = $runtime592->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 593) {
  $future593 = $runtime593->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 594) {
  $future594 = $runtime594->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 595) {
  $future595 = $runtime595->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 596) {
  $future596 = $runtime596->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 597) {
  $future597 = $runtime597->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 598) {
  $future598 = $runtime598->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 599) {
  $future599 = $runtime599->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 600) {
  $future600 = $runtime600->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 601) {
  $future601 = $runtime601->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 602) {
  $future602 = $runtime602->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 603) {
  $future603 = $runtime603->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 604) {
  $future604 = $runtime604->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 605) {
  $future605 = $runtime605->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 606) {
  $future606 = $runtime606->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 607) {
  $future607 = $runtime607->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 608) {
  $future608 = $runtime608->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 609) {
  $future609 = $runtime609->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 610) {
  $future610 = $runtime610->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 611) {
  $future611 = $runtime611->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 612) {
  $future612 = $runtime612->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 613) {
  $future613 = $runtime613->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 614) {
  $future614 = $runtime614->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 615) {
  $future615 = $runtime615->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 616) {
  $future616 = $runtime616->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 617) {
  $future617 = $runtime617->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 618) {
  $future618 = $runtime618->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 619) {
  $future619 = $runtime619->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 620) {
  $future620 = $runtime620->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 621) {
  $future621 = $runtime621->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 622) {
  $future622 = $runtime622->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 623) {
  $future623 = $runtime623->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 624) {
  $future624 = $runtime624->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 625) {
  $future625 = $runtime625->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 626) {
  $future626 = $runtime626->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 627) {
  $future627 = $runtime627->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 628) {
  $future628 = $runtime628->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 629) {
  $future629 = $runtime629->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 630) {
  $future630 = $runtime630->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 631) {
  $future631 = $runtime631->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 632) {
  $future632 = $runtime632->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 633) {
  $future633 = $runtime633->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 634) {
  $future634 = $runtime634->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 635) {
  $future635 = $runtime635->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 636) {
  $future636 = $runtime636->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 637) {
  $future637 = $runtime637->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 638) {
  $future638 = $runtime638->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 639) {
  $future639 = $runtime639->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 640) {
  $future640 = $runtime640->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 641) {
  $future641 = $runtime641->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 642) {
  $future642 = $runtime642->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 643) {
  $future643 = $runtime643->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 644) {
  $future644 = $runtime644->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 645) {
  $future645 = $runtime645->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 646) {
  $future646 = $runtime646->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 647) {
  $future647 = $runtime647->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 648) {
  $future648 = $runtime648->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 649) {
  $future649 = $runtime649->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 650) {
  $future650 = $runtime650->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 651) {
  $future651 = $runtime651->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 652) {
  $future652 = $runtime652->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 653) {
  $future653 = $runtime653->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 654) {
  $future654 = $runtime654->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 655) {
  $future655 = $runtime655->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 656) {
  $future656 = $runtime656->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 657) {
  $future657 = $runtime657->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 658) {
  $future658 = $runtime658->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 659) {
  $future659 = $runtime659->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 660) {
  $future660 = $runtime660->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 661) {
  $future661 = $runtime661->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 662) {
  $future662 = $runtime662->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 663) {
  $future663 = $runtime663->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 664) {
  $future664 = $runtime664->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 665) {
  $future665 = $runtime665->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 666) {
  $future666 = $runtime666->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 667) {
  $future667 = $runtime667->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 668) {
  $future668 = $runtime668->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 669) {
  $future669 = $runtime669->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 670) {
  $future670 = $runtime670->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 671) {
  $future671 = $runtime671->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 672) {
  $future672 = $runtime672->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 673) {
  $future673 = $runtime673->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 674) {
  $future674 = $runtime674->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 675) {
  $future675 = $runtime675->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 676) {
  $future676 = $runtime676->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 677) {
  $future677 = $runtime677->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 678) {
  $future678 = $runtime678->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 679) {
  $future679 = $runtime679->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 680) {
  $future680 = $runtime680->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 681) {
  $future681 = $runtime681->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 682) {
  $future682 = $runtime682->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 683) {
  $future683 = $runtime683->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 684) {
  $future684 = $runtime684->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 685) {
  $future685 = $runtime685->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 686) {
  $future686 = $runtime686->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 687) {
  $future687 = $runtime687->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 688) {
  $future688 = $runtime688->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 689) {
  $future689 = $runtime689->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 690) {
  $future690 = $runtime690->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 691) {
  $future691 = $runtime691->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 692) {
  $future692 = $runtime692->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 693) {
  $future693 = $runtime693->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 694) {
  $future694 = $runtime694->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 695) {
  $future695 = $runtime695->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 696) {
  $future696 = $runtime696->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 697) {
  $future697 = $runtime697->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 698) {
  $future698 = $runtime698->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 699) {
  $future699 = $runtime699->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 700) {
  $future700 = $runtime700->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 701) {
  $future701 = $runtime701->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 702) {
  $future702 = $runtime702->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 703) {
  $future703 = $runtime703->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 704) {
  $future704 = $runtime704->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 705) {
  $future705 = $runtime705->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 706) {
  $future706 = $runtime706->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 707) {
  $future707 = $runtime707->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 708) {
  $future708 = $runtime708->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 709) {
  $future709 = $runtime709->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 710) {
  $future710 = $runtime710->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 711) {
  $future711 = $runtime711->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 712) {
  $future712 = $runtime712->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 713) {
  $future713 = $runtime713->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 714) {
  $future714 = $runtime714->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 715) {
  $future715 = $runtime715->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 716) {
  $future716 = $runtime716->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 717) {
  $future717 = $runtime717->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 718) {
  $future718 = $runtime718->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 719) {
  $future719 = $runtime719->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 720) {
  $future720 = $runtime720->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 721) {
  $future721 = $runtime721->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 722) {
  $future722 = $runtime722->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 723) {
  $future723 = $runtime723->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 724) {
  $future724 = $runtime724->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 725) {
  $future725 = $runtime725->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 726) {
  $future726 = $runtime726->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 727) {
  $future727 = $runtime727->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 728) {
  $future728 = $runtime728->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 729) {
  $future729 = $runtime729->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 730) {
  $future730 = $runtime730->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 731) {
  $future731 = $runtime731->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 732) {
  $future732 = $runtime732->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 733) {
  $future733 = $runtime733->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 734) {
  $future734 = $runtime734->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 735) {
  $future735 = $runtime735->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 736) {
  $future736 = $runtime736->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 737) {
  $future737 = $runtime737->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 738) {
  $future738 = $runtime738->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 739) {
  $future739 = $runtime739->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 740) {
  $future740 = $runtime740->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 741) {
  $future741 = $runtime741->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 742) {
  $future742 = $runtime742->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 743) {
  $future743 = $runtime743->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 744) {
  $future744 = $runtime744->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 745) {
  $future745 = $runtime745->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 746) {
  $future746 = $runtime746->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 747) {
  $future747 = $runtime747->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 748) {
  $future748 = $runtime748->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 749) {
  $future749 = $runtime749->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 750) {
  $future750 = $runtime750->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 751) {
  $future751 = $runtime751->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 752) {
  $future752 = $runtime752->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 753) {
  $future753 = $runtime753->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 754) {
  $future754 = $runtime754->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 755) {
  $future755 = $runtime755->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 756) {
  $future756 = $runtime756->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 757) {
  $future757 = $runtime757->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 758) {
  $future758 = $runtime758->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 759) {
  $future759 = $runtime759->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 760) {
  $future760 = $runtime760->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 761) {
  $future761 = $runtime761->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 762) {
  $future762 = $runtime762->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 763) {
  $future763 = $runtime763->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 764) {
  $future764 = $runtime764->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 765) {
  $future765 = $runtime765->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 766) {
  $future766 = $runtime766->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 767) {
  $future767 = $runtime767->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 768) {
  $future768 = $runtime768->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 769) {
  $future769 = $runtime769->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 770) {
  $future770 = $runtime770->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 771) {
  $future771 = $runtime771->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 772) {
  $future772 = $runtime772->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 773) {
  $future773 = $runtime773->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 774) {
  $future774 = $runtime774->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 775) {
  $future775 = $runtime775->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 776) {
  $future776 = $runtime776->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 777) {
  $future777 = $runtime777->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 778) {
  $future778 = $runtime778->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 779) {
  $future779 = $runtime779->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 780) {
  $future780 = $runtime780->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 781) {
  $future781 = $runtime781->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 782) {
  $future782 = $runtime782->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 783) {
  $future783 = $runtime783->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 784) {
  $future784 = $runtime784->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 785) {
  $future785 = $runtime785->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 786) {
  $future786 = $runtime786->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 787) {
  $future787 = $runtime787->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 788) {
  $future788 = $runtime788->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 789) {
  $future789 = $runtime789->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 790) {
  $future790 = $runtime790->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 791) {
  $future791 = $runtime791->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 792) {
  $future792 = $runtime792->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 793) {
  $future793 = $runtime793->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 794) {
  $future794 = $runtime794->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 795) {
  $future795 = $runtime795->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 796) {
  $future796 = $runtime796->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 797) {
  $future797 = $runtime797->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 798) {
  $future798 = $runtime798->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 799) {
  $future799 = $runtime799->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 800) {
  $future800 = $runtime800->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 801) {
  $future801 = $runtime801->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 802) {
  $future802 = $runtime802->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 803) {
  $future803 = $runtime803->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 804) {
  $future804 = $runtime804->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 805) {
  $future805 = $runtime805->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 806) {
  $future806 = $runtime806->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 807) {
  $future807 = $runtime807->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 808) {
  $future808 = $runtime808->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 809) {
  $future809 = $runtime809->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 810) {
  $future810 = $runtime810->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 811) {
  $future811 = $runtime811->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 812) {
  $future812 = $runtime812->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 813) {
  $future813 = $runtime813->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 814) {
  $future814 = $runtime814->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 815) {
  $future815 = $runtime815->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 816) {
  $future816 = $runtime816->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 817) {
  $future817 = $runtime817->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 818) {
  $future818 = $runtime818->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 819) {
  $future819 = $runtime819->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 820) {
  $future820 = $runtime820->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 821) {
  $future821 = $runtime821->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 822) {
  $future822 = $runtime822->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 823) {
  $future823 = $runtime823->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 824) {
  $future824 = $runtime824->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 825) {
  $future825 = $runtime825->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 826) {
  $future826 = $runtime826->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 827) {
  $future827 = $runtime827->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 828) {
  $future828 = $runtime828->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 829) {
  $future829 = $runtime829->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 830) {
  $future830 = $runtime830->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 831) {
  $future831 = $runtime831->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 832) {
  $future832 = $runtime832->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 833) {
  $future833 = $runtime833->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 834) {
  $future834 = $runtime834->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 835) {
  $future835 = $runtime835->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 836) {
  $future836 = $runtime836->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 837) {
  $future837 = $runtime837->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 838) {
  $future838 = $runtime838->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 839) {
  $future839 = $runtime839->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 840) {
  $future840 = $runtime840->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 841) {
  $future841 = $runtime841->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 842) {
  $future842 = $runtime842->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 843) {
  $future843 = $runtime843->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 844) {
  $future844 = $runtime844->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 845) {
  $future845 = $runtime845->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 846) {
  $future846 = $runtime846->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 847) {
  $future847 = $runtime847->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 848) {
  $future848 = $runtime848->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 849) {
  $future849 = $runtime849->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 850) {
  $future850 = $runtime850->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 851) {
  $future851 = $runtime851->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 852) {
  $future852 = $runtime852->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 853) {
  $future853 = $runtime853->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 854) {
  $future854 = $runtime854->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 855) {
  $future855 = $runtime855->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 856) {
  $future856 = $runtime856->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 857) {
  $future857 = $runtime857->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 858) {
  $future858 = $runtime858->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 859) {
  $future859 = $runtime859->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 860) {
  $future860 = $runtime860->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 861) {
  $future861 = $runtime861->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 862) {
  $future862 = $runtime862->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 863) {
  $future863 = $runtime863->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 864) {
  $future864 = $runtime864->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 865) {
  $future865 = $runtime865->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 866) {
  $future866 = $runtime866->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 867) {
  $future867 = $runtime867->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 868) {
  $future868 = $runtime868->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 869) {
  $future869 = $runtime869->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 870) {
  $future870 = $runtime870->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 871) {
  $future871 = $runtime871->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 872) {
  $future872 = $runtime872->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 873) {
  $future873 = $runtime873->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 874) {
  $future874 = $runtime874->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 875) {
  $future875 = $runtime875->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 876) {
  $future876 = $runtime876->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 877) {
  $future877 = $runtime877->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 878) {
  $future878 = $runtime878->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 879) {
  $future879 = $runtime879->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 880) {
  $future880 = $runtime880->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 881) {
  $future881 = $runtime881->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 882) {
  $future882 = $runtime882->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 883) {
  $future883 = $runtime883->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 884) {
  $future884 = $runtime884->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 885) {
  $future885 = $runtime885->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 886) {
  $future886 = $runtime886->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 887) {
  $future887 = $runtime887->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 888) {
  $future888 = $runtime888->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 889) {
  $future889 = $runtime889->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 890) {
  $future890 = $runtime890->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 891) {
  $future891 = $runtime891->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 892) {
  $future892 = $runtime892->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 893) {
  $future893 = $runtime893->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 894) {
  $future894 = $runtime894->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 895) {
  $future895 = $runtime895->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 896) {
  $future896 = $runtime896->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 897) {
  $future897 = $runtime897->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 898) {
  $future898 = $runtime898->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 899) {
  $future899 = $runtime899->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 900) {
  $future900 = $runtime900->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 901) {
  $future901 = $runtime901->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 902) {
  $future902 = $runtime902->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 903) {
  $future903 = $runtime903->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 904) {
  $future904 = $runtime904->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 905) {
  $future905 = $runtime905->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 906) {
  $future906 = $runtime906->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 907) {
  $future907 = $runtime907->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 908) {
  $future908 = $runtime908->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 909) {
  $future909 = $runtime909->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 910) {
  $future910 = $runtime910->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 911) {
  $future911 = $runtime911->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 912) {
  $future912 = $runtime912->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 913) {
  $future913 = $runtime913->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 914) {
  $future914 = $runtime914->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 915) {
  $future915 = $runtime915->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 916) {
  $future916 = $runtime916->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 917) {
  $future917 = $runtime917->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 918) {
  $future918 = $runtime918->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 919) {
  $future919 = $runtime919->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 920) {
  $future920 = $runtime920->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 921) {
  $future921 = $runtime921->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 922) {
  $future922 = $runtime922->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 923) {
  $future923 = $runtime923->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 924) {
  $future924 = $runtime924->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 925) {
  $future925 = $runtime925->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 926) {
  $future926 = $runtime926->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 927) {
  $future927 = $runtime927->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 928) {
  $future928 = $runtime928->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 929) {
  $future929 = $runtime929->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 930) {
  $future930 = $runtime930->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 931) {
  $future931 = $runtime931->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 932) {
  $future932 = $runtime932->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 933) {
  $future933 = $runtime933->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 934) {
  $future934 = $runtime934->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 935) {
  $future935 = $runtime935->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 936) {
  $future936 = $runtime936->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 937) {
  $future937 = $runtime937->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 938) {
  $future938 = $runtime938->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 939) {
  $future939 = $runtime939->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 940) {
  $future940 = $runtime940->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 941) {
  $future941 = $runtime941->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 942) {
  $future942 = $runtime942->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 943) {
  $future943 = $runtime943->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 944) {
  $future944 = $runtime944->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 945) {
  $future945 = $runtime945->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 946) {
  $future946 = $runtime946->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 947) {
  $future947 = $runtime947->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 948) {
  $future948 = $runtime948->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 949) {
  $future949 = $runtime949->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 950) {
  $future950 = $runtime950->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 951) {
  $future951 = $runtime951->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 952) {
  $future952 = $runtime952->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 953) {
  $future953 = $runtime953->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 954) {
  $future954 = $runtime954->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 955) {
  $future955 = $runtime955->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 956) {
  $future956 = $runtime956->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 957) {
  $future957 = $runtime957->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 958) {
  $future958 = $runtime958->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 959) {
  $future959 = $runtime959->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 960) {
  $future960 = $runtime960->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 961) {
  $future961 = $runtime961->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 962) {
  $future962 = $runtime962->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 963) {
  $future963 = $runtime963->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 964) {
  $future964 = $runtime964->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 965) {
  $future965 = $runtime965->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 966) {
  $future966 = $runtime966->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 967) {
  $future967 = $runtime967->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 968) {
  $future968 = $runtime968->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 969) {
  $future969 = $runtime969->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 970) {
  $future970 = $runtime970->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 971) {
  $future971 = $runtime971->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 972) {
  $future972 = $runtime972->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 973) {
  $future973 = $runtime973->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 974) {
  $future974 = $runtime974->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 975) {
  $future975 = $runtime975->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 976) {
  $future976 = $runtime976->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 977) {
  $future977 = $runtime977->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 978) {
  $future978 = $runtime978->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 979) {
  $future979 = $runtime979->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 980) {
  $future980 = $runtime980->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 981) {
  $future981 = $runtime981->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 982) {
  $future982 = $runtime982->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 983) {
  $future983 = $runtime983->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 984) {
  $future984 = $runtime984->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 985) {
  $future985 = $runtime985->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 986) {
  $future986 = $runtime986->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 987) {
  $future987 = $runtime987->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 988) {
  $future988 = $runtime988->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 989) {
  $future989 = $runtime989->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 990) {
  $future990 = $runtime990->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 991) {
  $future991 = $runtime991->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 992) {
  $future992 = $runtime992->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 993) {
  $future993 = $runtime993->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 994) {
  $future994 = $runtime994->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 995) {
  $future995 = $runtime995->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 996) {
  $future996 = $runtime996->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 997) {
  $future997 = $runtime997->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 998) {
  $future998 = $runtime998->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 999) {
  $future999 = $runtime999->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
}


if ($pages >= 1000) {
  $future1000 = $runtime1000->run(function($url){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $tds = $dom->getElementsByTagName('td');
    $data = [];

    for ($i = 0; $i < $tds->length; $i++) {
      array_push($data, $tds->item($i)->nodeValue);
    }

    return $data;
  }, array($url));
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

if ($pages >= 53) {
  $data = array_merge($data, $future53->value());
}

if ($pages >= 54) {
  $data = array_merge($data, $future54->value());
}

if ($pages >= 55) {
  $data = array_merge($data, $future55->value());
}

if ($pages >= 56) {
  $data = array_merge($data, $future56->value());
}

if ($pages >= 57) {
  $data = array_merge($data, $future57->value());
}

if ($pages >= 58) {
  $data = array_merge($data, $future58->value());
}

if ($pages >= 59) {
  $data = array_merge($data, $future59->value());
}

if ($pages >= 60) {
  $data = array_merge($data, $future60->value());
}

if ($pages >= 61) {
  $data = array_merge($data, $future61->value());
}

if ($pages >= 62) {
  $data = array_merge($data, $future62->value());
}

if ($pages >= 63) {
  $data = array_merge($data, $future63->value());
}

if ($pages >= 64) {
  $data = array_merge($data, $future64->value());
}

if ($pages >= 65) {
  $data = array_merge($data, $future65->value());
}

if ($pages >= 66) {
  $data = array_merge($data, $future66->value());
}

if ($pages >= 67) {
  $data = array_merge($data, $future67->value());
}

if ($pages >= 68) {
  $data = array_merge($data, $future68->value());
}

if ($pages >= 69) {
  $data = array_merge($data, $future69->value());
}

if ($pages >= 70) {
  $data = array_merge($data, $future70->value());
}

if ($pages >= 71) {
  $data = array_merge($data, $future71->value());
}

if ($pages >= 72) {
  $data = array_merge($data, $future72->value());
}

if ($pages >= 73) {
  $data = array_merge($data, $future73->value());
}

if ($pages >= 74) {
  $data = array_merge($data, $future74->value());
}

if ($pages >= 75) {
  $data = array_merge($data, $future75->value());
}

if ($pages >= 76) {
  $data = array_merge($data, $future76->value());
}

if ($pages >= 77) {
  $data = array_merge($data, $future77->value());
}

if ($pages >= 78) {
  $data = array_merge($data, $future78->value());
}

if ($pages >= 79) {
  $data = array_merge($data, $future79->value());
}

if ($pages >= 80) {
  $data = array_merge($data, $future80->value());
}

if ($pages >= 81) {
  $data = array_merge($data, $future81->value());
}

if ($pages >= 82) {
  $data = array_merge($data, $future82->value());
}

if ($pages >= 83) {
  $data = array_merge($data, $future83->value());
}

if ($pages >= 84) {
  $data = array_merge($data, $future84->value());
}

if ($pages >= 85) {
  $data = array_merge($data, $future85->value());
}

if ($pages >= 86) {
  $data = array_merge($data, $future86->value());
}

if ($pages >= 87) {
  $data = array_merge($data, $future87->value());
}

if ($pages >= 88) {
  $data = array_merge($data, $future88->value());
}

if ($pages >= 89) {
  $data = array_merge($data, $future89->value());
}

if ($pages >= 90) {
  $data = array_merge($data, $future90->value());
}

if ($pages >= 91) {
  $data = array_merge($data, $future91->value());
}

if ($pages >= 92) {
  $data = array_merge($data, $future92->value());
}

if ($pages >= 93) {
  $data = array_merge($data, $future93->value());
}

if ($pages >= 94) {
  $data = array_merge($data, $future94->value());
}

if ($pages >= 95) {
  $data = array_merge($data, $future95->value());
}

if ($pages >= 96) {
  $data = array_merge($data, $future96->value());
}

if ($pages >= 97) {
  $data = array_merge($data, $future97->value());
}

if ($pages >= 98) {
  $data = array_merge($data, $future98->value());
}

if ($pages >= 99) {
  $data = array_merge($data, $future99->value());
}

if ($pages >= 100) {
  $data = array_merge($data, $future100->value());
}

if ($pages >= 101) {
  $data = array_merge($data, $future101->value());
}

if ($pages >= 102) {
  $data = array_merge($data, $future102->value());
}

if ($pages >= 103) {
  $data = array_merge($data, $future103->value());
}

if ($pages >= 104) {
  $data = array_merge($data, $future104->value());
}

if ($pages >= 105) {
  $data = array_merge($data, $future105->value());
}

if ($pages >= 106) {
  $data = array_merge($data, $future106->value());
}

if ($pages >= 107) {
  $data = array_merge($data, $future107->value());
}

if ($pages >= 108) {
  $data = array_merge($data, $future108->value());
}

if ($pages >= 109) {
  $data = array_merge($data, $future109->value());
}

if ($pages >= 110) {
  $data = array_merge($data, $future110->value());
}

if ($pages >= 111) {
  $data = array_merge($data, $future111->value());
}

if ($pages >= 112) {
  $data = array_merge($data, $future112->value());
}

if ($pages >= 113) {
  $data = array_merge($data, $future113->value());
}

if ($pages >= 114) {
  $data = array_merge($data, $future114->value());
}

if ($pages >= 115) {
  $data = array_merge($data, $future115->value());
}

if ($pages >= 116) {
  $data = array_merge($data, $future116->value());
}

if ($pages >= 117) {
  $data = array_merge($data, $future117->value());
}

if ($pages >= 118) {
  $data = array_merge($data, $future118->value());
}

if ($pages >= 119) {
  $data = array_merge($data, $future119->value());
}

if ($pages >= 120) {
  $data = array_merge($data, $future120->value());
}

if ($pages >= 121) {
  $data = array_merge($data, $future121->value());
}

if ($pages >= 122) {
  $data = array_merge($data, $future122->value());
}

if ($pages >= 123) {
  $data = array_merge($data, $future123->value());
}

if ($pages >= 124) {
  $data = array_merge($data, $future124->value());
}

if ($pages >= 125) {
  $data = array_merge($data, $future125->value());
}

if ($pages >= 126) {
  $data = array_merge($data, $future126->value());
}

if ($pages >= 127) {
  $data = array_merge($data, $future127->value());
}

if ($pages >= 128) {
  $data = array_merge($data, $future128->value());
}

if ($pages >= 129) {
  $data = array_merge($data, $future129->value());
}

if ($pages >= 130) {
  $data = array_merge($data, $future130->value());
}

if ($pages >= 131) {
  $data = array_merge($data, $future131->value());
}

if ($pages >= 132) {
  $data = array_merge($data, $future132->value());
}

if ($pages >= 133) {
  $data = array_merge($data, $future133->value());
}

if ($pages >= 134) {
  $data = array_merge($data, $future134->value());
}

if ($pages >= 135) {
  $data = array_merge($data, $future135->value());
}

if ($pages >= 136) {
  $data = array_merge($data, $future136->value());
}

if ($pages >= 137) {
  $data = array_merge($data, $future137->value());
}

if ($pages >= 138) {
  $data = array_merge($data, $future138->value());
}

if ($pages >= 139) {
  $data = array_merge($data, $future139->value());
}

if ($pages >= 140) {
  $data = array_merge($data, $future140->value());
}

if ($pages >= 141) {
  $data = array_merge($data, $future141->value());
}

if ($pages >= 142) {
  $data = array_merge($data, $future142->value());
}

if ($pages >= 143) {
  $data = array_merge($data, $future143->value());
}

if ($pages >= 144) {
  $data = array_merge($data, $future144->value());
}

if ($pages >= 145) {
  $data = array_merge($data, $future145->value());
}

if ($pages >= 146) {
  $data = array_merge($data, $future146->value());
}

if ($pages >= 147) {
  $data = array_merge($data, $future147->value());
}

if ($pages >= 148) {
  $data = array_merge($data, $future148->value());
}

if ($pages >= 149) {
  $data = array_merge($data, $future149->value());
}

if ($pages >= 150) {
  $data = array_merge($data, $future150->value());
}

if ($pages >= 151) {
  $data = array_merge($data, $future151->value());
}

if ($pages >= 152) {
  $data = array_merge($data, $future152->value());
}

if ($pages >= 153) {
  $data = array_merge($data, $future153->value());
}

if ($pages >= 154) {
  $data = array_merge($data, $future154->value());
}

if ($pages >= 155) {
  $data = array_merge($data, $future155->value());
}

if ($pages >= 156) {
  $data = array_merge($data, $future156->value());
}

if ($pages >= 157) {
  $data = array_merge($data, $future157->value());
}

if ($pages >= 158) {
  $data = array_merge($data, $future158->value());
}

if ($pages >= 159) {
  $data = array_merge($data, $future159->value());
}

if ($pages >= 160) {
  $data = array_merge($data, $future160->value());
}

if ($pages >= 161) {
  $data = array_merge($data, $future161->value());
}

if ($pages >= 162) {
  $data = array_merge($data, $future162->value());
}

if ($pages >= 163) {
  $data = array_merge($data, $future163->value());
}

if ($pages >= 164) {
  $data = array_merge($data, $future164->value());
}

if ($pages >= 165) {
  $data = array_merge($data, $future165->value());
}

if ($pages >= 166) {
  $data = array_merge($data, $future166->value());
}

if ($pages >= 167) {
  $data = array_merge($data, $future167->value());
}

if ($pages >= 168) {
  $data = array_merge($data, $future168->value());
}

if ($pages >= 169) {
  $data = array_merge($data, $future169->value());
}

if ($pages >= 170) {
  $data = array_merge($data, $future170->value());
}

if ($pages >= 171) {
  $data = array_merge($data, $future171->value());
}

if ($pages >= 172) {
  $data = array_merge($data, $future172->value());
}

if ($pages >= 173) {
  $data = array_merge($data, $future173->value());
}

if ($pages >= 174) {
  $data = array_merge($data, $future174->value());
}

if ($pages >= 175) {
  $data = array_merge($data, $future175->value());
}

if ($pages >= 176) {
  $data = array_merge($data, $future176->value());
}

if ($pages >= 177) {
  $data = array_merge($data, $future177->value());
}

if ($pages >= 178) {
  $data = array_merge($data, $future178->value());
}

if ($pages >= 179) {
  $data = array_merge($data, $future179->value());
}

if ($pages >= 180) {
  $data = array_merge($data, $future180->value());
}

if ($pages >= 181) {
  $data = array_merge($data, $future181->value());
}

if ($pages >= 182) {
  $data = array_merge($data, $future182->value());
}

if ($pages >= 183) {
  $data = array_merge($data, $future183->value());
}

if ($pages >= 184) {
  $data = array_merge($data, $future184->value());
}

if ($pages >= 185) {
  $data = array_merge($data, $future185->value());
}

if ($pages >= 186) {
  $data = array_merge($data, $future186->value());
}

if ($pages >= 187) {
  $data = array_merge($data, $future187->value());
}

if ($pages >= 188) {
  $data = array_merge($data, $future188->value());
}

if ($pages >= 189) {
  $data = array_merge($data, $future189->value());
}

if ($pages >= 190) {
  $data = array_merge($data, $future190->value());
}

if ($pages >= 191) {
  $data = array_merge($data, $future191->value());
}

if ($pages >= 192) {
  $data = array_merge($data, $future192->value());
}

if ($pages >= 193) {
  $data = array_merge($data, $future193->value());
}

if ($pages >= 194) {
  $data = array_merge($data, $future194->value());
}

if ($pages >= 195) {
  $data = array_merge($data, $future195->value());
}

if ($pages >= 196) {
  $data = array_merge($data, $future196->value());
}

if ($pages >= 197) {
  $data = array_merge($data, $future197->value());
}

if ($pages >= 198) {
  $data = array_merge($data, $future198->value());
}

if ($pages >= 199) {
  $data = array_merge($data, $future199->value());
}

if ($pages >= 200) {
  $data = array_merge($data, $future200->value());
}

if ($pages >= 201) {
  $data = array_merge($data, $future201->value());
}

if ($pages >= 202) {
  $data = array_merge($data, $future202->value());
}

if ($pages >= 203) {
  $data = array_merge($data, $future203->value());
}

if ($pages >= 204) {
  $data = array_merge($data, $future204->value());
}

if ($pages >= 205) {
  $data = array_merge($data, $future205->value());
}

if ($pages >= 206) {
  $data = array_merge($data, $future206->value());
}

if ($pages >= 207) {
  $data = array_merge($data, $future207->value());
}

if ($pages >= 208) {
  $data = array_merge($data, $future208->value());
}

if ($pages >= 209) {
  $data = array_merge($data, $future209->value());
}

if ($pages >= 210) {
  $data = array_merge($data, $future210->value());
}

if ($pages >= 211) {
  $data = array_merge($data, $future211->value());
}

if ($pages >= 212) {
  $data = array_merge($data, $future212->value());
}

if ($pages >= 213) {
  $data = array_merge($data, $future213->value());
}

if ($pages >= 214) {
  $data = array_merge($data, $future214->value());
}

if ($pages >= 215) {
  $data = array_merge($data, $future215->value());
}

if ($pages >= 216) {
  $data = array_merge($data, $future216->value());
}

if ($pages >= 217) {
  $data = array_merge($data, $future217->value());
}

if ($pages >= 218) {
  $data = array_merge($data, $future218->value());
}

if ($pages >= 219) {
  $data = array_merge($data, $future219->value());
}

if ($pages >= 220) {
  $data = array_merge($data, $future220->value());
}

if ($pages >= 221) {
  $data = array_merge($data, $future221->value());
}

if ($pages >= 222) {
  $data = array_merge($data, $future222->value());
}

if ($pages >= 223) {
  $data = array_merge($data, $future223->value());
}

if ($pages >= 224) {
  $data = array_merge($data, $future224->value());
}

if ($pages >= 225) {
  $data = array_merge($data, $future225->value());
}

if ($pages >= 226) {
  $data = array_merge($data, $future226->value());
}

if ($pages >= 227) {
  $data = array_merge($data, $future227->value());
}

if ($pages >= 228) {
  $data = array_merge($data, $future228->value());
}

if ($pages >= 229) {
  $data = array_merge($data, $future229->value());
}

if ($pages >= 230) {
  $data = array_merge($data, $future230->value());
}

if ($pages >= 231) {
  $data = array_merge($data, $future231->value());
}

if ($pages >= 232) {
  $data = array_merge($data, $future232->value());
}

if ($pages >= 233) {
  $data = array_merge($data, $future233->value());
}

if ($pages >= 234) {
  $data = array_merge($data, $future234->value());
}

if ($pages >= 235) {
  $data = array_merge($data, $future235->value());
}

if ($pages >= 236) {
  $data = array_merge($data, $future236->value());
}

if ($pages >= 237) {
  $data = array_merge($data, $future237->value());
}

if ($pages >= 238) {
  $data = array_merge($data, $future238->value());
}

if ($pages >= 239) {
  $data = array_merge($data, $future239->value());
}

if ($pages >= 240) {
  $data = array_merge($data, $future240->value());
}

if ($pages >= 241) {
  $data = array_merge($data, $future241->value());
}

if ($pages >= 242) {
  $data = array_merge($data, $future242->value());
}

if ($pages >= 243) {
  $data = array_merge($data, $future243->value());
}

if ($pages >= 244) {
  $data = array_merge($data, $future244->value());
}

if ($pages >= 245) {
  $data = array_merge($data, $future245->value());
}

if ($pages >= 246) {
  $data = array_merge($data, $future246->value());
}

if ($pages >= 247) {
  $data = array_merge($data, $future247->value());
}

if ($pages >= 248) {
  $data = array_merge($data, $future248->value());
}

if ($pages >= 249) {
  $data = array_merge($data, $future249->value());
}

if ($pages >= 250) {
  $data = array_merge($data, $future250->value());
}

if ($pages >= 251) {
  $data = array_merge($data, $future251->value());
}

if ($pages >= 252) {
  $data = array_merge($data, $future252->value());
}

if ($pages >= 253) {
  $data = array_merge($data, $future253->value());
}

if ($pages >= 254) {
  $data = array_merge($data, $future254->value());
}

if ($pages >= 255) {
  $data = array_merge($data, $future255->value());
}

if ($pages >= 256) {
  $data = array_merge($data, $future256->value());
}

if ($pages >= 257) {
  $data = array_merge($data, $future257->value());
}

if ($pages >= 258) {
  $data = array_merge($data, $future258->value());
}

if ($pages >= 259) {
  $data = array_merge($data, $future259->value());
}

if ($pages >= 260) {
  $data = array_merge($data, $future260->value());
}

if ($pages >= 261) {
  $data = array_merge($data, $future261->value());
}

if ($pages >= 262) {
  $data = array_merge($data, $future262->value());
}

if ($pages >= 263) {
  $data = array_merge($data, $future263->value());
}

if ($pages >= 264) {
  $data = array_merge($data, $future264->value());
}

if ($pages >= 265) {
  $data = array_merge($data, $future265->value());
}

if ($pages >= 266) {
  $data = array_merge($data, $future266->value());
}

if ($pages >= 267) {
  $data = array_merge($data, $future267->value());
}

if ($pages >= 268) {
  $data = array_merge($data, $future268->value());
}

if ($pages >= 269) {
  $data = array_merge($data, $future269->value());
}

if ($pages >= 270) {
  $data = array_merge($data, $future270->value());
}

if ($pages >= 271) {
  $data = array_merge($data, $future271->value());
}

if ($pages >= 272) {
  $data = array_merge($data, $future272->value());
}

if ($pages >= 273) {
  $data = array_merge($data, $future273->value());
}

if ($pages >= 274) {
  $data = array_merge($data, $future274->value());
}

if ($pages >= 275) {
  $data = array_merge($data, $future275->value());
}

if ($pages >= 276) {
  $data = array_merge($data, $future276->value());
}

if ($pages >= 277) {
  $data = array_merge($data, $future277->value());
}

if ($pages >= 278) {
  $data = array_merge($data, $future278->value());
}

if ($pages >= 279) {
  $data = array_merge($data, $future279->value());
}

if ($pages >= 280) {
  $data = array_merge($data, $future280->value());
}

if ($pages >= 281) {
  $data = array_merge($data, $future281->value());
}

if ($pages >= 282) {
  $data = array_merge($data, $future282->value());
}

if ($pages >= 283) {
  $data = array_merge($data, $future283->value());
}

if ($pages >= 284) {
  $data = array_merge($data, $future284->value());
}

if ($pages >= 285) {
  $data = array_merge($data, $future285->value());
}

if ($pages >= 286) {
  $data = array_merge($data, $future286->value());
}

if ($pages >= 287) {
  $data = array_merge($data, $future287->value());
}

if ($pages >= 288) {
  $data = array_merge($data, $future288->value());
}

if ($pages >= 289) {
  $data = array_merge($data, $future289->value());
}

if ($pages >= 290) {
  $data = array_merge($data, $future290->value());
}

if ($pages >= 291) {
  $data = array_merge($data, $future291->value());
}

if ($pages >= 292) {
  $data = array_merge($data, $future292->value());
}

if ($pages >= 293) {
  $data = array_merge($data, $future293->value());
}

if ($pages >= 294) {
  $data = array_merge($data, $future294->value());
}

if ($pages >= 295) {
  $data = array_merge($data, $future295->value());
}

if ($pages >= 296) {
  $data = array_merge($data, $future296->value());
}

if ($pages >= 297) {
  $data = array_merge($data, $future297->value());
}

if ($pages >= 298) {
  $data = array_merge($data, $future298->value());
}

if ($pages >= 299) {
  $data = array_merge($data, $future299->value());
}

if ($pages >= 300) {
  $data = array_merge($data, $future300->value());
}

if ($pages >= 301) {
  $data = array_merge($data, $future301->value());
}

if ($pages >= 302) {
  $data = array_merge($data, $future302->value());
}

if ($pages >= 303) {
  $data = array_merge($data, $future303->value());
}

if ($pages >= 304) {
  $data = array_merge($data, $future304->value());
}

if ($pages >= 305) {
  $data = array_merge($data, $future305->value());
}

if ($pages >= 306) {
  $data = array_merge($data, $future306->value());
}

if ($pages >= 307) {
  $data = array_merge($data, $future307->value());
}

if ($pages >= 308) {
  $data = array_merge($data, $future308->value());
}

if ($pages >= 309) {
  $data = array_merge($data, $future309->value());
}

if ($pages >= 310) {
  $data = array_merge($data, $future310->value());
}

if ($pages >= 311) {
  $data = array_merge($data, $future311->value());
}

if ($pages >= 312) {
  $data = array_merge($data, $future312->value());
}

if ($pages >= 313) {
  $data = array_merge($data, $future313->value());
}

if ($pages >= 314) {
  $data = array_merge($data, $future314->value());
}

if ($pages >= 315) {
  $data = array_merge($data, $future315->value());
}

if ($pages >= 316) {
  $data = array_merge($data, $future316->value());
}

if ($pages >= 317) {
  $data = array_merge($data, $future317->value());
}

if ($pages >= 318) {
  $data = array_merge($data, $future318->value());
}

if ($pages >= 319) {
  $data = array_merge($data, $future319->value());
}

if ($pages >= 320) {
  $data = array_merge($data, $future320->value());
}

if ($pages >= 321) {
  $data = array_merge($data, $future321->value());
}

if ($pages >= 322) {
  $data = array_merge($data, $future322->value());
}

if ($pages >= 323) {
  $data = array_merge($data, $future323->value());
}

if ($pages >= 324) {
  $data = array_merge($data, $future324->value());
}

if ($pages >= 325) {
  $data = array_merge($data, $future325->value());
}

if ($pages >= 326) {
  $data = array_merge($data, $future326->value());
}

if ($pages >= 327) {
  $data = array_merge($data, $future327->value());
}

if ($pages >= 328) {
  $data = array_merge($data, $future328->value());
}

if ($pages >= 329) {
  $data = array_merge($data, $future329->value());
}

if ($pages >= 330) {
  $data = array_merge($data, $future330->value());
}

if ($pages >= 331) {
  $data = array_merge($data, $future331->value());
}

if ($pages >= 332) {
  $data = array_merge($data, $future332->value());
}

if ($pages >= 333) {
  $data = array_merge($data, $future333->value());
}

if ($pages >= 334) {
  $data = array_merge($data, $future334->value());
}

if ($pages >= 335) {
  $data = array_merge($data, $future335->value());
}

if ($pages >= 336) {
  $data = array_merge($data, $future336->value());
}

if ($pages >= 337) {
  $data = array_merge($data, $future337->value());
}

if ($pages >= 338) {
  $data = array_merge($data, $future338->value());
}

if ($pages >= 339) {
  $data = array_merge($data, $future339->value());
}

if ($pages >= 340) {
  $data = array_merge($data, $future340->value());
}

if ($pages >= 341) {
  $data = array_merge($data, $future341->value());
}

if ($pages >= 342) {
  $data = array_merge($data, $future342->value());
}

if ($pages >= 343) {
  $data = array_merge($data, $future343->value());
}

if ($pages >= 344) {
  $data = array_merge($data, $future344->value());
}

if ($pages >= 345) {
  $data = array_merge($data, $future345->value());
}

if ($pages >= 346) {
  $data = array_merge($data, $future346->value());
}

if ($pages >= 347) {
  $data = array_merge($data, $future347->value());
}

if ($pages >= 348) {
  $data = array_merge($data, $future348->value());
}

if ($pages >= 349) {
  $data = array_merge($data, $future349->value());
}

if ($pages >= 350) {
  $data = array_merge($data, $future350->value());
}

if ($pages >= 351) {
  $data = array_merge($data, $future351->value());
}

if ($pages >= 352) {
  $data = array_merge($data, $future352->value());
}

if ($pages >= 353) {
  $data = array_merge($data, $future353->value());
}

if ($pages >= 354) {
  $data = array_merge($data, $future354->value());
}

if ($pages >= 355) {
  $data = array_merge($data, $future355->value());
}

if ($pages >= 356) {
  $data = array_merge($data, $future356->value());
}

if ($pages >= 357) {
  $data = array_merge($data, $future357->value());
}

if ($pages >= 358) {
  $data = array_merge($data, $future358->value());
}

if ($pages >= 359) {
  $data = array_merge($data, $future359->value());
}

if ($pages >= 360) {
  $data = array_merge($data, $future360->value());
}

if ($pages >= 361) {
  $data = array_merge($data, $future361->value());
}

if ($pages >= 362) {
  $data = array_merge($data, $future362->value());
}

if ($pages >= 363) {
  $data = array_merge($data, $future363->value());
}

if ($pages >= 364) {
  $data = array_merge($data, $future364->value());
}

if ($pages >= 365) {
  $data = array_merge($data, $future365->value());
}

if ($pages >= 366) {
  $data = array_merge($data, $future366->value());
}

if ($pages >= 367) {
  $data = array_merge($data, $future367->value());
}

if ($pages >= 368) {
  $data = array_merge($data, $future368->value());
}

if ($pages >= 369) {
  $data = array_merge($data, $future369->value());
}

if ($pages >= 370) {
  $data = array_merge($data, $future370->value());
}

if ($pages >= 371) {
  $data = array_merge($data, $future371->value());
}

if ($pages >= 372) {
  $data = array_merge($data, $future372->value());
}

if ($pages >= 373) {
  $data = array_merge($data, $future373->value());
}

if ($pages >= 374) {
  $data = array_merge($data, $future374->value());
}

if ($pages >= 375) {
  $data = array_merge($data, $future375->value());
}

if ($pages >= 376) {
  $data = array_merge($data, $future376->value());
}

if ($pages >= 377) {
  $data = array_merge($data, $future377->value());
}

if ($pages >= 378) {
  $data = array_merge($data, $future378->value());
}

if ($pages >= 379) {
  $data = array_merge($data, $future379->value());
}

if ($pages >= 380) {
  $data = array_merge($data, $future380->value());
}

if ($pages >= 381) {
  $data = array_merge($data, $future381->value());
}

if ($pages >= 382) {
  $data = array_merge($data, $future382->value());
}

if ($pages >= 383) {
  $data = array_merge($data, $future383->value());
}

if ($pages >= 384) {
  $data = array_merge($data, $future384->value());
}

if ($pages >= 385) {
  $data = array_merge($data, $future385->value());
}

if ($pages >= 386) {
  $data = array_merge($data, $future386->value());
}

if ($pages >= 387) {
  $data = array_merge($data, $future387->value());
}

if ($pages >= 388) {
  $data = array_merge($data, $future388->value());
}

if ($pages >= 389) {
  $data = array_merge($data, $future389->value());
}

if ($pages >= 390) {
  $data = array_merge($data, $future390->value());
}

if ($pages >= 391) {
  $data = array_merge($data, $future391->value());
}

if ($pages >= 392) {
  $data = array_merge($data, $future392->value());
}

if ($pages >= 393) {
  $data = array_merge($data, $future393->value());
}

if ($pages >= 394) {
  $data = array_merge($data, $future394->value());
}

if ($pages >= 395) {
  $data = array_merge($data, $future395->value());
}

if ($pages >= 396) {
  $data = array_merge($data, $future396->value());
}

if ($pages >= 397) {
  $data = array_merge($data, $future397->value());
}

if ($pages >= 398) {
  $data = array_merge($data, $future398->value());
}

if ($pages >= 399) {
  $data = array_merge($data, $future399->value());
}

if ($pages >= 400) {
  $data = array_merge($data, $future400->value());
}

if ($pages >= 401) {
  $data = array_merge($data, $future401->value());
}

if ($pages >= 402) {
  $data = array_merge($data, $future402->value());
}

if ($pages >= 403) {
  $data = array_merge($data, $future403->value());
}

if ($pages >= 404) {
  $data = array_merge($data, $future404->value());
}

if ($pages >= 405) {
  $data = array_merge($data, $future405->value());
}

if ($pages >= 406) {
  $data = array_merge($data, $future406->value());
}

if ($pages >= 407) {
  $data = array_merge($data, $future407->value());
}

if ($pages >= 408) {
  $data = array_merge($data, $future408->value());
}

if ($pages >= 409) {
  $data = array_merge($data, $future409->value());
}

if ($pages >= 410) {
  $data = array_merge($data, $future410->value());
}

if ($pages >= 411) {
  $data = array_merge($data, $future411->value());
}

if ($pages >= 412) {
  $data = array_merge($data, $future412->value());
}

if ($pages >= 413) {
  $data = array_merge($data, $future413->value());
}

if ($pages >= 414) {
  $data = array_merge($data, $future414->value());
}

if ($pages >= 415) {
  $data = array_merge($data, $future415->value());
}

if ($pages >= 416) {
  $data = array_merge($data, $future416->value());
}

if ($pages >= 417) {
  $data = array_merge($data, $future417->value());
}

if ($pages >= 418) {
  $data = array_merge($data, $future418->value());
}

if ($pages >= 419) {
  $data = array_merge($data, $future419->value());
}

if ($pages >= 420) {
  $data = array_merge($data, $future420->value());
}

if ($pages >= 421) {
  $data = array_merge($data, $future421->value());
}

if ($pages >= 422) {
  $data = array_merge($data, $future422->value());
}

if ($pages >= 423) {
  $data = array_merge($data, $future423->value());
}

if ($pages >= 424) {
  $data = array_merge($data, $future424->value());
}

if ($pages >= 425) {
  $data = array_merge($data, $future425->value());
}

if ($pages >= 426) {
  $data = array_merge($data, $future426->value());
}

if ($pages >= 427) {
  $data = array_merge($data, $future427->value());
}

if ($pages >= 428) {
  $data = array_merge($data, $future428->value());
}

if ($pages >= 429) {
  $data = array_merge($data, $future429->value());
}

if ($pages >= 430) {
  $data = array_merge($data, $future430->value());
}

if ($pages >= 431) {
  $data = array_merge($data, $future431->value());
}

if ($pages >= 432) {
  $data = array_merge($data, $future432->value());
}

if ($pages >= 433) {
  $data = array_merge($data, $future433->value());
}

if ($pages >= 434) {
  $data = array_merge($data, $future434->value());
}

if ($pages >= 435) {
  $data = array_merge($data, $future435->value());
}

if ($pages >= 436) {
  $data = array_merge($data, $future436->value());
}

if ($pages >= 437) {
  $data = array_merge($data, $future437->value());
}

if ($pages >= 438) {
  $data = array_merge($data, $future438->value());
}

if ($pages >= 439) {
  $data = array_merge($data, $future439->value());
}

if ($pages >= 440) {
  $data = array_merge($data, $future440->value());
}

if ($pages >= 441) {
  $data = array_merge($data, $future441->value());
}

if ($pages >= 442) {
  $data = array_merge($data, $future442->value());
}

if ($pages >= 443) {
  $data = array_merge($data, $future443->value());
}

if ($pages >= 444) {
  $data = array_merge($data, $future444->value());
}

if ($pages >= 445) {
  $data = array_merge($data, $future445->value());
}

if ($pages >= 446) {
  $data = array_merge($data, $future446->value());
}

if ($pages >= 447) {
  $data = array_merge($data, $future447->value());
}

if ($pages >= 448) {
  $data = array_merge($data, $future448->value());
}

if ($pages >= 449) {
  $data = array_merge($data, $future449->value());
}

if ($pages >= 450) {
  $data = array_merge($data, $future450->value());
}

if ($pages >= 451) {
  $data = array_merge($data, $future451->value());
}

if ($pages >= 452) {
  $data = array_merge($data, $future452->value());
}

if ($pages >= 453) {
  $data = array_merge($data, $future453->value());
}

if ($pages >= 454) {
  $data = array_merge($data, $future454->value());
}

if ($pages >= 455) {
  $data = array_merge($data, $future455->value());
}

if ($pages >= 456) {
  $data = array_merge($data, $future456->value());
}

if ($pages >= 457) {
  $data = array_merge($data, $future457->value());
}

if ($pages >= 458) {
  $data = array_merge($data, $future458->value());
}

if ($pages >= 459) {
  $data = array_merge($data, $future459->value());
}

if ($pages >= 460) {
  $data = array_merge($data, $future460->value());
}

if ($pages >= 461) {
  $data = array_merge($data, $future461->value());
}

if ($pages >= 462) {
  $data = array_merge($data, $future462->value());
}

if ($pages >= 463) {
  $data = array_merge($data, $future463->value());
}

if ($pages >= 464) {
  $data = array_merge($data, $future464->value());
}

if ($pages >= 465) {
  $data = array_merge($data, $future465->value());
}

if ($pages >= 466) {
  $data = array_merge($data, $future466->value());
}

if ($pages >= 467) {
  $data = array_merge($data, $future467->value());
}

if ($pages >= 468) {
  $data = array_merge($data, $future468->value());
}

if ($pages >= 469) {
  $data = array_merge($data, $future469->value());
}

if ($pages >= 470) {
  $data = array_merge($data, $future470->value());
}

if ($pages >= 471) {
  $data = array_merge($data, $future471->value());
}

if ($pages >= 472) {
  $data = array_merge($data, $future472->value());
}

if ($pages >= 473) {
  $data = array_merge($data, $future473->value());
}

if ($pages >= 474) {
  $data = array_merge($data, $future474->value());
}

if ($pages >= 475) {
  $data = array_merge($data, $future475->value());
}

if ($pages >= 476) {
  $data = array_merge($data, $future476->value());
}

if ($pages >= 477) {
  $data = array_merge($data, $future477->value());
}

if ($pages >= 478) {
  $data = array_merge($data, $future478->value());
}

if ($pages >= 479) {
  $data = array_merge($data, $future479->value());
}

if ($pages >= 480) {
  $data = array_merge($data, $future480->value());
}

if ($pages >= 481) {
  $data = array_merge($data, $future481->value());
}

if ($pages >= 482) {
  $data = array_merge($data, $future482->value());
}

if ($pages >= 483) {
  $data = array_merge($data, $future483->value());
}

if ($pages >= 484) {
  $data = array_merge($data, $future484->value());
}

if ($pages >= 485) {
  $data = array_merge($data, $future485->value());
}

if ($pages >= 486) {
  $data = array_merge($data, $future486->value());
}

if ($pages >= 487) {
  $data = array_merge($data, $future487->value());
}

if ($pages >= 488) {
  $data = array_merge($data, $future488->value());
}

if ($pages >= 489) {
  $data = array_merge($data, $future489->value());
}

if ($pages >= 490) {
  $data = array_merge($data, $future490->value());
}

if ($pages >= 491) {
  $data = array_merge($data, $future491->value());
}

if ($pages >= 492) {
  $data = array_merge($data, $future492->value());
}

if ($pages >= 493) {
  $data = array_merge($data, $future493->value());
}

if ($pages >= 494) {
  $data = array_merge($data, $future494->value());
}

if ($pages >= 495) {
  $data = array_merge($data, $future495->value());
}

if ($pages >= 496) {
  $data = array_merge($data, $future496->value());
}

if ($pages >= 497) {
  $data = array_merge($data, $future497->value());
}

if ($pages >= 498) {
  $data = array_merge($data, $future498->value());
}

if ($pages >= 499) {
  $data = array_merge($data, $future499->value());
}

if ($pages >= 500) {
  $data = array_merge($data, $future500->value());
}

if ($pages >= 501) {
  $data = array_merge($data, $future501->value());
}

if ($pages >= 502) {
  $data = array_merge($data, $future502->value());
}

if ($pages >= 503) {
  $data = array_merge($data, $future503->value());
}

if ($pages >= 504) {
  $data = array_merge($data, $future504->value());
}

if ($pages >= 505) {
  $data = array_merge($data, $future505->value());
}

if ($pages >= 506) {
  $data = array_merge($data, $future506->value());
}

if ($pages >= 507) {
  $data = array_merge($data, $future507->value());
}

if ($pages >= 508) {
  $data = array_merge($data, $future508->value());
}

if ($pages >= 509) {
  $data = array_merge($data, $future509->value());
}

if ($pages >= 510) {
  $data = array_merge($data, $future510->value());
}

if ($pages >= 511) {
  $data = array_merge($data, $future511->value());
}

if ($pages >= 512) {
  $data = array_merge($data, $future512->value());
}

if ($pages >= 513) {
  $data = array_merge($data, $future513->value());
}

if ($pages >= 514) {
  $data = array_merge($data, $future514->value());
}

if ($pages >= 515) {
  $data = array_merge($data, $future515->value());
}

if ($pages >= 516) {
  $data = array_merge($data, $future516->value());
}

if ($pages >= 517) {
  $data = array_merge($data, $future517->value());
}

if ($pages >= 518) {
  $data = array_merge($data, $future518->value());
}

if ($pages >= 519) {
  $data = array_merge($data, $future519->value());
}

if ($pages >= 520) {
  $data = array_merge($data, $future520->value());
}

if ($pages >= 521) {
  $data = array_merge($data, $future521->value());
}

if ($pages >= 522) {
  $data = array_merge($data, $future522->value());
}

if ($pages >= 523) {
  $data = array_merge($data, $future523->value());
}

if ($pages >= 524) {
  $data = array_merge($data, $future524->value());
}

if ($pages >= 525) {
  $data = array_merge($data, $future525->value());
}

if ($pages >= 526) {
  $data = array_merge($data, $future526->value());
}

if ($pages >= 527) {
  $data = array_merge($data, $future527->value());
}

if ($pages >= 528) {
  $data = array_merge($data, $future528->value());
}

if ($pages >= 529) {
  $data = array_merge($data, $future529->value());
}

if ($pages >= 530) {
  $data = array_merge($data, $future530->value());
}

if ($pages >= 531) {
  $data = array_merge($data, $future531->value());
}

if ($pages >= 532) {
  $data = array_merge($data, $future532->value());
}

if ($pages >= 533) {
  $data = array_merge($data, $future533->value());
}

if ($pages >= 534) {
  $data = array_merge($data, $future534->value());
}

if ($pages >= 535) {
  $data = array_merge($data, $future535->value());
}

if ($pages >= 536) {
  $data = array_merge($data, $future536->value());
}

if ($pages >= 537) {
  $data = array_merge($data, $future537->value());
}

if ($pages >= 538) {
  $data = array_merge($data, $future538->value());
}

if ($pages >= 539) {
  $data = array_merge($data, $future539->value());
}

if ($pages >= 540) {
  $data = array_merge($data, $future540->value());
}

if ($pages >= 541) {
  $data = array_merge($data, $future541->value());
}

if ($pages >= 542) {
  $data = array_merge($data, $future542->value());
}

if ($pages >= 543) {
  $data = array_merge($data, $future543->value());
}

if ($pages >= 544) {
  $data = array_merge($data, $future544->value());
}

if ($pages >= 545) {
  $data = array_merge($data, $future545->value());
}

if ($pages >= 546) {
  $data = array_merge($data, $future546->value());
}

if ($pages >= 547) {
  $data = array_merge($data, $future547->value());
}

if ($pages >= 548) {
  $data = array_merge($data, $future548->value());
}

if ($pages >= 549) {
  $data = array_merge($data, $future549->value());
}

if ($pages >= 550) {
  $data = array_merge($data, $future550->value());
}

if ($pages >= 551) {
  $data = array_merge($data, $future551->value());
}

if ($pages >= 552) {
  $data = array_merge($data, $future552->value());
}

if ($pages >= 553) {
  $data = array_merge($data, $future553->value());
}

if ($pages >= 554) {
  $data = array_merge($data, $future554->value());
}

if ($pages >= 555) {
  $data = array_merge($data, $future555->value());
}

if ($pages >= 556) {
  $data = array_merge($data, $future556->value());
}

if ($pages >= 557) {
  $data = array_merge($data, $future557->value());
}

if ($pages >= 558) {
  $data = array_merge($data, $future558->value());
}

if ($pages >= 559) {
  $data = array_merge($data, $future559->value());
}

if ($pages >= 560) {
  $data = array_merge($data, $future560->value());
}

if ($pages >= 561) {
  $data = array_merge($data, $future561->value());
}

if ($pages >= 562) {
  $data = array_merge($data, $future562->value());
}

if ($pages >= 563) {
  $data = array_merge($data, $future563->value());
}

if ($pages >= 564) {
  $data = array_merge($data, $future564->value());
}

if ($pages >= 565) {
  $data = array_merge($data, $future565->value());
}

if ($pages >= 566) {
  $data = array_merge($data, $future566->value());
}

if ($pages >= 567) {
  $data = array_merge($data, $future567->value());
}

if ($pages >= 568) {
  $data = array_merge($data, $future568->value());
}

if ($pages >= 569) {
  $data = array_merge($data, $future569->value());
}

if ($pages >= 570) {
  $data = array_merge($data, $future570->value());
}

if ($pages >= 571) {
  $data = array_merge($data, $future571->value());
}

if ($pages >= 572) {
  $data = array_merge($data, $future572->value());
}

if ($pages >= 573) {
  $data = array_merge($data, $future573->value());
}

if ($pages >= 574) {
  $data = array_merge($data, $future574->value());
}

if ($pages >= 575) {
  $data = array_merge($data, $future575->value());
}

if ($pages >= 576) {
  $data = array_merge($data, $future576->value());
}

if ($pages >= 577) {
  $data = array_merge($data, $future577->value());
}

if ($pages >= 578) {
  $data = array_merge($data, $future578->value());
}

if ($pages >= 579) {
  $data = array_merge($data, $future579->value());
}

if ($pages >= 580) {
  $data = array_merge($data, $future580->value());
}

if ($pages >= 581) {
  $data = array_merge($data, $future581->value());
}

if ($pages >= 582) {
  $data = array_merge($data, $future582->value());
}

if ($pages >= 583) {
  $data = array_merge($data, $future583->value());
}

if ($pages >= 584) {
  $data = array_merge($data, $future584->value());
}

if ($pages >= 585) {
  $data = array_merge($data, $future585->value());
}

if ($pages >= 586) {
  $data = array_merge($data, $future586->value());
}

if ($pages >= 587) {
  $data = array_merge($data, $future587->value());
}

if ($pages >= 588) {
  $data = array_merge($data, $future588->value());
}

if ($pages >= 589) {
  $data = array_merge($data, $future589->value());
}

if ($pages >= 590) {
  $data = array_merge($data, $future590->value());
}

if ($pages >= 591) {
  $data = array_merge($data, $future591->value());
}

if ($pages >= 592) {
  $data = array_merge($data, $future592->value());
}

if ($pages >= 593) {
  $data = array_merge($data, $future593->value());
}

if ($pages >= 594) {
  $data = array_merge($data, $future594->value());
}

if ($pages >= 595) {
  $data = array_merge($data, $future595->value());
}

if ($pages >= 596) {
  $data = array_merge($data, $future596->value());
}

if ($pages >= 597) {
  $data = array_merge($data, $future597->value());
}

if ($pages >= 598) {
  $data = array_merge($data, $future598->value());
}

if ($pages >= 599) {
  $data = array_merge($data, $future599->value());
}

if ($pages >= 600) {
  $data = array_merge($data, $future600->value());
}

if ($pages >= 601) {
  $data = array_merge($data, $future601->value());
}

if ($pages >= 602) {
  $data = array_merge($data, $future602->value());
}

if ($pages >= 603) {
  $data = array_merge($data, $future603->value());
}

if ($pages >= 604) {
  $data = array_merge($data, $future604->value());
}

if ($pages >= 605) {
  $data = array_merge($data, $future605->value());
}

if ($pages >= 606) {
  $data = array_merge($data, $future606->value());
}

if ($pages >= 607) {
  $data = array_merge($data, $future607->value());
}

if ($pages >= 608) {
  $data = array_merge($data, $future608->value());
}

if ($pages >= 609) {
  $data = array_merge($data, $future609->value());
}

if ($pages >= 610) {
  $data = array_merge($data, $future610->value());
}

if ($pages >= 611) {
  $data = array_merge($data, $future611->value());
}

if ($pages >= 612) {
  $data = array_merge($data, $future612->value());
}

if ($pages >= 613) {
  $data = array_merge($data, $future613->value());
}

if ($pages >= 614) {
  $data = array_merge($data, $future614->value());
}

if ($pages >= 615) {
  $data = array_merge($data, $future615->value());
}

if ($pages >= 616) {
  $data = array_merge($data, $future616->value());
}

if ($pages >= 617) {
  $data = array_merge($data, $future617->value());
}

if ($pages >= 618) {
  $data = array_merge($data, $future618->value());
}

if ($pages >= 619) {
  $data = array_merge($data, $future619->value());
}

if ($pages >= 620) {
  $data = array_merge($data, $future620->value());
}

if ($pages >= 621) {
  $data = array_merge($data, $future621->value());
}

if ($pages >= 622) {
  $data = array_merge($data, $future622->value());
}

if ($pages >= 623) {
  $data = array_merge($data, $future623->value());
}

if ($pages >= 624) {
  $data = array_merge($data, $future624->value());
}

if ($pages >= 625) {
  $data = array_merge($data, $future625->value());
}

if ($pages >= 626) {
  $data = array_merge($data, $future626->value());
}

if ($pages >= 627) {
  $data = array_merge($data, $future627->value());
}

if ($pages >= 628) {
  $data = array_merge($data, $future628->value());
}

if ($pages >= 629) {
  $data = array_merge($data, $future629->value());
}

if ($pages >= 630) {
  $data = array_merge($data, $future630->value());
}

if ($pages >= 631) {
  $data = array_merge($data, $future631->value());
}

if ($pages >= 632) {
  $data = array_merge($data, $future632->value());
}

if ($pages >= 633) {
  $data = array_merge($data, $future633->value());
}

if ($pages >= 634) {
  $data = array_merge($data, $future634->value());
}

if ($pages >= 635) {
  $data = array_merge($data, $future635->value());
}

if ($pages >= 636) {
  $data = array_merge($data, $future636->value());
}

if ($pages >= 637) {
  $data = array_merge($data, $future637->value());
}

if ($pages >= 638) {
  $data = array_merge($data, $future638->value());
}

if ($pages >= 639) {
  $data = array_merge($data, $future639->value());
}

if ($pages >= 640) {
  $data = array_merge($data, $future640->value());
}

if ($pages >= 641) {
  $data = array_merge($data, $future641->value());
}

if ($pages >= 642) {
  $data = array_merge($data, $future642->value());
}

if ($pages >= 643) {
  $data = array_merge($data, $future643->value());
}

if ($pages >= 644) {
  $data = array_merge($data, $future644->value());
}

if ($pages >= 645) {
  $data = array_merge($data, $future645->value());
}

if ($pages >= 646) {
  $data = array_merge($data, $future646->value());
}

if ($pages >= 647) {
  $data = array_merge($data, $future647->value());
}

if ($pages >= 648) {
  $data = array_merge($data, $future648->value());
}

if ($pages >= 649) {
  $data = array_merge($data, $future649->value());
}

if ($pages >= 650) {
  $data = array_merge($data, $future650->value());
}

if ($pages >= 651) {
  $data = array_merge($data, $future651->value());
}

if ($pages >= 652) {
  $data = array_merge($data, $future652->value());
}

if ($pages >= 653) {
  $data = array_merge($data, $future653->value());
}

if ($pages >= 654) {
  $data = array_merge($data, $future654->value());
}

if ($pages >= 655) {
  $data = array_merge($data, $future655->value());
}

if ($pages >= 656) {
  $data = array_merge($data, $future656->value());
}

if ($pages >= 657) {
  $data = array_merge($data, $future657->value());
}

if ($pages >= 658) {
  $data = array_merge($data, $future658->value());
}

if ($pages >= 659) {
  $data = array_merge($data, $future659->value());
}

if ($pages >= 660) {
  $data = array_merge($data, $future660->value());
}

if ($pages >= 661) {
  $data = array_merge($data, $future661->value());
}

if ($pages >= 662) {
  $data = array_merge($data, $future662->value());
}

if ($pages >= 663) {
  $data = array_merge($data, $future663->value());
}

if ($pages >= 664) {
  $data = array_merge($data, $future664->value());
}

if ($pages >= 665) {
  $data = array_merge($data, $future665->value());
}

if ($pages >= 666) {
  $data = array_merge($data, $future666->value());
}

if ($pages >= 667) {
  $data = array_merge($data, $future667->value());
}

if ($pages >= 668) {
  $data = array_merge($data, $future668->value());
}

if ($pages >= 669) {
  $data = array_merge($data, $future669->value());
}

if ($pages >= 670) {
  $data = array_merge($data, $future670->value());
}

if ($pages >= 671) {
  $data = array_merge($data, $future671->value());
}

if ($pages >= 672) {
  $data = array_merge($data, $future672->value());
}

if ($pages >= 673) {
  $data = array_merge($data, $future673->value());
}

if ($pages >= 674) {
  $data = array_merge($data, $future674->value());
}

if ($pages >= 675) {
  $data = array_merge($data, $future675->value());
}

if ($pages >= 676) {
  $data = array_merge($data, $future676->value());
}

if ($pages >= 677) {
  $data = array_merge($data, $future677->value());
}

if ($pages >= 678) {
  $data = array_merge($data, $future678->value());
}

if ($pages >= 679) {
  $data = array_merge($data, $future679->value());
}

if ($pages >= 680) {
  $data = array_merge($data, $future680->value());
}

if ($pages >= 681) {
  $data = array_merge($data, $future681->value());
}

if ($pages >= 682) {
  $data = array_merge($data, $future682->value());
}

if ($pages >= 683) {
  $data = array_merge($data, $future683->value());
}

if ($pages >= 684) {
  $data = array_merge($data, $future684->value());
}

if ($pages >= 685) {
  $data = array_merge($data, $future685->value());
}

if ($pages >= 686) {
  $data = array_merge($data, $future686->value());
}

if ($pages >= 687) {
  $data = array_merge($data, $future687->value());
}

if ($pages >= 688) {
  $data = array_merge($data, $future688->value());
}

if ($pages >= 689) {
  $data = array_merge($data, $future689->value());
}

if ($pages >= 690) {
  $data = array_merge($data, $future690->value());
}

if ($pages >= 691) {
  $data = array_merge($data, $future691->value());
}

if ($pages >= 692) {
  $data = array_merge($data, $future692->value());
}

if ($pages >= 693) {
  $data = array_merge($data, $future693->value());
}

if ($pages >= 694) {
  $data = array_merge($data, $future694->value());
}

if ($pages >= 695) {
  $data = array_merge($data, $future695->value());
}

if ($pages >= 696) {
  $data = array_merge($data, $future696->value());
}

if ($pages >= 697) {
  $data = array_merge($data, $future697->value());
}

if ($pages >= 698) {
  $data = array_merge($data, $future698->value());
}

if ($pages >= 699) {
  $data = array_merge($data, $future699->value());
}

if ($pages >= 700) {
  $data = array_merge($data, $future700->value());
}

if ($pages >= 701) {
  $data = array_merge($data, $future701->value());
}

if ($pages >= 702) {
  $data = array_merge($data, $future702->value());
}

if ($pages >= 703) {
  $data = array_merge($data, $future703->value());
}

if ($pages >= 704) {
  $data = array_merge($data, $future704->value());
}

if ($pages >= 705) {
  $data = array_merge($data, $future705->value());
}

if ($pages >= 706) {
  $data = array_merge($data, $future706->value());
}

if ($pages >= 707) {
  $data = array_merge($data, $future707->value());
}

if ($pages >= 708) {
  $data = array_merge($data, $future708->value());
}

if ($pages >= 709) {
  $data = array_merge($data, $future709->value());
}

if ($pages >= 710) {
  $data = array_merge($data, $future710->value());
}

if ($pages >= 711) {
  $data = array_merge($data, $future711->value());
}

if ($pages >= 712) {
  $data = array_merge($data, $future712->value());
}

if ($pages >= 713) {
  $data = array_merge($data, $future713->value());
}

if ($pages >= 714) {
  $data = array_merge($data, $future714->value());
}

if ($pages >= 715) {
  $data = array_merge($data, $future715->value());
}

if ($pages >= 716) {
  $data = array_merge($data, $future716->value());
}

if ($pages >= 717) {
  $data = array_merge($data, $future717->value());
}

if ($pages >= 718) {
  $data = array_merge($data, $future718->value());
}

if ($pages >= 719) {
  $data = array_merge($data, $future719->value());
}

if ($pages >= 720) {
  $data = array_merge($data, $future720->value());
}

if ($pages >= 721) {
  $data = array_merge($data, $future721->value());
}

if ($pages >= 722) {
  $data = array_merge($data, $future722->value());
}

if ($pages >= 723) {
  $data = array_merge($data, $future723->value());
}

if ($pages >= 724) {
  $data = array_merge($data, $future724->value());
}

if ($pages >= 725) {
  $data = array_merge($data, $future725->value());
}

if ($pages >= 726) {
  $data = array_merge($data, $future726->value());
}

if ($pages >= 727) {
  $data = array_merge($data, $future727->value());
}

if ($pages >= 728) {
  $data = array_merge($data, $future728->value());
}

if ($pages >= 729) {
  $data = array_merge($data, $future729->value());
}

if ($pages >= 730) {
  $data = array_merge($data, $future730->value());
}

if ($pages >= 731) {
  $data = array_merge($data, $future731->value());
}

if ($pages >= 732) {
  $data = array_merge($data, $future732->value());
}

if ($pages >= 733) {
  $data = array_merge($data, $future733->value());
}

if ($pages >= 734) {
  $data = array_merge($data, $future734->value());
}

if ($pages >= 735) {
  $data = array_merge($data, $future735->value());
}

if ($pages >= 736) {
  $data = array_merge($data, $future736->value());
}

if ($pages >= 737) {
  $data = array_merge($data, $future737->value());
}

if ($pages >= 738) {
  $data = array_merge($data, $future738->value());
}

if ($pages >= 739) {
  $data = array_merge($data, $future739->value());
}

if ($pages >= 740) {
  $data = array_merge($data, $future740->value());
}

if ($pages >= 741) {
  $data = array_merge($data, $future741->value());
}

if ($pages >= 742) {
  $data = array_merge($data, $future742->value());
}

if ($pages >= 743) {
  $data = array_merge($data, $future743->value());
}

if ($pages >= 744) {
  $data = array_merge($data, $future744->value());
}

if ($pages >= 745) {
  $data = array_merge($data, $future745->value());
}

if ($pages >= 746) {
  $data = array_merge($data, $future746->value());
}

if ($pages >= 747) {
  $data = array_merge($data, $future747->value());
}

if ($pages >= 748) {
  $data = array_merge($data, $future748->value());
}

if ($pages >= 749) {
  $data = array_merge($data, $future749->value());
}

if ($pages >= 750) {
  $data = array_merge($data, $future750->value());
}

if ($pages >= 751) {
  $data = array_merge($data, $future751->value());
}

if ($pages >= 752) {
  $data = array_merge($data, $future752->value());
}

if ($pages >= 753) {
  $data = array_merge($data, $future753->value());
}

if ($pages >= 754) {
  $data = array_merge($data, $future754->value());
}

if ($pages >= 755) {
  $data = array_merge($data, $future755->value());
}

if ($pages >= 756) {
  $data = array_merge($data, $future756->value());
}

if ($pages >= 757) {
  $data = array_merge($data, $future757->value());
}

if ($pages >= 758) {
  $data = array_merge($data, $future758->value());
}

if ($pages >= 759) {
  $data = array_merge($data, $future759->value());
}

if ($pages >= 760) {
  $data = array_merge($data, $future760->value());
}

if ($pages >= 761) {
  $data = array_merge($data, $future761->value());
}

if ($pages >= 762) {
  $data = array_merge($data, $future762->value());
}

if ($pages >= 763) {
  $data = array_merge($data, $future763->value());
}

if ($pages >= 764) {
  $data = array_merge($data, $future764->value());
}

if ($pages >= 765) {
  $data = array_merge($data, $future765->value());
}

if ($pages >= 766) {
  $data = array_merge($data, $future766->value());
}

if ($pages >= 767) {
  $data = array_merge($data, $future767->value());
}

if ($pages >= 768) {
  $data = array_merge($data, $future768->value());
}

if ($pages >= 769) {
  $data = array_merge($data, $future769->value());
}

if ($pages >= 770) {
  $data = array_merge($data, $future770->value());
}

if ($pages >= 771) {
  $data = array_merge($data, $future771->value());
}

if ($pages >= 772) {
  $data = array_merge($data, $future772->value());
}

if ($pages >= 773) {
  $data = array_merge($data, $future773->value());
}

if ($pages >= 774) {
  $data = array_merge($data, $future774->value());
}

if ($pages >= 775) {
  $data = array_merge($data, $future775->value());
}

if ($pages >= 776) {
  $data = array_merge($data, $future776->value());
}

if ($pages >= 777) {
  $data = array_merge($data, $future777->value());
}

if ($pages >= 778) {
  $data = array_merge($data, $future778->value());
}

if ($pages >= 779) {
  $data = array_merge($data, $future779->value());
}

if ($pages >= 780) {
  $data = array_merge($data, $future780->value());
}

if ($pages >= 781) {
  $data = array_merge($data, $future781->value());
}

if ($pages >= 782) {
  $data = array_merge($data, $future782->value());
}

if ($pages >= 783) {
  $data = array_merge($data, $future783->value());
}

if ($pages >= 784) {
  $data = array_merge($data, $future784->value());
}

if ($pages >= 785) {
  $data = array_merge($data, $future785->value());
}

if ($pages >= 786) {
  $data = array_merge($data, $future786->value());
}

if ($pages >= 787) {
  $data = array_merge($data, $future787->value());
}

if ($pages >= 788) {
  $data = array_merge($data, $future788->value());
}

if ($pages >= 789) {
  $data = array_merge($data, $future789->value());
}

if ($pages >= 790) {
  $data = array_merge($data, $future790->value());
}

if ($pages >= 791) {
  $data = array_merge($data, $future791->value());
}

if ($pages >= 792) {
  $data = array_merge($data, $future792->value());
}

if ($pages >= 793) {
  $data = array_merge($data, $future793->value());
}

if ($pages >= 794) {
  $data = array_merge($data, $future794->value());
}

if ($pages >= 795) {
  $data = array_merge($data, $future795->value());
}

if ($pages >= 796) {
  $data = array_merge($data, $future796->value());
}

if ($pages >= 797) {
  $data = array_merge($data, $future797->value());
}

if ($pages >= 798) {
  $data = array_merge($data, $future798->value());
}

if ($pages >= 799) {
  $data = array_merge($data, $future799->value());
}

if ($pages >= 800) {
  $data = array_merge($data, $future800->value());
}

if ($pages >= 801) {
  $data = array_merge($data, $future801->value());
}

if ($pages >= 802) {
  $data = array_merge($data, $future802->value());
}

if ($pages >= 803) {
  $data = array_merge($data, $future803->value());
}

if ($pages >= 804) {
  $data = array_merge($data, $future804->value());
}

if ($pages >= 805) {
  $data = array_merge($data, $future805->value());
}

if ($pages >= 806) {
  $data = array_merge($data, $future806->value());
}

if ($pages >= 807) {
  $data = array_merge($data, $future807->value());
}

if ($pages >= 808) {
  $data = array_merge($data, $future808->value());
}

if ($pages >= 809) {
  $data = array_merge($data, $future809->value());
}

if ($pages >= 810) {
  $data = array_merge($data, $future810->value());
}

if ($pages >= 811) {
  $data = array_merge($data, $future811->value());
}

if ($pages >= 812) {
  $data = array_merge($data, $future812->value());
}

if ($pages >= 813) {
  $data = array_merge($data, $future813->value());
}

if ($pages >= 814) {
  $data = array_merge($data, $future814->value());
}

if ($pages >= 815) {
  $data = array_merge($data, $future815->value());
}

if ($pages >= 816) {
  $data = array_merge($data, $future816->value());
}

if ($pages >= 817) {
  $data = array_merge($data, $future817->value());
}

if ($pages >= 818) {
  $data = array_merge($data, $future818->value());
}

if ($pages >= 819) {
  $data = array_merge($data, $future819->value());
}

if ($pages >= 820) {
  $data = array_merge($data, $future820->value());
}

if ($pages >= 821) {
  $data = array_merge($data, $future821->value());
}

if ($pages >= 822) {
  $data = array_merge($data, $future822->value());
}

if ($pages >= 823) {
  $data = array_merge($data, $future823->value());
}

if ($pages >= 824) {
  $data = array_merge($data, $future824->value());
}

if ($pages >= 825) {
  $data = array_merge($data, $future825->value());
}

if ($pages >= 826) {
  $data = array_merge($data, $future826->value());
}

if ($pages >= 827) {
  $data = array_merge($data, $future827->value());
}

if ($pages >= 828) {
  $data = array_merge($data, $future828->value());
}

if ($pages >= 829) {
  $data = array_merge($data, $future829->value());
}

if ($pages >= 830) {
  $data = array_merge($data, $future830->value());
}

if ($pages >= 831) {
  $data = array_merge($data, $future831->value());
}

if ($pages >= 832) {
  $data = array_merge($data, $future832->value());
}

if ($pages >= 833) {
  $data = array_merge($data, $future833->value());
}

if ($pages >= 834) {
  $data = array_merge($data, $future834->value());
}

if ($pages >= 835) {
  $data = array_merge($data, $future835->value());
}

if ($pages >= 836) {
  $data = array_merge($data, $future836->value());
}

if ($pages >= 837) {
  $data = array_merge($data, $future837->value());
}

if ($pages >= 838) {
  $data = array_merge($data, $future838->value());
}

if ($pages >= 839) {
  $data = array_merge($data, $future839->value());
}

if ($pages >= 840) {
  $data = array_merge($data, $future840->value());
}

if ($pages >= 841) {
  $data = array_merge($data, $future841->value());
}

if ($pages >= 842) {
  $data = array_merge($data, $future842->value());
}

if ($pages >= 843) {
  $data = array_merge($data, $future843->value());
}

if ($pages >= 844) {
  $data = array_merge($data, $future844->value());
}

if ($pages >= 845) {
  $data = array_merge($data, $future845->value());
}

if ($pages >= 846) {
  $data = array_merge($data, $future846->value());
}

if ($pages >= 847) {
  $data = array_merge($data, $future847->value());
}

if ($pages >= 848) {
  $data = array_merge($data, $future848->value());
}

if ($pages >= 849) {
  $data = array_merge($data, $future849->value());
}

if ($pages >= 850) {
  $data = array_merge($data, $future850->value());
}

if ($pages >= 851) {
  $data = array_merge($data, $future851->value());
}

if ($pages >= 852) {
  $data = array_merge($data, $future852->value());
}

if ($pages >= 853) {
  $data = array_merge($data, $future853->value());
}

if ($pages >= 854) {
  $data = array_merge($data, $future854->value());
}

if ($pages >= 855) {
  $data = array_merge($data, $future855->value());
}

if ($pages >= 856) {
  $data = array_merge($data, $future856->value());
}

if ($pages >= 857) {
  $data = array_merge($data, $future857->value());
}

if ($pages >= 858) {
  $data = array_merge($data, $future858->value());
}

if ($pages >= 859) {
  $data = array_merge($data, $future859->value());
}

if ($pages >= 860) {
  $data = array_merge($data, $future860->value());
}

if ($pages >= 861) {
  $data = array_merge($data, $future861->value());
}

if ($pages >= 862) {
  $data = array_merge($data, $future862->value());
}

if ($pages >= 863) {
  $data = array_merge($data, $future863->value());
}

if ($pages >= 864) {
  $data = array_merge($data, $future864->value());
}

if ($pages >= 865) {
  $data = array_merge($data, $future865->value());
}

if ($pages >= 866) {
  $data = array_merge($data, $future866->value());
}

if ($pages >= 867) {
  $data = array_merge($data, $future867->value());
}

if ($pages >= 868) {
  $data = array_merge($data, $future868->value());
}

if ($pages >= 869) {
  $data = array_merge($data, $future869->value());
}

if ($pages >= 870) {
  $data = array_merge($data, $future870->value());
}

if ($pages >= 871) {
  $data = array_merge($data, $future871->value());
}

if ($pages >= 872) {
  $data = array_merge($data, $future872->value());
}

if ($pages >= 873) {
  $data = array_merge($data, $future873->value());
}

if ($pages >= 874) {
  $data = array_merge($data, $future874->value());
}

if ($pages >= 875) {
  $data = array_merge($data, $future875->value());
}

if ($pages >= 876) {
  $data = array_merge($data, $future876->value());
}

if ($pages >= 877) {
  $data = array_merge($data, $future877->value());
}

if ($pages >= 878) {
  $data = array_merge($data, $future878->value());
}

if ($pages >= 879) {
  $data = array_merge($data, $future879->value());
}

if ($pages >= 880) {
  $data = array_merge($data, $future880->value());
}

if ($pages >= 881) {
  $data = array_merge($data, $future881->value());
}

if ($pages >= 882) {
  $data = array_merge($data, $future882->value());
}

if ($pages >= 883) {
  $data = array_merge($data, $future883->value());
}

if ($pages >= 884) {
  $data = array_merge($data, $future884->value());
}

if ($pages >= 885) {
  $data = array_merge($data, $future885->value());
}

if ($pages >= 886) {
  $data = array_merge($data, $future886->value());
}

if ($pages >= 887) {
  $data = array_merge($data, $future887->value());
}

if ($pages >= 888) {
  $data = array_merge($data, $future888->value());
}

if ($pages >= 889) {
  $data = array_merge($data, $future889->value());
}

if ($pages >= 890) {
  $data = array_merge($data, $future890->value());
}

if ($pages >= 891) {
  $data = array_merge($data, $future891->value());
}

if ($pages >= 892) {
  $data = array_merge($data, $future892->value());
}

if ($pages >= 893) {
  $data = array_merge($data, $future893->value());
}

if ($pages >= 894) {
  $data = array_merge($data, $future894->value());
}

if ($pages >= 895) {
  $data = array_merge($data, $future895->value());
}

if ($pages >= 896) {
  $data = array_merge($data, $future896->value());
}

if ($pages >= 897) {
  $data = array_merge($data, $future897->value());
}

if ($pages >= 898) {
  $data = array_merge($data, $future898->value());
}

if ($pages >= 899) {
  $data = array_merge($data, $future899->value());
}

if ($pages >= 900) {
  $data = array_merge($data, $future900->value());
}

if ($pages >= 901) {
  $data = array_merge($data, $future901->value());
}

if ($pages >= 902) {
  $data = array_merge($data, $future902->value());
}

if ($pages >= 903) {
  $data = array_merge($data, $future903->value());
}

if ($pages >= 904) {
  $data = array_merge($data, $future904->value());
}

if ($pages >= 905) {
  $data = array_merge($data, $future905->value());
}

if ($pages >= 906) {
  $data = array_merge($data, $future906->value());
}

if ($pages >= 907) {
  $data = array_merge($data, $future907->value());
}

if ($pages >= 908) {
  $data = array_merge($data, $future908->value());
}

if ($pages >= 909) {
  $data = array_merge($data, $future909->value());
}

if ($pages >= 910) {
  $data = array_merge($data, $future910->value());
}

if ($pages >= 911) {
  $data = array_merge($data, $future911->value());
}

if ($pages >= 912) {
  $data = array_merge($data, $future912->value());
}

if ($pages >= 913) {
  $data = array_merge($data, $future913->value());
}

if ($pages >= 914) {
  $data = array_merge($data, $future914->value());
}

if ($pages >= 915) {
  $data = array_merge($data, $future915->value());
}

if ($pages >= 916) {
  $data = array_merge($data, $future916->value());
}

if ($pages >= 917) {
  $data = array_merge($data, $future917->value());
}

if ($pages >= 918) {
  $data = array_merge($data, $future918->value());
}

if ($pages >= 919) {
  $data = array_merge($data, $future919->value());
}

if ($pages >= 920) {
  $data = array_merge($data, $future920->value());
}

if ($pages >= 921) {
  $data = array_merge($data, $future921->value());
}

if ($pages >= 922) {
  $data = array_merge($data, $future922->value());
}

if ($pages >= 923) {
  $data = array_merge($data, $future923->value());
}

if ($pages >= 924) {
  $data = array_merge($data, $future924->value());
}

if ($pages >= 925) {
  $data = array_merge($data, $future925->value());
}

if ($pages >= 926) {
  $data = array_merge($data, $future926->value());
}

if ($pages >= 927) {
  $data = array_merge($data, $future927->value());
}

if ($pages >= 928) {
  $data = array_merge($data, $future928->value());
}

if ($pages >= 929) {
  $data = array_merge($data, $future929->value());
}

if ($pages >= 930) {
  $data = array_merge($data, $future930->value());
}

if ($pages >= 931) {
  $data = array_merge($data, $future931->value());
}

if ($pages >= 932) {
  $data = array_merge($data, $future932->value());
}

if ($pages >= 933) {
  $data = array_merge($data, $future933->value());
}

if ($pages >= 934) {
  $data = array_merge($data, $future934->value());
}

if ($pages >= 935) {
  $data = array_merge($data, $future935->value());
}

if ($pages >= 936) {
  $data = array_merge($data, $future936->value());
}

if ($pages >= 937) {
  $data = array_merge($data, $future937->value());
}

if ($pages >= 938) {
  $data = array_merge($data, $future938->value());
}

if ($pages >= 939) {
  $data = array_merge($data, $future939->value());
}

if ($pages >= 940) {
  $data = array_merge($data, $future940->value());
}

if ($pages >= 941) {
  $data = array_merge($data, $future941->value());
}

if ($pages >= 942) {
  $data = array_merge($data, $future942->value());
}

if ($pages >= 943) {
  $data = array_merge($data, $future943->value());
}

if ($pages >= 944) {
  $data = array_merge($data, $future944->value());
}

if ($pages >= 945) {
  $data = array_merge($data, $future945->value());
}

if ($pages >= 946) {
  $data = array_merge($data, $future946->value());
}

if ($pages >= 947) {
  $data = array_merge($data, $future947->value());
}

if ($pages >= 948) {
  $data = array_merge($data, $future948->value());
}

if ($pages >= 949) {
  $data = array_merge($data, $future949->value());
}

if ($pages >= 950) {
  $data = array_merge($data, $future950->value());
}

if ($pages >= 951) {
  $data = array_merge($data, $future951->value());
}

if ($pages >= 952) {
  $data = array_merge($data, $future952->value());
}

if ($pages >= 953) {
  $data = array_merge($data, $future953->value());
}

if ($pages >= 954) {
  $data = array_merge($data, $future954->value());
}

if ($pages >= 955) {
  $data = array_merge($data, $future955->value());
}

if ($pages >= 956) {
  $data = array_merge($data, $future956->value());
}

if ($pages >= 957) {
  $data = array_merge($data, $future957->value());
}

if ($pages >= 958) {
  $data = array_merge($data, $future958->value());
}

if ($pages >= 959) {
  $data = array_merge($data, $future959->value());
}

if ($pages >= 960) {
  $data = array_merge($data, $future960->value());
}

if ($pages >= 961) {
  $data = array_merge($data, $future961->value());
}

if ($pages >= 962) {
  $data = array_merge($data, $future962->value());
}

if ($pages >= 963) {
  $data = array_merge($data, $future963->value());
}

if ($pages >= 964) {
  $data = array_merge($data, $future964->value());
}

if ($pages >= 965) {
  $data = array_merge($data, $future965->value());
}

if ($pages >= 966) {
  $data = array_merge($data, $future966->value());
}

if ($pages >= 967) {
  $data = array_merge($data, $future967->value());
}

if ($pages >= 968) {
  $data = array_merge($data, $future968->value());
}

if ($pages >= 969) {
  $data = array_merge($data, $future969->value());
}

if ($pages >= 970) {
  $data = array_merge($data, $future970->value());
}

if ($pages >= 971) {
  $data = array_merge($data, $future971->value());
}

if ($pages >= 972) {
  $data = array_merge($data, $future972->value());
}

if ($pages >= 973) {
  $data = array_merge($data, $future973->value());
}

if ($pages >= 974) {
  $data = array_merge($data, $future974->value());
}

if ($pages >= 975) {
  $data = array_merge($data, $future975->value());
}

if ($pages >= 976) {
  $data = array_merge($data, $future976->value());
}

if ($pages >= 977) {
  $data = array_merge($data, $future977->value());
}

if ($pages >= 978) {
  $data = array_merge($data, $future978->value());
}

if ($pages >= 979) {
  $data = array_merge($data, $future979->value());
}

if ($pages >= 980) {
  $data = array_merge($data, $future980->value());
}

if ($pages >= 981) {
  $data = array_merge($data, $future981->value());
}

if ($pages >= 982) {
  $data = array_merge($data, $future982->value());
}

if ($pages >= 983) {
  $data = array_merge($data, $future983->value());
}

if ($pages >= 984) {
  $data = array_merge($data, $future984->value());
}

if ($pages >= 985) {
  $data = array_merge($data, $future985->value());
}

if ($pages >= 986) {
  $data = array_merge($data, $future986->value());
}

if ($pages >= 987) {
  $data = array_merge($data, $future987->value());
}

if ($pages >= 988) {
  $data = array_merge($data, $future988->value());
}

if ($pages >= 989) {
  $data = array_merge($data, $future989->value());
}

if ($pages >= 990) {
  $data = array_merge($data, $future990->value());
}

if ($pages >= 991) {
  $data = array_merge($data, $future991->value());
}

if ($pages >= 992) {
  $data = array_merge($data, $future992->value());
}

if ($pages >= 993) {
  $data = array_merge($data, $future993->value());
}

if ($pages >= 994) {
  $data = array_merge($data, $future994->value());
}

if ($pages >= 995) {
  $data = array_merge($data, $future995->value());
}

if ($pages >= 996) {
  $data = array_merge($data, $future996->value());
}

if ($pages >= 997) {
  $data = array_merge($data, $future997->value());
}

if ($pages >= 998) {
  $data = array_merge($data, $future998->value());
}

if ($pages >= 999) {
  $data = array_merge($data, $future999->value());
}

if ($pages >= 1000) {
  $data = array_merge($data, $future1000->value());
}


for ($i = 0; $i < count($data); $i++) {
  echo $data[$i] . PHP_EOL;
}
