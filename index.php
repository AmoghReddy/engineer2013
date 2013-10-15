<?
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" href='static/http://engineer.org.in/2013/favicon.ico" type="image/x-icon' >
		<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" %}>
		<title>Engineer 2013</title>
		<link rel="stylesheet" href='static/bootstrap/css/bootstrap.min.css'  />
		<link rel="stylesheet" href='static/style.css' />
		
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44829016-1', 'engineer.org.in');
  ga('send', 'pageview');

</script>

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
				<span id = "menu7"><button id="button7" style="font-family: acens;" onclick ="getPage('Accom')" >ACCOM</button></span>
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
				
				<table>
				<tr>
				<td><span id = "blockProfile0" style='display:none;width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;'>PROFILE</span></td>
				<td><span id = "blockProfile1" style='display:none;width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;'>
					<table width = "650">
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
				</span></td>
				</tr>
				<td><span id = "blockProfile2" style='width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;'>
					Events Registered:
				</span></td>
				<td><span id = "blockProfile3" style='width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;'>
					<p id = "profile_events"></p>
				</span></td>
				</tr>
				</table>

				<!--<span id = "blockProfile4" style='display:none;width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;'>
					Team Requests
				</span>
				<span id = "blockProfile5" style='display:none;width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;'>
					<p id="profile_team_request"></p>
				</span>-->

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
			<span id='blockGen98' style='width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;'>
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
			Email: vishnu@engineer.org.in</span><br /><br />
			<b>Aditya Tiwari (Chairman)</b></br>
			<span style='font-style:italic;'>Ph: 9164748465 </br>
			Email: chairman@engineer.org.in</span>
			</p>
			<hr/>
			</span>
			</td>
			</tr>
			</table>
			</span>
<span id='pageAccom'>			
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='blockAccom1'><img src="static/images/logo.png" width='250px'/></span><br />
</td>
<td style='width: 70%'>
<span id="blockGen747" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
<h1> Accomodation</h1>
Accmodation will be provided to all out station participants in the campus. registrations for ENGINEER in general is <b>Rs 200/head</b>. <br />
Registered participants will get Engi bag, note pad and other goodies<br />
If you have to avail accomodations the charges are as follows:<br />
1. Rs 300 if you are staying for 2 or less than 2 days.<br />
2. Rs 500 if you are staying for more than 2 days.<br /><br />

As ENGINNER promotes paperless banking please avoid hard cash and demand drafts. Facilities will be available for payments through <b>credit/debit cards</b>.
</span>
</td>
</tr>
</table>
</span>
<span id = "allCommittees" >
<span id = "comitteeTronix" style="cursor:pointer;background: rgba(248,219,227,0.8);" onclick="getPage('Tronix')">
<img id="eve1" src="static/Icons_Final/tronix.png"/>
</span>
<span id = "comitteeGaming" style="cursor:pointer;background: rgba(221,208,239,0.8);" onclick="getPage('Gaming')">
<img id="eve2" src="static/Icons_Final/gaming.png"/>
</span>
<span id = "comitteeMining" style="cursor:pointer;background: rgba(232,222,248,0.8);" onclick="getPage('Mining')">
<img id="eve3" src="static/Icons_Final/mining.png"/>
</span>
<span id = "comitteeCivil" style="cursor:pointer;background: rgba(216,241,204,0.8);" onclick="getPage('Civil')">
<img id="eve4" src="static/Icons_Final/civilmain.png"/>
</span>
<span id = "comitteeSce" style="cursor:pointer;background: rgba(226,211,235,0.8);" onclick="getPage('Sce')">
<img id="eve5" src="static/Icons_Final/Sce.png"/>
</span>
<span id = "comitteeMockstock" style="cursor:pointer;background: rgba(245,214,224,0.8);" onclick="getPage('Mockstock')">
<img id="eve6" src="static/Icons_Final/mockstock.png"/>
</span>
<span id = "comitteeMba" style="cursor:pointer;background: rgba(226,208,246,0.8);" onclick="getPage('Mba')">
<img id="eve7" src="static/Icons_Final/MBA.png"/>
</span>
<span id = "comitteeGeneral" style="cursor:pointer;background: rgba(225,229,213,0.8);" onclick="getPage('General')">
<img id="eve8" src="static/Icons_Final/GeneralEvents.png"/>
</span>
<span id = "comitteeChemical" style="cursor:pointer;background: rgba(248,219,236,0.8);" onclick="getPage('Chemical')">
<img id="eve9" src="static/Icons_Final/chemmain.png"/>
</span>
<span id = "comitteeComps" style="cursor:pointer;background: rgba(239,233,209,0.8);" onclick="getPage('Comps')">
<img id="eve10" src="static/Icons_Final/Comps_Main.png"/>
</span>
<span id = "comitteeMaterials" style="cursor:pointer;background: rgba(214,204,203,0.8);" onclick="getPage('Materials')">
<img id="eve11" src="static/Icons_Final/Metamain.png"/>
</span>
<span id = "comitteeBiz" style="cursor:pointer;background: rgba(227,214,244,0.8);" onclick="getPage('Biz')">
<img id="eve12" src="static/Icons_Final/BIZ.png"/>
</span>
<span id = "comitteeBlue_Print" style="cursor:pointer;background: rgba(214,233,236,0.8);" onclick="getPage('Blue_Print')">
<img id="eve13" src="static/Icons_Final/BluePrint.png"/>
</span>
<span id = "comitteeMechanical" style="cursor:pointer;background: rgba(239,246,240,0.8);" onclick="getPage('Mechanical')">
<img id="eve14" src="static/Icons_Final/mech.png"/>
</span>
<span id = "comitteeAstronomy" style="cursor:pointer;background: rgba(230,200,238,0.8);" onclick="getPage('Astronomy')">
<img id="eve15" src="static/Icons_Final/astro.png"/>
</span>
</span>
<table class='table'>
<tr>
<td>
<span id='sideTronix'>
<br /><br /><br />
<span id='blockGen1'><h1 style='font-size: 68px; margin: 5px;'>T</h1></span><br />
<span id='blockGen2'><h1 style='font-size: 68px; margin: 5px;'>R</h1></span><br />
<span id='blockGen3'><h1 style='font-size: 68px; margin: 5px;'>O</h1></span><br />
<span id='blockGen4'><h1 style='font-size: 68px; margin: 5px;'>N</h1></span><br />
<span id='blockGen5'><h1 style='font-size: 68px; margin: 5px;'>I</h1></span><br />
<span id='blockGen6'><h1 style='font-size: 68px; margin: 5px;'>X</h1></span><br />
</span>
</td>
<td valign = 'top' >
<span id='pageTronix'>
<table>
<tr>
<td><span id='blockGen7' onclick='getPage("Simplicity")' style='cursor:pointer;width: 250px;background: rgba(243,203,205,0.8);'><img src='static/Icons_Final/SIMPLICITY.png'/></span></td>
<td><span id='blockGen8' onclick='getPage("Waltz")' style='cursor:pointer;width: 250px;background: rgba(217,239,242,0.8);'><img src='static/Icons_Final/Waltz.png'/></span></td>
<td><span id='blockGen9' onclick='getPage("Trade_OFF")' style='cursor:pointer;width: 250px;background: rgba(239,222,229,0.8);'><img src='static/Icons_Final/trade_off.png'/></span></td>
</tr>
<tr>
<td><span id='blockGen10' onclick='getPage("Symphony")' style='cursor:pointer;width: 250px;background: rgba(227,227,230,0.8);'><img src='static/Icons_Final/Symphony.png'/></span></td>
<td><span id='blockGen11' onclick='getPage("TrailBlazer")' style='cursor:pointer;width: 250px;background: rgba(230,215,205,0.8);'><img src='static/Icons_Final/trailblazer.png'/></span></td>
<td><span id='blockGen12' onclick='getPage("Automata")' style='cursor:pointer;width: 250px;background: rgba(243,240,225,0.8);'><img src='static/Icons_Final/AUTOMATA_NEW.png'/></span></td>
</tr>
<tr>
<td><span id='blockGen13' onclick='getPage("FoxHunt")' style='cursor:pointer;width: 250px;background: rgba(232,233,214,0.8);'><img src='static/Icons_Final/foxxhunt.png'/></span></td>
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
<span id='blockGen15'><h1 style='font-size: 68px; margin: 5px;'>A</h1></span><br />
<span id='blockGen16'><h1 style='font-size: 68px; margin: 5px;'>M</h1></span><br />
<span id='blockGen17'><h1 style='font-size: 68px; margin: 5px;'>I</h1></span><br />
<span id='blockGen18'><h1 style='font-size: 68px; margin: 5px;'>N</h1></span><br />
<span id='blockGen19'><h1 style='font-size: 68px; margin: 5px;'>G</h1></span><br />
</span>
</td>
<td valign = 'top' >
<span id='pageGaming'>
<table>
<tr>
<td><span id='blockGen20' onclick='getPage("Fifa")' style='cursor:pointer;width: 250px;background: rgba(204,206,215,0.8);'><img src='static/Icons_Final/fifa.png'/></span></td>
<td><span id='blockGen21' onclick='getPage("Aoe")' style='cursor:pointer;width: 250px;background: rgba(250,246,238,0.8);'><img src='static/Icons_Final/aoe3.png'/></span></td>
<td><span id='blockGen22' onclick='getPage("NFS")' style='cursor:pointer;width: 250px;background: rgba(227,246,205,0.8);'><img src='static/Icons_Final/nfs.png'/></span></td>
</tr>
<tr>
<td><span id='blockGen23' onclick='getPage("dota")' style='cursor:pointer;width: 250px;background: rgba(233,214,237,0.8);'><img src='static/Icons_Final/dOTA.png'/></span></td>
<td><span id='blockGen24' onclick='getPage("CounterStrike")' style='cursor:pointer;width: 250px;background: rgba(241,234,239,0.8);'><img src='static/Icons_Final/COUNTERSTRIKE.png'/></span></td>
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
<span id='blockGen26'><h1 style='font-size: 68px; margin: 5px;'>I</h1></span><br />
<span id='blockGen27'><h1 style='font-size: 68px; margin: 5px;'>N</h1></span><br />
<span id='blockGen28'><h1 style='font-size: 68px; margin: 5px;'>I</h1></span><br />
<span id='blockGen29'><h1 style='font-size: 68px; margin: 5px;'>N</h1></span><br />
<span id='blockGen30'><h1 style='font-size: 68px; margin: 5px;'>G</h1></span><br />
</span>
</td>
<td valign = 'top' >
<span id='pageMining'>
<table>
<tr>
<td><span id='blockGen31' onclick='getPage("Innovating_Mining")' style='cursor:pointer;width: 250px;background: rgba(248,221,234,0.8);'><img src='static/Icons_Final/mining_innovation.png'/></span></td>
<td><span id='blockGen32' onclick='getPage("Adverse_Mining_Problem")' style='cursor:pointer;width: 250px;background: rgba(227,201,243,0.8);'><img src='static/Icons_Final/adverse_mining.png'/></span></td>
<td><span id='blockGen33' onclick='getPage("Mine_Quest")' style='cursor:pointer;width: 250px;background: rgba(215,243,248,0.8);'><img src='static/Icons_Final/Mine_Quest.png'/></span></td>
</tr>
<tr>
<td><span id='blockGen34' onclick='getPage("Hang-Man")' style='cursor:pointer;width: 250px;background: rgba(242,235,204,0.8);'><img src='static/Icons_Final/HANGMAN_MAIN.png'/></span></td>
<td><span id='blockGen35' onclick='getPage("Blast_Mine_Ventilation")' style='cursor:pointer;width: 250px;background: rgba(243,209,213,0.8);'><img src='static/Icons_Final/blast_mine_ventilation.png'/></span></td>
<td><span id='blockGen36' onclick='getPage("Mine_Rush")' style='cursor:pointer;width: 250px;background: rgba(216,221,232,0.8);'><img src='static/Icons_Final/Mine_Rush.png'/></span></td>
</tr>
</table>
</span>
</td>
</tr>
</table>
<table class='table'>
<tr>
<td>
</td>
<td valign = 'top' >
</td>
</tr>
</table>
<table class='table'>
<tr>
<td>
<span id='sideCivil'>
<br /><br /><br />
<span id='blockGen37'><h1 style='font-size: 68px; margin: 5px;'>C</h1></span><br />
<span id='blockGen38'><h1 style='font-size: 68px; margin: 5px;'>I</h1></span><br />
<span id='blockGen39'><h1 style='font-size: 68px; margin: 5px;'>V</h1></span><br />
<span id='blockGen40'><h1 style='font-size: 68px; margin: 5px;'>I</h1></span><br />
<span id='blockGen41'><h1 style='font-size: 68px; margin: 5px;'>L</h1></span><br />
</span>
</td>
<td valign = 'top' >
<span id='pageCivil'>
<table>
<tr>
<td><span id='blockGen42' onclick='getPage("FantastiCity")' style='cursor:pointer;width: 250px;background: rgba(205,215,245,0.8);'><img src='static/Icons_Final/fantasticity2.png'/></span></td>
<td><span id='blockGen43' onclick='getPage("COLOSSUS")' style='cursor:pointer;width: 250px;background: rgba(210,220,212,0.8);'><img src='static/Icons_Final/Colossus.png'/></span></td>
<td><span id='blockGen44' onclick='getPage("Architect")' style='cursor:pointer;width: 250px;background: rgba(204,204,204,0.8);'><img src='static/Icons_Final/Architect2.png'/></span></td>
</tr>
<tr>
<td><span id='blockGen45' onclick='getPage("Nirvahana")' style='cursor:pointer;width: 250px;background: rgba(244,243,222,0.8);'><img src='static/Icons_Final/Nirvana.png'/></span></td>
<td><span id='blockGen46' onclick='getPage("Mindbend")' style='cursor:pointer;width: 250px;background: rgba(244,222,235,0.8);'><img src='static/Icons_Final/mindbend.png'/></span></td>
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
<span id='blockGen47'><h1 style='font-size: 68px; margin: 5px;'>S</h1></span><br />
<span id='blockGen48'><h1 style='font-size: 68px; margin: 5px;'>C</h1></span><br />
<span id='blockGen49'><h1 style='font-size: 68px; margin: 5px;'>E</h1></span><br />
</span>
</td>
<td valign = 'top' >
<span id='pageSce'>
<table>
<tr>
<td><span id='blockGen50' onclick='getPage("Sky_Lanterns")' style='cursor:pointer;width: 250px;background: rgba(204,222,223,0.8);'><img src='static/Icons_Final/sky_lantern.png'/></span></td>
<td><span id='blockGen51' onclick='getPage("Green_Inovation_Challenge")' style='cursor:pointer;width: 250px;background: rgba(236,210,203,0.8);'><img src='static/Icons_Final/Green_Product_Design.png'/></span></td>
<td><span id='blockGen52' onclick='getPage("Sparsh")' style='cursor:pointer;width: 250px;background: rgba(248,203,223,0.8);'><img src='static/Icons_Final/saprsh.png'/></span></td>
</tr>
<tr>
<td><span id='blockGen53' onclick='getPage("The_Last_Word")' style='cursor:pointer;width: 250px;background: rgba(216,237,219,0.8);'><img src='static/Icons_Final/lastword.png'/></span></td>
</table>
</span>
</td>
</tr>
</table>
<table class='table'>
<tr>
<td>
</td>
<td valign = 'top' >
</td>
</tr>
</table>
<table class='table'>
<tr>
<td>
<span id='sideWorkshops'>
<br /><br /><br />
<span id='blockGen54'><h1 style='font-size: 68px; margin: 5px;'>W</h1></span><br />
<span id='blockGen55'><h1 style='font-size: 68px; margin: 5px;'>O</h1></span><br />
<span id='blockGen56'><h1 style='font-size: 68px; margin: 5px;'>R</h1></span><br />
<span id='blockGen57'><h1 style='font-size: 68px; margin: 5px;'>K</h1></span><br />
<span id='blockGen58'><h1 style='font-size: 68px; margin: 5px;'>S</h1></span><br />
<span id='blockGen59'><h1 style='font-size: 68px; margin: 5px;'>H</h1></span><br />
<span id='blockGen60'><h1 style='font-size: 68px; margin: 5px;'>O</h1></span><br />
<span id='blockGen61'><h1 style='font-size: 68px; margin: 5px;'>P</h1></span><br />
<span id='blockGen62'><h1 style='font-size: 68px; margin: 5px;'>S</h1></span><br />
</span>
</td>
<td valign = 'top' >
<span id='pageWorkshops'>
<table>
<tr>
<td><span id='blockGen63' onclick='getPage("Ethical_Hacking_by_TechDefence")' style='cursor:pointer;width: 250px;background: rgba(211,208,210,0.8);'><img src='static/Icons_Final/HACKING.png'/></span></td>
<td><span id='blockGen64' onclick='getPage("Augmented_Reality")' style='cursor:pointer;width: 250px;background: rgba(217,249,224,0.8);'><img src='static/Icons_Final/AUGMENTED.png'/></span></td>
<td><button id='blockGen65' class='button1' onclick='getPage("3D_Photography")' style='cursor:pointer;border-radius: 0%;width: 250px;height: 250px;margin-top: 0px;background: rgba(214,209,246,0.8);'><h1 style='text-align:center;font-family: acens;'>3D Photography</h1></td>
</tr>
<tr>
<td><span id='blockGen66' onclick='getPage("RC_Aircraft_Design_and_Fabrication")' style='cursor:pointer;width: 250px;background: rgba(235,238,237,0.8);'><img src='static/Icons_Final/RC_Aircraft.png'/></span></td>
<td><span id='blockGen67' onclick='getPage("Humanoid_Robot")' style='cursor:pointer;width: 250px;background: rgba(248,211,200,0.8);'><img src='static/Icons_Final/ROBOTICS.png'/></span></td>
<td><span id='blockGen68' onclick='getPage("Android Application Development")' style='cursor:pointer;width: 250px;background: rgba(218,231,215,0.8);'><img src='static/Icons_Final/Android.png'/></span></td>
</tr>
<tr>
<td><span id='blockGen69' onclick='getPage("Bridge_Design_and_Fabrication")' style='cursor:pointer;width: 250px;background: rgba(225,230,223,0.8);'><img src='static/Icons_Final/Bridge_design.png'/></span></td>
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
<span id='blockGen70'><h1 style='font-size: 68px; margin: 5px;'>M</h1></span><br />
<span id='blockGen71'><h1 style='font-size: 68px; margin: 5px;'>B</h1></span><br />
<span id='blockGen72'><h1 style='font-size: 68px; margin: 5px;'>A</h1></span><br />
</span>
</td>
<td valign = 'top' >
<span id='pageMba'>
<table>
<tr>
<td><span id='blockGen73' onclick='getPage("MindBend")' style='cursor:pointer;width: 250px;background: rgba(237,246,220,0.8);'><img src='static/Icons_Final/mindbend.png'/></span></td>
<td><span id='blockGen74' onclick='getPage("HR_Event")' style='cursor:pointer;width: 250px;background: rgba(236,217,233,0.8);'><img src='static/Icons_Final/HR.png'/></span></td>
<td><span id='blockGen75' onclick='getPage("Markenza")' style='cursor:pointer;width: 250px;background: rgba(220,204,249,0.8);'><img src='static/Icons_Final/MARKENZA.png'/></span></td>
</tr>
<tr>
<td><span id='blockGen76' onclick='getPage("Finance_Event")' style='cursor:pointer;width: 250px;background: rgba(239,245,205,0.8);'><img src='static/Icons_Final/Finance.png'/></span></td>
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
<span id='blockGen77'><h1 style='font-size: 68px; margin: 5px;'>G</h1></span><br />
<span id='blockGen78'><h1 style='font-size: 68px; margin: 5px;'>E</h1></span><br />
<span id='blockGen79'><h1 style='font-size: 68px; margin: 5px;'>N</h1></span><br />
<span id='blockGen80'><h1 style='font-size: 68px; margin: 5px;'>E</h1></span><br />
<span id='blockGen81'><h1 style='font-size: 68px; margin: 5px;'>R</h1></span><br />
<span id='blockGen82'><h1 style='font-size: 68px; margin: 5px;'>A</h1></span><br />
<span id='blockGen83'><h1 style='font-size: 68px; margin: 5px;'>L</h1></span><br />
</span>
</td>
<td valign = 'top' >
<span id='pageGeneral'>
<table>
<tr>
<td><span id='blockGen84' onclick='getPage("Simplineer")' style='cursor:pointer;width: 250px;background: rgba(203,216,209,0.8);'><img src='static/Icons_Final/SIMPLINEER.png'/></span></td>
</table>
</span>
</td>
</tr>
</table>
<table class='table'>
<tr>
<td>
<span id='sideChemical'>
<br /><br /><br />
<span id='blockGen85'><h1 style='font-size: 68px; margin: 5px;'>C</h1></span><br />
<span id='blockGen86'><h1 style='font-size: 68px; margin: 5px;'>H</h1></span><br />
<span id='blockGen87'><h1 style='font-size: 68px; margin: 5px;'>E</h1></span><br />
<span id='blockGen88'><h1 style='font-size: 68px; margin: 5px;'>M</h1></span><br />
<span id='blockGen89'><h1 style='font-size: 68px; margin: 5px;'>I</h1></span><br />
<span id='blockGen90'><h1 style='font-size: 68px; margin: 5px;'>C</h1></span><br />
<span id='blockGen91'><h1 style='font-size: 68px; margin: 5px;'>A</h1></span><br />
<span id='blockGen92'><h1 style='font-size: 68px; margin: 5px;'>L</h1></span><br />
</span>
</td>
<td valign = 'top' >
<span id='pageChemical'>
<table>
<tr>
<td><span id='blockGen93' onclick='getPage("Industry_Defined_Problem")' style='cursor:pointer;width: 250px;background: rgba(200,237,241,0.8);'><img src='static/Icons_Final/IDP.png'/></span></td>
<td><button id='blockGen94' class='button1' onclick='getPage("Contraption")' style='cursor:pointer;border-radius: 0%;width: 250px;height: 250px;margin-top: 0px;background: rgba(238,241,225,0.8);'><h1 style='text-align:center;font-family: acens;'>Contraption</h1></td>
<td><span id='blockGen95' onclick='getPage("The_Portal")' style='cursor:pointer;width: 250px;background: rgba(215,230,234,0.8);'><img src='static/Icons_Final/the_portal.png'/></span></td>
</tr>
<tr>
<td><span id='blockGen96' onclick='getPage("Chemical_Breakdown")' style='cursor:pointer;width: 250px;background: rgba(204,246,236,0.8);'><img src='static/Icons_Final/Chemical_Breakdown.png'/></span></td>
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
<span id='blockGen97'><h1 style='font-size: 68px; margin: 5px;'>C</h1></span><br />
<span id='blockGen98'><h1 style='font-size: 68px; margin: 5px;'>O</h1></span><br />
<span id='blockGen99'><h1 style='font-size: 68px; margin: 5px;'>M</h1></span><br />
<span id='blockGen100'><h1 style='font-size: 68px; margin: 5px;'>P</h1></span><br />
<span id='blockGen101'><h1 style='font-size: 68px; margin: 5px;'>S</h1></span><br />
</span>
</td>
<td valign = 'top' >
<span id='pageComps'>
<table>
<tr>
<td><span id='blockGen102' onclick='getPage("Inscription")' style='cursor:pointer;width: 250px;background: rgba(244,230,225,0.8);'><img src='static/Icons_Final/INSCRIPTION.png'/></span></td>
<td><span id='blockGen103' onclick='getPage("ECTF_-_Capture_the_Flag")' style='cursor:pointer;width: 250px;background: rgba(247,242,202,0.8);'><img src='static/Icons_Final/ECTF.png'/></span></td>
<td><span id='blockGen104' onclick='getPage("Virtual_Bounty")' style='cursor:pointer;width: 250px;background: rgba(239,209,209,0.8);'><img src='static/Icons_Final/VIRTUAL_BOUNTY2.png'/></span></td>
</tr>
<tr>
<td><span id='blockGen105' onclick='getPage("Kode_Kombat")' style='cursor:pointer;width: 250px;background: rgba(244,232,236,0.8);'><img src='static/Icons_Final/CODE_KOMBAT.png'/></span></td>
<td><span id='blockGen106' onclick='getPage("Marathon")' style='cursor:pointer;width: 250px;background: rgba(233,241,207,0.8);'><img src='static/Icons_Final/marathon_final.png'/></span></td>
<td><span id='blockGen107' onclick='getPage("Rectify")' style='cursor:pointer;width: 250px;background: rgba(243,237,211,0.8);'><img src='static/Icons_Final/RECTIFY.png'/></span></td>
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
<span id='blockGen108'><h1 style='font-size: 68px; margin: 5px;'>M</h1></span><br />
<span id='blockGen109'><h1 style='font-size: 68px; margin: 5px;'>A</h1></span><br />
<span id='blockGen110'><h1 style='font-size: 68px; margin: 5px;'>T</h1></span><br />
<span id='blockGen111'><h1 style='font-size: 68px; margin: 5px;'>E</h1></span><br />
<span id='blockGen112'><h1 style='font-size: 68px; margin: 5px;'>R</h1></span><br />
<span id='blockGen113'><h1 style='font-size: 68px; margin: 5px;'>I</h1></span><br />
<span id='blockGen114'><h1 style='font-size: 68px; margin: 5px;'>A</h1></span><br />
<span id='blockGen115'><h1 style='font-size: 68px; margin: 5px;'>L</h1></span><br />
<span id='blockGen116'><h1 style='font-size: 68px; margin: 5px;'>S</h1></span><br />
</span>
</td>
<td valign = 'top' >
<span id='pageMaterials'>
<table>
<tr>
<td><span id='blockGen117' onclick='getPage("mindBend")' style='cursor:pointer;width: 250px;background: rgba(202,238,223,0.8);'><img src='static/Icons_Final/mindbend.png'/></span></td>
<td><span id='blockGen118' onclick='getPage("SEM_and_TEM_Expo")' style='cursor:pointer;width: 250px;background: rgba(221,207,231,0.8);'><img src='static/Icons_Final/SEMTEMExpo.png'/></span></td>
<td><span id='blockGen119' onclick='getPage("MetaMagic")' style='cursor:pointer;width: 250px;background: rgba(222,237,222,0.8);'><img src='static/Icons_Final/MetaMagic.png'/></span></td>
</tr>
<tr>
<td><span id='blockGen120' onclick='getPage("SEM_Photography_Contest")' style='cursor:pointer;width: 250px;background: rgba(225,248,238,0.8);'><img src='static/Icons_Final/SEMphotography.png'/></span></td>
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
<span id='blockGen121'><h1 style='font-size: 68px; margin: 5px;'>B</h1></span><br />
<span id='blockGen122'><h1 style='font-size: 68px; margin: 5px;'>I</h1></span><br />
<span id='blockGen123'><h1 style='font-size: 68px; margin: 5px;'>Z</h1></span><br />
</span>
</td>
<td valign = 'top' >
<span id='pageBiz'>
<table>
<tr>
<td><span id='blockGen124' onclick='getPage("Product_Design_Challenge")' style='cursor:pointer;width: 250px;background: rgba(239,245,226,0.8);'><img src='static/Icons_Final/PRODUCT_DESIGN_123.png'/></span></td>
<td><span id='blockGen125' onclick='getPage("Campus_Social_Innovision_Challenge")' style='cursor:pointer;width: 250px;background: rgba(239,241,243,0.8);'><img src='static/Icons_Final/campussocialinnovation.png'/></span></td>
<td><span id='blockGen126' onclick='getPage("Case_Study_challenge")' style='cursor:pointer;width: 250px;background: rgba(226,244,242,0.8);'><img src='static/Icons_Final/casestudychallenge.png'/></span></td>
</tr>
<tr>
<td><span id='blockGen127' onclick='getPage("Data_Analysis_Challange")' style='cursor:pointer;width: 250px;background: rgba(235,231,211,0.8);'><img src='static/Icons_Final/data_analysischallenge.png'/></span></td>
</table>
</span>
</td>
</tr>
</table>
<table class='table'>
<tr>
<td>
</td>
<td valign = 'top' >
</td>
</tr>
</table>
<table class='table'>
<tr>
<td>
<span id='sideMechanical'>
<br /><br /><br />
<span id='blockGen128'><h1 style='font-size: 68px; margin: 5px;'>M</h1></span><br />
<span id='blockGen129'><h1 style='font-size: 68px; margin: 5px;'>E</h1></span><br />
<span id='blockGen130'><h1 style='font-size: 68px; margin: 5px;'>C</h1></span><br />
<span id='blockGen131'><h1 style='font-size: 68px; margin: 5px;'>H</h1></span><br />
<span id='blockGen132'><h1 style='font-size: 68px; margin: 5px;'>A</h1></span><br />
<span id='blockGen133'><h1 style='font-size: 68px; margin: 5px;'>N</h1></span><br />
<span id='blockGen134'><h1 style='font-size: 68px; margin: 5px;'>I</h1></span><br />
<span id='blockGen135'><h1 style='font-size: 68px; margin: 5px;'>C</h1></span><br />
<span id='blockGen136'><h1 style='font-size: 68px; margin: 5px;'>A</h1></span><br />
<span id='blockGen137'><h1 style='font-size: 68px; margin: 5px;'>L</h1></span><br />
</span>
</td>
<td valign = 'top' >
<span id='pageMechanical'>
<table>
<tr>
<td><span id='blockGen138' onclick='getPage("Velocity")' style='cursor:pointer;width: 250px;background: rgba(215,202,218,0.8);'><img src='static/Icons_Final/Velocity.png'/></span></td>
<td><span id='blockGen139' onclick='getPage("Proteus")' style='cursor:pointer;width: 250px;background: rgba(244,231,201,0.8);'><img src='static/Icons_Final/Proteus.png'/></span></td>
<td><span id='blockGen140' onclick='getPage("PerfectMachine")' style='cursor:pointer;width: 250px;background: rgba(234,203,205,0.8);'><img src='static/Icons_Final/PerfectMachine.png'/></span></td>
</tr>
<tr>
<td><span id='blockGen141' onclick='getPage("Robowars")' style='cursor:pointer;width: 250px;background: rgba(237,216,232,0.8);'><img src='static/Icons_Final/RoboWars.png'/></span></td>
<td><span id='blockGen142' onclick='getPage("wrightflight")' style='cursor:pointer;width: 250px;background: rgba(217,242,240,0.8);'><img src='static/Icons_Final/WrightFlight.png'/></span></td>
</table>
</span>
</td>
</tr>
</table>
<table class='table'>
<tr>
<td>
<span id='sideAstronomy'>
<br /><br /><br />
<span id='blockGen143'><h1 style='font-size: 68px; margin: 5px;'>A</h1></span><br />
<span id='blockGen144'><h1 style='font-size: 68px; margin: 5px;'>S</h1></span><br />
<span id='blockGen145'><h1 style='font-size: 68px; margin: 5px;'>T</h1></span><br />
<span id='blockGen146'><h1 style='font-size: 68px; margin: 5px;'>R</h1></span><br />
<span id='blockGen147'><h1 style='font-size: 68px; margin: 5px;'>O</h1></span><br />
<span id='blockGen148'><h1 style='font-size: 68px; margin: 5px;'>N</h1></span><br />
<span id='blockGen149'><h1 style='font-size: 68px; margin: 5px;'>O</h1></span><br />
<span id='blockGen150'><h1 style='font-size: 68px; margin: 5px;'>M</h1></span><br />
<span id='blockGen151'><h1 style='font-size: 68px; margin: 5px;'>Y</h1></span><br />
</span>
</td>
<td valign = 'top' >
<span id='pageAstronomy'>
<table>
<tr>
<td><span id='blockGen152' onclick='getPage("BeyondEarth")' style='cursor:pointer;width: 250px;background: rgba(212,204,248,0.8);'><img src='static/Icons_Final/Beyond_Earth.png'/></span></td>
<td><span id='blockGen153' onclick='getPage("StarWars")' style='cursor:pointer;width: 250px;background: rgba(235,230,239,0.8);'><img src='static/Icons_Final/starwars.png'/></span></td>
<td><button id='blockGen154' class='button1' onclick='getPage("Exhibits")' style='cursor:pointer;border-radius: 0%;width: 250px;height: 250px;margin-top: 0px;background: rgba(216,235,240,0.8);'><h1 style='text-align:center;font-family: acens;'>Exhibits</h1></td>
</tr>
<tr>
<td><span id='blockGen155' onclick='getPage("AstroTalk")' style='cursor:pointer;width: 250px;background: rgba(203,215,219,0.8);'><img src='static/Icons_Final/astro_talk.png'/></span></td>
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
<span id='blockGen156'><h1 style='font-size: 68px; margin: 5px;'>T</h1></span><br />
<span id='blockGen157'><h1 style='font-size: 68px; margin: 5px;'>E</h1></span><br />
<span id='blockGen158'><h1 style='font-size: 68px; margin: 5px;'>C</h1></span><br />
<span id='blockGen159'><h1 style='font-size: 68px; margin: 5px;'>H</h1></span><br />
<span id='blockGen160'><h1 style='font-size: 68px; margin: 5px;'>N</h1></span><br />
<span id='blockGen161'><h1 style='font-size: 68px; margin: 5px;'>I</h1></span><br />
<span id='blockGen162'><h1 style='font-size: 68px; margin: 5px;'>T</h1></span><br />
<span id='blockGen163'><h1 style='font-size: 68px; margin: 5px;'>E</h1></span><br />
<span id='blockGen164'><h1 style='font-size: 68px; margin: 5px;'>S</h1></span><br />
</span>
</td>
<td valign = 'top' >
<span id='pageTechnites'>
<table>
<tr>
<td><span id='blockGen165' onclick='getPage("Psychedelic_Room")' style='cursor:pointer;width: 250px;background: rgba(203,245,217,0.8);'><img src='static/Icons_Final/PsychRoom.png'/></span></td>
<td><button id='blockGen166' class='button1' onclick='getPage("Dance_Dance_Revolution")' style='cursor:pointer;border-radius: 0%;width: 250px;height: 250px;margin-top: 0px;background: rgba(227,247,247,0.8);'><h1 style='text-align:center;font-family: acens;'>Dance Dance Revolution</h1></td>
<td><button id='blockGen167' class='button1' onclick='getPage("Arcade_Room")' style='cursor:pointer;border-radius: 0%;width: 250px;height: 250px;margin-top: 0px;background: rgba(232,231,200,0.8);'><h1 style='text-align:center;font-family: acens;'>Arcade Room</h1></td>
</tr>
<tr>
<td><span id='blockGen168' onclick='getPage("Blitzkrieg")' style='cursor:pointer;width: 250px;background: rgba(240,209,246,0.8);'><img src='static/Icons_Final/blitzkrieg.png'/></span></td>
<td><span id='blockGen169' onclick='getPage("Megapixel")' style='cursor:pointer;width: 250px;background: rgba(203,220,213,0.8);'><img src='static/Icons_Final/megapixel.png'/></span></td>
</table>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideSimplicity'>
<span id='blockGen170' style='background: rgba(228,232,238,0.8);'><img src="static/Icons_Final/SIMPLICITY.png" width='250px'/></span><br />
<span id='blockGen171' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(227,242,208,0.8);' onclick='register_single_event(15)'><h3>Register</h3></span>
<span id='blockGen172' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(248,246,218,0.8);' onclick='getPage("Simplicity","Simplicity_Description")'><h3>Description</h3></span>
<span id='blockGen173' style='width:220px;padding: 15px;border-radius:20px;background: rgba(224,209,203,0.8);'><h3>Contact: Nanda Kumar(9945248355) <br/>nanda9045@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupSimplicity">
<span id = "tabsSimplicity_Description">
<span id="blockGen174" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen176" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
'Simplicity is the ultimate sophistication.'' -Leonardo da Vinci</br> Mathematics appeals to the highest senses of human beings, it is the simulation of our logical senses.</span><span id="blockGen175" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Mathematics has always fascinated people over the ages for its “simplicity”</span><span id="blockGen175" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >and ease to simulate real life situations, and find solutions for them, without any physical change. MATLAB is a very effective development tool for performing computationally intensive tasks quickly and easily. MATLAB builds the bridge between the human thought and implementation in mathematics.</span><span id="blockGen175" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >If you think you are second to none when it comes to coding in MATLAB then Simplicity is the right place to prove yourself.</span><span id="blockGen175" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Starting from simple math problems to image and audio processing,</span><span id="blockGen175" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >simplicity questions interests everyone from novice to expert.</span><span id="blockGen175" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Being one-of-a-kind online programming contest, Simplicity</span><span id="blockGen175" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >sees amateur to professional participants from around the world</span><span id="blockGen175" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >trying to crack problems in various fields of mathematics,</span><span id="blockGen175" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >science and engineering.The dates for test run and the main event will be announced shortly</span><span id="blockGen175" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>EVENT FORMAT</b></span><span id="blockGen175" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >This is an online event</span><span id="blockGen175" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The problems will not be specific to any particular domain of engineering, they will rather be based on fundamental mathematics and basic engineering</span><span id="blockGen175" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The event will be of 8 hour duration.</span><span id="blockGen175" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The solutions to the each question has to be uploaded for evaluationPoints will be awarded after evaluation of submitted solutions.</span><span id="blockGen175" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>EVENT RULES</b></span><span id="blockGen175" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Codes have to be submitted in the form of MATLAB .m files with specific format.</span><span id="blockGen175" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The format will be specified along with each question.</span><span id="blockGen175" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Participants may upload answer to problems any number of times.</span><span id="blockGen175" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Uploading codes intended to harm the server, will earn disqualification.</span><span id="blockGen175" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The submitted source code will be checked if it is copied. Any copying of code would lead to immediate disqualification of both the codes in doubt.</span><span id="blockGen175" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>SCORING CRITERIA</b></span><span id="blockGen175" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The evaluation of the codes is done automatically by a MATLAB server.</span><span id="blockGen175" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Points are allotted based on the performance of the solution to different test cases.</span><span id="blockGen175" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The participants may submit the codes as many times before the final deadline. The codes last submitted will be judged.</span><span id="blockGen175" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >In case of a tie, the total login time will be considered.</span><span id="blockGen175" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The organizers decision will be final and binding.</span><span id="blockGen175" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabs15_register">
<span id="blockGen177" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen178' style='background: rgba(202,250,222,0.8);'><img src="static/Icons_Final/Waltz.png" width='250px'/></span><br />
<span id='blockGen179' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(202,201,218,0.8);' onclick='register_single_event(16)'><h3>Register</h3></span>
<span id='blockGen180' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(247,246,249,0.8);' onclick='getPage("Waltz","Waltz_Arena")'><h3>Arena</h3></span>
<span id='blockGen181' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(245,250,208,0.8);' onclick='getPage("Waltz","Waltz_Goal")'><h3>Goal</h3></span>
<span id='blockGen182' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(213,247,223,0.8);' onclick='getPage("Waltz","Waltz_Specifications")'><h3>Specifications</h3></span>
<span id='blockGen183' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(235,217,248,0.8);' onclick='getPage("Waltz","Waltz_Evaluation")'><h3>Evaluation</h3></span>
<span id='blockGen184' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(201,225,223,0.8);' onclick='getPage("Waltz","Waltz_Bot Specification and Rules")'><h3>Bot Specification and Rules</h3></span>
<span id='blockGen185' style='width:220px;padding: 15px;border-radius:20px;background: rgba(232,220,225,0.8);'><h3>Contact: Nanda Kumar(9945248355) <br/>nanda9045@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupWaltz">
<span id = "tabsWaltz_Arena">
<span id="blockGen186" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen188" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
1. The arena comprises of 15cm high walls in the form of a small maze. The wall will be inwhite color. </span><span id="blockGen187" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >2. The track may contain the following elements </span><span id="blockGen187" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >a) Straight Stretches </span><span id="blockGen187" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >b) 90 degree turns.</span><span id="blockGen187" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >c) Check-lines: White strips perpendicular to the direction of navigation indicating wallswitch. </span><span id="blockGen187" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >3. The base of the arena is painted in black except for the check-lines. </span><span id="blockGen187" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >4. A shortcutroute (the third white strip from entrance) is also provided for teams which can </span><span id="blockGen187" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >use it as a shortcut to finish the maze faster. </span><span id="blockGen187" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >5. The check-lines, of thickness 3 cmare provided at place where there are two walls on either sides of the check-line.  </span><span id="blockGen187" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >6. <b>Dimensions:</b> The arena will be of dimensions no more than 290cm X 250 cm (including allwall thickness) with the space between any two walls being 40cm exactly(bot navigation width)</span><span id="blockGen187" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The top view of the wall maze is shown below</span><span id="blockGen187" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><img src='./data/waltz.jpg' /><b>Index:</b></span><span id="blockGen187" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Green arrow- Entrance</span><span id="blockGen187" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Orange arrow- Exit for shortcut path</span><span id="blockGen187" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Blue Arrow- Exit for Original path
</span>
</span>
<span id = "tabsWaltz_Goal">
<span id="blockGen189" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen191" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Teams must build a wall following bot that navigates the maze in minimum possible timewhile switching walls at the check-lines indicated in the arena diagram
</span>
</span>
<span id = "tabsWaltz_Specifications">
<span id="blockGen192" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen194" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
The check-lines (except the third check-line) are placed such that the bot, if switched successfully, </span><span id="blockGen193" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >has to negotiate only ‘L’ shaped 90 degree turns. </span><span id="blockGen193" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >There are two paths that the participant can choose to solve the maze </span><span id="blockGen193" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >1. Original path </span><span id="blockGen193" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >2. Shortcut path </span><span id="blockGen193" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The original path involves only wall switching at check-lines (except for the 3rdcheck-line which needs to be ignored) and a single type of ‘L’ shaped corners. </span><span id="blockGen193" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The shortcut path is similar to the original path, but involves negotiation of a left-turn at the 3rd check-line to follow the wall including the familiar ‘L’ shaped 90 degree turn.
</span>
</span>
<span id = "tabsWaltz_Evaluation">
<span id="blockGen195" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen197" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Each team is given a maximum of 5 min to complete the maze and the score pertaining to each team will be evaluated as</span><span id="blockGen196" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Score = 300-T + X</span><span id="blockGen196" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Where T is the time taken for the team to complete the maze in seconds </span><span id="blockGen196" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >X= 5 x No. of check-lines navigated successfully (except the 3rd check-line).</span><span id="blockGen196" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Teams that navigate the 3rd check-line successfully and use the shortcut will be awarded an extra 20 points
</span>
</span>
<span id = "tabsWaltz_Bot Specification and Rules">
<span id="blockGen198" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen200" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
  The bot should fit in a box of dimensions 18 x 18 x 12 (cm).  The bot must switch at the check-lines (except the 3rd check-line) where the participating team must take the appropriate decision to use the shortcut or the original path.  If the bot fails to follow the correct wall or strays into an ambiguous path at any point of time during the run, it will be placed just after the previous check-line it has successfully negotiated. However, for bots intending to use the shortcut path, the bot will be defaulted to location just after the 2ndcheck-line  It is advisable to a use a lower RPM motors to negotiate turns easily  Ready-made sensor modules are ALLOWED.However, use of readymade chassis or steppers/SERVO motors are not ALLOWED  Use of any mechanism which defiles or threatens to defile the arena will not be tolerated and the pertaining teamwill be disqualified.  The judges have the final say regarding the disqualification or evaluation of the participating team.  
