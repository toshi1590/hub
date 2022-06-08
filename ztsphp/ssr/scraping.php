<?php

$start_time = microtime(true);

$url = 'https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=1';
$column_numbers_to_scrape = [1,2];
$titles = ["name","deal","dekidaka","baibaidaikinn"];
$rows = 50;
$xpath_of_a = '/html/body/div/div[3]/main/div/div[2]/div[1]/section/div/div[3]/div/table/tbody/tr[1]/td[1]/a';
$xpaths_to_scrape_in_a_new_page = ["/html/body/div/div[3]/main/div/div/div[1]/div[2]/div[1]/section[1]/div/ul/li[5]/dl/dd/span[1]/span/span[1]","/html/body/div/div[3]/main/div/div/div[1]/div[2]/div[1]/section[1]/div/ul/li[6]/dl/dd/span[1]/span/span[1]"];
$parameter = 'page';
$pages = 10;
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

$future2 = $runtime2->run(function($url, $column_numbers_to_scrape, $rows, $xpath_of_a){
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
}, array($urls[1], $column_numbers_to_scrape, $rows, $xpath_of_a));

$future3 = $runtime3->run(function($url, $column_numbers_to_scrape, $rows, $xpath_of_a){
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
}, array($urls[2], $column_numbers_to_scrape, $rows, $xpath_of_a));

$future4 = $runtime4->run(function($url, $column_numbers_to_scrape, $rows, $xpath_of_a){
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
}, array($urls[3], $column_numbers_to_scrape, $rows, $xpath_of_a));

$future5 = $runtime5->run(function($url, $column_numbers_to_scrape, $rows, $xpath_of_a){
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
}, array($urls[4], $column_numbers_to_scrape, $rows, $xpath_of_a));

$future6 = $runtime6->run(function($url, $column_numbers_to_scrape, $rows, $xpath_of_a){
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
}, array($urls[5], $column_numbers_to_scrape, $rows, $xpath_of_a));

$future7 = $runtime7->run(function($url, $column_numbers_to_scrape, $rows, $xpath_of_a){
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
}, array($urls[6], $column_numbers_to_scrape, $rows, $xpath_of_a));

$future8 = $runtime8->run(function($url, $column_numbers_to_scrape, $rows, $xpath_of_a){
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
}, array($urls[7], $column_numbers_to_scrape, $rows, $xpath_of_a));

$future9 = $runtime9->run(function($url, $column_numbers_to_scrape, $rows, $xpath_of_a){
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
}, array($urls[8], $column_numbers_to_scrape, $rows, $xpath_of_a));

$future10 = $runtime10->run(function($url, $column_numbers_to_scrape, $rows, $xpath_of_a){
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
}, array($urls[9], $column_numbers_to_scrape, $rows, $xpath_of_a));

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

$href_future51 = $href_runtime51->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[50], $xpaths_to_scrape_in_a_new_page));

$href_future52 = $href_runtime52->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[51], $xpaths_to_scrape_in_a_new_page));

$href_future53 = $href_runtime53->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[52], $xpaths_to_scrape_in_a_new_page));

$href_future54 = $href_runtime54->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[53], $xpaths_to_scrape_in_a_new_page));

$href_future55 = $href_runtime55->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[54], $xpaths_to_scrape_in_a_new_page));

$href_future56 = $href_runtime56->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[55], $xpaths_to_scrape_in_a_new_page));

$href_future57 = $href_runtime57->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[56], $xpaths_to_scrape_in_a_new_page));

$href_future58 = $href_runtime58->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[57], $xpaths_to_scrape_in_a_new_page));

$href_future59 = $href_runtime59->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[58], $xpaths_to_scrape_in_a_new_page));

$href_future60 = $href_runtime60->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[59], $xpaths_to_scrape_in_a_new_page));

$href_future61 = $href_runtime61->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[60], $xpaths_to_scrape_in_a_new_page));

$href_future62 = $href_runtime62->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[61], $xpaths_to_scrape_in_a_new_page));

$href_future63 = $href_runtime63->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[62], $xpaths_to_scrape_in_a_new_page));

$href_future64 = $href_runtime64->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[63], $xpaths_to_scrape_in_a_new_page));

$href_future65 = $href_runtime65->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[64], $xpaths_to_scrape_in_a_new_page));

$href_future66 = $href_runtime66->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[65], $xpaths_to_scrape_in_a_new_page));

$href_future67 = $href_runtime67->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[66], $xpaths_to_scrape_in_a_new_page));

$href_future68 = $href_runtime68->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[67], $xpaths_to_scrape_in_a_new_page));

$href_future69 = $href_runtime69->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[68], $xpaths_to_scrape_in_a_new_page));

$href_future70 = $href_runtime70->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[69], $xpaths_to_scrape_in_a_new_page));

