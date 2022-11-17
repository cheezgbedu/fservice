function loginForm(){
    var email = document.forms['Login']['email'].value;
    var pass = document.forms['Login']['pass'].value;
    if(email == null || email ==""){
        document.getElementById("error").innerHTML="Email can't be blank";
        return false;
    }else if(pass.length<7){
     document.getElementById("perror").innerHTML="Password must be at least 6 characters long.";
     document.getElementById("perror").style.color ="red";
        return false;
     }
}