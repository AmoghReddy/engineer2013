from data import *
import sys
for event in newHash.iterkeys():
	sys.stdout.write("insert into engiapp_engievents values (%s,'%s',1,1);"%(newHash[event]["id"],event))
	
