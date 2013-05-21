
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Mon chat</title>
		 <link href="css/home.css" rel="stylesheet" />
		  <script src= "js/jquery.js"></script>
		 <script src = "js/javascript.js"></script>
        <meta charset="utf-8"/>
		<?php
			require_once("action/PageChatAction.php");
			require_once("action/CommonAction.php");
			$action = new PageChatAction();
			$action->execute();
		?>
		
    </head>
    <body>
		<script>
			setTimeout(verifyMembers, 1000);
			setTimeout(verifyMessage, 1000);
		</script>
		<h1>Bienvenue sur mon chat </h1>
		<div class="pagePrincipale">
			<div id="ecran">
			
			</div>
			
			<div id="listeUsers" >
			
			</div>
			<div class="envoieTexte">
			<input id="message" onkeypress="envoyerMessage(event);"> </input>
			<button onclick="sendMessage();">Envoyer</button>
			</div>
			
		</div>
    </body>
</html>











