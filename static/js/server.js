login_block=0;
function login(){
if(login_block!=0)
	return;
login_block=1;
$.ajax({
  url: "server.php?action=login",
  type: 'post',
  data: $('#Login form').serialize(),
  success: function(data, textStatus, jqXHR){
    var statusCode = jqXHR.status;
    var statusText = jqXHR.statusText;
    data=jQuery.parseJSON( data );
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

function open_tab(event_id,event_name)
{
  getPage(event_name,event_id+'_register');
  return false;
}

function get_profile_page(type)
{
  if (type == 1)
    getPage("Profile");
  $.ajax({
  url: "server.php?action=account",
  type: 'get',
  success: function(data, textStatus, jqXHR){
    var statusCode = jqXHR.status;
    var statusText = jqXHR.statusText;
    data=jQuery.parseJSON(data);
    
    fillUpProfileDetails($("#fname").html()+$("#lname").html(), $("#email").html());
    fillUpProfileEvents(data);
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
  var listEleHTML = "<table class='table'>";
  console.log("list of events");
  console.log(event);
  var j=0;
  while(j < event.individual.length)
  {
    listEleHTML += "<tr><td><a onclick='getPage(\""+((event.individual[j]).event_name)+"\")' style='cursor:pointer'>"+((event.individual[j]).event_name)+ "</a></td>"
    listEleHTML += "<td><a class='btn btn-danger' onclick='unregistration("+(event.individual[j]).event_id+");'>unregister</a></td></tr>";
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
  //allPages["Profile"].pageRect=document.getElementById("profile_events").getBoundingClientRect();

}

function delete_team(team_id)
{
  $.ajax({
  url: "delete_team/"+team_id+"/",
  type: 'get',
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

function unregistration(event_id){
  $.ajax({
  url: "server.php?action=unregister&event_id="+event_id+"",
  type: 'get',
  success: function(data, textStatus, jqXHR){
    var statusCode = jqXHR.status;
    var statusText = jqXHR.statusText;
	data=jQuery.parseJSON(data);
    fillUpProfileDetails($("#fname").html()+$("#lname").html(), $("#email").html());
    //console.log(data["individual"]);
    fillUpProfileEvents(data);
    //console.log(statusCode);
  },
  error: function (xhr, desc, err) {
    console.log(xhr);
    console.log("Desc: " + desc + "\nErr:" + err);
  } 
  });
	
}

function generateTeamRegForm(event_name){
    var id = eventData[event_name].id;
    var num = eventData[event_name].team_members;
    $("#register_team_form").remove();
    var content = "<form onsubmit='return false;' id='register_team_form'><table class='table'>";
    content += "<tr><td>Team Name </td><td><input name='registration_team_name' type='text' placeholder='Email' /></td></tr>"
    for (var i = 1; i < num; i++){
      content += "<tr><td>Member "+(i+1)+"</td><td><input name='registration_email"+(i+1)+"' type='text' placeholder='Email' /></td></tr>"
    }
    content += "<tr><td><a class='btn btn-success' id='team_reg' onclick='register_team("+id+")' style='height: 30px;'>Submit</a><br /><span id='error_team_reg'></span></td></tr>";
    content += "</table></form>";
    var mess = new message("Team_Registration_"+event_name, "Enter team details", content, "600");
    mess.init();
    mess.showMessage();
}

function register_team(event_id){
  $.ajax({
  url: "server.php?action=team_register&event_id="+event_id+"",
  type: 'post',
  // TODO fix this
  data: $('#register_team_form').serialize(),
  success: function(data, textStatus, jqXHR){
    var statusCode = jqXHR.status;
    var statusText = jqXHR.statusText;
    content=data.split(",");
    if(content[0]=="error")
      $("#error_team_reg").html(content[1])
    if(data=="success"){
      // TODO close the window
      get_profile_page(1);
    }
    
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
