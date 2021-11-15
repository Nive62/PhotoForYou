<?php
include ("include/entete.inc.php");
if($_SESSION['login']!=true) 
{
	header("Location:connexion.php");
}
if($_SESSION['type']!='Photographe')
{
	header("Location:index.php");
}
?>
</br>
<div class="container">
  <div style="background:#CFD8DC !important" class="jumbotron">
    <h1 class="display-4">Vendre une photo</h1>
    <p class="lead">Merci de remplir ce formulaire pour vendre vos photos.</p>
    <hr class="my-4">
  </div>
  <img src="" id="photo"  width=20% class="img-responsive float-right" >


  <!-- Formulaire d'inscription -->
  <form  method="post" action="ajoutPhoto.php"  id="form"  enctype="multipart/form-data" novalidate>
    <div class="form-group row">
      <div class="col-md-4 mb-3">
        <label for="pseudonyme">Pseudonyme</label>
        <input type="text" class="form-control"  pattern="[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ-]+" minlength="3" maxlength="30" autocomplete="off"  spellcheck="false" name="pseudonyme" id="pseudonyme" placeholder="Votre pseudonyme" required>
        <div class="valid-feedback">
          Prénom Ok !
        </div>
        <div class="invalid-feedback">
          Le champ prénom est obligatoire et doit faire entre 3 et 30 caractères
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-4 mb-3">
        <input type="file" onchange="actuPhoto(this)" id="Vendrephoto" name="Vendrephoto" accept="image/jpeg, image/png, image/gif">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-4 mb-3">
        <label for="nomPhoto">Nom Photo</label>
        <input type="text" class="form-control"  pattern="[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ-]+" minlength="3" maxlength="30" autocomplete="off"  spellcheck="false" name="nomPhoto" id="nomPhoto" placeholder="Nom de la Photo" required>
        <div class="valid-feedback">
          Nom de la photo Ok !
        </div>
        <div class="invalid-feedback">
          Le champ Nom Photo est obligatoire et doit faire entre 3 et 30 caractères
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-4 mb-3">
        <label for="description">Description</label>
        <input type="text" class="form-control"  pattern="[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ-]+" minlength="3" maxlength="100" autocomplete="off"  spellcheck="false" name="descriptionPhoto" id="descriptionPhoto" placeholder="Description... " required>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-4 mb-3">
        <label for="prixphoto">Prix</label>
        <input type="text" class="form-control"  pattern="[a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ-]+" minlength="3" maxlength="100" autocomplete="off"  spellcheck="false" name="prixphoto" id="prixphoto" placeholder="Prix en crédit | 1 crédit = 5€ " required>
      </div>
    </div>
    <input type="submit" value="Valider"  class="btn btn-primary" name="valider" />
  </form>
</div>

<?php
  include ("include/piedDePage.inc.php");
?>