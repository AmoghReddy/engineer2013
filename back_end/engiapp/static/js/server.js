function login(){

$.ajax({
  url: "/login/",
  type: 'post',
  contentType: "application/x-www-form-urlencoded",
  data: $('#Login form').serialize(),
  success: function(data, textStatus, jqXHR){
    var statusCode = jqXHR.status;
    var statusText = jqXHR.statusText;
    // console.log("Success!!");
    console.log(data);
    // if statusCode == 200 
  },
  error: function (xhr, desc, err) {
    console.log(xhr);
    console.log("Desc: " + desc + "\nErr:" + err);
  }
});

}