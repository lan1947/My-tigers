<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LustVodka
 *
 * uses: <a href =" <?php echo esc_url( home_url( '/' ) ); ?>" rel =" home" > <? php bloginfo( 'name' ); ?> </ a >
 * uses: <a href =" <?php bloginfo('url')?>"><?php bloginfo('name')?>
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>><!-- WP REQUIRED SECTION LANGUAJE OF SITE -->
<head>   
  <meta charset="<?php bloginfo( 'charset' ); ?>"><!-- WP REQUIRED SECTION CODE OF SITE -->   
  <meta http-equiv="X-UA-Compatible" content="IE=edge">  
  <meta name="viewport" content="width=device-width, initial-scale=1"><!-- WP REQUIRED RESPONSIVE -->  
  <meta name="description" content="<?php bloginfo('description'); ?>"> <!-- WP OPTIONAL -->
  <link rel="shortcut icon" href="assets/images/logo-124x128.png" type="image/x-icon">
  <link rel="profile" href="http://gmpg.org/xfn/11"><!-- WP OPTIONAL -->
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"><!-- WP OPTIONAL -->  
  <title><?php wp_title('|', true, 'right'); ?></title> <!-- WP OPTIONAL --> 

  <?php wp_head(); ?>  <!-- WP REQUIRED --> 
</head>
<body>
<!-- NAV MENU -->
<section id="menu-0">
<nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">
                	<!-- link & logo -->
                    <div class="navbar-brand">         
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"rel ="home"><? php bloginfo('name'); ?> 
                        class="navbar-logo"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo-124x128.png" alt="LUST VODKA"></a>                    
                    </div>
                </div>

                <div class="mbr-table-cell">

                  <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                  </button>
                 <?php 
                    $defaults = array(
								'theme_location' => 'header-menu',
                                'container'  => true,
                                'depth' => 2,                                
                                'items_wrap'     => '<ul id="exCollapsingNavbar" 
                                                     class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm">
                                                     <li class="nav-item"></li>%3$s
                                                     </ul>'                   
                                
                                ); 

                    wp_nav_menu( $defaults );
                ?>
                 
                 <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                </button>

                </div>
            </div>

        </div>
    </nav>

</section>
<!-- HEADER: https://codex.wordpress.org/Designing_Headers
     PARAMETRO: INSTRUCCION WP PARA IMAGEN DE FONDO EN STYLE
-->
<section class="engine"><a rel="external" href="#">Mobirise Web Builder</a></section><section class="mbr-section mbr-section-hero mbr-section-full mbr-parallax-background mbr-section-with-arrow" id="header1-1" style="background-image:url(<?php bloginfo('stylesheet_directory'); ?>/assets/images/cabecera2-2000x1000.png);">

    <div class="mbr-table-cell">

        <div class="container">
            <div class="row">
                <div class="mbr-section col-md-10">

                    <h1 class="mbr-section-title display-1">Inspire Desire</h1>
                    <p class="mbr-section-lead lead"><strong>Find your sinful place</strong></p>
                    <div class="mbr-section-btn"> <a class="btn btn-lg btn-danger-outline btn-danger" href="#">Find your sinful place</a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="mbr-arrow mbr-arrow-floating" aria-hidden="true"><a href="#gallery1-5"><i class="mbr-arrow-icon"></i></a></div>

</section>