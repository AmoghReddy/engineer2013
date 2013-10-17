eventData={
	"Innovating_Mining":{"id":"1","team_members":"1"},
	"Adverse_Mining_Problem":{"id":"2","team_members":"1"},
	"Mine_Quest":{"id":"3","team_members":"3"},
	"Hang-Man":{"id":"4","team_members":"1"},
	"Blast_Mine_Ventilation":{"id":"5","team_members":"1"},
	"Mine_Rush":{"id":"6","team_members":"1"},
	"mindBend":{"id":"7","team_members":"2"},
	"SEM_and_TEM_Expo":{"id":"8","team_members":"1"},
	"MetaMagic":{"id":"9","team_members":"1"},
	"SEM_Photography_Contest":{"id":"10","team_members":"1"},
	"Product_Design_Challenge":{"id":"11","team_members":"1"},
	"Campus_Social_Innovision_Challenge":{"id":"12","team_members":"1"},
	"Case_Study_challenge":{"id":"13","team_members":"1"},
	"Data_Analysis_Challange":{"id":"14","team_members":"1"},
	"Simplicity":{"id":"15","team_members":"1"},
	"Waltz":{"id":"16","team_members":"2"},
	"Trade_OFF":{"id":"17","team_members":"1"},
	"Symphony":{"id":"18","team_members":"3"},
	"TrailBlazer":{"id":"19","team_members":"4"},
	"Automata":{"id":"20","team_members":"4"},
	"FoxHunt":{"id":"21","team_members":"1"},
	"Fifa":{"id":"22","team_members":"1"},	
	"Aoe":{"id":"23","team_members":"2"},
	"NFS":{"id":"24","team_members":"1"},
	"dota":{"id":"25","team_members":"5"},
	"CounterStrike":{"id":"26","team_members":"5"},
	"Velocity":{"id":"27","team_members":"5"},
	"Proteus":{"id":"28","team_members":"4"},
	"PerfectMachine":{"id":"29","team_members":"5"},
	"Robowars":{"id":"30","team_members":"2"},
	"wrightflight":{"id":"31","team_members":"5"},
	"Industry_Defined_Problem":{"id":"32","team_members":"1"},
	"The_Portal":{"id":"33","team_members":"1"},
	"Chemical_Breakdown":{"id":"34","team_members":"1"},
	"Blue_Print":{"id":"35","team_members":"1"},
	"mindbend":{"id":"36","team_members":"1"},
	"Human":{"id":"37","team_members":"1"},
	"Markenza":{"id":"38","team_members":"1"},
	"Finance":{"id":"39","team_members":"1"},
	"Simplineer":{"id":"40","team_members":"2"},
	"FantastiCity":{"id":"41","team_members":"1"},
	"COLOSSUS":{"id":"42","team_members":"1"},
	"Architect":{"id":"43","team_members":"1"},
	"Nirvahana":{"id":"44","team_members":"1"},
	"MindBend":{"id":"45","team_members":"2"},
	"BeyondEarth":{"id":"46","team_members":"2"},
	"StarWars":{"id":"47","team_members":"1"},
	"Exhibits":{"id":"48","team_members":"1"},
	"AstroTalk":{"id":"49","team_members":"1"},
	"Sky_Lanterns":{"id":"50","team_members":"1"},
	"Green_Inovation_Challenge":{"id":"51","team_members":"1"},
	"Sparsh":{"id":"52","team_members":"3"},
	"The_Last_Word":{"id":"53","team_members":"1"},
	"Inscription":{"id":"54","team_members":"3"},
	"ECTF_-_Capture_the_Flag":{"id":"55","team_members":"3"},
	"Virtual_Bounty":{"id":"56","team_members":"1"},
	"Kode_Kombat":{"id":"57","team_members":"2"},
	"Marathon":{"id":"58","team_members":"3"},
	"Rectify":{"id":"59","team_members":"1"},
	"HR_Event": {"id": "60","team_members": "1"},
	"Finance_Event": {"id": "61","team_members": "1"},
	"Mindbend": {"id":"62","team_members":"1"},
	"Ethical_Hacking_by_TechDefence": {"id":"63","team_members":"1"},
	"Augmented_Reality": {"id": "64","team_members": "5"},
	"RC_Aircraft_Design_and_Fabrication": {"id": "65","team_members": "5"},
	"Humanoid_Robot": {"id": "66", "team_members": "5"},
	"Android Application Development": {"id" : "67","team_members":"1"},
	"3D_Photography": {"id" : "68","team_members":"1"},
	"Bridge_Design_and_Fabrication": {"id" : "69","team_members":"2"},
	"Contraption" : { "id" :"70","team_members":"5"},
	}

