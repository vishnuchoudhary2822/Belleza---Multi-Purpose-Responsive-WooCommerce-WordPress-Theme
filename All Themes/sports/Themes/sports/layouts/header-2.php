<?php
/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * Header- Option 1.Bottom Navbar & Right_logo
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
                    if ( has_nav_menu( 'top-nav' ) ) {
                        wp_nav_menu( array( 
                            'theme_location' => 'top-nav' ,
                            'fallback_cb'    => '__return_false',
                            'menu_class'     => 'nav navbar-nav navbar-right'
                            )
                        );
                    }
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

             <div class="col-md-12 top_logo">
                    <div class="site-logo-left logo-top-fix">
                        <a href="<?php echo esc_url(home_url('/'));?>">
                        <?php if (ot_get_option('retina_logo') != ''){
                            $r_logo = "data-at2x=".ot_get_option('retina_logo');
                        }else { $r_logo = "";}?>
                        <?php if (ot_get_option('logo') != ''):?>
                        <img src="<?php echo esc_html(ot_get_option('logo'));?>" alt="<?php bloginfo('name');?>" class="img-responsive header-logo" <?php echo ($r_logo); ?> id="logo" />
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
            <div class="border-full"></div>
                <div class="col-md-12 bottom_menu">
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
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
            ?>
            </div>
        </div>
                
        </div>
        <!-- /.container-fluid -->
      </div>
    </nav>
</header>
<?php } ?>