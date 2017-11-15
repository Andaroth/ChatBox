function hideShow(hs){
  if(hs=="hide"){
    signInForm.signInButt.value="Sign in";
    signInForm.signInButt.name="signIn";
    messageForm.style.display="none";
    signInForm.userName.style.display="block";
    signInName.innerHTML="";
  }
  if(hs=="show"){
    signInForm.signInButt.value="Sign out";
    signInForm.signInButt.name="signOut";
    messageForm.style.display="block";
    signInForm.userName.style.display="none";
    signInName.innerHTML=signInForm.userName.value;
  }
}

$("#registerForm").submit(function(e) {
   if (($("#register_username").val() == "") ||
       ($("#register_mail").val() == "") ||
       ($("#register_passOne").val() == "") ||
       ($("#register_passTwo").val() == "") ||
       ($("#register_passOne").val() != $("#register_passTwo").val())
       )
       {
       e.preventDefault();
       alert("Merci Bertrand");
   }
});

$("#loginForm").submit(function(e) {
   if (($("#login_username").val() == "") ||
       ($("#login_pass").val() == ""))
       {
       e.preventDefault();
       alert("Merci Bertrand");
   }
});

$("#messageForm").submit(function(e) {
   if ($("#message").val() == "")
       {
       e.preventDefault();
       alert("Merci Bertrand");
   }
});