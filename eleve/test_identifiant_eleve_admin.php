<html>
	<head>
	</head>
	<body>
			
			<?php
				
				if ((( empty ($_POST['nom']))) or (empty($_POST['prenom'])) or (empty($_POST['email']))or (empty($_POST['login'])) or (empty($_POST['mdp'])) or (empty($_POST['classe'])) )
				
				{
					echo ("Impossible de vous inscrire car il manque des donn&eacutees </br>");
					echo("<a href = ConnexionEleve.html> Revenir au formulaire </a> "); 
	
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
							$login = $_POST['identifiant'];
							echo("</td>");
							echo ("</tr>");
							echo("<tr>");
							echo("<td>");
							echo(" Nom :      ");
							$nom = $_POST['nom'];
							echo("$nom");
							echo("</td>");
							echo ("</tr>");
							echo("<tr>");
							echo("<td>");
							echo(" pr&eacutenom :      ");
							$prenom = $_POST['prenom'];
							echo("$prenom");
							echo("</td>");
							echo ("</tr>");
							echo("<tr>");
							echo("<td>");
							echo(" adresse mail :      ");
							$email = $_POST['email'];
							echo("$email");
							echo("</td>");
							echo ("</tr>");
							echo("<tr>");
							echo("<td>");
							echo(" classe :      ");
							$classe = $_POST['classe'];
							echo ("$classe");
							echo("</td>");
							echo ("</tr>");
							echo("<tr>");
							echo("<td>");
						
							echo("</td>");
							echo("</tr>");
							echo("</table>");
							$mdp = $_POST['mdp']; 
							
							$user = 'root';
							$pwd = ''; 
							$str_connect ='mysql:host=localhost;dbname=stagetest'; 
							$db = new PDO($str_connect, $user, $pwd);
							$str_insert = ('insert into eleve values (?,?,?,?,?,?)');
							$requete_ajout =$db->prepare($str_insert);
							$users=array(NULL,"$nom","$prenom","$email","$mdp","$classe");
							$requete_ajout->execute($users);
							
							$str_select = ('select * from eleve where login = ? and mdp = ?');
							$requete_select=$db->prepare($str_select);
							$users=array($login,$mdp);
							$requete_select->execute($users);
							$ligne=$requete_select->fetch(PDO::FETCH_ASSOC); 
							
							
							session_start();
							$_SESSION['id'] =$ligne['IdEleve'];
							$_SESSION['nom'] =$ligne['nom'];
							$_SESSION['prenom'] =$ligne['prenom'];
							$_SESSION['mail'] =$ligne['email'];
							
							echo("Vous etes bien enregistr&eacute.</br>");
							echo("<a href = .</a>");
							
						}
						else
						{
							echo("Votre e-mail est invalide. <br>");
							echo("<a href = ConnexionEleve.html> Revenir au formulaire </a> "); 
	
							
						}		
				
				}
			?>
		</body>
	</html>