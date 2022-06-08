<?php
$start_time = microtime(true);

use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverExpectedCondition;
use Facebook\WebDriver\Exception\NoSuchElementException;
use Facebook\WebDriver\Exception\UnrecognizedExceptionException;
use Facebook\WebDriver\Exception\UnexpectedJavascriptException;
use Facebook\WebDriver\Exception\StaleElementReferenceException;
use Facebook\WebDriver\Exception\WebDriverCurlException;


$data = [];
$url = "https://sciencelatvia.lv/#/pub/eksperti/list";
$column_numbers_to_scrape = [
  "2",
  "3",
  "6"
];
$titles = [
  "vards",
  "uzvards",
  "lzp",
  "Ievēlēšanas datums",
  "Iegūtais grāds (piem., Mg., Dr., PhD)"
];
$xpath_of_a = "/html/body/div/div/div[1]/section[2]/div/div/div/div[4]/div/div/div/div[1]/div/table/tbody/tr[9]/td[3]/span";
$xpaths_to_scrape_in_a_new_page = [
  "/html/body/div/div/div[1]/section[2]/div/div/form/div[2]/div[1]/div/div/div/div[3]/div/div[2]/div/div[2]/div/div[4]/div/div/input",
  "/html/body/div/div/div[1]/section[2]/div/div/form/div[2]/div[1]/div/div/div/div[2]/div/div[2]/div/div[2]/div/div[1]/div/div/input"
];
$rows = "7";
$text_of_next_btn = "»";
$pages = "10";


//
$shou = floor(($pages / 5));
$amari = ($pages % 5);
$page_moving_times_in_5_threads = [];

for ($i = 1; $i <= 5; $i++) {
  if ($amari >= $i) {
    array_push($page_moving_times_in_5_threads, $shou);
  } else {
    array_push($page_moving_times_in_5_threads, ($shou - 1));
  }
}
//

array_push($data, $titles);

for ($i = 1; $i <= $pages; $i++) {
  ${'runtime'.$i} = new \parallel\Runtime();
}




$future1 = $runtime1->run(function($url, $column_numbers_to_scrape, $xpath_of_a, $xpaths_to_scrape_in_a_new_page, $rows, $text_of_next_btn, $page_moving_times){
  require_once 'vendor/autoload.php';

  $host = 'http://selenium-hub:4444/wd/hub';
  $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());
  $driver->get($url);
  $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::tagName('td')));
  $scraped_data = [];

  for ($a = 0; $a < (1 + $page_moving_times); $a++) {
    if ($a != 0) {
      for ($b = 0; $b < 5; $b++) {
        $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::linkText($text_of_next_btn)));
        $next_btn = $driver->findElement(WebDriverBy::linkText($text_of_next_btn));
        $next_btn->click();
      }
      $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::tagName('td')));
      sleep(20);
    }

    for ($j = 1; $j <= $rows; $j++) {
      $scraped_row_data = [];

      for ($k=0; $k < count($column_numbers_to_scrape); $k++) {
        try {
          $Is_this_td_row = 'y';
          $td = $driver->findElement(WebDriverBy::xpath("//tbody/tr[$j]/td[$column_numbers_to_scrape[$k]]")); //Element
          array_push($scraped_row_data, $td->getText());
        }catch (NoSuchElementException $e) {
          $Is_this_td_row = 'n';
          break;
        }
      }

      if ($Is_this_td_row == 'y') {
        if (!is_null($xpath_of_a)) {

          $xpath_of_element_to_click_in_the_table = preg_replace('/tr\[[0-9]+\]/', "tr[$j]", $xpath_of_a); // change tr[x] to tr[$j]
          preg_match('/td\[[0-9]+\]/', $xpath_of_element_to_click_in_the_table, $td); // extract td[x]
          $xpath_of_element_to_click_in_the_table = strstr($xpath_of_element_to_click_in_the_table, 'td', true); // remove td[x]...
          $xpath_of_element_to_click_in_the_table = $xpath_of_element_to_click_in_the_table . $td[0]; // add extracted td[x]
          $xpath_to_click = $driver->findElement(WebDriverBy::xpath($xpath_of_element_to_click_in_the_table));
          $xpath_to_click->click();

          sleep(10);

          // angular text comes first, then simple text comes second (In case of vice versa, angular text is extracted as empty)
          for ($l=0; $l < count($xpaths_to_scrape_in_a_new_page); $l++) {
            try {
              $angular_text = $driver->executeScript("
                var script = document.createElement('script');
                script.src = 'https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js';
                var xpaths_to_scrape_in_a_new_page = '$xpaths_to_scrape_in_a_new_page[$l]';
                var elem = document.evaluate(xpaths_to_scrape_in_a_new_page, document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null);
                return angular.element(elem.singleNodeValue).val();
              ");

              array_push($scraped_row_data, $angular_text);
            }
            catch (UnexpectedJavascriptException $e) {
              // for simple text
              $xpath_to_scrape = $driver->findElement(WebDriverBy::xpath($xpaths_to_scrape_in_a_new_page[$l]));
              array_push($scraped_row_data, $xpath_to_scrape->getText());
            }
            catch (Exception $e) {
              array_push($scraped_row_data, '');
            }
          }

          $driver->navigate()->back();
          $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::tagName('td')));
          sleep(10);

        }

        array_push($scraped_data, $scraped_row_data);
      }
    }
  }

  return $scraped_data;
}, array($url, $column_numbers_to_scrape, $xpath_of_a, $xpaths_to_scrape_in_a_new_page, $rows, $text_of_next_btn, $page_moving_times_in_5_threads[0]));





