<html>
	<head>
	<meta charset="UTF-8">

	<style text="CSS">
	
			h1
				{
					text-align : center; 
				}
				
			table
				{
					position : relative; 
					left: 40px; 
				}
			.cara
				{
					position:relative;
					left: 20px;
				}
			td
				{
					border-width : 1px;
					border-style: solid;
					border-color: black; 
				}
			
	</style>
	<h1>
		Formulaire d'inscription 
	</h1>
	</head>
	
	<body>
		
		<form method = POST action = 'test_identifiant_eleve.php'>
		
		
			Nom: 
			<div class="cara">
					<input type = text name = 'nom'>
				<br>
			</div>
				<br>
			
			Pr&eacutenom : 
			<div class="cara">
					<input type= text name = 'prenom'>
				<br>
			</div>
				</br>
				
			Adresse e-mail : 
			<div class="cara">
					<input type = text name = 'email'>
				<br>
			</div>
				</br>
				
				
			Veuillez choisir un Login :
			<div class="cara">
					<input type = text name = 'identifiant' >
				<br>	
			</div>
				</br>
		

			
			Veuillez choisir un mot de passe 
			<div class = "cara">
					<input type = password name = 'mdp'>
				<br>	
			</div>
				</br>
		
			Veuillez indiquer votre classe : 
			<div class="cara">
					<br>
						<input type = 'radio' value = 'AS' name ='classe'>
							Annee Speciale
					</br>
					
					<br>
						<input type = 'radio' value = 'LPA' name = 'classe'>
							Licence professionel alternant 
					</br>
					
					<br>
						<input type = 'radio' value = 'LPI' name = 'classe'>
							Licence professionel initial
					</br>

					<br>
						<input type = 'radio' value = 'DUT' name = 'classe'>
							Dipl&ocircme universitaire technologique
					</br>
					
					
			</div>
		
					<br>
					<input type = submit name = "Envoyer" value = 'Envoyer'>
					</br>
								
		</form>
		
<?php

	if (isset($_POST['Envoyer']))
	{
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$email=$_POST['email'];
		$identifiant=$_POST['identifiant'];
		$mdp=$_POST['mdp'];
		$classe=$_POST['classe']; 

		connectstagetest(); 
		
		$sql = 'INSERT INTO eleve VALUES ("","'.$nom.'","'.$prenom.'","'.$email.'","'.$identifiant.'","'.$mdp.'","'.$classe.'")';

		mysql_query ($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());
		
		mysql_close(); 
		
	}	
?>

</body>