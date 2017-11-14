<h2>ChatBox</h2>
<?php if ((isset($_SESSION["logged"])) && ($_SESSION["logged"] == 1)) { ?>
     <div id="chatBox">
         <?php getChatPost(); ?>
     </div>
     <div id="usersOnLine"></div>
     <form id="messageForm" action="./?page=chat" method="post">
       <input id="message" class="chatform" type="text" name="chat_message" placeholder="Répondre">
       <input id="send" type="submit" value="Envoyer">
     </form>
     <form action="./" method="get"><input type="submit" name="deco" value="Se déconnecter"></form>
<?php } ?>
