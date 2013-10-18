var camera, cameraAngle, scene, renderer;
var container, controls;

var headerLength = 10;
var footerLength = 90;
var initialWidth = 1366;
var homePageRadius;

var iconWidth = 250;
var iconHeight = 250;

var allForms = {};
var allSideBars = {};
var allTabbedPages = {};
var allPages = {};
var allPagesIndex = []; //remove this later
var allTweens = {};
var allMessagges = {};
var allUpdates = {};

var currentPage;
var currentTabbedPage;
var currentSideBar;
var currentForm;
var renderTween;

var REblock = new RegExp("^block");
var REpage = new RegExp("^page");
var REside = new RegExp("^side");
var REform = new RegExp("^form");
var REcomittee = new RegExp("^comittee");
var REmenu = new RegExp("^menu");
var REtabgroup = new RegExp("^tabgroup");
var REtabs = new RegExp("^tabs");

var pivot = new THREE.Vector3(0, 0, -3000);
var history2=[];

var randomNumber = 0;
function getRand()
{
	randomNumber++;
	return randomNumber;
}

function page( element, dontCenter, radiusAdjust )
{
	this.name;
	this.dontCenter = dontCenter;
	this.pageElement = element;
	this.pageRect = element.getBoundingClientRect();
	this.pageTween;
	this.DOMobjects = [];
	this.rectObjects = [];
	this.targets = { page: [], sphere: [], helix: [], grid: [], initial: [] };
	this.WGLobjects = [];
	this.initialPositions = [];
	this.zDepth;
	this.onComplete = function() {}
	this.initPage = function()
	{
		this.name = element.id.substr(4);
		getAllChildren(this.pageElement, REblock, this.DOMobjects);
		getAllRects(this.DOMobjects, this.rectObjects);
		getPageTargets(this.rectObjects, this.targets.page, this.initialPositions, this.pageElement, this.dontCenter, radiusAdjust);
		//getSphereTargets(this.DOMobjects, this.targets.sphere, 900);
		//getHelixTargets(this.DOMobjects, this.targets.helix, 1100);
		//getGridTargets(this.DOMobjects, this.targets.grid);
		loadWGLObjects(this.DOMobjects, this.WGLobjects);

	}
	this.initComittee = function()
	{
		this.name = element.id;
		getAllChildren(this.pageElement, REcomittee, this.DOMobjects);
		getAllRects(this.DOMobjects, this.rectObjects);
		getComitteeTargets(this.rectObjects, this.targets.page, 200, this);
		loadWGLObjects(this.DOMobjects, this.WGLobjects);
	}
	this.initHome = function()
	{
		this.name = element.id;
		var depth = -20, duration = 1200;
		this.zDepth = depth;
		this.DOMobjects.push(document.getElementById('engiLogo'));
		getAllChildren(this.pageElement, REmenu, this.DOMobjects);
		getAllRects(this.DOMobjects, this.rectObjects);
		var radius = 0;
		if (this.name == "sponsors") radius = 10;
		getHomeTargets(this.rectObjects, this.targets.page, depth, radius);
		loadWGLObjects(this.DOMobjects, this.WGLobjects);
		this.onComplete = function()
		{
			TWEEN.remove(renderTween);
			var pageName = this.name;
			if( allPages[pageName].pageTween != undefined ) { TWEEN.remove(allPages[pageName].pageTween); }
			var depth = allPages[pageName].zDepth;
			var start = { theta : 0 }, end = { theta : 2 * Math.PI };
			this.pageTween = new TWEEN.Tween( start )
				.to( { theta : end.theta } , duration )
				.onUpdate( function(){
					//console.log(this);
					for (var i = 1; i < allPages[pageName].WGLobjects.length; i++)
					{
						var object = allPages[pageName].WGLobjects[i];
						object.position.z = depth * Math.sin(((2 * Math.PI) * (i - 1) / (allPages[pageName].WGLobjects.length - 1) ) + this.theta);

					}
				})
				.repeat( Infinity )
				.start();
			renderTween = new TWEEN.Tween( this )
				.to( {}, duration )
				.onUpdate( render )
				.repeat( Infinity )
				.start();
		}
	}
}

