<html>
  <head>
    <title>ChatBox</title>
  </head>

  <body>
    <h1>ChatBox</h1>
    <div id="chatBox"></div>
    <div id="usersOnLine"></div>
    <form id="messageForm">
	    <input id="message" type="text">
	    <input id="send" type="submit" value="Send">
      <div id="serverRes"></div>
    </form>
    <script>
      function hideShow(hs){
        if(hs=="hide"){
          signInForm.signInButt.value="Sign in"
          signInForm.signInButt.name="signIn"
          messageForm.style.display="none"
          signInForm.userName.style.display="block"
          signInName.innerHTML=""
        }
        if(hs=="show"){
          signInForm.signInButt.value="Sign out"
          signInForm.signInButt.name="signOut"
          messageForm.style.display="block"
          signInForm.userName.style.display="none"
          signInName.innerHTML=signInForm.userName.value 
        }
      }
    </script>
  </body>
</html>
