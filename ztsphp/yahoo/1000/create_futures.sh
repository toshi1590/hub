cat /dev/null > x

for i in $(seq 1000)
do
  {    
    echo "if (\$pages >= $i) {"
    echo "  \$data = array_merge(\$data, \$future${i}->value());" >> x
    echo "}"
    echo
  } >> x
done

{
  echo
  echo "for (\$i = 0; \$i < count(\$data); \$i++) {"
  echo "  echo \$data[\$i] . PHP_EOL;"
  echo "}"
} >> x
