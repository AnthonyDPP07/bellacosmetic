<?php get_header(); ?>
<main class="container pag-detalles">
     <div class="row">
        <div class="col col-md-auto encabezado">
          <h3>Maquillaje</h3>
        </div>
      </div>
      <div class="row productos">
       
       
       <?php if(have_posts()) : while( have_posts()) : the_post(); ?>
       <div class="col-md-12 card-cont">
               <div class="card">
                   <div class="img-prod" >
                       <a href="<?php the_permalink(); ?>">
                       <img src="<?php bloginfo('template_url');?>/images/card1.jpg" class="card-img-top" alt="...">
                       </a>
                   </div>
                   <div class="card-body">
                       <h5 class="card-title"><?php the_title()?></h5>
                      <div class="card-text">
                      <?php the_content()?>
                      </div>
                           <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus"></i> Comprar</a>
                   </div>
               </div>
           </div>
       <?php endwhile; else: ?>
       <?php endif;?>
           
      
           
       </div>
       </div>
    </main>
    
 <?php get_footer(); ?>