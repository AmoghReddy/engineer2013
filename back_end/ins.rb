require 'sqlite3'
db = SQLite3::Database.new "mydb.db"

committeeHash={
	#"Technites"=>{"id"=>"1"},//
	"Comps"=>{"id"=>"1"},
	"Civil"=> {"id"=>"2"},
	#"TechSpeak"=> {"id"=>"1"},
	"Materials"=>{"id"=>"3"},
	"Biz"=>{"id"=>"4"},
	"Chem"=>{"id"=>"5"},
	"Tronix"=>{"id"=>"6"},
	"Mba"=>{"id"=>"7"},
	"Sce"=>{"id"=>"8"},
	"Mining"=>{"id"=>"9"},
	"Mechanical"=> {"id"=>"10"},
	"Astro"=> {"id"=>"11"},
	"Gaming"=>{"id"=>"12"},
	"Workshops"=> {"id"=>"13"},
	"General"=> {"id"=>"14"}
}

# committeeHash.each_pair do |key,value|
# 	z=key
# 	y=value["id"].to_i
# 	puts z
# 	puts y
# 	db.execute "insert into engiapp_committee values (?,?)",y,z
# end

newHash={
	"Innovating_Mining"=>{"id"=>"1","team_members"=>"1","comittee_id"=>"9"},
	"Adverse_Mining_Problem"=>{"id"=>"2","team_members"=>"1","comittee_id"=>"9"},
	"Mine_Quest"=>{"id"=>"3","team_members"=>"3","comittee_id"=>"9"},
	"Hang-Man"=>{"id"=>"4","team_members"=>"1","comittee_id"=>"9"},
	"Blast_Mine_Ventilation"=>{"id"=>"5","team_members"=>"1","comittee_id"=>"9"},
	"Mine_Rush"=>{"id"=>"6","team_members"=>"1","comittee_id"=>"9"},
	"MindBend"=>{"id"=>"7","team_members"=>"2","comittee_id"=>"3"},
	"SEM_and_TEM_Expo"=>{"id"=>"8","team_members"=>"1","comittee_id"=>"3"},
	"MetaMagic"=>{"id"=>"9","team_members"=>"1","comittee_id"=>"3"},
	"SEM_Photography_Contest"=>{"id"=>"10","team_members"=>"1","comittee_id"=>"3"},
	"Product_Design_Challenge"=>{"id"=>"11","team_members"=>"1","comittee_id"=>"4"},
	"Campus_Social_Innovision_Challenge"=>{"id"=>"12","team_members"=>"1","comittee_id"=>"4"},
	"Case_Study_challenge"=>{"id"=>"13","team_members"=>"1","comittee_id"=>"4"},
	"Data_Analysis_Challange"=>{"id"=>"14","team_members"=>"1","comittee_id"=>"4"},
	"Simplicity"=>{"id"=>"15","team_members"=>"1","comittee_id"=>"6"},
	"Waltz"=>{"id"=>"16","team_members"=>"2","comittee_id"=>"6"},
	"Trade_OFF"=>{"id"=>"17","team_members"=>"1","comittee_id"=>"6"},
	"Symphony"=>{"id"=>"18","team_members"=>"3","comittee_id"=>"6"},
	"TrailBlazer"=>{"id"=>"19","team_members"=>"4","comittee_id"=>"6"},
	"Automata"=>{"id"=>"20","team_members"=>"4","comittee_id"=>"6"},
	"FoxHunt"=>{"id"=>"21","team_members"=>"1","comittee_id"=>"6"},
	"Fifa"=>{"id"=>"22","team_members"=>"1","comittee_id"=>"12"},
	"Aoe"=>{"id"=>"23","team_members"=>"2","comittee_id"=>"12"},
	"NFS"=>{"id"=>"24","team_members"=>"1","comittee_id"=>"12"},
	"dota"=>{"id"=>"25","team_members"=>"5","comittee_id"=>"12"},
	"CounterStrike"=>{"id"=>"26","team_members"=>"5","comittee_id"=>"12"},
	"Velocity"=>{"id"=>"27","team_members"=>"5","comittee_id"=>"10"},
	"Proteus"=>{"id"=>"28","team_members"=>"4","comittee_id"=>"10"},
	"PerfectMachine"=>{"id"=>"29","team_members"=>"5","comittee_id"=>"10"},
	"Robowars"=>{"id"=>"30","team_members"=>"2","comittee_id"=>"10"},
	"wrightflight"=>{"id"=>"31","team_members"=>"5","comittee_id"=>"10"},
	"Industry_Defined_Problem"=>{"id"=>"32","team_members"=>"1","comittee_id"=>"5"},
	"The_Portal"=>{"id"=>"33","team_members"=>"1","comittee_id"=>"5"},
	"Chemical_Breakdown"=>{"id"=>"34","team_members"=>"1","comittee_id"=>"5"},
	"blueprint"=>{"id"=>"35","team_members"=>"1","comittee_id"=>"0"},
	"mindbend"=>{"id"=>"36","team_members"=>"1","comittee_id"=>"7"},
	"Human"=>{"id"=>"37","team_members"=>"1","comittee_id"=>"7"},
	"Markenza"=>{"id"=>"38","team_members"=>"1","comittee_id"=>"7"},
	"Finance"=>{"id"=>"39","team_members"=>"1","comittee_id"=>"7"},
	"Simplineer"=>{"id"=>"40","team_members"=>"2","comittee_id"=>"14"},
	"FantastiCity"=>{"id"=>"41","team_members"=>"1","comittee_id"=>"2"},
	"COLOSSUS"=>{"id"=>"42","team_members"=>"1","comittee_id"=>"2"},
	"Architect"=>{"id"=>"43","team_members"=>"1","comittee_id"=>"2"},
	"Nirvahana"=>{"id"=>"44","team_members"=>"1","comittee_id"=>"2"},
	"mindBend"=>{"id"=>"45","team_members"=>"2","comittee_id"=>"2"},
	"BeyondEarth"=>{"id"=>"46","team_members"=>"2","comittee_id"=>"11"},
	"StarWars"=>{"id"=>"47","team_members"=>"1","comittee_id"=>"11"},
	"Exhibits"=>{"id"=>"48","team_members"=>"1","comittee_id"=>"11"},
	"AstroTalk"=>{"id"=>"49","team_members"=>"1","comittee_id"=>"11"},
	"Sky_Lanterns"=>{"id"=>"50","team_members"=>"1","comittee_id"=>"8"},
	"Green_Inovation_Challenge"=>{"id"=>"51","team_members"=>"1","comittee_id"=>"8"},
	"Sparsh"=>{"id"=>"52","team_members"=>"3","comittee_id"=>"8"},
	"The_Last_Word"=>{"id"=>"53","team_members"=>"1","comittee_id"=>"8"},
	"Inscription"=>{"id"=>"54","team_members"=>"3","comittee_id"=>"1"},
	"ECTF_-_Capture_the_Flag"=>{"id"=>"55","team_members"=>"3","comittee_id"=>"1"},
	"Virtual_Bounty"=>{"id"=>"56","team_members"=>"1","comittee_id"=>"1"},
	"Kode_Kombat"=>{"id"=>"57","team_members"=>"2","comittee_id"=>"1"},
	"Marathon"=>{"id"=>"58","team_members"=>"3","comittee_id"=>"1"},
	"Rectify"=>{"id"=>"59","team_members"=>"1","comittee_id"=>"1"},

	"HR_Event"=> {"id"=> "60","team_members"=> "1"},
	"Finance_Event"=> {"id"=> "61","team_members"=> "1"},
	"Mindbend"=> {"id"=>"62","team_members"=>"1"},
	"Ethical_Hacking_by_TechDefence"=> {"id"=>"63","team_members"=>"1","comittee_id"=>"13"},

	"Augmented_Reality"=> {"id"=> "64","team_members"=> "5","comittee_id"=>"13"},

	"RC_Aircraft_Design_and_Fabrication"=> {"id"=> "65","team_members"=> "5","comittee_id"=>"13"},

	"Humanoid_Robot"=> {"id"=> "66", "team_members"=> "5","comittee_id"=>"13"},

	"Android Application Development"=> {"id" => "67","team_members"=>"1","comittee_id"=>"13"},

	"3D_Photography"=> {"id" => "68","team_members"=>"1","comittee_id"=>"13"},

	"Bridge_Design_and_Fabrication"=> {"id" => "69","team_members"=>"2","comittee_id"=>"13"},

	#"Ethical_Hacking_by_TechDefence"=> {"id"=>"60","team_members"=>"1","comittee_id"=>"13"},
	#"Augmented_Reality"=> {"id"=> "61","team_members"=> "5","comittee_id"=>"13"},
	#"RC_Aircraft_Design_and_Fabrication"=> {"id"=> "62","team_members"=> "5","comittee_id"=>"13"},
	#"Android Development "=> {"id"=> "63","team_members"=> "5","comittee_id"=>"13"},
	#"Humanoid_Robot"=> {"id"=> "64", "team_members"=> "5","comittee_id"=>"13"},
	#"3D_Photography"=>{"id"=>"65","team_members"=>"1","comittee_id"=>"13"}
	}

newHash.each_pair do |key,value|
	z=key
	id=value["id"].to_i
	puts z
	puts id
	team_members=value["team_members"].to_i
	committee_id = value["comittee_id"].to_i
	db.execute "insert into engiapp_engievents values (?,?,?,?)",id,z,team_members,committee_id
end



