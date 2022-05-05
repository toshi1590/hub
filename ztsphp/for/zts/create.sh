for i in $(seq 1 8)
do
  {
    printf "%s\n" "<?php"
    printf "%s\n" "\$start = microtime(true);"
    printf "\n"
  } > zts${i}.php

  for j in $(seq 1 $i)
  do
    {
      printf "%s\n" "\$runtime${j} = new \parallel\Runtime();"
    }
  done >> zts${i}.php

  for j in $(seq 1 $i)
  do
    {
      printf "\n"
      printf "%s\n" "\$future${j} = \$runtime${j}->run(function(){"
      printf "%s\n" "  \$total = 0;"
      printf "%s\n" ""
      printf "%s\n" "  for (\$i = 0; \$i < 30000000; \$i++) {"
      printf "%s\n" "    \$total+=\$i;"
      printf "%s\n" "  }"
      printf "%s\n" ""
      printf "%s\n" "  return \$total;"
      printf "%s\n" "});"
      printf "\n"
    }
  done >> zts${i}.php

  for j in $(seq 1 $i)
  do
    {
      printf "%s\n" "echo \"future${j}: \" . \$future${j}->value() . \"\n\";"
    }
  done >> zts${i}.php

  {
    printf "\n"
    printf "%s\n" "\$end = microtime(true);"
    printf "%s\n" "echo \$end - \$start;"
  } >> zts${i}.php
done
