<?php require("header.php"); ?>
<?php require("fonctions.php"); ?>

<?php  
if ( isset($_GET['id']) AND !empty($_GET['id'])){ 
    $id = $_GET['id'];
    $video = video($id); 
} 
?>
<div class="album py-5 bg-body-tertiary">
  <div class="container">
     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-2">
    
        <div class="d-flex align-items-stretchl">
          <div class="card shadow-sm ">
          <iframe width="672" height="378" src="https://www.youtube.com/embed/KtF7DvnsEig" frameborder="0" allowfullscreen></iframe>
            <div class="card-body lh-sm d-flex flex-column">
              <p class=" lh-sm">
              </p>
            </div>
          </div>
        </div>
     
    </div>
  </div>
</div>

<?php require("footer.php"); ?>