function position(x, y, z)
{
	this.x = x;
	this.y = y;
	this.z = z;
}

function getAllChildren(element , regex, chosenElements) 
{
	if (element.id == undefined || element.id == null || element == undefined)
		return null;
	if (element.hasChildNodes())
	{
		var array = element.childNodes;
		for (var x in array)
		{
			if (array[x].id == undefined || element.id == null || element == undefined)
				continue;
			if (regex.test(array[x].id))
			{
				chosenElements.push (array[x]);
			}
			else if (array[x].hasChildNodes())
			{
				getAllChildren(array[x] , regex, chosenElements);
			}
		}
	}
}

function getAllRects(DOMobjects, rectObjects)
{
	var rect;
	for (var i = 0; i < DOMobjects.length; i++)
	{
		rect = DOMobjects[i].getBoundingClientRect();
		rectObjects.push(rect);
	}
}

function lookAwayFrom(obj, piv)
{
	var temp = new THREE.Vector3();
	obj.position.x -= piv.x;
	obj.position.y -= piv.y;
	obj.position.z -= piv.z;
	temp.copy( obj.position ).multiplyScalar( 2 );
	obj.lookAt( temp );
	obj.position.x += piv.x;
	obj.position.y += piv.y;
	obj.position.z += piv.z;
}

function getPageTargets(source, destination, initPos, pageElement, dontCenter, radiusAdjust)
{
	var rect, object, boxleft, boxtop, boxwidth, boxheight, theta, pos;
	var vect = new THREE.Vector3();
	vect.copy( pivot );
	var threshold = pageElement.getBoundingClientRect();
	var verticalCenterAdjustment = 0;
	if ((threshold.bottom - threshold.top) < window.innerHeight )
	{
		verticalCenterAdjustment = (window.innerHeight - (threshold.bottom - threshold.top))/2;
	}
	var topThreshold = threshold.top - headerLength - verticalCenterAdjustment;
	var centerAdjustment = ( initialWidth - ( threshold.right - threshold.left ) ) / 2 ;
	//console.log(pageElement.id + "::");
	//console.log(threshold);
	if (dontCenter) centerAdjustment = 0;
	for ( var i = 0; i < source.length; i ++ )
	{
		rect = source[i];
		object = new THREE.Object3D();
		boxleft = rect.left + centerAdjustment;
		boxtop = rect.top - topThreshold;
		boxwidth = rect.right-rect.left;
		boxheight = rect.bottom-rect.top;
		object.position.x = boxleft - (initialWidth/2) + boxwidth/2;
		object.position.y = (window.innerHeight/2) - boxtop - boxheight/2;
		pos = new position(object.position.x, object.position.y, 0);
		initPos.push( pos );
		vect.x = object.position.x;
		theta = object.position.y / vect.z;
		object.position.y = vect.z * Math.sin(theta);
		object.position.z = vect.z - vect.z * Math.cos(theta) + radiusAdjust;
		lookAwayFrom(object, vect);
		destination.push( object );
	}
}

function getNextScroll(source, sourcePositions, destination, alpha)
{
	var vect = new THREE.Vector3();
	vect.copy( pivot );
	var object, rect, theta;
	for ( var i = 0; i < source.length; i ++ )
	{
		object = new THREE.Object3D();
		vect.x = source[i].position.x;
		theta = (sourcePositions[i].y / vect.z) + alpha;
		object.position.x = source[i].position.x;
		object.position.y = vect.z * Math.sin(theta);
		object.position.z = vect.z - vect.z * Math.cos(theta);
		lookAwayFrom(object, vect);
		destination.push( object );
	}
}

function getNextRevolution(source, destination, alpha, zDepth)
{
	var object, theta;
	var vector = new THREE.Vector3();
	vector.copy( camera.position );
	vector.z += 1500;
	for ( var i = 0; i < source.length; i ++ )
	{
		object = new THREE.Object3D();
		theta = Math.atan2( source[i].position.x, source[i].position.z - zDepth ) + alpha;
		radius = Math.sqrt( Math.pow(source[i].position.x, 2) + Math.pow(source[i].position.z - zDepth, 2) )
		object.position.x = radius * Math.sin(theta);
		object.position.z = radius * Math.cos(theta) + zDepth;
		object.position.y = source[i].position.y
		vector.y = object.position.y;
		object.lookAt( vector );
		destination.push( object );
	}
}

