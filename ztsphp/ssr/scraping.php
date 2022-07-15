<?php

$start_time = microtime(true);

$url = 'https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=1';
$column_numbers_to_scrape = [1,2];
$titles = ["name","deal","dekidaka","baibaidaikinn"];
$rows = 50;
$xpath_of_a = '/html/body/div/div[3]/main/div/div[2]/div[1]/section/div/div[3]/div/table/tbody/tr[1]/td[1]/a';
$xpaths_to_scrape_in_a_new_page = ["/html/body/div/div[3]/main/div/div/div[1]/div[2]/div[1]/section[1]/div/ul/li[5]/dl/dd/span[1]/span/span[1]","/html/body/div/div[3]/main/div/div/div[1]/div[2]/div[1]/section[1]/div/ul/li[6]/dl/dd/span[1]/span/span[1]"];
$parameter = 'page';
$pages = 20;
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

$future11 = $runtime11->run(function($url, $column_numbers_to_scrape, $rows, $xpath_of_a){
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
}, array($urls[10], $column_numbers_to_scrape, $rows, $xpath_of_a));

$future12 = $runtime12->run(function($url, $column_numbers_to_scrape, $rows, $xpath_of_a){
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
}, array($urls[11], $column_numbers_to_scrape, $rows, $xpath_of_a));

$future13 = $runtime13->run(function($url, $column_numbers_to_scrape, $rows, $xpath_of_a){
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
}, array($urls[12], $column_numbers_to_scrape, $rows, $xpath_of_a));

$future14 = $runtime14->run(function($url, $column_numbers_to_scrape, $rows, $xpath_of_a){
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
}, array($urls[13], $column_numbers_to_scrape, $rows, $xpath_of_a));

$future15 = $runtime15->run(function($url, $column_numbers_to_scrape, $rows, $xpath_of_a){
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
}, array($urls[14], $column_numbers_to_scrape, $rows, $xpath_of_a));

$future16 = $runtime16->run(function($url, $column_numbers_to_scrape, $rows, $xpath_of_a){
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
}, array($urls[15], $column_numbers_to_scrape, $rows, $xpath_of_a));

$future17 = $runtime17->run(function($url, $column_numbers_to_scrape, $rows, $xpath_of_a){
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
}, array($urls[16], $column_numbers_to_scrape, $rows, $xpath_of_a));

$future18 = $runtime18->run(function($url, $column_numbers_to_scrape, $rows, $xpath_of_a){
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
}, array($urls[17], $column_numbers_to_scrape, $rows, $xpath_of_a));

$future19 = $runtime19->run(function($url, $column_numbers_to_scrape, $rows, $xpath_of_a){
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
}, array($urls[18], $column_numbers_to_scrape, $rows, $xpath_of_a));

$future20 = $runtime20->run(function($url, $column_numbers_to_scrape, $rows, $xpath_of_a){
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
}, array($urls[19], $column_numbers_to_scrape, $rows, $xpath_of_a));

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
}, array($hrefs[399], $xpaths_to_scrape_in_a_new_page));

$href_future401 = $href_runtime401->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[400], $xpaths_to_scrape_in_a_new_page));

$href_future402 = $href_runtime402->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[401], $xpaths_to_scrape_in_a_new_page));

$href_future403 = $href_runtime403->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[402], $xpaths_to_scrape_in_a_new_page));

$href_future404 = $href_runtime404->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[403], $xpaths_to_scrape_in_a_new_page));

$href_future405 = $href_runtime405->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[404], $xpaths_to_scrape_in_a_new_page));

$href_future406 = $href_runtime406->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[405], $xpaths_to_scrape_in_a_new_page));

$href_future407 = $href_runtime407->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[406], $xpaths_to_scrape_in_a_new_page));

$href_future408 = $href_runtime408->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[407], $xpaths_to_scrape_in_a_new_page));

$href_future409 = $href_runtime409->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[408], $xpaths_to_scrape_in_a_new_page));

$href_future410 = $href_runtime410->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[409], $xpaths_to_scrape_in_a_new_page));

$href_future411 = $href_runtime411->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[410], $xpaths_to_scrape_in_a_new_page));

$href_future412 = $href_runtime412->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[411], $xpaths_to_scrape_in_a_new_page));

$href_future413 = $href_runtime413->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[412], $xpaths_to_scrape_in_a_new_page));

$href_future414 = $href_runtime414->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[413], $xpaths_to_scrape_in_a_new_page));

$href_future415 = $href_runtime415->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[414], $xpaths_to_scrape_in_a_new_page));

$href_future416 = $href_runtime416->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[415], $xpaths_to_scrape_in_a_new_page));

$href_future417 = $href_runtime417->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[416], $xpaths_to_scrape_in_a_new_page));

$href_future418 = $href_runtime418->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[417], $xpaths_to_scrape_in_a_new_page));

$href_future419 = $href_runtime419->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[418], $xpaths_to_scrape_in_a_new_page));

$href_future420 = $href_runtime420->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[419], $xpaths_to_scrape_in_a_new_page));

$href_future421 = $href_runtime421->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[420], $xpaths_to_scrape_in_a_new_page));

$href_future422 = $href_runtime422->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[421], $xpaths_to_scrape_in_a_new_page));

$href_future423 = $href_runtime423->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[422], $xpaths_to_scrape_in_a_new_page));

$href_future424 = $href_runtime424->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[423], $xpaths_to_scrape_in_a_new_page));

$href_future425 = $href_runtime425->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[424], $xpaths_to_scrape_in_a_new_page));

$href_future426 = $href_runtime426->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[425], $xpaths_to_scrape_in_a_new_page));

$href_future427 = $href_runtime427->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[426], $xpaths_to_scrape_in_a_new_page));

$href_future428 = $href_runtime428->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[427], $xpaths_to_scrape_in_a_new_page));

$href_future429 = $href_runtime429->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[428], $xpaths_to_scrape_in_a_new_page));

$href_future430 = $href_runtime430->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[429], $xpaths_to_scrape_in_a_new_page));

$href_future431 = $href_runtime431->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[430], $xpaths_to_scrape_in_a_new_page));

$href_future432 = $href_runtime432->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[431], $xpaths_to_scrape_in_a_new_page));

$href_future433 = $href_runtime433->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[432], $xpaths_to_scrape_in_a_new_page));

$href_future434 = $href_runtime434->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[433], $xpaths_to_scrape_in_a_new_page));

$href_future435 = $href_runtime435->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[434], $xpaths_to_scrape_in_a_new_page));

$href_future436 = $href_runtime436->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[435], $xpaths_to_scrape_in_a_new_page));

$href_future437 = $href_runtime437->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[436], $xpaths_to_scrape_in_a_new_page));

$href_future438 = $href_runtime438->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[437], $xpaths_to_scrape_in_a_new_page));

$href_future439 = $href_runtime439->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[438], $xpaths_to_scrape_in_a_new_page));

$href_future440 = $href_runtime440->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[439], $xpaths_to_scrape_in_a_new_page));

$href_future441 = $href_runtime441->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[440], $xpaths_to_scrape_in_a_new_page));

$href_future442 = $href_runtime442->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[441], $xpaths_to_scrape_in_a_new_page));

$href_future443 = $href_runtime443->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[442], $xpaths_to_scrape_in_a_new_page));

$href_future444 = $href_runtime444->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[443], $xpaths_to_scrape_in_a_new_page));

$href_future445 = $href_runtime445->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[444], $xpaths_to_scrape_in_a_new_page));

$href_future446 = $href_runtime446->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[445], $xpaths_to_scrape_in_a_new_page));

$href_future447 = $href_runtime447->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[446], $xpaths_to_scrape_in_a_new_page));

$href_future448 = $href_runtime448->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[447], $xpaths_to_scrape_in_a_new_page));

$href_future449 = $href_runtime449->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[448], $xpaths_to_scrape_in_a_new_page));

$href_future450 = $href_runtime450->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[449], $xpaths_to_scrape_in_a_new_page));

