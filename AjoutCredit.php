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
if (isset($_POST['rajouter'])) {

    //On récupère les variables.
    $credit = filter_input(INPUT_POST, 'cred', FILTER_SANITIZE_NUMBER_INT);

      $instruction = $db->prepare("UPDATE photoforyou2.users SET Credit = Credit + :credit WHERE id = ".$_SESSION['idUtilisateur'].";");
      $instruction->bindParam(':credit', $credit, PDO::PARAM_INT);
  
      try {
        $instruction->execute();
        $query = "SELECT * from photoforyou2.users where id = ".$_SESSION['idUtilisateur'].";";
        $requete = $db->query($query);
        $result = $requete->fetch();
        $_SESSION['credit'] = htmlentities($result['Credit']);
        echo '<script>
        alert("Vous avez bien rajouter des crédits !");
        location.href="Profil.php";
        </script>';
      } catch(PDOException $e) {
        echo "<h1>Erreur : </h1>" . $e->getMessage();
        var_dump($_POST);
      }
  
    } else {
      echo '<script>
        alert("bug");
        location.href="connexion.php";
        </script>';
    }
?>