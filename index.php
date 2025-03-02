<?php
get_header();
?>



</div>

<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php bloginfo("template_directory");?> ./images/1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo("template_directory");?> ./images/2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo("template_directory");?> ./images/3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="container" style="display:flex;">
<div class="card" style="width: 300px; padding: 10px;">
  <img src="<?php bloginfo("template_directory");?> ./images/4.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card" style="width: 300px; padding: 10px">
  <img src="<?php bloginfo("template_directory");?> ./images/5.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card" style="width: 300px; padding: 10px">
  <img src="<?php bloginfo("template_directory");?> ./images/6.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

<br>
<br>

<?php

get_sidebar();

?>

<?php get_footer(); ?> 