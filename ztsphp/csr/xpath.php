<?php
use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverExpectedCondition;

$url = 'https://sciencelatvia.lv/#/pub/eksperti/list';
$pages = $_POST['pages'];
$text_of_next_btn = '»';
$data = [];

for ($i=1; $i <= $pages; $i++) {
  ${'runtime'.$i} = new \parallel\Runtime();
}


$future1 = $runtime1->run(function($url){
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

  return $data;
}, array($url));


if ($pages >= 2) {
  $future2 = $runtime2->run(function($url){
    require_once 'vendor/autoload.php';

    $host = 'http://selenium-hub:4444/wd/hub';
    $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());
    $driver->get($url);

    $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::xpath("/html/body/div/div/div[1]/section[2]/div/div/div/div[4]/div/div/div/div[2]/div/div/div[2]/span/li[3]/a")));
    $next_btn = $driver->findElement(WebDriverBy::xpath("/html/body/div/div/div[1]/section[2]/div/div/div/div[4]/div/div/div/div[2]/div/div/div[2]/span/li[3]/a"));
    $next_btn->click();
    sleep(20);
    $tds = $driver->findElements(WebDriverBy::tagName('td'));

    $data = [];
    for ($i=0; $i < count($tds); $i++) {
      array_push($data, $tds[$i]->getText());
    }

    return $data;
  }, array($url));
}


if ($pages >= 3) {
  $future3 = $runtime3->run(function($url){
    require_once 'vendor/autoload.php';

    $host = 'http://selenium-hub:4444/wd/hub';
    $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());
    $driver->get($url);

    $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::xpath("/html/body/div/div/div[1]/section[2]/div/div/div/div[4]/div/div/div/div[2]/div/div/div[2]/span/li[4]/a")));
    $next_btn = $driver->findElement(WebDriverBy::xpath("/html/body/div/div/div[1]/section[2]/div/div/div/div[4]/div/div/div/div[2]/div/div/div[2]/span/li[4]/a"));
    $next_btn->click();
    sleep(20);
    $tds = $driver->findElements(WebDriverBy::tagName('td'));

    $data = [];
    for ($i=0; $i < count($tds); $i++) {
      array_push($data, $tds[$i]->getText());
    }

    return $data;
  }, array($url));
}


if ($pages >= 4) {
  $future4 = $runtime4->run(function($url){
    require_once 'vendor/autoload.php';

    $host = 'http://selenium-hub:4444/wd/hub';
    $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());
    $driver->get($url);

    $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::xpath("/html/body/div/div/div[1]/section[2]/div/div/div/div[4]/div/div/div/div[2]/div/div/div[2]/span/li[5]/a")));
    $next_btn = $driver->findElement(WebDriverBy::xpath("/html/body/div/div/div[1]/section[2]/div/div/div/div[4]/div/div/div/div[2]/div/div/div[2]/span/li[5]/a"));
    $next_btn->click();
    sleep(20);
    $tds = $driver->findElements(WebDriverBy::tagName('td'));

    $data = [];
    for ($i=0; $i < count($tds); $i++) {
      array_push($data, $tds[$i]->getText());
    }

    return $data;
  }, array($url));
}


if ($pages >= 5) {
  $future5 = $runtime5->run(function($url){
    require_once 'vendor/autoload.php';

    $host = 'http://selenium-hub:4444/wd/hub';
    $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());
    $driver->get($url);

    $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::xpath("/html/body/div/div/div[1]/section[2]/div/div/div/div[4]/div/div/div/div[2]/div/div/div[2]/span/li[6]/a")));
    $next_btn = $driver->findElement(WebDriverBy::xpath("/html/body/div/div/div[1]/section[2]/div/div/div/div[4]/div/div/div/div[2]/div/div/div[2]/span/li[6]/a"));
    $next_btn->click();
    sleep(20);
    $tds = $driver->findElements(WebDriverBy::tagName('td'));

    $data = [];
    for ($i=0; $i < count($tds); $i++) {
      array_push($data, $tds[$i]->getText());
    }

    return $data;
  }, array($url));
}


if ($pages >= 6) {
  $future6 = $runtime6->run(function($url){
    require_once 'vendor/autoload.php';

    $host = 'http://selenium-hub:4444/wd/hub';
    $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());
    $driver->get($url);

    $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::xpath("/html/body/div/div/div[1]/section[2]/div/div/div/div[4]/div/div/div/div[2]/div/div/div[2]/span/li[7]/a")));
    $next_btn = $driver->findElement(WebDriverBy::xpath("/html/body/div/div/div[1]/section[2]/div/div/div/div[4]/div/div/div/div[2]/div/div/div[2]/span/li[7]/a"));
    $next_btn->click();
    sleep(20);
    $tds = $driver->findElements(WebDriverBy::tagName('td'));

    $data = [];
    for ($i=0; $i < count($tds); $i++) {
      array_push($data, $tds[$i]->getText());
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

for ($i = 0; $i < count($data); $i++) {
  echo $data[$i] . PHP_EOL;
}
