for i in {1..20}
do
  typeset url='https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=1';
  typeset column_numbers_to_scrape='[1,2]';
  typeset titles='["name","deal","dekidaka","baibaidaikinn"]';
  typeset rows=50;
  typeset xpath_of_a='/html/body/div/div[3]/main/div/div[2]/div[1]/section/div/div[3]/div/table/tbody/tr[1]/td[1]/a';
  typeset xpaths_to_scrape_in_a_new_page='["/html/body/div/div[3]/main/div/div/div[1]/div[2]/div[1]/section[1]/div/ul/li[5]/dl/dd/span[1]/span/span[1]","/html/body/div/div[3]/main/div/div/div[1]/div[2]/div[1]/section[1]/div/ul/li[6]/dl/dd/span[1]/span/span[1]"]';
  typeset parameter='page';
  typeset pages=$i;
  typeset number_of_hrefs=$(expr $rows \* $pages);

  . create.sh $url $column_numbers_to_scrape $titles $rows $xpath_of_a $xpaths_to_scrape_in_a_new_page $parameter $pages $number_of_hrefs

  for j in {1..5}
  do
    docker exec -it -w /var/www/html/ssr ztsphp php scraping.php;
  done
done
