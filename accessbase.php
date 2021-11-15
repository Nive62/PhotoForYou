<?php

$host = "localhost";
$db = "photoforyou2";
$user = "root";
$pw ="";
// connection à la base de données avec test si il y a une erreur
try
{
    $db = new PDO("mysql:host = $host;port=3306 ;dbname = $db;charset=utf8",$user,$pw);
    // Pour afficher les erreurs
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
     die('Erreur : ' . $e->getMessage());
}

?>