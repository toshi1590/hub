<?php
require_once 'vendor/autoload.php';

use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverExpectedCondition;

$host = 'http://selenium-hub:4444/wd/hub';
$driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());
$driver->get('https://sciencelatvia.lv/#/pub/eksperti/list');
$driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::tagName('td')));
$tds = $driver->findElements(WebDriverBy::tagName('td'));

$data = [];
for ($i = 0; $i < 900; $i++) {
  array_push($data, $tds[$i]->getText());
}

$runtime1 = new \parallel\Runtime();
$runtime2 = new \parallel\Runtime();
$runtime3 = new \parallel\Runtime();
$runtime4 = new \parallel\Runtime();
$runtime5 = new \parallel\Runtime();

$runtime1->run(function($data){
  for ($i = 0; $i < 180; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));

$runtime2->run(function($data){
  for ($i = 180; $i < 360; $i++) {
    echo $data[$i] . PHP_EOL;
  }
}, array($data));

$runtime3->run(function($data){
  for ($i = 360; $i < 540; $i++) {
    echo $data[$i] . PHP_EOL;
  }
}, array($data));

$runtime4->run(function($data){
  for ($i = 540; $i < 720; $i++) {
    echo $data[$i] . PHP_EOL;
  }
}, array($data));

$runtime5->run(function($data){
  for ($i = 720; $i < 900; $i++) {
    echo $data[$i] . PHP_EOL;
  }
}, array($data));

