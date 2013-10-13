<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" href='static/http://engineer.org.in/2013/favicon.ico" type="image/x-icon' >
		<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" %}>
		<title>Engineer 2013</title>
		<link rel="stylesheet" href='static/bootstrap/css/bootstrap.min.css'  />
		<link rel="stylesheet" href='static/style.css' />
		<script src='static/js/jquery-1.10.1.min.js' ></script>
		<script src='static/bootstrap/js/bootstrap.min.js' ></script>
		<script src='static/bootstrap/js/bootstrap-typeahead.js' ></script>
		<script src='static/js/three.min.js' ></script>
		<script src='static/js/tween.min.js' ></script>
		<script src='static/js/CSS3DRenderer.js' ></script>
		<script src='static/js/3script.js' ></script>
		<script src='static/js/system.js' ></script>
		<script src='static/js/server.js' ></script>
	</head>
	<body style="width: 1366px; overflow: hidden;">
	<div class="loading">
		<img src='static/loading.gif'  />
		<a id="loading_text">Loading....</a>
	</div>
	<script>
		var data=["Loading....","Loading....","Loading....","Loading....","Loading...."];
		function loadingTextHandle(){
			var loadingText=document.getElementById("loading_text");
			var newData=data[Math.floor(Math.random()*1000)%data.length-1];
			if(!newData || (loadingText.innerHTML==newData)) setTimeout("loadingTextHandle();",0);
			else{ loadingText.innerHTML=newData; setTimeout("loadingTextHandle();",3000); }
		}
		loadingTextHandle();
	</script>
		<div class="alert" stlye="z-index: 1000" style="
	    position: absolute;
	    z-index: 1000;
	    width: 100%;
	    height: 20px;
		">
		  <button type="button" class="close" data-dismiss="alert" style=" position: absolute;z-index: 1000;right: 60px;
line-height: 18px;
margin-top: 10px;width: 27px;
height: 21px;">X</button>
		  <strong><p>This website has been created using WebGL, we recommend you to update your browser to latest version. For best experience please use Google Chrome 29+</p></strong>
		</div>
		<div id="container" style = "width: 1366">
			<span id = "homePage">
				<span id = "engiLogo"><img id="engiImg" src='images/logo.png' style="width:300px;box-shadow: 0px 0px 0px;" /></span>
				<span id = "menu0"><button id="button0" onclick = "getPage('allCommittees')" style="font-family: acens;">EVENTS</button></span>
				<span id = "menu1"><button id="button1" onclick = "getPage('Workshops')" style="font-family: acens;" >WORK SHOPS</button></span>
				<span id = "menu2"><button id="button2" onclick="getPage('Technites')" style="font-family: acens;" >TECHNITES</button></span>
				<span id = "menu3"><button id="button3" onclick = "getPage('Tech_Speak')" style="font-family: acens;" >TECH SPEAK</button></span>
				<span id = "menu4"><button id="button4" style="font-family: acens;" onclick = "getPage('sponsors')" >SPONSORS</button></span>
				<!--<span id = "menu5"><button id="button5" style="font-family: acens;" >ABOUT ENGI</button></span>-->
				<span id = "menu6"><button id="button6" style="font-family: acens;" onclick = "getPage('Contact')" >CONTACTS</button></span>
				<span id = "menu7"><button id="button7" style="font-family: acens;" >ACCOM</button></span>
			</span>
			<span id = "sponsors">
				<!--<span id = "menuLogo2"><img id="engiImg2" src='static/images/logo.png'  style="width:300px;box-shadow: 0px 0px 0px;"/></span>-->
				<span id = "menu00"><img src = 'static/sponsors/Adormi_Technologies.jpg'  style="width:300px"/></span>
				<span id = "menu01"><img src = 'static/sponsors/Bosch.jpg'  style="width:300px"/></span>
				<span id = "menu02"><img src = 'static/sponsors/Byju.jpg'  style="width:300px"/></span>
				<span id = "menu03"><img src = 'static/sponsors/D_E_Shaw.jpg'  style="width:300px"/></span>
				<span id = "menu04"><img src = 'static/sponsors/Oracle.JPG'  style="width:300px"/></span>
			</span>
			<span id = "pageProfile" >
				<span id = "blockProfile0" style='width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;'>PROFILE</span>
				<span id = "blockProfile1" style='width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;'>
					<table width = "600">
						<tr>
							<td>
								Name:
							</td>
							<td>
								<b id = "profile_name"></b>
							</td>
						</tr>
						<tr>
							<td>
								Email ID:
							</td>
							<td>
								<b id = "profile_email"></b>
							</td>
						</tr>
					</table>
				</span>
				<span id = "blockProfile2" style='width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;'>
					Events Registered:
				</span>
				<span id = "blockProfile3" style='width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;'>
					<p id = "profile_events"></p>
				</span>

				<span id = "blockProfile4" style='display:none;width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;'>
					Team Requests
				</span>
				<span id = "blockProfile5" style='display:none;width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;'>
					<p id="profile_team_request"></p>
				</span>

				<!-- <span id = "blockProfile4" style='width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;'>
					
				</span>
				<span id = "blockProfile5" style='width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;'>
					
				</span>
				<span id = "blockProfile6" style='width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;'>
					
				</span>
				<span id = "blockProfile7" style='width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;'>
					
				</span> -->
			</span>
			<span id='pageContact' style='margin:100px;padding:50px'>
			<table class='table'>
			<tr>
			<td valign='top'><span id='blockGen97'><img src='static/Icons_Final/contacts.png'  /></span></td>
			<td>
			<span id='blockGen98' style='width:500px;'>
			<h1>Contact Us</h1><hr/>
			<p><b>Utpal Kant (Convenor)</b></br>
			<span style='font-style:italic;'>Ph: 8123309743 </br>
			Email: convenor@engineer.org.in</span></br></br>
			<b>Ankit Kumar (Chief Coordinator)</b></br>
			<span style='font-style:italic;'>Ph: 8123196114 </br>
			Email: chiefcoordinator@engineer.org.in</span></br></br>
			<b>Abhisekh Malali (Secretary)</b></br>
			<span style='font-style:italic;'>Ph: 9480799184 </br>
			Email: abhisekh@engineer.org.in</span></br></br>
			<b>Vishnu Swaroop (Marketing Head)</b></br>
			<span style='font-style:italic;'>Ph: 9986849580 </br>
			Email: vishnu@engineer.org.in</span></p>
			<hr/>
			</span>
			</td>
			</tr>
			</table>
			</span>
