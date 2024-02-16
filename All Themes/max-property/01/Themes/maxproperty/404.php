<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Max Property
 */

get_header(); ?>
<div class="single-header">
<div class="row">
	<div class="col-md-12 col-sm-12">
		<div class="section-title post-meta center-text">
		<h2><?php _e( 'Oops! That page can&rsquo;t be found.', 'maxproperty' ); ?></h2>
		</div>
	</div>
</div>
</div>
<div class="container error-404 not-found">
<div class="row">
<article class="blog-post clearfix">
<div class="col-md-8 col-sm-8 col-xs-12">
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
<?php get_search_form(); ?>
<?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'maxproperty' ); ?></p>
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

<div class="col-md-4 col-sm-4 col-xs-12"><div class="page_sidebar">
<?php get_sidebar(); ?>
</div></div>
</article>
</div>
</div>
<?php
get_footer();
