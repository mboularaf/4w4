<?php
/**
 * template name:Evenement
 */
?>
<?php get_header(); ?>
<main class="site__main">
<?php
if ( have_posts() ) : the_post(); ?>
<h1><?= get_the_title(); ?></h1>
<?php the_content();?>
<p>DATE<?php the_field('date_de_latelier'); ?></p>
<p>HEURE<?php the_field('heure_de_la_formation'); ?></p>
<p>DURÉE<?php the_field('duree'); ?></p>     
<p>LOCAL<?php the_field('local'); ?></p>    
<?php endif;?>
</main><!-- #main -->
<?php
get_footer();