</span>
</span>
<span id = "tabs16_register">
<span id="blockGen201" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen202' style='background: rgba(232,226,234,0.8);'><img src="static/Icons_Final/trade_off.png" width='250px'/></span><br />
<span id='blockGen203' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(203,233,227,0.8);' onclick='register_single_event(17)'><h3>Register</h3></span>
<span id='blockGen204' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(242,246,242,0.8);' onclick='getPage("Trade_OFF","Trade_OFF_Description")'><h3>Description</h3></span>
<span id='blockGen205' style='width:220px;padding: 15px;border-radius:20px;background: rgba(211,245,219,0.8);'><h3>Contact: Nanda Kumar(9945248355) <br/>nanda9045@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupTrade_OFF">
<span id = "tabsTrade_OFF_Description">
<span id="blockGen206" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen208" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
<b>Trade-off </b>:n.\ˈtrād-ˌȯf\ : A trade-off (or tradeoff) is a situation that involves losing</span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >one quality or aspect of something in return for gaining another quality or aspect.</span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >There is no true test of an artist than to capture the world by his elegance.</span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >With breadboard as canvas and hues of transistors and gates,</span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >this event evokes the artist in the Engineer to sketch his masterpiece to glory.</span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >This event challenges you to solve basic analog and digital problems</span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >at the lowest level of abstraction in the most intuitive manner, where not just designing circuits</span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >but also making judicious use of the resources is taken into account.</span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >So get ready to scratch your gray cells, and start designing!</span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>EVENT FORMAT</b></span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Round 1</span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Written qualification round comprising of objective questions conducted during Engineer.</span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >A limited number of teams, depending on their performance in the qualification round, will proceed into round 2.</span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The questions challenge one's understanding of basic analog and digital electronic circuits.</span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Round 2 </b></span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Each team is expected to design circuits for on the spot problem statements(a set of tasks may be Given).</span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Each team is provided with equal amount of virtual money.</span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Completion of a task would fetch you virtual money.</span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >A task is said to be complete only when a design is implemented on hardware and the expected output is observed. No credit will be given for design alone. The amount to be added will be decided based on the quality of the result obtained and the discretion of the judges.</span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Half the cost of the component will be credited (as virtual money) on returning unused component.</span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Technical help, if required can also be obtained at the cost of virtual money.</span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Teams will NOT be allowed to carry their own personal components to the event. All the components required for the event will be provided by the organizers.</span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>GENERAL INFORMATION</b></span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Team size: Three(maximum) </span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Resources</span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Datasheets for all the components required will be provided.</span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > <b>Useful Knowledge</b></span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Basics of Analog Electronic Circuits: Transistors, OPAMPs, 555 timers, etc.</span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Basics of Digital Electronic Circuits: TTL gates, adders, flip-flops etc.</span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Analog Communication: Simple modulator-demodulator circuits</span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>JUDGING CRITERIA</b></span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The output of the circuit will be evaluated.</span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >In case of a tie, time required to build the circuit will be considered.</span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The team with the highest amount of virtual money in their account at the end of the event will be declared as the winner.</span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Judges' decision will be final and binding in all cases.</span><span id="blockGen207" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabs17_register">
<span id="blockGen209" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen210' style='background: rgba(227,250,207,0.8);'><img src="static/Icons_Final/Symphony.png" width='250px'/></span><br />
<span id='blockGen211' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(230,245,202,0.8);' onclick='register_single_event(18)'><h3>Register</h3></span>
<span id='blockGen212' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(206,225,207,0.8);' onclick='getPage("Symphony","Symphony_Description")'><h3>Description</h3></span>
<span id='blockGen213' style='width:220px;padding: 15px;border-radius:20px;background: rgba(216,221,240,0.8);'><h3>Contact: Nanda Kumar(9945248355) <br/>nanda9045@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupSymphony">
<span id = "tabsSymphony_Description">
<span id="blockGen214" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen216" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Music is the soul of many art forms. Fountains are a symbol of beauty and elegance.</span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Blending these two to form a spectacular show has been made possible using audio processing</span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >techniques and basic electronic concepts.</span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > At Engineer, Symphony gives the participants an opportunity to dabble into the sights and sounds of electronics and bring the subject to life.</span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Symphony requires participants to control a musical fountain’s water flow and lights,so that the fountain dances to the tunes of the music.</span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > A huge draw every Engineer, Symphony generates huge participation and promises a great crowd.</span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>SPECIFICATIONS:</b></span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><a href='./data/symphony.pdf'>Arena Specification.</a></span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>EVENT FORMAT</b></span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Design an electronic controller circuit for a musical fountain.</span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The water jets and lights on the fountain should be aesthetically harmonized with the music that is played.</span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The fountain fitted with lights and water jet nozzles shall be provided.</span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The water jets are controlled by solenoid valves and the lights are controlled by relay circuits.</span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The teams have to control these lights and nozzles by digital signals, TTL compatible.</span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The details of the fountain and the I/O specification of the circuit has been uploaded on the site.</span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Three tunes will be played for each of the teams. One of them will be the same for all the teams. This tune will be available shortly.</span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The second tune will be chosen by the participant team. Teams are required to submit the song in advance before the start of the event on a flash drive.</span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The third tune will be chosen at random from the organizers’ database. Each tune shall be less than 2 minutes long.</span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >All teams coming will have to provide a 2 page abstract during the event to receive participation certificates.</span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The abstract should contain the description of algorithm and schematics of circuits used.</span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>SYMPHONY TUNE:</b></span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >To be downloaded(Will be released shortly)</span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>RULES</b></span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Teams can comprise of a maximum of three members.</span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The music input is given in the form of a stereo signal to the circuit through a standard male earphone connector as line-in.</span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The music will also be played simultaneously on the speaker.</span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >A qualification round will be conducted prior to the final competition based on which teams will be filtered.</span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The teams will be allowed to tune their circuits during this round.</span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>JUDGING CRITERIA</b></span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Synchronization with the tunes – The operation of the fountain should be in harmony with music component(s).</span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The team shall make this clear while explaining their algorithm.</span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >(The music components can be any apparent feature such as frequency range, amplitude, a combination of frequency and amplitude, etc.) Better synchronization carries more points.</span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Aesthetic appeal – Along with synchronization, the combination and sequence of water jets and</span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >lights should be chosen so as to create the best possible aesthetic appeal.</span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Design of the circuit – Teams shall explain their circuit to the judges. Good quality designs shall carry more marks.</span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Cost of the circuit – Cost of the circuit should be kept at minimum. Higher the cost of the circuit, lesser the points.</span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The abstract will be used for judging in case of a tie.</span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >At any point of time during the event, the judges can change the rules to maintain fairness and the spirit of healthy competition.</span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Decisions made by the judges will be final and binding.</span><span id="blockGen215" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabs18_register">
<span id="blockGen217" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen218' style='background: rgba(242,247,208,0.8);'><img src="static/Icons_Final/trailblazer.png" width='250px'/></span><br />
<span id='blockGen219' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(238,243,222,0.8);' onclick='register_single_event(19)'><h3>Register</h3></span>
<span id='blockGen220' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(208,249,241,0.8);' onclick='getPage("TrailBlazer","TrailBlazer_Arena")'><h3>Arena</h3></span>
<span id='blockGen221' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(210,235,204,0.8);' onclick='getPage("TrailBlazer","TrailBlazer_Description")'><h3>Description</h3></span>
<span id='blockGen222' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(236,247,246,0.8);' onclick='getPage("TrailBlazer","TrailBlazer_ContestProcedure")'><h3>ContestProcedure</h3></span>
<span id='blockGen223' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(210,243,238,0.8);' onclick='getPage("TrailBlazer","TrailBlazer_samplearena")'><h3>samplearena</h3></span>
<span id='blockGen224' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(244,233,232,0.8);' onclick='getPage("TrailBlazer","TrailBlazer_OtherDetails")'><h3>OtherDetails</h3></span>
<span id='blockGen225' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(231,234,217,0.8);' onclick='getPage("TrailBlazer","TrailBlazer_botspecs")'><h3>botspecs</h3></span>
<span id='blockGen226' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(220,226,220,0.8);' onclick='getPage("TrailBlazer","TrailBlazer_goal")'><h3>goal</h3></span>
<span id='blockGen227' style='width:220px;padding: 15px;border-radius:20px;background: rgba(241,202,240,0.8);'><h3>Contact: Nanda Kumar(9945248355) <br/> nanda9045@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupTrailBlazer">
<span id = "tabsTrailBlazer_Arena">
<span id="blockGen228" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen230" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
• The arena comprises of black path on a white background.<br />• All turnings are 90 degree. <br />• A black circle of radius 7.5 cm, indicated the end of the path. <br />• Black line has a uniform thickness of 3cm.<br />• Dimensions: The arena will be of dimensions no more than 210cm X 190 cm
</span>
</span>
<span id = "tabsTrailBlazer_Description">
<span id="blockGen231" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen233" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
<b>Description:</b></span><span id="blockGen232" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >noun /ˈtrālˌblāzər/</span><span id="blockGen232" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >1. A person who makes a new track through wild country.</span><span id="blockGen232" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >2. A pioneer; an innovator</span><span id="blockGen232" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >A simple event based on line follower robotics.</span><span id="blockGen232" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >You are required to build a line follower robot. </span><span id="blockGen232" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Participate in this innovative event and hone your robotic skills.</span><span id="blockGen232" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabsTrailBlazer_ContestProcedure">
<span id="blockGen234" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen236" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
  The arena layout will not be shown until all the robots are given to the committee.  However a small sample arena will be available before the contest for calibration and testing.  The test arena will be made of same materials as the full-size and will be placed in similar lighting conditions.  After the arena is revealed, no modifications of any type may be made to the robots, including software or hardware changes.  When it is the turn for the team, a total of 10 min will be given.  In the given 10 min the person may calibrate the robot within a given time of 1 min.  The team will have a maximum of three attempts within given 10 mins.  In case no team is able to complete the path, the judges will decide upon the winner.  Judges' decision will be final and binding in all cases. 
</span>
</span>
<span id = "tabsTrailBlazer_samplearena">
<span id="blockGen237" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen239" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
<img src="./data/trail.png" />
</span>
</span>
<span id = "tabsTrailBlazer_OtherDetails">
<span id="blockGen240" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen242" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
  A maximum of 4 members may be present in one team.  Total time allotted is 10 minutes.  Each team will be given 10 minutes in which they can start the</span><span id="blockGen241" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > attempt a maximum of 3 times of which the best time of completion will </span><span id="blockGen241" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >be recorded for the results.  The robot may not deviate completely from the path at any time.  The robot is expected to stop automatically at the end of the path which is going to be a circle of same colour as the line preceding it.  
</span>
</span>
<span id = "tabsTrailBlazer_botspecs">
<span id="blockGen243" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen245" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Bot should not use readymade sensors. Teams are expected to build their own sensors<br />Bot dimensions should be well within 20cm*18cm<br />Bot wheels should not hamper the arena <br />Bot should have a mechanism to show the traced path.
</span>
</span>
<span id = "tabsTrailBlazer_goal">
<span id="blockGen246" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen248" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Teams must build a line following bot that navigates the path in minimum possible time while remembering the turns taken.</span><span id="blockGen247" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > After tracing the entire path, we expect bot to display the order of turns taken (in case of the path in the shown sample arena: L-R-R-L-L-R-R-R-L-L-L-R-R-R-L-L-R-R-R-L-L-R-R where L stands for left turn and R stands for right turn).</span><span id="blockGen247" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Bot could use any convenient mechanism to display the final output.
</span>
</span>
<span id = "tabs19_register">
<span id="blockGen249" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen250' style='background: rgba(216,200,232,0.8);'><img src="static/Icons_Final/AUTOMATA_NEW.png" width='250px'/></span><br />
<span id='blockGen251' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(239,243,232,0.8);' onclick='register_single_event(20)'><h3>Register</h3></span>
<span id='blockGen252' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(224,204,235,0.8);' onclick='getPage("Automata","Automata_download")'><h3>download</h3></span>
<span id='blockGen253' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(215,219,250,0.8);' onclick='getPage("Automata","Automata_Description")'><h3>Description</h3></span>
<span id='blockGen254' style='width:220px;padding: 15px;border-radius:20px;background: rgba(247,227,236,0.8);'><h3>Contact: Nanda Kumar(9945248355) <br/> nanda9045@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupAutomata">
<span id = "tabsAutomata_download">
<span id="blockGen255" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen257" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
<a href="data/Automata.docx">Download</a>
</span>
</span>
<span id = "tabsAutomata_Description">
<span id="blockGen258" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen260" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Robotics has advanced in ways that we had never imagined.</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >This attitude of innovation is what inspires ‘AUTOMATA’, the flagship event of ENGINEER.</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > AUTOMATA is back, to taunt you with a challenging problem statement. Get ready to be surprised this year with a twist that you would never have thought of.</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > The ultimate image processing event. Build an autonomous robot and guide it, with only the help of images</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >acquired from an overhead camera, from the start position on an arena to the end position following a specific path.</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The ‘Specified Path’ is your problem, code is your solution.</br>Number of members in a team: max 4</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Problem Statement</b></span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Arena Details</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > The arena will be a non-reflective surface on top of a wooden base.</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > An overhead camera is positioned on top of the arena so that it is completely visible. The position of the camera with respect to the arena will be fixed.</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The arena consists of a white background with square nodes at certain points. One of the nodes is the finish node, and will be marked in RED, while the rest of the nodes will be BLACK.</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The nodes are inter-connected by BLACK “paths”(there may not be a direct connection between every given pair of nodes).</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Picture to be uploaded soon</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Objectives</b> The robot has to traverse through the arena, to reach the RED node, from a specified node, using the shortest path available.</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Reaching the final node, without traversing the shortest path, may be considered for evaluation only no robot ever moves ahead on the shortest available path.</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > The only input to you will be the stream from the overhead camera feed.</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The robot can move ahead only on the paths connecting the nodes.</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >ONLY DC MOTORS are allowed. Steppers and wheel encoders will lead to disqualification of the team.</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >There will be a maximum of 15 minutes for each team in which they can have as many trials as required. Teams will also be given 10 minutes for calibration.</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >All teams must submit their bots, codes, or laptops at the start of the competition.</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Scoring Criteria</b>The best time is taken in consideration.</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Any deviation from path will lead to restart of trial.</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > In case of no one completing the traversal of arena, the team who has gone the farthest will win.</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > The scoring is time-based and the team which finishes first wins.</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Illegal robot movements will result in a restart of the trial (Example: Deviation from the paths).</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > The trial starts when the robot starts moving from the initial position as mentioned in the figure.</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > The trial ends when the robot reaches the destination or if the stipulated time ends.</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The team will be penalized every time the robot deviates from the path.</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Robot Details</b></span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The robot should be completely autonomous.</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > The robot should fit into a box of dimensions 20x18 (length x width).</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The robot is required to have an onboard power source not based on combustion.</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > The maximum voltage between any two points on the robot should not exceed 12 volts.</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > The robots are NOT allowed to have stepper motors, sensors for a wheel encoder and any other sensors.</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > The robots can communicate with a computer outside the arena either through wired or wireless connection.</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > In case of a wired connection, the wire must be kept slack all the time and must emerge from the top of the robot.</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Use of on-board camera is not allowed.</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > The following software for image processing are allowed:</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >  Open CV  MATLAB   Scilab / GNU Octave  </span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > If any other software is used for image processing, please inform us.</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Softwares with ready-made image processing codes/GUIs is not allowed.</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Sharp objects on the robot which may damage the arena will lead to disqualification of the team.</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Camera Details</b></span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >An overhead USB camera is placed such that the entire arena is just visible. </span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The camera provided by us will support image acquisition in these modes: 640x480, 1600x1200 and in RGB/YUV formats.</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > The teams will have to use the camera provided by us. </span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>General Information</b></span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >A maximum of 4 members per team is allowed. We do not provide computers to the participating teams. It is expected that you arrange for your own.</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The robot will initially be placed in a node of our choice. The starting node may be different for different teams.</span><span id="blockGen259" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabs20_register">
<span id="blockGen261" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen262' style='background: rgba(230,226,221,0.8);'><img src="static/Icons_Final/foxxhunt.png" width='250px'/></span><br />
<span id='blockGen263' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(205,214,224,0.8);' onclick='register_single_event(21)'><h3>Register</h3></span>
<span id='blockGen264' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(203,224,223,0.8);' onclick='getPage("FoxHunt","FoxHunt_Description")'><h3>Description</h3></span>
<span id='blockGen265' style='width:220px;padding: 15px;border-radius:20px;background: rgba(213,223,243,0.8);'><h3>Contact: Nanda Kumar(9945248355) <br/>nanda9045@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupFoxHunt">
<span id = "tabsFoxHunt_Description">
<span id="blockGen266" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen268" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
“In the new era, thought itself will be transmitted by radio.” --Guglielmo Marconi</span><span id="blockGen267" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Foxhunt, is a fun filled package on the lines of a traditional English activity involving tracking and chasing a fox by trained hounds. The difference at Engineer is that,the FOX is a Radio Transmitter and the HUNTERS are budding communication engineers.</span><span id="blockGen267" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Participants are required to track down a transmitter (FOX) that could be situated anywhere in the campus, using a tunable radio receiver and an antenna built by them, making the event full of fun and excitement.</span><span id="blockGen267" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>EVENT FORMAT</b></span><span id="blockGen267" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The event will have two phases </span><span id="blockGen267" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >-FM reception stage(Phase 1)</span><span id="blockGen267" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > -HAM reception stage(Phase 2)</span><span id="blockGen267" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Phase 1</span><span id="blockGen267" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >All the participating teams are required to build an FM receiver circuit (with an antenna, if required) for Phase 1.</span><span id="blockGen267" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The participating teams which qualify Phase 1 are then allowed to participate in Phase 2.</span><span id="blockGen267" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Judging criteria:</b></span><span id="blockGen267" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Clarity of reception of FM.</span><span id="blockGen267" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Cost.</span><span id="blockGen267" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Points will be deducted for using ready-made printed circuit boards.</span><span id="blockGen267" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Any extra innovations on the circuit (example- a mechanism to switch between FM and HAM reception) will be rewarded with extra points.</span><span id="blockGen267" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Any antennas to aid FM reception are encouraged, however they won’t independently carry a point weight age and can aid in clarity of reception.</span><span id="blockGen267" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>EVENT RULES</b></span><span id="blockGen267" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Each team can consist of a maximum of 4 members.</span><span id="blockGen267" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The members of each team can be from different colleges.</span><span id="blockGen267" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Participating teams those qualify Phase 1 will only be allowed to participate in Phase 2.</span><span id="blockGen267" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Only one antenna will be provided to the participating teams, who have qualified for phase 2 but are not able to design on their own.</span><span id="blockGen267" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The decision of the judges will be the absolute authority.</span><span id="blockGen267" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>DISQUALIFICATIONS</b></span><span id="blockGen267" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Things that amount to disqualification</span><span id="blockGen267" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Usage of a commercial antenna.</span><span id="blockGen267" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Usage of mobile phones or other means of communication between teams during the final event.</span><span id="blockGen267" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Usage of FM transmitters in the range 144-146 MHz</span><span id="blockGen267" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Downloads:</span><span id="blockGen267" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabs21_register">
<span id="blockGen269" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen270' style='background: rgba(200,245,218,0.8);'><img src="static/Icons_Final/fifa.png" width='250px'/></span><br />
<span id='blockGen271' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(208,233,215,0.8);' onclick='register_single_event(22)'><h3>Register</h3></span>
<span id='blockGen272' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(249,217,211,0.8);' onclick='getPage("Fifa","Fifa_specifications")'><h3>specifications</h3></span>
<span id='blockGen273' style='width:220px;padding: 15px;border-radius:20px;background: rgba(207,207,203,0.8);'><h3>Contact: Satish Chandra <br/> 9740523343</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupFifa">
<span id = "tabsFifa_specifications">
<span id="blockGen274" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen276" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
 Registration fee is Rs. 60/- per participant. Registration will be closed after prelims. A player may register for FIFA and NFS MW together for Rs.100/-</span><span id="blockGen275" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ></span><span id="blockGen275" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >&middot; All games will be Classic 1 vs. 1 in multiplayer mode.</span><span id="blockGen275" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ></span><span id="blockGen275" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >&middot; There will be no practicing allowed. Participants are only allowed to change the necessary controls and check them.</span><span id="blockGen275" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ></span><span id="blockGen275" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >&middot; The total number of rounds will be decided by the participation.</span><span id="blockGen275" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ></span><span id="blockGen275" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >&middot; All rounds will follow usual knockout procedure.</span><span id="blockGen275" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ></span><span id="blockGen275" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >&middot; In case of a draw, the match is continued with the classic rule.</span><span id="blockGen275" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ></span><span id="blockGen275" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >&middot; In case of un-intentional disconnection, the admin will decide on how to proceed. If the game is within half-time and no goals have been scored, the game will be restarted with same teams for a full-time game. If not, the game will be played for the remaining time based on at what time it disconnected with scores being carried over.</span><span id="blockGen275" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ></span><span id="blockGen275" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >&middot; If at any time, a player intentionally disconnects/exits the game, he/she will be disqualified. In case of alt-tabbing, the admin will decide whether it was intentional or a mistake and what action must be taken with disqualification being the maximum penalty.</span><span id="blockGen275" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ></span><span id="blockGen275" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >&middot; Teams can be either clubs or countries according to the user's will.</span><span id="blockGen275" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ></span><span id="blockGen275" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >&middot; The first and second rounds will be classic 4 minute half time matches. The rest will all be 6 minute ones. Final match will be made a best of three.</span><span id="blockGen275" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ></span><span id="blockGen275" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >&middot; The administrator's decision will be final.</span><span id="blockGen275" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >/
