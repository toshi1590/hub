cat /dev/null > x

for i in {1..10000}
do
  {
    echo "if (\$pages >= ${i}) {"
    echo "  \$future${i} = \$runtime${i}->run(function(\$url){"
    echo "    \$html = file_get_contents(\$url);"
    echo "    \$dom = new DOMDocument();"
    echo "    @\$dom->loadHTML(\$html);"
    echo "    \$tds = \$dom->getElementsByTagName('td');"
    echo "    \$data = [];"
    echo ""
    echo "    for (\$i = 0; \$i < \$tds->length; \$i++) {"
    echo "      array_push(\$data, \$tds->item(\$i)->nodeValue);"
    echo "    }"
    echo ""
    echo "    return \$data;"
    echo "  }, array(\$url));"
    echo "}"
    echo
    echo
  } >> x
done