function getSphereTargets(source, destination, radius)
{
	var vector = new THREE.Vector3();
	vector.copy( camera.position )
	var phi, theta, object;
	for ( var i = 0, l = source.length; i < l; i ++ ) 
	{
		phi = Math.acos( -1 + ( 2 * i ) / l );
		theta = Math.sqrt( l * Math.PI ) * phi;
		object = new THREE.Object3D();
		object.position.y = radius * Math.sin( theta ) * Math.sin( phi );
		object.position.x = radius * Math.cos( theta ) * Math.sin( phi );
		object.position.z = radius * Math.cos( phi );
		vector.copy( object.position ).multiplyScalar( 2 );
		object.lookAt( vector );
		destination.push( object );
	}
}

function getHelixTargets(source, destination, radius)
{
	var vector = new THREE.Vector3();
	var phi, object;
	for ( var i = 0, l = source.length; i < l; i ++ ) 
	{
		var phi = i * 0.175 + Math.PI;
		object = new THREE.Object3D();
		object.position.x = radius * Math.sin( phi );
		object.position.y = - ( i * 8 ) + 450;
		object.position.z = radius * Math.cos( phi );
		vector.copy( object.position );
		vector.x *= 2;
		vector.z *= 2;
		object.lookAt( vector );
		destination.push( object );
	}
}

function getGridTargets(source, destination)
{
	var object;
	for ( var i = 0; i < source.length; i ++ ) {
		object = new THREE.Object3D();
		object.position.x = ( ( i % 5 ) * 400 ) - 800;
		object.position.y = ( - ( Math.floor( i / 5 ) % 5 ) * 400 ) + 800;
		object.position.z = ( Math.floor( i / 25 ) ) * 1000 - 2000;
		destination.push( object );
	}
}

function getComitteeTargetsOld(source, destination, gap, zDepth)
{
	var length1, length2, length3, object, theta, arc, radius1, radius2, radius3, height1, height2, height3;
	length1 = length2 = length3 = Math.floor(source.length / 3);
	if (source.length % 3 == 1) { length2++; }
	else if (source.length % 3 == 2) { length1++; length3++; }
	height1 = height2 = height3 = arc = 0;
	for( var i = 0; i < length1; i++ )
	{
		var rect = source[i].getBoundingClientRect();
		arc += (rect.right - rect.left) + gap;
		if ((rect.bottom - rect.top) > height1) height1 = rect.bottom - rect.top;
	}
	radius1 = arc / (2 * Math.PI);
	arc = 0;
	for( var i = length1; i < length1 + length2; i++ )
	{
		var rect = source[i].getBoundingClientRect();
		arc += (rect.right - rect.left) + gap;
		if ((rect.bottom - rect.top) > height2) height2 = rect.bottom - rect.top;
	}
	radius2 = arc / (2 * Math.PI);
	arc = 0;
	for( var i = length1 + length2; i < length1 + length2 + length3; i++ )
	{
		var rect = source[i].getBoundingClientRect();
		arc += (rect.right - rect.left) + gap;
		if ((rect.bottom - rect.top) > height3) height3 = rect.bottom - rect.top;
	}
	radius3 = arc / (2 * Math.PI);
	theta = 2 * Math.PI / length1;
	for( var i = 0; i < length1; i++ )
	{
		object = new THREE.Object3D();
		object.position.x = radius1 * Math.sin(i * theta);
		object.position.y = ( height1 + height2 )/ 2;
		object.position.z = radius1 * Math.cos(i * theta) + zDepth;
		destination.push( object );
	}
	theta = 2 * Math.PI / length2;
	for( var i = 0; i < length2; i++ )
	{
		object = new THREE.Object3D();
		object.position.x = radius2 * Math.sin((Math.PI / 4) + i * theta);
		object.position.y = 0;
		object.position.z = radius2 * Math.cos((Math.PI / 4) + i * theta) + zDepth;
		destination.push( object );
	}
	theta = 2 * Math.PI / length3;
	for( var i = 0; i < length3; i++ )
	{
		object = new THREE.Object3D();
		object.position.x = radius3 * Math.sin(i * theta);
		object.position.y = -( height3 + height2 )/ 2;;
		object.position.z = radius3 * Math.cos(i * theta) + zDepth;
		destination.push( object );
	}
}