</span>
</span>
<span id = "tabs22_register">
<span id="blockGen277" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen278' style='background: rgba(230,222,244,0.8);'><img src="static/Icons_Final/aoe3.png" width='250px'/></span><br />
<span id='blockGen279' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(241,250,214,0.8);' onclick='register_single_event(23)'><h3>Register</h3></span>
<span id='blockGen280' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(224,211,236,0.8);' onclick='getPage("Aoe","Aoe_specifications")'><h3>specifications</h3></span>
<span id='blockGen281' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(210,240,219,0.8);' onclick='getPage("Aoe","Aoe_generalrules")'><h3>generalrules</h3></span>
<span id='blockGen282' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(207,210,235,0.8);' onclick='getPage("Aoe","Aoe_gamesetting")'><h3>gamesetting</h3></span>
<span id='blockGen283' style='width:220px;padding: 15px;border-radius:20px;background: rgba(223,215,222,0.8);'><h3>Contact: Satish Chandra <br/> 9740523343</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupAoe">
<span id = "tabsAoe_specifications">
<span id="blockGen284" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen286" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Registration Fees: Rs. 200/- per team for 2 vs 2</span><span id="blockGen285" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Competition format: 2 vs 2</span><span id="blockGen285" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Match format: Single elimination i.e. knockout
</span>
</span>
<span id = "tabsAoe_generalrules">
<span id="blockGen287" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen289" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
All teams must report at the venue at the time informed.Teams not reporting within 10mins of the allotted time, will lead to disqualification. The time will be informed at least 45 minutes in advance.</span><span id="blockGen288" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The administrator's decision will be final in case of any dispute.</span><span id="blockGen288" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Team members are not allowed to change seats once the aoe map has started to load.</span><span id="blockGen288" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Bug Exploitation: Exploitation of any known or newly discovered bug during the matchwill result in immediate disqualification of the team. Excuses will not be entertained. Notknowing the bug is not an excuse, competitors are expected to know the current bugs. </span><span id="blockGen288" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Definition of Bugsa. Anything abnormal which will give a competitor / team an unfair advantageb. Anything which will cause interruption / fatal error to the game</span><span id="blockGen288" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Any competitor found to have intentionally disconnected from the game will give thatcompetitor's team a loss for that match.</span><span id="blockGen288" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >If any competitors get disconnected within 15 minutes after the game start, the gamewill be restarted with same civs on same players.</span><span id="blockGen288" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Pauses are allowed. Before pausing and un-pausing , you need to inform your enemyabout this, so that you don't get any advantage. Pauses must be for genuine reasonsonly.</span><span id="blockGen288" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Any use of hacks like maphack or any software or scripts which gives any unfairadvantage is banned and will result in instant disqualification from the tournament.</span><span id="blockGen288" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Players are required to conduct themselves in a professional manner, showingsportsmanship and respect for everyone involved. Any flaming or insulting will result inteam-disqualification.</span><span id="blockGen288" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > 
</span>
</span>
<span id = "tabsAoe_gamesetting">
<span id="blockGen290" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen292" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
 Game Version: Age 2x1 (User patch 1.2)</span><span id="blockGen291" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >RULES 2 vs 2</span><span id="blockGen291" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >M A S T E R S   O F   A R A B I A</span><span id="blockGen291" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Size : 4 player map</span><span id="blockGen291" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Difficulty : Standard</span><span id="blockGen291" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Resources : Standard </span><span id="blockGen291" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Population : 200 </span><span id="blockGen291" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Game Speed : Normal</span><span id="blockGen291" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Reveal Map : Standard</span><span id="blockGen291" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Starting Age : Standard</span><span id="blockGen291" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Victory Condition : Conquest</span><span id="blockGen291" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Team Together : [X] Yes</span><span id="blockGen291" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >All techs : [ ] No</span><span id="blockGen291" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Allow Cheats : [ ] No</span><span id="blockGen291" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Lock Teams : [X] Yes</span><span id="blockGen291" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Lock Speed : [X] Yes</span><span id="blockGen291" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Record Game : [X] Yes</span><span id="blockGen291" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >3. Civilization Pick : Random/Mutual Understanding/Mirrored Civs</span><span id="blockGen291" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabs23_register">
<span id="blockGen293" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen294' style='background: rgba(206,214,232,0.8);'><img src="static/Icons_Final/nfs.png" width='250px'/></span><br />
<span id='blockGen295' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(232,216,208,0.8);' onclick='register_single_event(24)'><h3>Register</h3></span>
<span id='blockGen296' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(217,224,233,0.8);' onclick='getPage("NFS","NFS_specifications")'><h3>specifications</h3></span>
<span id='blockGen297' style='width:220px;padding: 15px;border-radius:20px;background: rgba(200,214,217,0.8);'><h3>Contact: Satish Chandra <br/> 9740523343</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupNFS">
<span id = "tabsNFS_specifications">
<span id="blockGen298" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen300" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
 Rs. 60/- per participant.</span><span id="blockGen299" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Registration will be closed after prelims.</span><span id="blockGen299" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Players can choose their cars, customize them and modify them.</span><span id="blockGen299" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >At the end of each match, players must maintain the final screens and receive confirmation from a referee.</span><span id="blockGen299" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Any participant failing to complete the race will be disqualified.</span><span id="blockGen299" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Game Type: Sprint</span><span id="blockGen299" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Courses: Courses will be given at random and will be given on the spot. ( Players will be informed before the tournament of any such modifications)</span><span id="blockGen299" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Participants are not allowed to use their own profiles.</span><span id="blockGen299" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Players will be given 2 minutes to setup the car and its performance before the game.</span><span id="blockGen299" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Race Mode Options:</span><span id="blockGen299" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >a. Track Direction : Forward/Backward</span><span id="blockGen299" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >b. N20 : On</span><span id="blockGen299" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >c. Collision Detection : Off</span><span id="blockGen299" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >d. Performance Matching : On</span><span id="blockGen299" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Use of any cheat program is not allowed. Use of Carrera GT and BMW GTR is allowed only in the finals. Use of any settings exceeding standard and permitted settings is not allowed.</span><span id="blockGen299" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Any disconnection of the connection between matches players due to System, Network, PC, and/or Power problems/issues results into a restart of match. If any player does not agree to a match restart, that player will lose by default.</span><span id="blockGen299" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Intentional disconnection will not be tolerated. Upon judgment by the referee, any offending player will be charged with a loss by forfeit.</span><span id="blockGen299" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabs24_register">
<span id="blockGen301" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen302' style='background: rgba(227,243,212,0.8);'><img src="static/Icons_Final/dOTA.png" width='250px'/></span><br />
<span id='blockGen303' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(219,221,244,0.8);' onclick='register_single_event(25)'><h3>Register</h3></span>
<span id='blockGen304' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(217,208,214,0.8);' onclick='getPage("dota","dota_specifications")'><h3>specifications</h3></span>
<span id='blockGen305' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(229,226,229,0.8);' onclick='getPage("dota","dota_gamesetting")'><h3>gamesetting</h3></span>
<span id='blockGen306' style='width:220px;padding: 15px;border-radius:20px;background: rgba(235,211,204,0.8);'><h3>Contact: Satish Chandra <br/> 9740523343</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupdota">
<span id = "tabsdota_specifications">
<span id="blockGen307" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen309" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Competition format: 5v5 TeamsMatch format: Single elimination i.e,Knockout</span><span id="blockGen308" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Match winner: The team who destroys the opponent's Frozen Throne / World Tree first, or the team who's opponent surrenders by typing gg/ff/forfeit into the All-Chat.</span><span id="blockGen308" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Finals will be 'Best of 3 games' and all other rounds will be single game only.</span><span id="blockGen308" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabsdota_gamesetting">
<span id="blockGen310" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen312" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Version : Tournament </span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Password :</b> Yes </span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Cheats :</b> No </span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Spectators :</b> Yes (Only the admins will spectate the matches) </span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Radiant Penalty :</b> None</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Dire Penalty :</b> None</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Rules</b></span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >All players are required to have valid steam IDs.</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Teams must report to the venue at the time informed. If they cannot report within 10mins of allotted time, they will be disqualified. The time will be informed in the contact provided by the team at least 45 minutes in advance.</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The administrator's decision will be final in case of any dispute.</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Game will be hosted by Engineer committee using referees.</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Team members are not allowed to change seats once the DOTA map has started to load.</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >At the end of the match, competitors must maintain the final screenshots and receive the confirmation from the admin.</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Backdooring is allowed. However instances of teleport abuse are not allowed. You cannot use any form of teleport (furion skill) to enter an enemy base unless your creeps are already present in the base. Example: Furion teleporting into enemy's base without Furion's creeps present.</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Sharing of items is allowed as long as the game permits.</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Competitors may pick up items dropped by their opponents.</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Control Sharing is allowed.</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Abuse &amp; Exploitation:</b></span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Trees Trapping:</b> intentionally trapping enemies in trees is not allowed (except Furion's skill).</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Pause Abuse:</b> From the point after hero selection process is completed, pausing without any valid reason is not allowed.</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Creep Blocking:</b> Creep blocking (such as using creeps to block the entrance to the base or using fissure, disallowing creeps from moving down the lane completely) is not allowed. Creep slowing (such as moving in front of the creeps in zigzag manner to slow their progress or using fissure) is allowed.</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Bug Exploitation:</b> Exploitation of any known or newly discovered bug during the match will result in an immediate disqualification of the team. Excuses will not be entertained. Not knowing the bug is not an excuse, competitors are expected to know the current bugs.</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Definition of Bugs</b></span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Anything abnormal which will give a competitor / team an unfair advantage.</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Anything which will cause interruption / fatal error to the game.</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Penalties</b></span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Warning: After a warning is given, the game goes on. If these warnings are accumulated by the team during the match, the team will be disqualified from the tournament.</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Game Loss: A 'Game loss' given to a team means that the team will automatically lose the game, irrelevant of the actual match result.</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Disqualifications: A team disqualification will lead to the team being removed from the tournament. They will not be allowed to take part in the current event.</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Game Saves</b></span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >First save will be at either:</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >15 minutes into the game or First blood</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Second save onwards will be every 15 minutes of the game.</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Saves will be done after any tower/rax are taken down or after a major gank/team-battle at a 'safe' instance decided by the Admins/Referees.</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Admins/Referees have the right to request for additional game save at any moment during the tournament.</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Any competitor found to have intentionally disconnected from the game will give that competitor's team a loss for that match.</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >If any competitors are disconnected within 15 minutes after the game start, the game will be restarted with same heroes on same players and same lanes have to be maintained till 1st creepwave clashes.</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >If any competitors are disconnected 15 minutes after the game start, the game will be reloaded from the latest save, if no barracks have been destroyed since last save. If so, the game will continue.</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >In case of game crash, the game will be reloaded from the latest save.</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >No random chats are allowed in all-chat during the game. Request for pause or save can be made by either captain at any point.</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Pauses are allowed, but there can only be a maximum of two pauses, each 5 minutes, per team. If you cannot agree for longer pauses, the game can be resumed after 5 minutes. Before pausing and un-pausing , you need to inform your enemy about this, so that you don't get any advantage. Pauses must be for genuine reasons only.</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Players are allowed to remap keys before the game, and not during the course of the game.</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Any use of hacks like maphack or any software or scripts which gives any unfair advantage is banned and will result in instant disqualification from the tournament.</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Players are required to conduct themselves in a professional manner, showing sportsmanship and respect for everyone involved. Any flaming or insulting will result in team-disqualification.&#160;</span><span id="blockGen311" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Team or player names may not be vulgar. While it is up to the admins' discretion, as a guideline, avoid the following: profanity, hate-speech, drug use, or sexual&#160;
</span>
</span>
<span id = "tabs25_register">
<span id="blockGen313" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen314' style='background: rgba(201,202,204,0.8);'><img src="static/Icons_Final/COUNTERSTRIKE.png" width='250px'/></span><br />
<span id='blockGen315' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(211,202,230,0.8);' onclick='register_single_event(26)'><h3>Register</h3></span>
<span id='blockGen316' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(245,226,216,0.8);' onclick='getPage("CounterStrike","CounterStrike_specifications")'><h3>specifications</h3></span>
<span id='blockGen317' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(246,211,221,0.8);' onclick='getPage("CounterStrike","CounterStrike_serversettings")'><h3>serversettings</h3></span>
<span id='blockGen318' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(200,211,210,0.8);' onclick='getPage("CounterStrike","CounterStrike_penalties")'><h3>penalties</h3></span>
<span id='blockGen319' style='width:220px;padding: 15px;border-radius:20px;background: rgba(245,217,213,0.8);'><h3>Contact: Satish Chandra <br/> 9740523343</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupCounterStrike">
<span id = "tabsCounterStrike_specifications">
<span id="blockGen320" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen322" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
	Game Version: Counter-Strike 1.6  </span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >         Registration Fees: Rs. 300/- per team</span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >        	General </span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Competition Method : 5 vs. 5 (Team Play, 5 players per team) </span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Victory Condition: The first team to win 16 rounds is declared the winner.</span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >A coin toss will determine starting sides in 1st round of tournament (Counter-Terrorist or Terrorist) and a Knife-Round will decide the starting sides from 2nd round onwards.</span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >In the case of a 15-15 tie after regulation, the following steps will be taken: </span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >For 1st round of tournament, the match will remain a tie and both teams will qualify for next round. </span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >For further rounds of tournament, the match will have overtime. Overtime consists of 6 rounds with starting money of $10,000. Each team will play 3 rounds as Terrorist and 3 rounds as Counter-Terrorist. The team to win 4 rounds first, is declared the winner. In the case of another tie, the overtime will be repeated until a winner is declared. </span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Official Maps: De_Dust2, De_Inferno, De_Nuke, De_Train, De_Tuscan, De_Mirage</span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Map Selection for Match :</span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > 1st Round   : De_Dust2</span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > 2nd Round  :  De_Inferno</span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >                       Semi Finals : Best of 1 (The Team who the knife have to eliminate 3 maps and loosing </span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >                                    team have to eliminate 2 maps)     </span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >  Finals	: Best of 3 (The Team who the knife have to eliminate 2 maps and loosing </span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >                                          team have to eliminate 1 maps)</span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Only team leaders are allowed to use public in-game messages (messagemode1) within a match. The rule also applies when dead. Use of messagemode1 by any member other than the team leader shall result in a warning. Other team members must only use team message (messagemode2), while in a match. </span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The Server Master will be record the process of the match. </span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Engineer Committee may install third party program and/or join as an observer for tournament operations purposes, such as verifying match results or gathering match data.</span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > 	General Game Setting </span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Rounds: 30 Rounds (Max rounds format): Each Team plays 15 rounds as Terrorists and 15 rounds as Counter-Terrorists </span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Round Time: 1 minute 45 seconds. </span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Freezetime : 15 seconds.</span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Approved Grenade Amounts Per Round </span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Flashbangs: 2 </span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Grenades: 1 </span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Smoke Grenades: 1 </span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Any use of more than the approved amount of grenades by any player, will result in a warning, loss of round or even match loss by forfeit. </span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Approved Launch Option Commands </span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >noforcemparms </span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >noforcemaccel </span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >noforcemspd </span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >freq *** </span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Any other commands found in the launch options, not approved by a referee, will at least result in a warning or even a loss by forfeit. </span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Default skins must be used. </span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Any other use of map or program bugs can result in a warning at the minimum or loss by default for the offending team after deliberation and decision by the board of referees at its sole discretion. </span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Using Automatic sniper rifles (Kreig 550 commando & D3/AU1) is not allowed. It may lead to disqualification of team.</span><span id="blockGen321" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabsCounterStrike_serversettings">
<span id="blockGen323" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen325" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
  </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > &#159; mp_autokick 0 mp_autocrosshair 0 </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > &#159; mp_autoteambalance 0 mp_buytime 0.25 </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > &#159; mp_consistency 1 mp_c4timer 35 </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > &#159; mp_fadetoblack 1 mp_flashlight 1 </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > &#159; mp_forcechasecam 2 mp_forcecamera 2 </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > &#159; mp_footsteps 1 mp_freezetime 15 </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > &#159; mp_friendlyfire 1 mp_hostagepenalty 0 </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > &#159; mp_limitteams 10 mp_logecho 1 </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > &#159; mp_logdetail 3 mp_logfile 1 </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > &#159; mp_logmessages 1 mp_maxrounds 0 </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > &#159; mp_playerid 0 mp_roundtime 1.75 </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > &#159; mp_timelimit 0 mp_tkpunish 0 </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > &#159; sv_aim 0 sv_airaccelerate 10 </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > &#159; sv_airmove 1 sv_allowdownload 0 </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > &#159; sv_allowupload 0 sv_alltalk 0 </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > &#159; sv_cheats 0 sv_clienttrace 1 </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > &#159; sv_clipmode 0 sv_friction 4 </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > &#159; sv_gravity 800 sv_lan_rate 25000 </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > &#159; sv_maxrate 25000 sv_maxspeed 320 </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > &#159; sv_maxunlag 0.5 sv_maxupdaterate 101 </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > &#159; sv_minupdaterate 101 sv_minrate 25000 </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > &#159; sv_proxies 1 sv_send_logos 1 </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > &#159; sv_send_resources 1 sv_stepsize 18 </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > &#159; sv_stopspeed 75 sv_unlag 1 </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > &#159; sv_voiceenable 1 sv_unlagsamples 1 </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > &#159; sv_unlagpush 0 sys_ticrate 10000 </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > &#159; allow_spectators 1 decalfrequency 60 </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > &#159; edgefriction 2 host_framerate 0 </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > &#159; log on pausable 0 </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Allowed Setting Values for Client </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >cl_updaterate 101 cl_cmdrate 101 </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >rate 25000 m_filter 1/0 </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >hud_fastswitch 1/0 zoom_sensitivity_ratio </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >fps_max 101 cl_dynamiccrosshair 1/0 </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >gamma 1/3 brightness 1/3 </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >cl_minmodels 1/0 cl_shadows 1/0 </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >q Following Client Settings May Not Be Changed (Must use the default values) </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >cl_weather mp_corpse_stay </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >mp_decals max_shells </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >max_smokepuffs fastsprites </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >ex_interp 0.01 for LAN </span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ></span><span id="blockGen324" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabsCounterStrike_penalties">
<span id="blockGen326" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen328" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
 In case of use of any unfair practices listed below, the offending team will be a given a warning at the minimum or loss by default at the referee&rsquo;s sole discretion. </span><span id="blockGen327" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Team members may communicate verbally if they are alive in the match or when all team members are dead. </span><span id="blockGen327" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The player is deemed dead when the screen is completely faded to black. If a bug occurs and the screen doesn&rsquo;t fade to black, the player is deemed dead three seconds after he/she has fallen.</span><span id="blockGen327" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Boosting (stepping on top of own team player) is allowed in play. </span><span id="blockGen327" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Binding Duck to scroll wheel is not allowed. </span><span id="blockGen327" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >C4 must be installed at a viewable location. Installing C4 at a location where a boost is required is allowed. </span><span id="blockGen327" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Silent C4 installation is considered bug play. Such an offense may result in a warning or loss of all remaining TR rounds at the sole discretion of the board of referees. </span><span id="blockGen327" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Throwing grenades over buildings in all maps are allowed. </span><span id="blockGen327" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Any use of the flash bang bug will result in a &lsquo;-3&rsquo; round score for the offending team. If the use of the bug is decided as unintentional, the game continues as normal. If the use of the bug is decided as intentional, the offending team will be a given a warning at the minimum or loss by default. </span><span id="blockGen327" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Use of personal model/skins (includes weapon skins) is not allowed.</span><span id="blockGen327" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Use of personal map texture is not allowed.</span><span id="blockGen327" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >All cheat programs, Use of map bugs, defuse bugs etc. in play (e.g. map swimming, auto aim, knife defuse, magnum defuse etc.) is not allowed.</span><span id="blockGen327" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Use of unfair but available scripts (e.g. silentrun, attack+use, centerview script, norecoil script, etc.) is not allowed</span><span id="blockGen327" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The server master can and will check for the use of any unfair practice or script, even those not listed above, during each match.</span><span id="blockGen327" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >If referee decides that external conditions (Press, Team Leader, Player, Spectator, etc) give unfair advantage to a player, the team may be given a warning or lose by default at the referee&rsquo;s sole discretion. </span><span id="blockGen327" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >If a problem occurs with flash bang bug, the referee reviews the demo file and the offending team loses the round. The match continues normally. </span><span id="blockGen327" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >HLTV Proxy may join the game servers for Tournament Broadcast.</span><span id="blockGen327" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >To test for HLTV flash bugs, players must follow the directions of the server master and/or the referees. </span><span id="blockGen327" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >q If disconnection occurs during a match </span><span id="blockGen327" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >If all the players cannot play due to an unintended, unforeseen accident such as server stoppage, </span><span id="blockGen327" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Before the 3rd round starts: restart the match </span><span id="blockGen327" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >After the 3rd round starts: Disconnected player must re-connect to the server. The round is continued unpausing, and if the disconnected player cannot connect to the server, all players must wait during the freeze time after the round until the disconnected player connects to the server. At this time, the match may continue by unpausing. (Not a restart) </span><span id="blockGen327" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >If up to 3 of all players are unintentionally disconnected: The score for that round is discarded. The game is paused after the round during the freeze time, and all players wait until the disconnected players are connected to the server. When all players are connected, the match may continue by unpausing the game. </span><span id="blockGen327" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >In the case of intentional disconnection, the referee may decide to end the match with the offending team losing by forfeit. </span><span id="blockGen327" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Protests can only be filed by the team leader (e.g. a player that represents the team) </span><span id="blockGen327" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >If a player does not agree to any rules, he/she can express his/her protest to a referee before the completion of a match. Any intentional refusal to connect to the match server can result in a default loss for that team with the decision to </span><span id="blockGen327" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >be made at the sole discretion of the referee. </span><span id="blockGen327" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >If a rematch is decided by the head referee, the team that does not follow this decision will be subject to disqualification.</span><span id="blockGen327" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabs26_register">
