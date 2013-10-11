#!/bin/env python
import math
import random
from  data import *
num=0
description = 0
eve_id=1

def get_num():
	global num
	num+=1
	return str(num)

def get_color():
	return "background: rgba("+str(random.randint(200,250))+","+str(random.randint(200,250))+","+str(random.randint(200,250))+",0.8);"

def event_sidebar(event,i):
	print "<table class='table' align='center' style='width: 90%;'>"
	print "<tr>"
	print "<td valign='top' style='width: 25%'>"

	print "<span id='side"+event+"'>"		
	if (events[i][event]['image'] == 'engineer.gif'):
		print "<span id='blockGen"+get_num()+"'><button class='button1' style='border-radius: 0%;width: 250px;height: 250px;"+get_color()+"'><h1 style='text-align:center;font-family: acens;'>"+event.replace('_',' ')+"</h1></button></span><br />"	
	else:
		print "<span id='blockGen"+get_num()+"' style='"+get_color()+"'><img src='"+events[i][event]['image']+"' width='250px'/></span><br />"
	# print "<span id='blockGen"+get_num()+"' style='width:250px;'>"+"<h1>"+event.replace('_',' ')+"</h1></span><br />"
		# <span id='blockGen'+get_num()+ onclick='getPage("TEvent2")'><button class="button1" style="border-radius: 0%;width: 400px;height: 400px;margin-top: 90px;background-color:#B3B5B5"><h1 style="text-align:center;">MegaPixel</h1></div> </span>
		# print "<span id='blockGen"+get_num()+"'><button src='"+events[i][event]['image']+"' width='250px'/></span><br />""
	#Tabs of content in side bar !!
	tab_type=(events[i][event]).keys()
	# print tab_type
	for j in tab_type:
		if (j != "image" and j != "contact"):
			print "<span id='blockGen"+get_num()+"' style='width:240px;padding: 3px;padding-left: 5px;padding-right: 5px;cursor: pointer;"+get_color()+"' onclick='getPage(\""+event+"\",\""+event+'_'+j+'\")\'><b>'+j.replace('_',' ')+"</b></span>"
		# print tab_type
		# print event
		# if event == "Proteus":
		# print aiufibof
			# print j
			# print lqn;
	print "<span id='blockGen"+get_num()+"' style='width:240px;padding: 3px;"+get_color()+"'>"+"<b>Contact:</b> "+events[i][event]['contact']+"</span>"
	print "</span>"
	print "</td>"

def event_description(event,i):
	print "<td style='width: 75%'>"
		# print "<span id='page"+event+"'>"
		#printing the tab of content
	print '<span id = "tabgroup'+event+'">'
	tab_type=(events[i][event]).keys()
	for j in tab_type:
		# if tab_type.index(j) > 1:
		if (j != "image" and j != "contact"):
			print '<span id = "tabs'+event+"_"+j+'">'
			print '<span id="blockGen'+get_num()+"\" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 10px;'>"	
			description = events[i][event][j].replace('<p>',' ')
			description = description.replace('</p>','<br/>')
			description = description.replace('<br/>','</span><span id="blockGen'+get_num()+'" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 10px;" >')
			print description
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
	print "<span id='side"+i+"'>"
	print "<br /><br /><br />"
	for c in i:
		if (c == "_"):
			print "<span id='blockGen"+get_num()+"'><h1 style='font-size: 68px; margin: 5px;'>"+"&nbsp;"+"</h1></span><br />"
		else:
			print "<span id='blockGen"+get_num()+"'><h1 style='font-size: 68px; margin: 5px;'>"+c+"</h1></span><br />"
	print "</span>"

def commitee_page(i):
	print "<span id='page"+i+"'>"
	print "<table>"
	count=0
	for event in events[i].iterkeys():
		if count%3==0:
			print "<tr>"
		if (events[i][event]['image'] == 'engineer.gif'):
			print "<td><button id='blockGen"+get_num()+"' class='button1' onclick='getPage(\""+event+"\")' style='cursor:pointer;border-radius: 0%;width: 250px;height: 250px;margin-top: 0px;"+get_color()+"'><h1 style='text-align:center;font-family: acens;'>"+event.replace('_'," ")+"</h1></td>"			
		else:
			print "<td><span id='blockGen"+get_num()+"' onclick='getPage(\""+event+"\")' style='cursor:pointer;width: 250px;"+get_color()+"'><img src='"+events[i][event]['image']+"'/></span></td>"
			# print "<td><span id='blockGen"+get_num()+"' onclick='getPage(\""+event+"\")' style='cursor:pointer'><img src='"+events[i][event]['image']+"'/></span></td>"
		if count%3==2:
			print "</tr>"
		count+=1
	print "</table>"
	print "</span>"


#Adding all committees 
print '<span id = "allCommittees" >'
for event in events.iterkeys():
	if event != "Workshops" and event != "Technites" and event != "TechSpeak" :
		if event == "BluePrint":
			print '<span id = "comittee'+event+'" style="cursor:pointer;'+get_color()+'" onclick="getPage(\'Blue_Print\')">'
		else:
			print '<span id = "comittee'+event+'" style="cursor:pointer;'+get_color()+'" onclick="getPage(\''+event+'\')">'
		# print '<h1>'+event+'</h1>'
		print '<img id="eve'+str(eve_id)+'" src="'+comitteeLogos[event]+'"/>'
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