
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
								<a href = "javascript:void(0)" onclick="afficherNom()" > Modifier le nom d'utilisateur: </a> 
								<div id="nom">
									<form action="profil.php" method="post" name="formulaire">
										<div class="formLabel"><label for="texte"> Nouveau nom usager: </label></div>
										<div class="formInput"><input type="text"  name="username" id="username" /></div>
										<div class="formSeparator"></div>
										<div class="valNom"><input  type="submit" value="Valider" /></div>
									</form>
								</div>   
							</li>
								
							
							<li> 
								<a href = "javascript:void(0)" onclick="afficherEmail()">Modifier le courriel</a>
								<div id="email">
									<form action="profil.php" method="post" name="formulaire">
										<div class="formLabel"><label for="texte"> Nouveau courriel: </label></div>
										<div class="formInput"><input type="text"  name="courriel" id="courriel" /></div>
										<div class="formSeparator"></div>
										<div class="valemail"><input  type="submit" value="Valider" /></div>
									</form>
								</div>
							</li>
							<li> 
								<a href = "javascript:void(0)" onclick="afficherMdp()">Modifier le mot de passe</a>
								<div id="mdp">
									<form action="profil.php" method="post" name="formulaire">
										<div class="formLabel"><label for="password"> Mot de passe actuel: </label></div>
										<div class="formInput"><input type="password"  name="mdpAc" id="mdpAc" /></div>
										<div class="formSeparator"></div>
										<div class="formLabel"><label for="password"> Nouveau mot de passe: </label></div>
										<div class="formInput"><input type="password"  name="mdpNew" id="mdpNew" /></div>
										<div class="formSeparator"></div>
										<div class="formLabel"><label for="password"> Retapez le mot de passe: </label></div>
										<div class="formInput"><input type="password"  name="mdpConf" id="mdpConf" /></div>
										<div class="valmdp"><input  type="submit" value="Valider" /></div>
									</form>
								</div>
							</li>

						</ul>
					</div>
 					<div id="affichage">
 						

 						
 						
 					</div>
				
								
<?php require_once ("partial/footer.php");?>