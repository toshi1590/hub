<?php
$url = $_POST['url'];
$column_numbers_to_scrape = $_POST['column_numbers_to_scrape'];
$titles = $_POST['titles'];
$pages = $_POST['pages'];
$parameter = $_POST['parameter'];
$urls = [];
$data = [];

for ($i = 1; $i <= $pages; $i++) {
  $re1 = "/$parameter=[0-9]+/";
  array_push($urls, preg_replace($re1, "${parameter}=$i", $url));
}

for ($i = 1; $i <= $pages; $i++) {
  ${'runtime'.$i} = new \parallel\Runtime();
}

array_push($data, $titles);


if ($pages >= 1) {
  $future1 = $runtime1->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[0], $column_numbers_to_scrape));
}


if ($pages >= 2) {
  $future2 = $runtime2->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[1], $column_numbers_to_scrape));
}


if ($pages >= 3) {
  $future3 = $runtime3->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[2], $column_numbers_to_scrape));
}


if ($pages >= 4) {
  $future4 = $runtime4->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[3], $column_numbers_to_scrape));
}


if ($pages >= 5) {
  $future5 = $runtime5->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[4], $column_numbers_to_scrape));
}


if ($pages >= 6) {
  $future6 = $runtime6->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[5], $column_numbers_to_scrape));
}


if ($pages >= 7) {
  $future7 = $runtime7->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[6], $column_numbers_to_scrape));
}


if ($pages >= 8) {
  $future8 = $runtime8->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[7], $column_numbers_to_scrape));
}


if ($pages >= 9) {
  $future9 = $runtime9->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[8], $column_numbers_to_scrape));
}


if ($pages >= 10) {
  $future10 = $runtime10->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[9], $column_numbers_to_scrape));
}


if ($pages >= 11) {
  $future11 = $runtime11->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[10], $column_numbers_to_scrape));
}


if ($pages >= 12) {
  $future12 = $runtime12->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[11], $column_numbers_to_scrape));
}


if ($pages >= 13) {
  $future13 = $runtime13->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[12], $column_numbers_to_scrape));
}


if ($pages >= 14) {
  $future14 = $runtime14->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[13], $column_numbers_to_scrape));
}


if ($pages >= 15) {
  $future15 = $runtime15->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[14], $column_numbers_to_scrape));
}


if ($pages >= 16) {
  $future16 = $runtime16->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[15], $column_numbers_to_scrape));
}


if ($pages >= 17) {
  $future17 = $runtime17->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[16], $column_numbers_to_scrape));
}


if ($pages >= 18) {
  $future18 = $runtime18->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[17], $column_numbers_to_scrape));
}


if ($pages >= 19) {
  $future19 = $runtime19->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[18], $column_numbers_to_scrape));
}


if ($pages >= 20) {
  $future20 = $runtime20->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[19], $column_numbers_to_scrape));
}


if ($pages >= 21) {
  $future21 = $runtime21->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[20], $column_numbers_to_scrape));
}


if ($pages >= 22) {
  $future22 = $runtime22->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[21], $column_numbers_to_scrape));
}


if ($pages >= 23) {
  $future23 = $runtime23->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[22], $column_numbers_to_scrape));
}


if ($pages >= 24) {
  $future24 = $runtime24->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[23], $column_numbers_to_scrape));
}


if ($pages >= 25) {
  $future25 = $runtime25->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[24], $column_numbers_to_scrape));
}


if ($pages >= 26) {
  $future26 = $runtime26->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[25], $column_numbers_to_scrape));
}


if ($pages >= 27) {
  $future27 = $runtime27->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[26], $column_numbers_to_scrape));
}


if ($pages >= 28) {
  $future28 = $runtime28->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[27], $column_numbers_to_scrape));
}


if ($pages >= 29) {
  $future29 = $runtime29->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[28], $column_numbers_to_scrape));
}


if ($pages >= 30) {
  $future30 = $runtime30->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[29], $column_numbers_to_scrape));
}


if ($pages >= 31) {
  $future31 = $runtime31->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[30], $column_numbers_to_scrape));
}


if ($pages >= 32) {
  $future32 = $runtime32->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[31], $column_numbers_to_scrape));
}


if ($pages >= 33) {
  $future33 = $runtime33->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[32], $column_numbers_to_scrape));
}


if ($pages >= 34) {
  $future34 = $runtime34->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[33], $column_numbers_to_scrape));
}


if ($pages >= 35) {
  $future35 = $runtime35->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[34], $column_numbers_to_scrape));
}


if ($pages >= 36) {
  $future36 = $runtime36->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[35], $column_numbers_to_scrape));
}


if ($pages >= 37) {
  $future37 = $runtime37->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[36], $column_numbers_to_scrape));
}


if ($pages >= 38) {
  $future38 = $runtime38->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[37], $column_numbers_to_scrape));
}


if ($pages >= 39) {
  $future39 = $runtime39->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[38], $column_numbers_to_scrape));
}


if ($pages >= 40) {
  $future40 = $runtime40->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[39], $column_numbers_to_scrape));
}


if ($pages >= 41) {
  $future41 = $runtime41->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[40], $column_numbers_to_scrape));
}


if ($pages >= 42) {
  $future42 = $runtime42->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[41], $column_numbers_to_scrape));
}


if ($pages >= 43) {
  $future43 = $runtime43->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[42], $column_numbers_to_scrape));
}


if ($pages >= 44) {
  $future44 = $runtime44->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[43], $column_numbers_to_scrape));
}


if ($pages >= 45) {
  $future45 = $runtime45->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[44], $column_numbers_to_scrape));
}


if ($pages >= 46) {
  $future46 = $runtime46->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[45], $column_numbers_to_scrape));
}


if ($pages >= 47) {
  $future47 = $runtime47->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[46], $column_numbers_to_scrape));
}


if ($pages >= 48) {
  $future48 = $runtime48->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[47], $column_numbers_to_scrape));
}


if ($pages >= 49) {
  $future49 = $runtime49->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[48], $column_numbers_to_scrape));
}


if ($pages >= 50) {
  $future50 = $runtime50->run(function($url, $column_numbers_to_scrape){
    $html = file_get_contents($url);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $trs = $xpath->query('//tbody/tr');
    
    $data = [];
    
    for ($i = 1; $i <= $trs->length; $i++) {
      $tr_tds = [];
      
      for ($j = 0; $j < count($column_numbers_to_scrape); $j++) {
        array_push($tr_tds, $xpath->query("//tbody/tr[$i]/td[$column_numbers_to_scrape[$j]]")->item(0)->nodeValue);
      }
      
      array_push($data, $tr_tds);
    }
    
    return $data;
  }, array($urls[49], $column_numbers_to_scrape));
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

echo json_encode($data);