$href_future71 = $href_runtime71->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[70], $xpaths_to_scrape_in_a_new_page));

$href_future72 = $href_runtime72->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[71], $xpaths_to_scrape_in_a_new_page));

$href_future73 = $href_runtime73->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[72], $xpaths_to_scrape_in_a_new_page));

$href_future74 = $href_runtime74->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[73], $xpaths_to_scrape_in_a_new_page));

$href_future75 = $href_runtime75->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[74], $xpaths_to_scrape_in_a_new_page));

$href_future76 = $href_runtime76->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[75], $xpaths_to_scrape_in_a_new_page));

$href_future77 = $href_runtime77->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[76], $xpaths_to_scrape_in_a_new_page));

$href_future78 = $href_runtime78->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[77], $xpaths_to_scrape_in_a_new_page));

$href_future79 = $href_runtime79->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[78], $xpaths_to_scrape_in_a_new_page));

$href_future80 = $href_runtime80->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[79], $xpaths_to_scrape_in_a_new_page));

$href_future81 = $href_runtime81->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[80], $xpaths_to_scrape_in_a_new_page));

$href_future82 = $href_runtime82->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[81], $xpaths_to_scrape_in_a_new_page));

$href_future83 = $href_runtime83->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[82], $xpaths_to_scrape_in_a_new_page));

$href_future84 = $href_runtime84->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[83], $xpaths_to_scrape_in_a_new_page));

$href_future85 = $href_runtime85->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[84], $xpaths_to_scrape_in_a_new_page));

$href_future86 = $href_runtime86->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[85], $xpaths_to_scrape_in_a_new_page));

$href_future87 = $href_runtime87->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[86], $xpaths_to_scrape_in_a_new_page));

$href_future88 = $href_runtime88->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[87], $xpaths_to_scrape_in_a_new_page));

$href_future89 = $href_runtime89->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[88], $xpaths_to_scrape_in_a_new_page));

$href_future90 = $href_runtime90->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[89], $xpaths_to_scrape_in_a_new_page));

$href_future91 = $href_runtime91->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[90], $xpaths_to_scrape_in_a_new_page));

$href_future92 = $href_runtime92->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[91], $xpaths_to_scrape_in_a_new_page));

$href_future93 = $href_runtime93->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[92], $xpaths_to_scrape_in_a_new_page));

$href_future94 = $href_runtime94->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[93], $xpaths_to_scrape_in_a_new_page));

$href_future95 = $href_runtime95->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[94], $xpaths_to_scrape_in_a_new_page));

$href_future96 = $href_runtime96->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[95], $xpaths_to_scrape_in_a_new_page));

$href_future97 = $href_runtime97->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[96], $xpaths_to_scrape_in_a_new_page));

$href_future98 = $href_runtime98->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[97], $xpaths_to_scrape_in_a_new_page));

$href_future99 = $href_runtime99->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[98], $xpaths_to_scrape_in_a_new_page));

$href_future100 = $href_runtime100->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[99], $xpaths_to_scrape_in_a_new_page));

$href_future101 = $href_runtime101->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[100], $xpaths_to_scrape_in_a_new_page));

$href_future102 = $href_runtime102->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[101], $xpaths_to_scrape_in_a_new_page));

$href_future103 = $href_runtime103->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[102], $xpaths_to_scrape_in_a_new_page));

$href_future104 = $href_runtime104->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[103], $xpaths_to_scrape_in_a_new_page));

$href_future105 = $href_runtime105->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[104], $xpaths_to_scrape_in_a_new_page));

$href_future106 = $href_runtime106->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[105], $xpaths_to_scrape_in_a_new_page));

$href_future107 = $href_runtime107->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[106], $xpaths_to_scrape_in_a_new_page));

$href_future108 = $href_runtime108->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[107], $xpaths_to_scrape_in_a_new_page));

$href_future109 = $href_runtime109->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[108], $xpaths_to_scrape_in_a_new_page));

$href_future110 = $href_runtime110->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[109], $xpaths_to_scrape_in_a_new_page));

$href_future111 = $href_runtime111->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[110], $xpaths_to_scrape_in_a_new_page));

$href_future112 = $href_runtime112->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[111], $xpaths_to_scrape_in_a_new_page));

$href_future113 = $href_runtime113->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[112], $xpaths_to_scrape_in_a_new_page));

$href_future114 = $href_runtime114->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[113], $xpaths_to_scrape_in_a_new_page));

$href_future115 = $href_runtime115->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[114], $xpaths_to_scrape_in_a_new_page));

$href_future116 = $href_runtime116->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[115], $xpaths_to_scrape_in_a_new_page));

$href_future117 = $href_runtime117->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[116], $xpaths_to_scrape_in_a_new_page));

