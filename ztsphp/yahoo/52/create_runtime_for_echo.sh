cat /dev/null > x

for i in {1..52}
do
  {  
    echo "if (\$pages >= $i) {"
    echo "  \$runtime$i->run(function(\$url){"
    echo "    \$html = file_get_contents(\$url);"
    echo "    \$dom = new DOMDocument();"
    echo "    @\$dom->loadHTML(\$html);"
    echo "    \$tds = \$dom->getElementsByTagName('td');"
    echo ""
    echo "    for (\$i = 0; \$i < \$tds->length; \$i++) {"
    echo "      echo \$tds->item(\$i)->nodeValue . PHP_EOL;"
    echo "    }"
    echo "  }, array(\$urls[$(echo $(($i - 1)))]));"
    echo "}"
    echo
    echo
  } >> x

done
