#!/bin/env python
import math
from  data import *
num=0
eve_id=1

def get_num():
	global num
	num+=1
	return str(num)

#Adding all committees 
print '<span id = "allCommittees" >'
for event in events.iterkeys():
	print '<span id = "comittee'+event+'" style="cursor:pointer" onclick="getPage(\''+event+'\')">'
	print '<h1>'+event+'</h1>'
	print '<img id="eve'+str(eve_id)+'" src="'+comitteeLogos[event]+'"/>'
	eve_id+=1
	print '</span>'
print '</span>'
#Adding all commmittees end	

#images preload
print "<div style='display:none'>"
for logo in comitteeLogos.iterkeys():
	print "<img src='"+comitteeLogos[logo]+"'/>"
for i in events.iterkeys():
	for j in events[i].iterkeys():
		print i
		print j
		print "<img src='"+events[i][j]['image']+"'/>"
print "</div>"
#images preload ends	


#TODO comittee page

# Individual comittees' pages
for i in events.iterkeys():
	print "<table class='table'>"
	print "<tr>"
	print "<td>"
# create sidebar
	print "<span id='side"+i+"'>"
	print "<br /><br /><br />"
	for c in i:
		if (c == "_"):
			print "<span id='blockGen"+get_num()+"'><h1 style='font-size: 68px; margin: 5px;'>"+"&nbsp;"+"</h1></span><br />"
		else:
			print "<span id='blockGen"+get_num()+"'><h1 style='font-size: 68px; margin: 5px;'>"+c+"</h1></span><br />"
	print "</span>"
# sidebar ends
	print "</td>"
# page begins
	print "<td>"
	print "<span id='page"+i+"'>"
	print "<table>"
	count=0
	for event in events[i].iterkeys():
		if count%3==0:
			print "<tr>"
		print "<td><span id='blockGen"+get_num()+"' onclick='getPage(\""+event+"\")' style='cursor:pointer'><img src='"+events[i][event]['image']+"'/></span></td>"
		if count%3==2:
			print "</tr>"
		count+=1
	print "</table>"
	print "</span>"
# page ends
	print "</td>"
	print "</tr>"
	print "</table>"


# event page
for i in events.iterkeys():
	for event in events[i].iterkeys():

		#sidebar for the events page
		print	 "<table class='table' align='center' style='width: 70%;'>"
		print "<tr>"
		print "<td valign='top'>"

		print "<span id='side"+event+"'>"		
		print "<span id='blockGen"+get_num()+"'><img src='"+events[i][event]['image']+"' width='250px'/></span><br />"
		print "<span id='blockGen"+get_num()+"'>"+"<h1>"+event.replace('_',' ')+"</h1></span><br />"
		print "<span id='blockGen"+get_num()+"'>"+"<h3>Contact:"+events[i][event]['contact']+"</h3></span><br />"	
		#Tabs of content 
		tab_type=(events[i][event]).keys()
		# print tab_type
		for j in tab_type:
			if tab_type.index(j) > 1:
				print "<a id='blockGen"+get_num()+"' onclick='getPage(\""+event+"\",\""+event+'_'+j+'\")\'>'+j+"</a><br />"
	
		#Put other remaining blocks of keys !!! 
		print "</span>"
		print "</td>"
		print "<td>"
		# print "<span id='page"+event+"'>"
		#printing the tab of content
		print '<span id = "tabgroup'+event+'">'
		for j in tab_type:
			if tab_type.index(j) > 1:
				print '<span id = "tabs'+event+"_"+j+'">'
				print '<span id="blockGen'+get_num()+"\" style='width: 500px;'>"
	
				print events[i][event][j]
				print '</span>'
				print '</span>'
		print '</span>'
		# print "<span id='blockGen"+get_num()+"' style='width:500px;'>"
		# print "<h2>Description</h2>"
		# print events[i][event]['Description']
		# print "</span>"

		# TODO problem statement..etc
		# print "<hr/>"
		# print "<h3>Contact</h3>"
		# print "<p>"+events[i][event]['contact']+"</p>"

		print "</td>"
		print "</tr>"
		print "</table>"