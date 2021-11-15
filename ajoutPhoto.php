<?php
include ("include/entete.inc.php");
if($_SESSION['login']!=true) 
{
	header("Location:connexion.php");
}
if($_SESSION['type']!='Client')
{
	header("Location:index.php");
}
if (isset($_POST['valider']))
{
  $nomPhoto = $_POST['nomPhoto'];
  $descriptionPhoto = $_POST['descriptionPhoto'];
  $prixphoto = $_POST['prixphoto'];
  $pseudonyme = $_POST['pseudonyme'];

  // Traitement de la photo
  if (!empty($_FILES))
  {
    $urlPhoto = $_FILES['Vendrephoto'];
    $nom_fichier = $urlPhoto['name'];
    if (strlen($nom_fichier)==0)
    {
      $nom_fichier=$nomPhoto.".png";
    }
  }



  $valid = TRUE;
  
  if (strlen($nomPhoto)<=3 or strlen($nomPhoto)>30)
  {
    $valid = FALSE;
  }

  if ($valid)
  {
    // On prépare la requête pour ajouter en BDD
    $instruction = $db->prepare('INSERT INTO photoforyou2.photoavendre(ventephoto,nomphoto,descriptionphoto,prixphoto) VALUES (:ventephoto, :nomPhoto, :descriptionPhoto, :prixphoto)');
    $instruction->bindParam(':ventephoto', $nom_fichier, PDO::PARAM_STR);
    $instruction->bindParam(':nomPhoto', $nomPhoto, PDO::PARAM_STR);
    $instruction->bindParam(':descriptionPhoto', $descriptionPhoto, PDO::PARAM_STR);
    $instruction->bindParam(':prixphoto', $prixphoto, PDO::PARAM_STR);
    try
    {
      $instruction->execute();
      move_uploaded_file($urlPhoto['tmp_name'],'images/'.$nom_fichier);
    }
    catch(PDOException $e)
    {
      echo "<br/><h1> Erreur : </h1>" . $e->getMessage();
    }
  }
}
else
{
  header("Location:inscription.php");
}
?>