helixTrackControls= function (camera,scene) {
	this.camera=camera;
	this.scene=scene;
	this.theta=0.1;// speed of rotation
	this.goLeft=function(){
		var x = this.camera.position.x;
		var z = this.camera.position.z;
		this.camera.position.x = x * Math.cos(this.theta) + z * Math.sin(this.theta);
		this.camera.position.z = z * Math.cos(this.theta) - x * Math.sin(this.theta);
		this.camera.lookAt(this.scene);
	};
	this.goRight=function(){
		var x = this.camera.position.x;
		var z = this.camera.position.z;
		this.camera.position.x = x * Math.cos(this.theta) - z * Math.sin(this.theta);
		this.camera.position.z = z * Math.cos(this.theta) + x * Math.sin(this.theta);
		this.camera.lookAt(this.scene);
	};
	this.moveLeft=function(num){
		for(var i=0;i<num;i++)
			this.goLeft();
	}
	this.moveRight=function(num){
		for(var i=0;i<num;i++)
			this.goRight();
	}
}