function getComitteeTargets(source, destination, gap, pageElement)
{
	var length1, length2, object, theta, arc, radius1, radius2, height1, height2;
	var vector = new THREE.Vector3();
	vector.copy( camera.position );
	vector.z += 1500;
	length1 = length2 = Math.floor(source.length / 2);
	if (source.length % 2 == 1) { length2++; }
	height1 = height2 = arc = 0;
	for( var i = 0; i < length1; i++ )
	{
		var rect = source[i];
		arc += (rect.right - rect.left) + gap;
		if ((rect.bottom - rect.top) > height1) height1 = rect.bottom - rect.top;
	}
	radius1 = arc / (2 * Math.PI);
	arc = 0;
	for( var i = length1; i < length1 + length2; i++ )
	{
		var rect = source[i];
		arc += (rect.right - rect.left) + gap;
		if ((rect.bottom - rect.top) > height2) height2 = rect.bottom - rect.top;
	}
	radius2 = arc / (2 * Math.PI);
	//console.log("height = " + (height1 + height2));
	var zDepth = camera.position.z - ((height1 + height2 + headerLength + footerLength ) /(2 * Math.tan((Math.PI/180)*cameraAngle / 2))) - radius2;
	pageElement.zDepth = zDepth;
	theta = 2 * Math.PI / length1;
	for( var i = 0; i < length1; i++ )
	{
		object = new THREE.Object3D();
		object.position.x = radius1 * Math.sin(i * theta);
		object.position.y = ( height1 )/ 2;
		object.position.z = radius1 * Math.cos(i * theta) + zDepth;
		vector.y = object.position.y;
		object.lookAt( vector );
		destination.push( object );
	}
	theta = 2 * Math.PI / length2;
	for( var i = 0; i < length2; i++ )
	{
		object = new THREE.Object3D();
		object.position.x = radius2 * Math.sin((Math.PI) + i * theta);
		object.position.y = -( height2 )/ 2;
		object.position.z = radius2 * Math.cos((Math.PI) + i * theta) + zDepth;
		vector.y = object.position.y;
		object.lookAt( vector );
		destination.push( object );
	}
}

function getHomeTargets(source, destination, depth, radiusExtra)
{
	var radius, maxDiag, rect, diag, theta, object;
	maxDiag = 0;
	for (var i = 1; i < source.length; i++ )
	{
		rect = source[i];
		diag = Math.sqrt(Math.pow(rect.right - rect.left , 2) + Math.pow(rect.bottom - rect.top , 2)) / 2;
		if (diag > maxDiag) maxDiag = diag;
	}
	// CHANGE THE VALUE OF THIS TO CONTROL RADIUS
	maxDiag-=100;
	rect = source[0];
	radius = Math.sqrt(Math.pow(rect.right - rect.left , 2) + Math.pow(rect.bottom - rect.top , 2)) / 2 + maxDiag + radiusExtra;
	homePageRadius = radius + maxDiag;
	//console.log(radius);
	theta = 2 * Math.PI / (source.length - 1);
	object = new THREE.Object3D(0, 0, 0);
	destination.push(object);
	for (var i = 1; i < source.length; i++ )
	{
		object = new THREE.Object3D();
		object.position.x = radius * Math.cos((i - 1) * theta);
		object.position.y = radius * Math.sin((i - 1) * theta);
		object.position.z = depth * Math.sin(((2 * Math.PI) * (i - 1) / (source.length - 1) ));
		destination.push(object);
	}
}

