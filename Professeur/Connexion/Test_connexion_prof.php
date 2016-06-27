<?php

if ((empty($_POST['login'])) or (empty ($_POST['mdp'])))
{
    echo ("L'identifiant ou le mot de passe est incorrecte ");
    echo ("<html>");
    echo ("<body>");
    echo ("<a href = Connexion_Prof.html>Retour &agrave l'&eacutecran de connexion </a>");
    echo ("</body>");
    echo ("</html>");

}
else
{
    $login_user = $_POST['login'];
    $mdp_user = $_POST['mdp'];

    $user = 'root';
    $pwd = '';
    $str_connect = 'mysql:host=localhost;dbname=stagetest';
    $db = new PDO($str_connect, $user,$pwd);
    $str_select = ('select *from prof where Login = ? and MDP = ?');
    $requete_select=$db->prepare($str_select);
    $users = array($login_user,$mdp_user);
    $requete_select->execute($users);

    $ligne=$requete_select->fetch(PDO::FETCH_ASSOC);

    if ($ligne == false)
    {
        if (($login_user == "Admin") and ($mdp_user =="123"))
        {
            echo ("Bienvenue Administrateur </br>");
            echo ("<a href = Accueil_Admin.php> Acceder &agrave la partie admin </a>");
        }
        else
        {
            echo("Identifiant ou mot de passe incorrect </br> <a href = connexion_prof.html> Retour &agrave l'&eacutecran de connexion </a>" );
        }
    }
    else
    {
        echo  ("<h1> Connexion r&eacuteussie</h1> </br>");
        session_start();
        $_SESSIONS['id'] = $ligne ['IdProf'];
        $_SESSIONS['Nom'] = $ligne ['Nom'];
        $_SESSIONS['Prenom']= $ligne ['Prenom'];
        $_SESSIONS['Mail'] = $ligne ['email'];

        $nom = $ligne ['Nom'];
        $prenom = $_SESSIONS['Prenom'];
        echo ("Bienvenue $nom, $prenom");
        echo ("</br> <a href = Menu_prof.php> Acc&eacuteder &agrave mon espace personnel </a>");


    }

}