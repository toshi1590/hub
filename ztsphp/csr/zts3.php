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
$url = $_POST['url'];
$column_numbers_to_scrape = $_POST['column_numbers_to_scrape'];
$titles = $_POST['titles'];

if (!empty($_POST['xpaths_of_elements_to_click_in_the_table'])) {
  $xpaths_of_elements_to_click_in_the_table = $_POST['xpaths_of_elements_to_click_in_the_table'];
} else {
  $xpaths_of_elements_to_click_in_the_table = null;
}

if (!empty($_POST['xpaths_to_scrape_in_new_pages'])) {
  $xpaths_to_scrape_in_new_pages = $_POST['xpaths_to_scrape_in_new_pages'];
} else {
  $xpaths_to_scrape_in_new_pages = null;
}

$rows = $_POST['rows'];

if (!empty($_POST['text_of_next_btn'])) {
  $text_of_next_btn = $_POST['text_of_next_btn'];
}

if (!empty($_POST['pages'])) {
  $pages = $_POST['pages'];
} else {
  $pages = 1;
}

//
$shou = floor(($pages / 3));
$amari = ($pages % 3);
$page_moving_times_in_3_threads = [];

for ($i = 1; $i <= 3; $i++) {
  if ($amari >= $i) {
    array_push($page_moving_times_in_3_threads, $shou);
  } else {
    array_push($page_moving_times_in_3_threads, ($shou - 1));
  }
}
//

array_push($data,$_POST['titles']);

for ($i = 1; $i <= $pages; $i++) {
  ${'runtime'.$i} = new \parallel\Runtime();
}


$future1 = $runtime1->run(function($url, $column_numbers_to_scrape, $xpaths_of_elements_to_click_in_the_table, $xpaths_to_scrape_in_new_pages, $rows, $text_of_next_btn, $page_moving_times){
  require_once 'vendor/autoload.php';

  $host = 'http://selenium-hub:4444/wd/hub';
  $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());
  $driver->get($url);
  $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::tagName('td')));
  $scraped_data = [];

  for ($a = 0; $a < (1 + $page_moving_times); $a++) {
    if ($a != 0) {
      for ($b = 0; $b < 3; $b++) {
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
        if (!is_null($xpaths_of_elements_to_click_in_the_table)) {
          for ($k=0; $k < count($xpaths_of_elements_to_click_in_the_table); $k++) {
            try {
              // click .../tr[$j]/td[$k]
              $xpath_of_element_to_click_in_the_table = preg_replace('/tr\[[0-9]+\]/', "tr[$j]", $xpaths_of_elements_to_click_in_the_table[$k]); // change tr[x] to tr[$j]
              preg_match('/td\[[0-9]+\]/', $xpath_of_element_to_click_in_the_table, $td); // extract td[x]
              $xpath_of_element_to_click_in_the_table = strstr($xpath_of_element_to_click_in_the_table, 'td', true); // remove td[x]...
              $xpath_of_element_to_click_in_the_table = $xpath_of_element_to_click_in_the_table . $td[0]; // add extracted td[x]
              $xpath_to_click = $driver->findElement(WebDriverBy::xpath($xpath_of_element_to_click_in_the_table));
              $xpath_to_click->click();
            }
            catch (UnrecognizedExceptionException $e) {
              // click .../tr[$j]/td[$k]/...
              $xpath_of_element_to_click_in_the_table = preg_replace('/tr\[[0-9]+\]/', "tr[$j]", $xpaths_of_elements_to_click_in_the_table[$k]); // take digit into consideration
              $xpath_to_click = $driver->findElement(WebDriverBy::xpath($xpath_of_element_to_click_in_the_table));
              $driver->executeScript('arguments[0].click()', [$xpath_to_click]);
            }
            catch (Exception $e) {
              break 1; // To add 'text was not extracted.' into $scraped_row_data, not use break???
            }

            sleep(10);

            //getting data in new pages process
            $keys = array_keys($xpaths_to_scrape_in_new_pages);
            $xpaths_to_scrape_in_a_new_page = $xpaths_to_scrape_in_new_pages[$keys[$k]];

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
        }

        array_push($scraped_data, $scraped_row_data);
      }
    }
  }

  return $scraped_data;
}, array($url, $column_numbers_to_scrape, $xpaths_of_elements_to_click_in_the_table, $xpaths_to_scrape_in_new_pages, $rows, $text_of_next_btn, $page_moving_times_in_3_threads[0]));


