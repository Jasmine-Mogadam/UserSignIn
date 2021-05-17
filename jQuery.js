$(document).ready(function(){
  //when navbar is hovered over, move highlight to hovered button!
  $("#nav1").hover(function(){
    $(".highlight").attr("style","margin-left:0px;");
  });
  $("#nav2").hover(function(){
    $(".highlight").attr("style","margin-left:33.3%;");
  });
  $("#nav3").hover(function(){
    $(".highlight").attr("style","margin-left:66.6%;");
  });


  let ContentHeight = $(".content").height();
  console.log(ContentHeight);
  let PageHeight = window.innerHeight;
  console.log(PageHeight);
  if(ContentHeight>=PageHeight/2.5){
    $(".footer").attr("style","width:100%;margin-top:50px;background-color: #1E1B18;color: #f2f2f2;text-align: center;position: relative;bottom:auto;");
    console.log("haw");
  }
  else {
    $(".footer").attr("style","width:100%;margin-top:50px;background-color: #1E1B18;color: #f2f2f2;text-align: center;position: absolute;bottom:0px;");
    console.log("ye");
  }
})
