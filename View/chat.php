<html>
<head>

<title>ChatBox</title>
</head>

<body>
<h1></DIC> ChatBox</h1>
<div id="chatBox"></div>
<div id="usersOnLine"></div>
<form id="messageForm">
	<input id="message" type="text">
	<input id="send" type="submit" value="Send">
<div id="serverRes"></div>
</form>
<style>


#chatBox {
	font-family:tahoma;
	font-size:12px;
	color:black;
	border: 1px teal solid;
	height: 225px;
	width: 400px;
	overflow: scroll;
	float:left;

}
#usersOnLine{
	font-family:tahoma;
	font-size:14;
	color:orange;
	border:1px teal solid;
	width:150px;
	height:225px;
	overflow:scroll;
	margin-left:1px;
}
#message {
	width: 350px;
	height: 22px;
	border: 1px teal solid;
	float:left;
	margin-top:1px;
}
#send {
	width: 50px;
	height: 22px;
	float:left;
	margin:1px;
}
#serverRes{
	width:150px;
	height:22px;
	border: 1px teal solid;
	float:left;
	margin:1px;
}


</style>
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