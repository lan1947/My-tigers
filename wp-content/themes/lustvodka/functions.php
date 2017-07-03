<?php
/**
 * LustVodka functions and definitions.
 * @author: Luis Noguera luisnoguera@gmail.com
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package LustVodka
 */
?>

<?php 
    /*
    * Stylesheets #
    * --------------------------------------------------
    * Define el estilo CSS estandarizado para el CMS WP
    * Esta funcion le indica a WP donde estan la rutas
    * de los estilos
    *
    * WordPress creates a handle and path to find your file 
    * and any dependencies it may have (like jQuery) and then 
    * you will use a hook that will insert your scripts and 
    * stylesheets.
    *
    * The basic function for enqueuing a style is:
    * wp_enqueue_style( $handle, $src, $deps, $ver, $media );
    *
    * $handle is simply the name of the stylesheet.
    * $src is where it is located. The rest of the parameters are optional.
    * $deps refers to whether or not this stylesheet is dependent on another 
    * stylesheet. If this is set, this stylesheet will not be loaded unless 
    * its dependent stylesheet is loaded first.
    * $ver sets the version number.
    * $media can specify which type of media to load this stylesheet in, such 
    * as ‘all’, ‘screen’, ‘print’ or ‘handheld.’
    * --------------------------------------------------
    * name: Enqueue scripts and styles.
    * @param: wp_enqueue_style( string $handle, string $src = '', array $deps = 
    * array(), string|bool|null $ver = false, string $media = 'all' )
    * @example: wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slider.css',false,'1.1','all');
    * @return
    * @link: https://developer.wordpress.org/themes/basics/including-css-javascript/
    */

  function site_style() {
      wp_enqueue_style('bootstrap-material-design-font', get_template_directory_uri() . '/assets/bootstrap-material-design-font/css/material.css');
      wp_enqueue_style('et-line-font-plugin', get_template_directory_uri() . '/assets/et-line-font-plugin/style.css');
      wp_enqueue_style('tether', get_template_directory_uri() . '/assets/tether/tether.min.css');
      wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
      wp_enqueue_style('dropdown', get_template_directory_uri() . '/assets/dropdown/css/style.css');
      wp_enqueue_style('animate_css', get_template_directory_uri() . '/assets/animate.css/animate.min.css');
      wp_enqueue_style('socicon', get_template_directory_uri() . '/assets/socicon/css/styles.css');
      wp_enqueue_style('style', get_template_directory_uri() . '/assets/theme/css/style.css');
      wp_enqueue_style('mobirise-gallery', get_template_directory_uri() . '/assets/mobirise-gallery/style.css');
      wp_enqueue_style('mobirise_css', get_template_directory_uri() . '/assets/mobirise/css/mbr-additional.css');  
  }
  add_action( 'wp_enqueue_scripts', 'site_style' );

    /*
    * Scripts #
    * -------------------------------------------------
    * Define los scripts que se cargaran en el Tema
    * estandarizado para el CMS WP
    * Esta funcion le indica a WP donde estan la rutas
    * de los javascripts
    *
    * The Comment Reply Script #
    * La forma correcta de incluir la respuesta de comentario 
    * es utilizar etiquetas condicionales para comprobar si existen 
    * ciertas condiciones, de modo que el script no se cargue innecesariamente. 
    * Por ejemplo, sólo puede cargar scripts en páginas de una sola página utilizando 
    * is_singular y comprobar que el usuario selecciona "Habilitar comentarios enriquecidos". 
    * Así que puede configurar una función como:
    * 
    * if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' );}
    * Si los comentarios son habilitados por el usuario y estamos en una página de publicación, 
    * se cargará el script de respuesta de comentario. De lo contrario, no lo hará.
    * ---------------------------------------------------
    * name: Enqueue scripts and styles.
    * @param: wp_enqueue_style( string $handle, string $src = '', array $deps = 
    * array(), string|bool|null $ver = false, string $media = 'all' )
    * @example: wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
    * @return
    * @link: https://developer.wordpress.org/themes/basics/including-css-javascript/
    */

   function site_scripts() {
      wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/web/assets/jquery/jquery.min.js', array(), '', true );
      wp_enqueue_script( 'tether', get_template_directory_uri() . '/assets/tether/tether.min.js', array(), '', true );
      wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array(), '', true );
      wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/assets/smooth-scroll/smooth-scroll.js', array(), '', true );
      wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/assets/dropdown/js/script.min.js', array(), '', true );
      wp_enqueue_script( 'touch-swipe', get_template_directory_uri() . '/assets/touch-swipe/jquery.touch-swipe.min.js', array(), '', true );
      wp_enqueue_script( 'viewport-checker', get_template_directory_uri() . 'assets/viewport-checker/jquery.viewportchecker.js', array(), '', true );
      wp_enqueue_script( 'jarallax', get_template_directory_uri() . '/assets/jarallax/jarallax.js', array(), '', true );
      wp_enqueue_script( 'masonry', get_template_directory_uri() . '/assets/masonry/masonry.pkgd.min.js', array(), '', true );
      wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/assets/imagesloaded/imagesloaded.pkgd.min.js', array(), '', true );
      wp_enqueue_script( 'bootstrap-carousel-swipe', get_template_directory_uri() . '/assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js', array(), '', true );
      wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/assets/theme/js/script.js', array(), '', true );
      wp_enqueue_script( 'mobirise-gallery_player', get_template_directory_uri() . '/assets/mobirise-gallery/player.min.js', array(), '', true );
      wp_enqueue_script( 'mobirise-gallery', get_template_directory_uri() . '/assets/mobirise-gallery/script.js', array(), '', true );


    }
    add_action( 'wp_enqueue_scripts', 'site_scripts' );

    /*
    * Menus #
    * -------------------------------------------------
    * The Comment
    * Introducir menús de navegación personalizados en un tema.  
    * Así es como aparecerán en la pantalla de administración 
    * Apariencia -> Menús.
    * ---------------------------------------------------
    * name: Navigation Menu 
    * @param: $locations 
    *         (array) (Optional) Associative array of menu
    *         location identifiers (like a slug) and descriptive text.
    *         Default value: array()
    * @example: function register_my_menu() {register_nav_menu('header-menu',__( 'Header Menu' ));}
    * add_action( 'init', 'register_my_menu' );
    * #Source: File: wp-includes/nav-menu.php
    * @return
    * @link: https://codex.wordpress.org/Navigation_Menus | 
    *        https://codex.wordpress.org/Function_Reference/wp_nav_menu
    *        https://developer.wordpress.org/reference/functions/wp_nav_menu/
    *        https://developer.wordpress.org/reference/functions/register_nav_menus/
    */
    
    function register_my_menus() {
        register_nav_menus(
            array(
            'header-menu' => __( 'Header Menu' ),
            'footer-menu' => __( 'Footer Menu' )
            )
        );
    }
    add_action( 'init', 'register_my_menus' ); 


    if ( ! function_exists( 'lustvodka_setup' ) ) :
    /**
    * Sets up theme defaults and registers support for various WordPress features.
    *
    * Note that this function is hooked into the after_setup_theme hook, which
    * runs before the init hook. The init hook is too late for some features, such
    * as indicating support for post thumbnails.
    */

    function lustvodka_setup() {
        // Add default posts and comments RSS feed links to head.
	    add_theme_support( 'automatic-feed-links' );

        /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
        add_theme_support( 'title-tag' );

        /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
        add_theme_support( 'post-thumbnails' );

        /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        /*
        * Enable support for Post Formats.
        * See https://developer.wordpress.org/themes/functionality/post-formats/
        */
        add_theme_support( 'post-formats', array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
        ) );
    }
    endif;
    add_action( 'after_setup_theme', 'lustvodka_setup' );


?>    
  

  