$href_future451 = $href_runtime451->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[450], $xpaths_to_scrape_in_a_new_page));

$href_future452 = $href_runtime452->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[451], $xpaths_to_scrape_in_a_new_page));

$href_future453 = $href_runtime453->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[452], $xpaths_to_scrape_in_a_new_page));

$href_future454 = $href_runtime454->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[453], $xpaths_to_scrape_in_a_new_page));

$href_future455 = $href_runtime455->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[454], $xpaths_to_scrape_in_a_new_page));

$href_future456 = $href_runtime456->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[455], $xpaths_to_scrape_in_a_new_page));

$href_future457 = $href_runtime457->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[456], $xpaths_to_scrape_in_a_new_page));

$href_future458 = $href_runtime458->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[457], $xpaths_to_scrape_in_a_new_page));

$href_future459 = $href_runtime459->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[458], $xpaths_to_scrape_in_a_new_page));

$href_future460 = $href_runtime460->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[459], $xpaths_to_scrape_in_a_new_page));

$href_future461 = $href_runtime461->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[460], $xpaths_to_scrape_in_a_new_page));

$href_future462 = $href_runtime462->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[461], $xpaths_to_scrape_in_a_new_page));

$href_future463 = $href_runtime463->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[462], $xpaths_to_scrape_in_a_new_page));

$href_future464 = $href_runtime464->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[463], $xpaths_to_scrape_in_a_new_page));

$href_future465 = $href_runtime465->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[464], $xpaths_to_scrape_in_a_new_page));

$href_future466 = $href_runtime466->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[465], $xpaths_to_scrape_in_a_new_page));

$href_future467 = $href_runtime467->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[466], $xpaths_to_scrape_in_a_new_page));

$href_future468 = $href_runtime468->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[467], $xpaths_to_scrape_in_a_new_page));

$href_future469 = $href_runtime469->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[468], $xpaths_to_scrape_in_a_new_page));

$href_future470 = $href_runtime470->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[469], $xpaths_to_scrape_in_a_new_page));

$href_future471 = $href_runtime471->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[470], $xpaths_to_scrape_in_a_new_page));

$href_future472 = $href_runtime472->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[471], $xpaths_to_scrape_in_a_new_page));

$href_future473 = $href_runtime473->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[472], $xpaths_to_scrape_in_a_new_page));

$href_future474 = $href_runtime474->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[473], $xpaths_to_scrape_in_a_new_page));

$href_future475 = $href_runtime475->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[474], $xpaths_to_scrape_in_a_new_page));

$href_future476 = $href_runtime476->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[475], $xpaths_to_scrape_in_a_new_page));

$href_future477 = $href_runtime477->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[476], $xpaths_to_scrape_in_a_new_page));

$href_future478 = $href_runtime478->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[477], $xpaths_to_scrape_in_a_new_page));

$href_future479 = $href_runtime479->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[478], $xpaths_to_scrape_in_a_new_page));

$href_future480 = $href_runtime480->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[479], $xpaths_to_scrape_in_a_new_page));

$href_future481 = $href_runtime481->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[480], $xpaths_to_scrape_in_a_new_page));

$href_future482 = $href_runtime482->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[481], $xpaths_to_scrape_in_a_new_page));

$href_future483 = $href_runtime483->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[482], $xpaths_to_scrape_in_a_new_page));

$href_future484 = $href_runtime484->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[483], $xpaths_to_scrape_in_a_new_page));

$href_future485 = $href_runtime485->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[484], $xpaths_to_scrape_in_a_new_page));

$href_future486 = $href_runtime486->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[485], $xpaths_to_scrape_in_a_new_page));

$href_future487 = $href_runtime487->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[486], $xpaths_to_scrape_in_a_new_page));

$href_future488 = $href_runtime488->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[487], $xpaths_to_scrape_in_a_new_page));

$href_future489 = $href_runtime489->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[488], $xpaths_to_scrape_in_a_new_page));

$href_future490 = $href_runtime490->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[489], $xpaths_to_scrape_in_a_new_page));

$href_future491 = $href_runtime491->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[490], $xpaths_to_scrape_in_a_new_page));

$href_future492 = $href_runtime492->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[491], $xpaths_to_scrape_in_a_new_page));

$href_future493 = $href_runtime493->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[492], $xpaths_to_scrape_in_a_new_page));

$href_future494 = $href_runtime494->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[493], $xpaths_to_scrape_in_a_new_page));

$href_future495 = $href_runtime495->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[494], $xpaths_to_scrape_in_a_new_page));

$href_future496 = $href_runtime496->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[495], $xpaths_to_scrape_in_a_new_page));

$href_future497 = $href_runtime497->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[496], $xpaths_to_scrape_in_a_new_page));

$href_future498 = $href_runtime498->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[497], $xpaths_to_scrape_in_a_new_page));

$href_future499 = $href_runtime499->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[498], $xpaths_to_scrape_in_a_new_page));

$href_future500 = $href_runtime500->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[499], $xpaths_to_scrape_in_a_new_page));

$href_future501 = $href_runtime501->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[500], $xpaths_to_scrape_in_a_new_page));

$href_future502 = $href_runtime502->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[501], $xpaths_to_scrape_in_a_new_page));

$href_future503 = $href_runtime503->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[502], $xpaths_to_scrape_in_a_new_page));

$href_future504 = $href_runtime504->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[503], $xpaths_to_scrape_in_a_new_page));

$href_future505 = $href_runtime505->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[504], $xpaths_to_scrape_in_a_new_page));

$href_future506 = $href_runtime506->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[505], $xpaths_to_scrape_in_a_new_page));

$href_future507 = $href_runtime507->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[506], $xpaths_to_scrape_in_a_new_page));

$href_future508 = $href_runtime508->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[507], $xpaths_to_scrape_in_a_new_page));

$href_future509 = $href_runtime509->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[508], $xpaths_to_scrape_in_a_new_page));

$href_future510 = $href_runtime510->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[509], $xpaths_to_scrape_in_a_new_page));

$href_future511 = $href_runtime511->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[510], $xpaths_to_scrape_in_a_new_page));

$href_future512 = $href_runtime512->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[511], $xpaths_to_scrape_in_a_new_page));

$href_future513 = $href_runtime513->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[512], $xpaths_to_scrape_in_a_new_page));

$href_future514 = $href_runtime514->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[513], $xpaths_to_scrape_in_a_new_page));

$href_future515 = $href_runtime515->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[514], $xpaths_to_scrape_in_a_new_page));

$href_future516 = $href_runtime516->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[515], $xpaths_to_scrape_in_a_new_page));

$href_future517 = $href_runtime517->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[516], $xpaths_to_scrape_in_a_new_page));

$href_future518 = $href_runtime518->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[517], $xpaths_to_scrape_in_a_new_page));

$href_future519 = $href_runtime519->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[518], $xpaths_to_scrape_in_a_new_page));

$href_future520 = $href_runtime520->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[519], $xpaths_to_scrape_in_a_new_page));

$href_future521 = $href_runtime521->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[520], $xpaths_to_scrape_in_a_new_page));

$href_future522 = $href_runtime522->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[521], $xpaths_to_scrape_in_a_new_page));

$href_future523 = $href_runtime523->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[522], $xpaths_to_scrape_in_a_new_page));

$href_future524 = $href_runtime524->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[523], $xpaths_to_scrape_in_a_new_page));

$href_future525 = $href_runtime525->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[524], $xpaths_to_scrape_in_a_new_page));

$href_future526 = $href_runtime526->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[525], $xpaths_to_scrape_in_a_new_page));

$href_future527 = $href_runtime527->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[526], $xpaths_to_scrape_in_a_new_page));

$href_future528 = $href_runtime528->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[527], $xpaths_to_scrape_in_a_new_page));

$href_future529 = $href_runtime529->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[528], $xpaths_to_scrape_in_a_new_page));

$href_future530 = $href_runtime530->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[529], $xpaths_to_scrape_in_a_new_page));

$href_future531 = $href_runtime531->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[530], $xpaths_to_scrape_in_a_new_page));