<span id="blockGen329" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen330' style='background: rgba(202,232,204,0.8);'><img src="static/Icons_Final/mining_innovation.png" width='250px'/></span><br />
<span id='blockGen331' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(217,218,214,0.8);' onclick='register_single_event(1)'><h3>Register</h3></span>
<span id='blockGen332' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(238,222,212,0.8);' onclick='getPage("Innovating_Mining","Innovating_Mining_Description")'><h3>Description</h3></span>
<span id='blockGen333' style='width:220px;padding: 15px;border-radius:20px;background: rgba(223,233,237,0.8);'><h3>Contact: Arjun Thumbayil(8105941509) - arjunthumbayil@hotmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupInnovating_Mining">
<span id = "tabsInnovating_Mining_Description">
<span id="blockGen334" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen336" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Students are allowed to think without any bounds on creative grounds to come up with mining techniques that are non-conventional and of-course are safe and economical as well as practically feasible. this will be a power-point presentation round.
</span>
</span>
<span id = "tabs1_register">
<span id="blockGen337" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen338' style='background: rgba(208,232,232,0.8);'><img src="static/Icons_Final/adverse_mining.png" width='250px'/></span><br />
<span id='blockGen339' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(202,214,218,0.8);' onclick='register_single_event(2)'><h3>Register</h3></span>
<span id='blockGen340' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(234,228,229,0.8);' onclick='getPage("Adverse_Mining_Problem","Adverse_Mining_Problem_Description")'><h3>Description</h3></span>
<span id='blockGen341' style='width:220px;padding: 15px;border-radius:20px;background: rgba(207,244,222,0.8);'><h3>Contact: Arjun Thumbayil(8105941509) - arjunthumbayil@hotmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupAdverse_Mining_Problem">
<span id = "tabsAdverse_Mining_Problem_Description">
<span id="blockGen342" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen344" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
This is a power point presentation round where the participants can choose a real-life industry problem (ex: neyveli / kgf) and discuss the problem and come up with the best possible feasible solution(s).  judgment  will be done by the experts.
</span>
</span>
<span id = "tabs2_register">
<span id="blockGen345" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen346' style='background: rgba(223,201,249,0.8);'><img src="static/Icons_Final/Mine_Quest.png" width='250px'/></span><br />
<span id='blockGen347' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(243,232,226,0.8);' onclick='register_single_event(3)'><h3>Register</h3></span>
<span id='blockGen348' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(250,239,226,0.8);' onclick='getPage("Mine_Quest","Mine_Quest_Description")'><h3>Description</h3></span>
<span id='blockGen349' style='width:220px;padding: 15px;border-radius:20px;background: rgba(225,234,208,0.8);'><h3>Contact: Arjun Thumbayil(8105941509) - arjunthumbayil@hotmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupMine_Quest">
<span id = "tabsMine_Quest_Description">
<span id="blockGen350" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen352" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
This is a quiz event which consists of four rounds. </span><span id="blockGen351" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><h3>round 1 : preliminary</h3>All the teams (3 members) will be given an objective question paper to solve which decides the eligibility for the further rounds.</span><span id="blockGen351" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><h3>round 2 : eliminator</h3>The top six teams will be qualified for this round. in this round multi-disciplinary questions will be posed to the teams and are judged from all possible angles. </span><span id="blockGen351" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><h3>round 3 : picture-perfect</h3>This is a visual round in which the participants will be shown various pictures which may/ may not contain a flaw and are identified to detect and correct the flaw if present. they will also be given incomplete diagrams and are asked to complete them.</span><span id="blockGen351" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><h3>round 4 : grand-finale</h3>The ultimate round which decides the winner of the event where their performance is continuously evaluated. this round is a combination of auction round, buzzer round, challenge round, and rapid fire round.
</span>
</span>
<span id = "tabs3_register">
<span id="blockGen353" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen354' style='background: rgba(206,227,244,0.8);'><img src="static/Icons_Final/HANGMAN_MAIN.png" width='250px'/></span><br />
<span id='blockGen355' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(242,233,209,0.8);' onclick='register_single_event(4)'><h3>Register</h3></span>
<span id='blockGen356' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(250,242,241,0.8);' onclick='getPage("Hang-Man","Hang-Man_Description")'><h3>Description</h3></span>
<span id='blockGen357' style='width:220px;padding: 15px;border-radius:20px;background: rgba(231,215,248,0.8);'><h3>Contact: Arjun Thumbayil(8105941509) - arjunthumbayil@hotmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupHang-Man">
<span id = "tabsHang-Man_Description">
<span id="blockGen358" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen360" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
This round is based on the actual hangman game where the participants will be given a picture and is required to guess the title or relevant data as per the question posed to them.
</span>
</span>
<span id = "tabs4_register">
<span id="blockGen361" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen362' style='background: rgba(204,239,245,0.8);'><img src="static/Icons_Final/blast_mine_ventilation.png" width='250px'/></span><br />
<span id='blockGen363' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(231,227,232,0.8);' onclick='register_single_event(5)'><h3>Register</h3></span>
<span id='blockGen364' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(215,204,207,0.8);' onclick='getPage("Blast_Mine_Ventilation","Blast_Mine_Ventilation_Description")'><h3>Description</h3></span>
<span id='blockGen365' style='width:220px;padding: 15px;border-radius:20px;background: rgba(225,248,248,0.8);'><h3>Contact: Arjun Thumbayil(8105941509) - arjunthumbayil@hotmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupBlast_Mine_Ventilation">
<span id = "tabsBlast_Mine_Ventilation_Description">
<span id="blockGen366" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen368" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
A very simple round in which the participants will be given the required data pertaining to blasting/ ventilation and where in the participants are required to design a suitable layout for the same. judgment to be done by experts.
</span>
</span>
<span id = "tabs5_register">
<span id="blockGen369" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen370' style='background: rgba(207,243,201,0.8);'><img src="static/Icons_Final/Mine_Rush.png" width='250px'/></span><br />
<span id='blockGen371' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(234,246,224,0.8);' onclick='register_single_event(6)'><h3>Register</h3></span>
<span id='blockGen372' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(225,219,243,0.8);' onclick='getPage("Mine_Rush","Mine_Rush_Description")'><h3>Description</h3></span>
<span id='blockGen373' style='width:220px;padding: 15px;border-radius:20px;background: rgba(249,246,246,0.8);'><h3>Contact: Arjun Thumbayil(8105941509) - arjunthumbayil@hotmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupMine_Rush">
<span id = "tabsMine_Rush_Description">
<span id="blockGen374" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen376" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
A treasure hunt kind of an event where the teams decode a series of clues to reach the final destination. this round requires the use of some basic survey instruments.
</span>
</span>
<span id = "tabs6_register">
<span id="blockGen377" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen378' style='background: rgba(228,220,240,0.8);'><img src="static/Icons_Final/Techspeak.png" width='250px'/></span><br />
<span id='blockGen379' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(247,218,202,0.8);' onclick='getPage("Tech_Speak","Tech_Speak_Description")'><h3>Description</h3></span>
<span id='blockGen380' style='width:220px;padding: 15px;border-radius:20px;background: rgba(243,237,250,0.8);'><h3>Contact: Aashish Mane - +91 9945049097</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupTech_Speak">
<span id = "tabsTech_Speak_Description">
<span id="blockGen381" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen383" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
TechSpeak is a series of a video conferences with eminent personalities who are working at the frontier of what possible with technology. In the past we have managed to interact with individuals like John C. Mather, who won the Nobel Prize in Physics for his work on <a href='http://en.wikipedia.org/wiki/Cosmic_Background_Explorer'>http://en.wikipedia.org/wiki/Cosmic_Background_Explorer</a>, Bjarne Stroustrup who was the creator C,C++, Sam Pitroda who has been the advisor to the Prime Minister of India on public information infrastructure.</span><span id="blockGen382" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >This year the aim of TechSpeak is to showcase speakers who can give viewers a precious insight into what the world needs from engineers and what engineers can do for the world. </span><span id="blockGen382" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >"I think I would say that the universe has a purpose, it's not somehow just there by chance ... some people, I think, take the view that the universe is just there and it runs along – it's a bit like it just sort of computes, and we happen somehow by accident to find ourselves in this thing. But I don't think that's a very fruitful or helpful way of looking at the universe, I think that there is something much deeper about it." - Roger Penrose
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
<span id='blockGen384' style='background: rgba(248,206,237,0.8);'><img src="static/Icons_Final/fantasticity2.png" width='250px'/></span><br />
<span id='blockGen385' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(201,224,217,0.8);' onclick='register_single_event(41)'><h3>Register</h3></span>
<span id='blockGen386' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(215,229,236,0.8);' onclick='getPage("FantastiCity","FantastiCity_Description")'><h3>Description</h3></span>
<span id='blockGen387' style='width:220px;padding: 15px;border-radius:20px;background: rgba(219,215,201,0.8);'><h3>Contact: B.THEJA<br/>+919480435585<br/>bnmtheja@gmail.com<br/>Sushil Kumar<br/>+918867345233<br/>sushil199124@gmail.com<br/></h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupFantastiCity">
<span id = "tabsFantastiCity_Description">
<span id="blockGen388" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen390" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
With the advent of advanced satellites and various reconnaissance airplanes, it is very difficult to maintain the secrecy of a military base on land. Underwater settlement of military base can be one of the alternatives for a military base. <a href='./data/FantastiCity.pdf'>Problem Statement</a>
</span>
</span>
<span id = "tabs41_register">
<span id="blockGen391" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen392' style='background: rgba(243,220,238,0.8);'><img src="static/Icons_Final/Colossus.png" width='250px'/></span><br />
<span id='blockGen393' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(217,208,210,0.8);' onclick='register_single_event(42)'><h3>Register</h3></span>
<span id='blockGen394' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(224,227,200,0.8);' onclick='getPage("COLOSSUS","COLOSSUS_Description")'><h3>Description</h3></span>
<span id='blockGen395' style='width:220px;padding: 15px;border-radius:20px;background: rgba(206,249,216,0.8);'><h3>Contact: Mohan Krishna.T<br/>+917411918682<br/>krishnamohan651@gmail.com<br/>Sushil Kumar<br/>+918867345233<br/>sushil199124@gmail.com<br/></h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupCOLOSSUS">
<span id = "tabsCOLOSSUS_Description">
<span id="blockGen396" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen398" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
What is the first thing people think about when it comes to Civil Engineering? Yes, it is structures, the spotlight of Colossus. The basis of a good structure lies in the mix of innovation, analysis, and the determination to create an identity. This edition of Engineer offers a hands-on experience in building an innovative structure using aluminium sections. <a href='./data/COLOSSUS.pdf'>Problem Statement</a> 
</span>
</span>
<span id = "tabs42_register">
<span id="blockGen399" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen400' style='background: rgba(224,238,241,0.8);'><img src="static/Icons_Final/Architect2.png" width='250px'/></span><br />
<span id='blockGen401' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(220,222,205,0.8);' onclick='register_single_event(43)'><h3>Register</h3></span>
<span id='blockGen402' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(215,214,236,0.8);' onclick='getPage("Architect","Architect_Description")'><h3>Description</h3></span>
<span id='blockGen403' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(220,232,228,0.8);' onclick='getPage("Architect","Architect_format")'><h3>format</h3></span>
<span id='blockGen404' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(248,246,250,0.8);' onclick='getPage("Architect","Architect_Eligibility")'><h3>Eligibility</h3></span>
<span id='blockGen405' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(226,218,224,0.8);' onclick='getPage("Architect","Architect_Home")'><h3>Home</h3></span>
<span id='blockGen406' style='width:220px;padding: 15px;border-radius:20px;background: rgba(203,248,220,0.8);'><h3>Contact: Mohan Krishna.T<br/>+917411918682<br/>krishnamohan651@gmail.com<br/>Sushil Kumar<br/>+918867345233<br/>sushil199124@gmail.com<br/></h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupArchitect">
<span id = "tabsArchitect_Description">
<span id="blockGen407" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen409" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Participants are required to prepare models for a predefined problem within a fixed time limit. The models will later be put to test and teams fulfilling the winning criteria in the best way will be declared winners.</span><span id="blockGen408" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >This event has attracted participants from various colleges and students from all disciplines can give it a shot.
</span>
</span>
<span id = "tabsArchitect_format">
<span id="blockGen410" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen412" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
The detailed problem statement will be given out on the spot.</span><span id="blockGen411" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >All materials required to make the model will be provided by the organisers.</span><span id="blockGen411" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >All the models completed within the given period, abiding the rules and regulations will be tested on the spot and evaluated by the judges.
</span>
</span>
<span id = "tabsArchitect_Eligibility">
<span id="blockGen413" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen415" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
o The team can include a maximum of two members. o All members of the team should be enrolled as students in an educational institute. o No person can be a part of more than one team.
</span>
</span>
<span id = "tabsArchitect_Home">
<span id="blockGen416" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen418" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Civil Engineering is an art; a profession of creative ability and logic. Architect provides an opportunity for participants to unleash their innovation in designing an object of significance and splendor. </span><span id="blockGen417" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >This event aims to harness practical design and constructional abilities of the participants.
</span>
</span>
<span id = "tabs43_register">
<span id="blockGen419" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen420' style='background: rgba(228,204,230,0.8);'><img src="static/Icons_Final/Nirvana.png" width='250px'/></span><br />
<span id='blockGen421' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(206,209,230,0.8);' onclick='register_single_event(44)'><h3>Register</h3></span>
<span id='blockGen422' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(219,231,246,0.8);' onclick='getPage("Nirvahana","Nirvahana_Home")'><h3>Home</h3></span>
<span id='blockGen423' style='width:220px;padding: 15px;border-radius:20px;background: rgba(230,213,234,0.8);'><h3>Contact: Mohan Krishna.T<br/>+917411918682<br/>krishnamohan651@gmail.com<br/>Niveditha.J<br/>+917795543699<br/>niveditha811@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupNirvahana">
<span id = "tabsNirvahana_Home">
<span id="blockGen424" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen426" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
A concern for the environment, a passion for design, a desire to innovate… Niravahana is the platform for you.</span><span id="blockGen425" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The event requires participants to come up with simple, yet creative solutions to everyday design problems. <a href='./data/NIRVAHANA.pdf'>Problem Statement</a>
</span>
</span>
<span id = "tabs44_register">
<span id="blockGen427" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen428' style='background: rgba(248,212,209,0.8);'><img src="static/Icons_Final/mindbend.png" width='250px'/></span><br />
<span id='blockGen429' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(208,216,249,0.8);' onclick='register_single_event(62)'><h3>Register</h3></span>
<span id='blockGen430' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(207,230,217,0.8);' onclick='getPage("Mindbend","Mindbend_eligibility")'><h3>eligibility</h3></span>
<span id='blockGen431' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(231,248,242,0.8);' onclick='getPage("Mindbend","Mindbend_Description")'><h3>Description</h3></span>
<span id='blockGen432' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(225,221,207,0.8);' onclick='getPage("Mindbend","Mindbend_format")'><h3>format</h3></span>
<span id='blockGen433' style='width:220px;padding: 15px;border-radius:20px;background: rgba(228,243,241,0.8);'><h3>Contact: B. THEJA <br/>+919480435585 <br/>bnmtheja@gmail.com <br/>Padmini M <br/>+918123463865 <br/>pm27178@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupMindbend">
<span id = "tabsMindbend_eligibility">
<span id="blockGen434" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen436" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
The team can include a maximum of two members.</span><span id="blockGen435" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >All members of the team should be enrolled as students in an educational institute.</span><span id="blockGen435" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >No person can be a part of more than one team.
</span>
</span>
<span id = "tabsMindbend_Description">
<span id="blockGen437" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen439" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
With a combination of mind boggling questions, core concepts and some really exciting rounds, MindBend is definitely a test of your intellect! Time to prove yourself!
</span>
</span>
<span id = "tabsMindbend_format">
<span id="blockGen440" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen442" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
The quiz will be an amalgamation of visual rounds and written tests, full of interesting and intriguing questions.
</span>
</span>
<span id = "tabs62_register">
<span id="blockGen443" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen444' style='background: rgba(228,247,216,0.8);'><img src="static/Icons_Final/sky_lantern.png" width='250px'/></span><br />
<span id='blockGen445' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(250,207,240,0.8);' onclick='getPage("Sky_Lanterns","Sky_Lanterns_Description")'><h3>Description</h3></span>
<span id='blockGen446' style='width:220px;padding: 15px;border-radius:20px;background: rgba(237,223,211,0.8);'><h3>Contact: Ashwin K S<br/> 9483523498</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupSky_Lanterns">
<span id = "tabsSky_Lanterns_Description">
<span id="blockGen447" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen449" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
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
<span id='blockGen450' style='background: rgba(218,230,246,0.8);'><img src="static/Icons_Final/Green_Product_Design.png" width='250px'/></span><br />
<span id='blockGen451' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(203,225,236,0.8);' onclick='register_single_event(51)'><h3>Register</h3></span>
<span id='blockGen452' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(203,224,244,0.8);' onclick='getPage("Green_Inovation_Challenge","Green_Inovation_Challenge_Description")'><h3>Description</h3></span>
<span id='blockGen453' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(201,230,203,0.8);' onclick='getPage("Green_Inovation_Challenge","Green_Inovation_Challenge_FAQS")'><h3>FAQS</h3></span>
<span id='blockGen454' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(210,246,218,0.8);' onclick='getPage("Green_Inovation_Challenge","Green_Inovation_Challenge_Problem Statement")'><h3>Problem Statement</h3></span>
<span id='blockGen455' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(241,209,213,0.8);' onclick='getPage("Green_Inovation_Challenge","Green_Inovation_Challenge_Rules and guidelines")'><h3>Rules and guidelines</h3></span>
<span id='blockGen456' style='width:220px;padding: 15px;border-radius:20px;background: rgba(232,226,223,0.8);'><h3>Contact: Ashwin K S<br/> 9483523498</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupGreen_Inovation_Challenge">
<span id = "tabsGreen_Inovation_Challenge_Description">
<span id="blockGen457" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen458" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
<br/><i>A man may die, nations may rise and fall, but an idea lives on....</i><br /> Socially Conscious Engineering along with Biz Committee presents the 1ST edition of the GIC .<br/>In the world we live in today, where many ideas build itself on an environmental and social foundation, for an idea to make it big, it’s not enough for it to be just technically sound but also practical. <br/>This is an Innovation Challenge where budding engineers have to use their technical skills to showcase their innovation and also design a business plan supporting their idea, so as to show the viability of actual implementation of their ideas, which make environmental or social impact.<br /><br/>
</span>
</span>
<span id = "tabsGreen_Inovation_Challenge_FAQS">
<span id="blockGen459" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen461" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Q. What is the maximum size of a team? <br />A. The team can comprise of a maximum of 4 members.<br /></span><span id="blockGen460" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Q. Can the participating team comprise of only 1 member?<br />A. Yes<br /></span><span id="blockGen460" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Q. Can teams be formed by mixing students of different disciplines/departments?<br />A. Yes<br /></span><span id="blockGen460" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Q. Can teams be formed by mixing undergraduate and post-graduate engineering students?<br />A. No. This contest is only open for undergraduate engineering students.<br /></span><span id="blockGen460" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Q. Can one team submit more than one entry?<br />A. Yes, one team can send more than one entry.<br /></span><span id="blockGen460" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Q. Whom do we contact in case of any queries?<br />A. In case of any queries, send a mail sce@engineer.org.in or refer to the Contact Us List which appears on every page.<br /></span><span id="blockGen460" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Q. Can entries be submitted in other languages?<br />A. No, entries are to be submitted only in English<br /></span><span id="blockGen460" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Q. Should my presentation necessarily be a solution?<br />A. No, Your presentation can be a product proposal, changes in an existing product, a concept with a feasibility aspect, or a solution.<br /></span><span id="blockGen460" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Q. Would a prototype be required if I'm a short listed candidate?<br />A. Not necessary, but bonus points will be awarded based on level of implementation of idea which could be shown through a physical prototype or a recorded video.<br /></span><span id="blockGen460" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Q. How will I know whether my entry has been short-listed or not?<br />A. We will inform you through mail<br /></span><span id="blockGen460" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The organisers retain the right to make any changes to the event, format, dates, rules and in anymatter related to this event at any time before or during the event.
</span>
</span>
<span id = "tabsGreen_Inovation_Challenge_Problem Statement">
<span id="blockGen462" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen464" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Solution for efficient use of energy that has a visible impact on our lives and on Planet earth. This could either be a completely new technology that you have developed or an improvement or modification of an existing technology that could cover 1 or more of the following aspects :<br />• Safe &amp; Reliable – Making new or modifying existing solutions to make quality energy available and its usage at every household safe for man, machine &amp; environment.<br />• Efficient – Innovative solution for EFFICIENT energy usage with reduction in capital and operational expenditures.<br />• Productive &amp; Green – Innovative solutions with good deployment speed and scalability, focused at reduced carbon footprint and ease of installation.<br />• The solution could be in the form of product development or an idea presentation. </span><span id="blockGen463" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The idea presented can be from any field of engineering, but ensuring that it makes a positive impact on the environment through direct use or indirectly.</span><span id="blockGen463" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >P.S : Since this is an innovation challenge, feel free to explore beyond the above criteria . Do go ahead and add any new avenues that you may have in mind or see your idea making a positive impact on.<br /></span><span id="blockGen463" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Submitted entries will be evaluated by a panel of experts giving equal weightage to:<br />1) How green your idea is ( positive environmental impact )<br />2) How viable a business option it can be if implemented<br /></span><span id="blockGen463" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Things you could keep in mind :<br />• Earth friendliness<br />• Reality friendliness<br />• Innovations brought in <br />• Novelty of the idea<br />• Effectiveness of the idea
</span>
</span>
<span id = "tabsGreen_Inovation_Challenge_Rules and guidelines">
<span id="blockGen465" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen467" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Preliminary round: <br />Candidates interested to participate should register at www.engineer.org.in. The participants must mail an abstract of their idea (not exceeding two page) to <b>sce@engineer.org.in</b> with subject as “SCE GIC abstract” on or before 19th<br />i. Submit the abstract in PDF format.<br />ii. PDFs should include:<br />iii. Title of the application/ product<br />iv. College Name<br />v. Name and details of the Team members (max 4 members)<br />   ( contact no. and email-id of the members )<br />vi. Problem addressed<br />vii. Abstract max 2 pages ( excluding the above )<br /></span><span id="blockGen466" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Selected teams will be informed through mail.<br />Final round:<br />i. The final round will involve the short-listed teams to give a presentation of their idea before a jury panel covering all the aspects of their innovation.<br />ii. The presentation wiil be for a duration of about 12 minutes which will befollowed by a Q&amp;A secession from the judges .<br />iii. The teams could showcase any type of prototype made or simulations / surveys conducted as a part of the presentation.<br />Areas of evaluation for the finale will be shared with the selected teams 2 days prior tothe main event (scheduled tentatively on 24thOctober, 2013.<br /></span><span id="blockGen466" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Prizes worth 10k to be won.</b>
</span>
</span>
<span id = "tabs51_register">
<span id="blockGen468" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen469' style='background: rgba(209,236,214,0.8);'><img src="static/Icons_Final/saprsh.png" width='250px'/></span><br />
<span id='blockGen470' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(222,214,233,0.8);' onclick='register_single_event(52)'><h3>Register</h3></span>
<span id='blockGen471' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(227,243,229,0.8);' onclick='getPage("Sparsh","Sparsh_Rules")'><h3>Rules</h3></span>
<span id='blockGen472' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(238,218,207,0.8);' onclick='getPage("Sparsh","Sparsh_problemstatement")'><h3>problemstatement</h3></span>
<span id='blockGen473' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(241,226,212,0.8);' onclick='getPage("Sparsh","Sparsh_Description")'><h3>Description</h3></span>
<span id='blockGen474' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(240,249,225,0.8);' onclick='getPage("Sparsh","Sparsh_Introduction")'><h3>Introduction</h3></span>
<span id='blockGen475' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(243,218,219,0.8);' onclick='getPage("Sparsh","Sparsh_NeedOfTheHour")'><h3>NeedOfTheHour</h3></span>
<span id='blockGen476' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(206,217,233,0.8);' onclick='getPage("Sparsh","Sparsh_Faqs")'><h3>Faqs</h3></span>
<span id='blockGen477' style='width:220px;padding: 15px;border-radius:20px;background: rgba(212,240,207,0.8);'><h3>Contact: Ashwin K S<br/> 9483523498</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupSparsh">
<span id = "tabsSparsh_Rules">
<span id="blockGen478" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen480" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
<b>Preliminary round: </b><br />Candidates interested to participate should register at www.engineer.org.in. The participants must mail an abstract of their idea (not exceeding two page) to sce@engineer.org.in with subject &ldquo;SCE Sparsh abstract&rdquo; on or before 19th October, 2013.<br />Submit the abstract in PDF format.<br />PDFs should include:<br />Title <br />College name<br />Team name<br />Name and details of the team members (Contact number and email id)<br />Brief description of the idea/solution.<br />The abstract should not exceed two pages (exclude two pages). Selected teams will be informed through mail.<br /><br /><b>Final round:</b><br /><br />The participants must form teams of 3 members or less.<br />Presentation should not exceed 10 minutes.<br />If participants want to include drawings/designs on softwares like AutoCAD etc., they are encouraged to do so.<br /><br /><b>Prizes worth 10k to be won. </b><br />
</span>
</span>
<span id = "tabsSparsh_problemstatement">
<span id="blockGen481" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen483" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
The participants of Sparsh are expected to give ideas through which household level bio-gas plants can be made cost-effectively with a budget which should not exceed INR 15,000. The aim is to make the household bio-gas plants as cost-effective as possible. The participants are required to make a presentation of their ideas. They are judged on the cost-effectiveness of their idea and the practicality of their solution. They will be judged by professionals experienced in this domain. Innovative and feasible ideas may be implemented and further developed by Mangalore City Corporation. <br /><br />The presentation must address the following:<br />Total budget, including costs of raw materials and labour<br />Detailed design, with justification<br />Any other innovative ideas to improve functionality or add new features<br />
</span>
</span>
<span id = "tabsSparsh_Description">
<span id="blockGen484" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen486" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
<b>Description:</b></span><span id="blockGen485" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Sparsh calls upon teams to design and develop a solution to a problem faced by local communities.</span><span id="blockGen485" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The participants are required to make a presentation putting forth their ideas and their proposals for the given problem statement. SPARSH stands out from the rest of the events in the sense that the team SPARSH will continue to be a part of the project and the implementation of the solutions even after Engineer comes to an end and continue its technical support to the organization.</span><span id="blockGen485" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >This year, Sparsh will be organized in assosiation with Mangalore City Corporation and Rotary Club.
</span>
</span>
<span id = "tabsSparsh_Introduction">
<span id="blockGen487" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen489" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
An estimated 2.5 billion people in developing countries rely on biomass, such as fuel wood, charcoal, agricultural waste and animal dung, to meet their energy needs for cooking. It is expected that one-third of the world&rsquo;s population still relies on these fuels till 2030.<br />Use of biomass is not in itself a cause for concern. However, when resources harvested are unsustainable and energy conversion technologies are inefficient, there are serious adverse consequences for people&rsquo;s health, the environment and economic development.<br /> <br />About 1.3 million people &ndash; mostly women and children&ndash; die prematurely every year because of exposure to indoor air pollution from biomass burning. Environmental damage can also result, for example, in deforestation. <br />
</span>
</span>
<span id = "tabsSparsh_NeedOfTheHour">
<span id="blockGen490" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen492" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
There is an urgent need for alternative, sustainable energy sources and improved sanitation. By converting animal manure and human excreta into cooking energy, biogas could fill the void.<br />This problem is most directly solved by household level bio-gas plants which are being manufactured in India. However, the plants cost INR.15,000. This puts a break to the sales of these bio-gas plants as these plants are mainly targeted to the rural people who may not be willing to pay this price. The need of the hour is to make these bio-gas plants cheaper so that everybody can afford. <br />
</span>
</span>
<span id = "tabsSparsh_Faqs">
<span id="blockGen493" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen495" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Q. Can teams be formed by mixing students of different disciplines/departments?<br />A.&#160;Yes.<br /><br />Q. Can teams be formed by mixing undergraduate and post-graduate engineering students?<br />A.&#160;Yes.<br /><br />Q. Can one team submit more than one entry?<br />A.&#160;No, one team can send only one entry and the same person cannot be in more than one team.<br /><br />Q. Whom do we contact in case of any queries?<br />A.&#160;In case of any queries, send a mail khv.10m148@nitk.edu.in.<br /><br />Q. Can entries be submitted in other languages?<br />A.&#160;No, entries are to be submitted only in English<br /><br />Q. Would a prototype be required if I'm a short listed candidate?<br />A.&#160;No<br /><br />The organisers retain the right to make any changes to the event, format, dates, rules and in any matter related to this event at any time before or during the event.<br />
</span>
</span>
<span id = "tabs52_register">
<span id="blockGen496" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen497' style='background: rgba(229,250,236,0.8);'><img src="static/Icons_Final/lastword.png" width='250px'/></span><br />
<span id='blockGen498' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(226,218,209,0.8);' onclick='register_single_event(53)'><h3>Register</h3></span>
<span id='blockGen499' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(249,231,209,0.8);' onclick='getPage("The_Last_Word","The_Last_Word_Description")'><h3>Description</h3></span>
<span id='blockGen500' style='width:220px;padding: 15px;border-radius:20px;background: rgba(240,226,237,0.8);'><h3>Contact: Ashwin K S<br/> 9483523498</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupThe_Last_Word">
<span id = "tabsThe_Last_Word_Description">
<span id="blockGen501" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen503" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Description: The final event to take place during Engineer, The Last Word is an engaging panel discussion that calls upon eminent personalities to explore a pressing issue which society faces today.</span><span id="blockGen502" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Panel to consist of seven members, including one moderator
</span>
</span>
<span id = "tabs53_register">
<span id="blockGen504" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideMockstock'>
<span id='blockGen505' style='background: rgba(238,228,224,0.8);'><img src="static/Icons_Final/mockstock.png" width='250px'/></span><br />
<span id='blockGen506' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(236,214,250,0.8);' onclick='getPage("Mockstock","Mockstock_Description")'><h3>Description</h3></span>
<span id='blockGen507' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(221,202,229,0.8);' onclick='getPage("Mockstock","Mockstock_Details")'><h3>Details</h3></span>
<span id='blockGen508' style='width:220px;padding: 15px;border-radius:20px;background: rgba(232,227,233,0.8);'><h3>Contact: Shashank Ajmera<br />08867838479</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupMockstock">
<span id = "tabsMockstock_Description">
<span id="blockGen509" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen511" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Mockstock is an online share trading event. The game is simple; you will be given an initial capital to start off with, and you have to invest in the stocks, listed in the app, and make profits. The one with the maximum profit at the end of the event wins. <b>The event runs on live feed, from the American stock markets (Dow Jones)</b>. The winner gets attractive prizes.
</span>
</span>
<span id = "tabsMockstock_Details">
<span id="blockGen512" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen514" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
 The event starts on 21st of October, and goes on till 25th of October. (The main event has been postponed due to technical difficulties).However, the trial versions will be put up soon (before 21st) for the users to get used to the environment.</span><span id="blockGen513" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > The event will start on evenings, at 7:00 pm, and go on till 1:00 am, exactly like the American market, for all four days. </span><span id="blockGen513" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > The trading will be inter-day, i.e., whatever your portfolio is at the end of the day, the same will be carried on to the next day. Hence, the final winner will be the one who makes the maximum cumulative profit after four days. </span><span id="blockGen513" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Prizes:</b><br /> Winner gets an amount of Rs. 5000/-</span><span id="blockGen513" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
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
<span id='blockGen515' style='background: rgba(226,247,210,0.8);'><img src="static/Icons_Final/HACKING.png" width='250px'/></span><br />
<span id='blockGen516' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(234,229,245,0.8);' onclick='register_single_event(63)'><h3>Register</h3></span>
<span id='blockGen517' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(228,200,246,0.8);' onclick='getPage("Ethical_Hacking_by_TechDefence","Ethical_Hacking_by_TechDefence_Description")'><h3>Description</h3></span>
<span id='blockGen518' style='width:220px;padding: 15px;border-radius:20px;background: rgba(245,234,223,0.8);'><h3>Contact: Manasij(+91 9738731680)</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupEthical_Hacking_by_TechDefence">
<span id = "tabsEthical_Hacking_by_TechDefence_Description">
<span id="blockGen519" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen521" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
INTRODUCTION </span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >As information security increasingly becoming a boardroom level concern, training and certification are becoming increasingly important for candidates and companies. With a promising novel initiative on the cards, this year TechDefence and ENGINEER '13 has decided to extend the prospectus of Hack Track- Award Winning Hands on Workshop on Ethical Hacking and Information Security in association with Sunny Vaghela, Director & CTO of TechDefenceacross India.</span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Level 1</span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Wireless and Web application Hacking & Security</span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Android Hacking and security</span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Google & email hacking</span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Cyber forensics</span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Investigation Methodologies & Cyber Forensics</span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Reverse Engineering</span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Level 2</span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Info gathering using Linux</span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Windows memory management</span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Assembly language basics</span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Buffer overflows</span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Metasploitframe Work</span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >For detailed content kindly click here:</span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >(provide the link for the course modules which is given in the proposal)</span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ></span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >About Trainer: Sunny Vaghela (Director & CTO,TechDefence) - </span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Sunny Vaghela is 23 year old renowned Ethical Hacker & has wide experience in the field of Ethical Hacking,Cyber Crime Investigation & Forensics. At the age of 18, Sunny found many loopholes in SMS & VoIP Technology.At 19,Sunny has found loopholes like 'Session Hijacking' & 'Cross Site Scripting' in popular social networking website orkut.com.At 20, He has solved more than 16 cases in association with Crime Branch,Ahmedabad.Sunny Vaghela has also been awarded by Rajiv Gandhi Young Achievers Award as IT Expert of Gujarat.He traced out origin of Terror Email Trail of Ahmedabad Serial Bomb Blasts. He also helped Mumbai Police to get information on “jamat ud dawah” after Mumbai Terror Attacks.He has addressed more than 160 IT security conferences/Workshops at National & International Level across Globe.He has trained professionals from many reputed Companies like Google,Yahoo!,ISACA,Temenos,ZOHO, Deloitte,K7 Antivirus,TCS,HCL,Sify & many Banks of India. He is founder & Chief Technical Officer of TechDefence which is rapidly growing IT Security Training & Consulting Organization focusing on Cyber Crime Investigation,Cyber Law Consulting,Vulnerability Assessment & Penetration Testing.He is recently acknowledged by Microsoft for finding & reporting Vulnerabilities on Microsoft Online Services and now Listed in Microsoft Security Researcher List. To know more visit www.sunnyvaghela.com</span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Workshop Package Includes:</span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ></span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Workshop participation fee</span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >TechDefence Ethical Hacking toolkit fee</span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >CEHE certification fee</span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >HackTrack Portal Access for 2 years.(www.hacktrack.co.in)</span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ></span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >HackTrack Portal Features:</span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ></span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Query support to all workshop participants.</span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Access to Online competition after the workshop in order to select topper of workshop.</span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Access to monthly competitions different tasks and challenges.</span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Access to Webinars on New tools/Techniques/Exploits/Vulnerabilities.</span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Internship/career opportunities from TechDefence associates & partners</span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Weekly newsletters.</span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Resume submission </span><span id="blockGen520" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabs63_register">
<span id="blockGen522" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen523' style='background: rgba(231,248,223,0.8);'><img src="static/Icons_Final/AUGMENTED.png" width='250px'/></span><br />
<span id='blockGen524' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(228,228,243,0.8);' onclick='register_single_event(64)'><h3>Register</h3></span>
<span id='blockGen525' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(210,237,222,0.8);' onclick='getPage("Augmented_Reality","Augmented_Reality_Description")'><h3>Description</h3></span>
<span id='blockGen526' style='width:220px;padding: 15px;border-radius:20px;background: rgba(246,207,235,0.8);'><h3>Contact: Manasij(+91 9738731680)</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupAugmented_Reality">
<span id = "tabsAugmented_Reality_Description">
<span id="blockGen527" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen529" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
 You've all heard of Pranav Mistry who is hugely popular as a connoisseur of this field. In this workshop you will learn to control robots with the movement of your hand. This workshop will be conducted by Frugal Labs who are based in Bangalore.			Registration Fee:  Rs 4250/ team.</br> Each team can have a maximum of 5 members (850/head).</br> A kit will be provided to each team.</span><span id="blockGen528" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >	
</span>
</span>
<span id = "tabs64_register">
<span id="blockGen530" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen531'><button class='button1' style='border-radius: 0%;width: 250px;height: 250px;background: rgba(241,234,229,0.8);'><h1 style='text-align:center;font-family: acens;'>3D Photography</h1></button></span><br />
<span id='blockGen532' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(232,227,220,0.8);' onclick='register_single_event(68)'><h3>Register</h3></span>
<span id='blockGen533' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(210,234,232,0.8);' onclick='getPage("3D_Photography","3D_Photography_Description")'><h3>Description</h3></span>
<span id='blockGen534' style='width:220px;padding: 15px;border-radius:20px;background: rgba(230,205,227,0.8);'><h3>Contact: Manasij(+91 9738731680)</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroup3D_Photography">
<span id = "tabs3D_Photography_Description">
<span id="blockGen535" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen537" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
 For those of you interested in photography and fascinated by how 3D photography works, this is the workshop you should look forward to. The workshop will involve you going around the campus and taking photographs. This will be followed by a session in the lab where you will be stitching and transforming these images. 3D glasses are a part of the registration fee.</br>Registration Fee:  Rs 300/ person</span><span id="blockGen536" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabs68_register">
<span id="blockGen538" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen539' style='background: rgba(242,235,233,0.8);'><img src="static/Icons_Final/RC_Aircraft.png" width='250px'/></span><br />
<span id='blockGen540' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(227,200,211,0.8);' onclick='register_single_event(65)'><h3>Register</h3></span>
<span id='blockGen541' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(215,235,216,0.8);' onclick='getPage("RC_Aircraft_Design_and_Fabrication","RC_Aircraft_Design_and_Fabrication_Workshop Details")'><h3>Workshop Details</h3></span>
<span id='blockGen542' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(233,210,243,0.8);' onclick='getPage("RC_Aircraft_Design_and_Fabrication","RC_Aircraft_Design_and_Fabrication_Workshop Specialties")'><h3>Workshop Specialties</h3></span>
<span id='blockGen543' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(215,223,234,0.8);' onclick='getPage("RC_Aircraft_Design_and_Fabrication","RC_Aircraft_Design_and_Fabrication_Description")'><h3>Description</h3></span>
<span id='blockGen544' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(222,230,209,0.8);' onclick='getPage("RC_Aircraft_Design_and_Fabrication","RC_Aircraft_Design_and_Fabrication_Kit Contents")'><h3>Kit Contents</h3></span>
<span id='blockGen545' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(226,236,228,0.8);' onclick='getPage("RC_Aircraft_Design_and_Fabrication","RC_Aircraft_Design_and_Fabrication_Workshop Structure")'><h3>Workshop Structure</h3></span>
<span id='blockGen546' style='width:220px;padding: 15px;border-radius:20px;background: rgba(234,247,248,0.8);'><h3>Contact: Manasij(+91 9738731680)</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupRC_Aircraft_Design_and_Fabrication">
<span id = "tabsRC_Aircraft_Design_and_Fabrication_Workshop Details">
<span id="blockGen547" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen549" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
 </span><span id="blockGen548" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Duration:  2 days (8 hours per day) </span><span id="blockGen548" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Date:  25 Oct - 27 Oct 2013 </span><span id="blockGen548" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Organizers: AerotriX </span><span id="blockGen548" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Cost: Rs 7500/- per team for the standard kit and Rs 12500/- for the complete kit. </span><span id="blockGen548" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Participants can register in team containing maximum of 5 members </span><span id="blockGen548" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Visit www.aerotrix.com for further details </span><span id="blockGen548" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Write to us at info@aerotrix.com for further queries or information
</span>
</span>
<span id = "tabsRC_Aircraft_Design_and_Fabrication_Workshop Specialties">
<span id="blockGen550" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen552" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
<b>Workshop Specialties</b>:  • No pre-designed kits are given to participants. Participants design their own aircrafts (using hand calculation and software) under the guidance of our professionals which are later fabricated by them. </span><span id="blockGen551" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >• The workshop is organized personally by IIT Kanpur Aerospace Engineering Graduates 
</span>
</span>
<span id = "tabsRC_Aircraft_Design_and_Fabrication_Description">
<span id="blockGen553" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen555" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
The knack to flying is learning how to throw yourself at the ground and miss </span><span id="blockGen554" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >-Douglas Adams </span><span id="blockGen554" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > At the dawn of the twentieth century, having explored and conquered all land, man turned his eyes skywards. For much of history he has been trying to conquer this seemingly unbeatable foe. The skies continued to elude him until finally, the Wright brothers finally conquered the skies one windy morning in the winter of 1903. Since then the aircraft industry has exploded, and aero planes have captured the imagination of the human race.</span><span id="blockGen554" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > This workshop by <a href='http://www.aerotrix.com/'' target='_blank' ><b>AerotriX</b></a> gives the participants an opportunity to understand the theory behind the functioning of aircrafts and aircraft design. It makes the participants innovate by coming up with their own design of mini aircrafts and fabricating them as per their design. This workshop takes the participants through a series of interactive lectures and design sessions supplemented by practical sessions, thereby providing a complete learning experience.</span><span id="blockGen554" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Video: <a href='http://www.youtube.com/watch?v=gyL7bv9RGRU' target='_blank' >http://www.youtube.com/watch?<wbr>v=gyL7bv9RGRU</a> 
</span>
</span>
<span id = "tabsRC_Aircraft_Design_and_Fabrication_Kit Contents">
<span id="blockGen556" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen558" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
• Hardware • Engine/ Electric Motor * • Electric Motor Controller * • Propeller * </span><span id="blockGen557" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > • Transmitter * • Receiver * • Li-Po battery * • Servo motors (3 pieces) * </span><span id="blockGen557" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > • Landing Gear ( main and tail dragger) • Wheels (2 pieces) • Coroplast • Styrofoam </span><span id="blockGen557" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > • Control Rods • Epoxy Glue • Wing Holders • Working Tools ^ </span><span id="blockGen557" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > • Other miscellaneous items The parts marked * are not part of standard kit. These components would be provided during the workshop but would be taken back after the workshop. This is being done to reduce the cost of the workshop and make it affordable for students who do not want to buy the complete kit. </span><span id="blockGen557" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Complete kit consists of all the above items excluding transmitter and receiver </span><span id="blockGen557" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > ^working tools would be taken back after workshop </span><span id="blockGen557" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Software </span><span id="blockGen557" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > • Software used to design and test RC planes • RC Simulator • RC Flying Tutorials and videos </span><span id="blockGen557" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Other Material </span><span id="blockGen557" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >• Booklet on Aircraft Maintenance • Booklet on aerobatic maneuvers 
</span>
</span>
<span id = "tabsRC_Aircraft_Design_and_Fabrication_Workshop Structure">
<span id="blockGen559" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen561" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
The workshop is divided into 4 modules: • Understanding Flight </span><span id="blockGen560" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >• Design of Aircraft </span><span id="blockGen560" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > • Fabrication of Aircraft </span><span id="blockGen560" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >• Flying using Remote Control </span><span id="blockGen560" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Three awards will be given to the participating teams in terms of Best Design, Best Fabrication and Innovation. The names of the recipients will be put up on our website permanently and they will also be provided with certificate of merit. For our previous workshops awards, check www.aerotrix.com/participant-awards
</span>
</span>
<span id = "tabs65_register">
<span id="blockGen562" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen563' style='background: rgba(223,239,212,0.8);'><img src="static/Icons_Final/ROBOTICS.png" width='250px'/></span><br />
<span id='blockGen564' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(241,233,250,0.8);' onclick='register_single_event(66)'><h3>Register</h3></span>
<span id='blockGen565' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(206,216,234,0.8);' onclick='getPage("Humanoid_Robot","Humanoid_Robot_Description")'><h3>Description</h3></span>
<span id='blockGen566' style='width:220px;padding: 15px;border-radius:20px;background: rgba(219,248,219,0.8);'><h3>Contact: Manasij(+91 9738731680)</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupHumanoid_Robot">
<span id = "tabsHumanoid_Robot_Description">
<span id="blockGen567" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen569" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
 You've been seeing videos of robots which walk, fight and even play football. However, workshops generally don't teach you to build such amazing robots. For the very first time in Engineer we will be conducting a workshop where we will be building a bipedal robot which can perform the above tasks. The workshop will be conducted by Frugal Labs who are based in Bangalore.</br>			Registration Fee:  Rs 7000/ team. </br>Each team can have a maximum of 5 members (1400/head). A kit will be provided to each team.</span><span id="blockGen568" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >	
