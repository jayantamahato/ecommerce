function check()
{
    var x=document.getElementById("logemail").value;
    var y=document.getElementById("logpass").value;
    if(x!="")
    {
        document.getElementById("logemail").style.borderColor="black";
        document.getElementById("logemail").style.backgroundColor="#ff6666";  
    }
    if(x=="")
    {
        document.getElementById("logemail").style.borderColor="red";
        document.getElementById("logemail").style.backgroundColor="#ff6666";  
    }   
}