<span id = "allCommittees" >
<span id = "comitteeTronix" style="cursor:pointer;background: rgba(250,237,202,0.8);" onclick="getPage('Tronix')">
<img id="eve1" src="static/Icons_Final/tronix.png"/>
</span>
<span id = "comitteeGaming" style="cursor:pointer;background: rgba(225,233,213,0.8);" onclick="getPage('Gaming')">
<img id="eve2" src="static/Icons_Final/gaming.png"/>
</span>
<span id = "comitteeMining" style="cursor:pointer;background: rgba(246,204,212,0.8);" onclick="getPage('Mining')">
<img id="eve3" src="static/Icons_Final/mining.png"/>
</span>
<span id = "comitteeCivil" style="cursor:pointer;background: rgba(238,232,229,0.8);" onclick="getPage('Civil')">
<img id="eve4" src="static/Icons_Final/civilmain.png"/>
</span>
<span id = "comitteeSce" style="cursor:pointer;background: rgba(230,207,208,0.8);" onclick="getPage('Sce')">
<img id="eve5" src="static/Icons_Final/Sce.png"/>
</span>
<span id = "comitteeMba" style="cursor:pointer;background: rgba(237,203,205,0.8);" onclick="getPage('Mba')">
<img id="eve6" src="static/Icons_Final/MBA.png"/>
</span>
<span id = "comitteeGeneral" style="cursor:pointer;background: rgba(229,206,220,0.8);" onclick="getPage('General')">
<img id="eve7" src="static/Icons_Final/GeneralEvents.png"/>
</span>
<span id = "comitteeAstro" style="cursor:pointer;background: rgba(220,222,243,0.8);" onclick="getPage('Astro')">
<img id="eve8" src="static/Icons_Final/astro.png"/>
</span>
<span id = "comitteeComps" style="cursor:pointer;background: rgba(200,214,226,0.8);" onclick="getPage('Comps')">
<img id="eve9" src="static/Icons_Final/Comps_Main.png"/>
</span>
<span id = "comitteeMaterials" style="cursor:pointer;background: rgba(214,240,213,0.8);" onclick="getPage('Materials')">
<img id="eve10" src="static/Icons_Final/Metamain.png"/>
</span>
<span id = "comitteeBiz" style="cursor:pointer;background: rgba(213,233,249,0.8);" onclick="getPage('Biz')">
<img id="eve11" src="static/Icons_Final/BIZ.png"/>
</span>
<span id = "comitteeMechanical" style="cursor:pointer;background: rgba(205,202,212,0.8);" onclick="getPage('Mechanical')">
<img id="eve12" src="static/Icons_Final/mech.png"/>
</span>
<span id = "comitteeChem" style="cursor:pointer;background: rgba(233,230,200,0.8);" onclick="getPage('Chem')">
<img id="eve13" src="static/Icons_Final/chemmain.png"/>
</span>
</span>
<table class='table'>
<tr>
<td>
<span id='sideTronix'>
<br /><br /><br />
<span id='blockGen1'><h1 style='font-size: 68px; margin: 5px;'>T</h1></span><br />
<span id='blockGen2'><h1 style='font-size: 68px; margin: 5px;'>r</h1></span><br />
<span id='blockGen3'><h1 style='font-size: 68px; margin: 5px;'>o</h1></span><br />
<span id='blockGen4'><h1 style='font-size: 68px; margin: 5px;'>n</h1></span><br />
<span id='blockGen5'><h1 style='font-size: 68px; margin: 5px;'>i</h1></span><br />
<span id='blockGen6'><h1 style='font-size: 68px; margin: 5px;'>x</h1></span><br />
</span>
</td>
<td valign = 'top' >
<span id='pageTronix'>
<table>
<tr>
<td><span id='blockGen7' onclick='getPage("Simplicity")' style='cursor:pointer;width: 250px;background: rgba(246,212,231,0.8);'><img src='static/Icons_Final/SIMPLICITY.png'/></span></td>
<td><span id='blockGen8' onclick='getPage("Waltz")' style='cursor:pointer;width: 250px;background: rgba(209,239,222,0.8);'><img src='static/Icons_Final/Waltz.png'/></span></td>
<td><span id='blockGen9' onclick='getPage("Trade_OFF")' style='cursor:pointer;width: 250px;background: rgba(220,250,213,0.8);'><img src='static/Icons_Final/trade_off.png'/></span></td>
</tr>
<tr>
<td><span id='blockGen10' onclick='getPage("Symphony")' style='cursor:pointer;width: 250px;background: rgba(211,220,200,0.8);'><img src='static/Icons_Final/Symphony.png'/></span></td>
<td><span id='blockGen11' onclick='getPage("TrailBlazer")' style='cursor:pointer;width: 250px;background: rgba(234,223,214,0.8);'><img src='static/Icons_Final/trailblazer.png'/></span></td>
<td><span id='blockGen12' onclick='getPage("Automata")' style='cursor:pointer;width: 250px;background: rgba(215,204,239,0.8);'><img src='static/Icons_Final/AUTOMATA_NEW.png'/></span></td>
</tr>
<tr>
<td><span id='blockGen13' onclick='getPage("FoxHunt")' style='cursor:pointer;width: 250px;background: rgba(250,202,202,0.8);'><img src='static/Icons_Final/foxxhunt.png'/></span></td>
</table>
</span>
</td>
</tr>
</table>
<table class='table'>
<tr>
<td>
<span id='sideGaming'>
<br /><br /><br />
<span id='blockGen14'><h1 style='font-size: 68px; margin: 5px;'>G</h1></span><br />
<span id='blockGen15'><h1 style='font-size: 68px; margin: 5px;'>a</h1></span><br />
<span id='blockGen16'><h1 style='font-size: 68px; margin: 5px;'>m</h1></span><br />
<span id='blockGen17'><h1 style='font-size: 68px; margin: 5px;'>i</h1></span><br />
<span id='blockGen18'><h1 style='font-size: 68px; margin: 5px;'>n</h1></span><br />
<span id='blockGen19'><h1 style='font-size: 68px; margin: 5px;'>g</h1></span><br />
</span>
</td>
<td valign = 'top' >
<span id='pageGaming'>
<table>
<tr>
<td><span id='blockGen20' onclick='getPage("Fifa")' style='cursor:pointer;width: 250px;background: rgba(250,234,238,0.8);'><img src='static/Icons_Final/fifa.png'/></span></td>
<td><span id='blockGen21' onclick='getPage("Aoe")' style='cursor:pointer;width: 250px;background: rgba(227,236,200,0.8);'><img src='static/Icons_Final/aoe3.png'/></span></td>
<td><span id='blockGen22' onclick='getPage("NFS")' style='cursor:pointer;width: 250px;background: rgba(221,215,222,0.8);'><img src='static/Icons_Final/nfs.png'/></span></td>
</tr>
<tr>
<td><span id='blockGen23' onclick='getPage("dota")' style='cursor:pointer;width: 250px;background: rgba(241,237,214,0.8);'><img src='static/Icons_Final/dOTA.png'/></span></td>
<td><span id='blockGen24' onclick='getPage("CounterStrike")' style='cursor:pointer;width: 250px;background: rgba(229,226,247,0.8);'><img src='static/Icons_Final/COUNTERSTRIKE.png'/></span></td>
</table>
</span>
</td>
</tr>
</table>
<table class='table'>
<tr>
<td>
<span id='sideMining'>
<br /><br /><br />
<span id='blockGen25'><h1 style='font-size: 68px; margin: 5px;'>M</h1></span><br />
<span id='blockGen26'><h1 style='font-size: 68px; margin: 5px;'>i</h1></span><br />
<span id='blockGen27'><h1 style='font-size: 68px; margin: 5px;'>n</h1></span><br />
<span id='blockGen28'><h1 style='font-size: 68px; margin: 5px;'>i</h1></span><br />
<span id='blockGen29'><h1 style='font-size: 68px; margin: 5px;'>n</h1></span><br />
<span id='blockGen30'><h1 style='font-size: 68px; margin: 5px;'>g</h1></span><br />
</span>
</td>
<td valign = 'top' >
<span id='pageMining'>
<table>
<tr>
<td><span id='blockGen31' onclick='getPage("Innovating_Mining")' style='cursor:pointer;width: 250px;background: rgba(205,210,200,0.8);'><img src='static/Icons_Final/mining_innovation.png'/></span></td>
<td><span id='blockGen32' onclick='getPage("Adverse_Mining_Problem")' style='cursor:pointer;width: 250px;background: rgba(242,221,244,0.8);'><img src='static/Icons_Final/adverse_mining.png'/></span></td>
<td><span id='blockGen33' onclick='getPage("Mine_Quest")' style='cursor:pointer;width: 250px;background: rgba(226,242,214,0.8);'><img src='static/Icons_Final/Mine_Quest.png'/></span></td>
</tr>
<tr>
<td><span id='blockGen34' onclick='getPage("Hang-Man")' style='cursor:pointer;width: 250px;background: rgba(206,219,225,0.8);'><img src='static/Icons_Final/HANGMAN_MAIN.png'/></span></td>
<td><span id='blockGen35' onclick='getPage("Blast_Mine_Ventilation")' style='cursor:pointer;width: 250px;background: rgba(209,235,227,0.8);'><img src='static/Icons_Final/blast_mine_ventilation.png'/></span></td>
<td><span id='blockGen36' onclick='getPage("Mine_Rush")' style='cursor:pointer;width: 250px;background: rgba(202,235,201,0.8);'><img src='static/Icons_Final/Mine_Rush.png'/></span></td>
</tr>
</table>
</span>
</td>
</tr>
</table>
<table class='table'>
<tr>
<td>
<span id='sideTechSpeak'>
<br /><br /><br />
<span id='blockGen37'><h1 style='font-size: 68px; margin: 5px;'>T</h1></span><br />
<span id='blockGen38'><h1 style='font-size: 68px; margin: 5px;'>e</h1></span><br />
<span id='blockGen39'><h1 style='font-size: 68px; margin: 5px;'>c</h1></span><br />
<span id='blockGen40'><h1 style='font-size: 68px; margin: 5px;'>h</h1></span><br />
<span id='blockGen41'><h1 style='font-size: 68px; margin: 5px;'>S</h1></span><br />
<span id='blockGen42'><h1 style='font-size: 68px; margin: 5px;'>p</h1></span><br />
<span id='blockGen43'><h1 style='font-size: 68px; margin: 5px;'>e</h1></span><br />
<span id='blockGen44'><h1 style='font-size: 68px; margin: 5px;'>a</h1></span><br />
<span id='blockGen45'><h1 style='font-size: 68px; margin: 5px;'>k</h1></span><br />
</span>
</td>
<td valign = 'top' >
<span id='pageTechSpeak'>
<table>
<tr>
<td><span id='blockGen46' onclick='getPage("Tech_Speak")' style='cursor:pointer;width: 250px;background: rgba(207,214,204,0.8);'><img src='static/Icons_Final/Techspeak.png'/></span></td>
</table>
</span>
</td>
</tr>
</table>
<table class='table'>
<tr>
<td>
<span id='sideCivil'>
<br /><br /><br />
<span id='blockGen47'><h1 style='font-size: 68px; margin: 5px;'>C</h1></span><br />
<span id='blockGen48'><h1 style='font-size: 68px; margin: 5px;'>i</h1></span><br />
<span id='blockGen49'><h1 style='font-size: 68px; margin: 5px;'>v</h1></span><br />
<span id='blockGen50'><h1 style='font-size: 68px; margin: 5px;'>i</h1></span><br />
<span id='blockGen51'><h1 style='font-size: 68px; margin: 5px;'>l</h1></span><br />
</span>
</td>
<td valign = 'top' >
<span id='pageCivil'>
<table>
<tr>
<td><span id='blockGen52' onclick='getPage("FantastiCity")' style='cursor:pointer;width: 250px;background: rgba(241,226,208,0.8);'><img src='static/Icons_Final/fantasticity2.png'/></span></td>
<td><span id='blockGen53' onclick='getPage("COLOSSUS")' style='cursor:pointer;width: 250px;background: rgba(226,213,231,0.8);'><img src='static/Icons_Final/Colossus.png'/></span></td>
<td><span id='blockGen54' onclick='getPage("Architect")' style='cursor:pointer;width: 250px;background: rgba(202,226,205,0.8);'><img src='static/Icons_Final/Architect2.png'/></span></td>
</tr>
<tr>
<td><span id='blockGen55' onclick='getPage("Nirvahana")' style='cursor:pointer;width: 250px;background: rgba(218,233,223,0.8);'><img src='static/Icons_Final/Nirvana.png'/></span></td>
<td><span id='blockGen56' onclick='getPage("Mindbend")' style='cursor:pointer;width: 250px;background: rgba(214,211,233,0.8);'><img src='static/Icons_Final/mindbend.png'/></span></td>
</table>
</span>
</td>
</tr>
</table>
<table class='table'>
<tr>
<td>
<span id='sideSce'>
<br /><br /><br />
<span id='blockGen57'><h1 style='font-size: 68px; margin: 5px;'>S</h1></span><br />
<span id='blockGen58'><h1 style='font-size: 68px; margin: 5px;'>c</h1></span><br />
<span id='blockGen59'><h1 style='font-size: 68px; margin: 5px;'>e</h1></span><br />
</span>
</td>
<td valign = 'top' >
<span id='pageSce'>
<table>
<tr>
<td><span id='blockGen60' onclick='getPage("Sky_Lanterns")' style='cursor:pointer;width: 250px;background: rgba(248,239,228,0.8);'><img src='static/Icons_Final/sky_lantern.png'/></span></td>
<td><span id='blockGen61' onclick='getPage("Green_Inovation_Challenge")' style='cursor:pointer;width: 250px;background: rgba(211,243,250,0.8);'><img src='static/Icons_Final/Green_Product_Design.png'/></span></td>
<td><span id='blockGen62' onclick='getPage("Sparsh")' style='cursor:pointer;width: 250px;background: rgba(242,241,229,0.8);'><img src='static/Icons_Final/saprsh.png'/></span></td>
</tr>
<tr>
<td><span id='blockGen63' onclick='getPage("The_Last_Word")' style='cursor:pointer;width: 250px;background: rgba(224,227,225,0.8);'><img src='static/Icons_Final/lastword.png'/></span></td>
</table>
</span>
</td>
</tr>
</table>
<table class='table'>
<tr>
<td>
<span id='sideWorkshops'>
<br /><br /><br />
<span id='blockGen64'><h1 style='font-size: 68px; margin: 5px;'>W</h1></span><br />
<span id='blockGen65'><h1 style='font-size: 68px; margin: 5px;'>o</h1></span><br />
<span id='blockGen66'><h1 style='font-size: 68px; margin: 5px;'>r</h1></span><br />
<span id='blockGen67'><h1 style='font-size: 68px; margin: 5px;'>k</h1></span><br />
<span id='blockGen68'><h1 style='font-size: 68px; margin: 5px;'>s</h1></span><br />
<span id='blockGen69'><h1 style='font-size: 68px; margin: 5px;'>h</h1></span><br />
<span id='blockGen70'><h1 style='font-size: 68px; margin: 5px;'>o</h1></span><br />
<span id='blockGen71'><h1 style='font-size: 68px; margin: 5px;'>p</h1></span><br />
<span id='blockGen72'><h1 style='font-size: 68px; margin: 5px;'>s</h1></span><br />
</span>
</td>
<td valign = 'top' >
<span id='pageWorkshops'>
<table>
<tr>
<td><span id='blockGen73' onclick='getPage("Ethical_Hacking_by_TechDefence")' style='cursor:pointer;width: 250px;background: rgba(207,206,238,0.8);'><img src='static/Icons_Final/HACKING.png'/></span></td>
<td><span id='blockGen74' onclick='getPage("Augmented_Reality")' style='cursor:pointer;width: 250px;background: rgba(223,240,206,0.8);'><img src='static/Icons_Final/AUGMENTED.png'/></span></td>
<td><button id='blockGen75' class='button1' onclick='getPage("3D_Photography")' style='cursor:pointer;border-radius: 0%;width: 250px;height: 250px;margin-top: 0px;background: rgba(200,220,200,0.8);'><h1 style='text-align:center;font-family: acens;'>3D Photography</h1></td>
</tr>
<tr>
<td><span id='blockGen76' onclick='getPage("RC_Aircraft_Design_and_Fabrication")' style='cursor:pointer;width: 250px;background: rgba(223,219,249,0.8);'><img src='static/Icons_Final/RC_Aircraft.png'/></span></td>
<td><span id='blockGen77' onclick='getPage("Humanoid_Robot")' style='cursor:pointer;width: 250px;background: rgba(212,241,249,0.8);'><img src='static/Icons_Final/ROBOTICS.png'/></span></td>
<td><span id='blockGen78' onclick='getPage("Android Application Development")' style='cursor:pointer;width: 250px;background: rgba(215,249,243,0.8);'><img src='static/Icons_Final/Android.png'/></span></td>
</tr>
<tr>
<td><span id='blockGen79' onclick='getPage("Bridge_Design_and_Fabrication")' style='cursor:pointer;width: 250px;background: rgba(243,230,218,0.8);'><img src='static/Icons_Final/Bridge_design.png'/></span></td>
</table>
</span>
</td>
</tr>
</table>
<table class='table'>
<tr>
<td>
<span id='sideMba'>
<br /><br /><br />
<span id='blockGen80'><h1 style='font-size: 68px; margin: 5px;'>M</h1></span><br />
<span id='blockGen81'><h1 style='font-size: 68px; margin: 5px;'>b</h1></span><br />
<span id='blockGen82'><h1 style='font-size: 68px; margin: 5px;'>a</h1></span><br />
</span>
</td>
<td valign = 'top' >
<span id='pageMba'>
<table>
<tr>
<td><span id='blockGen83' onclick='getPage("MindBend")' style='cursor:pointer;width: 250px;background: rgba(221,228,211,0.8);'><img src='static/Icons_Final/mindbend.png'/></span></td>
<td><span id='blockGen84' onclick='getPage("HR_Event")' style='cursor:pointer;width: 250px;background: rgba(226,234,204,0.8);'><img src='static/Icons_Final/HR.png'/></span></td>
<td><span id='blockGen85' onclick='getPage("Markenza")' style='cursor:pointer;width: 250px;background: rgba(204,209,207,0.8);'><img src='static/Icons_Final/MARKENZA.png'/></span></td>
</tr>
<tr>
<td><span id='blockGen86' onclick='getPage("Finance_Event")' style='cursor:pointer;width: 250px;background: rgba(225,233,202,0.8);'><img src='static/Icons_Final/Finance.png'/></span></td>
</table>
</span>
</td>
</tr>
</table>
<table class='table'>
<tr>
<td>
<span id='sideGeneral'>
<br /><br /><br />
<span id='blockGen87'><h1 style='font-size: 68px; margin: 5px;'>G</h1></span><br />
<span id='blockGen88'><h1 style='font-size: 68px; margin: 5px;'>e</h1></span><br />
<span id='blockGen89'><h1 style='font-size: 68px; margin: 5px;'>n</h1></span><br />
<span id='blockGen90'><h1 style='font-size: 68px; margin: 5px;'>e</h1></span><br />
<span id='blockGen91'><h1 style='font-size: 68px; margin: 5px;'>r</h1></span><br />
<span id='blockGen92'><h1 style='font-size: 68px; margin: 5px;'>a</h1></span><br />
<span id='blockGen93'><h1 style='font-size: 68px; margin: 5px;'>l</h1></span><br />
</span>
</td>
<td valign = 'top' >
<span id='pageGeneral'>
<table>
<tr>
<td><span id='blockGen94' onclick='getPage("Blue Print")' style='cursor:pointer;width: 250px;background: rgba(231,200,250,0.8);'><img src='static/Icons_Final/BluePrint.png'/></span></td>
<td><span id='blockGen95' onclick='getPage("Simplineer")' style='cursor:pointer;width: 250px;background: rgba(217,226,207,0.8);'><img src='static/Icons_Final/SIMPLINEER.png'/></span></td>
</table>
</span>
</td>
</tr>
</table>
<table class='table'>
<tr>
<td>
<span id='sideAstro'>
<br /><br /><br />
<span id='blockGen96'><h1 style='font-size: 68px; margin: 5px;'>A</h1></span><br />
<span id='blockGen97'><h1 style='font-size: 68px; margin: 5px;'>s</h1></span><br />
<span id='blockGen98'><h1 style='font-size: 68px; margin: 5px;'>t</h1></span><br />
<span id='blockGen99'><h1 style='font-size: 68px; margin: 5px;'>r</h1></span><br />
<span id='blockGen100'><h1 style='font-size: 68px; margin: 5px;'>o</h1></span><br />
</span>
</td>
<td valign = 'top' >
<span id='pageAstro'>
<table>
<tr>
<td><span id='blockGen101' onclick='getPage("BeyondEarth")' style='cursor:pointer;width: 250px;background: rgba(235,207,218,0.8);'><img src='static/Icons_Final/Beyond_Earth.png'/></span></td>
<td><span id='blockGen102' onclick='getPage("StarWars")' style='cursor:pointer;width: 250px;background: rgba(223,221,209,0.8);'><img src='static/Icons_Final/starwars.png'/></span></td>
<td><button id='blockGen103' class='button1' onclick='getPage("Exhibits")' style='cursor:pointer;border-radius: 0%;width: 250px;height: 250px;margin-top: 0px;background: rgba(250,234,229,0.8);'><h1 style='text-align:center;font-family: acens;'>Exhibits</h1></td>
</tr>
<tr>
<td><span id='blockGen104' onclick='getPage("AstroTalk")' style='cursor:pointer;width: 250px;background: rgba(224,209,239,0.8);'><img src='static/Icons_Final/astro_talk.png'/></span></td>
</table>
</span>
</td>
</tr>
</table>
<table class='table'>
<tr>
<td>
<span id='sideComps'>
<br /><br /><br />
<span id='blockGen105'><h1 style='font-size: 68px; margin: 5px;'>C</h1></span><br />
<span id='blockGen106'><h1 style='font-size: 68px; margin: 5px;'>o</h1></span><br />
<span id='blockGen107'><h1 style='font-size: 68px; margin: 5px;'>m</h1></span><br />
<span id='blockGen108'><h1 style='font-size: 68px; margin: 5px;'>p</h1></span><br />
<span id='blockGen109'><h1 style='font-size: 68px; margin: 5px;'>s</h1></span><br />
</span>
</td>
<td valign = 'top' >
<span id='pageComps'>
<table>
<tr>
<td><span id='blockGen110' onclick='getPage("Inscription")' style='cursor:pointer;width: 250px;background: rgba(234,213,226,0.8);'><img src='static/Icons_Final/INSCRIPTION.png'/></span></td>
<td><span id='blockGen111' onclick='getPage("ECTF_-_Capture_the_Flag")' style='cursor:pointer;width: 250px;background: rgba(249,207,209,0.8);'><img src='static/Icons_Final/ECTF.png'/></span></td>
<td><span id='blockGen112' onclick='getPage("Virtual_Bounty")' style='cursor:pointer;width: 250px;background: rgba(226,244,216,0.8);'><img src='static/Icons_Final/VIRTUAL_BOUNTY2.png'/></span></td>
</tr>
<tr>
<td><span id='blockGen113' onclick='getPage("Kode_Kombat")' style='cursor:pointer;width: 250px;background: rgba(247,218,246,0.8);'><img src='static/Icons_Final/CODE_KOMBAT.png'/></span></td>
<td><span id='blockGen114' onclick='getPage("Marathon")' style='cursor:pointer;width: 250px;background: rgba(235,250,242,0.8);'><img src='static/Icons_Final/marathon_final.png'/></span></td>
<td><span id='blockGen115' onclick='getPage("Rectify")' style='cursor:pointer;width: 250px;background: rgba(247,225,201,0.8);'><img src='static/Icons_Final/RECTIFY.png'/></span></td>
</tr>
</table>
</span>
</td>
</tr>
</table>
<table class='table'>
<tr>
<td>
<span id='sideMaterials'>
<br /><br /><br />
<span id='blockGen116'><h1 style='font-size: 68px; margin: 5px;'>M</h1></span><br />
<span id='blockGen117'><h1 style='font-size: 68px; margin: 5px;'>a</h1></span><br />
<span id='blockGen118'><h1 style='font-size: 68px; margin: 5px;'>t</h1></span><br />
<span id='blockGen119'><h1 style='font-size: 68px; margin: 5px;'>e</h1></span><br />
<span id='blockGen120'><h1 style='font-size: 68px; margin: 5px;'>r</h1></span><br />
<span id='blockGen121'><h1 style='font-size: 68px; margin: 5px;'>i</h1></span><br />
<span id='blockGen122'><h1 style='font-size: 68px; margin: 5px;'>a</h1></span><br />
<span id='blockGen123'><h1 style='font-size: 68px; margin: 5px;'>l</h1></span><br />
<span id='blockGen124'><h1 style='font-size: 68px; margin: 5px;'>s</h1></span><br />
</span>
</td>
<td valign = 'top' >
<span id='pageMaterials'>
<table>
<tr>
<td><span id='blockGen125' onclick='getPage("mindBend")' style='cursor:pointer;width: 250px;background: rgba(231,211,211,0.8);'><img src='static/Icons_Final/mindbend.png'/></span></td>
<td><span id='blockGen126' onclick='getPage("SEM_and_TEM_Expo")' style='cursor:pointer;width: 250px;background: rgba(234,201,219,0.8);'><img src='static/Icons_Final/SEMTEMExpo.png'/></span></td>
<td><span id='blockGen127' onclick='getPage("MetaMagic")' style='cursor:pointer;width: 250px;background: rgba(231,225,232,0.8);'><img src='static/Icons_Final/MetaMagic.png'/></span></td>
</tr>
<tr>
<td><span id='blockGen128' onclick='getPage("SEM_Photography_Contest")' style='cursor:pointer;width: 250px;background: rgba(228,239,232,0.8);'><img src='static/Icons_Final/SEMphotography.png'/></span></td>
</table>
</span>
</td>
</tr>
</table>
<table class='table'>
<tr>
<td>
<span id='sideBiz'>
<br /><br /><br />
<span id='blockGen129'><h1 style='font-size: 68px; margin: 5px;'>B</h1></span><br />
<span id='blockGen130'><h1 style='font-size: 68px; margin: 5px;'>i</h1></span><br />
<span id='blockGen131'><h1 style='font-size: 68px; margin: 5px;'>z</h1></span><br />
</span>
</td>
<td valign = 'top' >
<span id='pageBiz'>
<table>
<tr>
<td><span id='blockGen132' onclick='getPage("Product_Design_Challenge")' style='cursor:pointer;width: 250px;background: rgba(219,225,206,0.8);'><img src='static/Icons_Final/PRODUCT_DESIGN_123.png'/></span></td>
<td><span id='blockGen133' onclick='getPage("Campus_Social_Innovision_Challenge")' style='cursor:pointer;width: 250px;background: rgba(206,215,209,0.8);'><img src='static/Icons_Final/campussocialinnovation.png'/></span></td>
<td><span id='blockGen134' onclick='getPage("Case_Study_challenge")' style='cursor:pointer;width: 250px;background: rgba(240,233,235,0.8);'><img src='static/Icons_Final/casestudychallenge.png'/></span></td>
</tr>
<tr>
<td><span id='blockGen135' onclick='getPage("Data_Analysis_Challange")' style='cursor:pointer;width: 250px;background: rgba(220,200,233,0.8);'><img src='static/Icons_Final/data_analysischallenge.png'/></span></td>
</table>
</span>
</td>
</tr>
</table>
<table class='table'>
<tr>
<td>
<span id='sideMechanical'>
<br /><br /><br />
<span id='blockGen136'><h1 style='font-size: 68px; margin: 5px;'>M</h1></span><br />
<span id='blockGen137'><h1 style='font-size: 68px; margin: 5px;'>e</h1></span><br />
<span id='blockGen138'><h1 style='font-size: 68px; margin: 5px;'>c</h1></span><br />
<span id='blockGen139'><h1 style='font-size: 68px; margin: 5px;'>h</h1></span><br />
<span id='blockGen140'><h1 style='font-size: 68px; margin: 5px;'>a</h1></span><br />
<span id='blockGen141'><h1 style='font-size: 68px; margin: 5px;'>n</h1></span><br />
<span id='blockGen142'><h1 style='font-size: 68px; margin: 5px;'>i</h1></span><br />
<span id='blockGen143'><h1 style='font-size: 68px; margin: 5px;'>c</h1></span><br />
<span id='blockGen144'><h1 style='font-size: 68px; margin: 5px;'>a</h1></span><br />
<span id='blockGen145'><h1 style='font-size: 68px; margin: 5px;'>l</h1></span><br />
</span>
</td>
<td valign = 'top' >
<span id='pageMechanical'>
<table>
<tr>
<td><span id='blockGen146' onclick='getPage("Velocity")' style='cursor:pointer;width: 250px;background: rgba(250,202,210,0.8);'><img src='static/Icons_Final/Velocity.png'/></span></td>
<td><span id='blockGen147' onclick='getPage("Proteus")' style='cursor:pointer;width: 250px;background: rgba(248,204,210,0.8);'><img src='static/Icons_Final/Proteus.png'/></span></td>
<td><span id='blockGen148' onclick='getPage("PerfectMachine")' style='cursor:pointer;width: 250px;background: rgba(205,226,235,0.8);'><img src='static/Icons_Final/PerfectMachine.png'/></span></td>
</tr>
<tr>
<td><span id='blockGen149' onclick='getPage("Robowars")' style='cursor:pointer;width: 250px;background: rgba(227,214,202,0.8);'><img src='static/Icons_Final/RoboWars.png'/></span></td>
<td><span id='blockGen150' onclick='getPage("wrightflight")' style='cursor:pointer;width: 250px;background: rgba(217,227,243,0.8);'><img src='static/Icons_Final/WrightFlight.png'/></span></td>
</table>
</span>
</td>
</tr>
</table>
<table class='table'>
<tr>
<td>
<span id='sideChem'>
<br /><br /><br />
<span id='blockGen151'><h1 style='font-size: 68px; margin: 5px;'>C</h1></span><br />
<span id='blockGen152'><h1 style='font-size: 68px; margin: 5px;'>h</h1></span><br />
<span id='blockGen153'><h1 style='font-size: 68px; margin: 5px;'>e</h1></span><br />
<span id='blockGen154'><h1 style='font-size: 68px; margin: 5px;'>m</h1></span><br />
</span>
</td>
<td valign = 'top' >
<span id='pageChem'>
<table>
<tr>
<td><span id='blockGen155' onclick='getPage("Industry_Defined_Problem")' style='cursor:pointer;width: 250px;background: rgba(233,226,244,0.8);'><img src='static/Icons_Final/IDP.png'/></span></td>
<td><span id='blockGen156' onclick='getPage("The_Portal")' style='cursor:pointer;width: 250px;background: rgba(231,248,215,0.8);'><img src='static/Icons_Final/the_portal.png'/></span></td>
<td><span id='blockGen157' onclick='getPage("Chemical_Breakdown")' style='cursor:pointer;width: 250px;background: rgba(218,234,250,0.8);'><img src='static/Icons_Final/Chemical_Breakdown.png'/></span></td>
</tr>
</table>
</span>
</td>
</tr>
</table>
<table class='table'>
<tr>
<td>
<span id='sideTechnites'>
<br /><br /><br />
<span id='blockGen158'><h1 style='font-size: 68px; margin: 5px;'>T</h1></span><br />
<span id='blockGen159'><h1 style='font-size: 68px; margin: 5px;'>e</h1></span><br />
<span id='blockGen160'><h1 style='font-size: 68px; margin: 5px;'>c</h1></span><br />
<span id='blockGen161'><h1 style='font-size: 68px; margin: 5px;'>h</h1></span><br />
<span id='blockGen162'><h1 style='font-size: 68px; margin: 5px;'>n</h1></span><br />
<span id='blockGen163'><h1 style='font-size: 68px; margin: 5px;'>i</h1></span><br />
<span id='blockGen164'><h1 style='font-size: 68px; margin: 5px;'>t</h1></span><br />
<span id='blockGen165'><h1 style='font-size: 68px; margin: 5px;'>e</h1></span><br />
<span id='blockGen166'><h1 style='font-size: 68px; margin: 5px;'>s</h1></span><br />
</span>
</td>
<td valign = 'top' >
<span id='pageTechnites'>
<table>
<tr>
<td><span id='blockGen167' onclick='getPage("Psychadelic_Room")' style='cursor:pointer;width: 250px;background: rgba(208,226,240,0.8);'><img src='static/Icons_Final/PsychRoom.png'/></span></td>
<td><button id='blockGen168' class='button1' onclick='getPage("Dance_Dance_Revolution")' style='cursor:pointer;border-radius: 0%;width: 250px;height: 250px;margin-top: 0px;background: rgba(230,224,221,0.8);'><h1 style='text-align:center;font-family: acens;'>Dance Dance Revolution</h1></td>
<td><button id='blockGen169' class='button1' onclick='getPage("Arcade_Room")' style='cursor:pointer;border-radius: 0%;width: 250px;height: 250px;margin-top: 0px;background: rgba(219,219,250,0.8);'><h1 style='text-align:center;font-family: acens;'>Arcade Room</h1></td>
</tr>
<tr>
<td><span id='blockGen170' onclick='getPage("Blitzkrieg")' style='cursor:pointer;width: 250px;background: rgba(208,209,226,0.8);'><img src='static/Icons_Final/blitzkrieg.png'/></span></td>
<td><span id='blockGen171' onclick='getPage("Megapixel")' style='cursor:pointer;width: 250px;background: rgba(238,247,236,0.8);'><img src='static/Icons_Final/megapixel.png'/></span></td>
</table>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideSimplicity'>
<span id='blockGen172' style='background: rgba(249,245,239,0.8);'><img src='static/Icons_Final/SIMPLICITY.png ' width='250px'/></span><br />
<span id='blockGen173' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(234,227,214,0.8);' onclick='getPage("Simplicity","Simplicity_Description")'><h3>Description</h3></span>
<span id='blockGen174' style='width:220px;padding: 15px;border-radius:20px;background: rgba(203,213,223,0.8);'><h3>Contact: Nanda Kumar <br/>nanda9045@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupSimplicity">
<span id = "tabsSimplicity_Description">
<span id="blockGen175" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
'Simplicity is the ultimate sophistication.'' -Leonardo da Vinci</br> Mathematics appeals to the highest senses of human beings, it is the simulation of our logical senses.</span><span id="blockGen176" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Mathematics has always fascinated people over the ages for its “simplicity”</span><span id="blockGen176" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >and ease to simulate real life situations, and find solutions for them, without any physical change. MATLAB is a very effective development tool for performing computationally intensive tasks quickly and easily. MATLAB builds the bridge between the human thought and implementation in mathematics.</span><span id="blockGen176" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >If you think you are second to none when it comes to coding in MATLAB then Simplicity is the right place to prove yourself.</span><span id="blockGen176" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Starting from simple math problems to image and audio processing,</span><span id="blockGen176" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >simplicity questions interests everyone from novice to expert.</span><span id="blockGen176" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > Being one-of-a-kind online programming contest, Simplicity</span><span id="blockGen176" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >sees amateur to professional participants from around the world</span><span id="blockGen176" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >trying to crack problems in various fields of mathematics,</span><span id="blockGen176" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >science and engineering.The dates for test run and the main event will be announced shortly</span><span id="blockGen176" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><B>EVENT FORMAT</B></span><span id="blockGen176" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >This is an online event</span><span id="blockGen176" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The problems will not be specific to any particular domain of engineering, they will rather be based on fundamental mathematics and basic engineering</span><span id="blockGen176" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The event will be of 8 hour duration.</span><span id="blockGen176" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The solutions to the each question has to be uploaded for evaluationPoints will be awarded after evaluation of submitted solutions.</span><span id="blockGen176" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><B>EVENT RULES</B></span><span id="blockGen176" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Codes have to be submitted in the form of MATLAB .m files with specific format.</span><span id="blockGen176" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The format will be specified along with each question.</span><span id="blockGen176" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Participants may upload answer to problems any number of times.</span><span id="blockGen176" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Uploading codes intended to harm the server, will earn disqualification.</span><span id="blockGen176" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The submitted source code will be checked if it is copied. Any copying of code would lead to immediate disqualification of both the codes in doubt.</span><span id="blockGen176" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><B>SCORING CRITERIA</B></span><span id="blockGen176" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The evaluation of the codes is done automatically by a MATLAB server.</span><span id="blockGen176" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Points are allotted based on the performance of the solution to different test cases.</span><span id="blockGen176" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The participants may submit the codes as many times before the final deadline. The codes last submitted will be judged.</span><span id="blockGen176" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >In case of a tie, the total login time will be considered.</span><span id="blockGen176" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The organizers decision will be final and binding.</span><span id="blockGen176" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideWaltz'>
<span id='blockGen177' style='background: rgba(227,240,205,0.8);'><img src='static/Icons_Final/Waltz.png ' width='250px'/></span><br />
<span id='blockGen178' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(216,228,238,0.8);' onclick='getPage("Waltz","Waltz_Arena")'><h3>Arena</h3></span>
<span id='blockGen179' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(201,238,215,0.8);' onclick='getPage("Waltz","Waltz_Goal")'><h3>Goal</h3></span>
<span id='blockGen180' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(212,234,228,0.8);' onclick='getPage("Waltz","Waltz_Specifications")'><h3>Specifications</h3></span>
<span id='blockGen181' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(246,212,215,0.8);' onclick='getPage("Waltz","Waltz_Evaluation")'><h3>Evaluation</h3></span>
<span id='blockGen182' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(239,217,243,0.8);' onclick='getPage("Waltz","Waltz_Bot Specification and Rules")'><h3>Bot Specification and Rules</h3></span>
<span id='blockGen183' style='width:220px;padding: 15px;border-radius:20px;background: rgba(203,213,243,0.8);'><h3>Contact: Nanda Kumar <br/>nanda9045@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupWaltz">
<span id = "tabsWaltz_Arena">
<span id="blockGen184" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
1. The arena comprises of 15cm high walls in the form of a small maze. The wall will be inwhite color. </span><span id="blockGen185" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >2. The track may contain the following elements </span><span id="blockGen185" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >a) Straight Stretches </span><span id="blockGen185" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >b) 90 degree turns.</span><span id="blockGen185" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >c) Check-lines: White strips perpendicular to the direction of navigation indicating wallswitch. </span><span id="blockGen185" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >3. The base of the arena is painted in black except for the check-lines. </span><span id="blockGen185" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >4. A shortcutroute (the third white strip from entrance) is also provided for teams which can </span><span id="blockGen185" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >use it as a shortcut to finish the maze faster. </span><span id="blockGen185" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >5. The check-lines, of thickness 3 cmare provided at place where there are two walls on either sides of the check-line.  </span><span id="blockGen185" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >6. <b>Dimensions:</b> The arena will be of dimensions no more than 290cm X 250 cm (including allwall thickness) with the space between any two walls being 40cm exactly(bot navigation width)</span><span id="blockGen185" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The top view of the wall maze is shown below</span><span id="blockGen185" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><img src='./data/waltz.jpg' /><b>Index:</b></span><span id="blockGen185" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Green arrow- Entrance</span><span id="blockGen185" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Orange arrow- Exit for shortcut path</span><span id="blockGen185" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Blue Arrow- Exit for Original path
</span>
</span>
<span id = "tabsWaltz_Goal">
<span id="blockGen186" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
Teams must build a wall following bot that navigates the maze in minimum possible timewhile switching walls at the check-lines indicated in the arena diagram
</span>
</span>
<span id = "tabsWaltz_Specifications">
<span id="blockGen188" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
The check-lines (except the third check-line) are placed such that the bot, if switched successfully, </span><span id="blockGen189" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >has to negotiate only ‘L’ shaped 90 degree turns. </span><span id="blockGen189" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >There are two paths that the participant can choose to solve the maze </span><span id="blockGen189" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >1. Original path </span><span id="blockGen189" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >2. Shortcut path </span><span id="blockGen189" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The original path involves only wall switching at check-lines (except for the 3rdcheck-line which needs to be ignored) and a single type of ‘L’ shaped corners. </span><span id="blockGen189" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The shortcut path is similar to the original path, but involves negotiation of a left-turn at the 3rd check-line to follow the wall including the familiar ‘L’ shaped 90 degree turn.
</span>
</span>
<span id = "tabsWaltz_Evaluation">
<span id="blockGen190" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
Each team is given a maximum of 5 min to complete the maze and the score pertaining to each team will be evaluated as</span><span id="blockGen191" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Score = 300-T + X</span><span id="blockGen191" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Where T is the time taken for the team to complete the maze in seconds </span><span id="blockGen191" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >X= 5 x No. of check-lines navigated successfully (except the 3rd check-line).</span><span id="blockGen191" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Teams that navigate the 3rd check-line successfully and use the shortcut will be awarded an extra 20 points
</span>
</span>
<span id = "tabsWaltz_Bot Specification and Rules">
<span id="blockGen192" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
<ul><li>The bot should fit in a box of dimensions 18 x 18 x 12 (cm).</li><li>The bot must switch at the check-lines (except the 3rd check-line) where the participating team must take the appropriate decision to use the shortcut or the original path.<\li><li>If the bot fails to follow the correct wall or strays into an ambiguous path at any point of time during the run, it will be placed just after the previous check-line it has successfully negotiated. However, for bots intending to use the shortcut path, the bot will be defaulted to location just after the 2ndcheck-line</li><li>It is advisable to a use a lower RPM motors to negotiate turns easily</li><li>Ready-made sensor modules are ALLOWED.However, use of readymade chassis or steppers/SERVO motors are not ALLOWED</li><li>Use of any mechanism which defiles or threatens to defile the arena will not be tolerated and the pertaining teamwill be disqualified.</li><li>The judges have the final say regarding the disqualification or evaluation of the participating team.</li></ul>
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideTrade_OFF'>
<span id='blockGen194' style='background: rgba(220,208,221,0.8);'><img src='static/Icons_Final/trade_off.png ' width='250px'/></span><br />
<span id='blockGen195' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(242,221,214,0.8);' onclick='getPage("Trade_OFF","Trade_OFF_Description")'><h3>Description</h3></span>
<span id='blockGen196' style='width:220px;padding: 15px;border-radius:20px;background: rgba(250,248,211,0.8);'><h3>Contact: Nanda Kumar <br/>nanda9045@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupTrade_OFF">
<span id = "tabsTrade_OFF_Description">
<span id="blockGen197" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
<b>Trade-off </b>:n.\ˈtrād-ˌȯf\ : A trade-off (or tradeoff) is a situation that involves losing</span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >one quality or aspect of something in return for gaining another quality or aspect.</span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >There is no true test of an artist than to capture the world by his elegance.</span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >With breadboard as canvas and hues of transistors and gates,</span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >this event evokes the artist in the Engineer to sketch his masterpiece to glory.</span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >This event challenges you to solve basic analog and digital problems</span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >at the lowest level of abstraction in the most intuitive manner, where not just designing circuits</span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >but also making judicious use of the resources is taken into account.</span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >So get ready to scratch your gray cells, and start designing!</span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><B>EVENT FORMAT</span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Round 1</b></span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Written qualification round comprising of objective questions conducted during Engineer.</span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >A limited number of teams, depending on their performance in the qualification round, will proceed into round 2.</span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The questions challenge one's understanding of basic analog and digital electronic circuits.</span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Round 2 </b></span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Each team is expected to design circuits for on the spot problem statements(a set of tasks may be Given).</span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Each team is provided with equal amount of virtual money.</span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Completion of a task would fetch you virtual money.</span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >A task is said to be complete only when a design is implemented on hardware and the expected output is observed. No credit will be given for design alone. The amount to be added will be decided based on the quality of the result obtained and the discretion of the judges.</span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Half the cost of the component will be credited (as virtual money) on returning unused component.</span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Technical help, if required can also be obtained at the cost of virtual money.</span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Teams will NOT be allowed to carry their own personal components to the event. All the components required for the event will be provided by the organizers.</span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><B>GENERAL INFORMATION</span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Team size: Three(maximum) </span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Resources</b></span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Datasheets for all the components required will be provided.</span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > <b>Useful Knowledge</b></span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Basics of Analog Electronic Circuits: Transistors, OPAMPs, 555 timers, etc.</span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Basics of Digital Electronic Circuits: TTL gates, adders, flip-flops etc.</span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Analog Communication: Simple modulator-demodulator circuits</span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><B>JUDGING CRITERIA</B></span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The output of the circuit will be evaluated.</span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >In case of a tie, time required to build the circuit will be considered.</span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The team with the highest amount of virtual money in their account at the end of the event will be declared as the winner.</span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Judges' decision will be final and binding in all cases.</span><span id="blockGen198" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideSymphony'>
<span id='blockGen199' style='background: rgba(208,215,238,0.8);'><img src='static/Icons_Final/Symphony.png ' width='250px'/></span><br />
<span id='blockGen200' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(231,225,203,0.8);' onclick='getPage("Symphony","Symphony_Description")'><h3>Description</h3></span>
<span id='blockGen201' style='width:220px;padding: 15px;border-radius:20px;background: rgba(211,211,238,0.8);'><h3>Contact: Nanda Kumar <br/>nanda9045@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupSymphony">
<span id = "tabsSymphony_Description">
<span id="blockGen202" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
Music is the soul of many art forms. Fountains are a symbol of beauty and elegance.</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Blending these two to form a spectacular show has been made possible using audio processing</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >techniques and basic electronic concepts. At Engineer 2012,</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Symphony gives the participants an opportunity to dabble into the sights</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >and sounds of electronics and bring the subject to life.</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Symphony requires participants to control a musical fountain’s water flow and lights,</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >so that the fountain dances to the tunes of the music. A huge draw every Engineer, Symphony</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >generates huge participation and promises a great crowd.</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>SPECIFICATIONS:</b></span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><a href='./data/symphony.pdf'>Arena Specification.</a></span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><B>EVENT FORMAT</B></span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Design an electronic controller circuit for a musical fountain.</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The water jets and lights on the fountain should be aesthetically harmonized with the music that is played.</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The fountain fitted with lights and water jet nozzles shall be provided.</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The water jets are controlled by solenoid valves and the lights are controlled by relay circuits.</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The teams have to control these lights and nozzles by digital signals, TTL compatible.</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The details of the fountain and the I/O specification of the circuit has been uploaded on the site.</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Three tunes will be played for each of the teams. One of them will be the same for all the teams. This tune will be available shortly.</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The second tune will be chosen by the participant team. Teams are required to submit the song in advance before the start of the event on a flash drive.</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The third tune will be chosen at random from the organizers’ database. Each tune shall be less than 2 minutes long.</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >All teams coming will have to provide a 2 page abstract during the event to receive participation certificates.</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The abstract should contain the description of algorithm and schematics of circuits used.</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>SYMPHONY TUNE:</b></span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >To be downloaded(Will be released shortly)</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><B>RULES</B></span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Teams can comprise of a maximum of three members.</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The music input is given in the form of a stereo signal to the circuit through a standard male earphone connector as line-in.</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The music will also be played simultaneously on the speaker.</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >A qualification round will be conducted prior to the final competition based on which teams will be filtered.</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The teams will be allowed to tune their circuits during this round.</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><B>JUDGING CRITERIA</B></span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Synchronization with the tunes – The operation of the fountain should be in harmony with music component(s).</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The team shall make this clear while explaining their algorithm.</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >(The music components can be any apparent feature such as frequency range,</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >amplitude, a combination of frequency and amplitude, etc.) Better synchronization carries more points.</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Aesthetic appeal – Along with synchronization, the combination and sequence of water jets and</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >lights should be chosen so as to create the best possible aesthetic appeal.</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Design of the circuit – Teams shall explain their circuit to the judges. Good quality designs shall</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >carry more marks.</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Cost of the circuit – Cost of the circuit should be kept at minimum. Higher the cost of the circuit,</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >lesser the points.</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The abstract will be used for judging in case of a tie.</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >At any point of time during the event, the judges can change the rules to maintain fairness and the spirit of healthy competition.</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Decisions made by the judges will be final and binding.</span><span id="blockGen203" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideTrailBlazer'>
<span id='blockGen204' style='background: rgba(237,238,236,0.8);'><img src='static/Icons_Final/trailblazer.png ' width='250px'/></span><br />
<span id='blockGen205' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(217,244,206,0.8);' onclick='getPage("TrailBlazer","TrailBlazer_Description")'><h3>Description</h3></span>
<span id='blockGen206' style='width:220px;padding: 15px;border-radius:20px;background: rgba(220,221,236,0.8);'><h3>Contact: Nanda Kumar <br/> nanda9045@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupTrailBlazer">
<span id = "tabsTrailBlazer_Description">
<span id="blockGen207" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
<b>Description:</b></span><span id="blockGen208" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >noun /ˈtrālˌblāzər/</span><span id="blockGen208" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >1. A person who makes a new track through wild country.</span><span id="blockGen208" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >2. A pioneer; an innovator</span><span id="blockGen208" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Get on the codes of Samuel Morse, decode the ‘dits and dahs’ and ace the event.</span><span id="blockGen208" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >A simple event based on line follower robotics. You are required to build a line follower robot</span><span id="blockGen208" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >that will seamlessly move on the morse code and decode them. Participate  in this innovative event</span><span id="blockGen208" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >and hone your robotic skills.</span><span id="blockGen208" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > <b>Problem Statement</b></span><span id="blockGen208" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Will be released soon</span><span id="blockGen208" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ></span><span id="blockGen208" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><B>ROBOT SPECIFICATIONS</B></span><span id="blockGen208" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><ul><li>The robot should be completely autonomous and self contained; external computers not allowed.</li><li>The robot should fit into a box of dimensions 25cm x 25cm x 25cm.</li><li>There is no weight restriction.</li><li>The robot cannot expand beyond the given dimensions at any time during the event.</li><li>The robot may have any type of sensor as long as it remains within the robot dimensions and not harm the arena.</li><li>The robot is required to have an onboard power source not based on combustion.</li><li>The maximum voltage between any two points on the robot should not exceed 12 volts.</li><li>Use of Lego kits or other ready-made kits is strictly prohibited. For details, please mail the specifications of your PCB with an attached image to in the contact details query.</li><li>Sharp objects on the robot which may damage or mark the arena will lead to disqualification of the team.</li></ul></span><span id="blockGen208" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><B>OTHER DETAILS</B></span><span id="blockGen208" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><ul><li>A maximum of 4 members may be present in one team.</li><li>Total time allotted is 10 minutes.</li><li>Each team will be given 10 minutes in which they can start the</span><span id="blockGen208" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > attempt a maximum of 3 times of which the best time of completion will </span><span id="blockGen208" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >be recorded for the results.</li><li>The robot may not deviate completely from the path at any time.</li><li>The robot is expected to stop automatically at the end of the path which is going to be a circle of same colour as the line preceding it.</li></ul></span><span id="blockGen208" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><B>CONTEST PROCEDURE</B></span><span id="blockGen208" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><ul<<li>The arena layout will not be shown until all the robots are given to the committee.</li><li>However a small sample arena will be available before the contest for calibration and testing.</li><li>The test arena will be made of same materials as the full-size and will be placed in similar lighting conditions.</li><li>After the arena is revealed, no modifications of any type may be made to the robots, including software or hardware changes.</li><li>When it is the turn for the team, a total of 10 min will be given.</li><li>In the given 10 min the person may calibrate the robot within a given time of 1 min.</li><li>The team will have a maximum of three attempts within given 10 mins.</li><li>In case no team is able to complete the path, the judges will decide upon the winner.</li><li>Judges' decision will be final and binding in all cases.</li>
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideAutomata'>
<span id='blockGen209' style='background: rgba(227,228,211,0.8);'><img src='static/Icons_Final/AUTOMATA_NEW.png ' width='250px'/></span><br />
<span id='blockGen210' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(226,220,224,0.8);' onclick='getPage("Automata","Automata_Description")'><h3>Description</h3></span>
<span id='blockGen211' style='width:220px;padding: 15px;border-radius:20px;background: rgba(224,245,212,0.8);'><h3>Contact: Nanda Kumar <br/> nanda9045@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupAutomata">
<span id = "tabsAutomata_Description">
<span id="blockGen212" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
Robotics has advanced in ways that we had never imagined.</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >This attitude of innovation is what inspires ‘AUTOMATA’, the flagship event of ENGINEER.</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > AUTOMATA is back, to taunt you with a challenging problem statement. Get ready to be surprised this year with a twist that you would never have thought of.</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > The ultimate image processing event. Build an autonomous robot and guide it, with only the help of images</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >acquired from an overhead camera, from the start position on an arena to the end position following a specific path.</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The ‘Specified Path’ is your problem, code is your solution.</br>Number of members in a team: max 4</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Problem Statement</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Arena Details</b> The arena will be a non-reflective surface on top of a wooden base.</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > An overhead camera is positioned on top of the arena so that it is completely visible. The position of the camera with respect to the arena will be fixed.</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The arena consists of a white background with square nodes at certain points. One of the nodes is the finish node, and will be marked in RED, while the rest of the nodes will be BLACK.</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The nodes are inter-connected by BLACK “paths”(there may not be a direct connection between every given pair of nodes).</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Picture to be uploaded soon</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Objectives</b> The robot has to traverse through the arena, to reach the RED node, from a specified node, using the shortest path available.</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Reaching the final node, without traversing the shortest path, may be considered for evaluation only no robot ever moves ahead on the shortest available path.</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > The only input to you will be the stream from the overhead camera feed.</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The robot can move ahead only on the paths connecting the nodes.</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >ONLY DC MOTORS are allowed. Steppers and wheel encoders will lead to disqualification of the team.</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >There will be a maximum of 15 minutes for each team in which they can have as many trials as required. Teams will also be given 10 minutes for calibration.</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >All teams must submit their bots, codes, or laptops at the start of the competition.</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Scoring Criteria</b>The best time is taken in consideration.</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > Any deviation from path will lead to restart of trial.</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > In case of no one completing the traversal of arena, the team who has gone the farthest will win.</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > The scoring is time-based and the team which finishes first wins.</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > Illegal robot movements will result in a restart of the trial (Example: Deviation from the paths).</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > The trial starts when the robot starts moving from the initial position as mentioned in the figure.</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > The trial ends when the robot reaches the destination or if the stipulated time ends.</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The team will be penalized every time the robot deviates from the path.</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Robot Details</b></span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The robot should be completely autonomous.</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > The robot should fit into a box of dimensions 20x18 (length x width).</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The robot is required to have an onboard power source not based on combustion.</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > The maximum voltage between any two points on the robot should not exceed 12 volts.</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > The robots are NOT allowed to have stepper motors, sensors for a wheel encoder and any other sensors.</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > The robots can communicate with a computer outside the arena either through wired or wireless connection.</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > In case of a wired connection, the wire must be kept slack all the time and must emerge from the top of the robot.</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > Use of on-board camera is not allowed.</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > The following software for image processing are allowed:</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><ul><li>Open CV</li><li>MATLAB</li> <li>Scilab / GNU Octave</li></ul></span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > If any other software is used for image processing, please inform us.</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > Softwares with ready-made image processing codes/GUIs is not allowed.</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Sharp objects on the robot which may damage the arena will lead to disqualification of the team.</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Camera Details</b></span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >An overhead USB camera is placed such that the entire arena is just visible. </span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The camera provided by us will support image acquisition in these modes: 640x480, 1600x1200 and in RGB/YUV formats.</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > The teams will have to use the camera provided by us. </span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>General Information</b></span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >A maximum of 4 members per team is allowed. We do not provide computers to the participating teams. It is expected that you arrange for your own.</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The robot will initially be placed in a node of our choice. The starting node may be different for different teams.</span><span id="blockGen213" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideFoxHunt'>
<span id='blockGen214' style='background: rgba(234,234,220,0.8);'><img src='static/Icons_Final/foxxhunt.png ' width='250px'/></span><br />
<span id='blockGen215' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(240,219,217,0.8);' onclick='getPage("FoxHunt","FoxHunt_Description")'><h3>Description</h3></span>
<span id='blockGen216' style='width:220px;padding: 15px;border-radius:20px;background: rgba(236,229,219,0.8);'><h3>Contact: Nanda Kumar <br/>nanda9045@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupFoxHunt">
<span id = "tabsFoxHunt_Description">
<span id="blockGen217" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
“In the new era, thought itself will be transmitted by radio.” --Guglielmo Marconi</span><span id="blockGen218" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Foxhunt, is a fun filled package on the lines of a traditional English activity involving</span><span id="blockGen218" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >tracking and chasing a fox by trained hounds. The difference at Engineer 2012 is that,</span><span id="blockGen218" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >the FOX is a Radio Transmitter and the HUNTERS are budding communication engineers.</span><span id="blockGen218" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Participants are required to track down a transmitter (FOX) that could be situated</span><span id="blockGen218" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >anywhere in the campus, using a tunable radio receiver and an antenna built by them,</span><span id="blockGen218" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >making the event full of fun and excitement.</span><span id="blockGen218" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><B>EVENT FORMAT</B></span><span id="blockGen218" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The event will have two phases </span><span id="blockGen218" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>-FM reception stage(Phase 1)</span><span id="blockGen218" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > -HAM reception stage(Phase 2)</span><span id="blockGen218" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Phase 1</b></span><span id="blockGen218" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >All the participating teams are required to build an FM receiver circuit (with an antenna, if required) for Phase 1.</span><span id="blockGen218" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The participating teams which qualify Phase 1 are then allowed to participate in Phase 2.</span><span id="blockGen218" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Judging criteria:</b></span><span id="blockGen218" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Clarity of reception of FM.</span><span id="blockGen218" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Cost.</span><span id="blockGen218" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Points will be deducted for using ready-made printed circuit boards.</span><span id="blockGen218" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Any extra innovations on the circuit (example- a mechanism to switch between FM and HAM reception) will be rewarded with extra points.</span><span id="blockGen218" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Any antennas to aid FM reception are encouraged, however they won’t independently carry a point weight age and can aid in clarity of reception.</span><span id="blockGen218" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><B>EVENT RULES</B></span><span id="blockGen218" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Each team can consist of a maximum of 4 members.</span><span id="blockGen218" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The members of each team can be from different colleges.</span><span id="blockGen218" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Participating teams those qualify Phase 1 will only be allowed to participate in Phase 2.</span><span id="blockGen218" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Only one antenna will be provided to the participating teams, who have qualified for phase 2 but are not able to design on their own.</span><span id="blockGen218" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The decision of the judges will be the absolute authority.</span><span id="blockGen218" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><B>DISQUALIFICATIONS</B></span><span id="blockGen218" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Things that amount to disqualification</span><span id="blockGen218" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Usage of a commercial antenna.</span><span id="blockGen218" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Usage of mobile phones or other means of communication between teams during the final event.</span><span id="blockGen218" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Usage of FM transmitters in the range 144-146 MHz</span><span id="blockGen218" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Downloads:</span><span id="blockGen218" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideFifa'>
<span id='blockGen219' style='background: rgba(215,237,243,0.8);'><img src='static/Icons_Final/fifa.png ' width='250px'/></span><br />
<span id='blockGen220' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(245,224,224,0.8);' onclick='getPage("Fifa","Fifa_specifications")'><h3>specifications</h3></span>
<span id='blockGen221' style='width:220px;padding: 15px;border-radius:20px;background: rgba(248,207,222,0.8);'><h3>Contact: Satish Chandra <br/> 9740523343</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupFifa">
<span id = "tabsFifa_specifications">
<span id="blockGen222" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
 Registration fee is Rs. 60/- per participant. Registration will be closed after prelims. A player may register for FIFA and NFS MW together for Rs.100/-</span><span id="blockGen223" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ></span><span id="blockGen223" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >&middot; All games will be Classic 1 vs. 1 in multiplayer mode.</span><span id="blockGen223" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ></span><span id="blockGen223" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >&middot; There will be no practicing allowed. Participants are only allowed to change the necessary controls and check them.</span><span id="blockGen223" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ></span><span id="blockGen223" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >&middot; The total number of rounds will be decided by the participation.</span><span id="blockGen223" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ></span><span id="blockGen223" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >&middot; All rounds will follow usual knockout procedure.</span><span id="blockGen223" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ></span><span id="blockGen223" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >&middot; In case of a draw, the match is continued with the classic rule.</span><span id="blockGen223" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ></span><span id="blockGen223" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >&middot; In case of un-intentional disconnection, the admin will decide on how to proceed. If the game is within half-time and no goals have been scored, the game will be restarted with same teams for a full-time game. If not, the game will be played for the remaining time based on at what time it disconnected with scores being carried over.</span><span id="blockGen223" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ></span><span id="blockGen223" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >&middot; If at any time, a player intentionally disconnects/exits the game, he/she will be disqualified. In case of alt-tabbing, the admin will decide whether it was intentional or a mistake and what action must be taken with disqualification being the maximum penalty.</span><span id="blockGen223" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ></span><span id="blockGen223" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >&middot; Teams can be either clubs or countries according to the user's will.</span><span id="blockGen223" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ></span><span id="blockGen223" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >&middot; The first and second rounds will be classic 4 minute half time matches. The rest will all be 6 minute ones. Final match will be made a best of three.</span><span id="blockGen223" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ></span><span id="blockGen223" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >&middot; The administrator's decision will be final.</span><span id="blockGen223" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >/
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideAoe'>
<span id='blockGen224' style='background: rgba(219,240,215,0.8);'><img src='static/Icons_Final/aoe3.png ' width='250px'/></span><br />
<span id='blockGen225' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(248,245,211,0.8);' onclick='getPage("Aoe","Aoe_specifications")'><h3>specifications</h3></span>
<span id='blockGen226' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(238,220,246,0.8);' onclick='getPage("Aoe","Aoe_generalrules")'><h3>generalrules</h3></span>
<span id='blockGen227' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(246,206,236,0.8);' onclick='getPage("Aoe","Aoe_gamesetting")'><h3>gamesetting</h3></span>
<span id='blockGen228' style='width:220px;padding: 15px;border-radius:20px;background: rgba(218,236,249,0.8);'><h3>Contact: Satish Chandra <br/> 9740523343</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupAoe">
<span id = "tabsAoe_specifications">
<span id="blockGen229" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
Registration Fees: Rs. 200/- per team for 2 vs 2</span><span id="blockGen230" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Competition format: 2 vs 2</span><span id="blockGen230" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Match format: Single elimination i.e. knockout
</span>
</span>
<span id = "tabsAoe_generalrules">
<span id="blockGen231" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
All teams must report at the venue at the time informed.Teams not reporting within 10mins of the allotted time, will lead to disqualification. The time will be informed at least 45 minutes in advance.</span><span id="blockGen232" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The administrator's decision will be final in case of any dispute.</span><span id="blockGen232" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Team members are not allowed to change seats once the aoe map has started to load.</span><span id="blockGen232" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Bug Exploitation: Exploitation of any known or newly discovered bug during the matchwill result in immediate disqualification of the team. Excuses will not be entertained. Notknowing the bug is not an excuse, competitors are expected to know the current bugs. </span><span id="blockGen232" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Definition of Bugsa. Anything abnormal which will give a competitor / team an unfair advantageb. Anything which will cause interruption / fatal error to the game</span><span id="blockGen232" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > Any competitor found to have intentionally disconnected from the game will give thatcompetitor's team a loss for that match.</span><span id="blockGen232" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >If any competitors get disconnected within 15 minutes after the game start, the gamewill be restarted with same civs on same players.</span><span id="blockGen232" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Pauses are allowed. Before pausing and un-pausing , you need to inform your enemyabout this, so that you don't get any advantage. Pauses must be for genuine reasonsonly.</span><span id="blockGen232" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > Any use of hacks like maphack or any software or scripts which gives any unfairadvantage is banned and will result in instant disqualification from the tournament.</span><span id="blockGen232" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Players are required to conduct themselves in a professional manner, showingsportsmanship and respect for everyone involved. Any flaming or insulting will result inteam-disqualification.</span><span id="blockGen232" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > 
</span>
</span>
<span id = "tabsAoe_gamesetting">
<span id="blockGen233" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
 Game Version: Age 2x1 (User patch 1.2)</span><span id="blockGen234" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >RULES 2 vs 2</span><span id="blockGen234" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >M A S T E R S   O F   A R A B I A</span><span id="blockGen234" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Size : 4 player map</span><span id="blockGen234" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Difficulty : Standard</span><span id="blockGen234" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Resources : Standard </span><span id="blockGen234" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Population : 200 </span><span id="blockGen234" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Game Speed : Normal</span><span id="blockGen234" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Reveal Map : Standard</span><span id="blockGen234" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Starting Age : Standard</span><span id="blockGen234" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Victory Condition : Conquest</span><span id="blockGen234" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Team Together : [X] Yes</span><span id="blockGen234" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >All techs : [ ] No</span><span id="blockGen234" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Allow Cheats : [ ] No</span><span id="blockGen234" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Lock Teams : [X] Yes</span><span id="blockGen234" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Lock Speed : [X] Yes</span><span id="blockGen234" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Record Game : [X] Yes</span><span id="blockGen234" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >3. Civilization Pick : Random/Mutual Understanding/Mirrored Civs</span><span id="blockGen234" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideNFS'>
