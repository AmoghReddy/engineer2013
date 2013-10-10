from django.db import models
from django.contrib.auth.models import User

# Create your models here.





class Committee(models.Model):
	comittee_name=models.CharField(max_length=50)
	def __unicode__(self):
		return u'%s' %(self.comittee_name)

class EngiEvents(models.Model):
	#add some attrribute to know if the event is done or not
	event_name=models.CharField(max_length=50)
	team_size=models.IntegerField()
	description=models.CharField(max_length=500)
	day_of_event=models.DateField()
	committee=models.ForeignKey(Committee)
	def __unicode__(self):
		return u'%s %s' %(self.committee,self.event_name)

class Student(models.Model):
	user = models.OneToOneField(User)
 	date_of_birth= models.DateField()
	institution_name=models.CharField(max_length=100)
	country=models.CharField(max_length=50)
	state=models.CharField(max_length=50)
	city=models.CharField(max_length=50)
	address=models.CharField(max_length=100)
	phone_number=models.CharField(max_length=20)
	events=models.ManyToManyField(EngiEvents)

class Team(models.Model):
	team_name=models.CharField(max_length=50)
	team_leader=models.ForeignKey(Student)
	members=models.ManyToManyField(User)
	team_event=models.OneToOneField(EngiEvents)
	unique_together=(("team_event","team_name"),)
	
	
class TeamJoinRequest(models.Model):
	fromteam=models.OneToOneField(Team)
	receivers= models.ManyToManyField(User)
