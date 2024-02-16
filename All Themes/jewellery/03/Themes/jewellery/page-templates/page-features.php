<?php
/**
 * Template Name: Theme Features Sidebar
 *
 * Description: Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 */
/*
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Jewelry
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
<div class="col-md-4 col-sm-12 col-xs-12"><div id="feature_sidebar" class="feature-element">
	<?php if ( is_active_sidebar( 'theme-feature' ) ) : dynamic_sidebar( 'theme-feature' );  endif; ?>
</div></div>
<div class="col-md-8 col-sm-12 col-xs-12">
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