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
let btn1  =document.getElementById("myBtn2");
btn1.onclick=function(){
    if(reg2()==true)
        {
                     alert("done");
        }
    
    else
        {
        alert("Enter interger price only");
            return false;

        }
}
let updateprice   =document.getElementById("updateprice");
function reg2(){
    let regx1=/^[0-9\s]*$/;
    if(regx1.test(updateprice.value)==false)
        {
    
          return false;   
        }
    else
        {
            return true;
        }
    
}
let btn3  =document.getElementById("myBtn3");
btn3.onclick=function(){
    if(reg3()==true)
        {
                     alert("done");
        }
    
    else
        {
        alert("Enter string name  only");
            return false;

        }
}
let name   =document.getElementById("name");
function reg3(){
    let regx1=/^[a-zA-Z]/;
    if(regx1.test(name.value)==false)
        {
    
          return false;   
        }
    else
        {
            return true;
        }
    
}