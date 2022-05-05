for file in $@
do
  for i in {1..3}
  do
    for pages in {1..8}
    do
      restart_containers 
      sleep 15
      curl -X POST -d "pages=$pages" -w "time_total: %{time_total}\n" -s localhost:81/pages/$file > x
      typeset rows=$(wc -l x | grep -o '[0-9]\{1,\}')
      typeset time=`grep 'time_total' x | grep -o '[0-9].*'`
      sed "/${file%.php}${pages}/a $rows / $time" results.txt -i
    done
  done
done
