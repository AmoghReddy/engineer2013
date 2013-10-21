SAVEIFS=$IFS
IFS=$(echo -en "\n\b")
for i in `ls *.png`
do
	new_name=`expr "$i" : "\(.*\)\.png"`.jpg
	r=`echo "100+($RANDOM%100)"|bc`
	g=`echo "100+($RANDOM%50)"|bc`
	b=`echo "100+($RANDOM%20)"|bc`
	convert -background "rgb($r,$g,$b)" -flatten  -quality 30%  $i $new_name
	echo "sed 's/$i/$new_name/g' <data.py>temp"
	echo "mv temp data.py"
done
IFS=$SAVEIFS
