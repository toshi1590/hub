<?php
require_once 'vendor/autoload.php';

use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverExpectedCondition;

$host = 'http://selenium-hub:4444/wd/hub';
$driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());

// work
$driver->get('https://sciencelatvia.lv/#/pub/eksperti/list');
$driver->wait()->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::tagName('td')));
$tds = $driver->findElements(WebDriverBy::tagName('td'));
var_dump($tds);

// not work
//$runtime1 = new \parallel\Runtime();
//$runtime2 = new \parallel\Runtime();
//
//$channel1 = new \parallel\Channel();
//$channel1->send($driver);
//
//$runtime1->run(function($channel1){
//  var_dump($channel1->recv());
//}, array($channel1));
//
//$runtime2->run(function($channel1){
//  var_dump($channel1->recv());
//}, array($channel1));
