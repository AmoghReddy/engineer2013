function system()
{
	// in 3script.js
	start();
	// controlling mouse
	var colors = ["Mech Events", "Engineer", "Mathematica", "yellow", "brown", "black"];
	//console.log(camera.position);
	$('.searchBox').typeahead({source: colors});
	tempFunction();
}

function tempFunction()
{
	var temp = document.getElementById("block4");
	var bounds = temp.getBoundingClientRect();
	console.log("left = "+bounds.left);
	console.log("right = "+bounds.right);
	console.log("top = "+bounds.top);
	console.log("bottom = "+bounds.bottom);
}

// put this in 3script later
var alpha=0;
var resultTable=[];
function VScroll(isScrollUp)
{
	resultTable=[];
	var maxAngle = ( currentPage.pageRect.bottom - currentPage.pageRect.top - window.innerHeight + headerLength + footerLength ) / pivot.z ;
	//console.log(maxAngle+":::::"+alpha);
	if ( !isScrollUp)
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
	transform(currentPage.WGLobjects, resultTable, 1000, 1000, currentPage.tweens);
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


$("#block1").bind('drag',function( event ){
	console.log(event);
});
var mousewheelevt = (/Firefox/i.test(navigator.userAgent)) ? "DOMMouseScroll" : "mousewheel"; //FF doesn't recognize mousewheel as of FF3.x
$(window).bind(mousewheelevt, function(event) 
{
	var delta = extractDelta(event);
	if (delta >= 0)
	VScroll(true);
	else 
	VScroll(false);
});

window.onload=system;



