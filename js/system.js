var isHeaderSet=true;
function headerToggle(){
	timer=1500;
	if(isHeaderSet){
		$(".leftButton").each(function(e,t){$(this).animate({"margin-left":"+=-1000"},timer,"easeInOutElastic");timer+=250});
	}
	else{
		$(".leftButton").each(function(e,t){$(this).animate({"margin-left":"+=+1000"},timer,"easeInOutElastic");timer+=250});
	}
	isHeaderSet=!isHeaderSet;
}
function quickNavToggle(isNavSet){
	console.log(isNavSet);
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
	
	var button = document.getElementById( 'page' );
	button.addEventListener( 'click', function ( event ) {transform(currentPage.WGLobjects, currentPage.targets.page, transformTime, transformTime, false, currentPage.name);}, false );

	var button = document.getElementById( 'button1' );
	button.addEventListener( 'click', function ( event ) {getPage('Home');}, false );
	
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
			if (alpha - Math.PI/180 < maxAngle) return;
			alpha-=Math.PI/180;
		}
		else
		{
			if (alpha + Math.PI/180 > 0) return;
			alpha+=Math.PI/180;
		}
		getNextScroll(currentPage.targets.page, currentPage.initialPositions, resultTable, alpha);
	}
	transform(currentPage.WGLobjects, resultTable, 1000, 1000, false, currentPage.name);
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

function system()
{
	start();
	// in 3script.js
	$(".logo").click(headerToggle);
	headerToggle();
	$(".quickNav button").hide(0);
	$(".quickNav div").hover(function(){ quickNavToggle(false); },
	                          function(){ quickNavToggle(true); }
				  );
	$(".dropdown input").click(function(e){e.stopPropagation();});
	// controlling mouse
	var colors = ["Mech Events", "Engineer", "Mathematica", "yellow", "brown", "black"];
	//console.log(camera.position);
	$('#searchBox').typeahead({source: colors});
}
//window.onbeforeunload=function(){ return "Do  you want to go back?";}
window.onload=system;
