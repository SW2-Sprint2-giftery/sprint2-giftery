$(".comment").click(function(){
   
    $(".d").toggleClass("hide");
    $(".u").toggleClass("hide");
    $(".coment-row ").toggleClass("hide");
 
})


let btn        =document.getElementById("myBtn");
btn.onclick=function(){
    if(reg()==true)
        {
                     alert("done");
        }
    
    else
        {
        alert("Enter interger price only");
            return false;

        }
}
let addPrice   =document.getElementById("addprice");
function reg(){
    let regx1=/^[0-9\s]*$/;
    if(regx1.test(addPrice.value)==false)
        {
    
          return false;   
        }
    else
        {
            return true;
        }
    
}