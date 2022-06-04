<?php
$url = 'https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=1';
$column_numbers_to_scrape = [1, 2];
$titles = ["name", "deal", "a", "b"];
$rows = 50;
$xpath_of_a = '/html/body/div/div[3]/main/div/div[2]/div[1]/section/div/div[3]/div/table/tbody/tr[1]/td[1]/a';
$xpaths_to_scrape_in_a_new_page = ["/html/body/div/div[3]/main/div/div/div[1]/div[2]/div[1]/section[1]/div/ul/li[1]/dl/dd/span[1]/span/span", "/html/body/div/div[3]/main/div/div/div[1]/div[2]/div[1]/section[1]/div/ul/li[2]/dl/dd/span[1]/span/span"];
$parameter = 'null';
$pages = 1;
$urls = [];
$html = file_get_contents($url);
$dom = new DOMDocument();
@$dom->loadHTML($html);
$xpath = new DOMXPath($dom);
$data = [];
$hrefs = [];
array_push($data, $titles);

if ($parameter != 'null' && $pages != 1) {
  if (preg_match("/$parameter=[0-9]+/", $url)) {
    for ($i = 1; $i <= $pages; $i++) {
      array_push($urls, preg_replace("/$parameter=[0-9]+/", "${parameter}=$i", $url));
    }
  } else {
    exit('matching error');
  }
} else {
  $pages = 1;
  array_push($urls, $url);
}

for ($i = 1; $i <= $pages; $i++) {
  ${'runtime'.$i} = new \parallel\Runtime();
}

$future1 = $runtime1->run(function($url, $column_numbers_to_scrape, $rows, $xpath_of_a){
  $html = file_get_contents($url);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];
  $hrefs = [];
  $data_hrefs = [];

  for ($i = 1; $i <= $rows; $i++) {
    try {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        if ($xpath->query("//tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0) == null) {
          continue 2;
        } else {
          array_push($tr_tds, $xpath->query("//tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
        }
      }

      array_push($data, $tr_tds);

      if ($xpath_of_a != 'null') {
        $preg_xpath_of_a = preg_replace("/tr\[[0-9]+\]/", "tr[$i]", $xpath_of_a);
        $a = $xpath->query($preg_xpath_of_a)->item(0);
        $href = $a->getAttribute('href');
        array_push($hrefs, $href);
      }
    } catch (Throwable $t) {
      continue;
    } catch (Exception $e) {
      continue;
    }
  }

  array_push($data_hrefs, $data);
  array_push($data_hrefs, $hrefs);

  return $data_hrefs;
}, array($urls[0], $column_numbers_to_scrape, $rows, $xpath_of_a));

for ($i = 1; $i <= $pages; $i++) {
  $data = array_merge($data, ${'future'.$i}->value()[0]);
  $hrefs = array_merge($hrefs, ${'future'.$i}->value()[1]);
}


for ($i = 1; $i <= count($hrefs); $i++) {
  ${'href_runtime'.$i} = new \parallel\Runtime();
}

$href_future1 = $href_runtime1->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[0], $xpaths_to_scrape_in_a_new_page));

$href_future2 = $href_runtime2->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[1], $xpaths_to_scrape_in_a_new_page));

$href_future3 = $href_runtime3->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[2], $xpaths_to_scrape_in_a_new_page));

$href_future4 = $href_runtime4->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[3], $xpaths_to_scrape_in_a_new_page));

$href_future5 = $href_runtime5->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[4], $xpaths_to_scrape_in_a_new_page));

$href_future6 = $href_runtime6->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[5], $xpaths_to_scrape_in_a_new_page));

$href_future7 = $href_runtime7->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[6], $xpaths_to_scrape_in_a_new_page));

$href_future8 = $href_runtime8->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[7], $xpaths_to_scrape_in_a_new_page));

$href_future9 = $href_runtime9->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[8], $xpaths_to_scrape_in_a_new_page));

$href_future10 = $href_runtime10->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[9], $xpaths_to_scrape_in_a_new_page));

$href_future11 = $href_runtime11->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[10], $xpaths_to_scrape_in_a_new_page));

$href_future12 = $href_runtime12->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[11], $xpaths_to_scrape_in_a_new_page));

$href_future13 = $href_runtime13->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[12], $xpaths_to_scrape_in_a_new_page));

$href_future14 = $href_runtime14->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[13], $xpaths_to_scrape_in_a_new_page));

$href_future15 = $href_runtime15->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[14], $xpaths_to_scrape_in_a_new_page));

$href_future16 = $href_runtime16->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[15], $xpaths_to_scrape_in_a_new_page));

