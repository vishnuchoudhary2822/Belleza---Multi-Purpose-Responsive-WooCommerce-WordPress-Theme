<?php



/**



 * The header Option File for our theme



 *



 * This is the template that displays all of the <head> section and everything up until <div id="content">



 *



 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials



 *



 */ 



     if ( function_exists( 'ot_get_option' ) ) {



      /* get the array */



      $font_size = ot_get_option( 'font_size' ); 



      /* only echo values if they actually exist, else echo some default value */



      if ( !empty( $font_size[0] ) && $font_size[1] ) {



        $fs = $font_size[0].$font_size[1];



      } else {



        $fs ='14px';



      } 



      $body_font_color = ot_get_option( 'body_font_color' );



      $body_background_color = ot_get_option( 'body_background_color' );



      $top_bar_logo = ot_get_option( 'top_bar_logo' );



      $top_bar_logo_position = ot_get_option( 'top_bar_logo_position' );







      $header_top_padding = ot_get_option( 'header_top_padding' );







      $header_top_padding_height = (!empty($header_top_padding['height']))?$header_top_padding['height']:'0';



      $header_top_padding_width = (!empty($header_top_padding['width']))?$header_top_padding['width']:'0';



      $header_top_padding_unit = (!empty($header_top_padding['unit']))?$header_top_padding['unit']:'px';







      $htp = $header_top_padding_height.$header_top_padding_unit.' '.$header_top_padding_width.$header_top_padding_unit;







      $header_margin = ot_get_option( 'header_margin' );







      $header_margin_height = (!empty($header_margin['height']))?$header_margin['height']:'0';



      $header_margin_width = (!empty($header_margin['width']))?$header_margin['width']:'0';



      $header_margin_unit = (!empty($header_margin['unit']))?$header_margin['unit']:'px';







      $htm = $header_margin_height.$header_margin_unit.' '.$header_margin_width.$header_margin_unit;







      $logo_padding = ot_get_option( 'logo_padding' );







      $logo_padding_height = (!empty($logo_padding['height']))?$logo_padding['height']:'0';



      $logo_padding_width = (!empty($logo_padding['width']))?$logo_padding['width']:'0';



      $logo_padding_unit = (!empty($logo_padding['unit']))?$logo_padding['unit']:'px';







      $lp = $logo_padding_height.$logo_padding_unit.' '.$logo_padding_width.$logo_padding_unit;







      $logo_margin = ot_get_option( 'logo_margin' );







      $logo_margin_height = (!empty($logo_margin['height']))?$logo_margin['height']:'0';



      $logo_margin_width = (!empty($logo_margin['width']))?$logo_margin['width']:'0';



      $logo_margin_unit = (!empty($logo_margin['unit']))?$logo_margin['unit']:'px';







      $lm = $logo_margin_height.$logo_margin_unit.' '.$logo_margin_width.$logo_margin_unit;







      $top_bar_padding = ot_get_option( 'top_bar_padding' );







      $top_bar_padding_height = (!empty($top_bar_padding['height']))?$top_bar_padding['height']:'0';



      $top_bar_padding_width = (!empty($top_bar_padding['width']))?$top_bar_padding['width']:'0';



      $top_bar_padding_unit = (!empty($top_bar_padding['unit']))?$top_bar_padding['unit']:'px';







      $tbp = $top_bar_padding_height.$top_bar_padding_unit.' '. $top_bar_padding_width.$top_bar_padding_unit;







      $top_bar_margin = ot_get_option( 'top_bar_margin' );







      $top_bar_margin_height = (!empty($top_bar_margin['height']))?$top_bar_margin['height']:'0';



      $top_bar_margin_width = (!empty($top_bar_margin['width']))?$top_bar_margin['width']:'0';



      $top_bar_margin_unit = (!empty($top_bar_margin['unit']))?$top_bar_margin['unit']:'px';







      $tbm = $top_bar_margin_height.$top_bar_margin_unit.' '.$top_bar_margin_width.$top_bar_margin_unit;







      $top_bar_color = ot_get_option( 'top_bar_color' );







      $top_bar_font_size = ot_get_option( 'top_bar_font_size' );



      if ( !empty( $top_bar_font_size[0] ) && $top_bar_font_size[1] ) {



        $tfs = $top_bar_font_size[0].$top_bar_font_size[1];



      } else {



        $tfs ='12px';



      }







      $top_bar_border = ot_get_option( 'top_bar_border' );







      $top_bar_border_width = (!empty($top_bar_border['width']))?$top_bar_border['width']:'0';



      $top_bar_border_unit = (!empty($top_bar_border['unit']))?$top_bar_border['unit']:'px';



      $top_bar_border_style = (!empty($top_bar_border['style']))?$top_bar_border['style']:'';



      $top_bar_border_color = (!empty($top_bar_border['color']))?$top_bar_border['color']:'';







      $tbbt = $top_bar_border_width.$top_bar_border_unit.' '.$top_bar_border_style.' '.$top_bar_border_color;











      $top_bar_bottom_border = ot_get_option( 'top_bar_bottom_border' );







      $top_bar_bottom_border_width = (!empty($top_bar_bottom_border['width']))?$top_bar_bottom_border['width']:'0';



      $top_bar_bottom_border_unit = (!empty($top_bar_bottom_border['unit']))?$top_bar_bottom_border['unit']:'px';



      $top_bar_bottom_border_style = (!empty($top_bar_bottom_border['style']))?$top_bar_bottom_border['style']:'';



      $top_bar_bottom_border_color = (!empty($top_bar_bottom_border['color']))?$top_bar_bottom_border['color']:'';







      $tbbb = $top_bar_bottom_border_width.$top_bar_bottom_border_unit.' '.$top_bar_bottom_border_style.' '.$top_bar_bottom_border_color;







      $menu_bar_cart_icon = ot_get_option( 'menu_bar_cart_icon' );







      $menu_font_size = ot_get_option( 'menu_font_size' );



       if ( !empty( $menu_font_size[0] ) && $menu_font_size[1] ) {



        $mfs = $menu_font_size[0].$menu_font_size[1];



      } else {



        $mfs ='12px';



      }







      $menu_link_color = ot_get_option( 'menu_link_color' );



      $mlink = (!empty($menu_link_color['link']))?$menu_link_color['link']:'';



      $mlink_active = (!empty($menu_link_color['active']))?$menu_link_color['active']:'';



      $mlink_hover = (!empty($menu_link_color['hover']))?$menu_link_color['hover']:'';







      $menu_link_background_color = ot_get_option( 'menu_link_background_color' );



      $menu_dropdown_link_color = ot_get_option( 'menu_dropdown_link_color' );



      







      $custom_css = ot_get_option( 'custom_css' );



      



      $custom_js = ot_get_option( 'custom_js' );







      $sticky_header_font_color = ot_get_option( 'sticky_header_font_color' );



      $smlink = (!empty($sticky_header_font_color['link']))?$sticky_header_font_color['link']:'';



      $smlink_active = (!empty($sticky_header_font_color['active']))?$sticky_header_font_color['active']:'';



      $smlink_hover = (!empty($sticky_header_font_color['hover']))?$sticky_header_font_color['hover']:'';











      $sticky_header_dropdown_background_color = ot_get_option( 'sticky_header_dropdown_background_color' );



      $sticky_header_dropdown_link_color = ot_get_option( 'sticky_header_dropdown_link_color' );







      $sticky_header_on = ot_get_option('sticky_header_on');



      if($sticky_header_on == "on"){







         $afx = "fixed";



      }



      else{



        $afx = "initial";



      }







      $body_font_family = ot_get_option('body_font_family');



      if(is_array($body_font_family)){



        foreach($body_font_family as $ffkey => $ffvalue){



          $body_ff =  $ffvalue['family'];  



        }



      }



  



      $sticky_topbar_on = ot_get_option('sticky_top_bar');







      //echo $sticky_topbar_on;







      $mm_link_border = ot_get_option( 'mm_link_border' );







      $mm_link_border_width = (!empty($mm_link_border['width']))?$mm_link_border['width']:'0';



      $mm_link_border_unit = (!empty($mm_link_border['unit']))?$mm_link_border['unit']:'px';



      $mm_link_border_style = (!empty($mm_link_border['style']))?$mm_link_border['style']:'';



      $mm_link_border_color = (!empty($mm_link_border['color']))?$mm_link_border['color']:'';







      $mmborder = $mm_link_border_width.$mm_link_border_unit.' '.$mm_link_border_style.' '.$mm_link_border_color;







      $mm_link_color = ot_get_option( 'mm_link_color' );



      $mmlinkcolor_link = (!empty($mm_link_color['link']))?$mm_link_color['link']:'';



      $mmlinkcolor_active = (!empty($mm_link_color['active']))?$mm_link_color['active']:'';



      $mmlinkcolor_hover = (!empty($mm_link_color['hover']))?$mm_link_color['hover']:'';







      $mm_font_size = ot_get_option( 'mm_font_size' );



      if ( !empty( $mm_font_size[0] ) && $mm_font_size[1] ) {



        $mm_fontsize = $mm_font_size[0].$mm_font_size[1];



      } else {



        $mm_fontsize ='12px';



      }







      $fb_text_color = ot_get_option( 'footer_bottom_text_color' );



      $f_text_color = ot_get_option( 'footer_text_color' );







      $f_link_color = ot_get_option( 'footer_link_color' );



      $f_link_color_link = (!empty($f_link_color['link']))?$f_link_color['link']:'';



      $f_link_color_active = (!empty($f_link_color['active']))?$f_link_color['active']:'';



      $f_link_color_hover = (!empty($f_link_color['hover']))?$f_link_color['hover']:'';



      $f_link_color_visited = (!empty($f_link_color['visited']))?$f_link_color['visited']:'';



      $f_link_color_focus = (!empty($f_link_color['focus']))?$f_link_color['focus']:'';







      $footer_font_size = ot_get_option( 'footer_font_size' );



      if ( !empty( $footer_font_size[0] ) && $footer_font_size[1] ) {



        $footer_fs = $footer_font_size[0].$footer_font_size[1];



      } else {



        $footer_fs ='14px';



      }







      $fb_link_color = ot_get_option( 'fb_link_color' );



      $fb_link_color_link = (!empty($fb_link_color['link'])) ? $fb_link_color['link'] : '';



      $fb_link_color_active = (!empty($fb_link_color['active'])) ? $fb_link_color['active'] : $fb_link_color_link;



      $fb_link_color_hover = (!empty($fb_link_color['hover'])) ? $fb_link_color['hover'] : $fb_link_color_link;



      $fb_link_color_visited = (!empty($fb_link_color['visited'])) ? $fb_link_color['visited'] : $fb_link_color_link;



      $fb_link_color_focus = (!empty($fb_link_color['focus'])) ? $fb_link_color['focus'] : $fb_link_color_link;











     // $typ_h1 = ot_get_option( 'typ_h1' );



      //print_r($typ_h1);











    }



