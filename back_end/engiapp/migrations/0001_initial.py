# -*- coding: utf-8 -*-
import datetime
from south.db import db
from south.v2 import SchemaMigration
from django.db import models


class Migration(SchemaMigration):

    def forwards(self, orm):
        # Adding model 'Committee'
        db.create_table(u'engiapp_committee', (
            (u'id', self.gf('django.db.models.fields.AutoField')(primary_key=True)),
            ('comittee_name', self.gf('django.db.models.fields.CharField')(max_length=50)),
        ))
        db.send_create_signal(u'engiapp', ['Committee'])

        # Adding model 'EngiEvents'
        db.create_table(u'engiapp_engievents', (
            (u'id', self.gf('django.db.models.fields.AutoField')(primary_key=True)),
            ('event_name', self.gf('django.db.models.fields.CharField')(max_length=50)),
            ('team_size', self.gf('django.db.models.fields.IntegerField')()),
            ('description', self.gf('django.db.models.fields.CharField')(max_length=500)),
            ('day_of_event', self.gf('django.db.models.fields.DateField')()),
            ('committee', self.gf('django.db.models.fields.related.ForeignKey')(to=orm['engiapp.Committee'])),
        ))
        db.send_create_signal(u'engiapp', ['EngiEvents'])

        # Adding model 'Student'
        db.create_table(u'engiapp_student', (
            (u'id', self.gf('django.db.models.fields.AutoField')(primary_key=True)),
            ('user', self.gf('django.db.models.fields.related.OneToOneField')(to=orm['auth.User'], unique=True)),
            ('date_of_birth', self.gf('django.db.models.fields.DateField')()),
            ('institution_name', self.gf('django.db.models.fields.CharField')(max_length=100)),
            ('country', self.gf('django.db.models.fields.CharField')(max_length=50)),
            ('state', self.gf('django.db.models.fields.CharField')(max_length=50)),
            ('city', self.gf('django.db.models.fields.CharField')(max_length=50)),
            ('address', self.gf('django.db.models.fields.CharField')(max_length=100)),
            ('phone_number', self.gf('django.db.models.fields.CharField')(max_length=20)),
        ))
        db.send_create_signal(u'engiapp', ['Student'])

        # Adding M2M table for field events on 'Student'
        m2m_table_name = db.shorten_name(u'engiapp_student_events')
        db.create_table(m2m_table_name, (
            ('id', models.AutoField(verbose_name='ID', primary_key=True, auto_created=True)),
            ('student', models.ForeignKey(orm[u'engiapp.student'], null=False)),
            ('engievents', models.ForeignKey(orm[u'engiapp.engievents'], null=False))
        ))
        db.create_unique(m2m_table_name, ['student_id', 'engievents_id'])

        # Adding model 'Team'
        db.create_table(u'engiapp_team', (
            (u'id', self.gf('django.db.models.fields.AutoField')(primary_key=True)),
            ('team_name', self.gf('django.db.models.fields.CharField')(max_length=50)),
            ('team_leader', self.gf('django.db.models.fields.related.ForeignKey')(to=orm['engiapp.Student'])),
            ('team_event', self.gf('django.db.models.fields.related.OneToOneField')(to=orm['engiapp.EngiEvents'], unique=True)),
        ))
        db.send_create_signal(u'engiapp', ['Team'])

        # Adding M2M table for field members on 'Team'
        m2m_table_name = db.shorten_name(u'engiapp_team_members')
        db.create_table(m2m_table_name, (
            ('id', models.AutoField(verbose_name='ID', primary_key=True, auto_created=True)),
            ('team', models.ForeignKey(orm[u'engiapp.team'], null=False)),
            ('user', models.ForeignKey(orm[u'auth.user'], null=False))
        ))
        db.create_unique(m2m_table_name, ['team_id', 'user_id'])

        # Adding model 'TeamJoinRequest'
        db.create_table(u'engiapp_teamjoinrequest', (
            (u'id', self.gf('django.db.models.fields.AutoField')(primary_key=True)),
            ('fromteam', self.gf('django.db.models.fields.related.OneToOneField')(to=orm['engiapp.Team'], unique=True)),
        ))
        db.send_create_signal(u'engiapp', ['TeamJoinRequest'])

        # Adding M2M table for field receivers on 'TeamJoinRequest'
        m2m_table_name = db.shorten_name(u'engiapp_teamjoinrequest_receivers')
        db.create_table(m2m_table_name, (
            ('id', models.AutoField(verbose_name='ID', primary_key=True, auto_created=True)),
            ('teamjoinrequest', models.ForeignKey(orm[u'engiapp.teamjoinrequest'], null=False)),
            ('user', models.ForeignKey(orm[u'auth.user'], null=False))
        ))
        db.create_unique(m2m_table_name, ['teamjoinrequest_id', 'user_id'])


    def backwards(self, orm):
        # Deleting model 'Committee'
        db.delete_table(u'engiapp_committee')

        # Deleting model 'EngiEvents'
        db.delete_table(u'engiapp_engievents')

        # Deleting model 'Student'
        db.delete_table(u'engiapp_student')

        # Removing M2M table for field events on 'Student'
        db.delete_table(db.shorten_name(u'engiapp_student_events'))

        # Deleting model 'Team'
        db.delete_table(u'engiapp_team')

        # Removing M2M table for field members on 'Team'
        db.delete_table(db.shorten_name(u'engiapp_team_members'))

        # Deleting model 'TeamJoinRequest'
        db.delete_table(u'engiapp_teamjoinrequest')

        # Removing M2M table for field receivers on 'TeamJoinRequest'
        db.delete_table(db.shorten_name(u'engiapp_teamjoinrequest_receivers'))


    models = {
        u'auth.group': {
            'Meta': {'object_name': 'Group'},
            u'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'name': ('django.db.models.fields.CharField', [], {'unique': 'True', 'max_length': '80'}),
            'permissions': ('django.db.models.fields.related.ManyToManyField', [], {'to': u"orm['auth.Permission']", 'symmetrical': 'False', 'blank': 'True'})
        },
        u'auth.permission': {
            'Meta': {'ordering': "(u'content_type__app_label', u'content_type__model', u'codename')", 'unique_together': "((u'content_type', u'codename'),)", 'object_name': 'Permission'},
            'codename': ('django.db.models.fields.CharField', [], {'max_length': '100'}),
            'content_type': ('django.db.models.fields.related.ForeignKey', [], {'to': u"orm['contenttypes.ContentType']"}),
            u'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'name': ('django.db.models.fields.CharField', [], {'max_length': '50'})
        },
        u'auth.user': {
            'Meta': {'object_name': 'User'},
            'date_joined': ('django.db.models.fields.DateTimeField', [], {'default': 'datetime.datetime.now'}),
            'email': ('django.db.models.fields.EmailField', [], {'max_length': '75', 'blank': 'True'}),
            'first_name': ('django.db.models.fields.CharField', [], {'max_length': '30', 'blank': 'True'}),
            'groups': ('django.db.models.fields.related.ManyToManyField', [], {'to': u"orm['auth.Group']", 'symmetrical': 'False', 'blank': 'True'}),
            u'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'is_active': ('django.db.models.fields.BooleanField', [], {'default': 'True'}),
            'is_staff': ('django.db.models.fields.BooleanField', [], {'default': 'False'}),
            'is_superuser': ('django.db.models.fields.BooleanField', [], {'default': 'False'}),
            'last_login': ('django.db.models.fields.DateTimeField', [], {'default': 'datetime.datetime.now'}),
            'last_name': ('django.db.models.fields.CharField', [], {'max_length': '30', 'blank': 'True'}),
            'password': ('django.db.models.fields.CharField', [], {'max_length': '128'}),
            'user_permissions': ('django.db.models.fields.related.ManyToManyField', [], {'to': u"orm['auth.Permission']", 'symmetrical': 'False', 'blank': 'True'}),
            'username': ('django.db.models.fields.CharField', [], {'unique': 'True', 'max_length': '30'})
        },
        u'contenttypes.contenttype': {
            'Meta': {'ordering': "('name',)", 'unique_together': "(('app_label', 'model'),)", 'object_name': 'ContentType', 'db_table': "'django_content_type'"},
            'app_label': ('django.db.models.fields.CharField', [], {'max_length': '100'}),
            u'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'model': ('django.db.models.fields.CharField', [], {'max_length': '100'}),
            'name': ('django.db.models.fields.CharField', [], {'max_length': '100'})
        },
        u'engiapp.committee': {
            'Meta': {'object_name': 'Committee'},
            'comittee_name': ('django.db.models.fields.CharField', [], {'max_length': '50'}),
            u'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'})
        },
        u'engiapp.engievents': {
            'Meta': {'object_name': 'EngiEvents'},
            'committee': ('django.db.models.fields.related.ForeignKey', [], {'to': u"orm['engiapp.Committee']"}),
            'day_of_event': ('django.db.models.fields.DateField', [], {}),
            'description': ('django.db.models.fields.CharField', [], {'max_length': '500'}),
            'event_name': ('django.db.models.fields.CharField', [], {'max_length': '50'}),
            u'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'team_size': ('django.db.models.fields.IntegerField', [], {})
        },
        u'engiapp.student': {
            'Meta': {'object_name': 'Student'},
            'address': ('django.db.models.fields.CharField', [], {'max_length': '100'}),
            'city': ('django.db.models.fields.CharField', [], {'max_length': '50'}),
            'country': ('django.db.models.fields.CharField', [], {'max_length': '50'}),
            'date_of_birth': ('django.db.models.fields.DateField', [], {}),
            'events': ('django.db.models.fields.related.ManyToManyField', [], {'to': u"orm['engiapp.EngiEvents']", 'symmetrical': 'False'}),
            u'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'institution_name': ('django.db.models.fields.CharField', [], {'max_length': '100'}),
            'phone_number': ('django.db.models.fields.CharField', [], {'max_length': '20'}),
            'state': ('django.db.models.fields.CharField', [], {'max_length': '50'}),
            'user': ('django.db.models.fields.related.OneToOneField', [], {'to': u"orm['auth.User']", 'unique': 'True'})
        },
        u'engiapp.team': {
            'Meta': {'object_name': 'Team'},
            u'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'members': ('django.db.models.fields.related.ManyToManyField', [], {'to': u"orm['auth.User']", 'symmetrical': 'False'}),
            'team_event': ('django.db.models.fields.related.OneToOneField', [], {'to': u"orm['engiapp.EngiEvents']", 'unique': 'True'}),
            'team_leader': ('django.db.models.fields.related.ForeignKey', [], {'to': u"orm['engiapp.Student']"}),
            'team_name': ('django.db.models.fields.CharField', [], {'max_length': '50'})
        },
        u'engiapp.teamjoinrequest': {
            'Meta': {'object_name': 'TeamJoinRequest'},
            'fromteam': ('django.db.models.fields.related.OneToOneField', [], {'to': u"orm['engiapp.Team']", 'unique': 'True'}),
            u'id': ('django.db.models.fields.AutoField', [], {'primary_key': 'True'}),
            'receivers': ('django.db.models.fields.related.ManyToManyField', [], {'to': u"orm['auth.User']", 'symmetrical': 'False'})
        }
    }

    complete_apps = ['engiapp']