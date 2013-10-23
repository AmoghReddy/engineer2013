#!/bin/bash
rm app/*
sed "s/:/=>/g" <data.py >data.rb
sed "s/http=>/http:/g" <data.rb>temp
mv temp data.rb
sed "s/coding=>/coding:/g" <data.rb>temp
mv temp data.rb
sed "s/\\\n/\n/g" <data.rb>temp
mv temp data.rb
#cat event_list.rb >> data.rb
cat event_html.rb>> data.rb
ruby data.rb
rm data.rb
for i in `ls app/`
do
i=app/$i
sed "s/=>/:/g" <$i>temp
mv temp $i
sed 's/\\"/"/g' <$i>temp
mv temp $i
sed 's/\\//g' <$i>temp
mv temp $i
done
cp -R app/ /var/www/engineer/www/