if ($pages >= 2) {
  $future2 = $runtime2->run(function($url, $column_numbers_to_scrape, $xpath_of_a, $xpaths_to_scrape_in_a_new_page, $rows, $text_of_next_btn, $page_moving_times){
    require_once 'vendor/autoload.php';
    $host = 'http://selenium-hub:4444/wd/hub';
    $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());
    $driver->get($url);
    $scraped_data = [];

    for ($a = 0; $a < (1 + $page_moving_times); $a++) {
      if ($a == 0) {
        for ($i = 0; $i < 1; $i++) {
          $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::linkText($text_of_next_btn)));
          $next_btn = $driver->findElement(WebDriverBy::linkText($text_of_next_btn));
          $next_btn->click();
        }
        $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::tagName('td')));
        sleep(20);
      } else {
        for ($b = 0; $b < 5; $b++) {
          $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::linkText($text_of_next_btn)));
          $next_btn = $driver->findElement(WebDriverBy::linkText($text_of_next_btn));
          $next_btn->click();
        }
        $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::tagName('td')));
        sleep(20);
      }

      for ($j = 1; $j <= $rows; $j++) {
        $scraped_row_data = [];

        for ($k=0; $k < count($column_numbers_to_scrape); $k++) {
          try {
            $Is_this_td_row = 'y';
            $td = $driver->findElement(WebDriverBy::xpath("//tbody/tr[$j]/td[$column_numbers_to_scrape[$k]]")); //Element
            array_push($scraped_row_data, $td->getText());
          }catch (NoSuchElementException $e) {
            $Is_this_td_row = 'n';
            break;
          }
        }

        if ($Is_this_td_row == 'y') {
          if (!is_null($xpath_of_a)) {

            $xpath_of_element_to_click_in_the_table = preg_replace('/tr\[[0-9]+\]/', "tr[$j]", $xpath_of_a); // change tr[x] to tr[$j]
            preg_match('/td\[[0-9]+\]/', $xpath_of_element_to_click_in_the_table, $td); // extract td[x]
            $xpath_of_element_to_click_in_the_table = strstr($xpath_of_element_to_click_in_the_table, 'td', true); // remove td[x]...
            $xpath_of_element_to_click_in_the_table = $xpath_of_element_to_click_in_the_table . $td[0]; // add extracted td[x]
            $xpath_to_click = $driver->findElement(WebDriverBy::xpath($xpath_of_element_to_click_in_the_table));
            $xpath_to_click->click();

            sleep(10);

            // angular text comes first, then simple text comes second (In case of vice versa, angular text is extracted as empty)
            for ($l=0; $l < count($xpaths_to_scrape_in_a_new_page); $l++) {
              try {
                $angular_text = $driver->executeScript("
                  var script = document.createElement('script');
                  script.src = 'https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js';
                  var xpaths_to_scrape_in_a_new_page = '$xpaths_to_scrape_in_a_new_page[$l]';
                  var elem = document.evaluate(xpaths_to_scrape_in_a_new_page, document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null);
                  return angular.element(elem.singleNodeValue).val();
                ");

                array_push($scraped_row_data, $angular_text);
              }
              catch (UnexpectedJavascriptException $e) {
                // for simple text
                $xpath_to_scrape = $driver->findElement(WebDriverBy::xpath($xpaths_to_scrape_in_a_new_page[$l]));
                array_push($scraped_row_data, $xpath_to_scrape->getText());
              }
              catch (Exception $e) {
                array_push($scraped_row_data, '');
              }
            }

            $driver->navigate()->back();
            $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::tagName('td')));
            sleep(10);

          }

          array_push($scraped_data, $scraped_row_data);
        }
      }
    }

    return $scraped_data;
  }, array($url, $column_numbers_to_scrape, $xpath_of_a, $xpaths_to_scrape_in_a_new_page, $rows, $text_of_next_btn, $page_moving_times_in_5_threads[1]));
}