<span id='blockGen235' style='background: rgba(243,245,225,0.8);'><img src='static/Icons_Final/nfs.png ' width='250px'/></span><br />
<span id='blockGen236' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(204,232,231,0.8);' onclick='getPage("NFS","NFS_specifications")'><h3>specifications</h3></span>
<span id='blockGen237' style='width:220px;padding: 15px;border-radius:20px;background: rgba(242,213,219,0.8);'><h3>Contact: Satish Chandra <br/> 9740523343</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupNFS">
<span id = "tabsNFS_specifications">
<span id="blockGen238" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
 Rs. 60/- per participant.</span><span id="blockGen239" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Registration will be closed after prelims.</span><span id="blockGen239" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Players can choose their cars, customize them and modify them.</span><span id="blockGen239" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >At the end of each match, players must maintain the final screens and receive confirmation from a referee.</span><span id="blockGen239" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Any participant failing to complete the race will be disqualified.</span><span id="blockGen239" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Game Type: Sprint</span><span id="blockGen239" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Courses: Courses will be given at random and will be given on the spot. ( Players will be informed before the tournament of any such modifications)</span><span id="blockGen239" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Participants are not allowed to use their own profiles.</span><span id="blockGen239" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Players will be given 2 minutes to setup the car and its performance before the game.</span><span id="blockGen239" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Race Mode Options:</span><span id="blockGen239" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >a. Track Direction : Forward/Backward</span><span id="blockGen239" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >b. N20 : On</span><span id="blockGen239" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >c. Collision Detection : Off</span><span id="blockGen239" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >d. Performance Matching : On</span><span id="blockGen239" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Use of any cheat program is not allowed. Use of Carrera GT and BMW GTR is allowed only in the finals. Use of any settings exceeding standard and permitted settings is not allowed.</span><span id="blockGen239" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Any disconnection of the connection between matches players due to System, Network, PC, and/or Power problems/issues results into a restart of match. If any player does not agree to a match restart, that player will lose by default.</span><span id="blockGen239" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Intentional disconnection will not be tolerated. Upon judgment by the referee, any offending player will be charged with a loss by forfeit.</span><span id="blockGen239" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sidedota'>