?>







<?php if($sticky_topbar_on == "on"){?>







<script type="text/javascript">



jQuery(document).ready(function($){



var toppx = jQuery("#topbar").outerHeight() +"px";



jQuery("#mainNav").css("top" , toppx);



}); // End of use strict



</script>







<?php } ?>







<?php $typ_h1 = ot_get_option( 'typ_h1' ); 



if(!empty($fftyp_h1)){



 if (is_array($typ_h1) || is_object($typ_h1)){



$fftyp_h1 = $typ_h1['font-family'];



}







  ?> <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=<?php echo($fftyp_h1); ?>"><?php 



}











$typ_h2 = ot_get_option( 'typ_h2' ); 



if(!empty($fftyp_h2)){



 if (is_array($fftyp_h2) || is_object($fftyp_h2)){



$fftyp_h2 = $typ_h2['font-family'];



}







  ?> <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=<?php echo($fftyp_h2); ?>"><?php 



}







$typ_h3 = ot_get_option( 'typ_h3' );



if(!empty($fftyp_h3)){ 



if (is_array($fftyp_h3) || is_object($fftyp_h3)){



$fftyp_h3 = $typ_h3['font-family'];



}







  ?> <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=<?php echo($fftyp_h3); ?>"><?php 



}











$typ_h4 = ot_get_option( 'typ_h4' ); 