function getComitteePageTarget(source, destination)
{
	var object, horiz, vert;
	var len = source.length;
	var vect = new THREE.Vector3();
	vect.copy( pivot );
	switch(len)
	{
		case 1:
			console.log('1');
			object = new THREE.Object3D(0, 0, 0);
			destination.push();
			break;
		case 2:
			console.log('2');
			horiz = iconWidth / 2 + 50;
			object = new THREE.Object3D(-horiz, 0, 0);
			destination.push();
			object = new THREE.Object3D(horiz, 0, 0);
			destination.push();
			break;
		case 3:
			console.log('3');
			horiz = iconWidth / 2 + 50;
			vert = iconHeight / 2 + 50;
			object = new THREE.Object3D(0, vert, 0);
			destination.push();
			object = new THREE.Object3D(-horiz, -vert, 0);
			destination.push();
			object = new THREE.Object3D(horiz, -vert, 0);
			destination.push();
			break;
		case 4:
			console.log('4');
			horiz = iconWidth / 2 + 50;
			vert = iconHeight / 2 + 50;
			object = new THREE.Object3D(-horiz, vert, 0);
			destination.push();
			object = new THREE.Object3D(horiz, vert, 0);
			destination.push();
			object = new THREE.Object3D(-horiz, -vert, 0);
			destination.push();
			object = new THREE.Object3D(horiz, -vert, 0);
			destination.push();
			break;
		case 5:
			console.log('5');
			horiz = iconWidth / 2 + 50;
			vert = iconHeight / 2 + 50;
			object = new THREE.Object3D(-horiz, vert, 0);
			destination.push();
			object = new THREE.Object3D(horiz, vert, 0);
			destination.push();
			object = new THREE.Object3D(-horiz, -vert, 0);
			destination.push();
			object = new THREE.Object3D(horiz, -vert, 0);
			destination.push();
			break;
		case 6:
			console.log('6');
			for (var i = 0; i < source.length; i++ )
			{

			}
			break;
		case 7:
			console.log('7');
			for (var i = 0; i < source.length; i++ )
			{

			}
			break;
		case 8:
			console.log('8');
			for (var i = 0; i < source.length; i++ )
			{

			}
			break;
		default :
			console.log('default');
			for (var i = 0; i < source.length; i++ )
			{

			}
	}
}

function getRandomTarget(object) //always outside the view
{
	object.position.z = (Math.random() * 5000 + 3000) * Math.pow(-1, Math.floor(Math.random() * 100));
	var offsetY = (camera.position.z - object.position.z) * Math.tan((Math.PI/180) * cameraAngle / 2);
	object.position.y = (Math.random() * 2000 + offsetY + window.innerHeight / 2 + 1000) * Math.pow(-1, Math.floor(Math.random() * 100));
	object.position.x = (Math.random() * 2000 + offsetY * (window.innerWidth / window.innerHeight) + window.innerWidth / 2 + 1000) * Math.pow(-1, Math.floor(Math.random() * 100));
	object.rotation.x = Math.random() % Math.PI*2;
	object.rotation.y = Math.random() % Math.PI*2;
	object.rotation.z = Math.random() % Math.PI*2;
}

function loadWGLObjects(source, destination)
{
	var object;
	for ( var j = 0; j < source.length; j ++ )
	{
		object = new THREE.CSS3DObject( source[j] );
		getRandomTarget(object);
		destination.push( object );
	}
}

function unloadPage( elements )
{
	for ( var i = 0; i < elements.length; i++ )
	{
		scene.remove(elements[i]);
	}
}

function loadPage( element )
{
	if ( element == undefined ) return;
	for ( var i = 0; i < element.WGLobjects.length; i++ )
	{
		scene.add(element.WGLobjects[i]);
	}
}

function explodePage( element )
{
	if ( element == undefined ) return;
	var object;
	var randomTargets = [];
	for ( var i = 0; i < element.WGLobjects.length; i++ )
	{
		object = new THREE.Object3D();
		getRandomTarget(object);
		randomTargets.push(object);
	}
	transform(element.WGLobjects, randomTargets, 3000, 0, true, element);
}

function explodeTabbedPage( element )
{
	if ( element == undefined ) return;
	for (x in element)
	{
		explodePage(element[ x ]);
	}
}

