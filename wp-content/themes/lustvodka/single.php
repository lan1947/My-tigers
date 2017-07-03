<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package LustVodka  
 */

?>
<?php get_header(); ?>

<!-- CARD BANNER -->
<section style="background-color: rgb(0, 0, 0); padding-top: 1rem; padding-bottom: 1rem;">
 <div class="row">
		<div class="col-md-12">
			<img alt="Bootstrap Image Preview" src="<?php bloginfo('template_directory'); ?>/assets/images/lustsocial.png" class="img-fluid" />
		</div>
	</div>
</section>

<section style="background-color: black ;" class="section" id="blog">
    <div class="container">      

    <h3>Blog</h3>
    <?php if (have_posts()): while (have_posts()): the_post();?>
    <div class="row">
        <div class="col-md-3 column">
            imagen del blog
        </div>
        <div class="col-md-9 column">
            <style>
            h1,h2,h3 { color:white; }
            p { color:gray; }           
            a:link {color: white;}
            a:visited {color:#e6332a;}
            </style>
            <h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
            <p>
            Public in: <?php the_time ('F J Y'); ?>&nbsp; Por: &nbsp;&nbsp; <php the_author(); ?>&nbsp; <br/>
            Category: <?php The_category (', '); ?>&nbsp;<?php the_tags(); ?>
            <P>
            <hr style="background-color:#fff";>    
            <p>Ecxerpt: <?php the_excerpt(); ?></p>
            <hr style="background-color:#fff" border-top: "3px double #8c8c8c;";>
            <p><h2>Content:</h2> <?php the_content(); ?></p>
            <hr>
            <p>Link: <?php wp_link_pages(); ?></p>
        </div>        

    </div>
    <?php endwhile; else : ?>
    <p><?php _e('Sorry no hay nada' ); ?></p>
    <?php endif; ?>
</section> 
<!--LINKS -->
    <section style="background-color: gray; padding-top: 1rem; padding-bottom: 1rem;">
    <div class="container">		
		<nav class="navbar bg-faded">
            <ul class="nav justify-content-center">
                <li class="nav-link">
                    PREVIOUS: <?php previous_post_link( '%link', '<i class="fa fa-chevron-left"></i> %title'); ?>                    
                </li>
                <li class="nav-link">
                    NEXT: <?php next_post_link( '%link', '%title <i class="fa fa-chevron-left"></i>'); ?> 
                </li>
                
            </ul>
        </nav>
	</div>
	
</section> 

<?php
//get_sidebar();
//echo "</div>";
get_footer();