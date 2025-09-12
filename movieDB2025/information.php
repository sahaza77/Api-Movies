<?php require("header.php"); ?>
<?php require("fonctions.php"); ?>
<?php
if ( isset($_GET['id']) AND !empty($_GET['id'])){ 
    $id = $_GET['id'];
    $info = infoMovies($id); 

}
?>
 
 <div class="album py-5 bg-body-tertiary">
  <div class="container">
     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-2">
    
        <div class="d-flex align-items-stretchl">
          <div class="card shadow-sm ">
            <img src="<?php echo 'https://image.tmdb.org/t/p/w780/'.$info['poster_path']; ?>" >
            <div class="card-body lh-sm d-flex flex-column">
              <p class=" lh-sm">
                <strong><?php echo $info['title']; ?></strong>
              </p>
              <p><?php echo $info['overview']; ?></p>
              <a href="video.php?id=<?= $movie['id'] ; ?>" class="btn btn-primary mt-auto" button type="submit" aria-pressed="true">Bande annonce</a></button>
              <p><?php echo $info['runtime']; ?></p>
              <p><?php echo $info['popularity']; ?></p>
              <p><?php echo $info['release_date']; ?></p>
              <p><?php echo $info['original_title']; ?></p>
              <p><?php echo $info['tagline']; ?></p>
            </div>
          </div>
        </div>
     
    </div>
  </div>
</div>
<?php require("footer.php"); ?>