if ($pages >= 2) {
  $future2 = $runtime2->run(function($url, $column_numbers_to_scrape, $xpaths_of_elements_to_click_in_the_table, $xpaths_to_scrape_in_new_pages, $rows, $text_of_next_btn, $page_moving_times){
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
        for ($b = 0; $b < 3; $b++) {
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
          if (!is_null($xpaths_of_elements_to_click_in_the_table)) {
            for ($k=0; $k < count($xpaths_of_elements_to_click_in_the_table); $k++) {
              try {
                // click .../tr[$j]/td[$k]
                $xpath_of_element_to_click_in_the_table = preg_replace('/tr\[[0-9]+\]/', "tr[$j]", $xpaths_of_elements_to_click_in_the_table[$k]); // change tr[x] to tr[$j]
                preg_match('/td\[[0-9]+\]/', $xpath_of_element_to_click_in_the_table, $td); // extract td[x]
                $xpath_of_element_to_click_in_the_table = strstr($xpath_of_element_to_click_in_the_table, 'td', true); // remove td[x]...
                $xpath_of_element_to_click_in_the_table = $xpath_of_element_to_click_in_the_table . $td[0]; // add extracted td[x]
                $xpath_to_click = $driver->findElement(WebDriverBy::xpath($xpath_of_element_to_click_in_the_table));
                $xpath_to_click->click();
              }
              catch (UnrecognizedExceptionException $e) {
                // click .../tr[$j]/td[$k]/...
                $xpath_of_element_to_click_in_the_table = preg_replace('/tr\[[0-9]+\]/', "tr[$j]", $xpaths_of_elements_to_click_in_the_table[$k]); // take digit into consideration
                $xpath_to_click = $driver->findElement(WebDriverBy::xpath($xpath_of_element_to_click_in_the_table));
                $driver->executeScript('arguments[0].click()', [$xpath_to_click]);
              }
              catch (Exception $e) {
                break 1; // To add 'text was not extracted.' into $scraped_row_data, not use break???
              }

              sleep(10);

              //getting data in new pages process
              $keys = array_keys($xpaths_to_scrape_in_new_pages);
              $xpaths_to_scrape_in_a_new_page = $xpaths_to_scrape_in_new_pages[$keys[$k]];

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
          }

          array_push($scraped_data, $scraped_row_data);
        }
      }
    }

    return $scraped_data;
  }, array($url, $column_numbers_to_scrape, $xpaths_of_elements_to_click_in_the_table, $xpaths_to_scrape_in_new_pages, $rows, $text_of_next_btn, $page_moving_times_in_3_threads[1]));
}


if ($pages >= 3) {
  $future3 = $runtime3->run(function($url, $column_numbers_to_scrape, $xpaths_of_elements_to_click_in_the_table, $xpaths_to_scrape_in_new_pages, $rows, $text_of_next_btn, $page_moving_times){
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
        for ($b = 0; $b < 3; $b++) {
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
          if (!is_null($xpaths_of_elements_to_click_in_the_table)) {
            for ($k=0; $k < count($xpaths_of_elements_to_click_in_the_table); $k++) {
              try {
                // click .../tr[$j]/td[$k]
                $xpath_of_element_to_click_in_the_table = preg_replace('/tr\[[0-9]+\]/', "tr[$j]", $xpaths_of_elements_to_click_in_the_table[$k]); // change tr[x] to tr[$j]
                preg_match('/td\[[0-9]+\]/', $xpath_of_element_to_click_in_the_table, $td); // extract td[x]
                $xpath_of_element_to_click_in_the_table = strstr($xpath_of_element_to_click_in_the_table, 'td', true); // remove td[x]...
                $xpath_of_element_to_click_in_the_table = $xpath_of_element_to_click_in_the_table . $td[0]; // add extracted td[x]
                $xpath_to_click = $driver->findElement(WebDriverBy::xpath($xpath_of_element_to_click_in_the_table));
                $xpath_to_click->click();
              }
              catch (UnrecognizedExceptionException $e) {
                // click .../tr[$j]/td[$k]/...
                $xpath_of_element_to_click_in_the_table = preg_replace('/tr\[[0-9]+\]/', "tr[$j]", $xpaths_of_elements_to_click_in_the_table[$k]); // take digit into consideration
                $xpath_to_click = $driver->findElement(WebDriverBy::xpath($xpath_of_element_to_click_in_the_table));
                $driver->executeScript('arguments[0].click()', [$xpath_to_click]);
              }
              catch (Exception $e) {
                break 1; // To add 'text was not extracted.' into $scraped_row_data, not use break???
              }

              sleep(10);

              //getting data in new pages process
              $keys = array_keys($xpaths_to_scrape_in_new_pages);
              $xpaths_to_scrape_in_a_new_page = $xpaths_to_scrape_in_new_pages[$keys[$k]];

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
          }

          array_push($scraped_data, $scraped_row_data);
        }
      }
    }

    return $scraped_data;
  }, array($url, $column_numbers_to_scrape, $xpaths_of_elements_to_click_in_the_table, $xpaths_to_scrape_in_new_pages, $rows, $text_of_next_btn, $page_moving_times_in_3_threads[2]));
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

echo json_encode($data);
exec("echo 1 >> record.txt");
