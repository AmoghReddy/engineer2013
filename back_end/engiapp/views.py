# Create your views here.

from django.core import serializers
from django.shortcuts import render_to_response
from django.template import RequestContext
from django.contrib.auth import logout, authenticate, login
from django.http import *
from engiapp.forms import *
from engiapp.models import *
import json
from random import choice
from string import letters
from django.shortcuts import render_to_response, get_object_or_404

def main_page(request):
    variables = RequestContext(request, {})
    return render_to_response('main_page.html', variables)


def logout_page(request):
    logout(request) #invalidates the user session
    return HttpResponseRedirect('/')


def register_page(request):
    if request.method == 'POST': #user has submitted the form
        form = RegistrationForm(request.POST)
        if form.is_valid():
            username = ''.join([choice(letters) for i in xrange(30)])
            user = User.objects.create_user(username=username, first_name=form.cleaned_data['first_name'],
                last_name=form.cleaned_data['last_name'], password=form.cleaned_data['password1'],
                email=form.cleaned_data['email'])

#            student = Student(user=user, date_of_birth=form.cleaned_data['date_of_birth'],
#                country=form.cleaned_data['country'], state=form.cleaned_data['state'], city=form.cleaned_data['city'],
#                address=form.cleaned_data['address'], institution_name=form.cleaned_data['institution_name'])
            student = Student(user=user, city=form.cleaned_data['city'],institution_name=form.cleaned_data['institution_name'])
            student.save()
            return HttpResponse(content="success")
#            return HttpResponseRedirect('/register/success/')
        else:
            return HttpResponseForbidden()
#    else:
#        form = RegistrationForm()
#    variables = RequestContext(request, {'form': form})
#    return render_to_response('registration/register.html', variables)


def user_page(request, username):
    if request.user.is_authenticated():
        user = get_object_or_404(User, username=username)
        if user != request.user:
            return HttpResponseRedirect('/login/')
    else:
        return HttpResponseRedirect('/login/')
    variables = RequestContext(request)
    return render_to_response('user_page.html', variables)


def all_committee(request):
    return HttpResponse(serializers.serialize("json", Committee.objects.all()))


def committee(request, committee_id):
    return HttpResponse(serializers.serialize("json", EngiEvents.objects.filter(pk=committee_id)))


def all_events(request):
    # response_data = EngiEvents.objects.all()
    return HttpResponse(serializers.serialize("json", EngiEvents.objects.all()))


def event(request, event_id):
    # p = get_object_or_404(EngiEvents , pk=event_id)
    return HttpResponse(serializers.serialize("json", EngiEvents.objects.filter(pk=event_id)))

# this will just add to the database, DONT use this for registering to an event
def event_register_page(request):
    if request.method == 'POST': #user has submitted the form
        form = EventRegistrationForm(request.POST)
        if form.is_valid():
            committee = Committee.objects.get(comittee_name=form.cleaned_data['committee'].comittee_name)
            engi_event = EngiEvents(event_name=form.cleaned_data['event_name'],
                team_size=form.cleaned_data['team_size'], committee=committee)
            engi_event.save()
            return HttpResponseRedirect('/register/success/')
    else:
        form = EventRegistrationForm()
    variables = RequestContext(request, {'form': form})
    return render_to_response('registration/event_register.html', variables)

# use this for registering to an event
def event_page(request, event_id):
    engievent = get_object_or_404(EngiEvents, id=event_id)
    if request.user.is_authenticated():
        student = Student.objects.get(user=request.user)
        student.events.add(engievent)
        return HttpResponse("success")
    else:
        return Http404()
#    registered = 0
#    if request.method == 'POST': #user has submitted the form
#        if "Join event" in request.POST:
#            if request.user.is_authenticated():
#                student = Student.objects.get(user=request.user)
#                if engievent.team_size == 1:
#                    student.events.add(engievent)
#                    registered = 1
#                else:
#                    return HttpResponseRedirect('/register_team/%s/' % (event_id))
#    else:
#        if request.user.is_authenticated():
#            student = Student.objects.get(user=request.user)
#            if engievent in student.events.all():
#                registered = 1
#    variables = RequestContext(request, {'engievent': engievent, 'registered': registered})
#    return render_to_response('event_page.html', variables)


def team_register_page(request, event_id):
    engievent = get_object_or_404(EngiEvents, id=event_id)
    team_exists=0
    if request.method == 'POST':
        if request.user.is_authenticated():
            form = TeamRegistrationForm(request.POST, extra=engievent.team_size)
            if form.is_valid():
                student = Student.objects.get(user=request.user)
                team, created = Team.objects.get_or_create(team_name=form.cleaned_data['team_name'],
                     team_event=engievent)
                if not created:
