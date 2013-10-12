var spinTween = function( spingObject){

}
var App = {};
App.Models = {};
App.Collections = {};
App.Views = {};

App.Models.Event = Backbone.Model.extend({

});
App.Models.SubEvent = Backbone.Model.extend({

});
App.Collections.Subevents = Backbone.Collection.extend({
	model: App.Models.SubEvent
});

App.Collections.Events = Backbone.Collection.extend({
	model: App.Models.Event
});

App.Views.EventView = Backbone.View.extend({
	tagName: "div",
	className: "element",
	events: {
		"click": "selected"
	},
	initialize: function(){
		this.bind("unselect", this.unselected);
		
		this.object =  new THREE.CSS3DObject( this.el );
		this.el.style.backgroundColor = 'rgba(0,55,127,' + ( Math.random() * 0.5 + 0.25 ) + ')';
		// setting text here
		this.$el.html(this.model.toJSON().name+"<br /><br />"+this.model.toJSON().info+'<div class="ribbon-wrapper-green"><div class="ribbon-green">NEW</div></div>');
		// this will put elements in random positions
		this.object.position.x = Math.random() * 4000 - 2000;
		this.object.position.y = Math.random() * 4000 - 2000;
		this.object.position.z = Math.random() * 4000 - 2000;

	},
	render: function(event){
		return this;
	},

	selected: function(){
		console.log(this.model.toJSON().name + " is being clicked");
		App.eventsCollectionView.trigger("itemSelected", this);

		
	},
	unselected: function(){
		new TWEEN.Tween(this.object.rotation ).to( {
			x: Math.random() * 2 * Math.PI,
			z: Math.random() * 2 * Math.PI }, 5000 )
		.easing( TWEEN.Easing.Elastic.Out).start();
		this.$el.fadeOut(2000);


	}


});
App.Views.SubeventView = Backbone.View.extend({
	tagName: "div",
	className: "element",
	subeelements: [],
	events: {
		"click" : "selected"
	},
	initialize: function(){
		this.on("destroy", this.destroy);
		this.object =  new THREE.CSS3DObject( this.el );
		this.el.style.backgroundColor = 'rgba(0,50,127,' + ( Math.random() * 0.5 + 0.25 ) + ')';
		this.$el.html(this.model.toJSON().name);
		this.object.position.x = Math.random() * 4000 - 2000;
		this.object.position.y = Math.random() * 4000 - 2000;
		this.object.position.z = Math.random() * 4000 - 2000;

	},
	selected: function(){
		console.log("subview is selected");
		App.eventsCollectionView.trigger("subviewSelect", this);

	},
	destroy: function(){
		this.$el.fadeOut();
	}
	

});

