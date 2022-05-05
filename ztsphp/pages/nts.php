<?php
require_once 'vendor/autoload.php';

use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverExpectedCondition;

$url = 'https://sciencelatvia.lv/#/pub/eksperti/list';
$pages = $_POST['pages'];
$text_of_next_btn = '»';

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

for ($i=1; $i < $pages; $i++) {
  $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::linkText($text_of_next_btn)));
  $next_btn = $driver->findElement(WebDriverBy::linkText($text_of_next_btn));
  $next_btn->click();
  sleep(20);
  $driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::tagName('td')));
  $tds = $driver->findElements(WebDriverBy::tagName('td'));

  $data = [];
  for ($j=0; $j < count($tds); $j++) {
    array_push($data, $tds[$j]->getText());
  }

  for ($j=0; $j < count($data); $j++) {
    echo $data[$j] . PHP_EOL;
  }
}
