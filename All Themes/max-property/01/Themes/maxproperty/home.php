<?php
/**
 *
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Max Property
 */

get_header(); ?>

<div class="single-header front_page">
<div class="row">
	<div class="col-md-12 col-sm-12">
		<div class="section-title post-meta center-text">
		<h2>Blog</h2>
		</div>
	</div>
</div>
</div>
<div class="container ">
<div class="row">
<article class="blog-post clearfix">
<div class="col-md-8 col-sm-8 col-xs-12">
<?php
	if ( have_posts() ) : 
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'home' );

	endwhile; // End of the loop.
	?>
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
<div class="read-btn post-navigation"><?php the_posts_navigation(); ?></div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12"><div class="page_sidebar">
<?php get_sidebar(); ?>
</div></div>
</article>
</div>
</div>
<?php
get_footer();