#                    form = TeamRegistrationForm(extra=engievent.team_size)
                    team_exists=1
                    print team_exists
                    return HttpResponseNotAllowed()
#                    variables = RequestContext(request, {'form': form,'team_exists':team_exists})
#                    return render_to_response('registration/team_register.html', variables)
                team.members.add(request.user)
                #team.save()
                team_join_request, created = TeamJoinRequest.objects.get_or_create(fromteam=team)
                for (u, user_mail ) in form.extra_answers():
                    to_user = get_object_or_404(User, email=user_mail)
                    student=Student.objects.get(user=to_user)
                    student.team_join_request.add(team)
                    student.save()
                    team_join_request.receivers.add(to_user)
                team_join_request.save()

                return HttpResponse("success")
#                return HttpResponseRedirect('/register/success/')
#    else:
#        form = TeamRegistrationForm(extra=engievent.team_size)
#    variables = RequestContext(request, {'form': form,'team_exists':team_exists})
#    return render_to_response('registration/team_register.html', variables)


def accept_team_request(request, req_id):
    if request.user.is_authenticated():
        teamjoinrequest = get_object_or_404(TeamJoinRequest, id=req_id)
        if request.user in teamjoinrequest.receivers.all():
            teamjoinrequest.receivers.remove(request.user)
            teamjoinrequest.fromteam.members.add(request.user)
        else:
            return HttpResponse(content="success")
        if len(teamjoinrequest.receivers.all()) == 0:
            team = teamjoinrequest.fromteam
            ##leader.events.add(team.team_event)
            for mem in team.members.all():
                stud = Student.objects.get(user=mem)
                stud.events.add(team.team_event)
                stud.teams.add(team)
            teamjoinrequest.delete()
        return HttpResponse(content="success")
    else:
        return Http404()


def committee_register_page(request):
    if request.method == 'POST': #user has submitted the form
        form = CommitteeRegistrationForm(request.POST)
        if form.is_valid():
            committee = Committee(comittee_name=form.cleaned_data['committee_name'])
            committee.save()
            return HttpResponseRedirect('/register/success/')
    else:
        form = CommitteeRegistrationForm()
    variables = RequestContext(request, {'form': form})
    return render_to_response('registration/committee_register.html', variables)


def committee_page(request, committee_name):
    committee = get_object_or_404(Committee, comittee_name=committee_name)
    engievents = committee.engievents_set.all()
    #print engievents
    variables = RequestContext(request, {'engievents': engievents})
    return render_to_response('committee_page.html', variables)

def delete_team(request,team_id):
#    engievent = get_object_or_404(EngiEvents, id=event_id)
    if request.user.is_authenticated():
        student=Student.objects.get(user=request.user)
        team=get_object_or_404(Team,id=team_id)
        if team in student.teams.all():
            team.delete()
            engievent=team.team_event
            student.events.remove(engievent)
    return HttpResponse(content="success")

def userLogin(request):
    if request.POST:
        email=request.POST["username"]
        password=request.POST["password"]
        user=get_object_or_404(User,email=email)
        print user.username
        user=authenticate(username=email, password=password)
        print email, password
        print user
        if user is not None:
            if user.is_active:
                login(request,user)
                data = {}
                data['fname']= user.first_name
                data['lname']= user.last_name
                data['email']= user.email
                # data = {'fname': str(user.first_name) , 'lname': str(user.last_name) , 'email': str(user.email)}
                return HttpResponse(json.dumps(data), content_type="application/json")
            # return HttpResponse(content=str(data))
        else:
            return Http404()
    else:
        return HttpResponseForbidden()
    
def account_page(request):
    student=Student.objects.get(user=request.user)
    data={"individual":[],"teams":[],"requests":[]}
    for team in student.teams.all():
        team_data={"event_id":team.team_event.id,"event_name":team.team_event.event_name,"members":[]}
        for members in team.members.all():
            team_data["members"].append(members.first_name+members.last_name)
        data["teams"].append(team_data)

    for event in student.events.all():
        if event.id not in [ team.team_event.id for team in student.teams.all() ]:
            data["individual"].append({"event_id": event.id,"event_name": event.event_name})

    for join_request in student.team_join_request.all():
        data["requests"].append(join_request.frompage.team_name)

    return HttpResponse(content=json.dumps(data))