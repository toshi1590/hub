for times in {1..5}
do
  for pages in {11..15} 
  do
    sed "37 s/[0-9]\+/$pages/" kimeuchi_zts3.php -i
  
    for rows in {1..10} 
    do
      docker stop chrome1 chrome2 chrome3
      docker restart selenium-hub ztsphp
      
      if [ $pages -eq 1 ]; then
        docker restart chrome1 
      elif [ $pages -eq 2 ]; then
        docker restart chrome1 chrome2
      else
        docker restart chrome1 chrome2 chrome3 
      fi
  
      sed "35 s/[0-9]\+/$rows/" kimeuchi_zts3.php -i
      sleep 10
      docker exec -it -w /var/www/html/csr ztsphp php kimeuchi_zts3.php > x
      grep '[0-9]\+,' x >> kimeuchi_zts3_result.txt
    done
  done
done
