restart_containers

for file in $@
do
  for i in {1..3}
  do
    docker exec -it ztsphp bash -c "cd 900000aaaa/time_command; time php $file;" > x
    cat x
    echo
    echo
    echo
    time=$(grep 'real' x)

    if [[ ${file%.php} = "nts" ]]; then
      sed "/nts/a $time" results.txt -i
      sed '/ntszts/,$d' results.txt -i
      echo "ntszts" >> results.txt
    elif [[ ${file%.php} =~ "zts2" ]]; then
      sed "/zts2/a $time" results.txt -i
    elif [[ ${file%.php} =~ "zts3" ]]; then
      sed "/zts3/a $time" results.txt -i
    elif [[ ${file%.php} =~ "zts4" ]]; then
      sed "/zts4/a $time" results.txt -i
    elif [[ ${file%.php} =~ "zts5" ]]; then
      sed "/zts5/a $time" results.txt -i
    elif [[ ${file%.php} =~ "zts6" ]]; then
      sed "/zts6/a $time" results.txt -i
    fi
  done
done

. get_ave.sh results.txt
