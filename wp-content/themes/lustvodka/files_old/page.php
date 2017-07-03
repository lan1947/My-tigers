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
<?php get_header(); ?>
<hr>

<section>
<h3>Blog</h3>

<?php if (have_posts()): while (have_posts()): the_post();?>
<div class="row">

    <div class="col-md-3 column">
        imagen del blog
    </div>

    <div class="col-md-9 column">

        <h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3> 

        <p>
        Publicado: <?php The_category (', '); ?> Por: <php the_author(); ?>
        En: <?php the_time ('F J Y'); ?>
        <P>

        <p>
        <?php the_excerpt(); ?>
        </p>


        <p>
        <a href="<?php the_permalink(); ?> ">Leer mas..</a>
        </p>

    </div>

</div>



<?php endwhile; else : ?>
<p><?php _e('Sorry no hay nada' ); ?></p>
<?php endif; ?>

</section>

<?php get_footer(); ?>
