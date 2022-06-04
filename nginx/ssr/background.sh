typeset letters=(1 2 3 4 5 6 7 8 9 a b c d e f)

{
  echo "background_colors = ["
  
  for i in {1..1000}
  do
    index1=$(($RANDOM % 15))
    index2=$(($RANDOM % 15))
    index3=$(($RANDOM % 15))
    index4=$(($RANDOM % 15))
    index5=$(($RANDOM % 15))
    index6=$(($RANDOM % 15))
  
    if [ $i = 1000 ]; then
      echo "  "\"\#${letters[${index1}]}${letters[${index2}]}${letters[${index3}]}${letters[${index4}]}${letters[${index5}]}${letters[${index6}]}\"
    else
      echo "  "\"\#${letters[${index1}]}${letters[${index2}]}${letters[${index3}]}${letters[${index4}]}${letters[${index5}]}${letters[${index6}]}\",
    fi
  done 

  echo "];"
} > background_colors.js
