{
  echo "<?php"
  echo "\$url = '$1';"
  echo "\$column_numbers_to_scrape = $2;"
  echo "\$titles = $3;"
  echo "\$pages = $4;"
  echo "\$parameter = '$5';"
  echo "\$urls = [];"
  echo "\$data = [];"
  echo ""
  echo "for (\$i = 1; \$i <= \$pages; \$i++) {"
  echo "  \$re1 = \"/\$parameter=[0-9]+/\";"
  echo "  array_push(\$urls, preg_replace(\$re1, \"\${parameter}=\$i\", \$url));"
  echo "}"
  echo ""
  echo "for (\$i = 1; \$i <= \$pages; \$i++) {"
  echo "  \${'runtime'.\$i} = new \parallel\Runtime();"
  echo "}"
  echo ""
  echo "array_push(\$data, \$titles);"
  echo ""
  echo ""
} > scraping.php


for i in `seq $4`
do
  {
    echo "if (\$pages >= ${i}) {"
    echo "  \$future${i} = \$runtime${i}->run(function(\$url, \$column_numbers_to_scrape){"
    echo "    \$html = file_get_contents(\$url);"
    echo "    \$dom = new DOMDocument();"
    echo "    @\$dom->loadHTML(\$html);"
    


    echo "    \$xpath = new DOMXPath(\$dom);"
    echo "    \$trs = \$xpath->query('//tbody/tr');"
    echo "    "
    echo "    \$data = [];"
    echo "    "
    echo "    for (\$i = 1; \$i <= \$trs->length; \$i++) {"
    echo "      \$tr_tds = [];"
    echo "      "
    echo "      for (\$j = 0; \$j < count(\$column_numbers_to_scrape); \$j++) {"
    echo "        array_push(\$tr_tds, \$xpath->query(\"//tbody/tr[\$i]/td[\$column_numbers_to_scrape[\$j]]\")->item(0)->nodeValue);"
    echo "      }"
    echo "      "
    echo "      array_push(\$data, \$tr_tds);"
    echo "    }"
    echo "    "



    echo "    return \$data;"
    echo "  }, array(\$urls[$(echo $(($i - 1)))], \$column_numbers_to_scrape));"
    echo "}"
    echo
    echo
  } >> scraping.php
done


for i in $(seq $4)
do
  {    
    echo "if (\$pages >= $i) {"
    echo "  \$data = array_merge(\$data, \$future${i}->value());"
    echo "}"
    echo
  } >> scraping.php
done


{
  echo "echo json_encode(\$data);"
} >> scraping.php