function getPage(pageName, tabName)
{		
	alpha = 0;
	var duration = 2000, variation = 1500;
	explodePage( currentPage );
	explodePage( currentSideBar );
	explodeTabbedPage( currentTabbedPage );
	currentPage = allPages[pageName];
	currentSideBar = allSideBars[pageName];
	currentTabbedPage = undefined;
	//console.log(pageName+" "+tabName);
	// console.log()
	if (currentPage == undefined)
	{
		currentTabbedPage = allTabbedPages[pageName];
		if (currentTabbedPage == undefined)
		{
			var tempArr = pageName.split('@')
			getPage(tempArr[0], pageName);
			return;
		}
		if (tabName == undefined)
		{
			for (var y in allTabbedPages[pageName])
			{
				tabName = y;
				break;
			}
		}
		currentPage = allTabbedPages[pageName][tabName];
		for (var x in allTabbedPages[pageName])
		{
			var tabPage = allTabbedPages[pageName][ x ];
			loadPage( tabPage );
			transform(tabPage.WGLobjects, tabPage.targets.page, duration, variation, false, tabPage);
		}
		var resultTable=[];
		getNextScroll(currentPage.targets.page, currentPage.initialPositions, resultTable, alpha);
		transform(currentPage.WGLobjects, resultTable, duration, variation, false, currentPage);
	}
	else
	{
		loadPage( currentPage );
		if (currentPage.name == 'homePage') variation = 0;
		transform(currentPage.WGLobjects, currentPage.targets.page, duration, variation, false, currentPage);
	}
	if (currentSideBar != undefined)
	{
		loadPage( currentSideBar );
		transform(currentSideBar.WGLobjects, currentSideBar.targets.page, duration, variation, false, currentSideBar);
	}
	addHistory(pageName);
	if(pageName == 'homePage') $("#menu").fadeOut();
	else $("#menu").fadeIn();
		//console.log(currentPage.name);
	if (!currentPage || currentPage.name.match("homePage"))
		history.pushState(null, null, " ");
	else
		//console.log(currentPage.name);
		history.pushState(null, null, "#"+currentPage.name);
}

function message(name, title, message, width)
{
	this.name = name;
	this.title = title;
	this.message = message;
	this.width = width;
	this.WGLobject;
	this.target;
	this.ele;
	this.rect;
	this.init = function()
	{
		var ele = document.createElement('span');
		ele.setAttribute("style",'width: '+this.width+'px; font-size:25px; background:rgba(200,200,200,0.9); padding: 10px;');
		var content = '<table style = " width: '+this.width+'px;"><tr><td>';
		content += '<h1>'+this.title+'</h1>';
		content += '</td><td align = "right"><span style = "color: red; cursor: pointer;" onclick = "allMessagges[\''+name+'\'].removeMessage()" >X</span>';
		content += '</td></tr>';
		content += '<tr><td colspan="2">';
		content += this.message;
		content += '</td></tr></table>';
		ele.innerHTML = content;
		this.ele = ele;
		this.rect = ele.getBoundingClientRect();
		var object = new THREE.CSS3DObject( ele );
		getRandomTarget(object);
		this.WGLobject = object;
		var tar = new THREE.Object3D();
		tar.position.z = 20;
		this.target = tar;
		if(allMessagges[name] != undefined) allMessagges[name].removeMessage();
		allMessagges[name] = this;
	}
	this.showMessage = function()
	{
		scene.add(this.WGLobject);
		transformSingle(this.WGLobject, this.target, 1500, 0, false);
	}
	this.removeMessage = function()
	{
		var object = new THREE.Object3D();
		getRandomTarget(object);
		transformSingle(this.WGLobject, object, 2000, 0, false, true);
		console.log('Removed!!!');
	}
}

function getUpdateTargets()
{
	var boxwidth = initialWidth/2 - homePageRadius;
	var boxheight = window.innerHeight/2 - headerLength - footerLength;
	var count = 0;
	for (var x in allUpdates)
	{
		var rect = allUpdates[x].rect;
		var treshX = homePageRadius + (rect.right - rect.left)/2;
		var rangeX = boxwidth - (rect.right - rect.left);
		var rangeY = boxheight - (rect.bottom - rect.top);
		var object= new THREE.Object3D();
		object.position.x = (Math.random() * rangeX + treshX) * Math.pow(-1, Math.floor(Math.random() * 100));
		object.position.y = (Math.random() * rangeY) * Math.pow(-1, Math.floor(Math.random() * 100));
		object.position.z = (count * 30 - 500);
		allUpdates[x].target = object;
		count++;
	}
}

