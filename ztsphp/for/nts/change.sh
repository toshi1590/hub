for file in $@
do
  sed 's/[0-9]\{5,\}/300000000/' $file -i
done