$href_future118 = $href_runtime118->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[117], $xpaths_to_scrape_in_a_new_page));

$href_future119 = $href_runtime119->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[118], $xpaths_to_scrape_in_a_new_page));

$href_future120 = $href_runtime120->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[119], $xpaths_to_scrape_in_a_new_page));

$href_future121 = $href_runtime121->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[120], $xpaths_to_scrape_in_a_new_page));

$href_future122 = $href_runtime122->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[121], $xpaths_to_scrape_in_a_new_page));

$href_future123 = $href_runtime123->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[122], $xpaths_to_scrape_in_a_new_page));

$href_future124 = $href_runtime124->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[123], $xpaths_to_scrape_in_a_new_page));

$href_future125 = $href_runtime125->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[124], $xpaths_to_scrape_in_a_new_page));

$href_future126 = $href_runtime126->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[125], $xpaths_to_scrape_in_a_new_page));

$href_future127 = $href_runtime127->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[126], $xpaths_to_scrape_in_a_new_page));

$href_future128 = $href_runtime128->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[127], $xpaths_to_scrape_in_a_new_page));

$href_future129 = $href_runtime129->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[128], $xpaths_to_scrape_in_a_new_page));

$href_future130 = $href_runtime130->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[129], $xpaths_to_scrape_in_a_new_page));

$href_future131 = $href_runtime131->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[130], $xpaths_to_scrape_in_a_new_page));

$href_future132 = $href_runtime132->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[131], $xpaths_to_scrape_in_a_new_page));

$href_future133 = $href_runtime133->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[132], $xpaths_to_scrape_in_a_new_page));

$href_future134 = $href_runtime134->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[133], $xpaths_to_scrape_in_a_new_page));

$href_future135 = $href_runtime135->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[134], $xpaths_to_scrape_in_a_new_page));

$href_future136 = $href_runtime136->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[135], $xpaths_to_scrape_in_a_new_page));

$href_future137 = $href_runtime137->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[136], $xpaths_to_scrape_in_a_new_page));

$href_future138 = $href_runtime138->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[137], $xpaths_to_scrape_in_a_new_page));

$href_future139 = $href_runtime139->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[138], $xpaths_to_scrape_in_a_new_page));

$href_future140 = $href_runtime140->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[139], $xpaths_to_scrape_in_a_new_page));

$href_future141 = $href_runtime141->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[140], $xpaths_to_scrape_in_a_new_page));

$href_future142 = $href_runtime142->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[141], $xpaths_to_scrape_in_a_new_page));

$href_future143 = $href_runtime143->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[142], $xpaths_to_scrape_in_a_new_page));

$href_future144 = $href_runtime144->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[143], $xpaths_to_scrape_in_a_new_page));

$href_future145 = $href_runtime145->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[144], $xpaths_to_scrape_in_a_new_page));

$href_future146 = $href_runtime146->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[145], $xpaths_to_scrape_in_a_new_page));

$href_future147 = $href_runtime147->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[146], $xpaths_to_scrape_in_a_new_page));

$href_future148 = $href_runtime148->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[147], $xpaths_to_scrape_in_a_new_page));

$href_future149 = $href_runtime149->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[148], $xpaths_to_scrape_in_a_new_page));

$href_future150 = $href_runtime150->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[149], $xpaths_to_scrape_in_a_new_page));

$href_future151 = $href_runtime151->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[150], $xpaths_to_scrape_in_a_new_page));

$href_future152 = $href_runtime152->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[151], $xpaths_to_scrape_in_a_new_page));

$href_future153 = $href_runtime153->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[152], $xpaths_to_scrape_in_a_new_page));

$href_future154 = $href_runtime154->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[153], $xpaths_to_scrape_in_a_new_page));

$href_future155 = $href_runtime155->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[154], $xpaths_to_scrape_in_a_new_page));

$href_future156 = $href_runtime156->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[155], $xpaths_to_scrape_in_a_new_page));

$href_future157 = $href_runtime157->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[156], $xpaths_to_scrape_in_a_new_page));

$href_future158 = $href_runtime158->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[157], $xpaths_to_scrape_in_a_new_page));

$href_future159 = $href_runtime159->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[158], $xpaths_to_scrape_in_a_new_page));

$href_future160 = $href_runtime160->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[159], $xpaths_to_scrape_in_a_new_page));

$href_future161 = $href_runtime161->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[160], $xpaths_to_scrape_in_a_new_page));

$href_future162 = $href_runtime162->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[161], $xpaths_to_scrape_in_a_new_page));

$href_future163 = $href_runtime163->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[162], $xpaths_to_scrape_in_a_new_page));

$href_future164 = $href_runtime164->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[163], $xpaths_to_scrape_in_a_new_page));

