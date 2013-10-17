login_block=0;
function login(){
if(login_block!=0)
	return;
login_block=1;
$.ajax({
  url: "server.php?action=login",
  type: 'post',
  //contentType: "application/x-www-form-urlencoded",
  data: $('#Login form').serialize(),
  success: function(data, textStatus, jqXHR){
    var statusCode = jqXHR.status;
    var statusText = jqXHR.statusText;
    data=jQuery.parseJSON( data );
   //console.log(typeof eval(data));
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
    login_block=0;
  },
  error: function (xhr, desc, err) {
    console.log(xhr);
    console.log("Desc: " + desc + "\nErr:" + err);
    $('#error_login').html('Wrong Email and Password combination');
    $('#error_login').attr('class', 'alert alert-error');
    login_block=0;
  }
});
$("login_button").removeAttr("disabled"); 
}
signup_block=0;
function signup(){
if(signup_block!=0)
	return;
signup_block=1;
$.ajax({
  url: "server.php?action=signup",
  type: 'post',
 // contentType: "application/x-www-form-urlencoded",
  data: $('#Signup form').serialize(),
  success: function(data, textStatus, jqXHR){
    var statusCode = jqXHR.status;
    var statusText = jqXHR.statusText;
    // console.log("Success!!");
    console.log(statusCode);
    // $('#Login').hide();
    // $('#Signup').hide();
    // get_profile(data);
    // $('#loggedIn').show();
    $('#error_signup').html('Sign up successful!! Please login ');
    $('error_signup').attr('class', 'success');
    signup_block=0;
  },
  error: function (xhr, desc, err) {
    console.log(xhr);
    console.log("Desc: " + desc + "\nErr:" + err);
    $('#error_signup').html('Error while Submitting!!');
    $('#error_signup').attr('class', 'alert alert-error');
    signup_block=0;
  }
});
$("signup_button").removeAttr("disabled"); 
}

logout_block=0;
function logout(){
if(logout_block!=0)
	return;
$.ajax({
  url: "server.php?action=logout",
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
    if(currentPage.name=="Profile")
    	getPage("homePage");
    console.log(statusCode);
    logout_block=0;
  },
  error: function (xhr, desc, err) {
    console.log(xhr);
    console.log("Desc: " + desc + "\nErr:" + err);
    logout_block=0;
  }
});

}

function get_profile(data){
  $("#email").html(data['email']);
  $("#fname").html(data['fname']);
  $("#lname").html(data['lname']);
}

function register_single_event(event_id){
  $.ajax({
  url: "server.php?action=register_event&event_id="+event_id,
  type: 'post',
  //contentType: "application/x-www-form-urlencoded",
  data: "",
  success: function(data, textStatus, jqXHR){
    var statusCode = jqXHR.status;
    var statusText = jqXHR.statusText;
    // console.log("Success!!");
    console.log(statusCode);
    get_profile_page(1);
    // $('#Login').hide();
    // $('#Signup').hide();
    // get_profile(data);
    // $('#loggedIn').show();
  },
  error: function (xhr, desc, err) {
    var mess = new message("notLoggedIn", "Not Logged In", "Please login to register for the event.", "400");
    mess.init();
    mess.showMessage();
    console.log(xhr);
    console.log("Desc: " + desc + "\nErr:" + err);
  }
});

}

function register_team_event(event_name,event_id)
{ 
  // alert('hello');
  console.log($("#register_"+event_id));
  $.ajax({
  url: "register_team/"+event_id+"/",
  type: 'post',
  contentType: "application/x-www-form-urlencoded",
  data: $('#register_'+event_id).serialize(),
  success: function(data, textStatus, jqXHR){
    var statusCode = jqXHR.status;
    var statusText = jqXHR.statusText;
    // console.log("Success!!");
    console.log(statusCode);
    // $('#Login').hide();
    // $('#Signup').hide();
    // get_profile(data);
    // $('#loggedIn').show();
    $('#register_team').html('Team Created!! It will be added to your profile when all members accept the invitation');
    $('#register_team').attr('class', 'success');
    $('#register_team').css('font-size', '16px');
  },
  error: function (xhr, desc, err) {
    console.log(xhr);
    console.log("Desc: " + desc + "\nErr:" + err);
    $('#register_team').html('Failed to create a team');
    $('#register_team').attr('class', 'alert alert-error');
    $('#register_team').css('font-size', '16px');
  }
  });
}

