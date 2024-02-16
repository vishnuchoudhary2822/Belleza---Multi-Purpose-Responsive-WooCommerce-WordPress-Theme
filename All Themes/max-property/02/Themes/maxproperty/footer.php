<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fashion
 */

?>

    <!-- Footer Section -->
    <footer class="footer" id="footer"><!-- Section id-->
        <div class="top-border clear"></div>

        <?php
            $footer_area = ot_get_option( 'footer_area' );
            if($footer_area == "on"){
        ?>
        <div class="footer-content">
        <div class="footer_top container">
            <div class="">
                <div id="footer-sidebar" class="secondary row-fluid entry-content">
                   <div id="footer-column1" class="col-sm-3">
                        <?php
                        	if(is_active_sidebar('shop-footer-1')){
                        	dynamic_sidebar('shop-footer-1');
                        	}
                        ?>
                    </div>
                    <div id="footer-column2" class="col-sm-3">
                        <?php
                       		if(is_active_sidebar('shop-footer-2')){
                        	dynamic_sidebar('shop-footer-2');
                        	}
                        ?>
                    </div>
                    <div id="footer-column3" class="col-sm-3">
                        <?php
                            if(is_active_sidebar('shop-footer-3')){
                            dynamic_sidebar('shop-footer-3');
                        }
                     ?>
                    </div>
                    <div id="footer-column3" class="col-sm-3">
                        <?php
                            if(is_active_sidebar('shop-footer-4')){
                            dynamic_sidebar('shop-footer-4');
                        }
                     ?>
                    </div>

               	</div>
            </div> 
     
        </div>
        </div>

        <?php } ?>
        <?php
            $bottom_footer_area = ot_get_option( 'bottom_footer_area' );
            if($bottom_footer_area == "on"){
        ?>  
        <div class="copyright clearfix">
            <div class="container">
            	<div class="row">
            <?php 
                $copyright_text = ot_get_option( 'copyright_text' ); 
                echo($copyright_text); 
            /* <div class="col-sm-6 footerbottom_link">
            	<ul class="list-inline">
            		<li><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/visa.png" alt="visa"></li>
            		<li><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/vindicia.png" alt="vindicia"></li>
            		<li><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/paypal.png" alt="paypal"></li>
            		<li><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/discover.png" alt="discover"></li>
            	</ul>
            </div> */?>
            </div>
            </div>
        </div>
        <?php } ?>
    </footer>
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">SEARCH </h4>
        </div>
        <div class="modal-body">
        <p>Use the search box to find the product you are looking for.</p>
          <?php get_search_form(); ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      </div>
      </div>

	<?php wp_footer(); ?>	
    
  </body>
</html>