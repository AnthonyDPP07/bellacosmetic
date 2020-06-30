<?php get_header(); ?>
  <?php
  $url_actual = home_url( add_query_arg( array(), $wp->request ) );

  
  $url = home_url( '', null );
  
  if($url_actual == $url.'/nosotros'){
    include "nosotros.php";
  } else if($url_actual == $url.'/contactanos'){
    include "contactanos.php";
  }else if($url_actual == $url.'/productos'){
    include "productos.php";
  }
  ?>
  <?php get_footer(); ?>