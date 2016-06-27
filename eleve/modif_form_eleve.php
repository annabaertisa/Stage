<?php

	if (isset($_GET['id']))
	{
		$user = 'root';
		$pwd = '';
		$str_connect='mysql:host=localhost;dbname=stagetest';
		$db = new PDO($str_connect,$user,$pwd);
		$requete = $db->prepare('select * form eleve where IdElve = ?');
		$requete->bindParam(1,$_GET['id'],PDO::PARAM_INT);
		$requete->execute();
		$user = $requete->fetch(PDO::FETCH_ASSOC);
		
	}
?>

<html>

<style type = "text/css">
		{
			text-align : center:
		}
	table
		{
			position : relative; 
			left:20px;	
		}
	.cara
		{
			position: relative;
			left: 20px;	
		}
	td 
		{
			border-width: 1px;
			border-style:solid;
			border-color:black; 
		}
</style>
<head>
</head>
<body>

	<h1>Modification</h1>
	
<form method ="POST" action="ModifEleve.php?id=<?=(isset($_GET['id']))?>">
	Nouveau mot de passe: 
		<div class="cara">
		<input type="text" name="mdp" value="<?=(isset($user['mdp']))?>"/>
		<br>
		<br>
		</div>

	Nouveau login: 
		<div class = "cara" >
		<input type = "text" name ="login" value="<?= (isset($user['login']))?>"/>
		<br>
		<br>
		</div>
	
	<input type = submit name = "Envoyer", value = "Envoyer">

</form>
</body>
</html>
		
	

	