<section class="pag-index">
<div class="parte1">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php bloginfo('template_url');?>/images/carousel11.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="<?php bloginfo('template_url');?>/images/carousel21.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="<?php bloginfo('template_url');?>/images/carousel41.jpg   " class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="container parte2 ">

      <div class="row">
        <div class="col col-md-auto encabezado">
          <h3>Sobre nosotros</h3>
        </div>
      </div>
      <div class="row miviva">
        <?php $the_query = new WP_Query( 'cat=2&showposts=3' ); ?>
        <?php if(have_posts()) : while($the_query -> have_posts()) : $the_query -> the_post(); ?>
          <div class="col-md-4 cards-cont">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title"><?php the_title()?></h5>
            </div>
            <div class="card-body">
              <div class="card-text"><?php echo the_excerpt() ?></div>
            </div>
          </div>
        </div>
        <?php endwhile; else: ?>
        <?php endif;?>
      </div>

    </div>
    </section>