$href_future532 = $href_runtime532->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[531], $xpaths_to_scrape_in_a_new_page));

$href_future533 = $href_runtime533->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[532], $xpaths_to_scrape_in_a_new_page));

$href_future534 = $href_runtime534->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[533], $xpaths_to_scrape_in_a_new_page));

$href_future535 = $href_runtime535->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[534], $xpaths_to_scrape_in_a_new_page));

$href_future536 = $href_runtime536->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[535], $xpaths_to_scrape_in_a_new_page));

$href_future537 = $href_runtime537->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[536], $xpaths_to_scrape_in_a_new_page));

$href_future538 = $href_runtime538->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[537], $xpaths_to_scrape_in_a_new_page));

$href_future539 = $href_runtime539->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[538], $xpaths_to_scrape_in_a_new_page));

$href_future540 = $href_runtime540->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[539], $xpaths_to_scrape_in_a_new_page));

$href_future541 = $href_runtime541->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[540], $xpaths_to_scrape_in_a_new_page));

$href_future542 = $href_runtime542->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[541], $xpaths_to_scrape_in_a_new_page));

$href_future543 = $href_runtime543->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[542], $xpaths_to_scrape_in_a_new_page));

$href_future544 = $href_runtime544->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[543], $xpaths_to_scrape_in_a_new_page));

$href_future545 = $href_runtime545->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[544], $xpaths_to_scrape_in_a_new_page));

$href_future546 = $href_runtime546->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[545], $xpaths_to_scrape_in_a_new_page));

$href_future547 = $href_runtime547->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[546], $xpaths_to_scrape_in_a_new_page));

$href_future548 = $href_runtime548->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[547], $xpaths_to_scrape_in_a_new_page));

$href_future549 = $href_runtime549->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[548], $xpaths_to_scrape_in_a_new_page));

$href_future550 = $href_runtime550->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[549], $xpaths_to_scrape_in_a_new_page));

$href_future551 = $href_runtime551->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[550], $xpaths_to_scrape_in_a_new_page));

$href_future552 = $href_runtime552->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[551], $xpaths_to_scrape_in_a_new_page));

$href_future553 = $href_runtime553->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[552], $xpaths_to_scrape_in_a_new_page));

$href_future554 = $href_runtime554->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[553], $xpaths_to_scrape_in_a_new_page));

$href_future555 = $href_runtime555->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[554], $xpaths_to_scrape_in_a_new_page));

$href_future556 = $href_runtime556->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[555], $xpaths_to_scrape_in_a_new_page));

$href_future557 = $href_runtime557->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[556], $xpaths_to_scrape_in_a_new_page));

$href_future558 = $href_runtime558->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[557], $xpaths_to_scrape_in_a_new_page));

$href_future559 = $href_runtime559->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[558], $xpaths_to_scrape_in_a_new_page));

$href_future560 = $href_runtime560->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[559], $xpaths_to_scrape_in_a_new_page));

$href_future561 = $href_runtime561->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[560], $xpaths_to_scrape_in_a_new_page));

$href_future562 = $href_runtime562->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[561], $xpaths_to_scrape_in_a_new_page));

$href_future563 = $href_runtime563->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[562], $xpaths_to_scrape_in_a_new_page));

$href_future564 = $href_runtime564->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[563], $xpaths_to_scrape_in_a_new_page));

$href_future565 = $href_runtime565->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[564], $xpaths_to_scrape_in_a_new_page));

$href_future566 = $href_runtime566->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[565], $xpaths_to_scrape_in_a_new_page));

$href_future567 = $href_runtime567->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[566], $xpaths_to_scrape_in_a_new_page));

$href_future568 = $href_runtime568->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[567], $xpaths_to_scrape_in_a_new_page));

$href_future569 = $href_runtime569->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[568], $xpaths_to_scrape_in_a_new_page));

$href_future570 = $href_runtime570->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[569], $xpaths_to_scrape_in_a_new_page));

$href_future571 = $href_runtime571->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[570], $xpaths_to_scrape_in_a_new_page));

$href_future572 = $href_runtime572->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[571], $xpaths_to_scrape_in_a_new_page));

$href_future573 = $href_runtime573->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[572], $xpaths_to_scrape_in_a_new_page));

$href_future574 = $href_runtime574->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[573], $xpaths_to_scrape_in_a_new_page));

$href_future575 = $href_runtime575->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[574], $xpaths_to_scrape_in_a_new_page));

$href_future576 = $href_runtime576->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[575], $xpaths_to_scrape_in_a_new_page));

$href_future577 = $href_runtime577->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[576], $xpaths_to_scrape_in_a_new_page));

$href_future578 = $href_runtime578->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[577], $xpaths_to_scrape_in_a_new_page));

$href_future579 = $href_runtime579->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[578], $xpaths_to_scrape_in_a_new_page));

$href_future580 = $href_runtime580->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[579], $xpaths_to_scrape_in_a_new_page));

$href_future581 = $href_runtime581->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[580], $xpaths_to_scrape_in_a_new_page));

$href_future582 = $href_runtime582->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[581], $xpaths_to_scrape_in_a_new_page));

$href_future583 = $href_runtime583->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[582], $xpaths_to_scrape_in_a_new_page));

$href_future584 = $href_runtime584->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[583], $xpaths_to_scrape_in_a_new_page));

$href_future585 = $href_runtime585->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[584], $xpaths_to_scrape_in_a_new_page));

$href_future586 = $href_runtime586->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[585], $xpaths_to_scrape_in_a_new_page));

$href_future587 = $href_runtime587->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[586], $xpaths_to_scrape_in_a_new_page));

$href_future588 = $href_runtime588->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[587], $xpaths_to_scrape_in_a_new_page));

$href_future589 = $href_runtime589->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[588], $xpaths_to_scrape_in_a_new_page));

$href_future590 = $href_runtime590->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[589], $xpaths_to_scrape_in_a_new_page));

$href_future591 = $href_runtime591->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[590], $xpaths_to_scrape_in_a_new_page));

$href_future592 = $href_runtime592->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[591], $xpaths_to_scrape_in_a_new_page));

$href_future593 = $href_runtime593->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[592], $xpaths_to_scrape_in_a_new_page));

$href_future594 = $href_runtime594->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[593], $xpaths_to_scrape_in_a_new_page));

$href_future595 = $href_runtime595->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[594], $xpaths_to_scrape_in_a_new_page));

$href_future596 = $href_runtime596->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[595], $xpaths_to_scrape_in_a_new_page));

$href_future597 = $href_runtime597->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[596], $xpaths_to_scrape_in_a_new_page));

$href_future598 = $href_runtime598->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[597], $xpaths_to_scrape_in_a_new_page));

$href_future599 = $href_runtime599->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[598], $xpaths_to_scrape_in_a_new_page));

$href_future600 = $href_runtime600->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[599], $xpaths_to_scrape_in_a_new_page));

$href_future601 = $href_runtime601->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[600], $xpaths_to_scrape_in_a_new_page));

$href_future602 = $href_runtime602->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[601], $xpaths_to_scrape_in_a_new_page));

$href_future603 = $href_runtime603->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[602], $xpaths_to_scrape_in_a_new_page));

$href_future604 = $href_runtime604->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[603], $xpaths_to_scrape_in_a_new_page));

$href_future605 = $href_runtime605->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[604], $xpaths_to_scrape_in_a_new_page));

$href_future606 = $href_runtime606->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[605], $xpaths_to_scrape_in_a_new_page));

$href_future607 = $href_runtime607->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[606], $xpaths_to_scrape_in_a_new_page));

$href_future608 = $href_runtime608->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[607], $xpaths_to_scrape_in_a_new_page));

$href_future609 = $href_runtime609->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[608], $xpaths_to_scrape_in_a_new_page));

$href_future610 = $href_runtime610->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[609], $xpaths_to_scrape_in_a_new_page));

$href_future611 = $href_runtime611->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[610], $xpaths_to_scrape_in_a_new_page));

$href_future612 = $href_runtime612->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[611], $xpaths_to_scrape_in_a_new_page));