App.Views.SubeventsCollectionView = Backbone.View.extend({
	objects: [],
	views: [],
	initialize: function(){
		this.render();
	},
	render: function(event){
		this.collection.each(function(subevent){
			var subeventView = new App.Views.SubeventView({model: subevent});
			
			this.objects.push( subeventView.object );
			this.views.push(subeventView);

		}, this);
		return this;
	}
	

});
App.Views.EventsCollectionView = Backbone.View.extend({
	el: $("#container"),
	objects: [],
	targets :  {
			helix:[],
		},

	camera : new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 1, 5000 ),
	scene: new THREE.Scene(),
	renderer: new THREE.CSS3DRenderer(),
	
	views: [],
	initialize: function(){
		this.once("itemSelected", this.itemSelected, this);
		this.once("subviewSelect", this.subviewSelected, this);
		this.camera.position.z = 1350;
		this.camera.position.y = 150;

		this.render();

		var vector = new THREE.Vector3();

		for ( var i = 0, l = this.objects.length; i < l; i ++ ) {

			var phi = i * 0.175 + Math.PI;

			var object = new THREE.Object3D();
			var radius = 1100;
			object.position.x = radius * Math.sin( phi );
			//object.position.y = - ( i * 8 ) + 250;
			object.position.y = 100;
			object.position.z = radius * Math.cos( phi );

			vector.copy( object.position );
			vector.x *= 2;
			vector.z *= 2;

			object.lookAt( vector );

			this.targets.helix.push( object );

		}


		this.renderer.setSize( window.innerWidth, window.innerHeight );
		this.renderer.domElement.style.position = 'absolute';
		this.el.appendChild(this.renderer.domElement);

		this.controls = new THREE.TrackballControls( this.camera, this.renderer.domElement );
		this.controls.rotateSpeed = 0.5;
		this.controls.addEventListener( 'change', this.renderScene );

		this.control=new helixTrackControls(this.camera,vector);
		// for 20 u need 14
		this.control.moveRight(14);

		this.transform( this.targets.helix, 2000 );
			
	},

	//custom events
	itemSelected: function(eventItem){
		this.objects = [eventItem.object];
		for( i = 0; i<= this.scene.__objects.length; i ++){
			var object = this.scene.__objects[i];
			if (  object !== eventItem.object){ 
				this.scene.remove(object);
				_.each(this.views,function(eventView){
					
						if (eventItem !== eventView){
							eventView.trigger("unselect");

						}
					
				});
				 }
		}



	//start the subview

	this.subeventsCollectionView = new App.Views.SubeventsCollectionView( {collection : new App.Collections.Subevents(subevents)} );
	var mainView = this;
	_.each(App.eventsCollectionView.subeventsCollectionView.objects, function(object){
	 this.scene.add(object);
	 mainView.objects.push(object);
	});
	var x = [];
	for ( var i = 0; i < this.objects.length; i ++ ) {

		var object = new THREE.Object3D();
		object.position.x = ( ( i % 3 ) * 200 ) - 300;
		object.position.y = ( - ( Math.floor( i / 3 ) % 3 ) * 200 ) + 80;
		object.position.z = ( Math.floor( i / 9 ) );

		x.push( object );

	}
	
	this.transform(x, 1000);
	var target = new THREE.Object3D();
	target.position.x = 0;
	target.position.y = 0;
	target.position.z = ( Math.floor( 3 / 25 ) ) + 300;

	var x = new THREE.Object3D();
	x.position.x = 0;
	x.position.y = 0;
	x.position.z = 1;
	var vector = new THREE.Vector3( );
	vector.copy( x.position )

	target.lookAt( vector );
	
	this.transformCamera(target, 1000);

},
subviewSelected: function(subView){
	MainView = this;
	_.each(this.subeventsCollectionView.views,function(view){
				
				if(view.object !== subView.object){
					
					MainView.objects.pop(view.object);
					view.trigger("destroy");
				}
				});
	
},
updateControls: function(){
	controls = this.controls;
	controls.update();
},

	render: function(event){
		this.collection.each(function(eventModel){
			var eventView = new App.Views.EventView({model: eventModel});
			eventView.render();
			this.scene.add(eventView.object);
			this.objects.push( eventView.object );
			this.views.push(eventView);

		}, this);

		return this;
	},

	transform: function(targets, duration){
		TWEEN.removeAll();
		for ( var i = 0; i < this.objects.length; i ++ ) {

			var object = this.objects[ i ];
			var target = targets[ i ];

			new TWEEN.Tween( object.position )
				.to( { x: target.position.x, y: target.position.y, z: target.position.z }, Math.random() * duration + duration )
				.easing( TWEEN.Easing.Exponential.InOut )
				.start();

			new TWEEN.Tween( object.rotation )
				.to( { x: target.rotation.x, y: target.rotation.y, z: target.rotation.z }, Math.random() * duration + duration )
				.easing( TWEEN.Easing.Exponential.InOut )
				.start();

		}

		new TWEEN.Tween( this )
			.to( {}, duration * 2 )
			.onUpdate( this.renderScene )
			.start();

	},

	transformCamera: function(target, duration){
		camera = this.camera;
		new TWEEN.Tween(camera.position)
			.to( { x: target.position.x, y: target.position.y, z: target.position.z }, Math.random() * duration + duration )
				.easing( TWEEN.Easing.Exponential.InOut )
				.start();
		new TWEEN.Tween( camera.rotation )
				.to( { x: target.rotation.x, y: target.rotation.y, z: target.rotation.z }, Math.random() * duration + duration )
				.easing( TWEEN.Easing.Exponential.InOut )
				.start();
		new TWEEN.Tween( camera.up )
				.to( { x: target.up.x, y: target.up.y, z: target.up.z }, Math.random() * duration + duration )
				.easing( TWEEN.Easing.Exponential.InOut )
				.start();

	},
	renderScene: function(){
		renderer = App.eventsCollectionView.renderer;
		camera = App.eventsCollectionView.camera;
		scene = App.eventsCollectionView.scene;
		renderer.render( scene, camera );

	},

	onWindowResize: function(){
	renderer = App.eventsCollectionView.renderer;
	camera = App.eventsCollectionView.camera;
		
	camera.aspect = window.innerWidth / window.innerHeight;
	camera.updateProjectionMatrix();

	renderer.setSize( window.innerWidth, window.innerHeight );

}
});



App.init = function(){
	App.eventsCollection = new App.Collections.Events(publicEvents);
	
	App.eventsCollectionView = new App.Views.EventsCollectionView({collection: App.eventsCollection}); 
	var i = 0;
	function animate(t ) {
		/*if(i <= 300){ App.eventsCollectionView.camera.position.z -= 8};
		i+= 1;
		App.eventsCollectionView.camera.lookAt(App.eventsCollectionView.scene.position);*/
		
		App.eventsCollectionView.renderScene();
		requestAnimationFrame( animate );
		TWEEN.update();
		App.eventsCollectionView.updateControls();

	};
	window.addEventListener( 'resize', App.eventsCollectionView.onWindowResize, false );
	animate(new Date().getTime());

} 

App.init();

window.onload=function(){
}

