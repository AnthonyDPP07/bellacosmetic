<?php get_header(); ?>
  <?php
  $url_actual = home_url( add_query_arg( array(), $wp->request ) );

  if($url_actual == 'http://localhost/bella-cosmetic/nosotros'){
    include "nosotros.php";
  } else if($url_actual == 'http://localhost/bella-cosmetic/contactanos'){
    include "contactanos.php";
  }else if($url_actual == 'http://localhost/bella-cosmetic/productos'){
    include "productos.php";
  }
  ?>
  <?php get_footer(); ?>