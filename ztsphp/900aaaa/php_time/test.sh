restart_containers

cat /dev/null > x

for file in $@
do
  for i in {1..5}
  do
    docker exec -it ztsphp bash -c "cd 900aaaa/php_time; php $file;" | grep '^[0-9]' >> x
  done
    
  sed "/${file%.php}/r x" results.txt -i
  sed '/ntszts/,$d' results.txt -i
  echo "ntszts" >> results.txt
  cat /dev/null > x
done

. get_ave.sh results.txt
