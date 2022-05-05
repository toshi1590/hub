for file in $@
do
  for i in {1..5}
  do
    for pages in {1..8}
    do
      if [[ ${file%.php} = nts ]]; then
        docker stop chrome1 chrome2 chrome3 chrome4 chrome5 chrome6 chrome7 chrome8
        docker restart chrome1
      elif [[ ${file%.php} = zts ]]; then
        docker stop chrome1 chrome2 chrome3 chrome4 chrome5 chrome6 chrome7 chrome8
        
        for num in `seq 1 $pages`	
        do
          docker restart chrome$(echo $num)
        done
      elif [[ ${file%.php} = xpath ]]; then
        docker stop chrome1 chrome2 chrome3 chrome4 chrome5 chrome6 chrome7 chrome8
        
        for num in `seq 1 $pages`	
        do
          docker restart chrome$(echo $num)
        done
      fi

      docker restart selenium-hub 
      docker restart ztsphp
      sleep 15
      curl -X POST -d "pages=$pages" -w "time_total: %{time_total}\n" -s localhost:81/nzdis/$file > x
      typeset rows=$(wc -l x | grep -o '[0-9]\{1,\}')
      typeset time=`grep 'time_total' x | grep -o '[0-9].*'`
      sed "/${file%.php}${pages}/a $rows / $time" results.txt -i
    done
  done
done
