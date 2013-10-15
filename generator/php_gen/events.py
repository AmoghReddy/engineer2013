#!/bin/env python
import math
import random
from  data import *
num=0
description = 0
eve_id=1
#not single participation
single_event_committees=["Blue_Print","Mockstock","Tech_Speak"]
no_registrations=["Sky_Lanterns","Tech_Speak","Blue_Print","Psychedelic_Room","Blitzkrieg","Megapixel","Dance_Dance_Revolution","Arcade_Room","Mockstock","Case_Study_challenge"]
def get_num():
	global num
	num+=1
	return str(num)

def get_color():
	return "background: rgba("+str(random.randint(200,250))+","+str(random.randint(200,250))+","+str(random.randint(200,250))+",0.8);"

def event_sidebar(event,i):
	print "<table class='table' align='center' style='width: 80%;'>"
	print "<tr>"
	print "<td valign='top' style='width: 30%'>"

	print "<span id='side"+event+"'>"		
	if (events[i][event]['image'] == 'engineer.gif'):
		print "<span id='blockGen"+get_num()+"'><button class='button1' style='border-radius: 0%;width: 250px;height: 250px;"+get_color()+"'><h1 style='text-align:center;font-family: acens;'>"+event.replace('_',' ')+"</h1></button></span><br />"	
	else:
		print "<span id='blockGen"+get_num()+"' style='"+get_color()+"'><img src=\"static"+events[i][event]['image']+"\" width='250px'/></span><br />"
		# print events[i]
	if events[i] != "Workshops" and event not in no_registrations:
			#if int(newHash[event]["team_members"]) > 1:
			if False:
				print "<span id='blockGen"+get_num()+"' class=\"register\" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;"+get_color()+"' onclick='open_tab(\""+newHash[event]['id']+"\",\""+event+"\")'><h3>"+"Register"+"</h3></span>"
			else:
				print "<span id='blockGen"+get_num()+"' class=\"register\" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;"+get_color()+"' onclick='register_single_event("+newHash[event]['id']+")'><h3>"+"Register"+"</h3></span>"
	# print "<span id='blockGen"+get_num()+"' style='width:250px;'>"+"<h1>"+event.replace('_',' ')+"</h1></span><br />"
		# <span id='blockGen'+get_num()+ onclick='getPage("TEvent2")'><button class="button1" style="border-radius: 0%;width: 400px;height: 400px;margin-top: 90px;background-color:#B3B5B5"><h1 style="text-align:center;">MegaPixel</h1></div> </span>
		# print "<span id='blockGen"+get_num()+"'><button src='"+events[i][event]['image']+"' width='250px'/></span><br />""
	#Tabs of content in side bar !!
	tab_type=(events[i][event]).keys()
	# print tab_type
	for j in tab_type:
		if (j != "image" and j != "contact"):
			print "<span id='blockGen"+get_num()+"' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;"+get_color()+"' onclick='getPage(\""+event+"\",\""+event+'_'+j+'\")\'><h3>'+j+"</h3></span>"
		# print tab_type
		# print event
		# if event == "Proteus":
		# print aiufibof
			# print j
			# print lqn;
	print "<span id='blockGen"+get_num()+"' style='width:220px;padding: 15px;border-radius:20px;"+get_color()+"'>"+"<h3>Contact: "+events[i][event]['contact']+"</h3></span>"
	print "</span>"
	print "</td>"

