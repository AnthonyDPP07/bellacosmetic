
  
  <?php get_header(); ?>
  <main class="pag-nosotros container">
    <div class="parte1">

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
    <div class="parte2">
      <div class="row ">
      <?php $the_query2 = new WP_Query( 'cat=3&showposts=1' ); ?>
        <?php if(have_posts()) : while($the_query2 -> have_posts()) : $the_query2 -> the_post(); ?>
        <div class="col-md-12">
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
  </main>
  <?php get_footer(); ?>