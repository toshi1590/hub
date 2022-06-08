for i in {1..20}
do
  grep "^$i /" result.txt | grep '[0-9]\+\.[0-9]\+' -o > x;
  
  total=0;
  count=0;

  while read line
  do
    total=$(echo "$total + $line" | bc);
    count=$(($count + 1));
  done < x

  average=$(echo "scale=3; $total/$count" | bc);
  echo "page: " $i " / count: " $count " / average: " $average;
done