function getDictionaryLength(dict)
{
	var length = 0;
	for (var x in dict)
	{
		length++;
	}
	return length;
}

function generateUpdates(titleMessagePairs)
{
	var upd;
	for (var x = 0; x < titleMessagePairs.length; x++)
	{
		upd = new message("update"+getRand(), titleMessagePairs[x].title, titleMessagePairs[x].message, 350);
		upd.init();
		allUpdates[upd.name] = upd;
	}
	getUpdateTargets();
}

function showUpdates()
{
	for (var x in allUpdates)
	{
		allUpdates[x].showMessage();
	}
}

var curIndex = 0;

function getNextPage() //remove this later
{
	curIndex++;
	if ( curIndex >= allPagesIndex.length ) curIndex = 0;
	getPage(allPagesIndex[curIndex]);
}

function getPrevPage() //remove this later
{
	curIndex--;
	if ( curIndex < 0 ) curIndex = allPagesIndex.length - 1;
	getPage(allPagesIndex[curIndex]);
}

function initPages()
{
	var children = [];
	var tempPage;
	getAllChildren(container, REpage, children);
	for ( var i = 0 ; i < children.length ; i++ )
	{
		tempPage = new page(children[i], true, 0);
		tempPage.initPage();
		allPagesIndex.push(tempPage.name);
		allPages[tempPage.name] = tempPage;
	}
}

function initTabbedPages()
{
	var children = [];
	var tempPage, radiusAdjust = -600;
	getAllChildren(container, REtabgroup, children);
	for ( var i = 0 ; i < children.length ; i++ )
	{
		var grandChildren = [];
		getAllChildren(children[i], REtabs, grandChildren);
		//console.log(children[i].childNodes );
		//console.log(grandChildren);
		var name = children[i].id.substr(8);
		allTabbedPages[name] = {};
		for ( var j = 0 ; j < grandChildren.length ; j++ )
		{
			//console.log(grandChildren[j]);
			tempPage = new page(grandChildren[j], true, (j + 1) * radiusAdjust);
			tempPage.initPage();
			allTabbedPages[name][tempPage.name] = tempPage;
		}
	}
}

function initSideBars()
{
	var children = [];
	var tempPage;
	getAllChildren(container, REside, children);
	for ( var i = 0 ; i < children.length ; i++ )
	{
		tempPage = new page(children[i], true, 0);
		tempPage.initPage();
		allSideBars[tempPage.name] = tempPage;
	}
}

function initForms()
{
	var children = [];
	var tempPage;
	getAllChildren(container, REform, children);
	for ( var i = 0 ; i < children.length ; i++ )
	{
		tempPage = new page(children[i], false, 300);
		tempPage.initPage();
		allForms[tempPage.name] = tempPage;
	}
}

function initAllCommittees()
{
	var committees = document.getElementById("allCommittees");
	var tempPage = new page(committees, false, 0);
	tempPage.initComittee();
	allPagesIndex.push(tempPage.name);
	allPages[tempPage.name] = tempPage;
}

function initHomePage()
{
	var homePage = document.getElementById("homePage");
	var tempPage = new page(homePage, false, 0);
	tempPage.initHome();
	allPagesIndex.push(tempPage.name);
	allPages[tempPage.name] = tempPage;
}

function initSponsors()
{
	var sponsors = document.getElementById("sponsors");
	var tempPage = new page(sponsors, false, 0);
	tempPage.initHome();
	allPagesIndex.push(tempPage.name);
	allPages[tempPage.name] = tempPage;
}

function setCameraZ()
{
	camera.position.z = window.innerHeight / ( 2 * Math.tan( ( Math.PI / 180 ) * ( cameraAngle / 2 ) ) ) * ( initialWidth / window.innerWidth );
}

