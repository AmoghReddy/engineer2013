sed "s/=>/:/g" <$1>temp
mv temp $1
sed 's/\\"/"/g' <$1>temp
mv temp $1
