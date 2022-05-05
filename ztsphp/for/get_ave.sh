for file in $@
do
  echo $file
  
  section=0
  
  while read line
  do
    if [[ $line =~ "nts" ]] || [[ $line =~ "zts" ]]; then
      if test $section -gt 0; then
        ave=`echo "scale = 3; $total / $row" | bc`
        echo "ave in section$section: $ave"
      fi
  
      total=0
      row=0
      section=`echo $(($section + 1))`
    else
      time=$(echo $line | grep -o "[0-9]\+\.[0-9]\+")
      total=`echo "$total + $time" | bc` 
      row=`echo  $(($row + 1))`
    fi
  done < $file

  echo
done
