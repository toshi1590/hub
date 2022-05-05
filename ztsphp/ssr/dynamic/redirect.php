<?php
$url = $_POST['url'];

$column_numbers_to_scrape_str = implode(', ', $_POST['column_numbers_to_scrape']);
$column_numbers_to_scrape = '[' . $column_numbers_to_scrape_str . ']';

$titles_str = implode('", "', $_POST['titles']);
$titles = '["' . $titles_str . '"]';

$pages = $_POST['pages'];
$parameter = $_POST['parameter'];
exec("bash create.sh '$url' '$column_numbers_to_scrape' '$titles' '$pages' '$parameter'");
header('Location: /ssr/dynamic/scraping.php');
