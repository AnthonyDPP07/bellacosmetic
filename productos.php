     <main class="container pag-productos">
     <div class="row">
        <div class="col col-md-auto encabezado">
          <h3>Maquillaje</h3>
        </div>
      </div>
      <div class="row productos">
       
       <?php $the_query = new WP_Query( 'cat=7' ); ?>
       <?php if(have_posts()) : while($the_query -> have_posts()) : $the_query -> the_post(); ?>
       <div class="col-md-3 col-sm-6 card-cont">
               <div class="card">
                   <div class="img-prod" >
                       <a href="<?php the_permalink(); ?>">
                       <img src="<?php bloginfo('template_url');?>/images/card1.jpg" class="card-img-top" alt="...">
                       </a>
                   </div>
                   <div class="card-body">
                       <h5 class="card-title"><?php the_title()?></h5>
                   </div>
               </div>
           </div>
       <?php endwhile; else: ?>
       <?php endif;?>
           
       </div>
       </div>
       <div class="row">
        <div class="col col-md-auto encabezado">
          <h3>Piel</h3>
        </div>
      </div> 
      <div class="row productos">
       
       <?php $the_query2 = new WP_Query( 'cat=6' ); ?>
       <?php if(have_posts()) : while($the_query2 -> have_posts()) : $the_query2 -> the_post(); ?>
       <div class="col-md-3 col-sm-6 card-cont">
               <div class="card">
                   <div class="img-prod" >
                       <a href="<?php the_permalink(); ?>">
                       <img src="<?php bloginfo('template_url');?>/images/card5.jpg" class="card-img-top" alt="...">
                       </a>
                   </div>
                   <div class="card-body">
                       <h5 class="card-title"><?php the_title()?></h5>
                   </div>
               </div>
           </div>
       <?php endwhile; else: ?>
       <?php endif;?>
           
       </div>
       </div>
      <div class="row">
        <div class="col col-md-auto encabezado">
          <h3>Pelo</h3>
        </div>
      </div>
      <div class="row productos">
       
       <?php $the_query3 = new WP_Query( 'cat=5' ); ?>
       <?php if(have_posts()) : while($the_query3 -> have_posts()) : $the_query3 -> the_post(); ?>
       <div class="col-md-3 col-sm-6 card-cont">
               <div class="card">
                   <div class="img-prod" >
                       <a href="<?php the_permalink(); ?>">
                       <img src="<?php bloginfo('template_url');?>/images/card7.jpg" class="card-img-top" alt="...">
                       </a>
                   </div>
                   <div class="card-body">
                       <h5 class="card-title"><?php the_title()?></h5>
                   </div>
               </div>
           </div>
       <?php endwhile; else: ?>
       <?php endif;?>
           
       </div>
       </div>
    </main>
    