$href_future165 = $href_runtime165->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[164], $xpaths_to_scrape_in_a_new_page));

$href_future166 = $href_runtime166->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[165], $xpaths_to_scrape_in_a_new_page));

$href_future167 = $href_runtime167->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[166], $xpaths_to_scrape_in_a_new_page));

$href_future168 = $href_runtime168->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[167], $xpaths_to_scrape_in_a_new_page));

$href_future169 = $href_runtime169->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[168], $xpaths_to_scrape_in_a_new_page));

$href_future170 = $href_runtime170->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[169], $xpaths_to_scrape_in_a_new_page));

$href_future171 = $href_runtime171->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[170], $xpaths_to_scrape_in_a_new_page));

$href_future172 = $href_runtime172->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[171], $xpaths_to_scrape_in_a_new_page));

$href_future173 = $href_runtime173->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[172], $xpaths_to_scrape_in_a_new_page));

$href_future174 = $href_runtime174->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[173], $xpaths_to_scrape_in_a_new_page));

$href_future175 = $href_runtime175->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[174], $xpaths_to_scrape_in_a_new_page));

$href_future176 = $href_runtime176->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[175], $xpaths_to_scrape_in_a_new_page));

$href_future177 = $href_runtime177->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[176], $xpaths_to_scrape_in_a_new_page));

$href_future178 = $href_runtime178->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[177], $xpaths_to_scrape_in_a_new_page));

$href_future179 = $href_runtime179->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[178], $xpaths_to_scrape_in_a_new_page));

$href_future180 = $href_runtime180->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[179], $xpaths_to_scrape_in_a_new_page));

$href_future181 = $href_runtime181->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[180], $xpaths_to_scrape_in_a_new_page));

$href_future182 = $href_runtime182->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[181], $xpaths_to_scrape_in_a_new_page));

$href_future183 = $href_runtime183->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[182], $xpaths_to_scrape_in_a_new_page));

$href_future184 = $href_runtime184->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[183], $xpaths_to_scrape_in_a_new_page));

$href_future185 = $href_runtime185->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[184], $xpaths_to_scrape_in_a_new_page));

$href_future186 = $href_runtime186->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[185], $xpaths_to_scrape_in_a_new_page));

$href_future187 = $href_runtime187->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[186], $xpaths_to_scrape_in_a_new_page));

$href_future188 = $href_runtime188->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[187], $xpaths_to_scrape_in_a_new_page));

$href_future189 = $href_runtime189->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[188], $xpaths_to_scrape_in_a_new_page));

$href_future190 = $href_runtime190->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[189], $xpaths_to_scrape_in_a_new_page));

$href_future191 = $href_runtime191->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[190], $xpaths_to_scrape_in_a_new_page));

$href_future192 = $href_runtime192->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[191], $xpaths_to_scrape_in_a_new_page));

$href_future193 = $href_runtime193->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[192], $xpaths_to_scrape_in_a_new_page));

$href_future194 = $href_runtime194->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[193], $xpaths_to_scrape_in_a_new_page));

$href_future195 = $href_runtime195->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[194], $xpaths_to_scrape_in_a_new_page));

$href_future196 = $href_runtime196->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[195], $xpaths_to_scrape_in_a_new_page));

$href_future197 = $href_runtime197->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[196], $xpaths_to_scrape_in_a_new_page));

$href_future198 = $href_runtime198->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[197], $xpaths_to_scrape_in_a_new_page));

$href_future199 = $href_runtime199->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[198], $xpaths_to_scrape_in_a_new_page));

$href_future200 = $href_runtime200->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[199], $xpaths_to_scrape_in_a_new_page));

$href_future201 = $href_runtime201->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[200], $xpaths_to_scrape_in_a_new_page));

$href_future202 = $href_runtime202->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[201], $xpaths_to_scrape_in_a_new_page));

$href_future203 = $href_runtime203->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[202], $xpaths_to_scrape_in_a_new_page));

$href_future204 = $href_runtime204->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[203], $xpaths_to_scrape_in_a_new_page));

$href_future205 = $href_runtime205->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[204], $xpaths_to_scrape_in_a_new_page));

$href_future206 = $href_runtime206->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[205], $xpaths_to_scrape_in_a_new_page));

$href_future207 = $href_runtime207->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[206], $xpaths_to_scrape_in_a_new_page));

$href_future208 = $href_runtime208->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[207], $xpaths_to_scrape_in_a_new_page));

$href_future209 = $href_runtime209->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[208], $xpaths_to_scrape_in_a_new_page));

$href_future210 = $href_runtime210->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[209], $xpaths_to_scrape_in_a_new_page));

$href_future211 = $href_runtime211->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[210], $xpaths_to_scrape_in_a_new_page));