$href_future613 = $href_runtime613->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[612], $xpaths_to_scrape_in_a_new_page));

$href_future614 = $href_runtime614->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[613], $xpaths_to_scrape_in_a_new_page));

$href_future615 = $href_runtime615->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[614], $xpaths_to_scrape_in_a_new_page));

$href_future616 = $href_runtime616->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[615], $xpaths_to_scrape_in_a_new_page));

$href_future617 = $href_runtime617->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[616], $xpaths_to_scrape_in_a_new_page));

$href_future618 = $href_runtime618->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[617], $xpaths_to_scrape_in_a_new_page));

$href_future619 = $href_runtime619->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[618], $xpaths_to_scrape_in_a_new_page));

$href_future620 = $href_runtime620->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[619], $xpaths_to_scrape_in_a_new_page));

$href_future621 = $href_runtime621->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[620], $xpaths_to_scrape_in_a_new_page));

$href_future622 = $href_runtime622->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[621], $xpaths_to_scrape_in_a_new_page));

$href_future623 = $href_runtime623->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[622], $xpaths_to_scrape_in_a_new_page));

$href_future624 = $href_runtime624->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[623], $xpaths_to_scrape_in_a_new_page));

$href_future625 = $href_runtime625->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[624], $xpaths_to_scrape_in_a_new_page));

$href_future626 = $href_runtime626->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[625], $xpaths_to_scrape_in_a_new_page));

$href_future627 = $href_runtime627->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[626], $xpaths_to_scrape_in_a_new_page));

$href_future628 = $href_runtime628->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[627], $xpaths_to_scrape_in_a_new_page));

$href_future629 = $href_runtime629->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[628], $xpaths_to_scrape_in_a_new_page));

$href_future630 = $href_runtime630->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[629], $xpaths_to_scrape_in_a_new_page));

$href_future631 = $href_runtime631->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[630], $xpaths_to_scrape_in_a_new_page));

$href_future632 = $href_runtime632->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[631], $xpaths_to_scrape_in_a_new_page));

$href_future633 = $href_runtime633->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[632], $xpaths_to_scrape_in_a_new_page));

$href_future634 = $href_runtime634->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[633], $xpaths_to_scrape_in_a_new_page));

$href_future635 = $href_runtime635->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[634], $xpaths_to_scrape_in_a_new_page));

$href_future636 = $href_runtime636->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[635], $xpaths_to_scrape_in_a_new_page));

$href_future637 = $href_runtime637->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[636], $xpaths_to_scrape_in_a_new_page));

$href_future638 = $href_runtime638->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[637], $xpaths_to_scrape_in_a_new_page));

$href_future639 = $href_runtime639->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[638], $xpaths_to_scrape_in_a_new_page));

$href_future640 = $href_runtime640->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[639], $xpaths_to_scrape_in_a_new_page));

$href_future641 = $href_runtime641->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[640], $xpaths_to_scrape_in_a_new_page));

$href_future642 = $href_runtime642->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[641], $xpaths_to_scrape_in_a_new_page));

$href_future643 = $href_runtime643->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[642], $xpaths_to_scrape_in_a_new_page));

$href_future644 = $href_runtime644->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[643], $xpaths_to_scrape_in_a_new_page));

$href_future645 = $href_runtime645->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[644], $xpaths_to_scrape_in_a_new_page));

$href_future646 = $href_runtime646->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[645], $xpaths_to_scrape_in_a_new_page));

$href_future647 = $href_runtime647->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[646], $xpaths_to_scrape_in_a_new_page));

$href_future648 = $href_runtime648->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[647], $xpaths_to_scrape_in_a_new_page));

$href_future649 = $href_runtime649->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[648], $xpaths_to_scrape_in_a_new_page));

$href_future650 = $href_runtime650->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[649], $xpaths_to_scrape_in_a_new_page));

$href_future651 = $href_runtime651->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[650], $xpaths_to_scrape_in_a_new_page));

$href_future652 = $href_runtime652->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[651], $xpaths_to_scrape_in_a_new_page));

$href_future653 = $href_runtime653->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[652], $xpaths_to_scrape_in_a_new_page));

$href_future654 = $href_runtime654->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[653], $xpaths_to_scrape_in_a_new_page));

$href_future655 = $href_runtime655->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[654], $xpaths_to_scrape_in_a_new_page));

$href_future656 = $href_runtime656->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[655], $xpaths_to_scrape_in_a_new_page));

$href_future657 = $href_runtime657->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[656], $xpaths_to_scrape_in_a_new_page));

$href_future658 = $href_runtime658->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[657], $xpaths_to_scrape_in_a_new_page));

$href_future659 = $href_runtime659->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[658], $xpaths_to_scrape_in_a_new_page));

$href_future660 = $href_runtime660->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[659], $xpaths_to_scrape_in_a_new_page));

$href_future661 = $href_runtime661->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[660], $xpaths_to_scrape_in_a_new_page));

$href_future662 = $href_runtime662->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[661], $xpaths_to_scrape_in_a_new_page));

$href_future663 = $href_runtime663->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[662], $xpaths_to_scrape_in_a_new_page));

$href_future664 = $href_runtime664->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[663], $xpaths_to_scrape_in_a_new_page));

$href_future665 = $href_runtime665->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[664], $xpaths_to_scrape_in_a_new_page));

$href_future666 = $href_runtime666->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[665], $xpaths_to_scrape_in_a_new_page));

$href_future667 = $href_runtime667->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[666], $xpaths_to_scrape_in_a_new_page));

$href_future668 = $href_runtime668->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[667], $xpaths_to_scrape_in_a_new_page));

$href_future669 = $href_runtime669->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[668], $xpaths_to_scrape_in_a_new_page));

$href_future670 = $href_runtime670->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[669], $xpaths_to_scrape_in_a_new_page));

$href_future671 = $href_runtime671->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[670], $xpaths_to_scrape_in_a_new_page));

$href_future672 = $href_runtime672->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[671], $xpaths_to_scrape_in_a_new_page));

$href_future673 = $href_runtime673->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[672], $xpaths_to_scrape_in_a_new_page));

$href_future674 = $href_runtime674->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[673], $xpaths_to_scrape_in_a_new_page));

$href_future675 = $href_runtime675->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[674], $xpaths_to_scrape_in_a_new_page));

$href_future676 = $href_runtime676->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[675], $xpaths_to_scrape_in_a_new_page));

$href_future677 = $href_runtime677->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[676], $xpaths_to_scrape_in_a_new_page));

$href_future678 = $href_runtime678->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[677], $xpaths_to_scrape_in_a_new_page));

$href_future679 = $href_runtime679->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[678], $xpaths_to_scrape_in_a_new_page));

$href_future680 = $href_runtime680->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[679], $xpaths_to_scrape_in_a_new_page));

$href_future681 = $href_runtime681->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[680], $xpaths_to_scrape_in_a_new_page));

$href_future682 = $href_runtime682->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[681], $xpaths_to_scrape_in_a_new_page));

$href_future683 = $href_runtime683->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[682], $xpaths_to_scrape_in_a_new_page));

$href_future684 = $href_runtime684->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[683], $xpaths_to_scrape_in_a_new_page));

$href_future685 = $href_runtime685->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[684], $xpaths_to_scrape_in_a_new_page));

$href_future686 = $href_runtime686->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[685], $xpaths_to_scrape_in_a_new_page));

$href_future687 = $href_runtime687->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[686], $xpaths_to_scrape_in_a_new_page));

$href_future688 = $href_runtime688->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[687], $xpaths_to_scrape_in_a_new_page));

$href_future689 = $href_runtime689->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[688], $xpaths_to_scrape_in_a_new_page));

$href_future690 = $href_runtime690->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[689], $xpaths_to_scrape_in_a_new_page));

$href_future691 = $href_runtime691->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[690], $xpaths_to_scrape_in_a_new_page));

$href_future692 = $href_runtime692->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[691], $xpaths_to_scrape_in_a_new_page));