if ($pages >= 3) {
  $future3 = $runtime3->run(function($url, $column_numbers_to_scrape, $xpath_of_a, $xpaths_to_scrape_in_a_new_page, $rows, $text_of_next_btn, $page_moving_times){
    require_once 'vendor/autoload.php';
    $host = 'http://selenium-hub:4444/wd/hub';
    $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());
    $driver->get($url);
    $scraped_data = [];

    for ($a = 0; $a < (1 + $page_moving_times); $a++) {
      if ($a == 0) {
        for ($i = 0; $i < 2; $i++) {
          $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::linkText($text_of_next_btn)));
          $next_btn = $driver->findElement(WebDriverBy::linkText($text_of_next_btn));
          $next_btn->click();
        }
        $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::tagName('td')));
        sleep(20);
      } else {
        for ($b = 0; $b < 5; $b++) {
          $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::linkText($text_of_next_btn)));
          $next_btn = $driver->findElement(WebDriverBy::linkText($text_of_next_btn));
          $next_btn->click();
        }
        $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::tagName('td')));
        sleep(20);
      }

      for ($j = 1; $j <= $rows; $j++) {
        $scraped_row_data = [];

        for ($k=0; $k < count($column_numbers_to_scrape); $k++) {
          try {
            $Is_this_td_row = 'y';
            $td = $driver->findElement(WebDriverBy::xpath("//tbody/tr[$j]/td[$column_numbers_to_scrape[$k]]")); //Element
            array_push($scraped_row_data, $td->getText());
          }catch (NoSuchElementException $e) {
            $Is_this_td_row = 'n';
            break;
          }
        }

        if ($Is_this_td_row == 'y') {
          if (!is_null($xpath_of_a)) {

            $xpath_of_element_to_click_in_the_table = preg_replace('/tr\[[0-9]+\]/', "tr[$j]", $xpath_of_a); // change tr[x] to tr[$j]
            preg_match('/td\[[0-9]+\]/', $xpath_of_element_to_click_in_the_table, $td); // extract td[x]
            $xpath_of_element_to_click_in_the_table = strstr($xpath_of_element_to_click_in_the_table, 'td', true); // remove td[x]...
            $xpath_of_element_to_click_in_the_table = $xpath_of_element_to_click_in_the_table . $td[0]; // add extracted td[x]
            $xpath_to_click = $driver->findElement(WebDriverBy::xpath($xpath_of_element_to_click_in_the_table));
            $xpath_to_click->click();

            sleep(10);

            // angular text comes first, then simple text comes second (In case of vice versa, angular text is extracted as empty)
            for ($l=0; $l < count($xpaths_to_scrape_in_a_new_page); $l++) {
              try {
                $angular_text = $driver->executeScript("
                  var script = document.createElement('script');
                  script.src = 'https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js';
                  var xpaths_to_scrape_in_a_new_page = '$xpaths_to_scrape_in_a_new_page[$l]';
                  var elem = document.evaluate(xpaths_to_scrape_in_a_new_page, document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null);
                  return angular.element(elem.singleNodeValue).val();
                ");

                array_push($scraped_row_data, $angular_text);
              }
              catch (UnexpectedJavascriptException $e) {
                // for simple text
                $xpath_to_scrape = $driver->findElement(WebDriverBy::xpath($xpaths_to_scrape_in_a_new_page[$l]));
                array_push($scraped_row_data, $xpath_to_scrape->getText());
              }
              catch (Exception $e) {
                array_push($scraped_row_data, '');
              }
            }

            $driver->navigate()->back();
            $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::tagName('td')));
            sleep(10);
          }

          array_push($scraped_data, $scraped_row_data);
        }
      }
    }

    return $scraped_data;
  }, array($url, $column_numbers_to_scrape, $xpath_of_a, $xpaths_to_scrape_in_a_new_page, $rows, $text_of_next_btn, $page_moving_times_in_5_threads[2]));
}