$href_future212 = $href_runtime212->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[211], $xpaths_to_scrape_in_a_new_page));

$href_future213 = $href_runtime213->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[212], $xpaths_to_scrape_in_a_new_page));

$href_future214 = $href_runtime214->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[213], $xpaths_to_scrape_in_a_new_page));

$href_future215 = $href_runtime215->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[214], $xpaths_to_scrape_in_a_new_page));

$href_future216 = $href_runtime216->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[215], $xpaths_to_scrape_in_a_new_page));

$href_future217 = $href_runtime217->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[216], $xpaths_to_scrape_in_a_new_page));

$href_future218 = $href_runtime218->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[217], $xpaths_to_scrape_in_a_new_page));

$href_future219 = $href_runtime219->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[218], $xpaths_to_scrape_in_a_new_page));

$href_future220 = $href_runtime220->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[219], $xpaths_to_scrape_in_a_new_page));

$href_future221 = $href_runtime221->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[220], $xpaths_to_scrape_in_a_new_page));

$href_future222 = $href_runtime222->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[221], $xpaths_to_scrape_in_a_new_page));

$href_future223 = $href_runtime223->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[222], $xpaths_to_scrape_in_a_new_page));

$href_future224 = $href_runtime224->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[223], $xpaths_to_scrape_in_a_new_page));

$href_future225 = $href_runtime225->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[224], $xpaths_to_scrape_in_a_new_page));

$href_future226 = $href_runtime226->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[225], $xpaths_to_scrape_in_a_new_page));

$href_future227 = $href_runtime227->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[226], $xpaths_to_scrape_in_a_new_page));

$href_future228 = $href_runtime228->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[227], $xpaths_to_scrape_in_a_new_page));

$href_future229 = $href_runtime229->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[228], $xpaths_to_scrape_in_a_new_page));

$href_future230 = $href_runtime230->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[229], $xpaths_to_scrape_in_a_new_page));

$href_future231 = $href_runtime231->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[230], $xpaths_to_scrape_in_a_new_page));

$href_future232 = $href_runtime232->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[231], $xpaths_to_scrape_in_a_new_page));

$href_future233 = $href_runtime233->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[232], $xpaths_to_scrape_in_a_new_page));

$href_future234 = $href_runtime234->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[233], $xpaths_to_scrape_in_a_new_page));

$href_future235 = $href_runtime235->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[234], $xpaths_to_scrape_in_a_new_page));

$href_future236 = $href_runtime236->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[235], $xpaths_to_scrape_in_a_new_page));

$href_future237 = $href_runtime237->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[236], $xpaths_to_scrape_in_a_new_page));

$href_future238 = $href_runtime238->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[237], $xpaths_to_scrape_in_a_new_page));

$href_future239 = $href_runtime239->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[238], $xpaths_to_scrape_in_a_new_page));

$href_future240 = $href_runtime240->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[239], $xpaths_to_scrape_in_a_new_page));

$href_future241 = $href_runtime241->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[240], $xpaths_to_scrape_in_a_new_page));

$href_future242 = $href_runtime242->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[241], $xpaths_to_scrape_in_a_new_page));

$href_future243 = $href_runtime243->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[242], $xpaths_to_scrape_in_a_new_page));

$href_future244 = $href_runtime244->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[243], $xpaths_to_scrape_in_a_new_page));

$href_future245 = $href_runtime245->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[244], $xpaths_to_scrape_in_a_new_page));

$href_future246 = $href_runtime246->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[245], $xpaths_to_scrape_in_a_new_page));

$href_future247 = $href_runtime247->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[246], $xpaths_to_scrape_in_a_new_page));

$href_future248 = $href_runtime248->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[247], $xpaths_to_scrape_in_a_new_page));

$href_future249 = $href_runtime249->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[248], $xpaths_to_scrape_in_a_new_page));

$href_future250 = $href_runtime250->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[249], $xpaths_to_scrape_in_a_new_page));

$href_future251 = $href_runtime251->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[250], $xpaths_to_scrape_in_a_new_page));

$href_future252 = $href_runtime252->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[251], $xpaths_to_scrape_in_a_new_page));

$href_future253 = $href_runtime253->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[252], $xpaths_to_scrape_in_a_new_page));

$href_future254 = $href_runtime254->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[253], $xpaths_to_scrape_in_a_new_page));

$href_future255 = $href_runtime255->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[254], $xpaths_to_scrape_in_a_new_page));

$href_future256 = $href_runtime256->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[255], $xpaths_to_scrape_in_a_new_page));

$href_future257 = $href_runtime257->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[256], $xpaths_to_scrape_in_a_new_page));

$href_future258 = $href_runtime258->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[257], $xpaths_to_scrape_in_a_new_page));

$href_future259 = $href_runtime259->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[258], $xpaths_to_scrape_in_a_new_page));