function init() 
{
	container = document.getElementById("container");
	cameraAngle = 65;
	camera = new THREE.PerspectiveCamera( cameraAngle, window.innerWidth / window.innerHeight, 1, 5000 );
	setCameraZ();
	scene = new THREE.Scene();
	
	initPages();
	initSideBars();
	initTabbedPages();
	initForms();
	initAllCommittees();
	initHomePage();
	//initSponsors();

	renderer = new THREE.CSS3DRenderer();
	renderer.setSize( window.innerWidth, window.innerHeight);
	renderer.domElement.style.position = 'absolute';
	container.innerHTML="";
	container.appendChild( renderer.domElement );

}

function transform(sources, destinations, duration, variation, destroyOnComplete, pageObject) 
{
	TWEEN.remove(renderTween);
	if( pageObject != undefined )
		if( pageObject.pageTween != undefined ) { TWEEN.remove(pageObject.pageTween); }
	for ( var i = 0; i < sources.length; i ++ )
	{
		var object = sources[i];
		var target = destinations[i];
		if( allTweens[object.id] != undefined )
		{
			TWEEN.remove(allTweens[object.id][0]);
			TWEEN.remove(allTweens[object.id][1]);
			TWEEN.remove(allTweens[object.id][2]);
		}
		var pos = new TWEEN.Tween( object.position )
			.to( { x: target.position.x, y: target.position.y, z: target.position.z }, Math.random() * variation + duration )
			.easing( TWEEN.Easing.Elastic.Out )
			.start();
		var rot = new TWEEN.Tween( object.rotation )
			.to( { x: target.rotation.x, y: target.rotation.y, z: target.rotation.z }, Math.random() * variation + duration )
			.easing( TWEEN.Easing.Exponential.InOut )
			.start();
		var dest = new TWEEN.Tween( object )
			.to( {}, duration + variation )
			.onComplete( function() { if (destroyOnComplete == true) scene.remove( this );})
			.start();
		allTweens[object.id] = [pos, rot, dest];
	}
	renderTween = new TWEEN.Tween( this )
		.to( {}, duration + variation )
		.onUpdate( render )
		.start();
	new TWEEN.Tween( this )
		.to( {}, duration + variation )
		.onComplete( function() { if (pageObject != undefined ){ pageObject.onComplete(); }} )
		.start();
}

function transformSingle(source, destination, duration, variation, dontRender, destroyOnComplete) 
{
	var object = source;
	var target = destination;
	if( allTweens[object.id] != undefined )
	{
		TWEEN.remove(allTweens[object.id][0]);
		TWEEN.remove(allTweens[object.id][1]);
		TWEEN.remove(allTweens[object.id][2]);
	}
	var pos = new TWEEN.Tween( object.position )
		.to( { x: target.position.x, y: target.position.y, z: target.position.z }, Math.random() * variation + duration )
		.easing( TWEEN.Easing.Elastic.Out )
		.start();
	var rot = new TWEEN.Tween( object.rotation )
		.to( { x: target.rotation.x, y: target.rotation.y, z: target.rotation.z }, Math.random() * variation + duration )
		.easing( TWEEN.Easing.Exponential.InOut )
		.start();
	var dest = new TWEEN.Tween( object )
		.to( {}, duration + variation )
		.onComplete( function() { if (destroyOnComplete == true) scene.remove( this );})
		.start();
	allTweens[object.id] = [pos, rot, dest];
	if (dontRender != true) new TWEEN.Tween( this )
		.to( {}, duration + variation )
		.onUpdate( render )
		.start();
}

function onWindowResize() 
{
	camera.aspect = window.innerWidth / window.innerHeight;
	camera.updateProjectionMatrix();
	setCameraZ();
	renderer.setSize( window.innerWidth, window.innerHeight );
	render();
}

function animate() 
{
	requestAnimationFrame( animate );
	TWEEN.update();
}

function render() 
{
	renderer.render( scene, camera );
}

function start() 
{
	setEvents();
	init();
	
	animate();
}
function addHistory(itemName){
	if(history2[history2.length-1] != itemName)
		history2.push(itemName);
}
function backHistory(){
	itemName=history2.pop();
	var lastItem = history2[history2.length-1];
	if (lastItem != undefined)
	{
		getPage(history2[history2.length-1]);
	}
}







