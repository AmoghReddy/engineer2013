$a=[]
$events.each do |i,value|
	$events[i].each do |event,value|
	$a.push(event.dup)
	end
end
$a.sort!
$a.each do |i|
	e=i.dup
	e.gsub! '_',' '
	puts '<li data-filtertext="'+e+'"><a href="'+i+'.html">'+e+'</a></li>'
end