$href_future260 = $href_runtime260->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[259], $xpaths_to_scrape_in_a_new_page));

$href_future261 = $href_runtime261->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[260], $xpaths_to_scrape_in_a_new_page));

$href_future262 = $href_runtime262->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[261], $xpaths_to_scrape_in_a_new_page));

$href_future263 = $href_runtime263->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[262], $xpaths_to_scrape_in_a_new_page));

$href_future264 = $href_runtime264->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[263], $xpaths_to_scrape_in_a_new_page));

$href_future265 = $href_runtime265->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[264], $xpaths_to_scrape_in_a_new_page));

$href_future266 = $href_runtime266->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[265], $xpaths_to_scrape_in_a_new_page));

$href_future267 = $href_runtime267->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[266], $xpaths_to_scrape_in_a_new_page));

$href_future268 = $href_runtime268->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[267], $xpaths_to_scrape_in_a_new_page));

$href_future269 = $href_runtime269->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[268], $xpaths_to_scrape_in_a_new_page));

$href_future270 = $href_runtime270->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[269], $xpaths_to_scrape_in_a_new_page));

$href_future271 = $href_runtime271->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[270], $xpaths_to_scrape_in_a_new_page));

$href_future272 = $href_runtime272->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[271], $xpaths_to_scrape_in_a_new_page));

$href_future273 = $href_runtime273->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[272], $xpaths_to_scrape_in_a_new_page));

$href_future274 = $href_runtime274->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[273], $xpaths_to_scrape_in_a_new_page));

$href_future275 = $href_runtime275->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[274], $xpaths_to_scrape_in_a_new_page));

$href_future276 = $href_runtime276->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[275], $xpaths_to_scrape_in_a_new_page));

$href_future277 = $href_runtime277->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[276], $xpaths_to_scrape_in_a_new_page));

$href_future278 = $href_runtime278->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[277], $xpaths_to_scrape_in_a_new_page));

$href_future279 = $href_runtime279->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[278], $xpaths_to_scrape_in_a_new_page));

$href_future280 = $href_runtime280->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[279], $xpaths_to_scrape_in_a_new_page));

$href_future281 = $href_runtime281->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[280], $xpaths_to_scrape_in_a_new_page));

$href_future282 = $href_runtime282->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[281], $xpaths_to_scrape_in_a_new_page));

$href_future283 = $href_runtime283->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[282], $xpaths_to_scrape_in_a_new_page));

$href_future284 = $href_runtime284->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[283], $xpaths_to_scrape_in_a_new_page));

$href_future285 = $href_runtime285->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[284], $xpaths_to_scrape_in_a_new_page));

$href_future286 = $href_runtime286->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[285], $xpaths_to_scrape_in_a_new_page));

$href_future287 = $href_runtime287->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[286], $xpaths_to_scrape_in_a_new_page));

$href_future288 = $href_runtime288->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[287], $xpaths_to_scrape_in_a_new_page));

$href_future289 = $href_runtime289->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[288], $xpaths_to_scrape_in_a_new_page));

$href_future290 = $href_runtime290->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[289], $xpaths_to_scrape_in_a_new_page));

$href_future291 = $href_runtime291->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[290], $xpaths_to_scrape_in_a_new_page));

$href_future292 = $href_runtime292->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[291], $xpaths_to_scrape_in_a_new_page));

$href_future293 = $href_runtime293->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[292], $xpaths_to_scrape_in_a_new_page));

$href_future294 = $href_runtime294->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[293], $xpaths_to_scrape_in_a_new_page));

$href_future295 = $href_runtime295->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[294], $xpaths_to_scrape_in_a_new_page));

$href_future296 = $href_runtime296->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[295], $xpaths_to_scrape_in_a_new_page));

$href_future297 = $href_runtime297->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[296], $xpaths_to_scrape_in_a_new_page));

$href_future298 = $href_runtime298->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[297], $xpaths_to_scrape_in_a_new_page));

$href_future299 = $href_runtime299->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[298], $xpaths_to_scrape_in_a_new_page));

$href_future300 = $href_runtime300->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[299], $xpaths_to_scrape_in_a_new_page));

$href_future301 = $href_runtime301->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[300], $xpaths_to_scrape_in_a_new_page));

$href_future302 = $href_runtime302->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[301], $xpaths_to_scrape_in_a_new_page));

$href_future303 = $href_runtime303->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[302], $xpaths_to_scrape_in_a_new_page));

$href_future304 = $href_runtime304->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[303], $xpaths_to_scrape_in_a_new_page));

$href_future305 = $href_runtime305->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[304], $xpaths_to_scrape_in_a_new_page));

$href_future306 = $href_runtime306->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[305], $xpaths_to_scrape_in_a_new_page));

