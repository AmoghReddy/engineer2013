$num=0
description = 0
eve_id=1
#not single participation
$single_event_committees=["Blue_Print","Mockstock","Tech_Speak"]
$no_registrations=["Sky_Lanterns","Tech_Speak","Psychedelic_Room","Blitzkrieg","Megapixel","Dance_Dance_Revolution","Arcade_Room","Mockstock","Case_Study_challenge"]
def get_num()
	$num+=1
	return $num.to_s
end

def get_color()
	#asdgads
	return "background: rgba("+(200+rand(50)).to_s+","+(200+rand(50)).to_s+","+(200+rand(50)).to_s+",0.8);"
end

def event_sidebar(event,i)
	puts "<table class='table' align='center' style='width: 80%;'>"
	puts "<tr>"
	puts "<td valign='top' style='width: 30%'>"

	puts "<span id='side"+event+"'>"		
	if ($events[i][event]['image'] == 'engineer.gif')
		event_temp=event.dup
		event_temp.gsub! "_", " "
		puts "<span id='blockGen"+get_num()+"'><button class='button1' style='border-radius: 0%;width: 250px;height: 250px;"+get_color()+"'><h1 style='text-align:center;font-family: acens;'>"+event_temp+"</h1></button></span><br />"	
	else
		puts "<span id='blockGen"+get_num()+"' style='"+get_color()+"'><img src=\"static"+$events[i][event]['image']+"\" width='250px'/></span><br />"
	end

	if $events[i] != "Workshops" and not $no_registrations.include?(event)
			if $newHash[event]["team_members"].to_i > 1
				puts "<span id='blockGen"+get_num()+"' class=\"register\" style='width:220px;padding: 3px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;"+get_color()+"' onclick='generateTeamRegForm(\""+event+"\")'><b>"+"Register"+"</b></span>"
			else
				puts "<span id='blockGen"+get_num()+"' class=\"register\" style='width:220px;padding: 3px;padding-left: 15px;padding-right: 15px;cursor: pointer;"+get_color()+"' onclick='register_single_event("+$newHash[event]['id']+")'><b>"+"Register"+"</b></span>"
			end
	end
	#Tabs of content in side bar !!
	#tab_type=($events[i][event]).keys()
	# puts tab_type
	#for j in tab_type:
	$events[i][event].each do |j,value|
		if (j != "image" and j != "contact")
			puts "<span id='blockGen"+get_num()+"' style='width:220px;padding: 3px;padding-left: 15px;padding-right: 15px;cursor: pointer;"+get_color()+"' onclick='getPage(\""+event+"\",\""+event+'@'+j+'\")\'><b>'+j+"</b></span>"
		end
	end

	puts "<span id='blockGen"+get_num()+"' style='width:220px;padding: 3px;padding-left: 15px;padding-right: 15px;"+get_color()+"'>"+"<b>Contact: "+$events[i][event]['contact']+"</b></span>"
	puts "</span>"
	puts "</td>"
end

def event_description(event,i)
	puts "<td style='width: 70%'>"
		#putsing the tab of content
	puts '<span id = "tabgroup'+event+'">'
	#tab_type=($events[i][event]).keys()
	#for j in tab_type:
	$events[i][event].each do |j,value|
		# if tab_type.index(j) > 1:
		if (j != "image" and j != "contact")
			puts '<span id = "tabs'+event+"@"+j+'">'
			puts '<span id="blockGen'+get_num()+"\" style='width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;'>"
			description_ = $events[i][event][j].dup
			description_.gsub! "<p>"," "
			description_.gsub! "</p>","<br/>"
			description_.gsub! "<ul>"," "
			description_.gsub! "</ul>"," "
			description_.gsub! "<li>"," "
			description_.gsub! "</li>"," "
			description_.gsub! "</ br/>","<br/>"
			#THERE IS  MISTAKE HERE AS ALL THE <BR/> TAG WILL BE REPLACED WITH SAME SPAN TAG !!!!!! 
			# if event == "Kode_Kombat":
			# 	puts description
			# 	if description.find("<br/>"):
			# 		puts error
				# puts something
			description_.gsub! '<br/>','</span><span id="blockGen'+get_num()+'" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >'

			puts '</span>'
			puts '<span id="blockGen'+get_num()+'" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >'
			puts description_
			puts '</span>'
			puts '</span>'
		end
	end
	puts '</span>'
	puts "</td>"
	puts "</tr>"
	puts "</table>"
