for file in $@
do
  for i in {1..3}
  do
    restart_containers
    sleep 15
    docker exec -it ztsphp bash -c "cd 900nzdis; time php $file;" > x
    cat x
    echo
    echo
    echo
    time=$(grep 'real' x)
  
    if [[ $file =~ "nts" ]]; then
      sed "/nts/a $time" results.txt -i
      sed '/ntszts/,$d' results.txt -i
      echo "ntszts" >> results.txt
    elif [[ $file =~ "zts2" ]]; then
      sed "/zts2/a $time" results.txt -i
    elif [[ $file =~ "zts3" ]]; then
      sed "/zts3/a $time" results.txt -i
    elif [[ $file =~ "zts4" ]]; then
      sed "/zts4/a $time" results.txt -i
    elif [[ $file =~ "zts5" ]]; then
      sed "/zts5/a $time" results.txt -i
    elif [[ $file =~ "zts6" ]]; then
      sed "/zts6/a $time" results.txt -i
    else
      printf "not correct file"
    fi
  done
done