$href_future307 = $href_runtime307->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[306], $xpaths_to_scrape_in_a_new_page));

$href_future308 = $href_runtime308->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[307], $xpaths_to_scrape_in_a_new_page));

$href_future309 = $href_runtime309->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[308], $xpaths_to_scrape_in_a_new_page));

$href_future310 = $href_runtime310->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[309], $xpaths_to_scrape_in_a_new_page));

$href_future311 = $href_runtime311->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[310], $xpaths_to_scrape_in_a_new_page));

$href_future312 = $href_runtime312->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[311], $xpaths_to_scrape_in_a_new_page));

$href_future313 = $href_runtime313->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[312], $xpaths_to_scrape_in_a_new_page));

$href_future314 = $href_runtime314->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[313], $xpaths_to_scrape_in_a_new_page));

$href_future315 = $href_runtime315->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[314], $xpaths_to_scrape_in_a_new_page));

$href_future316 = $href_runtime316->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[315], $xpaths_to_scrape_in_a_new_page));

$href_future317 = $href_runtime317->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[316], $xpaths_to_scrape_in_a_new_page));

$href_future318 = $href_runtime318->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[317], $xpaths_to_scrape_in_a_new_page));

$href_future319 = $href_runtime319->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[318], $xpaths_to_scrape_in_a_new_page));

$href_future320 = $href_runtime320->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[319], $xpaths_to_scrape_in_a_new_page));

$href_future321 = $href_runtime321->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[320], $xpaths_to_scrape_in_a_new_page));

$href_future322 = $href_runtime322->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[321], $xpaths_to_scrape_in_a_new_page));

$href_future323 = $href_runtime323->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[322], $xpaths_to_scrape_in_a_new_page));

$href_future324 = $href_runtime324->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[323], $xpaths_to_scrape_in_a_new_page));

$href_future325 = $href_runtime325->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[324], $xpaths_to_scrape_in_a_new_page));

$href_future326 = $href_runtime326->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[325], $xpaths_to_scrape_in_a_new_page));

$href_future327 = $href_runtime327->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[326], $xpaths_to_scrape_in_a_new_page));

$href_future328 = $href_runtime328->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[327], $xpaths_to_scrape_in_a_new_page));

$href_future329 = $href_runtime329->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[328], $xpaths_to_scrape_in_a_new_page));

$href_future330 = $href_runtime330->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[329], $xpaths_to_scrape_in_a_new_page));

$href_future331 = $href_runtime331->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[330], $xpaths_to_scrape_in_a_new_page));

$href_future332 = $href_runtime332->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[331], $xpaths_to_scrape_in_a_new_page));

$href_future333 = $href_runtime333->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[332], $xpaths_to_scrape_in_a_new_page));

$href_future334 = $href_runtime334->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[333], $xpaths_to_scrape_in_a_new_page));

$href_future335 = $href_runtime335->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[334], $xpaths_to_scrape_in_a_new_page));

$href_future336 = $href_runtime336->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[335], $xpaths_to_scrape_in_a_new_page));

$href_future337 = $href_runtime337->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[336], $xpaths_to_scrape_in_a_new_page));

$href_future338 = $href_runtime338->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[337], $xpaths_to_scrape_in_a_new_page));

$href_future339 = $href_runtime339->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[338], $xpaths_to_scrape_in_a_new_page));

$href_future340 = $href_runtime340->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[339], $xpaths_to_scrape_in_a_new_page));

$href_future341 = $href_runtime341->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[340], $xpaths_to_scrape_in_a_new_page));

$href_future342 = $href_runtime342->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[341], $xpaths_to_scrape_in_a_new_page));

$href_future343 = $href_runtime343->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[342], $xpaths_to_scrape_in_a_new_page));

$href_future344 = $href_runtime344->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[343], $xpaths_to_scrape_in_a_new_page));

$href_future345 = $href_runtime345->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[344], $xpaths_to_scrape_in_a_new_page));

$href_future346 = $href_runtime346->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[345], $xpaths_to_scrape_in_a_new_page));

$href_future347 = $href_runtime347->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[346], $xpaths_to_scrape_in_a_new_page));

$href_future348 = $href_runtime348->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[347], $xpaths_to_scrape_in_a_new_page));

$href_future349 = $href_runtime349->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[348], $xpaths_to_scrape_in_a_new_page));

$href_future350 = $href_runtime350->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[349], $xpaths_to_scrape_in_a_new_page));

$href_future351 = $href_runtime351->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[350], $xpaths_to_scrape_in_a_new_page));

$href_future352 = $href_runtime352->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[351], $xpaths_to_scrape_in_a_new_page));

$href_future353 = $href_runtime353->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[352], $xpaths_to_scrape_in_a_new_page));

