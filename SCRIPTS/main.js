
let password = document.getElementById('current-password');
let eyeicon = document.getElementById('eye-icon');

let cnfPassword = document.getElementById('confirm-password');
let eyeTwo = document.getElementById('eye-two');

let loginPassword = document.getElementById('login-password');
let eyeLogin = document.getElementById('eye-login');



eyeicon.onclick = function(){
    
    if(password.type === "password"){
       password.type = "text";
      eyeicon.src = "../IMG/visual.png";

    }
    else
    {
        password.type = 'password';
        eyeicon.src = "../IMG/hide.png";
    }


}


eyeTwo.onclick = function(){


    if(cnfPassword.type === "password"){
        cnfPassword.type = "text";
       eyeTwo.src = "../IMG/visual.png";
 
     }
     else
     {
         cnfPassword.type = 'password';
         eyeTwo.src = "../IMG/hide.png";
     }
}

eyeLogin.onclick = function(){


    if(loginPassword.type === "password"){
        loginPassword.type = "text";
       eyeLogin.src = "../IMG/visual.png";
 
     }
     else
     {
         loginPassword.type = 'password';
         eyeLogin.src = "../IMG/hide.png";
     }
}

