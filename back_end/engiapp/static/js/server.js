function login(){

$.ajax({
  url: "/login/",
  type: 'post',
  contentType: "application/x-www-form-urlencoded",
  data: $('#Login form').serialize(),
  success: function(data, textStatus, jqXHR){
    var statusCode = jqXHR.status;
    var statusText = jqXHR.statusText;
    console.log("Success!!");
    console.log(data);
    console.log(data['fname']);
    // user = new person();
    // person.fname= "";
    // person.lname= "";
    // person.email = "";
    console.log(statusCode);
    $('#Login').hide();
    $('#Signup').hide();
    get_profile(data);
    $('#loggedIn').show();
  },
  error: function (xhr, desc, err) {
    console.log(xhr);
    console.log("Desc: " + desc + "\nErr:" + err);
  }
});

}

function signup(){

$.ajax({
  url: "/register/",
  type: 'post',
  contentType: "application/x-www-form-urlencoded",
  data: $('#Signup form').serialize(),
  success: function(data, textStatus, jqXHR){
    var statusCode = jqXHR.status;
    var statusText = jqXHR.statusText;
    // console.log("Success!!");
    console.log(statusCode);
    $('#Login').hide();
    $('#Signup').hide();
    get_profile(data);
    $('#loggedIn').show();
  },
  error: function (xhr, desc, err) {
    console.log(xhr);
    console.log("Desc: " + desc + "\nErr:" + err);
  }
});

}


function logout(){

$.ajax({
  url: "/logout",
  type: 'get',
  // contentType: "application/x-www-form-urlencoded",
  // data: $('#Signup form').serialize(),
  success: function(data, textStatus, jqXHR){
    var statusCode = jqXHR.status;
    var statusText = jqXHR.statusText;
    // console.log("Success!!");
    user=0;
    $('#loggedIn').hide();
    $('#Login').show();
    $('#Signup').show();
    console.log(statusCode);
  },
  error: function (xhr, desc, err) {
    console.log(xhr);
    console.log("Desc: " + desc + "\nErr:" + err);
  }
});

}

function get_profile(data){
  $("#email").html(data['email']);
  $("#fname").html(data['fname']);
  $("#lname").html(data['lname']);
}