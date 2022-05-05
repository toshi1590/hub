{
  echo '$urls = ['
  for i in {1..52}
  do
    echo "  \"https://finance.yahoo.co.jp/stocks/ranking/up?market=all&term=daily&page=$i\","
  done
  echo '];'
} > x
