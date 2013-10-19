for i in `ls`
do
	if [ "$i" != "$0" ]
	then
		new_name=`expr "$i" : "\(.*\)\.png"`.jpg
		convert -background white -flatten  -quality 20% $i $new_name
		gimp -i -b '(colorize "*.png" 180 50 0)' '(gimp-quit 0)' $new_name
	fi
done
