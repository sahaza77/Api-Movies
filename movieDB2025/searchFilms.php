<?php require("header.php"); ?>
<?php require("fonctions.php"); ?>
<?php
if ( isset($_GET['query']) AND !empty($_GET['query'])){ 
    $query = $_GET['query'];
    $info = searchFilms($query);
}
?>
 
 <div class="album py-5 bg-body-tertiary">
  <div class="container">
       <h4>Films</h4>
     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
     <?php foreach($info as $movies) : ?>
        <?php if(!empty($movies['poster_path'])) : ?>
        <div class="d-flex align-items-stretchl">
          <div class="card shadow-sm ">
            <img src="<?php echo 'https://image.tmdb.org/t/p/w780/'.$movies['poster_path']; ?>" >
            <div class="card-body lh-sm d-flex flex-column">
              <p class=" lh-sm">
                <strong><?php echo $movies ['title']; ?></strong>
              </p>
              <a href="information.php?id=<?= $movies['id'] ; ?>" class="btn btn-primary mt-auto" button type="submit" aria-pressed="true">Voir</a></button>
            </div>
          </div>
        </div>
        <?php endif ; ?>
     <?php endforeach; ?>
    </div>
  </div>
</div>
<?php require("footer.php"); ?>