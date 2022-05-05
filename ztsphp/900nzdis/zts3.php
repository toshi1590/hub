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

$runtime1->run(function($data){
  for ($i = 0; $i < 300; $i++) {
    echo $data[$i] . PHP_EOL;    
  }
}, array($data));

$runtime2->run(function($data){
  for ($i = 300; $i < 600; $i++) {
    echo $data[$i] . PHP_EOL;
  }
}, array($data));

$runtime3->run(function($data){
  for ($i = 600; $i < 900; $i++) {
    echo $data[$i] . PHP_EOL;
  }
}, array($data));