$href_future17 = $href_runtime17->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[16], $xpaths_to_scrape_in_a_new_page));

$href_future18 = $href_runtime18->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[17], $xpaths_to_scrape_in_a_new_page));

$href_future19 = $href_runtime19->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[18], $xpaths_to_scrape_in_a_new_page));

$href_future20 = $href_runtime20->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[19], $xpaths_to_scrape_in_a_new_page));

$href_future21 = $href_runtime21->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[20], $xpaths_to_scrape_in_a_new_page));

$href_future22 = $href_runtime22->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[21], $xpaths_to_scrape_in_a_new_page));

$href_future23 = $href_runtime23->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[22], $xpaths_to_scrape_in_a_new_page));

$href_future24 = $href_runtime24->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[23], $xpaths_to_scrape_in_a_new_page));

$href_future25 = $href_runtime25->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[24], $xpaths_to_scrape_in_a_new_page));

$href_future26 = $href_runtime26->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[25], $xpaths_to_scrape_in_a_new_page));

$href_future27 = $href_runtime27->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[26], $xpaths_to_scrape_in_a_new_page));

$href_future28 = $href_runtime28->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[27], $xpaths_to_scrape_in_a_new_page));

$href_future29 = $href_runtime29->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[28], $xpaths_to_scrape_in_a_new_page));

$href_future30 = $href_runtime30->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[29], $xpaths_to_scrape_in_a_new_page));

$href_future31 = $href_runtime31->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[30], $xpaths_to_scrape_in_a_new_page));

$href_future32 = $href_runtime32->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[31], $xpaths_to_scrape_in_a_new_page));

$href_future33 = $href_runtime33->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[32], $xpaths_to_scrape_in_a_new_page));

$href_future34 = $href_runtime34->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[33], $xpaths_to_scrape_in_a_new_page));

$href_future35 = $href_runtime35->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[34], $xpaths_to_scrape_in_a_new_page));

$href_future36 = $href_runtime36->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[35], $xpaths_to_scrape_in_a_new_page));

$href_future37 = $href_runtime37->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[36], $xpaths_to_scrape_in_a_new_page));

$href_future38 = $href_runtime38->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[37], $xpaths_to_scrape_in_a_new_page));

$href_future39 = $href_runtime39->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[38], $xpaths_to_scrape_in_a_new_page));

$href_future40 = $href_runtime40->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[39], $xpaths_to_scrape_in_a_new_page));

$href_future41 = $href_runtime41->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[40], $xpaths_to_scrape_in_a_new_page));

$href_future42 = $href_runtime42->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[41], $xpaths_to_scrape_in_a_new_page));

$href_future43 = $href_runtime43->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[42], $xpaths_to_scrape_in_a_new_page));

$href_future44 = $href_runtime44->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[43], $xpaths_to_scrape_in_a_new_page));

$href_future45 = $href_runtime45->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[44], $xpaths_to_scrape_in_a_new_page));

$href_future46 = $href_runtime46->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[45], $xpaths_to_scrape_in_a_new_page));

$href_future47 = $href_runtime47->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[46], $xpaths_to_scrape_in_a_new_page));

$href_future48 = $href_runtime48->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[47], $xpaths_to_scrape_in_a_new_page));

$href_future49 = $href_runtime49->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[48], $xpaths_to_scrape_in_a_new_page));

$href_future50 = $href_runtime50->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[49], $xpaths_to_scrape_in_a_new_page));

for ($i = 1; $i < count($data); $i++) {
  for ($j = 0; $j < count(${'href_future'.$i}->value()); $j++) {
    array_push($data[$i], ${'href_future'.$i}->value()[$j]);
  }
}

for ($i = 0; $i < count($data); $i++) {
  if ($i == 0) {
    array_unshift($data[$i], 'id');
  } else {
    array_unshift($data[$i], $i);
  }
}
?>

<script type="text/javascript">
  const data = JSON.parse('<?php echo json_encode($data); ?>');
</script>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost:81/ssr/index.css">
  </head>
  <body class="m-1">
    <div id="result_table_section"></div>

    <form class="mb-5" id="chart_form">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="condition" id="group_by_a_column_radio">group by a column
        <div id="group_by_a_column_section"></div>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="condition" id="range_radio">range
        <div id="range_section"></div>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="condition" id="keyword_radio">keyword
        <div id="keyword_section"></div>
      </div>

      <button type="button" class="btn btn-primary" id="see_chart_btn">see chart</button>
    </form>

    <div id="chart_section"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://localhost:81/ssr/paginathing.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
    <script src="http://localhost:81/ssr/background_colors.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script src="http://localhost:81/ssr/list_chart.js"></script>
  </body>
</html>
