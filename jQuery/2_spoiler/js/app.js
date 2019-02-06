$(".spoiler span").hide();

 var button =  $("<button>Reveal Spoiler</button>");
 $(".spoiler").prepend(button);


// $(".spoiler button").click(function(){
//   $(".spoiler span").show();
// });
// $(".spoiler button").mouseover(function(){
//   $(".spoiler span").show();
// });

$(".spoiler button").on('click mouseover', function(){
  $(".spoiler span").show();
});