if(!empty($fftyp_h4)){



if (is_array($typ_h4) || is_object($typ_h4)){



$fftyp_h4 = $typ_h4['font-family'];



}







  ?> <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=<?php echo( $fftyp_h4); ?>"><?php 



}







$breadcrumbs = ot_get_option( 'breadcrumbs' );



if(!empty($ffbreadcrumbs)){



if (is_array($ffbreadcrumbs) || is_object($ffbreadcrumbs)){



$ffbreadcrumbs = $breadcrumbs['font-family'];



}







  ?> <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=<?php echo( $ffbreadcrumbs); ?>"><?php 



}







$blog_entry_title = ot_get_option( 'blog_entry_title' );



if(!empty($ffblog_entry_title)){



if (is_array($ffblog_entry_title) || is_object($ffblog_entry_title)){



$ffblog_entry_title = $blog_entry_title['font-family'];



}







  ?> <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=<?php echo( $ffblog_entry_title); ?>"><?php 



}



















$blog_post_title = ot_get_option( 'blog_post_title' );



if(!empty($ffblog_post_title)){



if (is_array($ffblog_post_title) || is_object($ffblog_post_title)){



$ffblog_post_title = $blog_post_title['font-family'];



}







  ?> <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=<?php echo ($ffblog_post_title); ?>"><?php 



}



 











