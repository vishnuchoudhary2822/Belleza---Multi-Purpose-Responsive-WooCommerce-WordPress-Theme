<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Pregnancy Care
 */

get_header(); ?>
<div class="single-header">
<div class="row">
	<div class="col-md-12 col-sm-12">
		<div class="section-title post-meta center-text">
		<h2><?php printf( esc_html__( 'Search Results for: %s', 'pregnancycare' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
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
	
	/* Start the Loop */
	while ( have_posts() ) : the_post();

		/*
		 * Include the Post-Format-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */
?>
<div class="blog-content">
<div class="blog-title">
	<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
</div>
<?php if(has_post_thumbnail()):?>
<div class="col-md-5 col-sm-5 col-xs-12">
	<?php echo get_the_post_thumbnail(get_the_ID(), '150x150', array('class' => 'img-responsive'));?>
</div>
<div class="col-md-7 col-sm-7 col-xs-12">
	<div class="blog-text">
	<?php the_excerpt(); ?>
	</div>
</div>
<?php
	else :
?>
<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="blog-text">
	<?php the_excerpt(); ?>
	</div>
</div>
<?php
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
</article>
</div>
</div>
<?php
get_footer();
