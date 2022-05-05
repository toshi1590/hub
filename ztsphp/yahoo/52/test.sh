docker stop chrome1 chrome2 chrome3 chrome4 chrome5 chrome6 chrome7 chrome8

for file in $@
do
  //for i in `seq 10`
  //do
    for pages in {1..23}
    do
      curl -X POST -d "pages=$pages" -w "time_total: %{time_total}\n" localhost:81/yahoo/52/$file > x
      cat x
      echo "----------------------------------------------------------------------------------------------------------------------------------------------"
      time=$(grep 'time_total:' x)
      rows=$(wc -l x)
      sed "/${file%.php}/a $rows / $time" results.txt -i
    done
  //done
done