if ($pages >= 4) {
  $future4 = $runtime4->run(function($url, $column_numbers_to_scrape, $xpath_of_a, $xpaths_to_scrape_in_a_new_page, $rows, $text_of_next_btn, $page_moving_times){
    require_once 'vendor/autoload.php';
    $host = 'http://selenium-hub:4444/wd/hub';
    $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());
    $driver->get($url);
    $scraped_data = [];

    for ($a = 0; $a < (1 + $page_moving_times); $a++) {
      if ($a == 0) {
        for ($i = 0; $i < 3; $i++) {
          $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::linkText($text_of_next_btn)));
          $next_btn = $driver->findElement(WebDriverBy::linkText($text_of_next_btn));
          $next_btn->click();
        }
        $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::tagName('td')));
        sleep(20);
      } else {
        for ($b = 0; $b < 5; $b++) {
          $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::linkText($text_of_next_btn)));
          $next_btn = $driver->findElement(WebDriverBy::linkText($text_of_next_btn));
          $next_btn->click();
        }
        $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::tagName('td')));
        sleep(20);
      }

      for ($j = 1; $j <= $rows; $j++) {
        $scraped_row_data = [];

        for ($k=0; $k < count($column_numbers_to_scrape); $k++) {
          try {
            $Is_this_td_row = 'y';
            $td = $driver->findElement(WebDriverBy::xpath("//tbody/tr[$j]/td[$column_numbers_to_scrape[$k]]")); //Element
            array_push($scraped_row_data, $td->getText());
          }catch (NoSuchElementException $e) {
            $Is_this_td_row = 'n';
            break;
          }
        }

        if ($Is_this_td_row == 'y') {
          if (!is_null($xpath_of_a)) {

            $xpath_of_element_to_click_in_the_table = preg_replace('/tr\[[0-9]+\]/', "tr[$j]", $xpath_of_a); // change tr[x] to tr[$j]
            preg_match('/td\[[0-9]+\]/', $xpath_of_element_to_click_in_the_table, $td); // extract td[x]
            $xpath_of_element_to_click_in_the_table = strstr($xpath_of_element_to_click_in_the_table, 'td', true); // remove td[x]...
            $xpath_of_element_to_click_in_the_table = $xpath_of_element_to_click_in_the_table . $td[0]; // add extracted td[x]
            $xpath_to_click = $driver->findElement(WebDriverBy::xpath($xpath_of_element_to_click_in_the_table));
            $xpath_to_click->click();

            sleep(10);

            // angular text comes first, then simple text comes second (In case of vice versa, angular text is extracted as empty)
            for ($l=0; $l < count($xpaths_to_scrape_in_a_new_page); $l++) {
              try {
                $angular_text = $driver->executeScript("
                  var script = document.createElement('script');
                  script.src = 'https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js';
                  var xpaths_to_scrape_in_a_new_page = '$xpaths_to_scrape_in_a_new_page[$l]';
                  var elem = document.evaluate(xpaths_to_scrape_in_a_new_page, document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null);
                  return angular.element(elem.singleNodeValue).val();
                ");

                array_push($scraped_row_data, $angular_text);
              }
              catch (UnexpectedJavascriptException $e) {
                // for simple text
                $xpath_to_scrape = $driver->findElement(WebDriverBy::xpath($xpaths_to_scrape_in_a_new_page[$l]));
                array_push($scraped_row_data, $xpath_to_scrape->getText());
              }
              catch (Exception $e) {
                array_push($scraped_row_data, '');
              }
            }

            $driver->navigate()->back();
            $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::tagName('td')));
            sleep(10);

          }

          array_push($scraped_data, $scraped_row_data);
        }
      }
    }

    return $scraped_data;
  }, array($url, $column_numbers_to_scrape, $xpath_of_a, $xpaths_to_scrape_in_a_new_page, $rows, $text_of_next_btn, $page_moving_times_in_5_threads[2]));
}