<span id='blockGen240' style='background: rgba(217,219,210,0.8);'><img src='static/Icons_Final/dOTA.png ' width='250px'/></span><br />
<span id='blockGen241' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(232,240,221,0.8);' onclick='getPage("dota","dota_specifications")'><h3>specifications</h3></span>
<span id='blockGen242' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(219,224,221,0.8);' onclick='getPage("dota","dota_gamesetting")'><h3>gamesetting</h3></span>
<span id='blockGen243' style='width:220px;padding: 15px;border-radius:20px;background: rgba(205,224,249,0.8);'><h3>Contact: Satish Chandra <br/> 9740523343</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupdota">
<span id = "tabsdota_specifications">
<span id="blockGen244" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
Competition format: 5v5 TeamsMatch format: Single elimination i.e,Knockout</span><span id="blockGen245" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Match winner: The team who destroys the opponent's Frozen Throne / World Tree first, or the team who's opponent surrenders by typing gg/ff/forfeit into the All-Chat.</span><span id="blockGen245" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Finals will be 'Best of 3 games' and all other rounds will be single game only.</span><span id="blockGen245" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
<span id = "tabsdota_gamesetting">
<span id="blockGen246" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
Version : Tournament </span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Password :</b> Yes </span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Cheats :</b> No </span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Spectators :</b> Yes (Only the admins will spectate the matches) </span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Radiant Penalty :</b> None</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Dire Penalty :</b> None</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Rules</b></span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >All players are required to have valid steam IDs.</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Teams must report to the venue at the time informed. If they cannot report within 10mins of allotted time, they will be disqualified. The time will be informed in the contact provided by the team at least 45 minutes in advance.</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The administrator's decision will be final in case of any dispute.</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Game will be hosted by Engineer committee using referees.</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Team members are not allowed to change seats once the DOTA map has started to load.</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >At the end of the match, competitors must maintain the final screenshots and receive the confirmation from the admin.</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Backdooring is allowed. However instances of teleport abuse are not allowed. You cannot use any form of teleport (furion skill) to enter an enemy base unless your creeps are already present in the base. Example: Furion teleporting into enemy's base without Furion's creeps present.</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Sharing of items is allowed as long as the game permits.</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Competitors may pick up items dropped by their opponents.</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Control Sharing is allowed.</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Abuse &amp; Exploitation:</b></span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Trees Trapping:</b> intentionally trapping enemies in trees is not allowed (except Furion's skill).</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Pause Abuse:</b> From the point after hero selection process is completed, pausing without any valid reason is not allowed.</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Creep Blocking:</b> Creep blocking (such as using creeps to block the entrance to the base or using fissure, disallowing creeps from moving down the lane completely) is not allowed. Creep slowing (such as moving in front of the creeps in zigzag manner to slow their progress or using fissure) is allowed.</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Bug Exploitation:</b> Exploitation of any known or newly discovered bug during the match will result in an immediate disqualification of the team. Excuses will not be entertained. Not knowing the bug is not an excuse, competitors are expected to know the current bugs.</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Definition of Bugs</b></span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Anything abnormal which will give a competitor / team an unfair advantage.</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Anything which will cause interruption / fatal error to the game.</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Penalties</b></span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Warning: After a warning is given, the game goes on. If these warnings are accumulated by the team during the match, the team will be disqualified from the tournament.</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Game Loss: A 'Game loss' given to a team means that the team will automatically lose the game, irrelevant of the actual match result.</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Disqualifications: A team disqualification will lead to the team being removed from the tournament. They will not be allowed to take part in the current event.</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Game Saves</b></span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >First save will be at either:</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >15 minutes into the game or First blood</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Second save onwards will be every 15 minutes of the game.</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Saves will be done after any tower/rax are taken down or after a major gank/team-battle at a 'safe' instance decided by the Admins/Referees.</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Admins/Referees have the right to request for additional game save at any moment during the tournament.</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Any competitor found to have intentionally disconnected from the game will give that competitor's team a loss for that match.</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >If any competitors are disconnected within 15 minutes after the game start, the game will be restarted with same heroes on same players and same lanes have to be maintained till 1st creepwave clashes.</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >If any competitors are disconnected 15 minutes after the game start, the game will be reloaded from the latest save, if no barracks have been destroyed since last save. If so, the game will continue.</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >In case of game crash, the game will be reloaded from the latest save.</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >No random chats are allowed in all-chat during the game. Request for pause or save can be made by either captain at any point.</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Pauses are allowed, but there can only be a maximum of two pauses, each 5 minutes, per team. If you cannot agree for longer pauses, the game can be resumed after 5 minutes. Before pausing and un-pausing , you need to inform your enemy about this, so that you don't get any advantage. Pauses must be for genuine reasons only.</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Players are allowed to remap keys before the game, and not during the course of the game.</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Any use of hacks like maphack or any software or scripts which gives any unfair advantage is banned and will result in instant disqualification from the tournament.</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Players are required to conduct themselves in a professional manner, showing sportsmanship and respect for everyone involved. Any flaming or insulting will result in team-disqualification.&#160;</span><span id="blockGen247" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Team or player names may not be vulgar. While it is up to the admins' discretion, as a guideline, avoid the following: profanity, hate-speech, drug use, or sexual&#160;
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideCounterStrike'>
<span id='blockGen248' style='background: rgba(243,234,240,0.8);'><img src='static/Icons_Final/COUNTERSTRIKE.png ' width='250px'/></span><br />
<span id='blockGen249' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(229,248,237,0.8);' onclick='getPage("CounterStrike","CounterStrike_specifications")'><h3>specifications</h3></span>
<span id='blockGen250' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(250,241,228,0.8);' onclick='getPage("CounterStrike","CounterStrike_serversettings")'><h3>serversettings</h3></span>
<span id='blockGen251' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(236,205,204,0.8);' onclick='getPage("CounterStrike","CounterStrike_penalties")'><h3>penalties</h3></span>
<span id='blockGen252' style='width:220px;padding: 15px;border-radius:20px;background: rgba(225,250,219,0.8);'><h3>Contact: Satish Chandra <br/> 9740523343</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupCounterStrike">
<span id = "tabsCounterStrike_specifications">
<span id="blockGen253" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
	Game Version: Counter-Strike 1.6  </span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >         Registration Fees: Rs. 300/- per team</span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >        	General </span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Competition Method : 5 vs. 5 (Team Play, 5 players per team) </span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Victory Condition: The first team to win 16 rounds is declared the winner.</span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >A coin toss will determine starting sides in 1st round of tournament (Counter-Terrorist or Terrorist) and a Knife-Round will decide the starting sides from 2nd round onwards.</span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >In the case of a 15-15 tie after regulation, the following steps will be taken: </span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >For 1st round of tournament, the match will remain a tie and both teams will qualify for next round. </span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >For further rounds of tournament, the match will have overtime. Overtime consists of 6 rounds with starting money of $10,000. Each team will play 3 rounds as Terrorist and 3 rounds as Counter-Terrorist. The team to win 4 rounds first, is declared the winner. In the case of another tie, the overtime will be repeated until a winner is declared. </span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Official Maps: De_Dust2, De_Inferno, De_Nuke, De_Train, De_Tuscan, De_Mirage</span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Map Selection for Match :</span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > 1st Round   : De_Dust2</span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > 2nd Round  :  De_Inferno</span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >                       Semi Finals : Best of 1 (The Team who the knife have to eliminate 3 maps and loosing </span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >                                    team have to eliminate 2 maps)     </span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >  Finals	: Best of 3 (The Team who the knife have to eliminate 2 maps and loosing </span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >                                          team have to eliminate 1 maps)</span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Only team leaders are allowed to use public in-game messages (messagemode1) within a match. The rule also applies when dead. Use of messagemode1 by any member other than the team leader shall result in a warning. Other team members must only use team message (messagemode2), while in a match. </span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The Server Master will be record the process of the match. </span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Engineer Committee may install third party program and/or join as an observer for tournament operations purposes, such as verifying match results or gathering match data.</span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > 	General Game Setting </span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Rounds: 30 Rounds (Max rounds format): Each Team plays 15 rounds as Terrorists and 15 rounds as Counter-Terrorists </span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Round Time: 1 minute 45 seconds. </span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Freezetime : 15 seconds.</span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Approved Grenade Amounts Per Round </span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Flashbangs: 2 </span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Grenades: 1 </span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Smoke Grenades: 1 </span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Any use of more than the approved amount of grenades by any player, will result in a warning, loss of round or even match loss by forfeit. </span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Approved Launch Option Commands </span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >noforcemparms </span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >noforcemaccel </span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >noforcemspd </span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >freq *** </span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Any other commands found in the launch options, not approved by a referee, will at least result in a warning or even a loss by forfeit. </span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Default skins must be used. </span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Any other use of map or program bugs can result in a warning at the minimum or loss by default for the offending team after deliberation and decision by the board of referees at its sole discretion. </span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Using Automatic sniper rifles (Kreig 550 commando & D3/AU1) is not allowed. It may lead to disqualification of team.</span><span id="blockGen254" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
<span id = "tabsCounterStrike_serversettings">
<span id="blockGen255" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
  </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &#159; mp_autokick 0 mp_autocrosshair 0 </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &#159; mp_autoteambalance 0 mp_buytime 0.25 </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &#159; mp_consistency 1 mp_c4timer 35 </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &#159; mp_fadetoblack 1 mp_flashlight 1 </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &#159; mp_forcechasecam 2 mp_forcecamera 2 </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &#159; mp_footsteps 1 mp_freezetime 15 </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &#159; mp_friendlyfire 1 mp_hostagepenalty 0 </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &#159; mp_limitteams 10 mp_logecho 1 </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &#159; mp_logdetail 3 mp_logfile 1 </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &#159; mp_logmessages 1 mp_maxrounds 0 </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &#159; mp_playerid 0 mp_roundtime 1.75 </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &#159; mp_timelimit 0 mp_tkpunish 0 </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &#159; sv_aim 0 sv_airaccelerate 10 </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &#159; sv_airmove 1 sv_allowdownload 0 </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &#159; sv_allowupload 0 sv_alltalk 0 </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &#159; sv_cheats 0 sv_clienttrace 1 </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &#159; sv_clipmode 0 sv_friction 4 </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &#159; sv_gravity 800 sv_lan_rate 25000 </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &#159; sv_maxrate 25000 sv_maxspeed 320 </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &#159; sv_maxunlag 0.5 sv_maxupdaterate 101 </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &#159; sv_minupdaterate 101 sv_minrate 25000 </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &#159; sv_proxies 1 sv_send_logos 1 </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &#159; sv_send_resources 1 sv_stepsize 18 </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &#159; sv_stopspeed 75 sv_unlag 1 </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &#159; sv_voiceenable 1 sv_unlagsamples 1 </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &#159; sv_unlagpush 0 sys_ticrate 10000 </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &#159; allow_spectators 1 decalfrequency 60 </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &#159; edgefriction 2 host_framerate 0 </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &#159; log on pausable 0 </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > Allowed Setting Values for Client </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >cl_updaterate 101 cl_cmdrate 101 </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >rate 25000 m_filter 1/0 </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >hud_fastswitch 1/0 zoom_sensitivity_ratio </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >fps_max 101 cl_dynamiccrosshair 1/0 </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >gamma 1/3 brightness 1/3 </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >cl_minmodels 1/0 cl_shadows 1/0 </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >q Following Client Settings May Not Be Changed (Must use the default values) </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >cl_weather mp_corpse_stay </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >mp_decals max_shells </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >max_smokepuffs fastsprites </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >ex_interp 0.01 for LAN </span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ></span><span id="blockGen256" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
<span id = "tabsCounterStrike_penalties">
<span id="blockGen257" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
 In case of use of any unfair practices listed below, the offending team will be a given a warning at the minimum or loss by default at the referee&rsquo;s sole discretion. </span><span id="blockGen258" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Team members may communicate verbally if they are alive in the match or when all team members are dead. </span><span id="blockGen258" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The player is deemed dead when the screen is completely faded to black. If a bug occurs and the screen doesn&rsquo;t fade to black, the player is deemed dead three seconds after he/she has fallen.</span><span id="blockGen258" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Boosting (stepping on top of own team player) is allowed in play. </span><span id="blockGen258" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Binding Duck to scroll wheel is not allowed. </span><span id="blockGen258" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >C4 must be installed at a viewable location. Installing C4 at a location where a boost is required is allowed. </span><span id="blockGen258" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Silent C4 installation is considered bug play. Such an offense may result in a warning or loss of all remaining TR rounds at the sole discretion of the board of referees. </span><span id="blockGen258" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Throwing grenades over buildings in all maps are allowed. </span><span id="blockGen258" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Any use of the flash bang bug will result in a &lsquo;-3&rsquo; round score for the offending team. If the use of the bug is decided as unintentional, the game continues as normal. If the use of the bug is decided as intentional, the offending team will be a given a warning at the minimum or loss by default. </span><span id="blockGen258" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Use of personal model/skins (includes weapon skins) is not allowed.</span><span id="blockGen258" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Use of personal map texture is not allowed.</span><span id="blockGen258" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >All cheat programs, Use of map bugs, defuse bugs etc. in play (e.g. map swimming, auto aim, knife defuse, magnum defuse etc.) is not allowed.</span><span id="blockGen258" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Use of unfair but available scripts (e.g. silentrun, attack+use, centerview script, norecoil script, etc.) is not allowed</span><span id="blockGen258" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The server master can and will check for the use of any unfair practice or script, even those not listed above, during each match.</span><span id="blockGen258" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >If referee decides that external conditions (Press, Team Leader, Player, Spectator, etc) give unfair advantage to a player, the team may be given a warning or lose by default at the referee&rsquo;s sole discretion. </span><span id="blockGen258" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >If a problem occurs with flash bang bug, the referee reviews the demo file and the offending team loses the round. The match continues normally. </span><span id="blockGen258" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >HLTV Proxy may join the game servers for Tournament Broadcast.</span><span id="blockGen258" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >To test for HLTV flash bugs, players must follow the directions of the server master and/or the referees. </span><span id="blockGen258" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >q If disconnection occurs during a match </span><span id="blockGen258" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >If all the players cannot play due to an unintended, unforeseen accident such as server stoppage, </span><span id="blockGen258" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Before the 3rd round starts: restart the match </span><span id="blockGen258" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >After the 3rd round starts: Disconnected player must re-connect to the server. The round is continued unpausing, and if the disconnected player cannot connect to the server, all players must wait during the freeze time after the round until the disconnected player connects to the server. At this time, the match may continue by unpausing. (Not a restart) </span><span id="blockGen258" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >If up to 3 of all players are unintentionally disconnected: The score for that round is discarded. The game is paused after the round during the freeze time, and all players wait until the disconnected players are connected to the server. When all players are connected, the match may continue by unpausing the game. </span><span id="blockGen258" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >In the case of intentional disconnection, the referee may decide to end the match with the offending team losing by forfeit. </span><span id="blockGen258" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Protests can only be filed by the team leader (e.g. a player that represents the team) </span><span id="blockGen258" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >If a player does not agree to any rules, he/she can express his/her protest to a referee before the completion of a match. Any intentional refusal to connect to the match server can result in a default loss for that team with the decision to </span><span id="blockGen258" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >be made at the sole discretion of the referee. </span><span id="blockGen258" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >If a rematch is decided by the head referee, the team that does not follow this decision will be subject to disqualification.</span><span id="blockGen258" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideInnovating_Mining'>
