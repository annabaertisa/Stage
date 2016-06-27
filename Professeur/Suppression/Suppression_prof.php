<?php

if (!isset($_GET['id']))
{
    echo("Impossible l'id est vide </br>");
    echo ("<a href = Accueil_Admin.php> Retour &agrave l'affichage </a>");
}
else
{
    $id = $_GET['id'];
    $tableau = array ("$id");
    $user = 'root';
    $pwd = '';
    $str_connect = 'mysql:host=localhost;dbname=stagetest';
    $db = new PDO($str_connect, $user,$pwd);
    $requete=$db->prepare("delete from prof where (IdProf = $id)");
    $requete->execute($tableau);
    echo("La personne a été supprimé </br>");
    echo("<a href = Accueil_Admin.php> Retour &agrave l'affichage </a>");
}
?>