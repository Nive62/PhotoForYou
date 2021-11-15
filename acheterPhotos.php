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
?>

<div class="container text-center">

	<div class="py-5 text-center">
		<img class="d-block mx-auto mb-2" src="images/logo.png" alt="logo photoforyou" width="170" height="115">
		<h1 class="display-5">Acheter des photos</h1>
		<p class="lead">Des pros au service des professionnels de la communication.</p>
	</div>
</div>
  
<section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Produits à vendre</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                        $query = "SELECT * from photoforyou2.photoavendre;";
                        $requete = $db->query($query);
                        $result = $requete->fetchAll();
                        foreach($result as $cat){
                        echo '    <div class="col mb-5">';
                        echo '    <div class="card h-100">';
                        echo '        <img class="card-img-top" width="250px" height="300px" src="images/'.$cat["ventephoto"].'"/>';
                        echo '        <div class="card-body p-4">';
                        echo '            <div class="text-center">';
                        echo '                <h5 class="fw-bolder">'.$cat["nomphoto"].'</h5>';
                        echo                  $cat["prixphoto"].' credit</br>';
                        echo                  $cat["descriptionphoto"];
                        echo '            </div>';
                        echo '        </div>';
                        echo '        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">';
                        echo '            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Acheter</a></div>';
                        echo '        </div>';
                        echo '    </div>';
                        echo '</div>';
                        }
                ?>
        </div>
    </div>
</section>

<?php
    include ("include/piedDePage.inc.php");
?>