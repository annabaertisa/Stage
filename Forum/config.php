<?php

$connexion = mysqli_connect("localhost", "root", "");
mysqli_select_db($connexion, 'stagetest');

$admin='baert';



$url_home = 'index.php';


$design = 'default';
include('init.php');
?>