def event_description(event,i):
	print "<td style='width: 70%'>"
		# print "<span id='page"+event+"'>"
		#printing the tab of content
	print '<span id = "tabgroup'+event+'">'
	tab_type=(events[i][event]).keys()
	for j in tab_type:
		# if tab_type.index(j) > 1:
		if (j != "image" and j != "contact"):
			print '<span id = "tabs'+event+"_"+j+'">'
			print '<span id="blockGen'+get_num()+"\" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>"
			description = events[i][event][j].replace('<p>',' ')
			description = description.replace('<ul>',' ')
			description = description.replace('</ul>',' ')
			description = description.replace('<li>',' ')
			description = description.replace('</li>',' ')
			description = description.replace('</p>','<br/>')
			description = description.replace('</br />','<br/>')
			#THERE IS  MISTAKE HERE AS ALL THE <BR/> TAG WILL BE REPLACED WITH SAME SPAN TAG !!!!!! 
			# if event == "Kode_Kombat":
			# 	print description
			# 	if description.find("<br/>"):
			# 		print error
			if description.find("<br/>"):
				# print something
				description = description.replace('<br/>','</span><span id="blockGen'+get_num()+'" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >')
			print '</span>'
			print '<span id="blockGen'+get_num()+'" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >'
			print description
			print '</span>'
			print '</span>'

	if events[i] != "Workshops" and event not in no_registrations:
			print '<span id = "tabs'+newHash[event]["id"]+"_"+'register">'
			print '<span id="blockGen'+get_num()+"\" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>"
			#if (int(newHash[event]["team_members"])) > 1:
			if False:
				k = int(newHash[event]["team_members"])
				l=0
				print "<form id=register_"+newHash[event]["id"]+" onsubmit=\"return false;\">"
				print "{% csrf_token %}"
				print "<input name='team_name' placeholder='Team Name'><br/>"
				print "<input type='hidden' name='event_id' value='"+newHash[event]["id"]+"'><br/>"
				while(l < k-1):
					print "<input placeholder='Registered member email' name='custom_"+str(l)+"'><br/>"
					l+=1
				print "<button style='height: 30px;' class='btn btn-success' onclick='register_team_event(\""+event+"\",\""+newHash[event]["id"]+"\");'>Create Team</button><br />"
				print "<span id='register_team'></span>"
				print '</form>'
			print '</span>'
			print '</span>'
	print '</span>'
	# print "<span id='blockGen"+get_num()+"' style='width:500px;'>"
	# print "<h2>Description</h2>"
	# print events[i][event]['Description']
	# print "</span>"
	print "</td>"
	print "</tr>"
	print "</table>"

def commitee_sidebar(i):
	if i not in  single_event_committees:
		print "<span id='side"+i+"'>"
		print "<br /><br /><br />"
		for c in i:
			if (c == "_"):
				print "<span id='blockGen"+get_num()+"'><h1 style='font-size: 68px; margin: 5px;'>"+"&nbsp;"+"</h1></span><br />"
			else:
				print "<span id='blockGen"+get_num()+"'><h1 style='font-size: 68px; margin: 5px;'>"+c.upper()+"</h1></span><br />"
		print "</span>"

def commitee_page(i):
	if i not in  single_event_committees:
		print "<span id='page"+i+"'>"
		print "<table>"
		count=0
		for event in events[i].iterkeys():
			if count%3==0:
				print "<tr>"
			if (events[i][event]['image'] == 'engineer.gif'):
				print "<td><button id='blockGen"+get_num()+"' class='button1' onclick='getPage(\""+event+"\")' style='cursor:pointer;border-radius: 0%;width: 250px;height: 250px;margin-top: 0px;"+get_color()+"'><h1 style='text-align:center;font-family: acens;'>"+event.replace('_'," ")+"</h1></td>"			
			else:
				print "<td><span id='blockGen"+get_num()+"' onclick='getPage(\""+event+"\")' style='cursor:pointer;width: 250px;"+get_color()+"'><img src='static"+events[i][event]['image']+"'/></span></td>"
				# print "<td><span id='blockGen"+get_num()+"' onclick='getPage(\""+event+"\")' style='cursor:pointer'><img src='"+events[i][event]['image']+"'/></span></td>"
			if count%3==2:
				print "</tr>"
			count+=1
		print "</table>"
		print "</span>"


#Adding all committees 
print '<span id = "allCommittees" >'
for event in events.iterkeys():
	if event != "Workshops" and event != "Technites" and event != "Tech_Speak" and event != "":
		print '<span id = "comittee'+event+'" style="cursor:pointer;'+get_color()+'" onclick="getPage(\''+event+'\')">'
		# print '<h1>'+event+'</h1>'
		print '<img id="eve'+str(eve_id)+'" src="static'+comitteeLogos[event]+'"/>'
		eve_id+=1
		print '</span>'
print '</span>'
#Adding all commmittees end	

#images preload
# print "<div style='display:none'>"
# for logo in comitteeLogos.iterkeys():
# 	print "<img src='"+comitteeLogos[logo]+"'/>"
# for i in events.iterkeys():
# 	for j in events[i].iterkeys():
# 		print i
# 		print j
# 		print "<img src='"+events[i][j]['image']+"'/>"
# print "</div>"
#images preload ends	


#TODO comittee page

# Individual comittees' pages
for i in events.iterkeys():
	print "<table class='table'>"
	print "<tr>"
	print "<td>"
# create sidebar
	commitee_sidebar(i)
# sidebar ends
	print "</td>"
# page begins
	print "<td valign = 'top' >"
	commitee_page(i)
# page ends
	print "</td>"
	print "</tr>"
	print "</table>"


# event page
for i in events.iterkeys():
	for event in events[i].iterkeys():

		#sidebar for the events page
		event_sidebar(event,i)


		#Put other remaining blocks of keys !!! 
		event_description(event,i)
