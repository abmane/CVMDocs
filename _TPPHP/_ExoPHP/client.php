
<?php

require_once("partial/header.php");

?>


		<div class="profil-page">
			<h2>
				PROFIL 
			</h2>
				

					<div class="modifierProfil">
						<h2> Que voulez-vous faire ? </h2>
						<ul>
							<li> 
								<a href = "javascript:void(0)" onclick="" > Ajouter un client : </a> 
								<div id="ajouter">
									<form action="client.php" method="post" name="formulaire">
										<div class="formLabel"><label for="texte"> Nom du client: </label></div>
										<div class="formInput"><input type="text"  name="clientName" id="clientName" /></div>
										<div class="formLabel"><label for="texte"> Adresse du client: </label></div>
										<div class="formInput"><input type="text"  name="Adresse" id="Adresse" /></div>
										<div class="formSeparator"></div>
										<div class="valNom"><input  type="submit" value="Valider" /></div>
									</form>
								</div>   
							</li>
								
							
							<li> 
								<a href = "javascript:void(0)" onclick="">Modifier un client</a>
								<div id="modifier">
									<form action="client.php" method="post" name="formulaire">
										<div class="formLabel"><label for="texte"> Entrez le nom du client: </label></div>
										<div class="formInput"><input type="text"  name="name" id="name" /></div>
										<div class="formLabel"><label for="texte"> Entrez l'adresse du client: </label></div>
										<div class="formInput"><input type="text"  name="adr" id="adr" /></div>
										<div class="formSeparator"></div>
										<div class="valemail"><input  type="submit" value="Valider" /></div>
									</form>
								</div>
							</li>
							
							<li> 
								<a href = "javascript:void(0)" onclick="">Supprimer un client</a>
								<div id="supprimer">
									<form action="client.php" method="post" name="formulaire">
										<div class="formLabel"><label for="texte"> Entrez le nom du client: </label></div>
										<div class="formInput"><input type="text"  name="supName" id="supName" /></div>
										<div class="formLabel"><label for="texte"> Entrez l'adresse du client: </label></div>
										<div class="formInput"><input type="text"  name="supAdr" id="supAdr" /></div>
										<div class="formSeparator"></div>
										<div class="valemail"><input  type="submit" value="Valider" /></div>
									</form>
								</div>
							</li>
						</ul>
					</div>
 					<div id="affichage">
 						

 						
 						
 					</div>
				
								
<?php require_once ("partial/footer.php");?>