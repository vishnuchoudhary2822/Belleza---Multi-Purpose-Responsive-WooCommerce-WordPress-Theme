<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cosmetic
 */

get_header(); ?>
<?php 
		if(!is_front_page())
		{ ?>
<div class="single-header">
<div class="row">
	<div class="col-md-12 col-sm-12">
		<div class="section-title post-meta center-text">
		<h2>
			<?php the_title(); ?>
		</h2>
		</div>
	</div>
</div>
</div>
<?php }	?>
<div class="container ">
<div class="row">
<article class="blog-post clearfix">
<div class="col-md-12 col-sm-12 col-xs-12">
<?php
	if ( have_posts() ) : 
	
	/* Start the Loop */
	while ( have_posts() ) : the_post();

		/*
		 * Include the Post-Format-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */
?>
<div class="blog-content">
<div class="blog-text">
<?php the_content(); ?>
</div>
</div>
<?php
	endwhile;
?>
<div class="read-btn post-navigation"><?php the_posts_navigation(); ?></div>
<?php
	else :
?>
<div class="blog-content">
<div class="blog-text">
<?php get_template_part( 'template-parts/content', 'none' ); ?>
</div>
</div>	
<?php
	endif;
?>
</div>
</article>
</div>
</div>
<?php
get_footer();