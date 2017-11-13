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