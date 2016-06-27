<?php
	session_start();
?>

<html>

	<head>
	</head>
	
	<body>
		
		<h1> Ma fiche</h1>
		
		<?php
			
			if(!empty($_POST['nom'])) {echo $_POST['nom'];}
			echo("<br>");
			
			if(!empty($_POST['prenom'])) {echo $_POST['prenom'];}
			echo ("<br>");
			
			if(!empty($_POST['adresse-mail'])) {echo $_POST['adresse-mail'];}
			echo("<br>");
			
			if(!empty($_POST['classe'])) {echo $_POST['classe'];}
			echo ("<br>");
		
		?>
	</body>
	
</html>

			
		