<span id='blockGen259' style='background: rgba(231,250,229,0.8);'><img src='static/Icons_Final/mining_innovation.png ' width='250px'/></span><br />
<span id='blockGen260' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(223,240,223,0.8);' onclick='getPage("Innovating_Mining","Innovating_Mining_Description")'><h3>Description</h3></span>
<span id='blockGen261' style='width:220px;padding: 15px;border-radius:20px;background: rgba(207,219,247,0.8);'><h3>Contact: Arjun Thumbayil - arjunthumbayil@hotmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupInnovating_Mining">
<span id = "tabsInnovating_Mining_Description">
<span id="blockGen262" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
Students are allowed to think without any bounds on creative grounds to come up with mining techniques that are non-conventional and of-course are safe and economical as well as practically feasible. this will be a power-point presentation round.
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideAdverse_Mining_Problem'>
<span id='blockGen264' style='background: rgba(221,235,222,0.8);'><img src='static/Icons_Final/adverse_mining.png ' width='250px'/></span><br />
<span id='blockGen265' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(247,207,240,0.8);' onclick='getPage("Adverse_Mining_Problem","Adverse_Mining_Problem_Description")'><h3>Description</h3></span>
<span id='blockGen266' style='width:220px;padding: 15px;border-radius:20px;background: rgba(237,220,244,0.8);'><h3>Contact: Arjun Thumbayil - arjunthumbayil@hotmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupAdverse_Mining_Problem">
<span id = "tabsAdverse_Mining_Problem_Description">
<span id="blockGen267" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
This is a power point presentation round where the participants can choose a real-life industry problem (ex: neyveli / kgf) and discuss the problem and come up with the best possible feasible solution(s).  judgment  will be done by the experts.
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideMine_Quest'>
<span id='blockGen269' style='background: rgba(203,217,227,0.8);'><img src='static/Icons_Final/Mine_Quest.png ' width='250px'/></span><br />
<span id='blockGen270' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(238,214,220,0.8);' onclick='getPage("Mine_Quest","Mine_Quest_Description")'><h3>Description</h3></span>
<span id='blockGen271' style='width:220px;padding: 15px;border-radius:20px;background: rgba(209,232,246,0.8);'><h3>Contact: Arjun Thumbayil - arjunthumbayil@hotmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupMine_Quest">
<span id = "tabsMine_Quest_Description">
<span id="blockGen272" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
This is a quiz event which consists of four rounds. </span><span id="blockGen273" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><h3>round 1 : preliminary</h3>All the teams (3 members) will be given an objective question paper to solve which decides the eligibility for the further rounds.</span><span id="blockGen273" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><h3>round 2 : eliminator</h3>The top six teams will be qualified for this round. in this round multi-disciplinary questions will be posed to the teams and are judged from all possible angles. </span><span id="blockGen273" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><h3>round 3 : picture-perfect</h3>This is a visual round in which the participants will be shown various pictures which may/ may not contain a flaw and are identified to detect and correct the flaw if present. they will also be given incomplete diagrams and are asked to complete them.</span><span id="blockGen273" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><h3>round 4 : grand-finale</h3>The ultimate round which decides the winner of the event where their performance is continuously evaluated. this round is a combination of auction round, buzzer round, challenge round, and rapid fire round.
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideHang-Man'>
<span id='blockGen274' style='background: rgba(227,219,225,0.8);'><img src='static/Icons_Final/HANGMAN_MAIN.png ' width='250px'/></span><br />
<span id='blockGen275' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(213,225,210,0.8);' onclick='getPage("Hang-Man","Hang-Man_Description")'><h3>Description</h3></span>
<span id='blockGen276' style='width:220px;padding: 15px;border-radius:20px;background: rgba(216,228,236,0.8);'><h3>Contact: Arjun Thumbayil - arjunthumbayil@hotmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupHang-Man">
<span id = "tabsHang-Man_Description">
<span id="blockGen277" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
This round is based on the actual hangman game where the participants will be given a picture and is required to guess the title or relevant data as per the question posed to them.
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideBlast_Mine_Ventilation'>
<span id='blockGen279' style='background: rgba(233,215,241,0.8);'><img src='static/Icons_Final/blast_mine_ventilation.png ' width='250px'/></span><br />
<span id='blockGen280' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(227,209,233,0.8);' onclick='getPage("Blast_Mine_Ventilation","Blast_Mine_Ventilation_Description")'><h3>Description</h3></span>
<span id='blockGen281' style='width:220px;padding: 15px;border-radius:20px;background: rgba(250,228,241,0.8);'><h3>Contact: Arjun Thumbayil - arjunthumbayil@hotmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupBlast_Mine_Ventilation">
<span id = "tabsBlast_Mine_Ventilation_Description">
<span id="blockGen282" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
A very simple round in which the participants will be given the required data pertaining to blasting/ ventilation and where in the participants are required to design a suitable layout for the same. judgment to be done by experts.
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideMine_Rush'>
<span id='blockGen284' style='background: rgba(226,204,216,0.8);'><img src='static/Icons_Final/Mine_Rush.png ' width='250px'/></span><br />
<span id='blockGen285' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(250,242,211,0.8);' onclick='getPage("Mine_Rush","Mine_Rush_Description")'><h3>Description</h3></span>
<span id='blockGen286' style='width:220px;padding: 15px;border-radius:20px;background: rgba(226,245,242,0.8);'><h3>Contact: Arjun Thumbayil - arjunthumbayil@hotmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupMine_Rush">
<span id = "tabsMine_Rush_Description">
<span id="blockGen287" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
A treasure hunt kind of an event where the teams decode a series of clues to reach the final destination. this round requires the use of some basic survey instruments.
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideTech_Speak'>
<span id='blockGen289' style='background: rgba(242,239,217,0.8);'><img src='static/Icons_Final/Techspeak.png ' width='250px'/></span><br />
<span id='blockGen290' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(250,218,246,0.8);' onclick='getPage("Tech_Speak","Tech_Speak_Description")'><h3>Description</h3></span>
<span id='blockGen291' style='width:220px;padding: 15px;border-radius:20px;background: rgba(231,236,240,0.8);'><h3>Contact: Aashish Mane - +91 9945049097</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupTech_Speak">
<span id = "tabsTech_Speak_Description">
<span id="blockGen292" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
TechSpeak is a series of a video conferences with eminent personalities who are working at the frontier of what possible with technology. In the past we have managed to interact with individuals like John C. Mather, who won the Nobel Prize in Physics for his work on <a href='http://en.wikipedia.org/wiki/Cosmic_Background_Explorer'>http://en.wikipedia.org/wiki/Cosmic_Background_Explorer</a>, Bjarne Stroustrup who was the creator C,C++, Sam Pitroda who has been the advisor to the Prime Minister of India on public information infrastructure.</span><span id="blockGen293" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >This year the aim of TechSpeak is to showcase speakers who can give viewers a precious insight into what the world needs from engineers and what engineers can do for the world. </span><span id="blockGen293" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >"I think I would say that the universe has a purpose, it's not somehow just there by chance ... some people, I think, take the view that the universe is just there and it runs along – it's a bit like it just sort of computes, and we happen somehow by accident to find ourselves in this thing. But I don't think that's a very fruitful or helpful way of looking at the universe, I think that there is something much deeper about it." - Roger Penrose
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideFantastiCity'>
<span id='blockGen294' style='background: rgba(214,214,206,0.8);'><img src='static/Icons_Final/fantasticity2.png ' width='250px'/></span><br />
<span id='blockGen295' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(222,243,211,0.8);' onclick='getPage("FantastiCity","FantastiCity_Description")'><h3>Description</h3></span>
<span id='blockGen296' style='width:220px;padding: 15px;border-radius:20px;background: rgba(250,240,245,0.8);'><h3>Contact: B.THEJA<br/>+919480435585<br/>bnmtheja@gmail.com<br/>Sushil Kumar<br/>+918867345233<br/>sushil199124@gmail.com<br/></h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupFantastiCity">
<span id = "tabsFantastiCity_Description">
<span id="blockGen297" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
With the advent of advanced satellites and various reconnaissance airplanes, it is very difficult to maintain the secrecy of a military base on land. Underwater settlement of military base can be one of the alternative for military base. <a href='./data/FantastiCity.pdf'>Problem Statement</a>
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideCOLOSSUS'>
<span id='blockGen299' style='background: rgba(248,249,219,0.8);'><img src='static/Icons_Final/Colossus.png ' width='250px'/></span><br />
<span id='blockGen300' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(233,237,224,0.8);' onclick='getPage("COLOSSUS","COLOSSUS_Description")'><h3>Description</h3></span>
<span id='blockGen301' style='width:220px;padding: 15px;border-radius:20px;background: rgba(224,232,208,0.8);'><h3>Contact: Mohan Krishna.T<br/>+917411918682<br/>krishnamohan651@gmail.com<br/>Sushil Kumar<br/>+918867345233<br/>sushil199124@gmail.com<br/></h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupCOLOSSUS">
<span id = "tabsCOLOSSUS_Description">
<span id="blockGen302" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
Guess, what is the first thought when it comes to Civil Engineering? Yes, it is Structures, the spotlight of Colossus. The basis of a good structure lies in the mix of innovation, analysis, and the determination to create an identity. This edition of ENGINEER offers a hands-on experience in building an innovative structure using aluminium sections. <a href='./data/COLOSSUS.pdf'>Problem Statement</a> 
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideArchitect'>
<span id='blockGen304' style='background: rgba(236,208,209,0.8);'><img src='static/Icons_Final/Architect2.png ' width='250px'/></span><br />
<span id='blockGen305' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(222,224,245,0.8);' onclick='getPage("Architect","Architect_Description")'><h3>Description</h3></span>
<span id='blockGen306' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(209,250,239,0.8);' onclick='getPage("Architect","Architect_format")'><h3>format</h3></span>
<span id='blockGen307' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(201,216,210,0.8);' onclick='getPage("Architect","Architect_Eligibility")'><h3>Eligibility</h3></span>
<span id='blockGen308' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(250,232,248,0.8);' onclick='getPage("Architect","Architect_Home")'><h3>Home</h3></span>
<span id='blockGen309' style='width:220px;padding: 15px;border-radius:20px;background: rgba(220,201,217,0.8);'><h3>Contact: Mohan Krishna.T<br/>+917411918682<br/>krishnamohan651@gmail.com<br/>Sushil Kumar<br/>+918867345233<br/>sushil199124@gmail.com<br/></h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupArchitect">
<span id = "tabsArchitect_Description">
<span id="blockGen310" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
Participants are required to prepare models for a predefined problem within a fixed time limit. The models will later be put to test and teams fulfilling the winning criteria in the best way will be declared winners. This event has attracted participants from various colleges and students from all disciplines can give it a shot.
</span>
</span>
<span id = "tabsArchitect_format">
<span id="blockGen312" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
The detailed problem statement will be given out on the spot. All materials required to make the model will be provided by the organizers. All the models completed within the given period, abiding the rules and regulations will be tested on the spot and evaluated by the judges.
</span>
</span>
<span id = "tabsArchitect_Eligibility">
<span id="blockGen314" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
o The team can include a maximum of two members.o All members of the team should be enrolled as students in an educational institute.o No person can be a part of more than one team.
</span>
</span>
<span id = "tabsArchitect_Home">
<span id="blockGen316" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
Civil Engineering is an art; a profession of creative ability and logic. Architect provides an opportunity for participants to unleash their innovation in designing an object of significance and splendor. This event aims to harness practical design and constructional abilities of the participants.
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideNirvahana'>
<span id='blockGen318' style='background: rgba(224,216,207,0.8);'><img src='static/Icons_Final/Nirvana.png ' width='250px'/></span><br />
<span id='blockGen319' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(212,211,234,0.8);' onclick='getPage("Nirvahana","Nirvahana_Home")'><h3>Home</h3></span>
<span id='blockGen320' style='width:220px;padding: 15px;border-radius:20px;background: rgba(249,209,208,0.8);'><h3>Contact: Mohan Krishna.T<br/>+917411918682<br/>krishnamohan651@gmail.com<br/>Niveditha.J<br/>+917795543699<br/>niveditha811@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupNirvahana">
<span id = "tabsNirvahana_Home">
<span id="blockGen321" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
A concern for the environment, a passion for design, a desire to innovate… Niravahana is the platform for you. The event requires participants to come up with simple, yet creative solutions to everyday design problems. <a href='./data/NIRVAHANA.pdf'>Problem Statement</a>
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideMindbend'>
<span id='blockGen323' style='background: rgba(246,211,234,0.8);'><img src='static/Icons_Final/mindbend.png ' width='250px'/></span><br />
<span id='blockGen324' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(239,248,225,0.8);' onclick='getPage("Mindbend","Mindbend_eligibility")'><h3>eligibility</h3></span>
<span id='blockGen325' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(244,209,221,0.8);' onclick='getPage("Mindbend","Mindbend_Description")'><h3>Description</h3></span>
<span id='blockGen326' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(247,216,240,0.8);' onclick='getPage("Mindbend","Mindbend_format")'><h3>format</h3></span>
<span id='blockGen327' style='width:220px;padding: 15px;border-radius:20px;background: rgba(206,223,218,0.8);'><h3>Contact: CONTACT: B. THEJA <br/>+919480435585 <br/>bnmtheja@gmail.com <br/>Padmini M <br/>+918123463865 <br/>pm27178@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupMindbend">
<span id = "tabsMindbend_eligibility">
<span id="blockGen328" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
The team can include a maximum of two members. All members of the team should be enrolled as students in an educational institute. No person can be a part of more than one team.
</span>
</span>
<span id = "tabsMindbend_Description">
<span id="blockGen330" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
With a combination of mind boggling questions, core concepts and some really exciting rounds, MindBend is definitely a test of your intellect! Time to prove yourself...!
</span>
</span>
<span id = "tabsMindbend_format">
<span id="blockGen332" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
The quiz will be an amalgamation of visual rounds and written tests, full of interesting and intriguing questions.
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideSky_Lanterns'>
<span id='blockGen334' style='background: rgba(244,228,241,0.8);'><img src='static/Icons_Final/sky_lantern.png ' width='250px'/></span><br />
<span id='blockGen335' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(203,210,216,0.8);' onclick='getPage("Sky_Lanterns","Sky_Lanterns_Description")'><h3>Description</h3></span>
<span id='blockGen336' style='width:220px;padding: 15px;border-radius:20px;background: rgba(203,248,226,0.8);'><h3>Contact: Ashwin K S<br/> 9483523498</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupSky_Lanterns">
<span id = "tabsSky_Lanterns_Description">
<span id="blockGen337" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
Chief Guest may light sky lanterns along with students and dignitaries
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideGreen_Inovation_Challenge'>
<span id='blockGen339' style='background: rgba(235,221,249,0.8);'><img src='static/Icons_Final/Green_Product_Design.png ' width='250px'/></span><br />
<span id='blockGen340' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(236,240,240,0.8);' onclick='getPage("Green_Inovation_Challenge","Green_Inovation_Challenge_Description")'><h3>Description</h3></span>
<span id='blockGen341' style='width:220px;padding: 15px;border-radius:20px;background: rgba(210,229,200,0.8);'><h3>Contact: Ashwin K S<br/> 9483523498</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupGreen_Inovation_Challenge">
<span id = "tabsGreen_Inovation_Challenge_Description">
<span id="blockGen342" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
SCE along with business events committee will be evaluating 'green' innovation ideas based </span><span id="blockGen343" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >on their business feasibility and environmental impact.</span><span id="blockGen343" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideSparsh'>
<span id='blockGen344' style='background: rgba(243,246,202,0.8);'><img src='static/Icons_Final/saprsh.png ' width='250px'/></span><br />
<span id='blockGen345' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(223,232,223,0.8);' onclick='getPage("Sparsh","Sparsh_Description")'><h3>Description</h3></span>
<span id='blockGen346' style='width:220px;padding: 15px;border-radius:20px;background: rgba(226,203,205,0.8);'><h3>Contact: Ashwin K S<br/> 9483523498</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupSparsh">
<span id = "tabsSparsh_Description">
<span id="blockGen347" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
<b>Description:</b>  Sparsh calls upon teams to design and develop a solution to a problem faced by local communities.</span><span id="blockGen348" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The participants are required to make a presentation putting forth their ideas and their proposals</span><span id="blockGen348" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >for the given problem statement. SPARSH stands out from the rest of the events in the</span><span id="blockGen348" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >sense that the team SPARSH will continue to be a part of the project and the implementation</span><span id="blockGen348" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >of the solutions even after Engineer comes to an end and continue its technical support to the organization.
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideThe_Last_Word'>
<span id='blockGen349' style='background: rgba(211,231,213,0.8);'><img src='static/Icons_Final/lastword.png ' width='250px'/></span><br />
<span id='blockGen350' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(212,241,250,0.8);' onclick='getPage("The_Last_Word","The_Last_Word_Description")'><h3>Description</h3></span>
<span id='blockGen351' style='width:220px;padding: 15px;border-radius:20px;background: rgba(207,249,201,0.8);'><h3>Contact: Ashwin K S<br/> 9483523498</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupThe_Last_Word">
<span id = "tabsThe_Last_Word_Description">
<span id="blockGen352" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
Description: The final event to take place during Engineer,</span><span id="blockGen353" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The Last Word is an engaging panel discussion that calls upon eminent personalities to explore a pressing issue which society faces today.</span><span id="blockGen353" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Panel to consist of seven members, including one moderator
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideEthical_Hacking_by_TechDefence'>
<span id='blockGen354' style='background: rgba(200,235,233,0.8);'><img src='static/Icons_Final/HACKING.png ' width='250px'/></span><br />
<span id='blockGen355' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(234,224,248,0.8);' onclick='getPage("Ethical_Hacking_by_TechDefence","Ethical_Hacking_by_TechDefence_Description")'><h3>Description</h3></span>
<span id='blockGen356' style='width:220px;padding: 15px;border-radius:20px;background: rgba(238,231,213,0.8);'><h3>Contact: Manasij</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupEthical_Hacking_by_TechDefence">
<span id = "tabsEthical_Hacking_by_TechDefence_Description">
<span id="blockGen357" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
INTRODUCTION </span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >As information security increasingly becoming a boardroom level concern, training and certification are becoming increasingly important for candidates and companies. With a promising novel initiative on the cards, this year TechDefence and ENGINEER '13 has decided to extend the prospectus of Hack Track- Award Winning Hands on Workshop on Ethical Hacking and Information Security in association with Sunny Vaghela, Director & CTO of TechDefenceacross India.</span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Level 1</span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Wireless and Web application Hacking & Security</span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Android Hacking and security</span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Google & email hacking</span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Cyber forensics</span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Investigation Methodologies & Cyber Forensics</span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Reverse Engineering</span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Level 2</span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Info gathering using Linux</span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Windows memory management</span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Assembly language basics</span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Buffer overflows</span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Metasploitframe Work</span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >For detailed content kindly click here:</span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >(provide the link for the course modules which is given in the proposal)</span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ></span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >About Trainer: Sunny Vaghela (Director & CTO,TechDefence) - </span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Sunny Vaghela is 23 year old renowned Ethical Hacker & has wide experience in the field of Ethical Hacking,Cyber Crime Investigation & Forensics. At the age of 18, Sunny found many loopholes in SMS & VoIP Technology.At 19,Sunny has found loopholes like 'Session Hijacking' & 'Cross Site Scripting' in popular social networking website orkut.com.At 20, He has solved more than 16 cases in association with Crime Branch,Ahmedabad.Sunny Vaghela has also been awarded by Rajiv Gandhi Young Achievers Award as IT Expert of Gujarat.He traced out origin of Terror Email Trail of Ahmedabad Serial Bomb Blasts. He also helped Mumbai Police to get information on “jamat ud dawah” after Mumbai Terror Attacks.He has addressed more than 160 IT security conferences/Workshops at National & International Level across Globe.He has trained professionals from many reputed Companies like Google,Yahoo!,ISACA,Temenos,ZOHO, Deloitte,K7 Antivirus,TCS,HCL,Sify & many Banks of India. He is founder & Chief Technical Officer of TechDefence which is rapidly growing IT Security Training & Consulting Organization focusing on Cyber Crime Investigation,Cyber Law Consulting,Vulnerability Assessment & Penetration Testing.He is recently acknowledged by Microsoft for finding & reporting Vulnerabilities on Microsoft Online Services and now Listed in Microsoft Security Researcher List. To know more visit www.sunnyvaghela.com</span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Workshop Package Includes:</span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ></span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Workshop participation fee</span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >TechDefence Ethical Hacking toolkit fee</span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >CEHE certification fee</span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >HackTrack Portal Access for 2 years.(www.hacktrack.co.in)</span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ></span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >HackTrack Portal Features:</span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ></span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Query support to all workshop participants.</span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Access to Online competition after the workshop in order to select topper of workshop.</span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Access to monthly competitions different tasks and challenges.</span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Access to Webinars on New tools/Techniques/Exploits/Vulnerabilities.</span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Internship/career opportunities from TechDefence associates & partners</span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Weekly newsletters.</span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Resume submission </span><span id="blockGen358" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideAugmented_Reality'>
<span id='blockGen359' style='background: rgba(247,248,250,0.8);'><img src='static/Icons_Final/AUGMENTED.png ' width='250px'/></span><br />
<span id='blockGen360' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(248,207,238,0.8);' onclick='getPage("Augmented_Reality","Augmented_Reality_Description")'><h3>Description</h3></span>
<span id='blockGen361' style='width:220px;padding: 15px;border-radius:20px;background: rgba(228,217,243,0.8);'><h3>Contact: Manasij</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupAugmented_Reality">
<span id = "tabsAugmented_Reality_Description">
<span id="blockGen362" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
 You've all heard of Pranav Mistry who is hugely popular as a connoisseur of this field. In this workshop you will learn to control robots with the movement of your hand. This workshop will be conducted by Frugal Labs who are based in Bangalore.			Registration Fee:  Rs 4250/ team.</br> Each team can have a maximum of 5 members (850/head).</br> A kit will be provided to each team.</span><span id="blockGen363" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >	
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='side3D_Photography'>
<span id='blockGen364'><button class='button1' style='border-radius: 0%;width: 250px;height: 250px;background: rgba(249,234,227,0.8);'><h1 style='text-align:center;font-family: acens;'>3D Photography</h1></button></span><br />
<span id='blockGen365' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(249,249,231,0.8);' onclick='getPage("3D_Photography","3D_Photography_Description")'><h3>Description</h3></span>
<span id='blockGen366' style='width:220px;padding: 15px;border-radius:20px;background: rgba(229,238,222,0.8);'><h3>Contact: Manasij</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroup3D_Photography">
<span id = "tabs3D_Photography_Description">
<span id="blockGen367" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
 For those of you interested in photography and fascinated by how 3D photography works, this is the workshop you should look forward to. The workshop will involve you going around the campus and taking photographs. This will be followed by a session in the lab where you will be stitching and transforming these images. 3D glasses are a part of the registration fee.</br>Registration Fee:  Rs 300/ person</span><span id="blockGen368" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideRC_Aircraft_Design_and_Fabrication'>
<span id='blockGen369' style='background: rgba(215,233,236,0.8);'><img src='static/Icons_Final/RC_Aircraft.png ' width='250px'/></span><br />
<span id='blockGen370' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(234,218,230,0.8);' onclick='getPage("RC_Aircraft_Design_and_Fabrication","RC_Aircraft_Design_and_Fabrication_Description")'><h3>Description</h3></span>
<span id='blockGen371' style='width:220px;padding: 15px;border-radius:20px;background: rgba(235,214,210,0.8);'><h3>Contact: Manasij</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupRC_Aircraft_Design_and_Fabrication">
<span id = "tabsRC_Aircraft_Design_and_Fabrication_Description">
<span id="blockGen372" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
 Ever wanted to design and build your very own aircraft? This is your chance. This year at Engineer we will be having a Remote Controlled Aircraft Design and Fabrication workshop which will be conducted by Aerotrix.</br>Registration Fee:  Rs 7500/ team for economy kit and Rs 12500/team for the complete kit.</br> Each team can have a maximum of 5 members.</span><span id="blockGen373" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideHumanoid_Robot'>
<span id='blockGen374' style='background: rgba(233,201,245,0.8);'><img src='static/Icons_Final/ROBOTICS.png ' width='250px'/></span><br />
<span id='blockGen375' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(214,229,202,0.8);' onclick='getPage("Humanoid_Robot","Humanoid_Robot_Description")'><h3>Description</h3></span>
<span id='blockGen376' style='width:220px;padding: 15px;border-radius:20px;background: rgba(231,248,230,0.8);'><h3>Contact: Manasij</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupHumanoid_Robot">
<span id = "tabsHumanoid_Robot_Description">
<span id="blockGen377" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
 You've been seeing videos of robots which walk, fight and even play football. However, workshops generally don't teach you to build such amazing robots. For the very first time in Engineer we will be conducting a workshop where we will be building a bipedal robot which can perform the above tasks. The workshop will be conducted by Frugal Labs who are based in Bangalore.</br>			Registration Fee:  Rs 7000/ team. </br>Each team can have a maximum of 5 members (1400/head). A kit will be provided to each team.</span><span id="blockGen378" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >	
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideAndroid Application Development'>
<span id='blockGen379' style='background: rgba(208,238,215,0.8);'><img src='static/Icons_Final/Android.png ' width='250px'/></span><br />
<span id='blockGen380' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(201,203,230,0.8);' onclick='getPage("Android Application Development","Android Application Development_Description")'><h3>Description</h3></span>
<span id='blockGen381' style='width:220px;padding: 15px;border-radius:20px;background: rgba(231,211,232,0.8);'><h3>Contact: Manasij</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupAndroid Application Development">
<span id = "tabsAndroid Application Development_Description">
<span id="blockGen382" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
 Registration Fee:  Rs 1200/ person</span><span id="blockGen383" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideBridge_Design_and_Fabrication'>
<span id='blockGen384' style='background: rgba(218,216,240,0.8);'><img src='static/Icons_Final/Bridge_design.png ' width='250px'/></span><br />
<span id='blockGen385' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(231,233,223,0.8);' onclick='getPage("Bridge_Design_and_Fabrication","Bridge_Design_and_Fabrication_Description")'><h3>Description</h3></span>
<span id='blockGen386' style='width:220px;padding: 15px;border-radius:20px;background: rgba(214,201,221,0.8);'><h3>Contact: Manasij</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupBridge_Design_and_Fabrication">
<span id = "tabsBridge_Design_and_Fabrication_Description">
<span id="blockGen387" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
 At Engineer we try to reach out to students of various branches. For the very first time we have something for Civil Engineering students and enthusiasts. The workshop can of course be attended by any one who is interested. The workshop will be conducted by Skyfi Labs and it will involve the design of a bridge through specialized tools on your computers followed by testing of your design on model sized bridges which you will be building with quality equipment provided by us.</br>Registration Fee:  Rs 1800/ team.</br> Each team will consist of 2 people (900/head)</span><span id="blockGen388" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideMindBend'>
