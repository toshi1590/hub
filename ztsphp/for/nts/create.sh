for i in $(seq 1 8)
do
  {
    printf "%s\n" "<?php"
    printf "%s\n" "\$start = microtime(true);"
    printf "\n"
  } > nts${i}.php

  for j in $(seq 1 $i)
  do
    {
      printf "%s\n" "function get_total$j(){"
      printf "%s\n" "  \$total = 0;"
      printf "\n" 
      printf "%s\n" "  for (\$i = 0; \$i < 30000000; \$i++) {"
      printf "%s\n" "    \$total+=\$i;"
      printf "%s\n" "  }"
      printf "\n"
      printf "%s\n" "  return \$total;"
      printf "%s\n" "}"
      printf "\n"
    }
  done >> nts${i}.php
  
  for j in $(seq 1 $i)
  do
    {
      printf "%s\n" "echo \"total${j}: \" . get_total${j}() . \"\n\";"
    }
  done >> nts${i}.php

  {
    printf "\n"
    printf "%s\n" "\$end = microtime(true);"
    printf "%s\n" "echo \$end - \$start;"
  } >> nts${i}.php 
done