</span>
</span>
<span id = "tabs66_register">
<span id="blockGen570" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen571' style='background: rgba(228,218,230,0.8);'><img src="static/Icons_Final/Android.png" width='250px'/></span><br />
<span id='blockGen572' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(250,231,246,0.8);' onclick='register_single_event(67)'><h3>Register</h3></span>
<span id='blockGen573' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(218,209,227,0.8);' onclick='getPage("Android Application Development","Android Application Development_Workshop Details")'><h3>Workshop Details</h3></span>
<span id='blockGen574' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(237,211,229,0.8);' onclick='getPage("Android Application Development","Android Application Development_Description")'><h3>Description</h3></span>
<span id='blockGen575' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(223,249,209,0.8);' onclick='getPage("Android Application Development","Android Application Development_Other Material")'><h3>Other Material</h3></span>
<span id='blockGen576' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(211,221,207,0.8);' onclick='getPage("Android Application Development","Android Application Development_Workshop Specialities")'><h3>Workshop Specialities</h3></span>
<span id='blockGen577' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(246,248,202,0.8);' onclick='getPage("Android Application Development","Android Application Development_Workshop structure")'><h3>Workshop structure</h3></span>
<span id='blockGen578' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(240,218,202,0.8);' onclick='getPage("Android Application Development","Android Application Development_Software")'><h3>Software</h3></span>
<span id='blockGen579' style='width:220px;padding: 15px;border-radius:20px;background: rgba(245,244,206,0.8);'><h3>Contact: Manasij(+91 9738731680)</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupAndroid Application Development">
<span id = "tabsAndroid Application Development_Workshop Details">
<span id="blockGen580" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen582" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
<b>Duration</b>: 2 days (8 hours per day)</span><span id="blockGen581" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Date</b>: <b> 26 Oct - 27 Oct 2013</b></span><span id="blockGen581" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Organizers</b>: Code Instruct</span><span id="blockGen581" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Cost</b>: Rs 1200/- per participant</span><span id="blockGen581" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabsAndroid Application Development_Description">
<span id="blockGen583" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen585" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
This workshop by <b>Code Instruct</b> gives the participants an opportunity to understand the theory behind the Android Operating System, Android SDK and different Libraries. It makes the participants innovate by coming up with their own app ideas. This workshop takes the participants through a series of interactive lectures and coding sessions, thereby providing a complete learning experience.
</span>
</span>
<span id = "tabsAndroid Application Development_Other Material">
<span id="blockGen586" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen588" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Booklet on Introduction to Android</span><span id="blockGen587" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Sample Applications in Android (Source Code)</span><span id="blockGen587" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabsAndroid Application Development_Workshop Specialities">
<span id="blockGen589" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen591" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
<i>Interactive Lecture Sessions</i></span><span id="blockGen590" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><i>Hands on development of Android applications using industry standard tools</i></span><span id="blockGen590" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><i>The workshop is organized personally by IIT Kanpur Computer Science and Engineering Graduates</i></span><span id="blockGen590" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabsAndroid Application Development_Workshop structure">
<span id="blockGen592" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen594" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Introduction to Mobile Application Development</span><span id="blockGen593" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Role of Android in mobile industry</span><span id="blockGen593" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Introduction to Android SDK and its setup</span><span id="blockGen593" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Building the Application Framework</span><span id="blockGen593" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Designing User Interfaces</span><span id="blockGen593" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Working with activities</span><span id="blockGen593" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Working with Resources, Intents, Widgets</span><span id="blockGen593" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Adding network support to the Application</span><span id="blockGen593" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Examples apps: Calculator, Music Player and Battery Widget</span><span id="blockGen593" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Publishing Application into Play Store</span><span id="blockGen593" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Awards will be given to the participants, who develop innovative and interesting apps. The names of the recipients will be put up on our website permanently and they will also be provided with certificate of merit.</span><span id="blockGen593" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabsAndroid Application Development_Software">
<span id="blockGen595" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen597" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Software used to design and develop Android Applications</span><span id="blockGen596" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Eclipse IDE</span><span id="blockGen596" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Android SDK
</span>
</span>
<span id = "tabs67_register">
<span id="blockGen598" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen599' style='background: rgba(205,250,221,0.8);'><img src="static/Icons_Final/Bridge_design.png" width='250px'/></span><br />
<span id='blockGen600' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(219,235,240,0.8);' onclick='register_single_event(69)'><h3>Register</h3></span>
<span id='blockGen601' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(225,242,204,0.8);' onclick='getPage("Bridge_Design_and_Fabrication","Bridge_Design_and_Fabrication_Course Details")'><h3>Course Details</h3></span>
<span id='blockGen602' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(246,247,207,0.8);' onclick='getPage("Bridge_Design_and_Fabrication","Bridge_Design_and_Fabrication_Awards")'><h3>Awards</h3></span>
<span id='blockGen603' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(225,220,241,0.8);' onclick='getPage("Bridge_Design_and_Fabrication","Bridge_Design_and_Fabrication_Description")'><h3>Description</h3></span>
<span id='blockGen604' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(250,240,238,0.8);' onclick='getPage("Bridge_Design_and_Fabrication","Bridge_Design_and_Fabrication_Course Content")'><h3>Course Content</h3></span>
<span id='blockGen605' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(202,246,242,0.8);' onclick='getPage("Bridge_Design_and_Fabrication","Bridge_Design_and_Fabrication_Workshop structure")'><h3>Workshop structure</h3></span>
<span id='blockGen606' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(230,244,228,0.8);' onclick='getPage("Bridge_Design_and_Fabrication","Bridge_Design_and_Fabrication_Outcomes")'><h3>Outcomes</h3></span>
<span id='blockGen607' style='width:220px;padding: 15px;border-radius:20px;background: rgba(234,242,217,0.8);'><h3>Contact: Manasij(+91 9738731680)</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupBridge_Design_and_Fabrication">
<span id = "tabsBridge_Design_and_Fabrication_Course Details">
<span id="blockGen608" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen610" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Duration: 1 day</span><span id="blockGen609" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Date: 24 October 2013</span><span id="blockGen609" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Organizers: Civil Simplified</span><span id="blockGen609" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Cost: Rs.950 per participant. 2 participants will be clubbed into a team during practical session. One team will design and make one bridge.</span><span id="blockGen609" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabsBridge_Design_and_Fabrication_Awards">
<span id="blockGen611" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen613" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
<b>Best Design Award</b>: To the team which builds the bridge with maximum efficiency</span><span id="blockGen612" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Best Fabrication Award</b>: To the team which fabricates the bridge perfectly</span><span id="blockGen612" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Best Innovation Award</b>: To the team which comes up with an innovative truss</span><span id="blockGen612" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabsBridge_Design_and_Fabrication_Description">
<span id="blockGen614" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen616" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
This workshop is a part of the <b>Civil Simplified Bridge Design Challenge</b> in association with <b>Technex'14</b>, the annual Techno-Management Festival of <b>IIT BHU (Varanasi)</b>. Please visit <a href='http://www.civilsimplified.com/bridgedesign-challenge' target='_blank' >www.civilsimplified.com/bridgedesign-challenge</a> for more details <br />Content designed, developed and delivered by IIT Kanpur graduates</span><span id="blockGen615" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabsBridge_Design_and_Fabrication_Course Content">
<span id="blockGen617" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen619" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Introduction to different types of existing bridges</span><span id="blockGen618" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Structural response to moving loads</span><span id="blockGen618" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Methods of analysis of a truss bridge</span><span id="blockGen618" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >IRC code specifications</span><span id="blockGen618" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Segmental Bridge Construction techniques</span><span id="blockGen618" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Pre stressed box girder design</span><span id="blockGen618" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Statically determinate and indeterminate structures</span><span id="blockGen618" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Fabrication techniques for model bridge according to problem statement</span><span id="blockGen618" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabsBridge_Design_and_Fabrication_Workshop structure">
<span id="blockGen620" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen622" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
The workshop has the following modules:</span><span id="blockGen621" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Lecture</b>: Introduction to bridge design and working of different types of bridges</span><span id="blockGen621" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Design session</b>: Each team will design their own bridge using a simulator</span><span id="blockGen621" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Fabrication</b>: With the design obtained in the design session and the raw material provided by us each team will fabricate their own model bridge</span><span id="blockGen621" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Testing</b>: Each bridge fabricated by the teams will be tested for maximum load taken</span><span id="blockGen621" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabsBridge_Design_and_Fabrication_Outcomes">
<span id="blockGen623" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen625" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Certificate of participation from Civil Simplified to all the participants</span><span id="blockGen624" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Career Guidance and Counseling by IIT alumni</span><span id="blockGen624" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Better Chances to pursue higher education in IITs/Universities abroad</span><span id="blockGen624" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Useful to develop good B.Tech/M.Tech projects</span><span id="blockGen624" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabs69_register">
<span id="blockGen626" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen627' style='background: rgba(220,246,232,0.8);'><img src="static/Icons_Final/mindbend.png" width='250px'/></span><br />
<span id='blockGen628' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(219,216,250,0.8);' onclick='register_single_event(45)'><h3>Register</h3></span>
<span id='blockGen629' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(246,202,219,0.8);' onclick='getPage("MindBend","MindBend_ROUND 4")'><h3>ROUND 4</h3></span>
<span id='blockGen630' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(237,234,210,0.8);' onclick='getPage("MindBend","MindBend_ROUND 3")'><h3>ROUND 3</h3></span>
<span id='blockGen631' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(230,230,248,0.8);' onclick='getPage("MindBend","MindBend_ROUND 2")'><h3>ROUND 2</h3></span>
<span id='blockGen632' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(234,231,250,0.8);' onclick='getPage("MindBend","MindBend_ROUND 1")'><h3>ROUND 1</h3></span>
<span id='blockGen633' style='width:220px;padding: 15px;border-radius:20px;background: rgba(248,206,250,0.8);'><h3>Contact: B. THEJA<br/>+919480435585<br/>bnmtheja@gmail.com<br/>Padmini M<br/>+918123463865<br/>pm27178@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupMindBend">
<span id = "tabsMindBend_ROUND 4">
<span id="blockGen634" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen636" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
<b>RAPIDO</b></span><span id="blockGen635" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >DESCRIPTION OF THE GAME:</span><span id="blockGen635" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- 5 rapid fire questions for each participant.</span><span id="blockGen635" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >RULES:</span><span id="blockGen635" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- No repetition of the questions.</span><span id="blockGen635" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >JUDGEMENT CRITERIA:</span><span id="blockGen635" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- Each correct answer will carry 20 points.</span><span id="blockGen635" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- Total points for this round are 100.</span><span id="blockGen635" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- There will be no negative marking for this round
</span>
</span>
<span id = "tabsMindBend_ROUND 3">
<span id="blockGen637" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen639" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
<b>SOUNDTRACK</b></span><span id="blockGen638" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >DESCRIPTION OF THE GAME:</span><span id="blockGen638" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- A one minute audio/ video clip would be listened/ shown to each team respectively;</span><span id="blockGen638" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- Team has to identify the theme of the audio/ video.</span><span id="blockGen638" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >RULES:</span><span id="blockGen638" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- There should be no repetition.</span><span id="blockGen638" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- 20 points for correct answer.</span><span id="blockGen638" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- Total points for this round are 40.</span><span id="blockGen638" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >TIME DURATION:</span><span id="blockGen638" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- For audio &ndash; Max. 30 seconds.</span><span id="blockGen638" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- For video - According to the length of the video</span><span id="blockGen638" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >JUDGEMENT CRITERIA:</span><span id="blockGen638" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- Time limit for thinking about the audio/ video should not be exceeding more than 15 seconds.</span><span id="blockGen638" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- There will be negative marking system for this round.</span><span id="blockGen638" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- Penalty of 10 points for incorrect answer.
</span>
</span>
<span id = "tabsMindBend_ROUND 2">
<span id="blockGen640" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen642" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
<b> DOUBLE TROUBLE</b></span><span id="blockGen641" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >DESCRIPTION OF THE GAME:</span><span id="blockGen641" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- Teams have to identify the shown images along with their background/specialty.</span><span id="blockGen641" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >e.g.: If the given image is about the car, then participants should identify the manufacturer company of the car as well as the model of the car. </span><span id="blockGen641" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >RULES:</span><span id="blockGen641" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- There should be no repetition.</span><span id="blockGen641" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- Each correct answer will carry 20 points.</span><span id="blockGen641" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- Total points for this round are 60.</span><span id="blockGen641" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >TIME DURATION:</span><span id="blockGen641" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- 10 Seconds per image.</span><span id="blockGen641" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >JUDGEMENT CRITERIA:</span><span id="blockGen641" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- Points would be allotted for both identification of image and its background or specialty.</span><span id="blockGen641" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- 10 points would be allotted for at least single identification of the image.</span><span id="blockGen641" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- There will be a negative marking system in this round.</span><span id="blockGen641" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- 10 points will be deducted for each incorrect answer.</span><span id="blockGen641" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- If one team is unable to identify the image, then it will be forward to next team.</span><span id="blockGen641" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- If the next team gives the correct answer, bonus of 5 points will be awarded, and </span><span id="blockGen641" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >if the respective team fails to answer correctly, then there will be a penalty of 10 points.
</span>
</span>
<span id = "tabsMindBend_ROUND 1">
<span id="blockGen643" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen645" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
<b>REMINDER</b></span><span id="blockGen644" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >DESCRIPTION OF THE GAME:</span><span id="blockGen644" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- 10 minutes to solve the 15 multiple choice questions.</span><span id="blockGen644" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >RULES:</span><span id="blockGen644" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- Each correct answer will carry 10 points.</span><span id="blockGen644" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- Total points for this round are 150.</span><span id="blockGen644" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- There will be no negative marking system for this round.</span><span id="blockGen644" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >TIME DURATION:</span><span id="blockGen644" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- 10 Minutes.</span><span id="blockGen644" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >JUDGEMENT CRITERIA:</span><span id="blockGen644" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- Points would not be awarded for more than one answer
</span>
</span>
<span id = "tabs45_register">
<span id="blockGen646" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen647' style='background: rgba(212,221,201,0.8);'><img src="static/Icons_Final/HR.png" width='250px'/></span><br />
<span id='blockGen648' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(217,238,241,0.8);' onclick='register_single_event(60)'><h3>Register</h3></span>
<span id='blockGen649' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(233,212,240,0.8);' onclick='getPage("HR_Event","HR_Event_Description")'><h3>Description</h3></span>
<span id='blockGen650' style='width:220px;padding: 15px;border-radius:20px;background: rgba(242,248,215,0.8);'><h3>Contact: Salman - 08904390686<br/>\ Aditya - 07353643231</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupHR_Event">
<span id = "tabsHR_Event_Description">
<span id="blockGen651" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen653" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
<table border="1" cellspacing="0" cellpadding="0" width="600">        <tr>            <td>                    <strong>Rounds</strong>            </td>            <td>                    <strong>Name</strong>            </td>            <td>                    <strong>Tag Line</strong>            </td>        </tr>        <tr>            <td>                    1            </td>            <td>                    Quiz &amp; Crossword            </td>            <td>                    When you know better you do better            </td>        </tr>        <tr>            <td>                    2            </td>            <td>                    Conception            </td>            <td>                    Change the way you look at things and the things you look at change            </td>        </tr>        <tr>            <td>                    3            </td>            <td>                    Survival of D fittest            </td>            <td>                    Fight to Fit, Survive to Succeed            </td>        </tr>        <tr>            <td>                    4            </td>            <td>                    Face off            </td>            <td>                    Never wear a backward baseball cap to an interview unless applying for the job of umpire<strong></strong>            </td>        </tr>        <tr>            <td>                    5            </td>            <td>                    The Jaws            </td>            <td>                    It’s not stress that kills us; it is our reaction to it            </td>        </tr></table>
</span>
</span>
<span id = "tabs60_register">
<span id="blockGen654" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen655' style='background: rgba(238,245,246,0.8);'><img src="static/Icons_Final/MARKENZA.png" width='250px'/></span><br />
<span id='blockGen656' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(241,214,228,0.8);' onclick='register_single_event(38)'><h3>Register</h3></span>
<span id='blockGen657' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(214,226,203,0.8);' onclick='getPage("Markenza","Markenza_Description")'><h3>Description</h3></span>
<span id='blockGen658' style='width:220px;padding: 15px;border-radius:20px;background: rgba(239,225,222,0.8);'><h3>Contact: Salman Usman <br/>salman.usman91@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupMarkenza">
<span id = "tabsMarkenza_Description">
<span id="blockGen659" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen661" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
<table border="1" cellspacing="0" cellpadding="0" width="600">        <tr>            <td >                    <strong>Sr. No.</strong>            </td>            <td  >                    <strong>NAME OF THE ROUND</strong>            </td>            <td  >                    <strong>TAGLINE</strong>            </td>            <td  >                    <strong>DESCRIPTION</strong>            </td>        </tr>        <tr>            <td  colspan="4" >                    Round – I –PRARAMBH            </td>        </tr>        <tr>            <td >                    1            </td>            <td  >                    Question answer            </td>            <td  >                    “The roughest roads often lead to the top.”            </td>            <td  >                    Each team will be asked questions with respect to the marketing            </td>        </tr>        <tr>            <td  colspan="4" >                    Round – II- In-sell-sane            </td>        </tr>        <tr>            <td >                    2            </td>            <td  >                    Selling Concept            </td>            <td  >                    “The only way to discover the limits of the possible is to go beyond them into the impossible.”            </td>            <td  >                    Each team will be given a product to design the selling strategy to sell the product.            </td>        </tr>        <tr>            <td  colspan="4" >                    Round – III- Mad Ad            </td>        </tr>        <tr>            <td >                    3            </td>            <td  >                    Advertising (Based on 2nd round product)            </td>            <td  >                    “Nobody counts the number of ads you run; they just remember the impression you make.”            </td>            <td  >                    Each team will have to design a advertisement for the product provided in previous round.            </td>        </tr>        <tr>            <td  colspan="4" >                    Round – IV- Marketing Wizard            </td>        </tr>        <tr>            <td >                    4            </td>            <td  >            </td>            <td  >                    “ if it can be thought, it can be done, a problem can be overcome”            </td>            <td  >                    Each team will be given a non-existence product and they have to frame marketing strategy for that product.            </td>        </tr>        <tr>            <td  colspan="4" >                    Round – V- Enigma            </td>        </tr>        <tr>            <td >                    5            </td>            <td  >                    Treasure Hunt            </td>            <td  >                    “Rich the treasure,                    Sweet the pleasure”            </td>            <td  >                    Each team will be given a clue which will leads to a product.            </td>        </tr>        <tr>            <td  colspan="4" >                    Round – VI- The second coming            </td>        </tr>        <tr>            <td >                    6            </td>            <td  >                    Product re-launch            </td>            <td  >                    “Fall down seven times. Stand up eight.”            </td>            <td  >                    Each team will be given such a product which has failed in the market and they have to re-launch the product in the market with new                    marketing strategy.            </td>        </tr></table>
</span>
</span>
<span id = "tabs38_register">
<span id="blockGen662" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen663' style='background: rgba(217,201,201,0.8);'><img src="static/Icons_Final/Finance.png" width='250px'/></span><br />
<span id='blockGen664' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(208,228,240,0.8);' onclick='register_single_event(61)'><h3>Register</h3></span>
<span id='blockGen665' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(249,213,234,0.8);' onclick='getPage("Finance_Event","Finance_Event_Description")'><h3>Description</h3></span>
<span id='blockGen666' style='width:220px;padding: 15px;border-radius:20px;background: rgba(200,242,250,0.8);'><h3>Contact: Salman - 08904390686<br/>\ Aditya - 07353643231</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupFinance_Event">
<span id = "tabsFinance_Event_Description">
<span id="blockGen667" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen669" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
<div><span style="font-size:12pt;font-weight:bold;text-decoration:underline">Finanza – The Finance Event : </span><span style="font-size:12pt">The ultimate showdown of financial management skills! Do you havewhat it takes to be a finance guru?</span><span style="font-size:12pt;font-weight:bold;text-decoration:underline">Round 1-</span><span style="font-size:12pt;font-weight:bold"> <span style="font-size:12pt;text-decoration:underline">Fin IQ</span> </span><span style="font-size:12pt">Quiz to test your basic financial and economic knowledge.</span><span style="font-size:12pt;font-weight:bold;text-decoration:underline">Round 2- IPL Mock Auction</span><span style="font-size:12pt">Manage to build a sound team by managing your virtual money.</span><span style="font-size:12pt;font-weight:bold;text-decoration:underline">Round 3-Profitable path</span><span style="font-size:12pt">On the basis of certain constraints, decide the best and the most profitable path for the company.</span>&nbsp;
</span>
</span>
<span id = "tabs61_register">
<span id="blockGen670" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen671' style='background: rgba(231,214,238,0.8);'><img src="static/Icons_Final/SIMPLINEER.png" width='250px'/></span><br />
<span id='blockGen672' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(223,243,230,0.8);' onclick='register_single_event(40)'><h3>Register</h3></span>
<span id='blockGen673' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(237,236,210,0.8);' onclick='getPage("Simplineer","Simplineer_Proceedings")'><h3>Proceedings</h3></span>
<span id='blockGen674' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(245,227,208,0.8);' onclick='getPage("Simplineer","Simplineer_Description")'><h3>Description</h3></span>
<span id='blockGen675' style='width:220px;padding: 15px;border-radius:20px;background: rgba(215,239,238,0.8);'><h3>Contact: Saurabh Verma (9742091940)<br/>Sumit Bansal (9663358730)</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupSimplineer">
<span id = "tabsSimplineer_Proceedings">
<span id="blockGen676" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen677" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
<br/>• Concept will be taught to the selected teams and then teams will be tested in that area.<br/>• Top 10 teams are to be shortlisted for the event.<br/>• We have decided three events: 1 in CS, 1 in EC and 1 in Civil-cum-mech.
</span>
</span>
<span id = "tabsSimplineer_Description">
<span id="blockGen678" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen679" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
<br/>• Simplineer is a general event during Engineer spanning all branches of Engineering. It brings all the major engineering fields together and provides a common platform to young engineers to test their knowledge and skills in their respective field.<br/>• It is a team event<br/>• Teams of 3-4(from any branch or from same branch)<br/>• Event will consist of two stages<br/>• First is online test which will happen before engineer to shortlist teams. This round will consist of questions from various branches of Engineering including Electronics, Computers, Mechanical and Maths which have to be solved in a given time.<br/>• The teams shortlisted will be called for the second stage (which consists of several hands-on rounds) which will be held during Engineer.<br/>• The events will be spread over two-three days of Engineer, each round consisting of a problem statement related to a particular engineering stream. <br/>• Only one member from the team should register for the event.<br/>• Online test will be on 19th October. Test will be of 90 minutes. Teams can take test only once.<br/>• For nitk students test will be in CCC. Time will be informed later based on the registration. (tentative time 1:00 pm - 5 pm : 2 batches)<br/>• For non NITK Teams: test anytime between 10:00 am - 10:00 pm on 19th October. <br/>• Results will be declared on 20th October and teams will be informed.
</span>
</span>
<span id = "tabs40_register">
<span id="blockGen680" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen681' style='background: rgba(242,250,222,0.8);'><img src="static/Icons_Final/IDP.png" width='250px'/></span><br />
<span id='blockGen682' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(210,201,249,0.8);' onclick='register_single_event(32)'><h3>Register</h3></span>
<span id='blockGen683' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(249,247,204,0.8);' onclick='getPage("Industry_Defined_Problem","Industry_Defined_Problem_Description")'><h3>Description</h3></span>
<span id='blockGen684' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(244,201,201,0.8);' onclick='getPage("Industry_Defined_Problem","Industry_Defined_Problem_Problem Statement")'><h3>Problem Statement</h3></span>
<span id='blockGen685' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(235,234,238,0.8);' onclick='getPage("Industry_Defined_Problem","Industry_Defined_Problem_Rules_and_Regulations")'><h3>Rules_and_Regulations</h3></span>
<span id='blockGen686' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(239,221,239,0.8);' onclick='getPage("Industry_Defined_Problem","Industry_Defined_Problem_Rounds")'><h3>Rounds</h3></span>
<span id='blockGen687' style='width:220px;padding: 15px;border-radius:20px;background: rgba(250,234,207,0.8);'><h3>Contact: Ramya<br/>sra.10ch36@nitk.edu.in <br/> 9538703009</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupIndustry_Defined_Problem">
<span id = "tabsIndustry_Defined_Problem_Description">
<span id="blockGen688" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen690" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Industry Defined Problem is the epitome of real, applied engineering. Aiming to bridge the gap between theory and practice by challenging engineers to come up with innovative and creative solutions to crucial real life industrial problems IDP has been serving as a platform for budding engineers to interact with experts from premier industries around the country, and has been well appreciated by the faculty and students alike. <br />Industry-Institute interaction is vital for the development of any engineering student. This event is the ideal eye-opener for them to apply their skills and knowledge and come up with creative solutions to problems posed by the industry. In this event, a renowned Chemical firm puts forward a technical problem which they are facing. The problem may be either recurring one or a one off issue. . The participants are expected to come up with innovative &amp; economically feasible solutions that can be assimilated in the company&rsquo;s process.<br />The previous editions had us collaborating with the likes of Mangalore Refinery and Petrochemicals Limited (MRPL), Mangalore Chemical and Fertilizers (MCF) and other esteemed companies. <br />So what are you thinking of?<br />Come, participate and get to interact with and thereby learn from the professionals!<br />Engineer 2013, the expectations get bigger and the stakes higher! <br />We will get back to you with further details. Stay updated. <br />
</span>
</span>
<span id = "tabsIndustry_Defined_Problem_Problem Statement">
<span id="blockGen691" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen693" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
 <blockquote>“A good scientist is a person with original ideas. A good engineer is a person who makes a design that works with as few original ideas as possible. There are no prima donnas in engineering.” -Freeman Dyson</blockquote></span><span id="blockGen692" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><br /> After memorable stint with MRPL last year, we are back this year with the Industry defined problem. We are proud to have BASF as our sponsor for IDP’13. With more than 110,000 employees, six Verbund sites, approximately 380 additional production sites and headquartered in Ludwigshafen, Germany, BASF is largest chemical company in the World. BASF Mangalore is largest production site in South Asia and is involved in the production of performance chemicals (leather and textile chemicals), dispersions and paper chemicals, automotive and coil coatings and construction chemicals. </span><span id="blockGen692" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><br /> Butadiene is an unsaturated hydrocarbon which is produced by cracking naphtha. Butadiene is mainly used in the tyre, paper and plastics industry. Important characteristics of Butadiene are: highly flammable, toxic, colorless, aromatic smell.</span><span id="blockGen692" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > BASF uses 20, 20 ton tankers per month. Each of them is at 3.5 bar pressure before unloading, after which they reach 1 bar. The main aim is maximum recovery so your task is to find out the percentage recovery in each tanker, measures to recover and changes to be made to enhance recovery.<br />Come take part in this Year’s Edition of IDP, with innovative and creative solutions to the challenge posed. The stakes are Higher!!</span><span id="blockGen692" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><a href='./data/IDP.pdf'>Download</a>
</span>
</span>
<span id = "tabsIndustry_Defined_Problem_Rules_and_Regulations">
<span id="blockGen694" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen696" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
  A team can have a maximum of 4 people.  All members of the team are to be enrolled as students in an educational institute.  No person can be a part of more than 1 team.  </span><span id="blockGen695" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >There is no restriction on the number of people participating from a particular institute. </span><span id="blockGen695" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Cash prize of 30K for this event alone !!
