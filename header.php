<html>
    <head>
        <title><?php echo get_the_title(); ?></title>
        <link rel="icon" href="<?php echo get_template_directory_uri().'/assets/img/favicon.png' ?>">
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/dist/style.min.css'; ?>">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <?php wp_head(); ?>
    </head>

    <body>

       <header class="header desktop">
           <div class="wrapper">
               <nav class="mainMenu">
                    <?php
                        wp_nav_menu(array('menu_class'=>'menuDesktop'));
                    ?>
                    <div id="menuMobile">
                        <img alt="menu button" src="<?php echo get_stylesheet_directory_uri().'/assets/img/burger.png'; ?>"/>
                    </div>
               </nav>
           </div>
        </header>