//hide flashMessage using JavaScript (display: none)
//document.getElementById("flashMessage").style.display = "none";

$("#flashMessage").hide();
$("#email-area").hide();

$("#username").focusout(function(){
   if ($('#username').val().length < 6) {
     $('#wrongusername').text("Username must be more than 6 characters");
   } 
  else 
     $('#wrongusername').text("");
});
$("#password2").focusout(function(){
   if ($('#password').val() != $('#password2').val()) {
     $('#wrongpassword').text("Passwords do not match");
   } 
  else 
     $('#wrongpassword').text("");
});

$("#subscribe").change( function(){
   if( $(this).is(':checked') )  
     $("#email-area").fadeIn(1000);
  else
    $("#email-area").fadeOut(1000);
});

/* $("#previewButton").click(function(){  //callback function
  var x = $('#blogTitleInput').val();
  var y = $('#blogContentInput').val();

  $('#blogTitlePreview').text(x);
  $('#blogContentPreview').html(y);

  $("#flashMessage").fadeIn(2000).delay(3000).slideUp();

});

*/

