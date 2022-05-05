for file in $@
do
  for i in {1..2}
  do
    time=$(docker exec -it ztsphp bash -c "cd for; php $file" | sed -n '$p')	  
    sed "/$(grep -o '[n|z]ts[0-8]' <(echo $file))/a $time" results.txt -i
  done
done
