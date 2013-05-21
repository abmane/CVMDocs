
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Enregistrement</title>
		 <link href="css/home.css" rel="stylesheet" />
        <meta charset="utf-8"/>
		<?php
			require_once("action/EnregistrerAction.php");
			$action = new EnregistrerAction();
			$action->execute();
			
		?>
    </head>
    <body>
		<h1> Enregistrement </h1>
		<div class="pageInscrire">
			<h2>
				Enregistrez-vous
			</h2>
				<form action="enregistrer.php" method="post" name="formulaire">
					<div class="formLabel"><label for="texte"> Matricule : </label></div>
					<div class="formInput"><input type="text"  name="matricule" id="matId" /></div>
					
					<div class="formSeparator"></div>
					
					<div class="formLabel"><label for="nom"> Nom : </label> </div>
					<div class="formInput"><input type="text"  name="nom" id="nomId" /></div>
					<div class="formSeparator"></div>
					<div class="formLabel"><label for="prenom"> Prenom : </label> </div>
					<div class="formInput"><input type="text"  name="prenom" id="PrenomId" /></div>
					
					<div class="formSeparator"></div>
					
					<div class="formLabel"><label for="NomUsager"> NomUsager : </label> </div>
					<div class="formInput"><input type="text"  name="nomUsager" id="nomUsagerId" /></div>
					
					<div class="formSeparator"></div>
					
					<div class="formLabel"><label for="mdp"> Mot de passe : </label> </div>
					<div class="formInput"><input type="password"  name="mdp" id="mdpId" /></div>
					
					<div class="formSeparator"></div>
					
					<div class="inputImg"><input type="submit" src="images/valider.png" onclick="location.href='index.php'"/></div>
					
				</form>
		</div>
    </body>
</html>











