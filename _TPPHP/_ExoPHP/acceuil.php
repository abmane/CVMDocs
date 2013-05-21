
<?php
require_once("action/AcceuilAction.php");
$action = new AcceuilAction();
$action->execute();
require_once("partial/header.php");

?>
	<div class="titre">
		<h2>Acceuil</h2>
		<h3>Bienvenue  <?php echo $action->getName(); ?> </h3>
	</div>
<div class="central">
	
	<div class="boutons">
	<div class="inputAcceuil"><input type="image" src="design/usagers.png" onclick="location.href='profil.php'"/></div>
	<div class="inputAcceuil"><input type="image" src="design/clients.png" onclick="location.href='client.php'"//></div>
	<div class="inputAcceuil"><input type="image" src="design/facture.png" /></div>
	<div class="inputAcceuil"><input type="image" src="design/mdp.png" /></div>
	</div>
	<div class="affiche">
		<p> Nombres de clients:  </p>
		<p> Nombres de projets:  </p>
		<p> Nombres de factures: </p>
		<p> Compte à recevoir: </p>
	</div>
</div>


<?php require_once ("partial/footer.php");?>