#!/bin/env python
import math
from  data import *
block=0

#images preload


#images preload ends

# ndividual comittees' pages
for i in events.iterkeys():
	print "<table>"
	print "<tr>"
	print "<td>"
# create sidebar
	print "<span id='side"+i+"'>"
	print "<br /><br /><br />"
	for c in i:
		print "<span id='blockGen"+str(block)+"'><h1 style='font-size: 68px; margin: 5px;'>"+c+"</h1></span><br />"
		block+=1
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
		print "<td><span id='blockGen"+str(block)+"' onclick='getPage(\""+event+"\")'><img src='"+events[i][event][0]+"'/></span></td>"
		if count%3==2:
			print "</tr>"
		block+=1
	print "</table>"
	print "</span>"
# page ends
	print "</td>"
	print "</tr>"
	print "</table>"


# event page
for i in events.iterkeys():
	for event in events[i].iterkeys():
		print "<span id='page"+event+"'>"
		print "<table>"
		print "<tr>"
		print "<td valign='top'><span id='blockGen"+str(block)+"'><img src='"+events[i][event][0]+"'/></span></td>"
		block+=1
		print "<td>"
		print "<span id='blockGen"+str(block)+"' style='width:500px;'>"

		print "<h1>"+event+"</h1><hr />"
		print "<h2>Description</h2>"
		print "<p>"+events[i][event][1]+"</p>"
		# TODO problem statement..etc
		print "<hr/>"
		print "<h3>Contact</h3>"
		print "<p>"+events[i][event][2]+"</p>"

		print "</span>"
		print "</td>"
		print "</tr>"
		print "</table>"
		print "</span>"
		block+=1
		
