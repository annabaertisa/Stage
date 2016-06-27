<?php

if(isset($_GET['id']))
{
    $user = 'root';
    $pwd = '';
    $str_connect = 'mysql:host=localhost;dbname=stagetest';
    $db = new PDO($str_connect, $user,$pwd);
    $requete=$db->prepare('select * from prof where IdProf = ?');
    $requete->bindParam(1,$_GET['id'],PDO::PARAM_INT);
    $requete->execute();
    $user = $requete->fetch(PDO::FETCH_ASSOC);
}
?>

    <html>
    <style type = "text/css">
        {
            text-align: center;
        }
        table
        {
            position:relative;
            left:40px
        }
        .cara
        {
            position:relative;
            left:20px;
        }
        td
        {
            border-width:1px
            border-style:solid;
            border-color:black;
        }
    </style>
    <head>
    </head>
    <body>

    <h1> Modification </h1>

    <form method = "POST" action="modification_prof.php ?id=<?=(isset($_GET['id']))?>"/>

    Nom :
    <div class = "cara">
        <input type="text" name="nom" value="<?=(isset($user['nom']))?>"/>
        <br>
    </div>
    </br>

    Pr&eacutenom :
    <div class = "cara">
        <input type="text" name="prenom" value ="<?=(isset($user['prenom']))?>"/>
        <br>
    </div>
    </br>

    Adresse e-mail :
    <div class = "cara">
        <input type="text" name="email" value ="<?=(isset($user['email']))?>"/>
        <br>
    </div>
    </br>

    Login :
    <div class = "cara">
        <input type="text" name="login" value ="<?=(isset($user['login']))?>"/>
        <br>
    </div>
    </br>

    Mot de passe  :
    <div class = "cara">
        <input type="text" name="mdp" value ="<?=(isset($user['mdp']))?>"/>
        <br>
    </div>
    </br>

    <input type = submit name = "Envoyer", value = "Envoyer">

    </form>
    </body>
    </html>

<?php
{
    echo ("<a href = \"Accueil_Admin.php\"> Erreur: Retour au menu </a>");
}
?>