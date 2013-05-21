
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Mon chat</title>
		 <link href="css/home.css" rel="stylesheet" />
        <meta charset="utf-8"/>
		<?php
			require_once("action/IndexAction.php");
			require_once("action/CommonAction.php");
			$action = new IndexAction();
			$action->execute();
		?>
		
    </head>
    <body>
		<h1>Bienvenue sur mon chat </h1>
		<div class="mainPage">
			<h2>
				Connectez-vous
			</h2>
				<form action="index.php" method="post" name="formulaire">
					<div class="formLabel"><label for="texte"> Nom de loggin : </label></div>
					<div class="formInput"><input type="text"  name="nomLog" id="momLogId" /></div>
					<div class="formSeparator"></div>
					
					<div class="formLabel"><label for="mdp"> Mot de passe : </label> </div>
					<div class="formInput"><input type="password"  name="mdp" id="mdpId" /></div>
					<div class="formSeparator"></div>
					<div class="inputImg"><input type="image" src="images/connect.gif" /></div>
					<div class="inscrit"><input  type="button" value="S'inscrire" onclick="location.href='enregistrer.php'" /></div>
				</form>
		</div>
    </body>
</html>











