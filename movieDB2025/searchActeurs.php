<?php require("header.php"); ?>
<?php require("fonctions.php"); ?>
<?php
if ( isset($_GET['query']) AND !empty($_GET['query'])){ 
    $query = $_GET['query'];
    $info = searchActeurs($query);
    //echo "<pre>";
    //print_r($info);
    //echo"</pre>";

}
?>
 
 <div class="album py-5 bg-body-tertiary">
  <div class="container">
    <h4>Acteurs</h4>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
      <?php foreach($info as $acteurs) : ?>
        <?php if(!empty($acteurs['profile_path'])) : ?>
        <div class="col">
          <div class="card shadow-sm">
            <img src="<?php echo 'https://image.tmdb.org/t/p/w780/'.$acteurs['profile_path']; ?>" class="card-img-top" alt="Image de l'acteur">
            <div class="card-body d-flex flex-column">
              <p class="lh-sm">
                <strong><?php echo $acteurs['name']; ?></strong>
              </p>
              <div class="mt-auto">
                <a href="detailsacteurs.php?id=<?= $acteurs['id']; ?>" class="btn btn-primary" style="width: 100%;" aria-pressed="true">Voir</a>
              </div>
            </div>
          </div>
        </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </div>
</div>


<?php require("footer.php"); ?>