<span id='blockGen389' style='background: rgba(237,203,208,0.8);'><img src='static/Icons_Final/mindbend.png ' width='250px'/></span><br />
<span id='blockGen390' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(242,220,231,0.8);' onclick='getPage("MindBend","MindBend_ROUND 4")'><h3>ROUND 4</h3></span>
<span id='blockGen391' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(217,220,244,0.8);' onclick='getPage("MindBend","MindBend_ROUND 3")'><h3>ROUND 3</h3></span>
<span id='blockGen392' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(214,220,239,0.8);' onclick='getPage("MindBend","MindBend_ROUND 2")'><h3>ROUND 2</h3></span>
<span id='blockGen393' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(235,209,202,0.8);' onclick='getPage("MindBend","MindBend_ROUND 1")'><h3>ROUND 1</h3></span>
<span id='blockGen394' style='width:220px;padding: 15px;border-radius:20px;background: rgba(206,218,202,0.8);'><h3>Contact: B. THEJA<br/>+919480435585<br/>bnmtheja@gmail.com<br/>Padmini M<br/>+918123463865<br/>pm27178@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupMindBend">
<span id = "tabsMindBend_ROUND 4">
<span id="blockGen395" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
<b>RAPIDO</b></span><span id="blockGen396" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >DESCRIPTION OF THE GAME:</span><span id="blockGen396" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- 5 rapid fire questions for each participant.</span><span id="blockGen396" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >RULES:</span><span id="blockGen396" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- No repetition of the questions.</span><span id="blockGen396" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >JUDGEMENT CRITERIA:</span><span id="blockGen396" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- Each correct answer will carry 20 points.</span><span id="blockGen396" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- Total points for this round are 100.</span><span id="blockGen396" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- There will be no negative marking for this round
</span>
</span>
<span id = "tabsMindBend_ROUND 3">
<span id="blockGen397" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
<b>SOUNDTRACK</b></span><span id="blockGen398" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >DESCRIPTION OF THE GAME:</span><span id="blockGen398" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- A one minute audio/ video clip would be listened/ shown to each team respectively;</span><span id="blockGen398" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- Team has to identify the theme of the audio/ video.</span><span id="blockGen398" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >RULES:</span><span id="blockGen398" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- There should be no repetition.</span><span id="blockGen398" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- 20 points for correct answer.</span><span id="blockGen398" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- Total points for this round are 40.</span><span id="blockGen398" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >TIME DURATION:</span><span id="blockGen398" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- For audio &ndash; Max. 30 seconds.</span><span id="blockGen398" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- For video - According to the length of the video</span><span id="blockGen398" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >JUDGEMENT CRITERIA:</span><span id="blockGen398" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- Time limit for thinking about the audio/ video should not be exceeding more than 15 seconds.</span><span id="blockGen398" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- There will be negative marking system for this round.</span><span id="blockGen398" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- Penalty of 10 points for incorrect answer.
</span>
</span>
<span id = "tabsMindBend_ROUND 2">
<span id="blockGen399" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
<b> DOUBLE TROUBLE</b></span><span id="blockGen400" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >DESCRIPTION OF THE GAME:</span><span id="blockGen400" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- Teams have to identify the shown images along with their background/specialty.</span><span id="blockGen400" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >e.g.: If the given image is about the car, then participants should identify the manufacturer company of the car as well as the model of the car. </span><span id="blockGen400" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >RULES:</span><span id="blockGen400" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- There should be no repetition.</span><span id="blockGen400" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- Each correct answer will carry 20 points.</span><span id="blockGen400" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- Total points for this round are 60.</span><span id="blockGen400" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >TIME DURATION:</span><span id="blockGen400" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- 10 Seconds per image.</span><span id="blockGen400" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >JUDGEMENT CRITERIA:</span><span id="blockGen400" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- Points would be allotted for both identification of image and its background or specialty.</span><span id="blockGen400" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- 10 points would be allotted for at least single identification of the image.</span><span id="blockGen400" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- There will be a negative marking system in this round.</span><span id="blockGen400" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- 10 points will be deducted for each incorrect answer.</span><span id="blockGen400" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- If one team is unable to identify the image, then it will be forward to next team.</span><span id="blockGen400" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- If the next team gives the correct answer, bonus of 5 points will be awarded, and </span><span id="blockGen400" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >if the respective team fails to answer correctly, then there will be a penalty of 10 points.
</span>
</span>
<span id = "tabsMindBend_ROUND 1">
<span id="blockGen401" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
<b>REMINDER</b></span><span id="blockGen402" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >DESCRIPTION OF THE GAME:</span><span id="blockGen402" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- 10 minutes to solve the 15 multiple choice questions.</span><span id="blockGen402" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >RULES:</span><span id="blockGen402" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- Each correct answer will carry 10 points.</span><span id="blockGen402" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- Total points for this round are 150.</span><span id="blockGen402" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- There will be no negative marking system for this round.</span><span id="blockGen402" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >TIME DURATION:</span><span id="blockGen402" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- 10 Minutes.</span><span id="blockGen402" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >JUDGEMENT CRITERIA:</span><span id="blockGen402" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- Points would not be awarded for more than one answer
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideHR_Event'>
<span id='blockGen403' style='background: rgba(218,215,240,0.8);'><img src='static/Icons_Final/HR.png ' width='250px'/></span><br />
<span id='blockGen404' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(226,204,210,0.8);' onclick='getPage("HR_Event","HR_Event_Description")'><h3>Description</h3></span>
<span id='blockGen405' style='width:220px;padding: 15px;border-radius:20px;background: rgba(214,221,247,0.8);'><h3>Contact: Salman - 08904390686<br/>\ Aditya - 07353643231</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupHR_Event">
<span id = "tabsHR_Event_Description">
<span id="blockGen406" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
<table border="1" cellspacing="0" cellpadding="0" width="600">        <tr>            <td>                    <strong>Rounds</strong>            </td>            <td>                    <strong>Name</strong>            </td>            <td>                    <strong>Tag Line</strong>            </td>        </tr>        <tr>            <td>                    1            </td>            <td>                    Quiz &amp; Crossword            </td>            <td>                    When you know better you do better            </td>        </tr>        <tr>            <td>                    2            </td>            <td>                    Conception            </td>            <td>                    Change the way you look at things and the things you look at change            </td>        </tr>        <tr>            <td>                    3            </td>            <td>                    Survival of D fittest            </td>            <td>                    Fight to Fit, Survive to Succeed            </td>        </tr>        <tr>            <td>                    4            </td>            <td>                    Face off            </td>            <td>                    Never wear a backward baseball cap to an interview unless applying for the job of umpire<strong></strong>            </td>        </tr>        <tr>            <td>                    5            </td>            <td>                    The Jaws            </td>            <td>                    It’s not stress that kills us; it is our reaction to it            </td>        </tr></table>
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideMarkenza'>
<span id='blockGen408' style='background: rgba(216,232,246,0.8);'><img src='static/Icons_Final/MARKENZA.png ' width='250px'/></span><br />
<span id='blockGen409' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(247,250,211,0.8);' onclick='getPage("Markenza","Markenza_Description")'><h3>Description</h3></span>
<span id='blockGen410' style='width:220px;padding: 15px;border-radius:20px;background: rgba(246,211,239,0.8);'><h3>Contact: Salman Usman <br/>salman.usman91@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupMarkenza">
<span id = "tabsMarkenza_Description">
<span id="blockGen411" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
<table border="1" cellspacing="0" cellpadding="0" width="600">        <tr>            <td >                    <strong>Sr. No.</strong>            </td>            <td  >                    <strong>NAME OF THE ROUND</strong>            </td>            <td  >                    <strong>TAGLINE</strong>            </td>            <td  >                    <strong>DESCRIPTION</strong>            </td>        </tr>        <tr>            <td  colspan="4" >                    Round – I –PRARAMBH            </td>        </tr>        <tr>            <td >                    1            </td>            <td  >                    Question answer            </td>            <td  >                    “The roughest roads often lead to the top.”            </td>            <td  >                    Each team will be asked questions with respect to the marketing            </td>        </tr>        <tr>            <td  colspan="4" >                    Round – II- In-sell-sane            </td>        </tr>        <tr>            <td >                    2            </td>            <td  >                    Selling Concept            </td>            <td  >                    “The only way to discover the limits of the possible is to go beyond them into the impossible.”            </td>            <td  >                    Each team will be given a product to design the selling strategy to sell the product.            </td>        </tr>        <tr>            <td  colspan="4" >                    Round – III- Mad Ad            </td>        </tr>        <tr>            <td >                    3            </td>            <td  >                    Advertising (Based on 2nd round product)            </td>            <td  >                    “Nobody counts the number of ads you run; they just remember the impression you make.”            </td>            <td  >                    Each team will have to design a advertisement for the product provided in previous round.            </td>        </tr>        <tr>            <td  colspan="4" >                    Round – IV- Marketing Wizard            </td>        </tr>        <tr>            <td >                    4            </td>            <td  >            </td>            <td  >                    “ if it can be thought, it can be done, a problem can be overcome”            </td>            <td  >                    Each team will be given a non-existence product and they have to frame marketing strategy for that product.            </td>        </tr>        <tr>            <td  colspan="4" >                    Round – V- Enigma            </td>        </tr>        <tr>            <td >                    5            </td>            <td  >                    Treasure Hunt            </td>            <td  >                    “Rich the treasure,                    Sweet the pleasure”            </td>            <td  >                    Each team will be given a clue which will leads to a product.            </td>        </tr>        <tr>            <td  colspan="4" >                    Round – VI- The second coming            </td>        </tr>        <tr>            <td >                    6            </td>            <td  >                    Product re-launch            </td>            <td  >                    “Fall down seven times. Stand up eight.”            </td>            <td  >                    Each team will be given such a product which has failed in the market and they have to re-launch the product in the market with new                    marketing strategy.            </td>        </tr></table>
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideFinance_Event'>
<span id='blockGen413' style='background: rgba(230,201,215,0.8);'><img src='static/Icons_Final/Finance.png ' width='250px'/></span><br />
<span id='blockGen414' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(210,237,225,0.8);' onclick='getPage("Finance_Event","Finance_Event_Description")'><h3>Description</h3></span>
<span id='blockGen415' style='width:220px;padding: 15px;border-radius:20px;background: rgba(204,204,203,0.8);'><h3>Contact: Salman - 08904390686<br/>\ Aditya - 07353643231</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupFinance_Event">
<span id = "tabsFinance_Event_Description">
<span id="blockGen416" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
<div><span style="font-size:12pt;font-weight:bold;text-decoration:underline">Finanza – The Finance Event : </span><span style="font-size:12pt">The ultimate showdown of financial management skills! Do you havewhat it takes to be a finance guru?</span><span style="font-size:12pt;font-weight:bold;text-decoration:underline">Round 1-</span><span style="font-size:12pt;font-weight:bold"> <span style="font-size:12pt;text-decoration:underline">Fin IQ</span> </span><span style="font-size:12pt">Quiz to test your basic financial and economic knowledge.</span><span style="font-size:12pt;font-weight:bold;text-decoration:underline">Round 2- IPL Mock Auction</span><span style="font-size:12pt">Manage to build a sound team by managing your virtual money.</span><span style="font-size:12pt;font-weight:bold;text-decoration:underline">Round 3-Profitable path</span><span style="font-size:12pt">On the basis of certain constraints, decide the best and the most profitable path for the company.</span>&nbsp;
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideBlue Print'>
<span id='blockGen418' style='background: rgba(210,235,236,0.8);'><img src='static/Icons_Final/BluePrint.png ' width='250px'/></span><br />
<span id='blockGen419' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(225,245,223,0.8);' onclick='getPage("Blue Print","Blue Print_Description")'><h3>Description</h3></span>
<span id='blockGen420' style='width:220px;padding: 15px;border-radius:20px;background: rgba(201,242,206,0.8);'><h3>Contact: Raghavan<br/>blueprint@engineer.org.in</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupBlue Print">
<span id = "tabsBlue Print_Description">
<span id="blockGen421" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
<b>Introduction</b></span><span id="blockGen422" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Blueprint, the paper presentation contest held as part of Engineer attracts some of the best minds from all over the country. Participants are invited to present papers spanning various research topics pertaining to the different branches of engineering.</span><span id="blockGen422" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>GENERAL RULES</b></span><span id="blockGen422" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >• Submissions are invited pertaining to novel research ideas and implementations in any of the above fields. • The submissions should be original work by the authors and any hint of plagiarism will lead to instant disqualification.</span><span id="blockGen422" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >• Authors are not permitted to submit papers that have already been accepted for publication/presentation in any other conferences or journals. Also, authors may not submit work that is under review in journals/conferences. • Authors cannot submit the same paper in more than one of the fields. Send the abstract as a PDF attachment to blueprint@engineer.org.in</span><span id="blockGen422" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >• All paper-abstracts will undergo a blind-review process. This means that the authors are not to reveal their identity in ANY form in the abstracts. Authors are only required to mention their names and details in the appropriate section while uploading the abstract. Any attempt to reveal the author’s identity in the submitted abstract will lead to disqualification. • If the abstract is selected, then at least one of the authors has to be present for the final presentation. </span><span id="blockGen422" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>ABSTRACT SUBMISSION RULES AND PROCEDURE</b></span><span id="blockGen422" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >• Authors will need to submit a single page abstract for the initial selections. • There is no specific format for the abstract. • Mention the title of the paper and DO NOT mention the authors name or author-affiliations. </span><span id="blockGen422" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >• The abstract should not exceed 500 words in length and can include tables, figures or other data that the authors feel will improve the chances of their paper being selected. (The word limit is exclusive of the references and the title).• Abstracts which do not comply with the above mentioned rules will be disqualified. </span><span id="blockGen422" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>TEAMS OF 4</b></span><span id="blockGen422" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>IMPORTANT DATES </b></span><span id="blockGen422" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >14th Oct – Deadline for submission of abstracts (Abstracts will be accepted till 11.59 PM) </span><span id="blockGen422" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >19th Oct – Declaration of Selected papers </span><span id="blockGen422" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >24th -27th Oct – Presentation of papers</span><span id="blockGen422" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideSimplineer'>
<span id='blockGen423' style='background: rgba(234,238,238,0.8);'><img src='static/Icons_Final/SIMPLINEER.png ' width='250px'/></span><br />
<span id='blockGen424' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(249,228,247,0.8);' onclick='getPage("Simplineer","Simplineer_Proceedings")'><h3>Proceedings</h3></span>
<span id='blockGen425' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(206,214,225,0.8);' onclick='getPage("Simplineer","Simplineer_Description")'><h3>Description</h3></span>
<span id='blockGen426' style='width:220px;padding: 15px;border-radius:20px;background: rgba(235,232,237,0.8);'><h3>Contact: Saurabh Verma (9742091940)<br/>Sumit Bansal (9663358730)</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupSimplineer">
<span id = "tabsSimplineer_Proceedings">
<span id="blockGen427" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span><span id="blockGen428" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >• Concept will be taught to the selected teams and then teams will be tested in that area.</span><span id="blockGen428" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >• Top 10 teams are to be shortlisted for the event.</span><span id="blockGen428" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >• We have decided three events: 1 in CS, 1 in EC and 1 in Civil-cum-mech.
</span>
</span>
<span id = "tabsSimplineer_Description">
<span id="blockGen429" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span><span id="blockGen430" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >• Simplineer is a general event during Engineer spanning all branches of Engineering. It brings all the major engineering fields together and provides a common platform to young engineers to test their knowledge and skills in their respective field.</span><span id="blockGen430" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >• It is a team event</span><span id="blockGen430" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >• Teams of 3-4(from any branch or from same branch)</span><span id="blockGen430" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >• Event will consist of two stages</span><span id="blockGen430" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >• First is online test which will happen before engineer to shortlist teams. This round will consist of questions from various branches of Engineering including Electronics, Computers, Mechanical and Maths which have to be solved in a given time.</span><span id="blockGen430" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >• The teams shortlisted will be called for the second stage (which consists of several hands-on rounds) which will be held during Engineer.</span><span id="blockGen430" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >• The events will be spread over two-three days of Engineer, each round consisting of a problem statement related to a particular engineering stream. </span><span id="blockGen430" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >• Only one member from the team should register for the event.</span><span id="blockGen430" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >• Last date for registration 13th</span><span id="blockGen430" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >• Online test will be on 19th October. Test will be of 90 minutes. Teams can take test only once.</span><span id="blockGen430" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >• For nitk students test will be in CCC. Time will be informed later based on the registration. (tentative time 1:00 pm - 5 pm : 2 batches)</span><span id="blockGen430" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >• For non NITK Teams: test anytime between 10:00 am - 10:00 pm on 19th October. </span><span id="blockGen430" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >• Results will be declared on 20th October and teams will be informed.
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideBeyondEarth'>
<span id='blockGen431' style='background: rgba(231,208,222,0.8);'><img src='static/Icons_Final/Beyond_Earth.png ' width='250px'/></span><br />
<span id='blockGen432' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(209,218,219,0.8);' onclick='getPage("BeyondEarth","BeyondEarth_Description")'><h3>Description</h3></span>
<span id='blockGen433' style='width:220px;padding: 15px;border-radius:20px;background: rgba(221,220,215,0.8);'><h3>Contact: Mrinal Phone: 9449030636</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupBeyondEarth">
<span id = "tabsBeyondEarth_Description">
<span id="blockGen434" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
 Beyond Earth - The Human Settlement Challenge - Call upon participants to display their strategy to conquer the universe. This event calls upon participants who are keen to learn about strategy we would have to employ to expand our forces beyond Mother Earth. The settlement should have extensive plans and should not depend on Earth for basic amenities. Teams are evaluated on the basis of innovation, creativity and presentation skills.Participants are needed to submit a thesis of less than 15 pages, explaining in detail, their strategy to populate outer space. Location can be chosen anywhere outside Earth, other than Moon and Mars.A number of teams will be shortlisted for the final round to be held during Engineer 2013.Final Round: Candidates would be required to defend their thesis with the help of a presentation not exceeding 15 minutes. Extra points would be awarded for teams which support their arguments with relevant models using appropriate software.
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideStarWars'>
<span id='blockGen436' style='background: rgba(250,217,202,0.8);'><img src='static/Icons_Final/starwars.png ' width='250px'/></span><br />
<span id='blockGen437' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(243,227,239,0.8);' onclick='getPage("StarWars","StarWars_Description")'><h3>Description</h3></span>
<span id='blockGen438' style='width:220px;padding: 15px;border-radius:20px;background: rgba(216,220,250,0.8);'><h3>Contact: Mrinal Phone: 9449030636</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupStarWars">
<span id = "tabsStarWars_Description">
<span id="blockGen439" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
 STAR WARS - The Astronomy Quiz. It presents itself as a unique opportunity for those passionate in astronomy to flaunt their knowledge of the cosmos.Short listed teams would face off in the final round.
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideExhibits'>
<span id='blockGen441'><button class='button1' style='border-radius: 0%;width: 250px;height: 250px;background: rgba(233,211,247,0.8);'><h1 style='text-align:center;font-family: acens;'>Exhibits</h1></button></span><br />
<span id='blockGen442' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(212,239,223,0.8);' onclick='getPage("Exhibits","Exhibits_Description")'><h3>Description</h3></span>
<span id='blockGen443' style='width:220px;padding: 15px;border-radius:20px;background: rgba(206,215,226,0.8);'><h3>Contact: Mrinal Phone: 9449030636</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupExhibits">
<span id = "tabsExhibits_Description">
<span id="blockGen444" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
Location: Astronomy Room, Main Building Time: Dawn to Dusk1) Pondus - Your Normal Force - How much would you weigh in different parts of the cosmos? 2) Satellite Launcher - A flash tool depicting the trajectory of satellites. A gaming console to learn about the movement of satellites enabling the transformation of theory into visualisation.3) Theatron – Compilation of the best documentaries related to physics continuously screened from dawn to dusk.4) Starry nights – Let us navigate through the heavens. We invite amateurs and introduce them to the wonders of the night sky. Greek tales and mythology will be discussed in great detail, promising the gala night to be a great delight. We will enlighten star gazers of the basic topology of the night sky.
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideAstroTalk'>
<span id='blockGen446' style='background: rgba(237,216,249,0.8);'><img src='static/Icons_Final/astro_talk.png ' width='250px'/></span><br />
<span id='blockGen447' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(236,240,209,0.8);' onclick='getPage("AstroTalk","AstroTalk_Description")'><h3>Description</h3></span>
<span id='blockGen448' style='width:220px;padding: 15px;border-radius:20px;background: rgba(209,245,228,0.8);'><h3>Contact: Mrinal Phone: 9449030636</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupAstroTalk">
<span id = "tabsAstroTalk_Description">
<span id="blockGen449" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
In partnership with TechSpeak, Astronomy committee presents enlightening talks,designed to inspire and educate.Astronomy committee presents a series of lectures from eminent scholars conducting cutting edge research in their respective domains.We are proud to present the following speakers: Dr Banibrata Mukhopadhyay Currently an Associate professor, in the Department of Physics, Indian Institute of Science, Bangalore. His cutting edge research on black holes brought him to the limelight recently as reflected in the following article. http://articles.timesofindia.indiatimes.com/2013-09-21/science/42272405_1_black-holes-mass-and-spin-iisc He has been invited by Harvard, after his landmark discovery of the interdependence of mass and spin.His page for more details:http://www.physics.iisc.ernet.in/~bm/Dr Jayaram Narayanan ChengalurPresently the Dean of National Centre for Radio Astrophysics, TIFR, Pune, Prof. Chengalur has been deeply involved with research on Radio Astronomy. He would be giving a talk on the impact of engineers in the field of pure science. We also present Video Conferences from varied speakers on physics, astrophotography and much more.Come. See. Rejoice.
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideInscription'>
<span id='blockGen451' style='background: rgba(232,227,234,0.8);'><img src='static/Icons_Final/INSCRIPTION.png ' width='250px'/></span><br />
<span id='blockGen452' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(247,224,211,0.8);' onclick='getPage("Inscription","Inscription_Description")'><h3>Description</h3></span>
<span id='blockGen453' style='width:220px;padding: 15px;border-radius:20px;background: rgba(202,205,227,0.8);'><h3>Contact: Syed Rahi <br/>srsyedrahi@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupInscription">
<span id = "tabsInscription_Description">
<span id="blockGen454" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
Inscription is the international online programming contest of Engineer.</span><span id="blockGen455" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The contest will consist of a set of challenging problems to which solutions need to be submitted which adhere to time constraints. Programming, debugging and fine-tuning skills are tested to the very hilt.</span><span id="blockGen455" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Teams of 3.</b></span><span id="blockGen455" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideECTF_-_Capture_the_Flag'>
<span id='blockGen456' style='background: rgba(245,234,221,0.8);'><img src='static/Icons_Final/ECTF.png ' width='250px'/></span><br />
<span id='blockGen457' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(234,223,248,0.8);' onclick='getPage("ECTF_-_Capture_the_Flag","ECTF_-_Capture_the_Flag_Description")'><h3>Description</h3></span>
<span id='blockGen458' style='width:220px;padding: 15px;border-radius:20px;background: rgba(233,242,247,0.8);'><h3>Contact: Syed Rahi <br/>srsyedrahi@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupECTF_-_Capture_the_Flag">
<span id = "tabsECTF_-_Capture_the_Flag_Description">
<span id="blockGen459" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
ECTF is a ethical hacking competition, where you set up your Base (a virtual machine) with theFlag (a special file) that we will provide. Hack into your enemy's Base and retrieve his Flag, whileat the same time defending your own.</span><span id="blockGen460" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Teams of 3.</b></span><span id="blockGen460" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideVirtual_Bounty'>
<span id='blockGen461' style='background: rgba(203,244,205,0.8);'><img src='static/Icons_Final/VIRTUAL_BOUNTY2.png ' width='250px'/></span><br />
<span id='blockGen462' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(208,246,202,0.8);' onclick='getPage("Virtual_Bounty","Virtual_Bounty_Description")'><h3>Description</h3></span>
<span id='blockGen463' style='width:220px;padding: 15px;border-radius:20px;background: rgba(224,215,240,0.8);'><h3>Contact: Syed Rahi <br/>srsyedrahi@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupVirtual_Bounty">
<span id = "tabsVirtual_Bounty_Description">
<span id="blockGen464" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
Virtual Bounty is the online technical treasure hunt of Engineer, where the divine 'Googling' skillsof the participants are put to test. Using search engines, the participants need to figure out the clueswhich will take them all around the World Wide Web in order to get to the next more intriguinglevel. This is a quest for the elusive treasure buried beneath billions of web pages.</span><span id="blockGen465" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Individual event</b>
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideKode_Kombat'>
<span id='blockGen466' style='background: rgba(238,243,241,0.8);'><img src='static/Icons_Final/CODE_KOMBAT.png ' width='250px'/></span><br />
<span id='blockGen467' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(246,248,243,0.8);' onclick='getPage("Kode_Kombat","Kode_Kombat_Description")'><h3>Description</h3></span>
<span id='blockGen468' style='width:220px;padding: 15px;border-radius:20px;background: rgba(228,209,218,0.8);'><h3>Contact: Syed Rahi <br/>srsyedrahi@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupKode_Kombat">
<span id = "tabsKode_Kombat_Description">
<span id="blockGen469" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
Kode Kombat is an Artificial Intelligence programming contest. It is an online event. Each player programs their virtual bots to play a certain game. Bots programmed by different players have a face-off in a quest to be the ''smartest'' bot!!</span><span id="blockGen470" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Teams of 2.</b></span><span id="blockGen470" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideMarathon'>
<span id='blockGen471' style='background: rgba(244,218,237,0.8);'><img src='static/Icons_Final/marathon_final.png ' width='250px'/></span><br />
<span id='blockGen472' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(238,203,213,0.8);' onclick='getPage("Marathon","Marathon_Description")'><h3>Description</h3></span>
<span id='blockGen473' style='width:220px;padding: 15px;border-radius:20px;background: rgba(249,210,224,0.8);'><h3>Contact: Syed Rahi <br/>srsyedrahi@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupMarathon">
<span id = "tabsMarathon_Description">
<span id="blockGen474" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
Marathon is an event that inculcates multiple tasks of varying difficulty covering all fields ofcomputer science from basic programming, scripting, to operating systems and networks. ThisEngineer, Marathon is planned to be more challenging, which tests your mind with the latestdeveloping technologies in the field of Computer Science. After all, Computer Science is the fastestgrowing and the fastest changing area of Engineering.</span><span id="blockGen475" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Spread over all of Engineer, we give you the opportunity to make up for one bad day, as well as testhow long you can persist solving the trickiest (and most often the simplest) comp-sci problems wecan throw at you!</span><span id="blockGen475" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Teams of 3.</b></span><span id="blockGen475" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideRectify'>
<span id='blockGen476' style='background: rgba(217,222,226,0.8);'><img src='static/Icons_Final/RECTIFY.png ' width='250px'/></span><br />
<span id='blockGen477' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(239,222,208,0.8);' onclick='getPage("Rectify","Rectify_Description")'><h3>Description</h3></span>
<span id='blockGen478' style='width:220px;padding: 15px;border-radius:20px;background: rgba(211,216,200,0.8);'><h3>Contact: Syed Rahi <br/>srsyedrahi@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupRectify">
<span id = "tabsRectify_Description">
<span id="blockGen479" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
It’s time to scratch your Grey cells, it’s time to rectify! Rectify will test your hunting instincts. Canyou spot your prey and catch it at the blink of an eye like the vicious vulture? If you think you havea sharp eye and the instincts of a predator programmer then come and hunt for the errors in ourcodes. This event not only tests the mastery over and familiarity with a programming language butalso your dexterity in analyzing problems and providing logical solutions.</span><span id="blockGen480" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Individual event</b></span><span id="blockGen480" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sidemindBend'>
<span id='blockGen481' style='background: rgba(230,213,222,0.8);'><img src='static/Icons_Final/mindbend.png ' width='250px'/></span><br />
<span id='blockGen482' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(217,231,211,0.8);' onclick='getPage("mindBend","mindBend_Description")'><h3>Description</h3></span>
<span id='blockGen483' style='width:220px;padding: 15px;border-radius:20px;background: rgba(235,233,238,0.8);'><h3>Contact: Vijay Bharadwaj J <br/> +919483478667 <br/> jvijay1992@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupmindBend">
<span id = "tabsmindBend_Description">
<span id="blockGen484" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
Mindbend is a fun quiz for those who have an undying thirst to know more about materials. It tests the participants’ knowledge of obscure and unnoticed facts about materials in an interactive and fascinating new format.</span><span id="blockGen485" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- Prelims round consisting of crossword and short questionnaire.</span><span id="blockGen485" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- Final round between 6 teams
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideSEM_and_TEM_Expo'>
<span id='blockGen486' style='background: rgba(228,245,220,0.8);'><img src='static/Icons_Final/SEMTEMExpo.png ' width='250px'/></span><br />
<span id='blockGen487' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(210,228,209,0.8);' onclick='getPage("SEM_and_TEM_Expo","SEM_and_TEM_Expo_Description")'><h3>Description</h3></span>
<span id='blockGen488' style='width:220px;padding: 15px;border-radius:20px;background: rgba(236,244,209,0.8);'><h3>Contact: Vijay Bharadwaj J <br/> +919483478667 <br/> jvijay1992@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupSEM_and_TEM_Expo">
<span id = "tabsSEM_and_TEM_Expo_Description">
<span id="blockGen489" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
The event’s agenda is to exhibit two Electron Microscopes which are the pride of the Department and College.</span><span id="blockGen490" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- 1 hour introductory talk</span><span id="blockGen490" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- 1 hour demo  </span><span id="blockGen490" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideMetaMagic'>
<span id='blockGen491' style='background: rgba(234,207,234,0.8);'><img src='static/Icons_Final/MetaMagic.png ' width='250px'/></span><br />
<span id='blockGen492' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(222,229,236,0.8);' onclick='getPage("MetaMagic","MetaMagic_Description")'><h3>Description</h3></span>
<span id='blockGen493' style='width:220px;padding: 15px;border-radius:20px;background: rgba(228,201,236,0.8);'><h3>Contact: Vijay Bharadwaj J <br/> +919483478667 <br/> jvijay1992@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupMetaMagic">
<span id = "tabsMetaMagic_Description">
<span id="blockGen494" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
Metamagic is an exhibition of fascinating experiments designed to amaze even the most skeptical. From Shape memory alloys to smoke bombs to walking on fluids, these dazzling displays will showcase the amazing nature of materials.</span><span id="blockGen495" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > - Major demonstrations  – Shape Memory Alloy, Superconductor</span><span id="blockGen495" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > - Others –  Sugar bomb, Instant Ice, Mega Bubble, Elephant Toothpaste, Walking on Water,  Chemical Squid, Smoke Bomb, Dry Sand.</span><span id="blockGen495" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideSEM_Photography_Contest'>
<span id='blockGen496' style='background: rgba(225,220,219,0.8);'><img src='static/Icons_Final/SEMphotography.png ' width='250px'/></span><br />
<span id='blockGen497' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(224,228,246,0.8);' onclick='getPage("SEM_Photography_Contest","SEM_Photography_Contest_Description")'><h3>Description</h3></span>
<span id='blockGen498' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(228,227,249,0.8);' onclick='getPage("SEM_Photography_Contest","SEM_Photography_Contest_Submissiion Format")'><h3>Submissiion Format</h3></span>
<span id='blockGen499' style='width:220px;padding: 15px;border-radius:20px;background: rgba(245,236,219,0.8);'><h3>Contact: Vijay Bharadwaj J <br/> +919483478667 <br/> jvijay1992@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupSEM_Photography_Contest">
<span id = "tabsSEM_Photography_Contest_Description">
<span id="blockGen500" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
The event is a photography contest. SEM and TEM images of samples having unique features are evaluated.</span><span id="blockGen501" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >- Online photo submission with description</span><span id="blockGen501" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
<span id = "tabsSEM_Photography_Contest_Submissiion Format">
<span id="blockGen502" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
A PDF file containing Caption, Photo and a description of maximum 100 words should be sent to:</span><span id="blockGen503" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > <b>materials.engi@gmail.com</b></span><span id="blockGen503" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >by 22nd October
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideProduct_Design_Challenge'>
<span id='blockGen504' style='background: rgba(219,250,238,0.8);'><img src='static/Icons_Final/PRODUCT_DESIGN_123.png ' width='250px'/></span><br />
<span id='blockGen505' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(224,207,232,0.8);' onclick='getPage("Product_Design_Challenge","Product_Design_Challenge_Description")'><h3>Description</h3></span>
<span id='blockGen506' style='width:220px;padding: 15px;border-radius:20px;background: rgba(225,233,235,0.8);'><h3>Contact: Neetesh Hegde <br/> 9483647944</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupProduct_Design_Challenge">
<span id = "tabsProduct_Design_Challenge_Description">
<span id="blockGen507" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
The competition aims to test how one can optimize a design and create a sustainable design to provide the best solution to a real world problem. </span><span id="blockGen508" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The participants will be given a problem statement with the minimum requirements of a product. </span><span id="blockGen508" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The aim is to optimise the design and develop the best blue print for the problem.</span><span id="blockGen508" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > The design would be judged by the company providing the problem statement, and will be accepting the best design to develop a final product.</span><span id="blockGen508" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Problem Statement Requirements:</b> Socially Conscious and Economical</span><span id="blockGen508" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideCampus_Social_Innovision_Challenge'>
<span id='blockGen509' style='background: rgba(215,248,224,0.8);'><img src='static/Icons_Final/campussocialinnovation.png ' width='250px'/></span><br />
<span id='blockGen510' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(203,240,248,0.8);' onclick='getPage("Campus_Social_Innovision_Challenge","Campus_Social_Innovision_Challenge_Description")'><h3>Description</h3></span>
<span id='blockGen511' style='width:220px;padding: 15px;border-radius:20px;background: rgba(226,208,237,0.8);'><h3>Contact: Neetesh Hegde <br/> 9483647944</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupCampus_Social_Innovision_Challenge">
<span id = "tabsCampus_Social_Innovision_Challenge_Description">
<span id="blockGen512" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
The competition aims at solving problems within the campus of NITK-Surathkal.</span><span id="blockGen513" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >You will have to deal with the challenges which students of NITK face. </br>The team with the best solution to the given problem statement will get to implement their solution with support from EFOREA.</span><span id="blockGen513" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Problem Statement:</b> To be provided by NITK centre for Innovation and Learning.</span><span id="blockGen513" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideCase_Study_challenge'>
<span id='blockGen514' style='background: rgba(243,225,245,0.8);'><img src='static/Icons_Final/casestudychallenge.png ' width='250px'/></span><br />
<span id='blockGen515' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(206,220,235,0.8);' onclick='getPage("Case_Study_challenge","Case_Study_challenge_Description")'><h3>Description</h3></span>
<span id='blockGen516' style='width:220px;padding: 15px;border-radius:20px;background: rgba(229,233,220,0.8);'><h3>Contact: Neetesh Hegde <br/> 9483647944</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupCase_Study_challenge">
<span id = "tabsCase_Study_challenge_Description">
<span id="blockGen517" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
The event aims to solve real case studies provided by corporate companies or small and medium enterprises (SMEs) and start-ups.</span><span id="blockGen518" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The participants are going to be provided with a problem statement from are partner companies.</span><span id="blockGen518" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Participants will have to present their solutions in the form of an elaborate presentation before the judges</span><span id="blockGen518" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >which will include the representatives of our partner companies.</span><span id="blockGen518" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Problem Statement Theme:</b> SUSTAINABILITY</span><span id="blockGen518" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideData_Analysis_Challange'>
<span id='blockGen519' style='background: rgba(227,228,230,0.8);'><img src='static/Icons_Final/data_analysischallenge.png ' width='250px'/></span><br />
<span id='blockGen520' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(234,243,215,0.8);' onclick='getPage("Data_Analysis_Challange","Data_Analysis_Challange_Description")'><h3>Description</h3></span>
<span id='blockGen521' style='width:220px;padding: 15px;border-radius:20px;background: rgba(237,235,241,0.8);'><h3>Contact: Neetesh Hegde <br/> 9483647944</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupData_Analysis_Challange">
<span id = "tabsData_Analysis_Challange_Description">
<span id="blockGen522" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
This competition will judge your potential to deal with huge databases similar to big data.</span><span id="blockGen523" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The participants are going to be provided with a company’s database which they have to analyse</span><span id="blockGen523" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >in the most efficient way to provide the company a better system to analyse their own data in future.</span><span id="blockGen523" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > Problem Statement: To be provided by a Business Analysis Company.</span><span id="blockGen523" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideVelocity'>
<span id='blockGen524' style='background: rgba(219,206,233,0.8);'><img src='static/Icons_Final/Velocity.png ' width='250px'/></span><br />
<span id='blockGen525' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(202,216,206,0.8);' onclick='getPage("Velocity","Velocity_Introduction")'><h3>Introduction</h3></span>
<span id='blockGen526' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(237,230,226,0.8);' onclick='getPage("Velocity","Velocity_General Rules")'><h3>General Rules</h3></span>
<span id='blockGen527' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(237,210,242,0.8);' onclick='getPage("Velocity","Velocity_Event Format")'><h3>Event Format</h3></span>
<span id='blockGen528' style='width:220px;padding: 15px;border-radius:20px;background: rgba(207,211,226,0.8);'><h3>Contact: Akshay K R <br/>koodlyakashay@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupVelocity">
<span id = "tabsVelocity_Introduction">
<span id="blockGen529" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
Ready for a race off?...Velocity will provide you the jumpstart you need to get the fuel  pumping through your car’s veins. Being the flagship event of Engineer, Velocity provides  you an opportunity to showcase your racing talents amongst dedicated peers who have put in  the elbow grease required in building these racing machines.
</span>
</span>
<span id = "tabsVelocity_General Rules">
<span id="blockGen531" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
ÿ The students must carry valid student ID cards of their college which they should produce at the time of registration.</span><span id="blockGen532" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >A team may comprise a maximum of FIVE participants.</span><span id="blockGen532" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The team is not permitted to compete with more than one car.</span><span id="blockGen532" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Teams will not be allowed to modify their car during their trial.
</span>
</span>
<span id = "tabsVelocity_Event Format">
<span id="blockGen533" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
The event will have 6 rounds:</span><span id="blockGen534" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Car Judging</b>: The car will be scrutinized by the organizers to make sure it conformsto the specified rules. There will be no points from this round. However, if the vehicle doesn’t conform to all the rules, it will be immediately disqualified.</span><span id="blockGen534" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > <b>Maneuverability Test</b>: Each car will have to maneuver a set of obstacles and points will be awarded based on time taken to complete the course.</span><span id="blockGen534" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Acceleration Test</b>: Each car will have to accelerate a certain distance and points will be awarded based on the time taken to complete the stretch.</span><span id="blockGen534" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Quarter-Finals</b>: 8 quarter-Finalists will be decided based on their aggregate points obtained in the abstract submission, acceleration test and maneuverability test. 4 groups of 2 cars each will race and the first car proceeds to the next round.</span><span id="blockGen534" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Semi-Finals</b>: 4 semi-finalists will be divided into 2 groups and race-off for the 2 spots in the finals. </span><span id="blockGen534" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><b>Final</b>: This round requires the final 2 cars to race through a track with acute curvesand obstructions with the cars able pit stops for refueling and repairs. The endurance of the car will be tested. </span><span id="blockGen534" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ><a href='./data/velocity.pdf'>Event Rule</a> 
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideProteus'>
<span id='blockGen535' style='background: rgba(208,248,220,0.8);'><img src='static/Icons_Final/Proteus.png ' width='250px'/></span><br />
<span id='blockGen536' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(234,246,212,0.8);' onclick='getPage("Proteus","Proteus_generalrules")'><h3>generalrules</h3></span>
<span id='blockGen537' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(220,200,216,0.8);' onclick='getPage("Proteus","Proteus_eventformat")'><h3>eventformat</h3></span>
<span id='blockGen538' style='width:220px;padding: 15px;border-radius:20px;background: rgba(216,217,200,0.8);'><h3>Contact: Akshay K R <br/>koodlyakashay@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupProteus">
<span id = "tabsProteus_generalrules">
<span id="blockGen539" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
 &bull; Participants must carry valid ID cards of their respective college, which must be </span><span id="blockGen540" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > produced at the time of registration.</span><span id="blockGen540" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; Maximum number of participants per team is four.</span><span id="blockGen540" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; Readymade kits are not allowed.</span><span id="blockGen540" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; Each team is allowed to participate with not more than one bot.</span><span id="blockGen540" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >\ &bull; Judges decision will be final and binding.</span><span id="blockGen540" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
