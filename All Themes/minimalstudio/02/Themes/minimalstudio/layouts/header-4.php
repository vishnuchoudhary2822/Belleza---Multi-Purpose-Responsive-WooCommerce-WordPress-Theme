<?php
/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * Header- Option 4.Bottom Navbar & Right_logo
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fashion
 */
?>
<?php
$top_bar_enable_disable = ot_get_option( 'top_bar_enable_disable' );
if($top_bar_enable_disable == "on"){
?>  
    <div class="top-bar left-logo" id="topbar">
        <div class="container">
            <?php $top_bar_style = ot_get_option( 'top_bar_style' );
            if($top_bar_style == "left_content_right_menu"){
                ?>
                 <div class="col-md-6 topleft">
                    <?php 
                        $top_bar_right_content = ot_get_option( 'top_bar_right_content' ); 
                        echo($top_bar_right_content); 
                    ?> 
                </div>
                <div class="col-md-6 topright">
                    <?php 
                        wp_nav_menu( array( 
                            'theme_location' => 'top-nav' ,
                            'fallback_cb'    => '__return_false',
                            'menu_class'     => 'nav navbar-nav navbar-right'
                            )
                        );
                    ?>
                </div>
            <?php
            }
            
            else if($top_bar_style =="left_menu_right_content"){
            ?>
            <div class="col-md-6 topright">
                <?php 
                    wp_nav_menu( array( 
                        'theme_location' => 'top-nav' ,
                        'fallback_cb'    => '__return_false',
                        'menu_class'     => 'nav navbar-nav navbar-left'
                        )
                    );
                ?>
            </div>
            <div class="col-md-6 text-right">
                <?php 
                    $top_bar_right_content = ot_get_option( 'top_bar_right_content' ); 
                    echo($top_bar_right_content);
                ?>   
            </div>
        <?php  } ?>
        </div>
    </div>
<?php }?>
<?php $header_enable = ot_get_option( 'header_enable' );
if($header_enable == "on"){ ?>
<header>
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top main-navigation"><div class="header_menu">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->            
             <div class="navbar-header">
             <!-- Logo Here -->
             <div class="row">

             
            <div class="col-md-12 top-menu">
            <div class="header-four-mobile-logo">
            <div class="site-logo-left logo-top-fix">
                        <a href="<?php echo esc_url(home_url('/'));?>">
                        <?php if (ot_get_option('retina_logo') != ''){
                            $r_logo = "data-at2x=".ot_get_option('retina_logo');
                        }else { $r_logo = "";}?>
                        <?php if (ot_get_option('logo') != ''):?>
                        <img src="<?php echo esc_html(ot_get_option('logo'));?>" alt="<?php bloginfo('name');?>" class="img-responsive header-logo" <?php echo($r_logo); ?> id="logo" />
                        <?php else: ?>
                        <h3><?php bloginfo('name');?></h3>
                        <?php endif;?>
                       </a>
                    </div>

                    <div class="site-logo-left logo-top-scroll">
                        <a href="<?php echo esc_url(home_url('/'));?>">
                        <?php if (ot_get_option('sticky_header_logo') != ''):?>
                        <img src="<?php echo esc_html(ot_get_option('sticky_header_logo'));?>" alt="<?php bloginfo('name');?>" class="img-responsive header-logo"/>
                        <?php else: ?>
                        <h3><?php bloginfo('name');?></h3>
                        <?php endif;?>
                       </a>
                    </div>
                    </div>


             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>

            <!-- Collect the nav links, forms, and other content for toggling -->
           
            <?php 
            wp_nav_menu( array( 
                'theme_location'    => 'menu-1',
                'depth'             => 4,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-center',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
                $logo = '';

                 $logo .=  "<div class='center-logo'><div class='site-logo-left logo-top-fix'>";
                 $logo .=  "<a href=" . esc_url(home_url('/')) . " class='logo-img-a'>";
                 $logo .=  "<img src=". esc_html(ot_get_option('logo')) ." alt='logo-img' />";
                 $logo .= "</a></div>";
                 $logo .= "<div class='site-logo-left logo-top-scroll'>";
                 $logo .= "<a href=" . esc_url(home_url('/')) . "class='logo-img-a'>";
                 $logo .=  "<img src=". esc_html(ot_get_option('sticky_header_logo')) ." alt='logo-img' />";
                 $logo .= "</a></div></div>";

                 ?>

            </div>
        </div>
                       
        </div>
        <!-- /.container-fluid -->
      </div>
    </nav>
</header>
<script type="text/javascript">
    jQuery(document).ready(function() 
    {
        var len = jQuery('ul#menu-menu > li').length;

        var len_center = Math.round(len/2);

        var logo = "<?php echo($logo); ?>";

        jQuery("ul#menu-menu > li:nth-child(" + len_center + ")").after("<li id='menu-item-logo' class='menu-item menu-item-logo'>"+ logo+ "</li>");


        //alert(len_center);


    });
</script>
<style type="text/css">
    
    ul#menu-search,
    li.menu-item-type-woocommerce-cart{
        display:none;
    }
    .navbar-center > li {
    float: none;
}
</style>
<?php } ?>