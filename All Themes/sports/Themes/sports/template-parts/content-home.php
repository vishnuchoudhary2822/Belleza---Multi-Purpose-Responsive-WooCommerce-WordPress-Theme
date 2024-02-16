<?php
/**
 *
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Maximum
 */

?>


<div class="blog-content <?php echo (is_sticky())?'is-sticky':'';?>">
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