$href_future354 = $href_runtime354->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[353], $xpaths_to_scrape_in_a_new_page));

$href_future355 = $href_runtime355->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[354], $xpaths_to_scrape_in_a_new_page));

$href_future356 = $href_runtime356->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[355], $xpaths_to_scrape_in_a_new_page));

$href_future357 = $href_runtime357->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[356], $xpaths_to_scrape_in_a_new_page));

$href_future358 = $href_runtime358->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[357], $xpaths_to_scrape_in_a_new_page));

$href_future359 = $href_runtime359->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[358], $xpaths_to_scrape_in_a_new_page));

$href_future360 = $href_runtime360->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[359], $xpaths_to_scrape_in_a_new_page));

$href_future361 = $href_runtime361->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[360], $xpaths_to_scrape_in_a_new_page));

$href_future362 = $href_runtime362->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[361], $xpaths_to_scrape_in_a_new_page));

$href_future363 = $href_runtime363->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[362], $xpaths_to_scrape_in_a_new_page));

$href_future364 = $href_runtime364->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[363], $xpaths_to_scrape_in_a_new_page));

$href_future365 = $href_runtime365->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[364], $xpaths_to_scrape_in_a_new_page));

$href_future366 = $href_runtime366->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[365], $xpaths_to_scrape_in_a_new_page));

$href_future367 = $href_runtime367->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[366], $xpaths_to_scrape_in_a_new_page));

$href_future368 = $href_runtime368->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[367], $xpaths_to_scrape_in_a_new_page));

$href_future369 = $href_runtime369->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[368], $xpaths_to_scrape_in_a_new_page));

$href_future370 = $href_runtime370->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[369], $xpaths_to_scrape_in_a_new_page));

$href_future371 = $href_runtime371->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[370], $xpaths_to_scrape_in_a_new_page));

$href_future372 = $href_runtime372->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[371], $xpaths_to_scrape_in_a_new_page));

$href_future373 = $href_runtime373->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[372], $xpaths_to_scrape_in_a_new_page));

$href_future374 = $href_runtime374->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[373], $xpaths_to_scrape_in_a_new_page));

$href_future375 = $href_runtime375->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[374], $xpaths_to_scrape_in_a_new_page));

$href_future376 = $href_runtime376->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[375], $xpaths_to_scrape_in_a_new_page));

$href_future377 = $href_runtime377->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[376], $xpaths_to_scrape_in_a_new_page));

$href_future378 = $href_runtime378->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[377], $xpaths_to_scrape_in_a_new_page));

$href_future379 = $href_runtime379->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[378], $xpaths_to_scrape_in_a_new_page));

$href_future380 = $href_runtime380->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[379], $xpaths_to_scrape_in_a_new_page));

$href_future381 = $href_runtime381->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[380], $xpaths_to_scrape_in_a_new_page));

$href_future382 = $href_runtime382->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[381], $xpaths_to_scrape_in_a_new_page));

$href_future383 = $href_runtime383->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[382], $xpaths_to_scrape_in_a_new_page));

$href_future384 = $href_runtime384->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[383], $xpaths_to_scrape_in_a_new_page));

$href_future385 = $href_runtime385->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[384], $xpaths_to_scrape_in_a_new_page));

$href_future386 = $href_runtime386->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[385], $xpaths_to_scrape_in_a_new_page));

$href_future387 = $href_runtime387->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[386], $xpaths_to_scrape_in_a_new_page));

$href_future388 = $href_runtime388->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[387], $xpaths_to_scrape_in_a_new_page));

$href_future389 = $href_runtime389->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[388], $xpaths_to_scrape_in_a_new_page));

$href_future390 = $href_runtime390->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[389], $xpaths_to_scrape_in_a_new_page));

$href_future391 = $href_runtime391->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[390], $xpaths_to_scrape_in_a_new_page));

$href_future392 = $href_runtime392->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[391], $xpaths_to_scrape_in_a_new_page));

$href_future393 = $href_runtime393->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[392], $xpaths_to_scrape_in_a_new_page));

$href_future394 = $href_runtime394->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[393], $xpaths_to_scrape_in_a_new_page));

$href_future395 = $href_runtime395->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[394], $xpaths_to_scrape_in_a_new_page));

$href_future396 = $href_runtime396->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[395], $xpaths_to_scrape_in_a_new_page));

$href_future397 = $href_runtime397->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[396], $xpaths_to_scrape_in_a_new_page));

$href_future398 = $href_runtime398->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[397], $xpaths_to_scrape_in_a_new_page));

$href_future399 = $href_runtime399->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
}, array($hrefs[398], $xpaths_to_scrape_in_a_new_page));

$href_future400 = $href_runtime400->run(function($href, $xpaths_to_scrape_in_a_new_page){
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