function open_tab(event_id,event_name)
{
  // alert('hello');
  getPage(event_name,event_id+'_register');
  return false;
}

function get_profile_page(type)
{
  // aler('here!!')
  if (type == 1)
    getPage("Profile");
  $.ajax({
  url: "server.php?action=account",
  type: 'get',
  // contentType: "application/x-www-form-urlencoded",
  // data: $('#Signup form').serialize(),
  success: function(data, textStatus, jqXHR){
    var statusCode = jqXHR.status;
    var statusText = jqXHR.statusText;
    data=jQuery.parseJSON(data);
    // console.log("Success!!");
    // user=0;
    d = data;
    
    console.log(data);
    fillUpProfileDetails($("#fname").html()+$("#lname").html(), $("#email").html());
    console.log(data["individual"]);
    fillUpProfileEvents(data);
    // $('#loggedIn').hide();
    // $('#Login').show();
    // $('#Signup').show();
    console.log(statusCode);
  },
  error: function (xhr, desc, err) {
    console.log(xhr);
    console.log("Desc: " + desc + "\nErr:" + err);
  } 
  }); 
}


function fillUpProfileDetails(name, email)
{
  var prof_name = document.getElementById('profile_name');
  var prof_email = document.getElementById('profile_email');
  prof_name.innerHTML = name;
  prof_email.innerHTML = email;
}

function fillUpProfileEvents(event)
{
	console.log(event);
  // alert('trial');
  // var listEle = document.getElementById('profile_events');
  var listEleHTML = "<table class='table'>";
  // alert(eventList);
  console.log("list of events");
  console.log(event);
  var j=0;
  while(j < event.individual.length)
  {
    listEleHTML = listEleHTML + "<tr><td><a onclick='getPage(\""+((event.individual[j]).event_name)+"\")' style='cursor:pointer'>"+((event.individual[j]).event_name)+ "</a><td><a class='btn btn-danger' onclick='unregistration("+(event.individual[j]).event_id+");'>unregister</a></td></tr>";
    j++;
  }
  listEleHTML+="</table>";

  // #Team events   
  var j=0;
  // listEleHTML = "";
  while(j < event.teams.length)
  {
    // alert((event.individual[j]).event_n/ame);
    listEleHTML = listEleHTML + ((event.teams[j]).event_name)+"<a style='cursor: pointer;' onclick='delete_team("+(event.teams[j]).team_id+")'>&nbsp;(Delete Team)</a><br />";
    j++;
  }
  console.log(listEleHTML);
  
  document.getElementById("profile_events").innerHTML=listEleHTML;

}

function accept_request(request_id)
{
  $.ajax({
  url: "accept_team_request/"+request_id+"/",
  type: 'get',
  // contentType: "application/x-www-form-urlencoded",
  // data: $('#Signup form').serialize(),
  success: function(data, textStatus, jqXHR){
    var statusCode = jqXHR.status;
    var statusText = jqXHR.statusText;
    get_profile_page(1);
    console.log(statusCode);
  },
  error: function (xhr, desc, err) {
    console.log(xhr);
    console.log("Desc: " + desc + "\nErr:" + err);
  } 
  });
}

function delete_team(team_id)
{
  $.ajax({
  url: "delete_team/"+team_id+"/",
  type: 'get',
  // contentType: "application/x-www-form-urlencoded",
  // data: $('#Signup form').serialize(),
  success: function(data, textStatus, jqXHR){
    var statusCode = jqXHR.status;
    var statusText = jqXHR.statusText;
    // console.log("Success!!");
    get_profile_page(1);
    // user=0;
    // $('#loggedIn').hide();
    // $('#Login').show();
    // $('#Signup').show();
    console.log(statusCode);
  },
  error: function (xhr, desc, err) {
    console.log(xhr);
    console.log("Desc: " + desc + "\nErr:" + err);
  } 
  });
}

function unregistration(event_id){
  $.ajax({
  url: "server.php?action=unregister&event_id="+event_id+"",
  type: 'get',
  success: function(data, textStatus, jqXHR){
    var statusCode = jqXHR.status;
    var statusText = jqXHR.statusText;
	data=jQuery.parseJSON(data);
    fillUpProfileDetails($("#fname").html()+$("#lname").html(), $("#email").html());
    console.log(data["individual"]);
    fillUpProfileEvents(data);
    console.log(statusCode);
  },
  error: function (xhr, desc, err) {
    console.log(xhr);
    console.log("Desc: " + desc + "\nErr:" + err);
  } 
  });
	
	
}
