import sqlite3 as db
import sys

def insert(base_name,table_name,array):
  string = "insert into "+base_name+"_"+table_name+" values ("
  k=0
  for i in array:
    if not (k == 0):
      string+=","
    if isinstance(i,int):
      string+=str(i)
    else:
      string+='\''+i+'\'' 
    k+=1
  return string+');'

add_id_flag=True
base="engiapp"
table = {}
table["committee"] = [[1,'chem-events'],[2,'biz-events'],[3,'mba-events'],[4,'civil-events'],[5,'elec-events'],[7,'gen-events'],[8,'astro-events'],[9,'gaming'],[10,'mining-events'],[11,'comp-events'],[12,'mech-events'],[14,'technites'],[16,'sce-events'],[17,'meta-events'],[18,'online-events']]
table["engievents"] = [['Blueprint',0,'','NULL',1],['Breakdown',0,'','NULL',1],['Contraption',0,'','NULL',1],['The Portal',0,'','NULL',1],['Industry Defined Problem',0,'','NULL',1],['Case Study Challenge',0,'','NULL',2],['Mockstock',0,'','NULL',2],['Franchise',0,'','NULL',2],['B-plan Contest',0,'','NULL',2],['Finanza',0,'','NULL',3],['Mercades',0,'','NULL',3],['Mind Bend',0,'','NULL',3],['Personeel',0,'','NULL',3],['Estructura',0,'','NULL',4],['Nirvahana',0,'','NULL',4],['Fantasticity',0,'','NULL',4],['Colossus',0,'','NULL',4],['Architect',0,'','NULL',4],['Mind Bend',0,'','NULL',4],['Blueprint',0,'','NULL',4],['Blueprint',0,'','NULL',5],['Automata',0,'','NULL',5],['Simplicity',0,'','NULL',5],['Tradeoff',0,'','NULL',5],['Trailblazer',0,'','NULL',5],['Foxhunt',0,'','NULL',5],['Symphony',0,'','NULL',5],['PI Challenge',0,'','NULL',7],['Quizzes',0,'','NULL',7],['Blueprint(PCM)',0,'','NULL',7],['Orbiter',0,'','NULL',8],['Star Wars',0,'','NULL',8],['Starry Night',0,'','NULL',8],['Clock Room',0,'','NULL',8],['Chrononauts',0,'','NULL',8],['Counter-Strike-1.6',0,'','NULL',9],['FIFA 11',0,'','NULL',9],['NFS Most Wanted',0,'','NULL',9],['Warcraft III ( Dota)',0,'','NULL',9],['Mining Tycoon',0,'','NULL',10],['TechMining',0,'','NULL',10],['Mindbend',0,'','NULL',10],['Blueprint',0,'','NULL',10],['Inscription',0,'','NULL',11],['Kode Kombat',0,'','NULL',11],['Rectify',0,'','NULL',11],['Marathon',0,'','NULL',11],['ECTF',0,'','NULL',11],['Code Knight',0,'','NULL',11],['Contrive',0,'','NULL',11],['Go Droid',0,'','NULL',11],['Blueprint',0,'','NULL',11],['Theme - Crossfire',0,'','NULL',12],['  Wright Flight',0,'','NULL',12],['Proteus',0,'','NULL',12],['Perfect Machine',0,'','NULL',12],['Robowars',0,'','NULL',12],['Velocity',0,'','NULL',12],['Blueprint',0,'','NULL',12],['Blitzkrieg',0,'','NULL',14],['Theremin',0,'','NULL',14],['Megapixel',0,'','NULL',14],['Psychadelic Room',0,'','NULL',14],['Last Word',0,'','NULL',16],['India Innovates',0,'','NULL',16],['Sparsh',0,'','NULL',16],['Blueprint',0,'','NULL',17],['Metamagic',0,'','NULL',17],['Metamorphosis',0,'','NULL',17],['Mindbend',0,'','NULL',17],['TEM,SEM and Electrospinning Expo',0,'','NULL',17],['Online Algos',0,'','NULL',18],['Online Math',0,'','NULL',18],['Virtual Bounty',0,'','NULL',18]]
try:
  db_var = db.connect('mydb.db')
  cursor = db_var.cursor()
  for i in table:
    id=1
    for j in table[i]:
      if add_id_flag and i == "engievents":
        j.insert(0,id)
      # print j
      # print len(j)
      print insert(base,i,j)
      cursor.execute(insert(base,i,j))
      id+=1
  # cursor.execute('select * from auth_permission')
  data = cursor.execute('commit')
except db.Error, e:
  print "Error %s:" % e.args[0]
  sys.exit(1)
finally:
  if db_var:
    db_var.close()