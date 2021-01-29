<!DOCTYPE html>
<html lang="fr " dir="ltr"> <!---->
<head>
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <link rel="stylesheet" type="text/css" href="bootstrap-main\dist\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="wavecreate.css">
    <title>S'inscrire sur Wave</title>
</head>

<body>
	<div class="container pt-3"><!--Le conteneur de tout le contenu de ma page-->
		
		<div class=""> <!--class="d-block d-flex justify-content-center"-->
			
			<form action="" method="POST">
				
				<!--Le titre et le logo-->
				<div class="form-group">
					<!---->
					<div class="d-block d-flex justify-content-center mb-4">
						<img src="wave.png" width="40" height="40">
					</div>
					
					<h1 class="row justify-content-center mb-5">Créer votre compte</h1>
				</div>

				<!--Nom et prénom-->
				<div class="row justify-content-center"> <!--"row justify-content-center"  to center the content-->
					<div class="form-group col-md-6">
						<input type="text" class="form-control mb-4" name="nom_prenom" id="nom_prenom" placeholder="Nom et prénom" required="required"> <!--"mb-4" pour le margin-->
					</div>
				</div>

				<!--Téléphone-->
				<div class="row justify-content-center">
					<div class="form-group col-md-6">
						<input type="text" class="form-control mb-4" name="telephone" id="telephone" placeholder="Téléphone" required="required">
					</div>
				</div>
				
				<!--Email-->
				<div class="form-group ">
					<a class="row justify-content-center mb-4" href="">Utiliser un email</a>
				</div>
				<!--Date de naissance-->
				<div class="form-group">
					<div id="date_naiss">
						<div class="row justify-content-center">
							<div class="text-justify col-md-6">
								<strong>Date de naissance</strong>
							</div>
						</div>
					</div>

					<div class="row justify-content-center">
						<div id="info" class="text-justify col-md-6 mb-4">Cette information ne sera pas affichée publiquement. Confirmez votre âge, même si ce compte est pour une entreprise, un animal de compagnie ou autre chose.</div>
					</div>

					<div class="row justify-content-center mb-4">
					<!--Jour-->
					<div class="col-md-2">
      				<select class="form-control" id="jour" name="jour">
      					<option>Jour</option>
							<?php
								for ($jour = 1; $jour <= 31 ; $jour++) 
								{ 
									echo "<option>".$jour."</option>";
								}
							?>
					</select>
					</div>

					<!--Mois-->
					<div class="col-md-2">
					<select class="form-control" id="mois" name="mois">
						<option>Mois</option>
        				<option>Janvier</option>
        				<option>Février</option>
        				<option>Mars</option>
        				<option>Avril</option>
        				<option>Mai</option>
        				<option>Juin</option>
        				<option>Juillet</option>
        				<option>Aout</option>
        				<option>Séptembre</option>
        				<option>Octobre</option>
        				<option>Novembre</option>
        				<option>Décembre</option>
      				</select>
      				</div>

      				<!--Année-->
      				<div class="col-md-2">
      				<select class="form-control" id="annee" name="annee">
      					<option>Année</option>
							<?php
								for ($annee=2021; $annee >= 1900 ; $annee--) 
								{ 
									echo "<option>".$annee."</option>";
								}
							?>
					</select>
					</div>

				</div>
				</div>
				<div class="form-group">
					<div class="row justify-content-center">
						<input type="submit" class="btn col-md-2" name="suivant" id="suivant" value="Suivant" disabled="disabled" />
					</div>
				</div>
			</form>
			
		</div>
		
	</div>
	<!-- <script src="disable_btn.js" type="text/javascript"></script> -->

</body> 
</html>