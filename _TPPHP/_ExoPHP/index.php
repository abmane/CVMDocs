<?php
	require_once("action/IndexAction.php");
	$action = new IndexAction();
	$action->execute();
	require_once("partial/header.php");

?>
     
		<div class="connectPage">
			
			<h2>
				Connection
			</h2>
				<form action="index.php" method="post" name="formulaire">
					<div class="formLabel1"><label for="texte"> Nom d'usager: </label></div>
					<div class="formInput1"><input type="text"  name="username" id="username" /></div>
					<div class="clear"></div>
					<div class="formSeparator"></div>
					<div class="formLabel2"><label for="mdp"> Mot de passe : </label> </div>
					<div class="formInput2"><input type="password"  name="password" id="password" /></div>
					<div class="clear"></div>
					<div class="formSeparator"></div>
					<div class="inscrit"><input  type="submit" value="Se connecter" /></div>
					<div class="inputImg"><input type="image" src="design/mdp.png" /></div>
				</form>
				
		
<?php require_once ("partial/footer.php");?>







