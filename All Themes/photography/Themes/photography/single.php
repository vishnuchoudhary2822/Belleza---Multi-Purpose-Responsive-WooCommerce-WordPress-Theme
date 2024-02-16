<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Photography
 */

get_header(); ?>

<div class="single-header">
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
	<h2 class="single-blog-title"><?php the_title(); ?></h2>
	<h6><?php the_time('F j, Y'); ?> </h6>

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
<?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'img-responsive'));?>
<?php the_content(); ?>
</div>
<?php

	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;
?>

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
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="read-btn post-navigation"><?php the_post_navigation(); ?></div>
</div>
</article>
</div>
</div>
<?php
get_footer();
