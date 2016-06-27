<html>
	<head>
	</head>
	<body>
			
			<?php
				echo "<pre>";
				print_r($_POST);
				echo "</pre>";
				if ((( empty ($_POST['nom']))) or (empty($_POST['prenom'])) or (empty($_POST['email']))or (empty($_POST['identifiant'])) or (empty($_POST['mdp'])))
				
				{
					echo ("Impossible de vous inscrire car il manque des donn&eacutees </br>");
					echo ("<a href = InscriptionEleve.php> Revenir au formulaire </a>");
	
				}
				else 
				{
						$email = $_POST['email'];
						$test = filter_var($email,FILTER_VALIDATE_EMAIL);
						if ($test != false)
						
						{
							echo("<table>");
							
							echo ("<tr>");
							echo ("<td>");
							echo ("identifiant :      ");
							$Login = $_POST['identifiant'];
							echo("</td>");
							echo ("</tr>");
							
							echo("<tr>");
							echo("<td>");
							echo(" Nom     :");
							$Nom = $_POST['nom'];
							echo("</td>");
							echo ("</tr>");
							
							echo("<tr>");
							echo("<td>");
							echo(" Pr&eacutenom :      ");
							$Prenom = $_POST['prenom'];
							echo("</td>");
							echo ("</tr>");
							
							echo("<tr>");
							echo("<td>");
							echo("Adresse mail:      ");
							$Adresse_mail=$_POST['email'];
							echo("</td>");
							echo ("</tr>");
							
							echo("<tr>");
							echo("<td>");
							echo(" Classe :      ");
							$Classe = $_POST['classe'];
							echo("</td>");
							echo ("</tr>");
							
							echo("<tr>");
							echo("<td>");
							echo("</td>");
							echo("</tr>");
							echo("</table>");
							$Mdp = $_POST['mdp']; 
							
							$user = 'root';
							$pwd = ''; 
							$str_connect ='mysql:host=localhost;dbname=stagetest'; 
							$bd = new PDO($str_connect, $user, $pwd);
							$str_insert = ('insert into eleve values (?,?,?,?,?,?,?)');
							$requete_ajout =$bd->prepare($str_insert);
							$users=array(NULL,$Nom,$Prenom,$Adresse_mail,$Classe,$Login,$Mdp);
							$requete_ajout->execute($users);
							
							$str_select = ('select * from eleve where Login = ? and Mdp = ?');
							$requete_select=$bd->prepare($str_select);
							$users=array($user,$pwd);
							$requete_select->execute($users);
							$ligne=$requete_select->fetch(PDO::FETCH_ASSOC); 
							
							
							session_start();
							$_SESSION['id'] =$ligne['IdEleve'];
							$_SESSION['Nom'] =$ligne['Nom'];
							$_SESSION['Prenom'] =$ligne['Prenom'];
							$_SESSION['Adresse_mail'] =$ligne['Adresse_mail'];
							
							echo("Vous etes bien enregistr&eacute.</br>");
							echo("<a href = .</a>");
							
						}
						else
						{
							echo("Votre Adresse_mail est invalide. <br>");
							echo("<a href = ConnexionEleve.html> Revenir au formulaire </a> "); 
	
							
						}		
				
				}
			?>
		</body>
	</html>