$href_future693 = $href_runtime693->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[692], $xpaths_to_scrape_in_a_new_page));

$href_future694 = $href_runtime694->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[693], $xpaths_to_scrape_in_a_new_page));

$href_future695 = $href_runtime695->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[694], $xpaths_to_scrape_in_a_new_page));

$href_future696 = $href_runtime696->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[695], $xpaths_to_scrape_in_a_new_page));

$href_future697 = $href_runtime697->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[696], $xpaths_to_scrape_in_a_new_page));

$href_future698 = $href_runtime698->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[697], $xpaths_to_scrape_in_a_new_page));

$href_future699 = $href_runtime699->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[698], $xpaths_to_scrape_in_a_new_page));

$href_future700 = $href_runtime700->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[699], $xpaths_to_scrape_in_a_new_page));

$href_future701 = $href_runtime701->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[700], $xpaths_to_scrape_in_a_new_page));

$href_future702 = $href_runtime702->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[701], $xpaths_to_scrape_in_a_new_page));

$href_future703 = $href_runtime703->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[702], $xpaths_to_scrape_in_a_new_page));

$href_future704 = $href_runtime704->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[703], $xpaths_to_scrape_in_a_new_page));

$href_future705 = $href_runtime705->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[704], $xpaths_to_scrape_in_a_new_page));

$href_future706 = $href_runtime706->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[705], $xpaths_to_scrape_in_a_new_page));

$href_future707 = $href_runtime707->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[706], $xpaths_to_scrape_in_a_new_page));

$href_future708 = $href_runtime708->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[707], $xpaths_to_scrape_in_a_new_page));

$href_future709 = $href_runtime709->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[708], $xpaths_to_scrape_in_a_new_page));

$href_future710 = $href_runtime710->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[709], $xpaths_to_scrape_in_a_new_page));

$href_future711 = $href_runtime711->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[710], $xpaths_to_scrape_in_a_new_page));

$href_future712 = $href_runtime712->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[711], $xpaths_to_scrape_in_a_new_page));

$href_future713 = $href_runtime713->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[712], $xpaths_to_scrape_in_a_new_page));

$href_future714 = $href_runtime714->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[713], $xpaths_to_scrape_in_a_new_page));

$href_future715 = $href_runtime715->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[714], $xpaths_to_scrape_in_a_new_page));

$href_future716 = $href_runtime716->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[715], $xpaths_to_scrape_in_a_new_page));

$href_future717 = $href_runtime717->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[716], $xpaths_to_scrape_in_a_new_page));

$href_future718 = $href_runtime718->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[717], $xpaths_to_scrape_in_a_new_page));

$href_future719 = $href_runtime719->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[718], $xpaths_to_scrape_in_a_new_page));

$href_future720 = $href_runtime720->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[719], $xpaths_to_scrape_in_a_new_page));

$href_future721 = $href_runtime721->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[720], $xpaths_to_scrape_in_a_new_page));

$href_future722 = $href_runtime722->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[721], $xpaths_to_scrape_in_a_new_page));

$href_future723 = $href_runtime723->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[722], $xpaths_to_scrape_in_a_new_page));

$href_future724 = $href_runtime724->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[723], $xpaths_to_scrape_in_a_new_page));

$href_future725 = $href_runtime725->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[724], $xpaths_to_scrape_in_a_new_page));

$href_future726 = $href_runtime726->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[725], $xpaths_to_scrape_in_a_new_page));

$href_future727 = $href_runtime727->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[726], $xpaths_to_scrape_in_a_new_page));

$href_future728 = $href_runtime728->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[727], $xpaths_to_scrape_in_a_new_page));

$href_future729 = $href_runtime729->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[728], $xpaths_to_scrape_in_a_new_page));

$href_future730 = $href_runtime730->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[729], $xpaths_to_scrape_in_a_new_page));

$href_future731 = $href_runtime731->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[730], $xpaths_to_scrape_in_a_new_page));

$href_future732 = $href_runtime732->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[731], $xpaths_to_scrape_in_a_new_page));

$href_future733 = $href_runtime733->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[732], $xpaths_to_scrape_in_a_new_page));

$href_future734 = $href_runtime734->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[733], $xpaths_to_scrape_in_a_new_page));

$href_future735 = $href_runtime735->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[734], $xpaths_to_scrape_in_a_new_page));

$href_future736 = $href_runtime736->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[735], $xpaths_to_scrape_in_a_new_page));

$href_future737 = $href_runtime737->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[736], $xpaths_to_scrape_in_a_new_page));

$href_future738 = $href_runtime738->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[737], $xpaths_to_scrape_in_a_new_page));

$href_future739 = $href_runtime739->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[738], $xpaths_to_scrape_in_a_new_page));

$href_future740 = $href_runtime740->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[739], $xpaths_to_scrape_in_a_new_page));

$href_future741 = $href_runtime741->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[740], $xpaths_to_scrape_in_a_new_page));

$href_future742 = $href_runtime742->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[741], $xpaths_to_scrape_in_a_new_page));

$href_future743 = $href_runtime743->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[742], $xpaths_to_scrape_in_a_new_page));

$href_future744 = $href_runtime744->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[743], $xpaths_to_scrape_in_a_new_page));

$href_future745 = $href_runtime745->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[744], $xpaths_to_scrape_in_a_new_page));

$href_future746 = $href_runtime746->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[745], $xpaths_to_scrape_in_a_new_page));

$href_future747 = $href_runtime747->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[746], $xpaths_to_scrape_in_a_new_page));

$href_future748 = $href_runtime748->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[747], $xpaths_to_scrape_in_a_new_page));

$href_future749 = $href_runtime749->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[748], $xpaths_to_scrape_in_a_new_page));

$href_future750 = $href_runtime750->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[749], $xpaths_to_scrape_in_a_new_page));

$href_future751 = $href_runtime751->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[750], $xpaths_to_scrape_in_a_new_page));

$href_future752 = $href_runtime752->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[751], $xpaths_to_scrape_in_a_new_page));

$href_future753 = $href_runtime753->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[752], $xpaths_to_scrape_in_a_new_page));

$href_future754 = $href_runtime754->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[753], $xpaths_to_scrape_in_a_new_page));

$href_future755 = $href_runtime755->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[754], $xpaths_to_scrape_in_a_new_page));

$href_future756 = $href_runtime756->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[755], $xpaths_to_scrape_in_a_new_page));

$href_future757 = $href_runtime757->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[756], $xpaths_to_scrape_in_a_new_page));

$href_future758 = $href_runtime758->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[757], $xpaths_to_scrape_in_a_new_page));

$href_future759 = $href_runtime759->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[758], $xpaths_to_scrape_in_a_new_page));

$href_future760 = $href_runtime760->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[759], $xpaths_to_scrape_in_a_new_page));

$href_future761 = $href_runtime761->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[760], $xpaths_to_scrape_in_a_new_page));

$href_future762 = $href_runtime762->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[761], $xpaths_to_scrape_in_a_new_page));

$href_future763 = $href_runtime763->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[762], $xpaths_to_scrape_in_a_new_page));

$href_future764 = $href_runtime764->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[763], $xpaths_to_scrape_in_a_new_page));

$href_future765 = $href_runtime765->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[764], $xpaths_to_scrape_in_a_new_page));

$href_future766 = $href_runtime766->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[765], $xpaths_to_scrape_in_a_new_page));

$href_future767 = $href_runtime767->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[766], $xpaths_to_scrape_in_a_new_page));

$href_future768 = $href_runtime768->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[767], $xpaths_to_scrape_in_a_new_page));

$href_future769 = $href_runtime769->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[768], $xpaths_to_scrape_in_a_new_page));

$href_future770 = $href_runtime770->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[769], $xpaths_to_scrape_in_a_new_page));

$href_future771 = $href_runtime771->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[770], $xpaths_to_scrape_in_a_new_page));

$href_future772 = $href_runtime772->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[771], $xpaths_to_scrape_in_a_new_page));

$href_future773 = $href_runtime773->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[772], $xpaths_to_scrape_in_a_new_page));

