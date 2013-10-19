#!/bin/bash
sed "s/:/=>/g" <data.py >data.rb
sed "s/http=>/http:/g" <data.rb>temp
mv temp data.rb
sed "s/coding=>/coding:/g" <data.rb>temp
mv temp data.rb
sed "s/\\\n/\n/g" <data.rb>temp
mv temp data.rb
cat header.html
cat events.rb >> data.rb
ruby data.rb
cat footer.html
rm data.rb
