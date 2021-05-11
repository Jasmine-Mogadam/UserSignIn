$(document).ready(function(){
  //when navbar is hovered over
  $("#nav1").hover(function(){
    $(".highlight").attr("style","margin-left:0px;");
  });
  $("#nav2").hover(function(){
    $(".highlight").attr("style","margin-left:33.3%;");
  });
  $("#nav3").hover(function(){
    $(".highlight").attr("style","margin-left:66.6%;");
  });
})
