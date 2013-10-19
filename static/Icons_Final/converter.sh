SAVEIFS=$IFS
IFS=$(echo -en "\n\b")
for i in `ls *.png`
do
	new_name=`expr "$i" : "\(.*\)\.png"`.jpg
	r=`echo "150+($RANDOM%100)"|bc`
	g=`echo "150+($RANDOM%100)"|bc`
	b=`echo "150+($RANDOM%100)"|bc`
	convert -background "rgb($r,$g,$b)" -flatten  -quality 50%  $i $new_name
done
IFS=$SAVEIFS
