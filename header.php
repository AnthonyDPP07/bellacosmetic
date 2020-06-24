<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/stile.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a78ad2d507.js" crossorigin="anonymous"></script>
    <?php wp_head() ?>
    <title>
        <?php
         if(is_home()){
            echo get_bloginfo('name');
         }else if(is_single()){
            echo the_title();
         }else{
            echo get_bloginfo('name');
         }
         ?>   
    </title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container">

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  
                    <?php wp_nav_menu( array(
                        'container' => false,
                        'items_wrap' => '<ul class="navbar-nav mr-auto">%3$s</ul>',
                        'theme_location' => 'menu-top'
                    )); ?>
                </div>

                <div class="logo">
                    <a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_url');?>/images/Logo_Bella_Cosmetic.png" alt="" width="100"></a>
                </div>
            </div>
            
            
        </nav>
    </header>