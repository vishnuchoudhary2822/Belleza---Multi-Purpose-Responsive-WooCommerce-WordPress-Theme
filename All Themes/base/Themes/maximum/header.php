<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Maximum
 */

?><!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<meta charset="<?php bloginfo('charset');?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/animate.css">
<script src="<?php echo get_template_directory_uri();?>/js/wow.min.js"></script>


<script>
new WOW().init();
</script>
<?php wp_head();?>

</head>    
<body <?php body_class(); ?> id="page-top">
<!-- Nav Section -->

    <?php
        $select_custom_header = ot_get_option( 'select_custom_header' ); 
        $custom_header = ot_get_option( 'custom_header' );
        if($custom_header == "on"){
    
    if(!empty($select_custom_header)){
    ?>
    <header class="page-header" id="page_header">
    <div class="header-builder-content clr container entry">
        <?php 
            $id = $select_custom_header; // add the ID of the page where the zero is
            $p = get_page($id);
            $t = $p->post_title;
            echo '<style>'.get_post_meta( $id, '_wpb_shortcodes_custom_css', true ).'</style>';
            echo do_shortcode( get_post_field( 'post_content', $id ) );
        ?>
    </div>
    </header>
    <?php } } ?>
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
<script>
   jQuery( document ).ready(function() {
    jQuery("body").addClass("overlay-header");
  });
</script>
<?php }$values = get_post_custom( $post->ID );
$style = isset( $values['mpt_header_style'] ) ? esc_attr( $values['mpt_header_style'][0] ) : 'Default';
$overlay = isset( $values['mpt_overlay_header'] ) ? esc_attr( $values['mpt_overlay_header'][0] ) : 'Default';


if($overlay == "Enable" ){ ?>

<style type="text/css">  
.main-navigation{
    position: absolute !important;
    top: auto !important;
    background: transparent;
}

</style>
<?php }

if($style == "Dark" &&  $overlay == "Enable"){
?>
<style type="text/css">  
.navbar-default .nav > li > a {
    color: #000 !important;
}
</style>
<?php } 

if($style == "Light" &&  $overlay == "Enable"){
?>

<style type="text/css">  
.navbar-default .nav > li > a {
    color: #fff !important;
}
</style>
<?php } ?>
<!-- intro box Section -->