function quickNavToggle(isNavSet){
	//console.log(isNavSet);
	if(isNavSet){
		$(".quickNav button").hide(100);
		$(".quickNav i").show(0);
	}
	else{
		$(".quickNav i").hide(0);
		$(".quickNav button").show();
	}
	isNavSet=!isNavSet;
}
// put this in 3script later
function setEvents()
{
	var transformTime = 1500;
	
	//var button = document.getElementById( 'page' );
	//button.addEventListener( 'click', function ( event ) {transform(currentPage.WGLobjects, currentPage.targets.page, transformTime, transformTime, false, currentPage);}, false );

	//var button = document.getElementById( 'button1' );
	//button.addEventListener( 'click', function ( event ) {getPage('Home');}, false );
	
	window.addEventListener( 'resize', onWindowResize, false );
	
	var mousewheelevt = (/Firefox/i.test(navigator.userAgent)) ? "DOMMouseScroll" : "mousewheel"; //FF doesn't recognize mousewheel as of FF3.x
	
	$(window).bind(mousewheelevt, function(event) 
	{
		var delta = extractDelta(event);
		if (delta <= 0) VScroll(true);
		else VScroll(false);
	});
}

var alpha=0;
function VScroll(isScrollUp)
{
	var resultTable=[];
	var threshold = currentPage.pageRect;
	if ((threshold.bottom - threshold.top) < window.innerHeight)
	{
		//console.log('not scrolling');
		return;
	}
	if ( currentPage.name.match('allCommittees') ) 
	{
		if (isScrollUp)
		{
			alpha-=Math.PI/180;
		}
		else
		{
			alpha+=Math.PI/180;
		}
		getNextRevolution(currentPage.targets.page, resultTable, alpha * 15, currentPage.zDepth);
	}
	else if ( currentPage.name.match('homePage') ) 
	{
		return;
	}
	else
	{
		var maxAngle = ( currentPage.pageRect.bottom - currentPage.pageRect.top - window.innerHeight + headerLength + footerLength ) / pivot.z ;
		//console.log(maxAngle+":::::"+alpha);
		if (isScrollUp)
		{
			if (alpha == maxAngle) return;
			if (alpha - Math.PI/180 < maxAngle) alpha = maxAngle;
			else alpha-=Math.PI/180;
		}
		else
		{
			if (alpha == 0) return ;
			if (alpha + Math.PI/180  > 0) alpha = 0 ;
			else alpha+=Math.PI/180;
		}
		getNextScroll(currentPage.targets.page, currentPage.initialPositions, resultTable, alpha);
	}
	transform(currentPage.WGLobjects, resultTable, 1000, 1000, false, currentPage);
}

function extractDelta(e) 
{
    if (e.wheelDelta) 
	{
        return e.wheelDelta;
    }
    if (e.originalEvent.detail) 
	{
        return e.originalEvent.detail * -40;
    }
    if (e.originalEvent && e.originalEvent.wheelDelta) 
	{
        return e.originalEvent.wheelDelta;
    }
}
function keybind(){
	$(document).keydown(function(e){
		if(e.keyCode==37 || e.keyCode==38){
			VScroll(false);
		}
		else if(e.keyCode==39 || e.keyCode==40){
			VScroll(true);
		}
	});
}
function router(){
	pageName=window.location.hash.substr(1);
	if(pageName) getPage(pageName);
	else getPage("homePage");
}
var suggestions = [];
function searchRouter(){
	
	for (var str in allPages)
	{
		suggestions.push(str.replace(/_/g,' '));
	}
	for (var str in allTabbedPages)
	{
		suggestions.push(str.replace(/_/g,' '));
	}

	$('#searchBox').typeahead({source: suggestions , updater: function(item) { getPage(item.replace(/ /g,'_')); this.value = item ;}});
}

function share(){
	var input=document.getElementById("share_url");
	input.selectionStart=0;
	input.selectionEnd=input.value.length;
	if(input.value.split("#")[1]=="homePage")
		input.value=window.location.href;
	$("#shareModal").modal("show");
}

function makeSomeBlocks()
{
	var tempArray = [];
	tempArray = document.getElementsByTagName('p');
	for (var x = 0; x < tempArray.length; x++ )
	{
		tempArray[x].id = "blockPP" + x;
		//tempArray.style = "";
	}
}

function fillUpProfileDetails(name, email)
{
	var prof_name = document.getElementById('profile_name');
	var prof_email = document.getElementById('profile_email');
	prof_name.innerHTML = name;
	prof_email.innerHTML = email;
}

function fillUpProfileEvents(eventList)
{
	alert('trial');
	var listEle = document.getElementById('profile_events');
	var listEleHTML = "";
	for (eve in eventList)
	{
		listEleHTML = listEleHTML + "<br/>" + eventList["event_name"];
	}
}

function system()
{
	$(".loading").hide();
	// in 3script.js
	$(".logo").click(function(){getPage("homePage");});
	$(".close").click();
	$(".quickNav button").hide(0);
	$(".quickNav div").hover(function(){ quickNavToggle(false); },function(){ quickNavToggle(true); });
	$(".dropdown input").click(function(e){e.stopPropagation();});
	//container = document.getElementById("container");
	//makeSomeBlocks(); //Do not call this (not needed any more)
	start();
	keybind();
	router();
	searchRouter();

}
window.onbeforeunload=function(){ 
	// return 'jwoiah';
	// getPage(document.location.split("#")[1]);
}
window.onload=system;