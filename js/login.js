let userName=document.getElementById("userName");
let password=document.getElementById("input");
let btn=document.getElementById("myBtn");



$(".icone").click(function(){
    
 let x= $(this).parent().find("input");
    if($(this).css("opacity")==1)
        { 
             $(this).css("opacity","0")
             x.attr("type","text")
             $(this).siblings().css("opacity","1")
        }
    else
        {
             $(this).css("opacity","1") 
             x.attr("type","password")
        }
})
