//hide flashMessage using JavaScript (display: none)
//document.getElementById("flashMessage").style.display = "none";

$("#flashMessage").hide();

$("#previewButton").click(function(){  //callback function
  var x = $('#blogTitleInput').val();
  var y = $('#blogContentInput').val();

  $('#blogTitlePreview').text(x);
  $('#blogContentPreview').html(y);

  $("#flashMessage").fadeIn(2000).delay(3000).slideUp();

});

