from django import forms 
import re
from django.contrib.auth.models import User 
from engiapp.models import *
from django.forms.extras.widgets import SelectDateWidget
BIRTH_YEAR_CHOICES = ('1980', '1981', '1982')

class RegistrationForm(forms.Form): 
    first_name=forms.CharField(label=u'First Name')
    last_name=forms.CharField(label=u'Last Name')
    email = forms.EmailField(label=u'Email') 
    password1 = forms.CharField(label=u'Password',widget=forms.PasswordInput() ) 
    password2 = forms.CharField(label=u'Confirm Password', widget=forms.PasswordInput()) 
    date_of_birth=forms.DateField(label=u'Date of Birth',widget=SelectDateWidget(years=BIRTH_YEAR_CHOICES))
    country=forms.CharField(label=u'Country', max_length=50) 
    state=forms.CharField(label=u'State', max_length=50) 
    city=forms.CharField(label=u'City', max_length=50) 
    address=forms.CharField(label=u'Address', max_length=30) 
    institution_name=forms.CharField(label=u'School Name', max_length=50) 
    def clean_password2(self):
        if 'password1' in self.cleaned_data: 
            password1 = self.cleaned_data['password1'] 
            password2 = self.cleaned_data['password2'] 
            if password1 == password2:
                return password2 
        raise forms.ValidationError('Passwords do not match.') 
    def clean_email(self):
	email=self.cleaned_data['email']
	try:
		User.objects.get(email=email)
	except User.DoesNotExist:
		return email
	raise forms.ValidationError('An account is already registerd under this email.')


class EventRegistrationForm(forms.Form): 
    event_name=forms.CharField(label=u'Name')
    team_size=forms.IntegerField(label=u'team size')
    day_of_event=forms.DateField(label=u'Date of Event',widget=SelectDateWidget(years=(2013,)))
    event_description=forms.CharField(label=u'description', max_length=30) 
    #committee=forms.ChoiceField(label='committee',choices=[(x, y.comittee_name) for x,y in enumerate(Committee.objects.all())])
    committee=forms.ModelChoiceField(queryset=Committee.objects.all().order_by('comittee_name'))
    def clean_event_name(self):
	event_name=self.cleaned_data['event_name']
	try:
		EngiEvents.objects.get(event_name=event_name)
	except EngiEvents.DoesNotExist:
		return event_name
	raise forms.ValidationError('An event is already registerd under this name.')

class CommitteeRegistrationForm(forms.Form): 
	committee_name=forms.CharField(label=u'Name')
	def clean_committee_name(self):
		committee_name=self.cleaned_data['committee_name']
		try:
			Committee.objects.get(comittee_name=committee_name)
		except Committee.DoesNotExist:
			return committee_name
		raise forms.ValidationError('An Committee is already registerd under this name.')


class TeamRegistrationForm(forms.Form):
	team_name=forms.CharField(label=u'Team Name', max_length=50) 
	def __init__(self, *args, **kwargs):
        	extra = kwargs.pop('extra')
        	super(TeamRegistrationForm, self).__init__(*args, **kwargs)

        	for i in range(extra-1):
            		self.fields['custom_%s' % i] = forms.EmailField(label="user %s"%(i+1))
	def extra_answers(self):
        	for name, value in self.cleaned_data.items():
            		if name.startswith('custom_'):
                		yield (self.fields[name].label, value)
