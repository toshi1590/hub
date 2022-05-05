<?php
use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverExpectedCondition;

$url = 'https://sciencelatvia.lv/#/pub/eksperti/list';
$pages = $_POST['pages'];
$text_of_next_btn = '»';

for ($i=1; $i <= $pages; $i++) {
  ${'runtime'.$i} = new \parallel\Runtime();
}


$runtime1->run(function($url){
  require_once 'vendor/autoload.php';

  $host = 'http://selenium-hub:4444/wd/hub';
  $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());
  $driver->get($url);

  $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::tagName('td')));
  $tds = $driver->findElements(WebDriverBy::tagName('td'));

  $data = [];
  for ($i=0; $i < count($tds); $i++) {
    array_push($data, $tds[$i]->getText());
  }

  for ($i=0; $i < count($data); $i++) {
    echo $data[$i] . PHP_EOL;
  }
}, array($url));


if ($pages >= 2) {
  $runtime2->run(function($url, $pages, $text_of_next_btn){
    require_once 'vendor/autoload.php';

    $host = 'http://selenium-hub:4444/wd/hub';
    $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());
    $driver->get($url);

    for ($i = 0; $i < 1; $i++) {
      $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::linkText($text_of_next_btn)));
      $next_btn = $driver->findElement(WebDriverBy::linkText($text_of_next_btn));
      $next_btn->click();
    }

    sleep(20);
    $tds = $driver->findElements(WebDriverBy::tagName('td'));

    $data = [];
    for ($i=0; $i < count($tds); $i++) {
      array_push($data, $tds[$i]->getText());
    }

    for ($i=0; $i < count($data); $i++) {
      echo $data[$i] . PHP_EOL;
    }
  }, array($url, $pages, $text_of_next_btn));
}


if ($pages >= 3) {
  $runtime3->run(function($url, $pages, $text_of_next_btn){
    require_once 'vendor/autoload.php';

    $host = 'http://selenium-hub:4444/wd/hub';
    $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());
    $driver->get($url);

    for ($i = 0; $i < 2; $i++) {
      $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::linkText($text_of_next_btn)));
      $next_btn = $driver->findElement(WebDriverBy::linkText($text_of_next_btn));
      $next_btn->click();
    }

    sleep(20);
    $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::tagName('td')));
    $tds = $driver->findElements(WebDriverBy::tagName('td'));

    $data = [];
    for ($i=0; $i < count($tds); $i++) {
      array_push($data, $tds[$i]->getText());
    }

    for ($i=0; $i < count($data); $i++) {
      echo $data[$i] . PHP_EOL;
    }
  }, array($url, $pages, $text_of_next_btn));
}


if ($pages >= 4) {
  $runtime4->run(function($url, $pages, $text_of_next_btn){
    require_once 'vendor/autoload.php';

    $host = 'http://selenium-hub:4444/wd/hub';
    $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());
    $driver->get($url);

    for ($i = 0; $i < 3; $i++) {
      $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::linkText($text_of_next_btn)));
      $next_btn = $driver->findElement(WebDriverBy::linkText($text_of_next_btn));
      $next_btn->click();
    }

    sleep(20);
    $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::tagName('td')));
    $tds = $driver->findElements(WebDriverBy::tagName('td'));

    $data = [];
    for ($i=0; $i < count($tds); $i++) {
      array_push($data, $tds[$i]->getText());
    }

    for ($i=0; $i < count($data); $i++) {
      echo $data[$i] . PHP_EOL;
    }
  }, array($url, $pages, $text_of_next_btn));
}


if ($pages >= 5) {
  $runtime5->run(function($url, $pages, $text_of_next_btn){
    require_once 'vendor/autoload.php';

    $host = 'http://selenium-hub:4444/wd/hub';
    $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());
    $driver->get($url);

    for ($i = 0; $i < 4; $i++) {
      $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::linkText($text_of_next_btn)));
      $next_btn = $driver->findElement(WebDriverBy::linkText($text_of_next_btn));
      $next_btn->click();
    }

    sleep(20);
    $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::tagName('td')));
    $tds = $driver->findElements(WebDriverBy::tagName('td'));

    $data = [];
    for ($i=0; $i < count($tds); $i++) {
      array_push($data, $tds[$i]->getText());
    }

    for ($i=0; $i < count($data); $i++) {
      echo $data[$i] . PHP_EOL;
    }
  }, array($url, $pages, $text_of_next_btn));
}


if ($pages >= 6) {
  $runtime6->run(function($url, $pages, $text_of_next_btn){
    require_once 'vendor/autoload.php';

    $host = 'http://selenium-hub:4444/wd/hub';
    $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());
    $driver->get($url);

    for ($i = 0; $i < 5; $i++) {
      $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::linkText($text_of_next_btn)));
      $next_btn = $driver->findElement(WebDriverBy::linkText($text_of_next_btn));
      $next_btn->click();
    }

    sleep(20);
    $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::tagName('td')));
    $tds = $driver->findElements(WebDriverBy::tagName('td'));

    $data = [];
    for ($i=0; $i < count($tds); $i++) {
      array_push($data, $tds[$i]->getText());
    }

    for ($i=0; $i < count($data); $i++) {
      echo $data[$i] . PHP_EOL;
    }
  }, array($url, $pages, $text_of_next_btn));
}


if ($pages >= 7) {
  $runtime7->run(function($url, $pages, $text_of_next_btn){
    require_once 'vendor/autoload.php';

    $host = 'http://selenium-hub:4444/wd/hub';
    $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());
    $driver->get($url);

    for ($i = 0; $i < 6; $i++) {
      $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::linkText($text_of_next_btn)));
      $next_btn = $driver->findElement(WebDriverBy::linkText($text_of_next_btn));
      $next_btn->click();
    }

    sleep(20);
    $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::tagName('td')));
    $tds = $driver->findElements(WebDriverBy::tagName('td'));

    $data = [];
    for ($i=0; $i < count($tds); $i++) {
      array_push($data, $tds[$i]->getText());
    }

    for ($i=0; $i < count($data); $i++) {
      echo $data[$i] . PHP_EOL;
    }
  }, array($url, $pages, $text_of_next_btn));
}


if ($pages >= 8) {
  $runtime8->run(function($url, $pages, $text_of_next_btn){
    require_once 'vendor/autoload.php';

    $host = 'http://selenium-hub:4444/wd/hub';
    $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());
    $driver->get($url);

    for ($i = 0; $i < 7; $i++) {
      $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::linkText($text_of_next_btn)));
      $next_btn = $driver->findElement(WebDriverBy::linkText($text_of_next_btn));
      $next_btn->click();
    }

    sleep(20);
    $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::tagName('td')));
    $tds = $driver->findElements(WebDriverBy::tagName('td'));

    $data = [];
    for ($i=0; $i < count($tds); $i++) {
      array_push($data, $tds[$i]->getText());
    }

    for ($i=0; $i < count($data); $i++) {
      echo $data[$i] . PHP_EOL;
    }
  }, array($url, $pages, $text_of_next_btn));
}