if ($pages >= 5) {
  $future5 = $runtime5->run(function($url, $column_numbers_to_scrape, $xpath_of_a, $xpaths_to_scrape_in_a_new_page, $rows, $text_of_next_btn, $page_moving_times){
    require_once 'vendor/autoload.php';
    $host = 'http://selenium-hub:4444/wd/hub';
    $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());
    $driver->get($url);
    $scraped_data = [];

    for ($a = 0; $a < (1 + $page_moving_times); $a++) {
      if ($a == 0) {
        for ($i = 0; $i < 4; $i++) {
          $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::linkText($text_of_next_btn)));
          $next_btn = $driver->findElement(WebDriverBy::linkText($text_of_next_btn));
          $next_btn->click();
        }
        $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::tagName('td')));
        sleep(20);
      } else {
        for ($b = 0; $b < 5; $b++) {
          $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::linkText($text_of_next_btn)));
          $next_btn = $driver->findElement(WebDriverBy::linkText($text_of_next_btn));
          $next_btn->click();
        }
        $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::tagName('td')));
        sleep(20);
      }

      for ($j = 1; $j <= $rows; $j++) {
        $scraped_row_data = [];

        for ($k=0; $k < count($column_numbers_to_scrape); $k++) {
          try {
            $Is_this_td_row = 'y';
            $td = $driver->findElement(WebDriverBy::xpath("//tbody/tr[$j]/td[$column_numbers_to_scrape[$k]]")); //Element
            array_push($scraped_row_data, $td->getText());
          }catch (NoSuchElementException $e) {
            $Is_this_td_row = 'n';
            break;
          }
        }

        if ($Is_this_td_row == 'y') {
          if (!is_null($xpath_of_a)) {

            $xpath_of_element_to_click_in_the_table = preg_replace('/tr\[[0-9]+\]/', "tr[$j]", $xpath_of_a); // change tr[x] to tr[$j]
            preg_match('/td\[[0-9]+\]/', $xpath_of_element_to_click_in_the_table, $td); // extract td[x]
            $xpath_of_element_to_click_in_the_table = strstr($xpath_of_element_to_click_in_the_table, 'td', true); // remove td[x]...
            $xpath_of_element_to_click_in_the_table = $xpath_of_element_to_click_in_the_table . $td[0]; // add extracted td[x]
            $xpath_to_click = $driver->findElement(WebDriverBy::xpath($xpath_of_element_to_click_in_the_table));
            $xpath_to_click->click();

            sleep(10);

            // angular text comes first, then simple text comes second (In case of vice versa, angular text is extracted as empty)
            for ($l=0; $l < count($xpaths_to_scrape_in_a_new_page); $l++) {
              try {
                $angular_text = $driver->executeScript("
                  var script = document.createElement('script');
                  script.src = 'https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js';
                  var xpaths_to_scrape_in_a_new_page = '$xpaths_to_scrape_in_a_new_page[$l]';
                  var elem = document.evaluate(xpaths_to_scrape_in_a_new_page, document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null);
                  return angular.element(elem.singleNodeValue).val();
                ");

                array_push($scraped_row_data, $angular_text);
              }
              catch (UnexpectedJavascriptException $e) {
                // for simple text
                $xpath_to_scrape = $driver->findElement(WebDriverBy::xpath($xpaths_to_scrape_in_a_new_page[$l]));
                array_push($scraped_row_data, $xpath_to_scrape->getText());
              }
              catch (Exception $e) {
                array_push($scraped_row_data, '');
              }
            }

            $driver->navigate()->back();
            $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::tagName('td')));
            sleep(10);

          }

          array_push($scraped_data, $scraped_row_data);
        }
      }
    }

    return $scraped_data;
  }, array($url, $column_numbers_to_scrape, $xpath_of_a, $xpaths_to_scrape_in_a_new_page, $rows, $text_of_next_btn, $page_moving_times_in_5_threads[2]));
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


$end_time = microtime(true);
$execution_time = ($end_time - $start_time);



//
echo $pages . ", " . $rows . ", " . $execution_time . PHP_EOL;
//



//for ($i = 0; $i < count($data); $i++) {
//  if ($i == 0) {
//    array_unshift($data[$i], 'id');
//  } else {
//    //array_unshift($data[$i], $i);
//    array_unshift($data[$i], $execution_time);
//  }
//}
//
//echo json_encode($data);
exec("echo 1 >> record.txt");
