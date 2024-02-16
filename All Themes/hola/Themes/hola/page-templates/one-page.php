<?php
/**
 * Template Name: One Page
 *
 * Description: Use this page template to Create One Page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 */
/*
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hola
 */

get_header(); ?>
<div class="container-fluid">
	<div class="row">
		<article class="clearfix">
			<div class="blog-content-one-page">
				<div class="blog-text">
					<div id="fullpage">
						<?php 
						$args   =   array(
						    'post_type'     => 'page',
						    'orderby'   => 'date',
        					'order' => 'asc',
						    'meta_query'    => array(
						        array(
						            'key'       => 'mpt_include_slide',
						            'value'     => 'yes',
						            'compare'   => 'IN'
        							)
    							)
						);
						$the_query = new WP_Query( $args ); ?>
 						
						<?php if ( $the_query->have_posts() ) : ?>

							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

								<?php if( has_post_thumbnail() ) {
            							$bg_img = get_the_post_thumbnail_url();
        							}
        							else{$bg_img= get_template_directory_uri().'/images/1600X853.png';}

        						?>
								<div id="section<?php echo get_the_ID() ?>" class="section at-img-section" style="background-image: url('<?php echo $bg_img; ?>');"><?php the_content(); ?></div>
					        		
							<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
 
						<?php else : ?>
						    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</article>
	</div>
</div>
<?php
get_footer();