$href_future774 = $href_runtime774->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[773], $xpaths_to_scrape_in_a_new_page));

$href_future775 = $href_runtime775->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[774], $xpaths_to_scrape_in_a_new_page));

$href_future776 = $href_runtime776->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[775], $xpaths_to_scrape_in_a_new_page));

$href_future777 = $href_runtime777->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[776], $xpaths_to_scrape_in_a_new_page));

$href_future778 = $href_runtime778->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[777], $xpaths_to_scrape_in_a_new_page));

$href_future779 = $href_runtime779->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[778], $xpaths_to_scrape_in_a_new_page));

$href_future780 = $href_runtime780->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[779], $xpaths_to_scrape_in_a_new_page));

$href_future781 = $href_runtime781->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[780], $xpaths_to_scrape_in_a_new_page));

$href_future782 = $href_runtime782->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[781], $xpaths_to_scrape_in_a_new_page));

$href_future783 = $href_runtime783->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[782], $xpaths_to_scrape_in_a_new_page));

$href_future784 = $href_runtime784->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[783], $xpaths_to_scrape_in_a_new_page));

$href_future785 = $href_runtime785->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[784], $xpaths_to_scrape_in_a_new_page));

$href_future786 = $href_runtime786->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[785], $xpaths_to_scrape_in_a_new_page));

$href_future787 = $href_runtime787->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[786], $xpaths_to_scrape_in_a_new_page));

$href_future788 = $href_runtime788->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[787], $xpaths_to_scrape_in_a_new_page));

$href_future789 = $href_runtime789->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[788], $xpaths_to_scrape_in_a_new_page));

$href_future790 = $href_runtime790->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[789], $xpaths_to_scrape_in_a_new_page));

$href_future791 = $href_runtime791->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[790], $xpaths_to_scrape_in_a_new_page));

$href_future792 = $href_runtime792->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[791], $xpaths_to_scrape_in_a_new_page));

$href_future793 = $href_runtime793->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[792], $xpaths_to_scrape_in_a_new_page));

$href_future794 = $href_runtime794->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[793], $xpaths_to_scrape_in_a_new_page));

$href_future795 = $href_runtime795->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[794], $xpaths_to_scrape_in_a_new_page));

$href_future796 = $href_runtime796->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[795], $xpaths_to_scrape_in_a_new_page));

$href_future797 = $href_runtime797->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[796], $xpaths_to_scrape_in_a_new_page));

$href_future798 = $href_runtime798->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[797], $xpaths_to_scrape_in_a_new_page));

$href_future799 = $href_runtime799->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[798], $xpaths_to_scrape_in_a_new_page));

$href_future800 = $href_runtime800->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[799], $xpaths_to_scrape_in_a_new_page));

$href_future801 = $href_runtime801->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[800], $xpaths_to_scrape_in_a_new_page));

$href_future802 = $href_runtime802->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[801], $xpaths_to_scrape_in_a_new_page));

$href_future803 = $href_runtime803->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[802], $xpaths_to_scrape_in_a_new_page));

$href_future804 = $href_runtime804->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[803], $xpaths_to_scrape_in_a_new_page));

$href_future805 = $href_runtime805->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[804], $xpaths_to_scrape_in_a_new_page));

$href_future806 = $href_runtime806->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[805], $xpaths_to_scrape_in_a_new_page));

$href_future807 = $href_runtime807->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[806], $xpaths_to_scrape_in_a_new_page));

$href_future808 = $href_runtime808->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[807], $xpaths_to_scrape_in_a_new_page));

$href_future809 = $href_runtime809->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[808], $xpaths_to_scrape_in_a_new_page));

$href_future810 = $href_runtime810->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[809], $xpaths_to_scrape_in_a_new_page));

$href_future811 = $href_runtime811->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[810], $xpaths_to_scrape_in_a_new_page));

$href_future812 = $href_runtime812->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[811], $xpaths_to_scrape_in_a_new_page));

$href_future813 = $href_runtime813->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[812], $xpaths_to_scrape_in_a_new_page));

$href_future814 = $href_runtime814->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[813], $xpaths_to_scrape_in_a_new_page));

$href_future815 = $href_runtime815->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[814], $xpaths_to_scrape_in_a_new_page));

$href_future816 = $href_runtime816->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[815], $xpaths_to_scrape_in_a_new_page));

$href_future817 = $href_runtime817->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[816], $xpaths_to_scrape_in_a_new_page));

$href_future818 = $href_runtime818->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[817], $xpaths_to_scrape_in_a_new_page));

$href_future819 = $href_runtime819->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[818], $xpaths_to_scrape_in_a_new_page));

$href_future820 = $href_runtime820->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[819], $xpaths_to_scrape_in_a_new_page));

$href_future821 = $href_runtime821->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[820], $xpaths_to_scrape_in_a_new_page));

$href_future822 = $href_runtime822->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[821], $xpaths_to_scrape_in_a_new_page));

$href_future823 = $href_runtime823->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[822], $xpaths_to_scrape_in_a_new_page));

$href_future824 = $href_runtime824->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[823], $xpaths_to_scrape_in_a_new_page));

$href_future825 = $href_runtime825->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[824], $xpaths_to_scrape_in_a_new_page));

$href_future826 = $href_runtime826->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[825], $xpaths_to_scrape_in_a_new_page));

$href_future827 = $href_runtime827->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[826], $xpaths_to_scrape_in_a_new_page));

$href_future828 = $href_runtime828->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[827], $xpaths_to_scrape_in_a_new_page));

$href_future829 = $href_runtime829->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[828], $xpaths_to_scrape_in_a_new_page));

$href_future830 = $href_runtime830->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[829], $xpaths_to_scrape_in_a_new_page));

$href_future831 = $href_runtime831->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[830], $xpaths_to_scrape_in_a_new_page));

$href_future832 = $href_runtime832->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[831], $xpaths_to_scrape_in_a_new_page));

$href_future833 = $href_runtime833->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[832], $xpaths_to_scrape_in_a_new_page));

$href_future834 = $href_runtime834->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[833], $xpaths_to_scrape_in_a_new_page));

$href_future835 = $href_runtime835->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[834], $xpaths_to_scrape_in_a_new_page));

$href_future836 = $href_runtime836->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[835], $xpaths_to_scrape_in_a_new_page));

$href_future837 = $href_runtime837->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[836], $xpaths_to_scrape_in_a_new_page));

$href_future838 = $href_runtime838->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[837], $xpaths_to_scrape_in_a_new_page));

$href_future839 = $href_runtime839->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[838], $xpaths_to_scrape_in_a_new_page));

$href_future840 = $href_runtime840->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[839], $xpaths_to_scrape_in_a_new_page));

$href_future841 = $href_runtime841->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[840], $xpaths_to_scrape_in_a_new_page));

$href_future842 = $href_runtime842->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[841], $xpaths_to_scrape_in_a_new_page));

$href_future843 = $href_runtime843->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[842], $xpaths_to_scrape_in_a_new_page));

$href_future844 = $href_runtime844->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[843], $xpaths_to_scrape_in_a_new_page));

$href_future845 = $href_runtime845->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[844], $xpaths_to_scrape_in_a_new_page));

$href_future846 = $href_runtime846->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[845], $xpaths_to_scrape_in_a_new_page));

$href_future847 = $href_runtime847->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[846], $xpaths_to_scrape_in_a_new_page));

$href_future848 = $href_runtime848->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[847], $xpaths_to_scrape_in_a_new_page));

$href_future849 = $href_runtime849->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[848], $xpaths_to_scrape_in_a_new_page));

$href_future850 = $href_runtime850->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[849], $xpaths_to_scrape_in_a_new_page));

$href_future851 = $href_runtime851->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[850], $xpaths_to_scrape_in_a_new_page));

$href_future852 = $href_runtime852->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[851], $xpaths_to_scrape_in_a_new_page));

$href_future853 = $href_runtime853->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[852], $xpaths_to_scrape_in_a_new_page));

$href_future854 = $href_runtime854->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[853], $xpaths_to_scrape_in_a_new_page));