$sidebar_widget_heading = ot_get_option( 'sidebar_widget_heading' );



if(!empty($ffsidebar_widget_heading)){



$ffsidebar_widget_heading = (!empty($sidebar_widget_heading['font-family']))?$sidebar_widget_heading['font-family']:'';







  ?> <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=<?php echo ($ffsidebar_widget_heading); ?>"><?php 



}







?>







<?php if(!empty($body_ff)){ ?>



<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=<?php echo ($body_ff); ?>">



<?php } ?>







<style type="text/css">



    body{   



        font-size:<?php echo( $fs ) ?>;



        color:<?php echo($body_font_color) ?>;



        background-color: <?php echo($body_background_color);  ?>;



        <?php $body_ff = str_replace( '+', ' ', $body_ff);  ?>



        font-family: '<?php esc_html($body_ff); ?>', sans-serif;



    }



   h1{



      <?php 



        if (is_array($typ_h1) || is_object($typ_h1)){



            foreach($typ_h1 as $h1key => $h1value){



              if(!empty($typ_h1[$h1key])) {



                if($h1key=='font-color'){ 



                    echo ( 'color'. ':'.$h1value .';'); 



                }



                if($h1key=='font-family'){



                  echo ('font-family'. ':'.str_replace( '+', ' ',$h1value) . ';');



                }



                else{



                echo  ($h1key. ':'.$h1value . ";"); 



                }



              }



            }



            }



        ?>



    }



    h2{



      <?php 



         if (is_array($typ_h2) || is_object($typ_h2)){



            foreach($typ_h2 as $h2key => $h2value){



              if(!empty($typ_h2[$h2key])) {



                if($h2key=='font-color'){ 



                    echo  ('color'. ':'.$h2value .';'); 



                }



                if($h2key=='font-family'){



                  echo ('font-family'. ':'.str_replace( '+', ' ',$h2value) . ';');



                }



                else{



                echo  ($h2key. ':'.$h2value . ";"); 



                }



              }



            }}



        ?>



    }



    h3{



      <?php 



         if (is_array($typ_h3) || is_object($typ_h3)){



            foreach($typ_h3 as $h3key => $h3value){



              if(!empty($typ_h3[$h3key])) {



                if($h3key=='font-color'){ 



                    echo  ('color'. ':'.$h3value .';'); 



                }



                if($h3key=='font-family'){



                  echo ('font-family'. ':'.str_replace( '+', ' ',$h3value) . ';');



                }



                else{



                echo  ($h3key. ':'.$h3value . ";"); 



                }



              }



            }}



        ?>



    }



    h4{



      <?php 



        if (is_array($typ_h4) || is_object($typ_h4)){



            foreach($typ_h4 as $h4key => $h4value){



              if(!empty($typ_h4[$h4key])) {



                if($h4key=='font-color'){ 



                    echo ('color'. ':'.$h4value .';'); 



                }



                if($h3key=='font-family'){



                  echo ('font-family'. ':'.str_replace( '+', ' ',$h3value) . ';');



                }



                else{



                echo  ($h4key. ':'.$h4value . ";"); 



                }



              }



            }}



        ?>



    }



    .section-title h2{



      <?php 



        if (is_array($breadcrumbs) || is_object($breadcrumbs)){



            foreach($breadcrumbs as $brdkey => $brdvalue){



              if(!empty($breadcrumbs[$brdkey])) {



                if($brdkey=='font-color'){ 



                    echo ( 'color'. ':'.$brdvalue .';'); 



                }



                if($h3key=='font-family'){



                  echo ('font-family'. ':'.str_replace( '+', ' ',$h3value) . ';');



                }



                else{



                echo  ($brdkey. ':'.$brdvalue . ";"); 



                }



              }



            }}



        ?>



    }



    .page_sidebar .widget-title{







      <?php 



        if (is_array($sidebar_widget_heading) || is_object($sidebar_widget_heading)){



            foreach($sidebar_widget_heading as $swhkey => $swhvalue){



              if(!empty($sidebar_widget_heading[$swhkey])) {



                if($swhkey=='font-color'){ 



                    echo  ('color'. ':'.$swhvalue .';'); 



                }


                
                if($h3key=='font-family'){



                  echo ('font-family'. ':'.str_replace( '+', ' ',$h3value) . ';');



                }



                else{



                echo  ($swhkey. ':'.$swhvalue . ";"); 



                }



              }}



            }



        ?>







    }



    .blog-title h3 a{



    <?php 



       if (is_array($blog_entry_title) || is_object($blog_entry_title)){



            foreach($blog_entry_title as $betkey => $betvalue){



              if(!empty($blog_entry_title[$betkey])) {



                if($betkey=='font-color'){ 



                    echo ( 'color'. ':'.$betvalue .';'); 



                }



                if($h3key=='font-family'){



                  echo ('font-family'. ':'.str_replace( '+', ' ',$h3value) . ';');



                }



                else{



                echo  ($betkey. ':'.$betvalue . ";"); 



                }



              }}



            }



        ?>







    }



    h2.single-blog-title{



       <?php 



       if (is_array($blog_post_title) || is_object($blog_post_title)){



            foreach($blog_post_title as $bptkey => $bptvalue){



              if(!empty($blog_post_title[$bptkey])) {



                if($bptkey=='font-color'){ 



                    echo  ('color'. ':'.$bptvalue .';'); 



                }



                else{



                echo  ($bptkey. ':'.$bptvalue . ";"); 



                }



              }



            }}



        ?>







    }







    .top-bar{



      <?php 



        $top_bar_background = ot_get_option( 'top_bar_background' );



        if (is_array($top_bar_background) || is_object($top_bar_background)){



            foreach($top_bar_background as $tkey => $tvalue){



                if($tkey=='background-image'){ 



                    echo  ($tkey. ':url('.$tvalue .");"); 



                }



                else{



                echo  ($tkey. ':'.$tvalue . ";"); 



                }



            }}



        ?>



        padding: <?php echo ($tbp); ?>; 



        margin: <?php echo ($tbm); ?>;



        color: <?php echo ($top_bar_color); ?>;



        font-size: <?php echo ($tfs); ?> ;



        border-top:<?php echo ($tbbt); ?>;



        border-bottom: <?php echo ($tbbb); ?>;







        



    }







    <?php if($sticky_topbar_on == "on"){?>







    div#topbar.affix {



      width: 100%;



      z-index: 1055;



      position: fixed;



    }



    .affix-top {



      top: 0px !important;



    }



    



    <?php } ?>







    <?php if($sticky_header_on == "on"){?>



    .admin-bar nav#mainNav.affix {



      margin-top: auto;



    }



    <?php } ?>











    .main-navigation



    {



      <?php 



        $header_image = ot_get_option( 'header_image' );



        if (is_array($header_image) || is_object($header_image)){



            foreach($header_image as $key => $value){



              if(!empty($header_image[$key])) {



                if($key=='background-image'){ 



                    echo ( $key. ':url('.$value .");"); 



                }



                else{



                echo  ($key. ':'.$value . ";"); 



                }



              }



            }}



        ?>



        padding:<?php echo ($htp);?> ;



        margin:<?php echo ($htm);?> ;







    }











    .main-navigation.affix



    {



       <?php 



        $sticky_header_background_color = ot_get_option( 'sticky_header_background_color' );



        if (is_array($sticky_header_background_color) || is_object($sticky_header_background_color)){



            foreach($sticky_header_background_color as $key => $value){



              if(!empty($sticky_header_background_color[$key])) {



                if($key=='background-image'){ 



                    echo  ($key. ':url('.$value .");"); 



                }



                else{



                echo  ($key. ':'.$value . ";"); 



                }



              }            



            }



            if(empty($key['background-image'])){



                echo ("background-image :none;");



            }}



        ?>



    }



    .header-logo{



      padding:<?php echo( $lp ) ?> ;



      margin:<?php echo( $lm ); ?> ;



    }



    .top_logo .header-logo,



    .bottom-logo .header-logo {



      margin: 0 auto;



    }











    .left-logo .top_left{



      margin-top:0px;



    }



    .left-logo ul{



      padding-top: 0px;



    }



    .right_menu, .left_menu



    {



      padding:1%; 



    }



    .right_menu div#bs-example-navbar-collapse-1 {



      float: right;



    }



    .left_menu div#bs-example-navbar-collapse-1 {



      float: left;



    }



    .site-logo-right .header-logo {



      float: right;



    }



    .centered_content {



      text-align: center;



    }







    <?php if($menu_bar_cart_icon == "off"){ ?>







    li.menu-item-type-woocommerce-cart{



      display: none; 



    }



    ul#menu-search a i{



      border-right: 0px; 



    }



    <?php } ?>







    #bs-example-navbar-collapse-1{



      



      font-size: <?php echo ($mfs); ?>;







      <?php 



        $menu_background = ot_get_option( 'menu_background' );



        if (is_array($menu_background) || is_object($menu_background)){



            foreach($menu_background as $mkey => $mvalue){



              if(!empty($menu_background[$mkey])) {



                if($mkey=='background-image'){ 



                    echo  ($mkey. ':url('.$mvalue .");"); 



                }



                else{



                echo  ($mkey. ':'.$mvalue . ";"); 



                }



            }



          }



        }



        ?>



    }



    .navbar-default .nav > li.active > a {



      color: <?php echo ($mlink_active); ?> ;



    }



    .navbar-default .nav > li > a{



      color: <?php echo ($mlink); ?> !important;



    }



    .main-navigation li a:hover{



      color: <?php echo ($mlink_hover); ?> !important;



    }



    .main-navigation li ul li a:hover, 



    .dropdown-menu>.active>a, .dropdown-menu>.active>a:focus, .dropdown-menu>.active>a:hover



    {



      background-color: <?php echo ($menu_link_background_color);?> ;



      color:<?php echo ($menu_dropdown_link_color);?> !important;



    }







    .navbar-default.affix .nav > li.active > a{



      color: <?php echo ($smlink_active); ?> ;



    }







    .navbar-default.affix .nav > li > a{



      color: <?php echo ($smlink); ?> !important;



    }







    .logo-top-scroll h3 {



      color: <?php echo ($smlink); ?>;



    }







    .main-navigation.affix li a:hover{



      color: <?php echo ($smlink_hover); ?> !important;



    }







    .main-navigation.affix li ul li a:hover



    {



      background-color: <?php echo ($sticky_header_dropdown_background_color);?> ;



      color:<?php echo ($sticky_header_dropdown_link_color);?> !important;



    }







    .main-navigation.affix {



      position: <?php echo ($afx); ?> !important;



    }



    .logo-top-scroll {



      display: none;



    }



    .affix .logo-top-fix {



      display: none;



    }



    .affix .logo-top-scroll {



      display: block;



    }



    #footer



    {



      <?php 



        $footer_background = ot_get_option( 'footer_background' );



        if (is_array($footer_background) || is_object($footer_background)){



            foreach($footer_background as $fkey => $fvalue){



              if(!empty($footer_background[$fkey])) {



                if($fkey=='background-image'){ 



                    echo  ($fkey. ':url('.$fvalue .");"); 



                }



                else{



                echo  ($fkey. ':'.$fvalue . ";"); 



                }



              }            



            }



          }



        ?>



      color:<?php echo ($f_text_color); ?>;



      



    }



    .footer-content {



      font-size: <?php echo($footer_fs) ?>;



    }



    



    #footer a, #footer li a, #footer li {



      color: <?php echo($f_link_color_link)?>;



    }



    #footer li a:visited , #footer a:visited{



      color: <?php echo($f_link_color_visited); ?>;



    }



    #footer li a:focus , #footer a:focus{



      color: <?php echo($f_link_color_focus); ?>;



    }



    #footer li a:hover , #footer a:hover{



      color: <?php echo($f_link_color_hover); ?>;



    }







    #footer .copyright



    {



      <?php 



        $footer_bottom_background = ot_get_option( 'footer_bottom_background' );



        if (is_array($footer_bottom_background) || is_object($footer_bottom_background)){



            foreach($footer_bottom_background as $fbkey => $fbvalue){



              if(!empty($footer_bottom_background[$fbkey])) {



                if($fbkey=='background-image'){ 



                    echo  ($fbkey. ':url('.$fbvalue .");"); 



                }



                else{



                echo  ($fbkey. ':'.$fbvalue . ";"); 



                }



              }            



            }



          }



        ?>



      color:<?php echo ($fb_text_color); ?>; 



    }



    #footer .copyright a{



      color: <?php echo ($fb_link_color_link); ?>;



    }



    #footer .copyright a:visited{



      color: <?php echo ($fb_link_color_visited); ?>;



    }



    #footer .copyright a:focus{



      color: <?php echo ($fb_link_color_focus); ?>;



    }



    #footer .copyright a:hover{



      color: <?php echo ($fb_link_color_hover); ?>;



    }







    .header-four-mobile-logo{



      display: none;







    }







