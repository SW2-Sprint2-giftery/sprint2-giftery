

$(".catBtn").click(function(){
    $(".categoriesDiv").slideToggle(1500);
})
$(".recBtn").click(function(){
    $(".recipientDiv").slideToggle(1500);
})
$(".ocaBtn").click(function(){
    $(".ocassionDiv").slideToggle(1500);
})
$(".insBtn").click(function(){
    $(".inspirationDiv").slideToggle(1500);
})
$(".dt1").click(function(){
    $(".dm1").slideToggle(1000);
})
$(".dt2").click(function(){
    $(".dm2").slideToggle(1000);
})
$(".dt3").click(function(){
    $(".dm3").slideToggle(1000);
})
$(".dt4").click(function(){
    $(".dm4").slideToggle(1000);
})

var w = 1
$(".firstTog").click(function(){

    
    if (w==1){
        $("body").css("overflow","auto");
        
        $(".back").toggle(1000);
     $(".webSite").animate({left:"17.5%"},1000)
    $(".hiddenList").animate({width:"17.5%"},1000,function(){
     w2 = $(".hiddenList").css("width");
     $(".hiddenList ul").fadeIn(800);
    });
   w++;
}
else if(w != 1){
    $(".hiddenList ul").fadeOut(800 ,function(){
     $(".hiddenList").animate({width:"0%"},1000)
        $(".webSite").animate({left:"0%"},1000,function(){ $("body").css("overflow","auto")
        $(".back").show(500);
    })
       
     w=1;
    });
}
})




$(document).ready(function(){
  $('.owl-carousel').owlCarousel(
      
      {
          margin:10 ,loop:true,autoplay:true,items:5
      }
  );
});
$("#more").click(function(){
    if($(".readmore").css("display")=="none")
    {
        $(".readmore").css("display","inline");
        $("#more").text("Read less");
    }
    else
    {
        $(".readmore").css("display","none");
        $("#more").text("Read more");
    }
})
$("#more2").click(function(){
    if($(".readmore2").css("display")=="none")
    {
        $(".readmore2").css("display","inline");
        $("#more2").text("Read less");
    }
    else
    {
        $(".readmore2").css("display","none");
        $("#more2").text("Read more");
    }
})
    $(".star2").css("opacity","0");
$(".star").click(function(){
    let int= parseInt($(this).attr("id"), 10);
    for(i=int+1;i<=5;i++)
        {
            $("#"+i).css("opacity","0");
        }
    for(i=1;i<=int;i++)
        {
            $("#"+i).css("opacity","1");
        }
})