</span>
</span>
<span id = "tabsIndustry_Defined_Problem_Rounds">
<span id="blockGen697" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen699" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
First(Abstract for the event): A brief write up about the solution to the problem posed by 18th.</span><span id="blockGen698" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Second : Selected groups will present their solutions in the form of a PPT in front of a panel from the industry on 25th .
</span>
</span>
<span id = "tabs32_register">
<span id="blockGen700" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideContraption'>
<span id='blockGen701'><button class='button1' style='border-radius: 0%;width: 250px;height: 250px;background: rgba(248,237,250,0.8);'><h1 style='text-align:center;font-family: acens;'>Contraption</h1></button></span><br />
<span id='blockGen702' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(247,208,217,0.8);' onclick='register_single_event(70)'><h3>Register</h3></span>
<span id='blockGen703' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(225,223,212,0.8);' onclick='getPage("Contraption","Contraption_Introduction")'><h3>Introduction</h3></span>
<span id='blockGen704' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(230,215,208,0.8);' onclick='getPage("Contraption","Contraption_Problem Statement")'><h3>Problem Statement</h3></span>
<span id='blockGen705' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(218,200,248,0.8);' onclick='getPage("Contraption","Contraption_Rules")'><h3>Rules</h3></span>
<span id='blockGen706' style='width:220px;padding: 15px;border-radius:20px;background: rgba(240,247,229,0.8);'><h3>Contact: Ramya<br/>sra.10ch36@nitk.edu.in <br/> 9538703009</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupContraption">
<span id = "tabsContraption_Introduction">
<span id="blockGen707" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen709" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Even during these modern days when ships are equipped with advanced technological devices, oil spills continue to be a major threat to the marine environment. With vast number of people dependant on coastal areas for fishing and tourism throughout the world, consequences of oil spills can be serious. Oil companies and ship builders shoulder the responsibility to prevent these disasters. Most man made oil pollution comes from land based activities. But public attention tends to focus more sharply on sea going oil tankers. In general, lighter refined petroleum products like diesel and gasoline are more likely to mix in water and are more toxic to marine life. These products evaporate quickly and do not persist long in the environment. However, heavier crude oil of less toxicity can remain on water surface for much longer period. As oil is lighter than water and doesn&rsquo;t decompose, it will remain on the surface for a very long time. As it is flammable, spills can also fuel ocean fires. <br />For this year&rsquo;s edition of Engineer, Contraption provides an opportunity for participants to furnish innovative solutions for oil spills on a miniature scale, based on the criteria in Problem Statement.<br />
</span>
</span>
<span id = "tabsContraption_Problem Statement">
<span id="blockGen710" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen712" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
A pond of water having an exposed surface area of 0.25 m2 is covered by a layer of oil. Participants are required to come up with a mechanism that will recover the oil layer from the water. Dimensions of the model, as viewed from above should not exceed 25 cm x 25 cm over the surface of the pond. There is no constraint on the material of construction or the height of the model.<br />
</span>
</span>
<span id = "tabsContraption_Rules">
<span id="blockGen713" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen715" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Participation will be in groups not exceeding four members. An abstract comprising of the design, operating principle, criteria such as power requirements, cost analysis etc. has to be submitted by 18th October. Shortlisted participants will be notified. Judgment will be based on factors such as rate of oil recovered, creativity, power consumption, practical application and cost of assembly of the model. Points will be cut based on fraction of water recovered along with the oil.<br />
</span>
</span>
<span id = "tabs70_register">
<span id="blockGen716" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen717' style='background: rgba(209,238,230,0.8);'><img src="static/Icons_Final/the_portal.png" width='250px'/></span><br />
<span id='blockGen718' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(249,200,240,0.8);' onclick='register_single_event(33)'><h3>Register</h3></span>
<span id='blockGen719' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(209,248,207,0.8);' onclick='getPage("The_Portal","The_Portal_Description")'><h3>Description</h3></span>
<span id='blockGen720' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(209,250,206,0.8);' onclick='getPage("The_Portal","The_Portal_FAQ")'><h3>FAQ</h3></span>
<span id='blockGen721' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(241,206,250,0.8);' onclick='getPage("The_Portal","The_Portal_Round 2")'><h3>Round 2</h3></span>
<span id='blockGen722' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(238,239,249,0.8);' onclick='getPage("The_Portal","The_Portal_Round 1")'><h3>Round 1</h3></span>
<span id='blockGen723' style='width:220px;padding: 15px;border-radius:20px;background: rgba(200,242,207,0.8);'><h3>Contact: Ramya<br/>sra.10ch36@nitk.edu.in <br/> 9538703009</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupThe_Portal">
<span id = "tabsThe_Portal_Description">
<span id="blockGen724" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen726" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Chemical process simulation software helps broaden an engineer&rsquo;s capabilities and increases productivity. It supercharges an engineer&rsquo;s efficiency when facing the toughest chemical process models or addressing day-to-day challenges. They have potential instructional value for practically all core courses, right from first year process calculations to final year design project. It integrates all the topics under one roof making it one of the most powerful tool for a process/chemical engineer. CHEMCAD is one such simulation software&#160;featuring a rich Graphical User Interface (GUI) allowing the user to understand the behaviour of the chemical systems by using rigorous models of thermodynamic processes and unit operations.<br /><br />So, We in this edition of Engineer bring to you a workshop on CHEMCAD giving you a hands-on experience with all the technical details and theory involved. No pre-requisites. This will be followed up by an exciting event based on software. Hurry up! Limited Seats! Lots of prizes at stake.<br />The event will be conducted in two rounds.<br />
</span>
</span>
<span id = "tabsThe_Portal_FAQ">
<span id="blockGen727" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen729" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
 What pre-requisites are required to attend the workshop?<br /><b>Ans</b> : None. Basics of reactors and distillation column will be covered in the theory session.</span><span id="blockGen728" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Should I get my laptop?<br /><b>Ans</b> : Yes</span><span id="blockGen728" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > What about the software and license of ChemCAD?<br /><b>Ans</b>: We will provide you the software. NITK chemical engineering department has licensed software and participants will be allowed to use the same.</span><span id="blockGen728" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > ChemCAD requires license? How can it be useful if I don’t have one?<br /><b>Ans</b>: ChemCAD is extensively used in industry as well as in research. Learning this software will give you a glimpse of how simulation works and knowing a simulating tool before graduation is always an added advantage.</span><span id="blockGen728" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > I am a first year/ second year student. I have no knowledge of reactors or distillation columns. Can I attend?<br /><b>Ans</b> : See Answer for Q. 1</span><span id="blockGen728" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > I am an out-station participant. What about my stay?<br /><b>Ans</b>: Your stay at NITK will be managed by our student hospitality team.</span><span id="blockGen728" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Who will be conducting the workshop?<br /><b>Ans</b>: Students from NITK well versed with the software will be conducting the same.</span><span id="blockGen728" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > How do I register for the workshop?<br /><b>Ans</b>: Preregister by sending a mail to sra.10ch36@nitk.edu.in.</span><span id="blockGen728" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > I am not a chemical engineer. Can I attend?<br /><b>Ans</b>: This workshop is not restricted to chemical engineers as simulation is major aspect in design, research and process industries. See Q1.</span><span id="blockGen728" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabsThe_Portal_Round 2">
<span id="blockGen730" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen732" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
 <b>Event</b><hr />A series of problem statements will have to be solved using ChemCAD in a stipulated amount of time. The questions will be based on the knowledge acquired in round 1. The criteria for judgment will depend on several factors which will be announced on the spot. In case of any discrepancies, the decision of the organizers shall be considered final.</span><span id="blockGen731" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabsThe_Portal_Round 1">