<span id = "tabsProteus_eventformat">
<span id="blockGen541" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
 &bull; There shall be one qualifying round.</span><span id="blockGen542" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; The qualifying round is to test the test the maneuverability and the water shooting </span><span id="blockGen542" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > capacity of the bot.</span><span id="blockGen542" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; The top 8 will qualify for the final round.</span><span id="blockGen542" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; Teams will be provided with external 230V AC supply.</span><span id="blockGen542" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; Teams must ensure that all mechanisms employed within the bot must not destroy the </span><span id="blockGen542" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > arena in any manner.</span><span id="blockGen542" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; Any modifications on the bot must be made between the trials. Provision to make </span><span id="blockGen542" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > modifications during a trial is not permitted.</span><span id="blockGen542" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > <a href='proteus.pdf'>Download</a></span><span id="blockGen542" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sidePerfectMachine'>
<span id='blockGen543' style='background: rgba(225,238,217,0.8);'><img src='static/Icons_Final/PerfectMachine.png ' width='250px'/></span><br />
<span id='blockGen544' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(237,213,204,0.8);' onclick='getPage("PerfectMachine","PerfectMachine_generalrules")'><h3>generalrules</h3></span>
<span id='blockGen545' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(222,205,210,0.8);' onclick='getPage("PerfectMachine","PerfectMachine_eventformat")'><h3>eventformat</h3></span>
<span id='blockGen546' style='width:220px;padding: 15px;border-radius:20px;background: rgba(202,236,214,0.8);'><h3>Contact: Akshay K R <br/>koodlyakashay@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupPerfectMachine">
<span id = "tabsPerfectMachine_generalrules">
<span id="blockGen547" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
 &bull; The students must carry valid student ID cards of their college which they will be required to produce at the time of registration.</span><span id="blockGen548" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; A team may comprise a maximum of FIVE participants.</span><span id="blockGen548" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; Readymade kits are NOT allowed. Judges decision in this regard will be final and binding.</span><span id="blockGen548" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; The team is not permitted to compete with more than one bot.</span><span id="blockGen548" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; Teams will not be allowed to modify their bots during their trial.</span><span id="blockGen548" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
<span id = "tabsPerfectMachine_eventformat">
<span id="blockGen549" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
 &bull; Each round will be of a maximum of 15 min duration.</span><span id="blockGen550" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; Fig 1 portrays the arena </span><span id="blockGen550" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; Each bot must have a mechanism to lift the objects(it will be a ball or a cube) kept in rectangular </span><span id="blockGen550" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > container and throw them into the hoops kept at different heights </span><span id="blockGen550" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; In each hoop only a maximum of 3 objects (1 ball and 2 cubes) can be thrown.</span><span id="blockGen550" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; Hoop 1 will be at the ground level. Hoop 2 will be at the height of 15cm from the arena. Hoop 3 </span><span id="blockGen550" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > will be at the height of 25cm from the arena. </span><span id="blockGen550" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; A bridge will be provided at the bottom of hoop 3(hoop at the height of 25 cm). The bot is </span><span id="blockGen550" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > required to climb over this bridge and throw the objects in hoop 3.</span><span id="blockGen550" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; Each bot will be given only one round in which they need to complete the task.</span><span id="blockGen550" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; If the bot gets immobilized (unable to show minimum linear displacement of 10cm for 30 </span><span id="blockGen550" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > seconds) or toppled over, those teams cannot ask for restore.</span><span id="blockGen550" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; The organizers reserve the right to change any or all of the above rules as they deem fit.</span><span id="blockGen550" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; Violation of any the above rules will lead to disqualification.</span><span id="blockGen550" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; Judges' decision shall be treated as final and binding on all.</span><span id="blockGen550" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > <a href='data/perfectmachineprob.pdf'>Download</a></span><span id="blockGen550" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideRobowars'>
<span id='blockGen551' style='background: rgba(227,245,206,0.8);'><img src='static/Icons_Final/RoboWars.png ' width='250px'/></span><br />
<span id='blockGen552' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(228,237,244,0.8);' onclick='getPage("Robowars","Robowars_generalrules")'><h3>generalrules</h3></span>
<span id='blockGen553' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(223,205,238,0.8);' onclick='getPage("Robowars","Robowars_eventformat")'><h3>eventformat</h3></span>
<span id='blockGen554' style='width:220px;padding: 15px;border-radius:20px;background: rgba(204,212,238,0.8);'><h3>Contact: Akshay K R <br/>koodlyakashay@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupRobowars">
<span id = "tabsRobowars_generalrules">
<span id="blockGen555" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
 &bull; Contestants will have to register online. On spot registrations can also be done.</span><span id="blockGen556" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; The students must carry valid student ID cards of their college which they will be </span><span id="blockGen556" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > required to produce at the time of registration.</span><span id="blockGen556" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; A team may comprise a maximum of FIVE participants.</span><span id="blockGen556" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; A team can comprise of students from different colleges.</span><span id="blockGen556" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; The team is not permitted to compete with more than one robot.</span><span id="blockGen556" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
<span id = "tabsRobowars_eventformat">
<span id="blockGen557" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
 &bull; The competition will be played on knock-out basis.</span><span id="blockGen558" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; The machine would be checked for its safety during registrations. In case of unsafe </span><span id="blockGen558" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > robots, the teams will be allowed to modify the robot before the registrations close.</span><span id="blockGen558" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; Only one person can control the robot and one person can stay near the arena for </span><span id="blockGen558" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > monitoring the robot.</span><span id="blockGen558" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; In case of a tie, the robots will have to battle for a time duration of 2 minutes.</span><span id="blockGen558" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; Each team will have a maximum time period of 20 minutes to repair their robot after </span><span id="blockGen558" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > each battle round.</span><span id="blockGen558" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; The teams should make sure their wires are slack and all the wires coming out of robot </span><span id="blockGen558" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > need to be tangled together.</span><span id="blockGen558" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; The wires coming out of the robot should be placed in such a way that it should be safe </span><span id="blockGen558" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > from any attacks on the bot and the attack mechanisms provided by the organizers. The </span><span id="blockGen558" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > organizers will not be held responsible in case of any accidents to the bot because of the </span><span id="blockGen558" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > attack mechanism provided.</span><span id="blockGen558" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; The organizers reserve the right to change any or all of the above rules or add any rules </span><span id="blockGen558" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > as they deem fit.</span><span id="blockGen558" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; Violation of any the above rules will lead to disqualification.</span><span id="blockGen558" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; Judges' decision shall be treated as final and binding on all. </span><span id="blockGen558" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > <a href='data/GENERALRULES.pdf'>Download</a></span><span id="blockGen558" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sidewrightflight'>
<span id='blockGen559' style='background: rgba(235,216,232,0.8);'><img src='static/Icons_Final/WrightFlight.png ' width='250px'/></span><br />
<span id='blockGen560' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(236,240,207,0.8);' onclick='getPage("wrightflight","wrightflight_generalrules")'><h3>generalrules</h3></span>
<span id='blockGen561' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(213,230,220,0.8);' onclick='getPage("wrightflight","wrightflight_eventformat")'><h3>eventformat</h3></span>
<span id='blockGen562' style='width:220px;padding: 15px;border-radius:20px;background: rgba(227,228,203,0.8);'><h3>Contact: Akshay K R <br/>koodlyakashay@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupwrightflight">
<span id = "tabswrightflight_generalrules">
<span id="blockGen563" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
 &bull; Contestants will have to register online. On spot registrations can also be done.</span><span id="blockGen564" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; The students must carry valid student ID cards of their college which they will be required </span><span id="blockGen564" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > to produce at the time of registration.</span><span id="blockGen564" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; A team may comprise a maximum of FIVE participants.</span><span id="blockGen564" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; Readymade kits are NOT allowed. Usage of Ready-to-Fly (RTF) and Almost-Ready-to-Fly </span><span id="blockGen564" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > (ARF) kits is strictly prohibited.</span><span id="blockGen564" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; Teams should note that the place where flight testing is done is an open area; hence </span><span id="blockGen564" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > changes in wind direction may occur. The organizing committee will not be responsible for </span><span id="blockGen564" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > any change in weather at the time of testing.</span><span id="blockGen564" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; The glider has to be as per the specification mentioned below.</span><span id="blockGen564" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; A team is permitted to compete with more than one glider of same/different design and </span><span id="blockGen564" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > that design can be registered only once.</span><span id="blockGen564" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; Any team that is not ready at the time specified will be disqualified from the competition </span><span id="blockGen564" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > automatically. </span><span id="blockGen564" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; The glider will be checked for its safety before the event and would be discarded if found </span><span id="blockGen564" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > unsafe for other participants and spectators. </span><span id="blockGen564" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; The organizing committee won&rsquo;t be responsible for any damage done to the glider during </span><span id="blockGen564" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > the course of the event.</span><span id="blockGen564" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; The teams must adhere to the spirit of healthy competition. Judges reserve the right to </span><span id="blockGen564" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > disqualify any team indulging in misbehavior. </span><span id="blockGen564" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >\ &bull; Judges&rsquo; decision will be final and binding.</span><span id="blockGen564" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
<span id = "tabswrightflight_eventformat">
<span id="blockGen565" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
 &bull; In this event, contesting teams must build a Glider- an aerial reconnaissance vehicle.</span><span id="blockGen566" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; The glider must be unpowered. The glider can be either chucked by hand or a suitable </span><span id="blockGen566" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > mechanism can be built by the competing team for providing the initial thrust.</span><span id="blockGen566" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; A Hard copy of the report spanning one page has to be submitted by the teams on the day of </span><span id="blockGen566" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > the event regarding their glider construction procedure , materials used, design aspects etc , </span><span id="blockGen566" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > which will be the judging criteria of your glider in case of a tie. </span><span id="blockGen566" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; The event shall consist of 2 rounds - one preliminary and a final round.</span><span id="blockGen566" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; In the preliminary round, the participants are required to chuck the glider by hand to a </span><span id="blockGen566" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > maximum horizontal range and glide for the longest time period (Fig 1). </span><span id="blockGen566" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; The teams clearing the preliminary round qualify to the final round.</span><span id="blockGen566" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; In the final round, the teams are supposed to chuck their glider again by hand but here it is </span><span id="blockGen566" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > tested for maneuverability. The glider is required to go through a pre designated path and then </span><span id="blockGen566" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > maneuver across the given arena and crossing each checkpoint (Fig 2). </span><span id="blockGen566" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; Each team will be given THREE trials in each round and the best score from the three trials will </span><span id="blockGen566" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > be considered for the final scoring. </span><span id="blockGen566" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > &bull; The teams will have to bring their own radio control equipments (if using any) and the </span><span id="blockGen566" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > organizing committee won&rsquo;t be providing any.</span><span id="blockGen566" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > <a href='wrightflight.pdf'>Download</a></span><span id="blockGen566" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideIndustry_Defined_Problem'>
