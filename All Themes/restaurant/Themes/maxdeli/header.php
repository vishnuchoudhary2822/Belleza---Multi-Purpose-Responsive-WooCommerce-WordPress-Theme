<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Maxdeli
 */

?><!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<meta charset="<?php bloginfo('charset');?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head();?>

</head>    
<body <?php body_class(); ?> id="page-top">
<!-- Nav Section -->
<?php 
      $logo_position = ot_get_option( 'logo_position' );
      if($logo_position == "left_logo_right_navbar"){
        get_template_part( '/layouts/header', '1' );
      }
      else if($logo_position == "bottom_navbar_top_logo"){
        get_template_part( '/layouts/header', '2' );
      }
      else if($logo_position == "top_navbar_centered_logo"){
        get_template_part( '/layouts/header', '3' );
      }
      else if($logo_position == "centered_inline_logo"){
        get_template_part( '/layouts/header', '4' );
      }
?>

<?php 
    $menu_bar_search = ot_get_option( 'menu_bar_search' );
    if($menu_bar_search == "on"){
?>
<script type="text/javascript">
    jQuery(document).ready(function() 
    {
        jQuery("<ul id='menu-search' class='nav navbar-nav navbar-right'><li id='menu-item-a' class='menu-item menu-item-type-post_type menu-item-object-page menu-item-a'><a href='#'' data-toggle='modal' data-target='#myModal'><i class='fa fa-search' aria-hidden='true'></i></a></li></ul>").insertBefore(".menu-item-type-woocommerce-cart");
        jQuery('ul.gform_fields li').removeClass('gfield_error');
     });

</script>

<?php } ?>

<!-- intro box Section -->