<span id="blockGen733" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen735" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
<b>Workshop</b><hr />The workshop will be held in two sessions.<br /> <b>Session 1</b>: Theory -An introductory session to give an insight of ChemCAD <br />This will comprise of a detailed explanation of various aspects of the software and its applications in real time situations like analysis of distillation tower in petroleum industry, reactor design, simulation of process flow sheets,etc.; which will be concluded by solving a few sample problems.</span><span id="blockGen734" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > <b>Session 2</b>: A hands-on session</span><span id="blockGen734" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >You will be given an opportunity to work on the software with a set of problems and get a feel of the software. Experts, well versed with the software will assist you, clear your doubts and pay individual attention.</span><span id="blockGen734" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabs33_register">
<span id="blockGen736" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen737' style='background: rgba(235,243,244,0.8);'><img src="static/Icons_Final/Chemical_Breakdown.png" width='250px'/></span><br />
<span id='blockGen738' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(225,205,205,0.8);' onclick='register_single_event(34)'><h3>Register</h3></span>
<span id='blockGen739' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(215,238,216,0.8);' onclick='getPage("Chemical_Breakdown","Chemical_Breakdown_Introduction")'><h3>Introduction</h3></span>
<span id='blockGen740' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(211,237,227,0.8);' onclick='getPage("Chemical_Breakdown","Chemical_Breakdown_rules")'><h3>rules</h3></span>
<span id='blockGen741' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(239,239,234,0.8);' onclick='getPage("Chemical_Breakdown","Chemical_Breakdown_rounds")'><h3>rounds</h3></span>
<span id='blockGen742' style='width:220px;padding: 15px;border-radius:20px;background: rgba(247,247,228,0.8);'><h3>Contact: Ramya<br/>sra.10ch36@nitk.edu.in <br/> 9538703009</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupChemical_Breakdown">
<span id = "tabsChemical_Breakdown_Introduction">
<span id="blockGen743" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen745" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
<br />&ldquo;My mind,&quot; he said, &quot;rebels at stagnation. Give me problems, give me work, give me the most abstruse cryptogram or the most intricate analysis, and I am in my own proper atmosphere. I can dispense then with artificial stimulants. But I abhor the dull routine of existence. I crave for mental exaltation. That is why I have chosen my own particular profession, or rather created it, for I am the only one in the world.&rdquo;&#160;<br />&#8213;&#160;Arthur Conan Doyle,&#160;The Sign of Four<br /><br /><br /> Here&rsquo;s a call to all those curious minds waiting to try something new, BREAKDOWN, where you can unleash your imagination and basic science, laboratory skills and indulge in the world of basic chemistry. Don the role of a lab geek,&#160;play with the uncanniest concoctions, prepare the fanciest potions and&#160;race against the clock to figure out the Chemical X through a series of weirdest cases and mind boggling puzzles.<br />Push the lizard Brain of yours to the maximum!<br />
</span>
</span>
<span id = "tabsChemical_Breakdown_rules">
<span id="blockGen746" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen748" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
A team can have a maximum of 2 people.<br />All members of the team are to be enrolled as students in an educational institute.<br />No person can be a part of more than 1 team.<br />There is no restriction on the number of people participating from a particular institute.<br />
</span>
</span>
<span id = "tabsChemical_Breakdown_rounds">
<span id="blockGen749" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen751" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
The First round will comprise of a Written Quiz testing concepts of +2 Level Chemistry and logical reasoning.<br />Around 10 teams will be selected to the next round who will get to work on an exciting puzzle set up based on a storyline.<br />This being a spot event, the problem statement will be released on the event day itself.<br />
</span>
</span>
<span id = "tabs34_register">
<span id="blockGen752" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen753' style='background: rgba(202,228,219,0.8);'><img src="static/Icons_Final/INSCRIPTION.png" width='250px'/></span><br />
<span id='blockGen754' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(242,242,213,0.8);' onclick='register_single_event(54)'><h3>Register</h3></span>
<span id='blockGen755' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(228,202,244,0.8);' onclick='getPage("Inscription","Inscription_Description")'><h3>Description</h3></span>
<span id='blockGen756' style='width:220px;padding: 15px;border-radius:20px;background: rgba(223,246,225,0.8);'><h3>Contact: Syed Rahi(9880016036) <br/>srsyedrahi@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupInscription">
<span id = "tabsInscription_Description">
<span id="blockGen757" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen759" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Inscription is the international online programming contest of Engineer.</span><span id="blockGen758" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The contest will consist of a set of challenging problems to which solutions need to be submitted which adhere to time constraints. Programming, debugging and fine-tuning skills are tested to the very hilt.</span><span id="blockGen758" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Teams of 3.</b>
</span>
</span>
<span id = "tabs54_register">
<span id="blockGen760" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen761' style='background: rgba(235,221,240,0.8);'><img src="static/Icons_Final/ECTF.png" width='250px'/></span><br />
<span id='blockGen762' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(212,207,214,0.8);' onclick='register_single_event(55)'><h3>Register</h3></span>
<span id='blockGen763' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(240,205,218,0.8);' onclick='getPage("ECTF_-_Capture_the_Flag","ECTF_-_Capture_the_Flag_Description")'><h3>Description</h3></span>
<span id='blockGen764' style='width:220px;padding: 15px;border-radius:20px;background: rgba(247,240,236,0.8);'><h3>Contact: Syed Rahi(9880016036) <br/>srsyedrahi@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupECTF_-_Capture_the_Flag">
<span id = "tabsECTF_-_Capture_the_Flag_Description">
<span id="blockGen765" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen767" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
ECTF is a ethical hacking competition, where you set up your Base (a virtual machine) with the&nbsp; Flag (a special file) that we will provide. Hack into your enemy's Base and retrieve his Flag, while&nbsp; at the same time defending your own.</span><span id="blockGen766" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Teams of 3.</b></span><span id="blockGen766" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabs55_register">
<span id="blockGen768" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen769' style='background: rgba(219,247,236,0.8);'><img src="static/Icons_Final/VIRTUAL_BOUNTY2.png" width='250px'/></span><br />
<span id='blockGen770' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(209,242,244,0.8);' onclick='register_single_event(56)'><h3>Register</h3></span>
<span id='blockGen771' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(248,232,231,0.8);' onclick='getPage("Virtual_Bounty","Virtual_Bounty_Description")'><h3>Description</h3></span>
<span id='blockGen772' style='width:220px;padding: 15px;border-radius:20px;background: rgba(228,230,215,0.8);'><h3>Contact: Syed Rahi(9880016036) <br/>srsyedrahi@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupVirtual_Bounty">
<span id = "tabsVirtual_Bounty_Description">
<span id="blockGen773" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen775" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Virtual Bounty is the online technical treasure hunt of Engineer, where the divine 'Googling' skills&nbsp; of the participants are put to test. Using search engines, the participants need to figure out the clues&nbsp; which will take them all around the World Wide Web in order to get to the next more intriguing&nbsp; level. This is a quest for the elusive treasure buried beneath billions of web pages.</span><span id="blockGen774" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Individual event</b>
</span>
</span>
<span id = "tabs56_register">
<span id="blockGen776" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen777' style='background: rgba(211,240,233,0.8);'><img src="static/Icons_Final/CODE_KOMBAT.png" width='250px'/></span><br />
<span id='blockGen778' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(206,234,202,0.8);' onclick='register_single_event(57)'><h3>Register</h3></span>
<span id='blockGen779' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(230,223,205,0.8);' onclick='getPage("Kode_Kombat","Kode_Kombat_Description")'><h3>Description</h3></span>
<span id='blockGen780' style='width:220px;padding: 15px;border-radius:20px;background: rgba(220,242,226,0.8);'><h3>Contact: Syed Rahi(9880016036) <br/>srsyedrahi@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupKode_Kombat">
<span id = "tabsKode_Kombat_Description">
<span id="blockGen781" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen783" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Kode Kombat is an Artificial Intelligence programming contest. It is an online event. Each player programs their virtual bots to play a certain game. Bots programmed by different players have a face-off in a quest to be the ''smartest'' bot!!</span><span id="blockGen782" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Teams of 2.</b>
</span>
</span>
<span id = "tabs57_register">
<span id="blockGen784" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen785' style='background: rgba(240,202,236,0.8);'><img src="static/Icons_Final/marathon_final.png" width='250px'/></span><br />
<span id='blockGen786' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(246,248,209,0.8);' onclick='register_single_event(58)'><h3>Register</h3></span>
<span id='blockGen787' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(235,231,232,0.8);' onclick='getPage("Marathon","Marathon_Description")'><h3>Description</h3></span>
<span id='blockGen788' style='width:220px;padding: 15px;border-radius:20px;background: rgba(224,235,210,0.8);'><h3>Contact: Syed Rahi(9880016036) <br/>srsyedrahi@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupMarathon">
<span id = "tabsMarathon_Description">
<span id="blockGen789" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen791" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Marathon is an event that inculcates multiple tasks of varying difficulty covering all fields of&nbsp; computer science from basic programming, scripting, to operating systems and networks. This&nbsp; Engineer, Marathon is planned to be more challenging, which tests your mind with the latest&nbsp; developing technologies in the field of Computer Science. After all, Computer Science is the fastest&nbsp; growing and the fastest changing area of Engineering.</span><span id="blockGen790" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Spread over all of Engineer, we give you the opportunity to make up for one bad day, as well as test&nbsp; how long you can persist solving the trickiest (and most often the simplest) computer science problems we&nbsp; can throw at you!</span><span id="blockGen790" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Teams of 3.</b></span><span id="blockGen790" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabs58_register">
<span id="blockGen792" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen793' style='background: rgba(249,212,215,0.8);'><img src="static/Icons_Final/RECTIFY.png" width='250px'/></span><br />
<span id='blockGen794' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(223,222,206,0.8);' onclick='register_single_event(59)'><h3>Register</h3></span>
<span id='blockGen795' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(248,227,216,0.8);' onclick='getPage("Rectify","Rectify_Description")'><h3>Description</h3></span>
<span id='blockGen796' style='width:220px;padding: 15px;border-radius:20px;background: rgba(242,201,223,0.8);'><h3>Contact: Syed Rahi(9880016036) <br/>srsyedrahi@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupRectify">
<span id = "tabsRectify_Description">
<span id="blockGen797" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen799" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
It’s time to scratch your Grey cells, it’s time to rectify! Rectify will test your hunting instincts. Can&nbsp; you spot your prey and catch it at the blink of an eye like the vicious vulture ? If you think you have&nbsp; a sharp eye and the instincts of a predator programmer, then come and hunt for the errors in our&nbsp; codes. This event not only tests the mastery over and familiarity with a programming language but&nbsp; also your dexterity in analyzing problems and providing logical solutions.</span><span id="blockGen798" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Individual event</b></span><span id="blockGen798" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabs59_register">
<span id="blockGen800" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen801' style='background: rgba(228,211,218,0.8);'><img src="static/Icons_Final/mindbend.png" width='250px'/></span><br />
<span id='blockGen802' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(224,236,213,0.8);' onclick='register_single_event(7)'><h3>Register</h3></span>
<span id='blockGen803' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(208,208,226,0.8);' onclick='getPage("mindBend","mindBend_Description")'><h3>Description</h3></span>
<span id='blockGen804' style='width:220px;padding: 15px;border-radius:20px;background: rgba(241,204,250,0.8);'><h3>Contact: Vijay Bharadwaj J <br/> +919483478667 <br/> jvijay1992@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupmindBend">
<span id = "tabsmindBend_Description">
<span id="blockGen805" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen807" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Mindbend is a fun quiz for those who have an undying thirst to know more about materials. It tests the participants’ knowledge of obscure and unnoticed facts about materials in an interactive and fascinating new format.</span><span id="blockGen806" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- Prelims round consisting of crossword and short questionnaire.</span><span id="blockGen806" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- Final round between 6 teams
</span>
</span>
<span id = "tabs7_register">
<span id="blockGen808" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen809' style='background: rgba(234,231,245,0.8);'><img src="static/Icons_Final/SEMTEMExpo.png" width='250px'/></span><br />
<span id='blockGen810' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(245,222,205,0.8);' onclick='register_single_event(8)'><h3>Register</h3></span>
<span id='blockGen811' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(221,217,227,0.8);' onclick='getPage("SEM_and_TEM_Expo","SEM_and_TEM_Expo_Description")'><h3>Description</h3></span>
<span id='blockGen812' style='width:220px;padding: 15px;border-radius:20px;background: rgba(248,235,200,0.8);'><h3>Contact: Vijay Bharadwaj J <br/> +919483478667 <br/> jvijay1992@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupSEM_and_TEM_Expo">
<span id = "tabsSEM_and_TEM_Expo_Description">
<span id="blockGen813" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen815" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
The event’s agenda is to exhibit two Electron Microscopes which are the pride of the Department and College.</span><span id="blockGen814" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- 1 hour introductory talk</span><span id="blockGen814" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- 1 hour demo  </span><span id="blockGen814" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabs8_register">
<span id="blockGen816" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen817' style='background: rgba(203,236,212,0.8);'><img src="static/Icons_Final/MetaMagic.png" width='250px'/></span><br />
<span id='blockGen818' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(225,230,204,0.8);' onclick='register_single_event(9)'><h3>Register</h3></span>
<span id='blockGen819' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(249,208,213,0.8);' onclick='getPage("MetaMagic","MetaMagic_Description")'><h3>Description</h3></span>
<span id='blockGen820' style='width:220px;padding: 15px;border-radius:20px;background: rgba(232,225,234,0.8);'><h3>Contact: Vijay Bharadwaj J <br/> +919483478667 <br/> jvijay1992@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupMetaMagic">
<span id = "tabsMetaMagic_Description">
<span id="blockGen821" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen823" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Metamagic is an exhibition of fascinating experiments designed to amaze even the most skeptical. From Shape memory alloys to smoke bombs to walking on fluids, these dazzling displays will showcase the amazing nature of materials.</span><span id="blockGen822" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > - Major demonstrations  – Shape Memory Alloy, Superconductor</span><span id="blockGen822" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > - Others –  Sugar bomb, Instant Ice, Mega Bubble, Elephant Toothpaste, Walking on Water,  Chemical Squid, Smoke Bomb, Dry Sand.</span><span id="blockGen822" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabs9_register">
<span id="blockGen824" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen825' style='background: rgba(226,231,206,0.8);'><img src="static/Icons_Final/SEMphotography.png" width='250px'/></span><br />
<span id='blockGen826' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(203,237,210,0.8);' onclick='register_single_event(10)'><h3>Register</h3></span>
<span id='blockGen827' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(200,237,200,0.8);' onclick='getPage("SEM_Photography_Contest","SEM_Photography_Contest_Description")'><h3>Description</h3></span>
<span id='blockGen828' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(229,234,204,0.8);' onclick='getPage("SEM_Photography_Contest","SEM_Photography_Contest_Submissiion Format")'><h3>Submissiion Format</h3></span>
<span id='blockGen829' style='width:220px;padding: 15px;border-radius:20px;background: rgba(215,216,244,0.8);'><h3>Contact: Vijay Bharadwaj J <br/> +919483478667 <br/> jvijay1992@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupSEM_Photography_Contest">
<span id = "tabsSEM_Photography_Contest_Description">
<span id="blockGen830" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen832" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
The event is a photography contest. SEM and TEM images of samples having unique features are evaluated.</span><span id="blockGen831" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- Online photo submission with description</span><span id="blockGen831" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabsSEM_Photography_Contest_Submissiion Format">
<span id="blockGen833" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen835" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
A PDF file containing Caption, Photo and a description of maximum 100 words should be sent to:</span><span id="blockGen834" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > <b>materials.engi@gmail.com</b></span><span id="blockGen834" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >by 22nd October
</span>
</span>
<span id = "tabs10_register">
<span id="blockGen836" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen837' style='background: rgba(250,212,228,0.8);'><img src="static/Icons_Final/PRODUCT_DESIGN_123.png" width='250px'/></span><br />
<span id='blockGen838' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(219,249,227,0.8);' onclick='register_single_event(11)'><h3>Register</h3></span>
<span id='blockGen839' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(204,208,222,0.8);' onclick='getPage("Product_Design_Challenge","Product_Design_Challenge_Description")'><h3>Description</h3></span>
<span id='blockGen840' style='width:220px;padding: 15px;border-radius:20px;background: rgba(239,210,242,0.8);'><h3>Contact: Neetesh Hegde <br/> 9483647944</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupProduct_Design_Challenge">
<span id = "tabsProduct_Design_Challenge_Description">
<span id="blockGen841" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen843" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
The competition aims to test how one can optimize a design and create a sustainable design to provide the best solution to a real world problem. </span><span id="blockGen842" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The participants will be given a problem statement with the minimum requirements of a product. </span><span id="blockGen842" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The aim is to optimise the design and develop the best blue print for the problem.</span><span id="blockGen842" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > The design would be judged by the company providing the problem statement, and will be accepting the best design to develop a final product.</span><span id="blockGen842" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Problem Statement Requirements:</b> Socially Conscious and Economical</span><span id="blockGen842" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabs11_register">
<span id="blockGen844" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen845' style='background: rgba(231,209,247,0.8);'><img src="static/Icons_Final/campussocialinnovation.png" width='250px'/></span><br />
<span id='blockGen846' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(240,235,212,0.8);' onclick='register_single_event(12)'><h3>Register</h3></span>
<span id='blockGen847' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(219,246,224,0.8);' onclick='getPage("Campus_Social_Innovision_Challenge","Campus_Social_Innovision_Challenge_Description")'><h3>Description</h3></span>
<span id='blockGen848' style='width:220px;padding: 15px;border-radius:20px;background: rgba(214,229,209,0.8);'><h3>Contact: Neetesh Hegde <br/> 9483647944</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupCampus_Social_Innovision_Challenge">
<span id = "tabsCampus_Social_Innovision_Challenge_Description">
<span id="blockGen849" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen851" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
The competition aims at solving problems within the campus of NITK-Surathkal.</span><span id="blockGen850" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >You will have to deal with the challenges which students of NITK face. </br>The team with the best solution to the given problem statement will get to implement their solution with support from EFOREA.</span><span id="blockGen850" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Problem Statement:</b> To be provided by NITK centre for Innovation and Learning.</span><span id="blockGen850" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabs12_register">
<span id="blockGen852" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen853' style='background: rgba(218,249,236,0.8);'><img src="static/Icons_Final/casestudychallenge.png" width='250px'/></span><br />
<span id='blockGen854' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(220,246,222,0.8);' onclick='getPage("Case_Study_challenge","Case_Study_challenge_Case 2")'><h3>Case 2</h3></span>
<span id='blockGen855' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(231,237,214,0.8);' onclick='getPage("Case_Study_challenge","Case_Study_challenge_Case 3")'><h3>Case 3</h3></span>
<span id='blockGen856' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(248,211,247,0.8);' onclick='getPage("Case_Study_challenge","Case_Study_challenge_Description")'><h3>Description</h3></span>
<span id='blockGen857' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(207,245,231,0.8);' onclick='getPage("Case_Study_challenge","Case_Study_challenge_Agenda")'><h3>Agenda</h3></span>
<span id='blockGen858' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(235,211,250,0.8);' onclick='getPage("Case_Study_challenge","Case_Study_challenge_Introduction")'><h3>Introduction</h3></span>
<span id='blockGen859' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(210,208,204,0.8);' onclick='getPage("Case_Study_challenge","Case_Study_challenge_Register")'><h3>Register</h3></span>
<span id='blockGen860' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(244,213,219,0.8);' onclick='getPage("Case_Study_challenge","Case_Study_challenge_Case 1")'><h3>Case 1</h3></span>
<span id='blockGen861' style='width:220px;padding: 15px;border-radius:20px;background: rgba(227,244,234,0.8);'><h3>Contact: Neetesh Hegde <br/> 9483647944</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupCase_Study_challenge">
<span id = "tabsCase_Study_challenge_Case 2">
<span id="blockGen862" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen864" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
• Problem Statement<br />As a mobile repair/recharge shop owner, to get insights on the type of sales I am making, I need lot of manual effort. Solve for me to get business insights to grow my business based on the payments made.<br />• Expected outcome<br />– Execution<br />&nbsp;&nbsp;• Deliverables include working prototype to have sales information in various channels<br />&nbsp;&nbsp;• Provide team’s roles and responsibilities<br />– Customer validation<br />&nbsp;&nbsp;• Interaction with intended customer<br />&nbsp;&nbsp;• Insights from customer feedback<br />– Business Model <br />&nbsp;&nbsp;• USP (Unique Selling Proposition) of this solution<br />&nbsp;&nbsp;• What is ROI of this model?<br /><br />
</span>
</span>
<span id = "tabsCase_Study_challenge_Case 3">
<span id="blockGen865" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen867" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
• Problem Statement<br />I am unable to manage my customers because of unpredictable frequency. On holidays there will be rush and lot of customers go away, whereas on regular working days my employees don't have much work. Solve for me. <br />• Expected outcome<br />– Execution<br />&nbsp;&nbsp;• Deliverables include working prototype to include customer scheduling and employee payment tracking.<br />&nbsp;&nbsp;• Provide team’s roles and responsibilities<br />– Customer validation<br />&nbsp;&nbsp;• Interaction with intended customer<br />&nbsp;&nbsp;• Insights from customer feedback<br />– Business Model <br />&nbsp;&nbsp;• USP (Unique Selling Proposition) of this solution<br />&nbsp;&nbsp;• What is ROI of this model?<br /><br />
</span>
</span>
<span id = "tabsCase_Study_challenge_Description">
<span id="blockGen868" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen870" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
The event aims to solve real case studies provided by corporate companies or small and medium enterprises (SMEs) and start-ups.</span><span id="blockGen869" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The participants are going to be provided with a problem statement from are partner companies.</span><span id="blockGen869" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Participants will have to present their solutions in the form of an elaborate presentation before the judges which will include the representatives of our partner companies.</span><span id="blockGen869" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Problem Statement Theme:</b> SUSTAINABILITY</span><span id="blockGen869" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabsCase_Study_challenge_Agenda">
<span id="blockGen871" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen873" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
• Who are we solving for:<br />– The problem statements for the event are designed for the small business owners. <br />– Small businesses typically have less than 50 employees and are not as organized in terms of managing their business. <br />– Mostly they maintain all their sales, employee payments and inventory manually. <br />• Why are we solving for them:<br />– Small business are unexplored domains<br />– Mostly solutions available in market are for Medium to Big Businesses<br />– Easy to access the owner of the business
</span>
</span>
<span id = "tabsCase_Study_challenge_Introduction">
<span id="blockGen874" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen876" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
The <b>Intuit Case Study Challenge</b> provides the participants an opportunity to solve real world problems faced by businesses in various fields. The participants are provided with 3 case studies, out of which they can choose to present either one of the case studies. The competition is divided into 2 rounds:</span><span id="blockGen875" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > 1st Round: Registration and submission of preliminary presentations </span><span id="blockGen875" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >2nd Round: Mentoring session and Finals (25th October, 2013 and 26th October, 2013.</span><span id="blockGen875" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > <b>The deadline for 1st round submission is 19th October,2013. </b></span><span id="blockGen875" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The entries have to be submitted in the form of a powerpoint presentation only, to bizevents@engineer.org.in .</span><span id="blockGen875" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Participants have to register before submitting the entries.
</span>
</span>
<span id = "tabsCase_Study_challenge_Register">
<span id="blockGen877" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen879" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
<a href='https://docs.google.com/forms/d/1JUiYpRmwF1naZW03xstHwJ_cR8iKZUx3JJdk9BrlA1M/viewform#start=openform' target='_blank'>Click here to register</a>
</span>
</span>
<span id = "tabsCase_Study_challenge_Case 1">
<span id="blockGen880" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen882" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
• Problem Statement <br />As a real estate agent, I want to manage all my clients which include rental and sales. e.g. <br />notify when an agreement is getting over, manage new sales and customers. Solve for me. <br />• Expected outcome<br />– Execution <br />&nbsp;&nbsp;• Deliverables include working prototype to include solutions for both rental and sales customer.<br />&nbsp;&nbsp;• Provide team’s roles and responsibilities<br />– Customer validation<br />&nbsp;&nbsp;• Interaction with intended customer <br />&nbsp;&nbsp;• Insights from customer feedback<br />– Business Model <br />&nbsp;&nbsp;• USP (Unique Selling Proposition) of this solution <br />&nbsp;&nbsp;• What is ROI of this model?<br />
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
<span id='blockGen883' style='background: rgba(249,247,240,0.8);'><img src="static/Icons_Final/data_analysischallenge.png" width='250px'/></span><br />
<span id='blockGen884' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(210,232,238,0.8);' onclick='register_single_event(14)'><h3>Register</h3></span>
<span id='blockGen885' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(232,215,241,0.8);' onclick='getPage("Data_Analysis_Challange","Data_Analysis_Challange_Description")'><h3>Description</h3></span>
<span id='blockGen886' style='width:220px;padding: 15px;border-radius:20px;background: rgba(231,200,224,0.8);'><h3>Contact: Neetesh Hegde <br/> 9483647944</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupData_Analysis_Challange">
<span id = "tabsData_Analysis_Challange_Description">
<span id="blockGen887" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen889" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
This competition will judge your potential to deal with huge databases similar to big data.</span><span id="blockGen888" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The participants are going to be provided with a company’s database which they have to analyse in the most efficient way to provide the company a better system to analyse their own data in future.</span><span id="blockGen888" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Problem Statement: To be provided by a Business Analysis Company.</span><span id="blockGen888" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabs14_register">
<span id="blockGen890" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sideBlue_Print'>
<span id='blockGen891' style='background: rgba(235,249,241,0.8);'><img src="static/Icons_Final/BluePrint.png" width='250px'/></span><br />
<span id='blockGen892' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(201,249,230,0.8);' onclick='getPage("Blue_Print","Blue_Print_Description")'><h3>Description</h3></span>
<span id='blockGen893' style='width:220px;padding: 15px;border-radius:20px;background: rgba(225,201,222,0.8);'><h3>Contact: Raghavan<br/>+91-9590390285<br/>raghav10rogers@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupBlue_Print">
<span id = "tabsBlue_Print_Description">
<span id="blockGen894" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen896" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
<b>Introduction</b></span><span id="blockGen895" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Blueprint, the paper presentation contest held as part of Engineer attracts some of the best minds from all over the country. Participants are invited to present papers spanning various research topics pertaining to the different branches of engineering.</span><span id="blockGen895" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>GENERAL RULES</b></span><span id="blockGen895" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >• Submissions are invited pertaining to novel research ideas and implementations in any of the above fields. </span><span id="blockGen895" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >• The submissions should be original work by the authors and any hint of plagiarism will lead to instant disqualification.</span><span id="blockGen895" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >• Authors are not permitted to submit papers that have already been accepted for publication/presentation in any other conferences or journals. Also, authors may not submit work that is under review in journals/conferences. </span><span id="blockGen895" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >• Authors cannot submit the same paper in more than one of the fields. Send the abstract as a PDF attachment to raghav10rogers@gmail.com</span><span id="blockGen895" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >• All paper-abstracts will undergo a blind-review process. This means that the authors are not to reveal their identity in ANY form in the abstracts. Authors are only required to mention their names and details in the appropriate section while uploading the abstract. Any attempt to reveal the author’s identity in the submitted abstract will lead to disqualification.</span><span id="blockGen895" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >• If the abstract is selected, then at least one of the authors has to be present for the final presentation. </span><span id="blockGen895" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>ABSTRACT SUBMISSION RULES AND PROCEDURE</b></span><span id="blockGen895" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >• Authors will need to submit a single page abstract for the initial selections. </span><span id="blockGen895" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >• There is no specific format for the abstract. </span><span id="blockGen895" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >• Mention the title of the paper and DO NOT mention the authors name or author-affiliations. </span><span id="blockGen895" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >• The abstract should not exceed 500 words in length and can include tables, figures or other data that the authors feel will improve the chances of their paper being selected. (The word limit is exclusive of the references and the title).</span><span id="blockGen895" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >• Abstracts which do not comply with the above mentioned rules will be disqualified. </span><span id="blockGen895" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>TEAMS OF 4</b></span><span id="blockGen895" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Submission Details</b></span><span id="blockGen895" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Send the abstract as a PDF attachment to raghav10rogers@gmail.com</span><span id="blockGen895" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- Subject of the mail: Category/ Field of Blueprint ( Example: Mechanical)</span><span id="blockGen895" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >- Details to be included in the mail:</span><span id="blockGen895" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Sample Format (Use this format in the mail)</span><span id="blockGen895" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><table border='1'>	<tr>		<td>Title of Paper</td>		<td>Name and Institution name of each author of the paper</td>		<td>Complete Contact Information of Participant (any one)</td>	</tr>	<tr>		<td>Analysis of Android mobile applications</td>		<td>Ram Prasad – NITK, Surathkal  Kishore Kumar – NITK, Surathkal</td>		<td>Ram Prasad  Email: ram@nitk.ac.in  Ph: 973082719 </td>	</tr></table><b>IMPORTANT DATES </b></span><span id="blockGen895" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >18th Oct – Deadline for submission of abstracts (Abstracts will be accepted till 11.59 PM) </span><span id="blockGen895" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >21st Oct – Declaration of Selected papers </span><span id="blockGen895" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >24th -27th Oct – Presentation of papers
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
<span id='blockGen897' style='background: rgba(229,218,210,0.8);'><img src="static/Icons_Final/Velocity.png" width='250px'/></span><br />
<span id='blockGen898' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(235,238,214,0.8);' onclick='register_single_event(27)'><h3>Register</h3></span>
<span id='blockGen899' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(235,226,232,0.8);' onclick='getPage("Velocity","Velocity_General Rules")'><h3>General Rules</h3></span>
<span id='blockGen900' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(209,244,219,0.8);' onclick='getPage("Velocity","Velocity_Event Format")'><h3>Event Format</h3></span>
<span id='blockGen901' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(226,227,205,0.8);' onclick='getPage("Velocity","Velocity_Propulsion & Steering")'><h3>Propulsion & Steering</h3></span>
<span id='blockGen902' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(203,207,248,0.8);' onclick='getPage("Velocity","Velocity_Car Specs")'><h3>Car Specs</h3></span>
<span id='blockGen903' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(235,205,212,0.8);' onclick='getPage("Velocity","Velocity_Introduction")'><h3>Introduction</h3></span>
<span id='blockGen904' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(227,249,247,0.8);' onclick='getPage("Velocity","Velocity_Arena Specs")'><h3>Arena Specs</h3></span>
<span id='blockGen905' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(245,222,224,0.8);' onclick='getPage("Velocity","Velocity_Event Rules")'><h3>Event Rules</h3></span>
<span id='blockGen906' style='width:220px;padding: 15px;border-radius:20px;background: rgba(239,234,228,0.8);'><h3>Contact: Akshay K R<br/>koodlyakshay@gmail.com <br/>9731937661</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupVelocity">
<span id = "tabsVelocity_General Rules">
<span id="blockGen907" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen909" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
 The students must carry valid student ID cards of their college which they should produce at the time of registration.</span><span id="blockGen908" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >A team may comprise a maximum of FIVE participants.</span><span id="blockGen908" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The team is not permitted to compete with more than one car.</span><span id="blockGen908" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Teams will not be allowed to modify their car during their trial. Prizes:</span><span id="blockGen908" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > 1st: Rs. 10,000</span><span id="blockGen908" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > 2nd: Rs. 7,500</span><span id="blockGen908" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > 3rd: Rs. 5,000<br /><b>Schedule</b><br /> Day 3 (26) Main ground <br /> Reserve day: Day 4 (27)
</span>
</span>
<span id = "tabsVelocity_Event Format">
<span id="blockGen910" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen912" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
The event will have 6 rounds:</span><span id="blockGen911" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Car Judging</b>: The car will be scrutinized by the organizers to make sure it conformsto the specified rules. There will be no points from this round. However, if the vehicle doesn’t conform to all the rules, it will be immediately disqualified.</span><span id="blockGen911" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > <b>Maneuverability Test</b>: Each car will have to maneuver a set of obstacles and points will be awarded based on time taken to complete the course.</span><span id="blockGen911" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Acceleration Test</b>: Each car will have to accelerate a certain distance and points will be awarded based on the time taken to complete the stretch.</span><span id="blockGen911" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Quarter-Finals</b>: 8 quarter-Finalists will be decided based on their aggregate points obtained in the abstract submission, acceleration test and maneuverability test. 4 groups of 2 cars each will race and the first car proceeds to the next round.</span><span id="blockGen911" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Semi-Finals</b>: 4 semi-finalists will be divided into 2 groups and race-off for the 2 spots in the finals. </span><span id="blockGen911" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Final</b>: This round requires the final 2 cars to race through a track with acute curvesand obstructions with the cars able pit stops for refueling and repairs. The endurance of the car will be tested. </span><span id="blockGen911" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><a href='./data/velocity.pdf'>Event Rule</a> 
</span>
</span>
<span id = "tabsVelocity_Propulsion & Steering">
<span id="blockGen913" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen915" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
 The machine must use only mechanical power generated by an internal combustion (IC) engine for propulsion.</span><span id="blockGen914" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Only one IC engine should be used in the machine.</span><span id="blockGen914" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Use of any other sources such as chemicals, compressed gas, rockets etc. is not allowed.</span><span id="blockGen914" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The maximum allowed capacity of IC engine to be used is 5 cc.</span><span id="blockGen914" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><img src='data/velocity6.JPG' /></span><span id="blockGen914" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >  Any machine which uses DC Motors for propulsion will be disqualified. However DC motors and servos can be used for steering mechanisms or any other control mechanisms apart from propulsion.</span><span id="blockGen914" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > The machine must have an on-board power supply to run any mechanism requiring electric power.</span><span id="blockGen914" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > The electric voltage anywhere in the machine should not exceed 15V at any point of time.</span><span id="blockGen914" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > There shall be a countdown preceding the start of the race. No participant is allowed to touch the machine during the countdown period.</span><span id="blockGen914" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Providing a clutch mechanism between the engine and the wheel would prove useful, as it would prevent the engine from dying out at any stage of the race.</span><span id="blockGen914" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Participants are advised to use a proper cooling mechanism to prevent overheating of the engine.</span><span id="blockGen914" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Participants are advised to use sway bars for better control and stability.</span><span id="blockGen914" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > The participants are advised to use proper air filters as dirt might cause serious problems to the engine.</span><span id="blockGen914" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Readymade wheels are allowed.</span><span id="blockGen914" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > The machine will be inspected and if found to be dangerous, the team will be disqualified. This decision rests solely with the judges and the organizers.
</span>
</span>
<span id = "tabsVelocity_Car Specs">
<span id="blockGen916" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen918" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
 Machine should fit in a box of dimensions 500 mm x 500 mm x 400 mm (L X B X H) at any moment of time during the race.</span><span id="blockGen917" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > The height will be measured excluding the antenna. The external device which is used to control the machine is not included in the size constraint.</span><span id="blockGen917" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > The machine should be controlled by a wireless remote control mechanism throughout the race.</span><span id="blockGen917" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > The machine must not be made from Lego parts, or any ready-made assembly kits other than the parts mentioned below.</span><span id="blockGen917" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Readily available chassis layouts are not allowed. Any machine found having a readymade chassis will be immediately disqualified.</span><span id="blockGen917" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > The machine may be roughly classified into structural and functional parts:</span><span id="blockGen917" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > <b>Structural parts</b> - Chassis, shock mounting members and have to be built by the participants themselves.</span><span id="blockGen917" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > <img src='data/velocity1.JPG'/> </span><span id="blockGen917" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > <b>Functional Parts</b> – Stock Steering mechanism must not be used and suspension (lower excluding suspension spring and shock absorbers) has to be built by the participants themselves.</span><span id="blockGen917" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Steering mechanisms have to be compulsorily built by the participants.</span><span id="blockGen917" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Judging for the same will be strict and the participant will be immediately disqualified if any of the above structural components are found to be ready made.</span><span id="blockGen917" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > The tires used must have a minimum diameter of 3 inches. You are advised to use tyres of good width for better performance on dirt tracks.<br\> <img src='data/velocity2.JPG'/></span><span id="blockGen917" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > <b>Please note: It is not compulsory to fabricate the brake mechanism.</b></span><span id="blockGen917" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b>Wheel Hub:</b> Any part rigidly attached to the wheel hub will be considered as a part of it and hence can be ready-made. An example here is that of the ball stud. <img src='data/velocity3.JPG'/> </span><span id="blockGen917" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b> Steering Mechanism:</b> Any part which is connected to steering rod rigidly i.e. has no degrees of freedom with respect to steering rod (example: heim joint http://en.wikipedia.org/wiki/Heim_joint) will be considered as part of steering rod and thus has to be fabricated by participants.</span><span id="blockGen917" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><img src='data/velocity4.JPG' /></span><span id="blockGen917" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><b> Suspension mechanism:</b> Any part rigidly connected to suspension arms or one with no degrees of freedom with respect to suspension arm will be considered as its part and has to be fabricated by the participants, except the upper suspension arm. For example both the heim joint (http://en.wikipedia.org/wiki/Rod_end_bearing -see this for more information) for the upper suspension arm and the stud rigidly connected to the wheel hub can be bought from the market.</span><span id="blockGen917" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><img src='data/velocity5.JPG' /></span><span id="blockGen917" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >If there are parts used in the concerned joint which are neither rigidly connected with suspension or the hub, steering system or hub; they can be used readymade from the market.</span><span id="blockGen917" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > If teams get any part specifically manufactured for them, they are required to present the CAD Drawings given to the manufacturer and the manufacturer’s bill for the same.</span><span id="blockGen917" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > The Chassis has to be strictly built by the team and use of stock chassis will lead to immediate disqualification.</span><span id="blockGen917" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The above pictures are just sample pictures for you to understand the rules easily.
</span>
</span>
<span id = "tabsVelocity_Introduction">
<span id="blockGen919" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen921" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Ready for a race off?...Velocity will provide you the jumpstart you need to get the fuel  pumping through your car’s veins. Being the flagship event of Engineer, Velocity provides  you an opportunity to showcase your racing talents amongst dedicated peers who have put in  the elbow grease required in building these racing machines.
</span>
</span>
<span id = "tabsVelocity_Arena Specs">
<span id="blockGen922" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen924" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
 The design of the track will be updated periodically. ( Make a note to check out the website periodically)</span><span id="blockGen923" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The actual track during the time of race might not strictly follow the design shown above.</span><span id="blockGen923" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The width of the track varies from 0.5 m to a maximum of 2mts.
</span>
</span>
<span id = "tabsVelocity_Event Rules">
<span id="blockGen925" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen927" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
The final 3 rounds will have races with multiple cars racing at a time.</span><span id="blockGen926" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The track will have check points at regular intervals. If a machine tumbles, or halts, or goes off the arena at any point on the track, one of the team members is allowed to lift it up and place it at the nearest checkpoint behind that point. The clock will keep running during this time.</span><span id="blockGen926" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Only ONE member of the team will be allowed to run along with the car throughout each race.</span><span id="blockGen926" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Team members are not permitted to touch either their machines or those of their opponents once the race begins (unless there is a need to lift the machine as stated in second point). The penalty for doing so is disqualification.</span><span id="blockGen926" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > If any of the machines starts off before the flag is waved, the counter would be restarted and the machines will get a second chance. However, if any machine starts off before the waving of flag (or countdown) for a second time, it will be disqualified. </span><span id="blockGen926" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >No re-match will be offered for the second time.</span><span id="blockGen926" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > The machines are not allowed to leave any loose parts on any part of the arena. Any machine disintegrating during the race will be disqualified.</span><span id="blockGen926" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Teams are not allowed to purposefully damage the machine of the opponent's team. If found doing so on track (while racing), the concerned team will be disqualified. </span><span id="blockGen926" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Execution of last three rules will be subjective and relies completely on judges' discretion.
</span>
</span>
<span id = "tabs27_register">
<span id="blockGen928" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen929' style='background: rgba(245,222,234,0.8);'><img src="static/Icons_Final/Proteus.png" width='250px'/></span><br />
<span id='blockGen930' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(203,246,209,0.8);' onclick='register_single_event(28)'><h3>Register</h3></span>
<span id='blockGen931' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(206,244,238,0.8);' onclick='getPage("Proteus","Proteus_Scoring")'><h3>Scoring</h3></span>
<span id='blockGen932' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(228,222,242,0.8);' onclick='getPage("Proteus","Proteus_download")'><h3>download</h3></span>
<span id='blockGen933' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(211,201,237,0.8);' onclick='getPage("Proteus","Proteus_Event Format")'><h3>Event Format</h3></span>
<span id='blockGen934' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(249,235,247,0.8);' onclick='getPage("Proteus","Proteus_General Rules")'><h3>General Rules</h3></span>
<span id='blockGen935' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(203,216,237,0.8);' onclick='getPage("Proteus","Proteus_Bot Specs")'><h3>Bot Specs</h3></span>
<span id='blockGen936' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(216,219,227,0.8);' onclick='getPage("Proteus","Proteus_Event Rules")'><h3>Event Rules</h3></span>
<span id='blockGen937' style='width:220px;padding: 15px;border-radius:20px;background: rgba(244,232,240,0.8);'><h3>Contact: Akshay K R<br/>koodlyakshay@gmail.com <br/>9731937661</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupProteus">
<span id = "tabsProteus_Scoring">
<span id="blockGen938" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen940" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Time taken in round 1 = t1</span><span id="blockGen939" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Time taken for destroying target 1 = t2 (seconds)</span><span id="blockGen939" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Time taken for destroying target 2 = t3 (seconds)</span><span id="blockGen939" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Time taken for destroying target 3 = t4 (seconds) </span><span id="blockGen939" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >T4 will be calculated only after all three targets have been brought down.</span><span id="blockGen939" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Time remaining after all the targets have been destroyed = t5 (seconds)</span><span id="blockGen939" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Range of the jet in round 1 = R (cm)</span><span id="blockGen939" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >FIRST ROUND EVALUATION:</span><span id="blockGen939" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >S1 = 2 * R * ( 1 / t1 )</span><span id="blockGen939" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Based on S1, top eight teams are qualified for the next round and awarded points from 40 to 5 (40, 35, 30 .. and so on). These points are carried forward for the final score.</span><span id="blockGen939" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Final Score, S = ( ( 1000 / t2 ) + ( 2000 / t3 ) + ( 3000 / t4 ) ) * exp( ts / 100 )  + (Points carried forward from the first round)
</span>
</span>
<span id = "tabsProteus_download">
<span id="blockGen941" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen943" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
 <a href='data/proteus.pdf'>Download</a></span><span id="blockGen942" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabsProteus_Event Format">
<span id="blockGen944" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen946" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
• Round 1</span><span id="blockGen945" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The bot has to start from point A and travel along the length of the tank to point B. At point B, the bot has to take a turn and then reach point C. The time taken to reach here is noted as t1.At point C, it is required to shoot a jet of water to achieve maximum range (R). Look at the figure below for reference.</span><span id="blockGen945" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >• Round 2</span><span id="blockGen945" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The participants are supposed to aim and shoot maximum of the three targets placed at gradually increasing heights at different distances. The details of the targets are shown below. The maximum time allotted to each team is 6 minutes. If all the targets are destroyed, the time remaining is also taken into account for the scoring system. The targets have to be destroyed in the following sequence- A –B - C
</span>
</span>
<span id = "tabsProteus_General Rules">
<span id="blockGen947" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen949" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
• Participants must carry valid ID cards of their respective college, which must be produced at the time of registration.</span><span id="blockGen948" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >• Maximum number of participants per team is four.</span><span id="blockGen948" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >• Readymade kits are not allowed.</span><span id="blockGen948" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >• Each team is allowed to participate with not more than one bot.</span><span id="blockGen948" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >• Judges decision will be final and binding.</span><span id="blockGen948" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Prizes: 1st: Rs. 4,000</span><span id="blockGen948" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > 2nd: Rs. 3,000</span><span id="blockGen948" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > 3rd: Rs. 2,000<br /><b>Schedule</b><br /> Day 0 (23) Wave mechanics lab
</span>
</span>
<span id = "tabsProteus_Bot Specs">
<span id="blockGen950" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen952" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
• Bots may be wired or wireless.</span><span id="blockGen951" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >• Controlling wires (if any) should not be taut at any point during the trial.</span><span id="blockGen951" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >• The bot has to fit in a box of dimensions 30*30*30 cm3</span><span id="blockGen951" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >• The width of the flume is 72cm. There are no other dimensional restrictions on the width or length. Keep in mind the functional requirements of the bot.</span><span id="blockGen951" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >• No restriction on weight of bot.</span><span id="blockGen951" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >• The potential difference between any two points on the bot must not exceed 12V.</span><span id="blockGen951" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >• Electrical components must be adequately insulated to prevent any complications </span><span id="blockGen951" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >that could arise because of it coming in contact with water.
</span>
</span>
<span id = "tabsProteus_Event Rules">
<span id="blockGen953" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen955" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
• There shall be one qualifying round.</span><span id="blockGen954" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >• The qualifying round is to test the test the maneuverability and the water shooting capacity of the bot.</span><span id="blockGen954" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >• The top 8 will qualify for the final round.</span><span id="blockGen954" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >• Teams will be provided with external 230V AC supply.</span><span id="blockGen954" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >• Teams must ensure that all mechanisms employed within the bot must not destroy the arena in any manner.</span><span id="blockGen954" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >• Any modifications on the bot must be made between the trials. Provision to make modifications during a trial is not permitted.
</span>
</span>
<span id = "tabs28_register">
<span id="blockGen956" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen957' style='background: rgba(205,227,228,0.8);'><img src="static/Icons_Final/PerfectMachine.png" width='250px'/></span><br />
<span id='blockGen958' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(208,248,247,0.8);' onclick='register_single_event(29)'><h3>Register</h3></span>
<span id='blockGen959' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(225,211,223,0.8);' onclick='getPage("PerfectMachine","PerfectMachine_arenaspecs")'><h3>arenaspecs</h3></span>
<span id='blockGen960' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(231,230,232,0.8);' onclick='getPage("PerfectMachine","PerfectMachine_eventformat")'><h3>eventformat</h3></span>
<span id='blockGen961' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(236,212,211,0.8);' onclick='getPage("PerfectMachine","PerfectMachine_judging")'><h3>judging</h3></span>
<span id='blockGen962' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(237,213,212,0.8);' onclick='getPage("PerfectMachine","PerfectMachine_specifications")'><h3>specifications</h3></span>
<span id='blockGen963' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(212,249,245,0.8);' onclick='getPage("PerfectMachine","PerfectMachine_generalrules")'><h3>generalrules</h3></span>
<span id='blockGen964' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(246,244,235,0.8);' onclick='getPage("PerfectMachine","PerfectMachine_mobility")'><h3>mobility</h3></span>
<span id='blockGen965' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(236,208,247,0.8);' onclick='getPage("PerfectMachine","PerfectMachine_download")'><h3>download</h3></span>
<span id='blockGen966' style='width:220px;padding: 15px;border-radius:20px;background: rgba(205,208,216,0.8);'><h3>Contact: Akshay K R <br/>koodlyakshay@gmail.com<br/>9731937661</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupPerfectMachine">
<span id = "tabsPerfectMachine_arenaspecs">
<span id="blockGen967" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen969" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
The dimensions of the bridge are as indicated</span><span id="blockGen968" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><img src='data/mech1.png'/></span><span id="blockGen968" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Fig 2: paths that the teams are required to use</span><span id="blockGen968" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><img src='data/mech2.png'/></span><span id="blockGen968" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Fig 3: The dimensions of the bridge</span><span id="blockGen968" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabsPerfectMachine_eventformat">
<span id="blockGen970" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen972" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Each round will be of a maximum of 15 min duration.</span><span id="blockGen971" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Fig 1 portrays the arena </span><span id="blockGen971" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Each bot must have a mechanism to lift the objects(it will be a ball or a cube) kept in rectangular container and throw them into the hoops kept at different heights </span><span id="blockGen971" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >In each hoop only a maximum of 3 objects (1 ball and 2 cubes) can be thrown.</span><span id="blockGen971" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Hoop 1 will be at the ground level. Hoop 2 will be at the height of 15cm from the arena. Hoop 3 will be at the height of 25cm from the arena. </span><span id="blockGen971" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >A bridge will be provided at the bottom of hoop 3(hoop at the height of 25 cm). The bot is required to climb over this bridge and throw the objects in hoop 3.</span><span id="blockGen971" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Each bot will be given only one round in which they need to complete the task.</span><span id="blockGen971" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >If the bot gets immobilized (unable to show minimum linear displacement of 10cm for 30 seconds) or toppled over, those teams cannot ask for restore.</span><span id="blockGen971" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The organizers reserve the right to change any or all of the above rules as they deem fit.</span><span id="blockGen971" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Violation of any the above rules will lead to disqualification.</span><span id="blockGen971" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Judges' decision shall be treated as final and binding on all.</span><span id="blockGen971" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabsPerfectMachine_judging">
<span id="blockGen973" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen975" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
A task is considered as completed only if all the objects are thrown into yhe respective hoops in.</span><span id="blockGen974" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The score given to each team at the end of their trial as follows</span><span id="blockGen974" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Score = ((10*h1+20*h2+40*h3) *t</span><span id="blockGen974" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Where,</span><span id="blockGen974" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >t= Time remaining after the completion of the task (in minutes) (only after 9 objects are thrown).</span><span id="blockGen974" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >h1= Number of objects thrown in hoop 1(max=3).</span><span id="blockGen974" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >h2= Number of objects thrown in hoop 2(max=3).</span><span id="blockGen974" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >h3= Number of objects thrown in hoop 3(max=3).</span><span id="blockGen974" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >In case of a tie,</span><span id="blockGen974" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Number of balls put will be considered. If scores are level even after that, the team to complete the task fastest will be awarded as winners.</span><span id="blockGen974" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabsPerfectMachine_specifications">
<span id="blockGen976" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen978" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
BOT SPECIFICATIONS</span><span id="blockGen977" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The initial bot dimensions should not exceed 30 x 30 x 20 cm3&#160;excluding the control device dimensions. This dimension excludes the dimension of lifting mechanism </span><span id="blockGen977" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The weight of the bot should not exceed 15 kgs.</span><span id="blockGen977" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The bot can be controlled wirelessly or with wires.</span><span id="blockGen977" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Readymade wireless remote control units may be used.</span><span id="blockGen977" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >In case wired control is used, the wire(s) must remain slack throughout the event. If the wires are visibly taut, the team would be immediately disqualified.</span><span id="blockGen977" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Single phase external 230V AC power will be supplied. Maximum voltage between any two points on the bot must not exceed 24 V DC or 24 V AC.</span><span id="blockGen977" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >OBJECT DIMENSION</span><span id="blockGen977" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Total number of objects to be thrown =9.</span><span id="blockGen977" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The dimension of each cube=a cm*a cm*a cm</span><span id="blockGen977" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The diameter of each ball = a cm</span><span id="blockGen977" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The diameter of the hoop=20cm</span><span id="blockGen977" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >a = 4 to 7</span><span id="blockGen977" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabsPerfectMachine_generalrules">
<span id="blockGen979" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen981" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
The students must carry valid student ID cards of their college which they will be required to produce at the time of registration.</span><span id="blockGen980" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Contestants will have to register online. On spot registrations can also be done.</span><span id="blockGen980" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >A team may comprise a maximum of FIVE participants.</span><span id="blockGen980" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Readymade kits are NOT allowed. Judges decision in this regard will be final and binding.</span><span id="blockGen980" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The team is not permitted to compete with more than one bot.</span><span id="blockGen980" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Teams will not be allowed to modify their bots during their trial.</span><span id="blockGen980" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Prizes:</span><span id="blockGen980" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > 1st: Rs. 6,000</span><span id="blockGen980" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > 2nd: Rs. 4,000</span><span id="blockGen980" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > 3rd: Rs. 2,000<br /><b>Schedule</b><br /> Day 1 (24) Sports complex
</span>
</span>
<span id = "tabsPerfectMachine_mobility">
<span id="blockGen982" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen984" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
&#160;All robots must have easily visible and controlled mobility in order to compete.&#160;</span><span id="blockGen983" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Any machine component should not be detached (intentionally) during any point of the event.</span><span id="blockGen983" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Methods of Mobility include:</span><span id="blockGen983" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Rolling (wheels, tracks or the whole robot)</span><span id="blockGen983" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Walking (linear actuated legs with no rolling or cam operated motion).</span><span id="blockGen983" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Shuffling(rotational cam operated legs)</span><span id="blockGen983" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Jumping and hopping is not allowed</span><span id="blockGen983" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Flying (airfoil using, helium balloons, ornithopters, hovercrafts etc.) is not allowed.</span><span id="blockGen983" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabsPerfectMachine_download">
<span id="blockGen985" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen987" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
<iframe width='420' height='315' src='//www.youtube.com/embed/m7qXfG3_2O8' frameborder='0' allowfullscreen></iframe><br /><br /><a href='data/perfectMachine.docx'>Download</a>
</span>
</span>
<span id = "tabs29_register">
<span id="blockGen988" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen989' style='background: rgba(228,227,201,0.8);'><img src="static/Icons_Final/RoboWars.png" width='250px'/></span><br />
<span id='blockGen990' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(211,210,244,0.8);' onclick='register_single_event(30)'><h3>Register</h3></span>
<span id='blockGen991' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(230,228,216,0.8);' onclick='getPage("Robowars","Robowars_power")'><h3>power</h3></span>
<span id='blockGen992' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(241,227,239,0.8);' onclick='getPage("Robowars","Robowars_mobility")'><h3>mobility</h3></span>
<span id='blockGen993' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(216,206,208,0.8);' onclick='getPage("Robowars","Robowars_botspecs")'><h3>botspecs</h3></span>
<span id='blockGen994' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(235,245,240,0.8);' onclick='getPage("Robowars","Robowars_eventrules")'><h3>eventrules</h3></span>
<span id='blockGen995' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(217,238,201,0.8);' onclick='getPage("Robowars","Robowars_arenaspecs")'><h3>arenaspecs</h3></span>
<span id='blockGen996' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(250,229,202,0.8);' onclick='getPage("Robowars","Robowars_eventformat")'><h3>eventformat</h3></span>
<span id='blockGen997' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(215,248,213,0.8);' onclick='getPage("Robowars","Robowars_download")'><h3>download</h3></span>
<span id='blockGen998' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(238,207,207,0.8);' onclick='getPage("Robowars","Robowars_weapon")'><h3>weapon</h3></span>
<span id='blockGen999' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(236,216,205,0.8);' onclick='getPage("Robowars","Robowars_hydraulic")'><h3>hydraulic</h3></span>
<span id='blockGen1000' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(234,226,246,0.8);' onclick='getPage("Robowars","Robowars_safety")'><h3>safety</h3></span>
<span id='blockGen1001' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(229,225,247,0.8);' onclick='getPage("Robowars","Robowars_judging")'><h3>judging</h3></span>
<span id='blockGen1002' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(247,234,213,0.8);' onclick='getPage("Robowars","Robowars_generalrules")'><h3>generalrules</h3></span>
<span id='blockGen1003' style='width:220px;padding: 15px;border-radius:20px;background: rgba(222,223,223,0.8);'><h3>Contact: Akshay K R <br/>koodlyakshay@gmail.com<br/>9731937661</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupRobowars">
<span id = "tabsRobowars_power">
<span id="blockGen1004" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1006" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Both on and off board power supplies are allowed. Batteries must be sealed, immobilized-electrolyte types (such as gel cells, lithium, NiCad, NiMH, or dry cells).</span><span id="blockGen1005" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The voltage between any two terminals in the robot should not exceed 25V. There is no restriction on the power consumption of the bot.</span><span id="blockGen1005" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >230V AC power will be provided.</span><span id="blockGen1005" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Participants can make use of one or more DC/Stepper motors.</span><span id="blockGen1005" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Use of an IC engine in any form is not allowed.</span><span id="blockGen1005" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >If the robot is wired then the wire should remain slack under all circumstances during the competition. The length of the wire between controlling device &amp; the power supply and between machine &amp; controlling device should be at least 4 meters.</span><span id="blockGen1005" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabsRobowars_mobility">
<span id="blockGen1007" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1009" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
All robots must have easily visible and controlled mobility in order to compete.</span><span id="blockGen1008" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Any machine component should not be detached (intentionally) during any point of the war.</span><span id="blockGen1008" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The maximum power limitation for mobility is 150 W. However there is no power limitation for attack mechanism.</span><span id="blockGen1008" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Methods of Mobility include:</span><span id="blockGen1008" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Rolling (wheels, tracks or the whole robot)</span><span id="blockGen1008" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Walking (linear actuated legs with no rolling or cam operated motion).</span><span id="blockGen1008" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Shuffling(rotational cam operated legs)</span><span id="blockGen1008" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Jumping and hopping is not allowed</span><span id="blockGen1008" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Flying (airfoil using, helium balloons, ornithopters, hovercrafts etc.) is not allowed.</span><span id="blockGen1008" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabsRobowars_botspecs">
<span id="blockGen1010" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1012" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Initial dimension of the robot should not exceed 50cm x 50cm x 50cm (l x b x h).The external device used to control the machine or any external tank is not included in the size constraint.</span><span id="blockGen1011" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Weight of the robot should not exceed 20kg (Excluding remote control and control wires).</span><span id="blockGen1011" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >If the robot uses external pneumatic / hydraulic source tank, its weight would not be considered.</span><span id="blockGen1011" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >If the robot is solely powered by onboard batteries (wireless robots), its weight would be considered 0.8 times its actual weight.</span><span id="blockGen1011" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The bot should contain an attack mechanism. Attack mechanism should be independent of the motion of the bot i.e. it should work even if the bot is motionless. A separate check of the attack mechanism will be conducted when the bot is immobile.</span><span id="blockGen1011" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The robot should have a small ground clearance such that the arena is not damaged at any point of time. The bot which causes any damage to arena will be disqualified.</span><span id="blockGen1011" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabsRobowars_eventrules">
<span id="blockGen1013" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1015" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
The maximum duration of each battle would be 10 minutes except for the finals which is going to be a 20 minute battle. Any team that is not ready at the time specified will be disqualified from the competition and the opponent robot will be declared the winner.</span><span id="blockGen1014" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >A robot that is deemed unsafe by the judges after the match has begun will be disqualified. The match will be immediately halted and the opponent will be awarded a win.</span><span id="blockGen1014" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >If the robots fail to contact each other for 60 seconds, both the robots will be eliminated.</span><span id="blockGen1014" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The arena will have an opening through which bots can be pushed off the arena. </span><span id="blockGen1014" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The robot will be declared victorious if it pushes the opponent off the arena through the opening in the wall twice.</span><span id="blockGen1014" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >In case a robot falls off the arena or toppled during the match, it can be restored back to the start point by a team member, within 30 seconds, during which the opponent can move in the arena but not make contact with the other robot. Only 1 restore will be allowed per team.</span><span id="blockGen1014" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The robot has to maintain a minimum distance of 60 cm from the opponent during its restore.</span><span id="blockGen1014" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The robots are not allowed to cut the opponent&rsquo;s control wires. Violation of this rule will lead to disqualification.</span><span id="blockGen1014" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >In case of immobility of any of the bots, both the bots will start again from their start points. </span><span id="blockGen1014" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Pinning is allowed only in the specified pin zone and the points will be awarded only for first two pinning in the match. The bots again start from their start points.</span><span id="blockGen1014" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Prizes:</span><span id="blockGen1014" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > 1st: Rs. 10,000</span><span id="blockGen1014" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > 2nd: Rs. 7,000</span><span id="blockGen1014" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > 3rd: Rs. 5,000<br /><b>Schedule</b><br /> Day 2 (25) Sports complex
</span>
</span>
<span id = "tabsRobowars_arenaspecs">
<span id="blockGen1016" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1018" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
The arena will be a circular wooden board of diameter 8 ft. </span><span id="blockGen1017" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The arena will have 3 ft high mesh all around it except an opening through which the robots can be pushed out of the arena </span><span id="blockGen1017" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The arena may have one or more of the following traps:</span><span id="blockGen1017" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Reciprocating Platform with about 1 &ndash; 20 reciprocations per minute.</span><span id="blockGen1017" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Rotating Platform of about 30 &ndash; 300 rpm.</span><span id="blockGen1017" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Lifting Mechanisms.</span><span id="blockGen1017" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Sand/Gravel/ Slush Pits of dimensions 70 cm x 70 cm. Depth of the pits from the arena surface are at an average of 3cm.&#160;</span><span id="blockGen1017" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Corrugations with a maximum radius of 10cm and pitch 20 cm.</span><span id="blockGen1017" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Rollers with a maximum diameter of 6 cm.</span><span id="blockGen1017" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Hitting Mechanisms.</span><span id="blockGen1017" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Heavy Oscillating Metal Balls</span><span id="blockGen1017" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabsRobowars_eventformat">
<span id="blockGen1019" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1021" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
The competition will be played on knock-out basis.</span><span id="blockGen1020" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The machine would be checked for its safety during registrations. In case of unsafe robots, the teams will be allowed to modify the robot before the registrations close.</span><span id="blockGen1020" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Only one person can control the robot and one person can stay near the arena for monitoring the robot.</span><span id="blockGen1020" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >In case of a tie, the robots will have to battle for a time duration of 2 minutes.</span><span id="blockGen1020" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Each team will have a maximum time period of 20 minutes to repair their robot after each battle round.</span><span id="blockGen1020" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The teams should make sure their wires are slack and all the wires coming out of robot need to be tangled together.</span><span id="blockGen1020" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The wires coming out of the robot should be placed in such a way that it should be safe from any attacks on the bot and the attack mechanisms provided by the organizers. The organizers will not be held responsible in case of any accidents to the bot because of the attack mechanism provided.</span><span id="blockGen1020" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The organizers reserve the right to change any or all of the above rules or add any rules as they deem fit.</span><span id="blockGen1020" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Violation of any the above rules will lead to disqualification.</span><span id="blockGen1020" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Judges' decision shall be treated as final and binding on all.</span><span id="blockGen1020" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabsRobowars_download">
<span id="blockGen1022" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1024" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
<a href='data/robowars.docx'>Download</a>
</span>
</span>
<span id = "tabsRobowars_weapon">
<span id="blockGen1025" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1027" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
The bots must have at least one kind of attack mechanism. Defensive bots like Wedge bots will be disqualified.</span><span id="blockGen1026" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Robots can have any kind of magnetic weapons, cutters, flippers, saws, lifting devices, spinning hammers etc. as weapons with following exceptions and limitations:</span><span id="blockGen1026" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Liquid projectiles.</span><span id="blockGen1026" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Any kind of inflammable liquid.</span><span id="blockGen1026" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Flame-based weapons.</span><span id="blockGen1026" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Electro-Magnetic Pulse.</span><span id="blockGen1026" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Any kind of explosive or intentionally ignited solid or potentially ignitable solid.</span><span id="blockGen1026" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Nets, tape, glue, or any other entanglement device or adhesives.</span><span id="blockGen1026" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >High power magnets or electromagnets.</span><span id="blockGen1026" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Radio jamming, tazers, tesla coils, or any other high-voltage device.</span><span id="blockGen1026" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Un-tethered projectiles.&#160;</span><span id="blockGen1026" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Tethered projectiles in any direction with each having a maximum tether length of 1m are allowed.&#160;</span><span id="blockGen1026" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Spinning weapons which do not come in contact with the arena at no point of time are allowed. In no case should the arena be damaged by any bot. Violation of this rule will lead to immediate disqualification.&#160;</span><span id="blockGen1026" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabsRobowars_hydraulic">
<span id="blockGen1028" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1030" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Participants can use pneumatic and hydraulic weapon systems.</span><span id="blockGen1029" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The outlet pressure of the source/tank should not exceed 8 bars. The used pressure should be indicated by means of temporarily fitted pressure gauge or there should be a provision to measure the cylinder pressure on the bot.</span><span id="blockGen1029" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Robots can use pressurized, non-inflammable gases/liquid to initialize their pneumatic mechanisms.</span><span id="blockGen1029" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Teams have to bring their own cylinders. Organizers will not provide any kind of refilling.</span><span id="blockGen1029" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Weight of the external cylinders are not taken into account.</span><span id="blockGen1029" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabsRobowars_safety">
<span id="blockGen1031" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1033" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Compliance with all event rules is mandatory. It is expected that competitors stay within the rules and procedures of their own accord and do not require constant policing.</span><span id="blockGen1032" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >If you have a robot or weapon design that does not fit within the categories set forth in the above said rules or is in some way ambiguous or borderline, please contact the event organizers.</span><span id="blockGen1032" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Safe innovation is always encouraged, but surprising the event staff with your brilliant exploitation of a loophole may cause your robot to be disqualified before it even competes.</span><span id="blockGen1032" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Each event has safety inspections. It is at the judge&rsquo;s sole discretion that your robot is allowed to compete. As a builder you are obligated to disclose all operating principles and potential dangers to the inspection staff.</span><span id="blockGen1032" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Proper activation and deactivation of robots is critical. Robots must only be activated in the arena, testing areas, or with express consent of the event coordinators.</span><span id="blockGen1032" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >All weapons must have a safety cover on any sharp edges.</span><span id="blockGen1032" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >All participants build and operate robots at their own risk. Combat robotics is inherently dangerous. There is no amount of regulation that can encompass all the dangers involved.</span><span id="blockGen1032" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Please take care to not hurt yourself or others when building, testing and competing.</span><span id="blockGen1032" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabsRobowars_judging">
<span id="blockGen1034" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1036" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Points will be awarded by the judges to a robot only if it has a considerable impact/damage on the opponent&rsquo;s robot. (Definition of damage will be decided by the judge and will be binding to all. NO discussion will be entertained)</span><span id="blockGen1035" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >In case none of the robots are completely damaged, the robot with maximum number of points will be declared the winner.</span><span id="blockGen1035" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >No points will be awarded for immobilizing the opponent bot.</span><span id="blockGen1035" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Points will be awarded for the team for using the offensive mechanisms provided by the organizers.</span><span id="blockGen1035" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabsRobowars_generalrules">
<span id="blockGen1037" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1039" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Contestants will have to register online. On spot registrations can also be done.</span><span id="blockGen1038" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The students must carry valid student ID cards of their college which they will be required to produce at the time of registration.</span><span id="blockGen1038" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >A team may comprise a maximum of FIVE participants.</span><span id="blockGen1038" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >A team can comprise of students from different colleges.</span><span id="blockGen1038" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >The team is not permitted to compete with more than one robot
</span>
</span>
<span id = "tabs30_register">
<span id="blockGen1040" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen1041' style='background: rgba(236,241,227,0.8);'><img src="static/Icons_Final/WrightFlight.png" width='250px'/></span><br />
<span id='blockGen1042' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(249,209,225,0.8);' onclick='register_single_event(31)'><h3>Register</h3></span>
<span id='blockGen1043' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(203,215,200,0.8);' onclick='getPage("wrightflight","wrightflight_Judging Criteria and Scoring")'><h3>Judging Criteria and Scoring</h3></span>
<span id='blockGen1044' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(216,232,206,0.8);' onclick='getPage("wrightflight","wrightflight_eventformat")'><h3>eventformat</h3></span>
<span id='blockGen1045' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(212,249,210,0.8);' onclick='getPage("wrightflight","wrightflight_generalrules")'><h3>generalrules</h3></span>
<span id='blockGen1046' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(232,232,235,0.8);' onclick='getPage("wrightflight","wrightflight_Glider Specifications")'><h3>Glider Specifications</h3></span>
<span id='blockGen1047' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(222,210,214,0.8);' onclick='getPage("wrightflight","wrightflight_Arena Specifications")'><h3>Arena Specifications</h3></span>
<span id='blockGen1048' style='width:220px;padding: 15px;border-radius:20px;background: rgba(249,229,241,0.8);'><h3>Contact: Akshay K R<br/>koodlyakshay@gmail.com <br/>9731937661</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupwrightflight">
<span id = "tabswrightflight_Judging Criteria and Scoring">
<span id="blockGen1049" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1051" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
The following will be considered while judging the glider:</span><span id="blockGen1050" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Preliminary Round &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - 40% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (Gliding TEST) </span><span id="blockGen1050" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><img src='data/wft1.JPG'/></span><span id="blockGen1050" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Final Round &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - 50% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (Maneuverability TEST)</span><span id="blockGen1050" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><img src='data/wft2.JPG'/></span><span id="blockGen1050" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Report &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - 10% </span><span id="blockGen1050" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><img src='data/wft3.JPG'/></span><span id="blockGen1050" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ></span><span id="blockGen1050" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Design & construction: More weightage for the glider with less weight to wingspan ratio. Minimum distance of 7 meters has to be covered by the glider in Preliminary round. </span><span id="blockGen1050" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >*Safe landing for gliders with control surfaces is defined as landing under complete control of the plane and for uncontrolled planes it is decided based on the impact due to landing. </span><span id="blockGen1050" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >*Glider is defined completely unpowered flying machine.</span><span id="blockGen1050" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >(For more details check <a href="http://science.howstuffworks.com/transport/flight/modern/glider1.htm">here</a>) </span><span id="blockGen1050" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabswrightflight_eventformat">
<span id="blockGen1052" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1054" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
&bull; In this event, contesting teams must build a Glider- an aerial reconnaissance vehicle.</span><span id="blockGen1053" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >&bull; The glider must be unpowered. The glider can be either chucked by hand or a suitable mechanism can be built by the competing team for providing the initial thrust.</span><span id="blockGen1053" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >&bull; A Hard copy of the report spanning one page has to be submitted by the teams on the day of the event regarding their glider construction procedure , materials used, design aspects etc , which will be the judging criteria of your glider in case of a tie. </span><span id="blockGen1053" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >&bull; The event shall consist of 2 rounds - one preliminary and a final round.</span><span id="blockGen1053" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >&bull; In the preliminary round, the participants are required to chuck the glider by hand to a maximum horizontal range and glide for the longest time period (Fig 1). </span><span id="blockGen1053" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >&bull; The teams clearing the preliminary round qualify to the final round.</span><span id="blockGen1053" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >&bull; In the final round, the teams are supposed to chuck their glider again by hand but here it is tested for maneuverability. The glider is required to go through a pre designated path and then maneuver across the given arena and crossing each checkpoint (Fig 2). </span><span id="blockGen1053" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >&bull; Each team will be given THREE trials in each round and the best score from the three trials will be considered for the final scoring. </span><span id="blockGen1053" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >&bull; The teams will have to bring their own radio control equipments (if using any) and the organizing committee won&rsquo;t be providing any.</span><span id="blockGen1053" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><a href='data/wrightflight.pdf'>Download</a>
</span>
</span>
<span id = "tabswrightflight_generalrules">
<span id="blockGen1055" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1057" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
&bull; Contestants will have to register online. On spot registrations can also be done.</span><span id="blockGen1056" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >&bull; The students must carry valid student ID cards of their college which they will be required to produce at the time of registration.</span><span id="blockGen1056" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >&bull; A team may comprise a maximum of FIVE participants.</span><span id="blockGen1056" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >&bull; Readymade kits are NOT allowed. Usage of Ready-to-Fly (RTF) and Almost-Ready-to-Fly (ARF) kits is strictly prohibited.</span><span id="blockGen1056" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >&bull; Teams should note that the place where flight testing is done is an open area; hence changes in wind direction may occur. The organizing committee will not be responsible for any change in weather at the time of testing. &bull; The glider has to be as per the specification mentioned below.</span><span id="blockGen1056" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >&bull; A team is permitted to compete with more than one glider of same/different design and that design can be registered only once.</span><span id="blockGen1056" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >&bull; Any team that is not ready at the time specified will be disqualified from the competition automatically. </span><span id="blockGen1056" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >&bull; The glider will be checked for its safety before the event and would be discarded if found unsafe for other participants and spectators. </span><span id="blockGen1056" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >&bull; The organizing committee won&rsquo;t be responsible for any damage done to the glider during the course of the event.</span><span id="blockGen1056" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >&bull; The teams must adhere to the spirit of healthy competition. Judges reserve the right to disqualify any team indulging in misbehavior. </span><span id="blockGen1056" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >&bull; Judges&rsquo; decision will be final and binding. </span><span id="blockGen1056" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >Prizes</span><span id="blockGen1056" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >1st: Rs. 4,000</span><span id="blockGen1056" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > 2nd: Rs. 2,000</span><span id="blockGen1056" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > 3rd: Rs. 1,000<br /><b>Schedule</b><br /> Day 0 (23) Ap Mech dept
</span>
</span>
<span id = "tabswrightflight_Glider Specifications">
<span id="blockGen1058" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1060" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Maximum wingspan of the glider must be 1.5 m.</span><span id="blockGen1059" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Maximum weight of the glider should be less than 1kg.</span><span id="blockGen1059" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Any material may be used for fabrication of glider.</span><span id="blockGen1059" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Use of IC-engines in any form is not permitted. </span><span id="blockGen1059" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > The initial thrust to the glider is provided by means of chucking by hand/a mechanism built by the </span><span id="blockGen1059" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > team itself only.</span><span id="blockGen1059" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > Participants can use a maximum of 3 servo motors only for control surfaces.
</span>
</span>
<span id = "tabswrightflight_Arena Specifications">
<span id="blockGen1061" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1063" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
The height of the building from which the participants will be launching their glider is 9 meters in and flight area of 35 m X 25 m. </span><span id="blockGen1062" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" ><img src = 'data/Wright_flight1.JPG'/> </span><span id="blockGen1062" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" > <img src = 'data/Wright_flight2.JPG'/> </span><span id="blockGen1062" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
</span>
</span>
<span id = "tabs31_register">
<span id="blockGen1064" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen1065' style='background: rgba(250,250,245,0.8);'><img src="static/Icons_Final/Beyond_Earth.png" width='250px'/></span><br />
<span id='blockGen1066' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(242,227,234,0.8);' onclick='register_single_event(46)'><h3>Register</h3></span>
<span id='blockGen1067' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(216,203,202,0.8);' onclick='getPage("BeyondEarth","BeyondEarth_Description")'><h3>Description</h3></span>
<span id='blockGen1068' style='width:220px;padding: 15px;border-radius:20px;background: rgba(221,211,237,0.8);'><h3>Contact: Mrinal Phone: 9449030636</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupBeyondEarth">
<span id = "tabsBeyondEarth_Description">
<span id="blockGen1069" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1071" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
 Beyond Earth - The Human Settlement Challenge - Call upon participants to display their strategy to conquer the universe. This event calls upon participants who are keen to learn about strategy we would have to employ to expand our forces beyond Mother Earth. The settlement should have extensive plans and should not depend on Earth for basic amenities. Teams are evaluated on the basis of innovation, creativity and presentation skills.Participants are needed to submit a thesis of less than 15 pages, explaining in detail, their strategy to populate outer space. Location can be chosen anywhere outside Earth, other than Moon and Mars.A number of teams will be shortlisted for the final round to be held during Engineer 2013.Final Round: Candidates would be required to defend their thesis with the help of a presentation not exceeding 15 minutes. Extra points would be awarded for teams which support their arguments with relevant models using appropriate software.
</span>
</span>
<span id = "tabs46_register">
<span id="blockGen1072" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen1073' style='background: rgba(203,214,207,0.8);'><img src="static/Icons_Final/starwars.png" width='250px'/></span><br />
<span id='blockGen1074' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(240,213,209,0.8);' onclick='register_single_event(47)'><h3>Register</h3></span>
<span id='blockGen1075' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(236,203,250,0.8);' onclick='getPage("StarWars","StarWars_Description")'><h3>Description</h3></span>
<span id='blockGen1076' style='width:220px;padding: 15px;border-radius:20px;background: rgba(204,217,226,0.8);'><h3>Contact: Mrinal Phone: 9449030636</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupStarWars">
<span id = "tabsStarWars_Description">
<span id="blockGen1077" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1079" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
 STAR WARS - The Astronomy Quiz. It presents itself as a unique opportunity for those passionate in astronomy to flaunt their knowledge of the cosmos.Short listed teams would face off in the final round.
</span>
</span>
<span id = "tabs47_register">
<span id="blockGen1080" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen1081'><button class='button1' style='border-radius: 0%;width: 250px;height: 250px;background: rgba(214,223,218,0.8);'><h1 style='text-align:center;font-family: acens;'>Exhibits</h1></button></span><br />
<span id='blockGen1082' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(226,201,232,0.8);' onclick='register_single_event(48)'><h3>Register</h3></span>
<span id='blockGen1083' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(211,230,209,0.8);' onclick='getPage("Exhibits","Exhibits_Description")'><h3>Description</h3></span>
<span id='blockGen1084' style='width:220px;padding: 15px;border-radius:20px;background: rgba(232,237,237,0.8);'><h3>Contact: Mrinal Phone: 9449030636</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupExhibits">
<span id = "tabsExhibits_Description">
<span id="blockGen1085" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1087" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Location: Astronomy Room, Main Building Time: Dawn to Dusk1) Pondus - Your Normal Force - How much would you weigh in different parts of the cosmos? 2) Satellite Launcher - A flash tool depicting the trajectory of satellites. A gaming console to learn about the movement of satellites enabling the transformation of theory into visualisation.3) Theatron – Compilation of the best documentaries related to physics continuously screened from dawn to dusk.4) Starry nights – Let us navigate through the heavens. We invite amateurs and introduce them to the wonders of the night sky. Greek tales and mythology will be discussed in great detail, promising the gala night to be a great delight. We will enlighten star gazers of the basic topology of the night sky.
</span>
</span>
<span id = "tabs48_register">
<span id="blockGen1088" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
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
<span id='blockGen1089' style='background: rgba(239,242,237,0.8);'><img src="static/Icons_Final/astro_talk.png" width='250px'/></span><br />
<span id='blockGen1090' class="register" style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(210,243,202,0.8);' onclick='register_single_event(49)'><h3>Register</h3></span>
<span id='blockGen1091' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(201,249,222,0.8);' onclick='getPage("AstroTalk","AstroTalk_Description")'><h3>Description</h3></span>
<span id='blockGen1092' style='width:220px;padding: 15px;border-radius:20px;background: rgba(219,203,247,0.8);'><h3>Contact: Mrinal Phone: 9449030636</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupAstroTalk">
<span id = "tabsAstroTalk_Description">
<span id="blockGen1093" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1095" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
In partnership with TechSpeak, Astronomy committee presents enlightening talks,designed to inspire and educate.Astronomy committee presents a series of lectures from eminent scholars conducting cutting edge research in their respective domains.We are proud to present the following speakers: Dr Banibrata Mukhopadhyay Currently an Associate professor, in the Department of Physics, Indian Institute of Science, Bangalore. His cutting edge research on black holes brought him to the limelight recently as reflected in the following article. http://articles.timesofindia.indiatimes.com/2013-09-21/science/42272405_1_black-holes-mass-and-spin-iisc He has been invited by Harvard, after his landmark discovery of the interdependence of mass and spin.His page for more details: http://www.physics.iisc.ernet.in/~bm/ Dr Jayaram Narayanan ChengalurPresently the Dean of National Centre for Radio Astrophysics, TIFR, Pune, Prof. Chengalur has been deeply involved with research on Radio Astronomy. He would be giving a talk on the impact of engineers in the field of pure science.  We also present Video Conferences from varied speakers on physics, astrophotography and much more. Come. See. Rejoice.
</span>
</span>
<span id = "tabs49_register">
<span id="blockGen1096" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
</span>
</span>
</td>
</tr>
</table>
<table class='table' align='center' style='width: 80%;'>
<tr>
<td valign='top' style='width: 30%'>
<span id='sidePsychedelic_Room'>
<span id='blockGen1097' style='background: rgba(216,216,208,0.8);'><img src="static/Icons_Final/PsychRoom.png" width='250px'/></span><br />
<span id='blockGen1098' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(211,218,200,0.8);' onclick='getPage("Psychedelic_Room","Psychedelic_Room_Decagon")'><h3>Decagon</h3></span>
<span id='blockGen1099' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(202,247,204,0.8);' onclick='getPage("Psychedelic_Room","Psychedelic_Room_Light_Wall")'><h3>Light_Wall</h3></span>
<span id='blockGen1100' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(227,234,232,0.8);' onclick='getPage("Psychedelic_Room","Psychedelic_Room_Waterfall")'><h3>Waterfall</h3></span>
<span id='blockGen1101' style='width:220px;padding: 15px;border-radius:20px;background: rgba(235,231,244,0.8);'><h3>Contact: Jacob(8123464539): <br/> jacobv1992@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupPsychedelic_Room">
<span id = "tabsPsychedelic_Room_Decagon">
<span id="blockGen1102" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1104" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
DECAGON is part of the Psychedelic Room and hence is music synchronized. It is an 8x8x8 3D LED cube which displays visualizations that change with the music playing in the room. These visualizations are 3-dimensional and hence make it way cooler than any visualization you’ve seen before. It involves sound (signal) processing, multiplexing LEDs and building the structure (cube of LEDs) in itself. The second time Octet was implemented, it was improved structurally. A sophisticated coding system was developed and the platform was changed to MSP430F1612 from Arduino. Better patterns were implemented with the new system put in place. 
</span>
</span>
<span id = "tabsPsychedelic_Room_Light_Wall">
<span id="blockGen1105" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1107" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
The Light Wall forms the coruscating backdrop of the Psychedelic Room. The lights flash in synchronization with the music being played in the room. The blue lights that cover one of the walls and the borders of the rest ensure visualizations that are spectacular. 
</span>
</span>
<span id = "tabsPsychedelic_Room_Waterfall">
<span id="blockGen1108" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1110" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
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
<span id='blockGen1111'><button class='button1' style='border-radius: 0%;width: 250px;height: 250px;background: rgba(202,212,242,0.8);'><h1 style='text-align:center;font-family: acens;'>Dance Dance Revolution</h1></button></span><br />
<span id='blockGen1112' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(244,219,204,0.8);' onclick='getPage("Dance_Dance_Revolution","Dance_Dance_Revolution_Description")'><h3>Description</h3></span>
<span id='blockGen1113' style='width:220px;padding: 15px;border-radius:20px;background: rgba(210,206,229,0.8);'><h3>Contact: Jacob(8123464539): <br/> jacobv1992@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupDance_Dance_Revolution">
<span id = "tabsDance_Dance_Revolution_Description">
<span id="blockGen1114" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1116" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
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
<span id='blockGen1117'><button class='button1' style='border-radius: 0%;width: 250px;height: 250px;background: rgba(207,222,250,0.8);'><h1 style='text-align:center;font-family: acens;'>Arcade Room</h1></button></span><br />
<span id='blockGen1118' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(215,235,236,0.8);' onclick='getPage("Arcade_Room","Arcade_Room_ContraptioN")'><h3>ContraptioN</h3></span>
<span id='blockGen1119' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(250,209,215,0.8);' onclick='getPage("Arcade_Room","Arcade_Room_Liquid_Light")'><h3>Liquid_Light</h3></span>
<span id='blockGen1120' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(242,237,201,0.8);' onclick='getPage("Arcade_Room","Arcade_Room_Temple_Run")'><h3>Temple_Run</h3></span>
<span id='blockGen1121' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(230,247,242,0.8);' onclick='getPage("Arcade_Room","Arcade_Room_Theremin")'><h3>Theremin</h3></span>
<span id='blockGen1122' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(232,234,241,0.8);' onclick='getPage("Arcade_Room","Arcade_Room_Pin_Ball")'><h3>Pin_Ball</h3></span>
<span id='blockGen1123' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(238,235,218,0.8);' onclick='getPage("Arcade_Room","Arcade_Room_Agent_Dash")'><h3>Agent_Dash</h3></span>
<span id='blockGen1124' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(245,223,212,0.8);' onclick='getPage("Arcade_Room","Arcade_Room_Shadow_LED")'><h3>Shadow_LED</h3></span>
<span id='blockGen1125' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(218,204,213,0.8);' onclick='getPage("Arcade_Room","Arcade_Room_Strongman")'><h3>Strongman</h3></span>
<span id='blockGen1126' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(229,211,242,0.8);' onclick='getPage("Arcade_Room","Arcade_Room_Labyrinth")'><h3>Labyrinth</h3></span>
<span id='blockGen1127' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(233,216,213,0.8);' onclick='getPage("Arcade_Room","Arcade_Room_Laser_Harp")'><h3>Laser_Harp</h3></span>
<span id='blockGen1128' style='width:220px;padding: 15px;border-radius:20px;background: rgba(212,216,215,0.8);'><h3>Contact: Jacob(8123464539): <br/> jacobv1992@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupArcade_Room">
<span id = "tabsArcade_Room_ContraptioN">
<span id="blockGen1129" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1131" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
In the year 2011, Contraption was implemented on a structure that depicted the Engineer logo. In 2012, a mechanical clock was made. This year we bring it back bigger than ever.
</span>
</span>
<span id = "tabsArcade_Room_Liquid_Light">
<span id="blockGen1132" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1134" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Liquid Light is made up of an RGB LED screen. It consists of various touch points. When touched, it creates an explosion of colourful patterns similar to the ripple effect from touching water. It involves detecting touch, algorithms to create patterns and controlling LED arrays. 
</span>
</span>
<span id = "tabsArcade_Room_Temple_Run">
<span id="blockGen1135" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1137" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Temple Run, an adventurous game in which the character runs in a jungle avoiding all obstacles. The character is also being chased by a demon & has to avoid being caught. We are implementing the game virtually using Kinect. If you want to experience a real thrilling chase you gotta check this out. 
</span>
</span>
<span id = "tabsArcade_Room_Theremin">
<span id="blockGen1138" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1140" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
The Theremin is an early instrument played without touching. It consists of two antennas, one to control pitch and the other to control amplitude. Along the same lines, the Theremin implemented is modeled as a butler, with sensors for hands, depicted as vocalizing according to the user’s movements. Instead of the antennas, here, the distance of the user’s hands from the two sensors control the pitch and the amplitude. It also consists of two knobs to control mode and volume. The game mechanics involves sensing motion and using that as a basis to emit sounds. 
</span>
</span>
<span id = "tabsArcade_Room_Pin_Ball">
<span id="blockGen1141" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1143" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
A game enjoyed since ages by the young & old alike is now brought out of the screen into the real scenario. The blockers are controlled using levers & the aim of the game is to keep the ball from falling into the pit. 
</span>
</span>
<span id = "tabsArcade_Room_Agent_Dash">
<span id="blockGen1144" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1146" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Who doesn't love the OO7 style agent of the famous android game AGENT DASH! This event is a virtual game where you are supposed to control your agent in the game by actually moving left or right on the sensor platform. The ultimate goal is to dodge obstacles coming your way ,shoot your enemies & cover the longest distance. 
</span>
</span>
<span id = "tabsArcade_Room_Shadow_LED">
<span id="blockGen1147" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1149" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Shadow LED is an LED panel that shows one’s shadow. When the person stands in front of it, the LEDs light up to display his/her shadow. Swing your arms, move about, walk away and it does exactly that. This event involves image processing and controlling LED arrays. 
</span>
</span>
<span id = "tabsArcade_Room_Strongman">
<span id="blockGen1150" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1152" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Strongman is an exhibitor of strength and this game is everyone’s chance at that. It consists of a tower of LEDs, lit according to how hard the player manages to whack a given spot with a hammer. As opposed to the ones used in funfair and carnivals, this game uses pressure sensors to determine the force of the blow. When all the LEDs are lit, the player wins. The game mechanics involves controlling the number of rows of LEDs lit according to the sensor measurements. 
</span>
</span>
<span id = "tabsArcade_Room_Labyrinth">
<span id="blockGen1153" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1155" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
Labyrinth is a game consisting of a maze and a marble the objective of which is to tilt the playfield to guide the marble to the end of the maze. The maze is suspended using the four corners. The player is provided with a keyglove used to control the tilt of the maze by similar palm tilt. The keyglove has an Inertial Measurement Unit (accelerometer and gyroscope devices) which is used to measure the tilt and Xbees to transmit data wirelessly to the control system on the labyrinth. The game mechanics involves tapping the hand tilt of the player and replicating a similar tilt on the playfield. 
</span>
</span>
<span id = "tabsArcade_Room_Laser_Harp">
<span id="blockGen1156" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1158" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
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
<span id='blockGen1159' style='background: rgba(223,221,200,0.8);'><img src="static/Icons_Final/blitzkrieg.png" width='250px'/></span><br />
<span id='blockGen1160' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(223,235,235,0.8);' onclick='getPage("Blitzkrieg","Blitzkrieg_Description")'><h3>Description</h3></span>
<span id='blockGen1161' style='width:220px;padding: 15px;border-radius:20px;background: rgba(219,230,220,0.8);'><h3>Contact: Jacob(8123464539): <br/> jacobv1992@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupBlitzkrieg">
<span id = "tabsBlitzkrieg_Description">
<span id="blockGen1162" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1164" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
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
<span id='blockGen1165' style='background: rgba(218,214,242,0.8);'><img src="static/Icons_Final/megapixel.png" width='250px'/></span><br />
<span id='blockGen1166' style='width:220px;padding: 5px;padding-left: 15px;padding-right: 15px;cursor: pointer;border-radius:20px;background: rgba(214,222,220,0.8);' onclick='getPage("Megapixel","Megapixel_Description")'><h3>Description</h3></span>
<span id='blockGen1167' style='width:220px;padding: 15px;border-radius:20px;background: rgba(223,210,202,0.8);'><h3>Contact: Jacob(8123464539): <br/> jacobv1992@gmail.com</h3></span>
</span>
</td>
<td style='width: 70%'>
<span id = "tabgroupMegapixel">
<span id = "tabsMegapixel_Description">
<span id="blockGen1168" style='width: 650px;font-size:25px;line-height:30px;background: rgba(255,255,255,0.8);padding: 15px;'>
</span>
<span id="blockGen1170" style="width: 650px;font-size:20px;line-height:25px;background: rgba(255,255,255,0.8);padding: 10px;" >
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
  					<a class="dropdown-toggle btn" data-toggle="dropdown" href="#"><i class="icon-user"></i> <b class="caret"></b></a>
  					<ul class="dropdown-menu accountSettings" style="margin-left:-5px;padding-left:10px;" role="menu" aria-labelledby="dLabel">
						<b id="fname">Firstname </b><b id="lname">Lastname</b><br />
						<em id="email">Email</em>
						<li class="divider"></li>
						<li><a onclick="get_profile_page(1);">Profile</a></li>
						<li onclick="logout();"><a>Logout</a></li>
  					</ul>
				</span>
				<span class="dropdown" id="Login">
  					<a class="dropdown-toggle btn " data-toggle="dropdown" href="#"><b>Login</b> <b class="caret"></b></a>
  					<ul class="dropdown-menu accountSettings" style="margin-left:-177px;padding:10px;" role="menu" aria-labelledby="dLabel">
  						<form onsubmit="return false;">
						<input type="text" name="username" placeholder="Email" /><br />
						<input type="password" name="password" placeholder="Password" /><br />
						<button class="btn btn-success" id="login_button" onclick="login()" style="height: 30px;">Submit</button>
						<span id="error_login"></span>
						</form>
  					</ul>
				</span>
				<span class="dropdown" id="Signup">
  					<a class="dropdown-toggle btn " data-toggle="dropdown" href="#"><b>Signup</b> <b class="caret"></b></a>
  					<ul class="dropdown-menu accountSettings" style="margin-left: -166px;padding:10px;" role="menu" aria-labelledby="dLabel">
  						<form onsubmit="return false;">
  							<input name="first_name" type="text" placeholder="First Name"/><br />
  							<input name="last_name" type="text" placeholder="Last Name"/><br />
							<input name="email" type="text" placeholder="Email"/><br />
							<input name="password1" type="password" placeholder="Password"/><br />
							<input name="password2" type="password" placeholder="Confirm Password"/><br />
							<input name="city" type="text" placeholder="City"/><br />
							<input name="institution_name" type="text" placeholder="College"/><br />
							<input name="phone" type="text" placeholder="Phone"/><br />
							<button class="btn btn-success" id="signup_button" onclick="signup()" style="height: 30px;">Submit</button>
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
		include("basicfunctions.php");
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
