<?php
    $user = 'root';
    $pwd = '';
    $str_connect = 'mysql:host=localhost;dbname=stagetest';
    $db = new PDO($str_connect, $user,$pwd);
    $str_select = ('SELECT Login FROM prof WHERE IdProf = ?');
    $requete_select=$db->prepare($str_select);
    $users=array(isset($_POST['login']));
    //$requete_select->execute();
    $ligne=$requete_select->fetch(PDO::FETCH_ASSOC);
    var_dump($ligne);

    if($ligne ==false)
    {
         echo(0);
    }
    else
    {
        echo(1);
    }

?>		