@media only screen and (max-width: 1024px){







  .header_menu #bs-example-navbar-collapse-1.collapse.in{



    <?php 



        $mm_bg_color = ot_get_option( 'mm_bg_color' );



        if (is_array($mm_bg_color) || is_object($mm_bg_color)){



            foreach($mm_bg_color as $key => $value){



              if(!empty($mm_bg_color[$key])) {



                if($key=='background-image'){ 



                    echo  ($key. ':url('.$value .");"); 



                }



                else{



                echo  ($key. ':'.$value . ";"); 



                }



              }            



            }



          }



        ?>



      font-size: <?php echo ($mm_fontsize);?>;



  }



  .main-navigation .header_menu  li a, 



  .main-navigation .header_menu  li:hover a{



    border-bottom: <?php echo ($mmborder); ?>



  }



  .header_menu #bs-example-navbar-collapse-1.collapse.in .navbar-nav a



  {



    color:<?php echo ($mmlinkcolor_link); ?> !important;







  }



  .ochow-menu-item-toggle{



    color:<?php echo ($mmlinkcolor_link); ?> !important;



  }



  li#menu-item-logo {



    display: none;



  }



  .header-four-mobile-logo{



    display: block;



    float: left;



  }



  



.navbar-header {



    margin: 0 !important;



}







}



@media only screen and (max-width: 992px){







}



@media only screen and (max-width: 768px) {



    .right_menu, .left_menu



    {



      padding:0%; 



    }



  }















</style>







<style type="text/css"><?php echo ($custom_css); ?></style>



<script type="text/javascript"><?php echo ($custom_js); ?></script>