end

def commitee_sidebar(i)
	if not $single_event_committees.include?(i)
		puts "<span id='side"+i+"'>"
		i.split("").each do |c|
			if (c == "_")
				puts "<span id='blockGen"+get_num()+"'><h1 style='font-size: 68px; margin: 5px;'>"+"&nbsp;"+"</h1></span><br/>"
			else
				puts "<span id='blockGen"+get_num()+"'><h1 style='font-size: 68px; margin: 5px;'>"+c.upcase+"</h1></span><br/>"
			end
		end
	end
	puts "</span>"
end

def commitee_page(i)
	if not $single_event_committees.include?(i)
		puts "<span id='page"+i+"'>"
		puts "<table>"
		count=0
		$events[i].each do |event,value|
			if count%4==0
				puts "<tr>"
			end
			if ($events[i][event]['image'] == 'engineer.gif')
				event_temp=event.dup
				event_temp.gsub! "_", " "
				puts "<td><button id='blockGen"+get_num()+"' class='button1' onclick='getPage(\""+event+"\")' style='cursor:pointer;border-radius: 0%;width: 250px;height: 250px;margin-top: 0px;"+get_color()+"'><h1 style='text-align:center;font-family: acens;'>"+event_temp+"</h1></td>"			
			else
				if event == "Product_Design_Challenge"
					puts "<td><span id='blockGen"+get_num()+"' onclick='getPage(\"Green_Inovation_Challenge\")' style='cursor:pointer;width: 250px;"+get_color()+"'><img src='static"+$events[i][event]['image']+"'/></span></td>"
				else
					puts "<td><span id='blockGen"+get_num()+"' onclick='getPage(\""+event+"\")' style='cursor:pointer;width: 250px;"+get_color()+"'><img src='static"+$events[i][event]['image']+"'/></span></td>"
				end
				# puts "<td><span id='blockGen"+get_num()+"' onclick='getPage(\""+event+"\")' style='cursor:pointer'><img src='"+$events[i][event]['image']+"'/></span></td>"
			end
			if count%4==3
				puts "</tr>"
			end
			count+=1
		end
		puts "</table>"
		puts "</span>"
	end
end


#Adding all committees 
puts '<span id = "allCommittees" >'
$events.each do |event,value|
	if event != "Workshops" and event != "Technites" and event != "Tech_Speak" and event != ""
		puts '<span id = "comittee'+event+'" style="cursor:pointer;'+get_color()+'" onclick="getPage(\''+event+'\')">'
		# puts '<h1>'+event+'</h1>'
		puts '<img id="eve'+eve_id.to_s+'" src="static'+comitteeLogos[event]+'"/>'
		eve_id+=1
		puts '</span>'
	end
end
puts '</span>'
#Adding all commmittees end	

#images preload
# puts "<div style='display:none'>"
# for logo in comitteeLogos.iterkeys():
# 	puts "<img src='"+comitteeLogos[logo]+"'/>"
# for i in $events.iterkeys():
# 	for j in $events[i].iterkeys():
# 		puts i
# 		puts j
# 		puts "<img src='"+$events[i][j]['image']+"'/>"
# puts "</div>"
#images preload ends	


#TODO comittee page

# Individual comittees' pages
$events.each do |i,value|
	puts "<table class='table'>"
	puts "<tr>"
	puts "<td>"
# create sidebar
	commitee_sidebar(i)
# sidebar ends
	puts "</td>"
# page begins
	puts "<td valign = 'top' >"
	commitee_page(i)
# page ends
	puts "</td>"
	puts "</tr>"
	puts "</table>"
end


# event page
$events.each do |i,value|
	$events[i].each do |event,value|

		#sidebar for the $events page
		event_sidebar(event,i)


		#Put other remaining blocks of keys !!! 
		event_description(event,i)
	end
end