$href_future855 = $href_runtime855->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[854], $xpaths_to_scrape_in_a_new_page));

$href_future856 = $href_runtime856->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[855], $xpaths_to_scrape_in_a_new_page));

$href_future857 = $href_runtime857->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[856], $xpaths_to_scrape_in_a_new_page));

$href_future858 = $href_runtime858->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[857], $xpaths_to_scrape_in_a_new_page));

$href_future859 = $href_runtime859->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[858], $xpaths_to_scrape_in_a_new_page));

$href_future860 = $href_runtime860->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[859], $xpaths_to_scrape_in_a_new_page));

$href_future861 = $href_runtime861->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[860], $xpaths_to_scrape_in_a_new_page));

$href_future862 = $href_runtime862->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[861], $xpaths_to_scrape_in_a_new_page));

$href_future863 = $href_runtime863->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[862], $xpaths_to_scrape_in_a_new_page));

$href_future864 = $href_runtime864->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[863], $xpaths_to_scrape_in_a_new_page));

$href_future865 = $href_runtime865->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[864], $xpaths_to_scrape_in_a_new_page));

$href_future866 = $href_runtime866->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[865], $xpaths_to_scrape_in_a_new_page));

$href_future867 = $href_runtime867->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[866], $xpaths_to_scrape_in_a_new_page));

$href_future868 = $href_runtime868->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[867], $xpaths_to_scrape_in_a_new_page));

$href_future869 = $href_runtime869->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[868], $xpaths_to_scrape_in_a_new_page));

$href_future870 = $href_runtime870->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[869], $xpaths_to_scrape_in_a_new_page));

$href_future871 = $href_runtime871->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[870], $xpaths_to_scrape_in_a_new_page));

$href_future872 = $href_runtime872->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[871], $xpaths_to_scrape_in_a_new_page));

$href_future873 = $href_runtime873->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[872], $xpaths_to_scrape_in_a_new_page));

$href_future874 = $href_runtime874->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[873], $xpaths_to_scrape_in_a_new_page));

$href_future875 = $href_runtime875->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[874], $xpaths_to_scrape_in_a_new_page));

$href_future876 = $href_runtime876->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[875], $xpaths_to_scrape_in_a_new_page));

$href_future877 = $href_runtime877->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[876], $xpaths_to_scrape_in_a_new_page));

$href_future878 = $href_runtime878->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[877], $xpaths_to_scrape_in_a_new_page));

$href_future879 = $href_runtime879->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[878], $xpaths_to_scrape_in_a_new_page));

$href_future880 = $href_runtime880->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[879], $xpaths_to_scrape_in_a_new_page));

$href_future881 = $href_runtime881->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[880], $xpaths_to_scrape_in_a_new_page));

$href_future882 = $href_runtime882->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[881], $xpaths_to_scrape_in_a_new_page));

$href_future883 = $href_runtime883->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[882], $xpaths_to_scrape_in_a_new_page));

$href_future884 = $href_runtime884->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[883], $xpaths_to_scrape_in_a_new_page));

$href_future885 = $href_runtime885->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[884], $xpaths_to_scrape_in_a_new_page));

$href_future886 = $href_runtime886->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[885], $xpaths_to_scrape_in_a_new_page));

$href_future887 = $href_runtime887->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[886], $xpaths_to_scrape_in_a_new_page));

$href_future888 = $href_runtime888->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[887], $xpaths_to_scrape_in_a_new_page));

$href_future889 = $href_runtime889->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[888], $xpaths_to_scrape_in_a_new_page));

$href_future890 = $href_runtime890->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[889], $xpaths_to_scrape_in_a_new_page));

$href_future891 = $href_runtime891->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[890], $xpaths_to_scrape_in_a_new_page));

$href_future892 = $href_runtime892->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[891], $xpaths_to_scrape_in_a_new_page));

$href_future893 = $href_runtime893->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[892], $xpaths_to_scrape_in_a_new_page));

$href_future894 = $href_runtime894->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[893], $xpaths_to_scrape_in_a_new_page));

$href_future895 = $href_runtime895->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[894], $xpaths_to_scrape_in_a_new_page));

$href_future896 = $href_runtime896->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[895], $xpaths_to_scrape_in_a_new_page));

$href_future897 = $href_runtime897->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[896], $xpaths_to_scrape_in_a_new_page));

$href_future898 = $href_runtime898->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[897], $xpaths_to_scrape_in_a_new_page));

$href_future899 = $href_runtime899->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[898], $xpaths_to_scrape_in_a_new_page));

$href_future900 = $href_runtime900->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[899], $xpaths_to_scrape_in_a_new_page));

$href_future901 = $href_runtime901->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[900], $xpaths_to_scrape_in_a_new_page));

$href_future902 = $href_runtime902->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[901], $xpaths_to_scrape_in_a_new_page));

$href_future903 = $href_runtime903->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[902], $xpaths_to_scrape_in_a_new_page));

$href_future904 = $href_runtime904->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[903], $xpaths_to_scrape_in_a_new_page));

$href_future905 = $href_runtime905->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[904], $xpaths_to_scrape_in_a_new_page));

$href_future906 = $href_runtime906->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[905], $xpaths_to_scrape_in_a_new_page));

$href_future907 = $href_runtime907->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[906], $xpaths_to_scrape_in_a_new_page));

$href_future908 = $href_runtime908->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[907], $xpaths_to_scrape_in_a_new_page));

$href_future909 = $href_runtime909->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[908], $xpaths_to_scrape_in_a_new_page));

$href_future910 = $href_runtime910->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[909], $xpaths_to_scrape_in_a_new_page));

$href_future911 = $href_runtime911->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[910], $xpaths_to_scrape_in_a_new_page));

$href_future912 = $href_runtime912->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[911], $xpaths_to_scrape_in_a_new_page));

$href_future913 = $href_runtime913->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[912], $xpaths_to_scrape_in_a_new_page));

$href_future914 = $href_runtime914->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[913], $xpaths_to_scrape_in_a_new_page));

$href_future915 = $href_runtime915->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[914], $xpaths_to_scrape_in_a_new_page));

$href_future916 = $href_runtime916->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[915], $xpaths_to_scrape_in_a_new_page));

$href_future917 = $href_runtime917->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[916], $xpaths_to_scrape_in_a_new_page));

$href_future918 = $href_runtime918->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[917], $xpaths_to_scrape_in_a_new_page));

$href_future919 = $href_runtime919->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[918], $xpaths_to_scrape_in_a_new_page));

$href_future920 = $href_runtime920->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[919], $xpaths_to_scrape_in_a_new_page));

$href_future921 = $href_runtime921->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[920], $xpaths_to_scrape_in_a_new_page));

$href_future922 = $href_runtime922->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[921], $xpaths_to_scrape_in_a_new_page));

$href_future923 = $href_runtime923->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[922], $xpaths_to_scrape_in_a_new_page));

$href_future924 = $href_runtime924->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[923], $xpaths_to_scrape_in_a_new_page));

$href_future925 = $href_runtime925->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[924], $xpaths_to_scrape_in_a_new_page));

$href_future926 = $href_runtime926->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[925], $xpaths_to_scrape_in_a_new_page));

$href_future927 = $href_runtime927->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[926], $xpaths_to_scrape_in_a_new_page));

$href_future928 = $href_runtime928->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[927], $xpaths_to_scrape_in_a_new_page));

$href_future929 = $href_runtime929->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[928], $xpaths_to_scrape_in_a_new_page));

$href_future930 = $href_runtime930->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[929], $xpaths_to_scrape_in_a_new_page));

$href_future931 = $href_runtime931->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[930], $xpaths_to_scrape_in_a_new_page));

$href_future932 = $href_runtime932->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[931], $xpaths_to_scrape_in_a_new_page));

$href_future933 = $href_runtime933->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[932], $xpaths_to_scrape_in_a_new_page));

$href_future934 = $href_runtime934->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[933], $xpaths_to_scrape_in_a_new_page));

