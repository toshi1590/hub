for times in {1..5}
do
  for pages in {1..15} 
  do
    sed "37 s/[0-9]\+/$pages/" kimeuchi_zts5.php -i
  
    for rows in {1..15} 
    do
      docker stop chrome1 chrome2 chrome3 chrome4 chrome5
      docker restart selenium-hub ztsphp
      
      if [ $pages -eq 1 ]; then
        docker restart chrome1 
      elif [ $pages -eq 2 ]; then
        docker restart chrome1 chrome2
      elif [ $pages -eq 3 ]; then
        docker restart chrome1 chrome2 chrome3
      elif [ $pages -eq 4 ]; then
        docker restart chrome1 chrome2 chrome3 chrome4
      else
        docker restart chrome1 chrome2 chrome3 chrome4 chrome5
      fi
  
      sed "35 s/[0-9]\+/$rows/" kimeuchi_zts5.php -i
      sleep 10
      docker exec -it -w /var/www/html/csr ztsphp php kimeuchi_zts5.php > x
      grep '[0-9]\+,' x >> kimeuchi_zts5_result.txt
    done
  done
done
