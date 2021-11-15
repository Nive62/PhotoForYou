<?php
	include ("include/entete.inc.php");
	if($_SESSION['login']!=true )
  {
    header("Location:connexion.php");
  }
  ?>
<div class="card-header title">
</br><h3>Informations personnels</h3>
</div>
          <!-- /Breadcrumb -->
    
<div class="row gutters-sm">
    <div class="col-md-4 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?php echo $_SESSION['photo']?>" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                        <h4><?php echo $_SESSION['prenomUtilisateur']." ".$_SESSION['nomUtilisateur']?></h4>
                        <p class="text-secondary mb-1"><?php echo $_SESSION['type']?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Prénom, Nom</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?php echo $_SESSION['prenomUtilisateur']." ".$_SESSION['nomUtilisateur']?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?php echo $_SESSION['emailUtilisateur']?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Crédits</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?php echo $_SESSION['credit']?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Type</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?php echo $_SESSION['type']?>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="py-5 text-center">
  	    <h3 class="display-5">Acheter des crédits</h3>
        <hr class="my-4">
    </div>
    <form action="AjoutCredit.php" method="post" id="form" novalidate>
        <div class="form-group mb-4">
            <input type="number" class="form-control" id="cred" name="cred" placeholder="Combien voulez vous de crédits ?" required>
            <div class="invalid-feedback">
                Le champ ne peut être vide.
            </div>
        </div>
        <button type="submit" value="rajouter" name="rajouter" class="btn btn-lg btn-outline-success">Rajouter</button>
    </form>
    <div class="py-5 text-left mb-5">
        <hr class="my-4">
        <a href="profil.php"><button class="btn btn-lg btn-outline-danger float-left">Annuler</button></a>
    </div>
</div>

<script>
var Credit=document.getElementById("cred");
Credit.addEventListener("blur", function (evt) {
  validationMotDePasse();
});

(function() {
  "use strict"
  window.addEventListener("load", function() {
    var form = document.getElementById("form")
    form.addEventListener("submit", function(event) {
      if (form.checkValidity() == false) {
        event.preventDefault()
        event.stopPropagation()
      }
      form.classList.add("was-validated")
    }, false)
  }, false)

}())
</script>

<?php
    include ("include/piedDePage.inc.php");
?>