<span id='blockGen567' style='background: rgba(226,218,248,0.8);'><img src='static/Icons_Final/IDP.png ' width='250px'/></span><br />
<span id='blockGen568' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(226,239,245,0.8);' onclick='getPage("Industry_Defined_Problem","Industry_Defined_Problem_Description")'><h3>Description</h3></span>
<span id='blockGen569' style='width:220px;padding: 15px;border-radius:20px;background: rgba(232,205,210,0.8);'><h3>Contact: Ramya <br/> 9538703009</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupIndustry_Defined_Problem">
<span id = "tabsIndustry_Defined_Problem_Description">
<span id="blockGen570" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
<b>Introduction:</b></span><span id="blockGen571" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Industry Defined Problem is real, applied engineering at its epitome. Aiming to</span><span id="blockGen571" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >bridge the gap between theory and practice by challenging engineers to come</span><span id="blockGen571" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >up with innovative and creative solutions to crucial real life industrial problems</span><span id="blockGen571" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >IDP has been serving as a platform for budding engineers to interact with experts</span><span id="blockGen571" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >from premier industries around the country, and has been well appreciated by the faculty and students alike. </span><span id="blockGen571" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" ></span><span id="blockGen571" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > Industry-Institute interaction is vital for the development of any engineering student.</span><span id="blockGen571" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >This event is the ideal eye-opener for them to apply their skills and knowledge</span><span id="blockGen571" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >and come up with creative solutions to problems posed by the industry. In this event,</span><span id="blockGen571" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >a renowned Chemical firm puts forward a technical problem which they are facing. </span><span id="blockGen571" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The problem may be either recurring one or a one off issue. . The participants are</span><span id="blockGen571" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >expected to come up with innovative & economically feasible solutions that can</span><span id="blockGen571" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >be assimilated in the company’s process.</span><span id="blockGen571" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >The previous editions had us collaborating with the likes of Mangalore Refinery </span><span id="blockGen571" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >and Petrochemicals Limited (MRPL), Mangalore Chemical and Fertilizers (MCF) and</span><span id="blockGen571" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >other esteemed companies.</span><span id="blockGen571" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > So what are you thinking of?</span><span id="blockGen571" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Come, participate and get to interact with and thereby learn from the professionals!</span><span id="blockGen571" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Engineer 2013, the expectations get bigger and the stakes higher!</span><span id="blockGen571" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >We will get back to you with further details. Stay updated. </span><span id="blockGen571" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideThe_Portal'>
<span id='blockGen572' style='background: rgba(238,211,238,0.8);'><img src='static/Icons_Final/the_portal.png ' width='250px'/></span><br />
<span id='blockGen573' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(248,201,202,0.8);' onclick='getPage("The_Portal","The_Portal_Description")'><h3>Description</h3></span>
<span id='blockGen574' style='width:220px;padding: 15px;border-radius:20px;background: rgba(238,244,217,0.8);'><h3>Contact: Ramya <br/> 9538703009</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupThe_Portal">
<span id = "tabsThe_Portal_Description">
<span id="blockGen575" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
<b>Introduction:</b></span><span id="blockGen576" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Chemical process simulation software helps broadens an engineer’s capabilities and</span><span id="blockGen576" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >increases productivity. It  supercharges an engineer’s efficiency when facing the</span><span id="blockGen576" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >toughest chemical process models or addressing day-to-day challenges. They have</span><span id="blockGen576" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >potential instructional value for practically all core courses, right from first year</span><span id="blockGen576" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >process calculations to final year  design project. It integrates all the topics under</span><span id="blockGen576" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >one roof making it one of the most powerful tool for a process/chemical engineer.</span><span id="blockGen576" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > CHEMCAD is one such simulation software featuring a rich Graphical User Interface (GUI)</span><span id="blockGen576" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >allowing the user to  understand the behaviour of the chemical systems by using</span><span id="blockGen576" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >rigorous models of thermodynamic processes and unit operations.</span><span id="blockGen576" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >So, We in this edition of Engineer bring to you a workshop on CHEMCAD giving you a</span><span id="blockGen576" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > hands-on experience with all the technical details and theory involved. No pre-requisites.</span><span id="blockGen576" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >This will be followed up by an exciting event based on software.</span><span id="blockGen576" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > Hurry up! Limited Seats! Lots of prizes at stake.</span><span id="blockGen576" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideChemical_Breakdown'>
<span id='blockGen577' style='background: rgba(213,226,214,0.8);'><img src='static/Icons_Final/Chemical_Breakdown.png ' width='250px'/></span><br />
<span id='blockGen578' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(244,207,210,0.8);' onclick='getPage("Chemical_Breakdown","Chemical_Breakdown_Description")'><h3>Description</h3></span>
<span id='blockGen579' style='width:220px;padding: 15px;border-radius:20px;background: rgba(243,235,214,0.8);'><h3>Contact: Ramya <br/> 9538703009</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupChemical_Breakdown">
<span id = "tabsChemical_Breakdown_Description">
<span id="blockGen580" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
<b>Introduction:</b></span><span id="blockGen581" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >'My mind,'' he said, 'rebels at stagnation. Give me problems, give me work,</span><span id="blockGen581" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >give me the most abstruse cryptogram or the most intricate analysis, and I am in my own proper atmosphere.</span><span id="blockGen581" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >I can dispense then with artificial stimulants. But I abhor the dull routine of existence.</span><span id="blockGen581" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >I crave for mental exaltation. That is why I have chosen my own particular profession,</span><span id="blockGen581" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >or rather created it, for I am the only one in the world.'</span><span id="blockGen581" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > <b>― Arthur Conan Doyle, The Sign of Four</b></span><span id="blockGen581" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > Here’s a call to all those curious minds waiting to try something new,</span><span id="blockGen581" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > BREAKDOWN, where you can unleash your imagination and basic science,</span><span id="blockGen581" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > laboratory skills and indulge in the world of basic chemistry. Don the role of a lab</span><span id="blockGen581" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" > geek, play with the uncanniest concoctions, prepare the fanciest potions and race</span><span id="blockGen581" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >against the clock to figure out the Chemical X through a series of weirdest cases and mind boggling puzzles.</span><span id="blockGen581" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >Push the lizard Brain of yours to the maximum!</span><span id="blockGen581" style="width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;" >
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sidePsychadelic_Room'>
<span id='blockGen582' style='background: rgba(232,230,212,0.8);'><img src='static/Icons_Final/PsychRoom.png ' width='250px'/></span><br />
<span id='blockGen583' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(229,237,245,0.8);' onclick='getPage("Psychadelic_Room","Psychadelic_Room_Decagon")'><h3>Decagon</h3></span>
<span id='blockGen584' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(243,241,208,0.8);' onclick='getPage("Psychadelic_Room","Psychadelic_Room_Light_Wall")'><h3>Light_Wall</h3></span>
<span id='blockGen585' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(226,246,232,0.8);' onclick='getPage("Psychadelic_Room","Psychadelic_Room_Waterfall")'><h3>Waterfall</h3></span>
<span id='blockGen586' style='width:220px;padding: 15px;border-radius:20px;background: rgba(247,217,248,0.8);'><h3>Contact: Jacob: <br/> jacobv1992@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupPsychadelic_Room">
<span id = "tabsPsychadelic_Room_Decagon">
<span id="blockGen587" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
DECAGON is part of the Psychedelic Room and hence is music synchronized. It is an 8x8x8 3D LED cube which displays visualizations that change with the music playing in the room. These visualizations are 3-dimensional and hence make it way cooler than any visualization you’ve seen before. It involves sound (signal) processing, multiplexing LEDs and building the structure (cube of LEDs) in itself. The second time Octet was implemented, it was improved structurally. A sophisticated coding system was developed and the platform was changed to MSP430F1612 from Arduino. Better patterns were implemented with the new system put in place. 
</span>
</span>
<span id = "tabsPsychadelic_Room_Light_Wall">
<span id="blockGen589" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
The Light Wall forms the coruscating backdrop of the Psychedelic Room. The lights flash in synchronization with the music being played in the room. The blue lights that cover one of the walls and the borders of the rest ensure visualizations that are spectacular. 
</span>
</span>
<span id = "tabsPsychadelic_Room_Waterfall">
<span id="blockGen591" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
Waterfall is a part of the Psychedelic Room. It displays visualizations synchronized with the music being played in the room. The waterfall has columns with three levels of LED rows and is filled with thermocol balls and fan underneath. These fans rotate according to the music being played so as to control how high the thermocol balls fly and the LEDs light accordingly make it look like an equalizer. It involves signal (sound) processing and controlling the fan rotation. Inclusion of LED rows was a development from the year 2011 to 2012, other than implementation on a sturdier mechanical structure. 
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideDance_Dance_Revolution'>
<span id='blockGen593'><button class='button1' style='border-radius: 0%;width: 250px;height: 250px;background: rgba(250,245,250,0.8);'><h1 style='text-align:center;font-family: acens;'>Dance Dance Revolution</h1></button></span><br />
<span id='blockGen594' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(208,240,235,0.8);' onclick='getPage("Dance_Dance_Revolution","Dance_Dance_Revolution_Description")'><h3>Description</h3></span>
<span id='blockGen595' style='width:220px;padding: 15px;border-radius:20px;background: rgba(211,217,224,0.8);'><h3>Contact: Jacob: <br/> jacobv1992@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupDance_Dance_Revolution">
<span id = "tabsDance_Dance_Revolution_Description">
<span id="blockGen596" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
Dance Dance Revolution (also Footloose) abbreviated DDR is a music game where players stand on a 4X4 platform and hit the lit square with their feet to musical cues. Players are judged by how many times they manage to hit the right square in a given period of time. Based on the critically acclaimed music video game series produced by Konami, this game is executed using a wooden platform lit with LEDs and covered with glass integrated with a Linux based GUI for real-time score display. The game mechanics involves random light generation, real time interface and pressure detection for scoring.
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideArcade_Room'>
<span id='blockGen598'><button class='button1' style='border-radius: 0%;width: 250px;height: 250px;background: rgba(218,221,204,0.8);'><h1 style='text-align:center;font-family: acens;'>Arcade Room</h1></button></span><br />
<span id='blockGen599' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(209,211,236,0.8);' onclick='getPage("Arcade_Room","Arcade_Room_Liquid_Light")'><h3>Liquid_Light</h3></span>
<span id='blockGen600' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(215,227,200,0.8);' onclick='getPage("Arcade_Room","Arcade_Room_Temple_Run")'><h3>Temple_Run</h3></span>
<span id='blockGen601' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(218,221,222,0.8);' onclick='getPage("Arcade_Room","Arcade_Room_Theremin")'><h3>Theremin</h3></span>
<span id='blockGen602' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(247,231,223,0.8);' onclick='getPage("Arcade_Room","Arcade_Room_Pin_Ball")'><h3>Pin_Ball</h3></span>
<span id='blockGen603' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(233,245,220,0.8);' onclick='getPage("Arcade_Room","Arcade_Room_Contraption")'><h3>Contraption</h3></span>
<span id='blockGen604' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(224,218,226,0.8);' onclick='getPage("Arcade_Room","Arcade_Room_Agent_Dash")'><h3>Agent_Dash</h3></span>
<span id='blockGen605' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(210,221,206,0.8);' onclick='getPage("Arcade_Room","Arcade_Room_Shadow_LED")'><h3>Shadow_LED</h3></span>
<span id='blockGen606' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(226,240,227,0.8);' onclick='getPage("Arcade_Room","Arcade_Room_Strongman")'><h3>Strongman</h3></span>
<span id='blockGen607' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(223,242,205,0.8);' onclick='getPage("Arcade_Room","Arcade_Room_Labyrinth")'><h3>Labyrinth</h3></span>
<span id='blockGen608' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(239,247,220,0.8);' onclick='getPage("Arcade_Room","Arcade_Room_Laser_Harp")'><h3>Laser_Harp</h3></span>
<span id='blockGen609' style='width:220px;padding: 15px;border-radius:20px;background: rgba(246,209,247,0.8);'><h3>Contact: Jacob: <br/> jacobv1992@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupArcade_Room">
<span id = "tabsArcade_Room_Liquid_Light">
<span id="blockGen610" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
Liquid Light is made up of an RGB LED screen. It consists of various touch points. When touched, it creates an explosion of colourful patterns similar to the ripple effect from touching water. It involves detecting touch, algorithms to create patterns and controlling LED arrays. 
</span>
</span>
<span id = "tabsArcade_Room_Temple_Run">
<span id="blockGen612" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
Temple Run, an adventurous game in which the character runs in a jungle avoiding all obstacles. The character is also being chased by a demon & has to avoid being caught. We are implementing the game virtually using Kinect. If you want to experience a real thrilling chase you gotta check this out. 
</span>
</span>
<span id = "tabsArcade_Room_Theremin">
<span id="blockGen614" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
The Theremin is an early instrument played without touching. It consists of two antennas, one to control pitch and the other to control amplitude. Along the same lines, the Theremin implemented is modeled as a butler, with sensors for hands, depicted as vocalizing according to the user’s movements. Instead of the antennas, here, the distance of the user’s hands from the two sensors control the pitch and the amplitude. It also consists of two knobs to control mode and volume. The game mechanics involves sensing motion and using that as a basis to emit sounds. 
</span>
</span>
<span id = "tabsArcade_Room_Pin_Ball">
<span id="blockGen616" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
A game enjoyed since ages by the young & old alike is now brought out of the screen into the real scenario. The blockers are controlled using levers & the aim of the game is to keep the ball from falling into the pit. 
</span>
</span>
<span id = "tabsArcade_Room_Contraption">
<span id="blockGen618" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
In the year 2011, Contraption was implemented on a structure that depicted the Engineer logo. In 2012, a mechanical clock was made. This year we bring it back bigger than ever.
</span>
</span>
<span id = "tabsArcade_Room_Agent_Dash">
<span id="blockGen620" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
Who doesn't love the OO7 style agent of the famous android game AGENT DASH! This event is a virtual game where you are supposed to control your agent in the game by actually moving left or right on the sensor platform. The ultimate goal is to dodge obstacles coming your way ,shoot your enemies & cover the longest distance. 
</span>
</span>
<span id = "tabsArcade_Room_Shadow_LED">
<span id="blockGen622" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
Shadow LED is an LED panel that shows one’s shadow. When the person stands in front of it, the LEDs light up to display his/her shadow. Swing your arms, move about, walk away and it does exactly that. This event involves image processing and controlling LED arrays. 
</span>
</span>
<span id = "tabsArcade_Room_Strongman">
<span id="blockGen624" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
Strongman is an exhibitor of strength and this game is everyone’s chance at that. It consists of a tower of LEDs, lit according to how hard the player manages to whack a given spot with a hammer. As opposed to the ones used in funfair and carnivals, this game uses pressure sensors to determine the force of the blow. When all the LEDs are lit, the player wins. The game mechanics involves controlling the number of rows of LEDs lit according to the sensor measurements. 
</span>
</span>
<span id = "tabsArcade_Room_Labyrinth">
<span id="blockGen626" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
Labyrinth is a game consisting of a maze and a marble the objective of which is to tilt the playfield to guide the marble to the end of the maze. The maze is suspended using the four corners. The player is provided with a keyglove used to control the tilt of the maze by similar palm tilt. The keyglove has an Inertial Measurement Unit (accelerometer and gyroscope devices) which is used to measure the tilt and Xbees to transmit data wirelessly to the control system on the labyrinth. The game mechanics involves tapping the hand tilt of the player and replicating a similar tilt on the playfield. 
</span>
</span>
<span id = "tabsArcade_Room_Laser_Harp">
<span id="blockGen628" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
Laser harp is an engineer’s attempt to draw analogy with the musical instrument harp. Being a high profile feature of concerts of famous musicians, here, laser beams are blocked instead of plucking strings and sound is emitted by detecting which laser was blocked using sensors. The game mechanics involve accurate alignment of the laser and sensor placed on opposite ends of the harp and producing sound of various frequencies according to the laser beam blocked. 
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideBlitzkrieg'>
<span id='blockGen630' style='background: rgba(240,220,214,0.8);'><img src='static/Icons_Final/blitzkrieg.png ' width='250px'/></span><br />
<span id='blockGen631' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(232,224,235,0.8);' onclick='getPage("Blitzkrieg","Blitzkrieg_Description")'><h3>Description</h3></span>
<span id='blockGen632' style='width:220px;padding: 15px;border-radius:20px;background: rgba(215,226,241,0.8);'><h3>Contact: Jacob: <br/> jacobv1992@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupBlitzkrieg">
<span id = "tabsBlitzkrieg_Description">
<span id="blockGen633" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
Blitzkrieg (also Laser Tag) draws inspiration from the popular Laser tag game. It is a team sport where players attempt to score points by tagging opponents with a hand-held IR-emitting laser-targeting device. IR-sensitive targets are worn by each player and points are won by tagging an opponent and lost when tagged. Fluorescent jackets are worn to be spotted in the dark and existing buildings are used as the arena. Each player is given limited lives and shots, after which they need to go to the base station to be revived. The game mechanics mainly involves communication protocols for integration between the player's equipment and devices in the facility.
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideMegapixel'>
<span id='blockGen635' style='background: rgba(229,210,231,0.8);'><img src='static/Icons_Final/megapixel.png ' width='250px'/></span><br />
<span id='blockGen636' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(247,229,211,0.8);' onclick='getPage("Megapixel","Megapixel_Description")'><h3>Description</h3></span>
<span id='blockGen637' style='width:220px;padding: 15px;border-radius:20px;background: rgba(204,218,205,0.8);'><h3>Contact: Jacob: <br/> jacobv1992@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupMegapixel">
<span id = "tabsMegapixel_Description">
<span id="blockGen638" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
Imagine playing Tetris on a screen as big as an 8-floored building. Well, imagine no more, because that’s exactly what Megapixel is. A 32x16 LED screen is hung off a building as the screen with players sitting about half a kilometer away from it. The players get to choose from a wide variety of commonly played video games all coded specifically to fit this screen. The screen is also used for displaying custom messages intended to advertise and publicize other events. The game mechanics involves controlling LED arrays and coding games specific to the event. The Megapixel was initially implemented as a 24x16 LED screen in the year 2011. In the following year, this was improved to a 32x16 screen.
</span>
</span>
</span>
</td>
</tr>
</table>
</div>
		<!-- <div id="menu">
			<button id="back" onclick="backHistory();">BACK</button>
			<button id="page">RESET</button>
		</div> -->
		<div class="logo"><img src='static/images/logo.png' style="width:100px;" /><img src='static/images/engi.png' style="width:250px;"></div>
		<div class="header">
				<div class="quickNav">
				<center>
					<span style="width:50%">
					<div>

						<button id="page" class="quickNavContent" style = "width: 120px; height: 50px; border-radius:10px;" onclick="getPage('allCommittees')" >EVENTS</button>
						<button id="page" class="quickNavContent" style = "width: 120px; height: 50px; border-radius:10px;" onclick="getPage('Workshops')" >WORKSHOPS</button>
						<button id="page" class="quickNavContent" style = "width: 120px; height: 50px; border-radius:10px;" onclick="getPage('Technites')" >TECHNITES</button>
						<button id="page" class="quickNavContent" style = "width: 120px; height: 50px; border-radius:10px;" onclick="getPage('Tech_Speak')" >TECHSPEAK</button>
						<!-- <button id="page" class="quickNavContent" style = "width: 60px; height: 60px;" onclick="getPage('homePage')"></button> -->
					<i class="icon-th"></i>
					</div>
					</span>
				</center>
				</div>

			<div class="pull-right">
				<!-- <span style="font-size:19px;">24th - 27th October 2013</span> -->
				<input type="text" id="searchBox" placeholder=" Search events"/><br />
				<!-- <a class="btn" onclick="share();">Share</a><br /> -->
				<img id="back" src='static/./images/back.png' onclick="backHistory();" style="position:fixed;right:10px;top:60px;width:50px;cursor:pointer;"/>
				<img src='static/images/up.png' onclick="VScroll(false)" style="position:fixed;right:10px;top:240px;width:50px;cursor:pointer;"/>
				<img src='static/images/down.png' onclick="VScroll(true)" style="position:fixed;right:10px;top:290px;width:50px;cursor:pointer;"/>
				<span class="dropdown" id="loggedIn">
  					<a class="dropdown-toggle btn colorless" data-toggle="dropdown" href="#"><i class="icon-user"></i> <b class="caret"></b></a>
  					<ul class="dropdown-menu accountSettings" style="margin-left:-5px;padding-left:10px;" role="menu" aria-labelledby="dLabel">
						<b id="fname">Firstname </b><b id="lname">Lastname</b><br />
						<em id="email">Email</em>
						<li class="divider"></li>
						<li><a onclick="get_profile_page(1);">Profile</a></li>
						<li onclick="logout();"><a>Logout</a></li>
  					</ul>
				</span>
				<span class="dropdown" id="Login">
  					<a class="dropdown-toggle btn colorless" data-toggle="dropdown" href="#">Login <b class="caret"></b></a>
  					<ul class="dropdown-menu accountSettings" style="margin-left:-177px;padding:10px;" role="menu" aria-labelledby="dLabel">
  						<form onsubmit="return false;">
						<input type="text" name="username" placeholder="Email" /><br />
						<input type="password" name="password" placeholder="Password" /><br />
						<button class="btn btn-success" onclick="login()" style="height: 30px;">Submit</button>
						<span id="error_login"></span>
						</form>
  					</ul>
				</span>
				<span class="dropdown" id="Signup">
  					<a class="dropdown-toggle btn colorless" data-toggle="dropdown" href="#">Signup <b class="caret"></b></a>
  					<ul class="dropdown-menu accountSettings" style="margin-left: -166px;padding:10px;" role="menu" aria-labelledby="dLabel">
  						<form onsubmit="return false;">
  							<input name="first_name" type="text" placeholder="First Name"/><br />
  							<input name="last_name" type="text" placeholder="Last Name"/><br />
							<input name="email" type="text" placeholder="Email"/><br />
							<input name="password1" type="password" placeholder="Password"/><br />
							<input name="password2" type="password" placeholder="Confirm Password"/><br />
							<input name="city" type="text" placeholder="City"/><br />
							<input name="institution_name" type="text" placeholder="College"/><br />
							<button class="btn btn-success" onclick="signup()" style="height: 30px;">Submit</button>
							<span id="error_signup"></span>
						</form>
  					</ul>
				</span>
			</div>
		</div>
		<!-- share thingy -->
		<div id="shareModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  			<div class="modal-header">
    			<a type="button" class="close" data-dismiss="modal" aria-hidden="true">×</a>
    			<h3 id="myModalLabel">Share URL</h3>
  			</div>
  			<div class="modal-body">
  				<input type="text" placeholder="URL" style="width:400px" id="share_url"/>
  			</div>
  			<div class="modal-footer">
    			<a class="btn" data-dismiss="modal" aria-hidden="true">Close</a>
  			</div>
			</div>
		<div class="footer">
			<span class="social"> 
				<a href="http://www.facebook.com/EngineerNITK" target="_blank"><img src='static/images/facebook-icon.png' /></a>
				<a href="http://twitter.com/EngineerNITK" target="_blank"><img src='static/images/twitter-icon.png'/></a>
				<a href="http://www.youtube.com/user/engineernitk" target="_blank"><img src='static/images/youtube-icon.png'/></a>
				<a href="http://www.engineerpress.blogspot.in" target="_blank"><img src='static/images/blogger-icon.png'/></a>
				<a href="http://in.linkedin.com/in/engineernitk" target="_blank"><img src='static/images/linkedin-icon.png'/></a>
			</span>
			<center>&copy; Engineer 2013 Technical team</center>
		</div>
		<script>
		var loggedin_flag= 0;
		var user = 0
		person = function(){
			this.fname= "";
			this.lname= "";
			this.email = "";
		}
		<?
			if(isLogin()){
		?>
			user = {'fname': "<? echo $_SESSION['first_name']; ?>", "lname": "<? echo $_SESSION['last_name']; ?>" , "email": "<? echo $_SESSION['email'];?>"}
			get_profile(user)
			user = new person();
			person.fname= "<? echo $_SESSION['first_name']; ?>";
			person.lname= "<? echo $_SESSION['last_name']; ?>";
			person.email = "<? echo $_SESSION['email'];?>";
			$('#Login').hide();
			$('#Signup').hide();
		<?} else {?>
			$('#loggedIn').hide();
		<?}?>
		</script>
		<script>
			$( document ).ready(function() {
  				// Handler for .ready() called.
			});
		</script>
	</body>
</html>