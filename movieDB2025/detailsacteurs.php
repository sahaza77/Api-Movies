<?php require("header.php"); ?>
<?php require("fonctions.php"); ?>

<?php
if ( isset($_GET['id']) AND !empty($_GET['id'])){ 
    $id = $_GET['id'];
    $acteurs = detailsActeurs($id);
}
?>

<div class="album py-5 bg-body-tertiary">
  <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-2">
    
        <div class="d-flex align-items-stretch">
          <div class="card shadow-sm ">
          <img src="<?php echo 'https://image.tmdb.org/t/p/w780/'.$acteurs['profile_path']; ?>" alt="Image de l'acteur" class="card-img-top" style="width: 400px; height: auto;">
            
            <div class="card-body lh-sm d-flex flex-column">
              <p class="lh-sm">
                <strong><?php echo $acteurs['name']; ?></strong>
              <p><strong>Date de naissance:</strong> <?php echo $acteurs['birthday']; ?></p>
              <p><strong>Lieu de naissance:</strong> <?php echo $acteurs['place_of_birth']; ?></p>
              <p><strong>Popularité:</strong> <?php echo $acteurs['popularity']; ?></p>
            
            </div>
          </div>
        </div>
     
    </div>
  </div>
</div>

<?php require("footer.php"); ?>