$href_future935 = $href_runtime935->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[934], $xpaths_to_scrape_in_a_new_page));

$href_future936 = $href_runtime936->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[935], $xpaths_to_scrape_in_a_new_page));

$href_future937 = $href_runtime937->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[936], $xpaths_to_scrape_in_a_new_page));

$href_future938 = $href_runtime938->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[937], $xpaths_to_scrape_in_a_new_page));

$href_future939 = $href_runtime939->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[938], $xpaths_to_scrape_in_a_new_page));

$href_future940 = $href_runtime940->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[939], $xpaths_to_scrape_in_a_new_page));

$href_future941 = $href_runtime941->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[940], $xpaths_to_scrape_in_a_new_page));

$href_future942 = $href_runtime942->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[941], $xpaths_to_scrape_in_a_new_page));

$href_future943 = $href_runtime943->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[942], $xpaths_to_scrape_in_a_new_page));

$href_future944 = $href_runtime944->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[943], $xpaths_to_scrape_in_a_new_page));

$href_future945 = $href_runtime945->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[944], $xpaths_to_scrape_in_a_new_page));

$href_future946 = $href_runtime946->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[945], $xpaths_to_scrape_in_a_new_page));

$href_future947 = $href_runtime947->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[946], $xpaths_to_scrape_in_a_new_page));

$href_future948 = $href_runtime948->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[947], $xpaths_to_scrape_in_a_new_page));

$href_future949 = $href_runtime949->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[948], $xpaths_to_scrape_in_a_new_page));

$href_future950 = $href_runtime950->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[949], $xpaths_to_scrape_in_a_new_page));

$href_future951 = $href_runtime951->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[950], $xpaths_to_scrape_in_a_new_page));

$href_future952 = $href_runtime952->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[951], $xpaths_to_scrape_in_a_new_page));

$href_future953 = $href_runtime953->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[952], $xpaths_to_scrape_in_a_new_page));

$href_future954 = $href_runtime954->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[953], $xpaths_to_scrape_in_a_new_page));

$href_future955 = $href_runtime955->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[954], $xpaths_to_scrape_in_a_new_page));

$href_future956 = $href_runtime956->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[955], $xpaths_to_scrape_in_a_new_page));

$href_future957 = $href_runtime957->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[956], $xpaths_to_scrape_in_a_new_page));

$href_future958 = $href_runtime958->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[957], $xpaths_to_scrape_in_a_new_page));

$href_future959 = $href_runtime959->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[958], $xpaths_to_scrape_in_a_new_page));

$href_future960 = $href_runtime960->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[959], $xpaths_to_scrape_in_a_new_page));

$href_future961 = $href_runtime961->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[960], $xpaths_to_scrape_in_a_new_page));

$href_future962 = $href_runtime962->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[961], $xpaths_to_scrape_in_a_new_page));

$href_future963 = $href_runtime963->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[962], $xpaths_to_scrape_in_a_new_page));

$href_future964 = $href_runtime964->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[963], $xpaths_to_scrape_in_a_new_page));

$href_future965 = $href_runtime965->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[964], $xpaths_to_scrape_in_a_new_page));

$href_future966 = $href_runtime966->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[965], $xpaths_to_scrape_in_a_new_page));

$href_future967 = $href_runtime967->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[966], $xpaths_to_scrape_in_a_new_page));

$href_future968 = $href_runtime968->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[967], $xpaths_to_scrape_in_a_new_page));

$href_future969 = $href_runtime969->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[968], $xpaths_to_scrape_in_a_new_page));

$href_future970 = $href_runtime970->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[969], $xpaths_to_scrape_in_a_new_page));

$href_future971 = $href_runtime971->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[970], $xpaths_to_scrape_in_a_new_page));

$href_future972 = $href_runtime972->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[971], $xpaths_to_scrape_in_a_new_page));

$href_future973 = $href_runtime973->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[972], $xpaths_to_scrape_in_a_new_page));

$href_future974 = $href_runtime974->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[973], $xpaths_to_scrape_in_a_new_page));

$href_future975 = $href_runtime975->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[974], $xpaths_to_scrape_in_a_new_page));

$href_future976 = $href_runtime976->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[975], $xpaths_to_scrape_in_a_new_page));

$href_future977 = $href_runtime977->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[976], $xpaths_to_scrape_in_a_new_page));

$href_future978 = $href_runtime978->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[977], $xpaths_to_scrape_in_a_new_page));

$href_future979 = $href_runtime979->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[978], $xpaths_to_scrape_in_a_new_page));

$href_future980 = $href_runtime980->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[979], $xpaths_to_scrape_in_a_new_page));

$href_future981 = $href_runtime981->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[980], $xpaths_to_scrape_in_a_new_page));

$href_future982 = $href_runtime982->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[981], $xpaths_to_scrape_in_a_new_page));

$href_future983 = $href_runtime983->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[982], $xpaths_to_scrape_in_a_new_page));

$href_future984 = $href_runtime984->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[983], $xpaths_to_scrape_in_a_new_page));

$href_future985 = $href_runtime985->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[984], $xpaths_to_scrape_in_a_new_page));

$href_future986 = $href_runtime986->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[985], $xpaths_to_scrape_in_a_new_page));

$href_future987 = $href_runtime987->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[986], $xpaths_to_scrape_in_a_new_page));

$href_future988 = $href_runtime988->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[987], $xpaths_to_scrape_in_a_new_page));

$href_future989 = $href_runtime989->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[988], $xpaths_to_scrape_in_a_new_page));

$href_future990 = $href_runtime990->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[989], $xpaths_to_scrape_in_a_new_page));

$href_future991 = $href_runtime991->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[990], $xpaths_to_scrape_in_a_new_page));

$href_future992 = $href_runtime992->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[991], $xpaths_to_scrape_in_a_new_page));

$href_future993 = $href_runtime993->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[992], $xpaths_to_scrape_in_a_new_page));

$href_future994 = $href_runtime994->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[993], $xpaths_to_scrape_in_a_new_page));

$href_future995 = $href_runtime995->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[994], $xpaths_to_scrape_in_a_new_page));

$href_future996 = $href_runtime996->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[995], $xpaths_to_scrape_in_a_new_page));

$href_future997 = $href_runtime997->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[996], $xpaths_to_scrape_in_a_new_page));

$href_future998 = $href_runtime998->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[997], $xpaths_to_scrape_in_a_new_page));

$href_future999 = $href_runtime999->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[998], $xpaths_to_scrape_in_a_new_page));

$href_future1000 = $href_runtime1000->run(function($href, $xpaths_to_scrape_in_a_new_page){
  $html = file_get_contents($href);
  $dom = new DOMDocument();
  @$dom->loadHTML($html);
  $xpath = new DOMXPath($dom);
  $data = [];

  for ($i = 0; $i < count($xpaths_to_scrape_in_a_new_page); $i++) {
    $value = $xpath->query($xpaths_to_scrape_in_a_new_page[$i])->item(0)->nodeValue;
    array_push($data, $value);
  }

  return $data;
}, array($hrefs[999], $xpaths_to_scrape_in_a_new_page));

for ($i = 1; $i < count($data); $i++) {
  for ($j = 0; $j < count(${'href_future'.$i}->value()); $j++) {
    array_push($data[$i], ${'href_future'.$i}->value()[$j]);
  }
}

$end_time = microtime(true);
$execution_time = ($end_time - $start_time);

for ($i = 0; $i < count($data); $i++) {
  if ($i == 0) {
    array_unshift($data[$i], 'id');
  } else {
    //array_unshift($data[$i], $i);
    array_unshift($data[$i], $execution_time);
  }
}


$handle = fopen("check.txt", "a");

for ($i = 0; $i < count($data); $i++) {
  for ($j = 0; $j < count($data[$i]); $j++) {
    fwrite($handle, $data[$i][$j]. "\n");
  }
}

fclose($handle);


$handle = fopen("result.txt", "a");
$number_of_data = count($data);
fwrite($handle, "$pages / $number_of_data / $execution_time" . "\n");
fclose($handle);
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
