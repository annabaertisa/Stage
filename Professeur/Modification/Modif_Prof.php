<?php

if ((empty($_GET['id'])) or (empty($_POST['nom'])) or (empty($_POST['prenom'])) or (empty($_POST['email'])) or (empty($_POST['login'])) or (empty($_POST['mdp'])))
{
    echo("Il manque une donn&eacutee </br>");
    echo("<a href = Accueil_Admin.php>Retour &agrave l'affichage </a>");
}
else
{
    $id=$_GET['id'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $mdp=$_POST['mdp'];
    $login=$_POST['login'];


    $user = 'root';
    $pwd = '';
    $str_connect='mysql:host=localhost;dbname=stagetest';
    $db = new PDO($str_connect, $user,$pwd);
    $user=array("id"=>$id, "nom"=>$nom, "prenom"=>$prenom, "email"=>$email, "login"=>$login, "mdp"=>$mdp);
    $strUpdate='update prof set Nom=:nom, Prenom=:prenom, Email=:email, Login=:login, Mdp=:mdp Where (IdProf = : id)';
    $update=$db->prepare($strUpdate);
    $update->execute($user);

    echo("Votre modification est prise en compte (</br>)");
    echo("<a href = Accueil_Admin.php> Retour &agrave l'affichage </a>");

}
?>