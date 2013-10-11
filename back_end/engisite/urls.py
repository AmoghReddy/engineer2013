from django.conf.urls import patterns, include, url
from django.views.generic import TemplateView

# Uncomment the next two lines to enable the admin:
from django.contrib import admin

admin.autodiscover()

urlpatterns = patterns('',
    (r'^$', 'engiapp.views.main_page'),
    (r'^login/$', 'django.contrib.auth.views.login'),
    #(r'^login/$', 'engiapp.views.userLogin'),
    (r'^logout/$', 'engiapp.views.logout_page'),
    (r'^register/$', 'engiapp.views.register_page'),

    (r'^user/(\w+)/$', 'engiapp.views.user_page'),

    (r'^committee/(\w+)/$', 'engiapp.views.committee_page'),

    (r'^committee/$', 'engiapp.views.all_committee'),
    (r'^committee/(?P<committee_id>\d+)/$', 'engiapp.views.committee'),
    (r'^events/$', 'engiapp.views.all_events'),
    (r'^events/(?P<event_id>\d+)/$', 'engiapp.views.event'),

    (r'^event/(\d+)/$', 'engiapp.views.event_page'),

    (r'^delete_team/(\d+)/$', 'engiapp.views.delete_team'),

    (r'^register_team/(\d+)/$', 'engiapp.views.team_register_page'),

    (r'^accept_team_request/(\d+)/$', 'engiapp.views.accept_team_request'),

    (r'^register_event/$', 'engiapp.views.event_register_page'),
    (r'^register_committee/$', 'engiapp.views.committee_register_page'),
    (r'^register/success/$', TemplateView.as_view(template_name="registration/register_success.html")),
    (r'^account/$', 'engiapp.views.account_page'),
    # Examples:
    # url(r'^$', 'engisite.views.home', name='home'),
    # url(r'^engisite/', include('engisite.foo.urls')),

    # Uncomment the admin/doc line below to enable admin documentation:
    # url(r'^admin/doc/', include('django.contrib.admindocs.urls')),

    # Uncomment the next line to enable the admin:
    url(r'^admin/', include(admin.site.urls)),
)
