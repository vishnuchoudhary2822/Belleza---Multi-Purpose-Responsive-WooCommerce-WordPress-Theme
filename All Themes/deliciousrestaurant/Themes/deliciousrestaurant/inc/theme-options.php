<?php
/**
 * Initialize the custom theme options.
 */
add_action( 'init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  
  /* OptionTree is not loaded yet, or this is not an admin request */
  if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
    return false;
    
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( ot_settings_id(), array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'sidebar'       => ''
    ),
    'sections'        => array( 
      array(
        'id'          => 'general',
        'title'       => __( 'General', 'deliciousrestaurant' )
      ),
      array(
        'id'          => 'typography',
        'title'       => __( 'Typography', 'deliciousrestaurant' )
      ),
      array(
        'id'          => 'logo',
        'title'       => __( 'Logo', 'deliciousrestaurant' )
      ),
      array(
        'id'          => 'top_bar',
        'title'       => __( 'Top Bar', 'deliciousrestaurant' )
      ),
      array(
        'id'          => 'header',
        'title'       => __( 'Header', 'deliciousrestaurant' )
      ),
      array(
        'id'          => 'sticky_header',
        'title'       => __( 'Sticky Header', 'deliciousrestaurant' )
      ),
      array(
        'id'          => 'menu_bar',
        'title'       => __( 'Menu', 'deliciousrestaurant' )
      ),
      array(
        'id'          => 'sticky_menu',
        'title'       => __( 'Sticky Menu', 'deliciousrestaurant' )
      ),
      array(
        'id'          => 'mobile_menu',
        'title'       => __( 'Mobile Menu', 'deliciousrestaurant' )
      ),
      array(
        'id'          => 'custom_page_builder',
        'title'       => __( 'Custom Page Builder', 'deliciousrestaurant' )
      ),
      array(
        'id'          => 'custom_settings',
        'title'       => __( 'Custom Settings', 'deliciousrestaurant' )
      ),
      array(
        'id'          => 'footer',
        'title'       => __( 'Footer Area', 'deliciousrestaurant' )
      ),
      array(
        'id'          => 'footer_bottom',
        'title'       => __( 'Copyright Area', 'deliciousrestaurant' )
      )
    ),
    'settings'        => array( 
      array(
        'id'          => 'body_font_family',
        'label'       => __( 'Body Font Family', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'google-fonts',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'font_size',
        'label'       => __( 'Body Font Size', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'measurement',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'body_font_color',
        'label'       => __( 'Body Font Color', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'body_background_color',
        'label'       => __( 'Body Background Color', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'typ_h1',
        'label'       => __( 'H1', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'typ_h2',
        'label'       => __( 'H2', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'typ_h3',
        'label'       => __( 'H3', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'typ_h4',
        'label'       => __( 'H4', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'breadcrumbs',
        'label'       => __( 'Breadcrumbs', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'sidebar_widget_heading',
        'label'       => __( 'Sidebar Widget Heading', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'blog_entry_title',
        'label'       => __( 'Blog Entry Title', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'blog_post_title',
        'label'       => __( 'Blog Post Title', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'logo',
        'label'       => __( 'Logo', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'logo',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'retina_logo',
        'label'       => __( 'Retina Logo', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'logo',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'logo_padding',
        'label'       => __( 'Logo Padding', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '10',
        'type'        => 'dimension',
        'section'     => 'logo',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'logo_margin',
        'label'       => __( 'Logo Margin', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'dimension',
        'section'     => 'logo',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'top_bar_enable_disable',
        'label'       => __( 'Top Bar Enable / Disable', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'top_bar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'sticky_top_bar',
        'label'       => __( 'Sticky Top Bar', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'top_bar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'top_bar_style',
        'label'       => __( 'Top Bar Style', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'top_bar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'top_bar_enable_disable:is(on)',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'left_content_right_menu',
            'label'       => __( 'Left Content & Right Menu', 'deliciousrestaurant' ),
            'src'         => ''
          ),
          array(
            'value'       => 'left_menu_right_content',
            'label'       => __( 'Left Menu & Right Content', 'deliciousrestaurant' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'top_bar_right_content',
        'label'       => __( 'Top Bar Content', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'top_bar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'top_bar_enable_disable:is(on)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'top_bar_background',
        'label'       => __( 'Top Bar Background Color', 'deliciousrestaurant' ),
        'desc'        => __( 'Top Bar Background Color', 'deliciousrestaurant' ),
        'std'         => '',
        'type'        => 'background',
        'section'     => 'top_bar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'top_bar_enable_disable:is(on)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'top_bar_color',
        'label'       => __( 'Top Bar Color', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'top_bar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'top_bar_enable_disable:is(on)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'top_bar_font_size',
        'label'       => __( 'Top Bar Font Size', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'measurement',
        'section'     => 'top_bar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'top_bar_enable_disable:is(on)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'top_bar_border',
        'label'       => __( 'Top Bar - Top Border', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'border',
        'section'     => 'top_bar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'top_bar_enable_disable:is(on)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'top_bar_bottom_border',
        'label'       => __( 'Top Bar -  Bottom Border', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'border',
        'section'     => 'top_bar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'top_bar_enable_disable:is(on)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'top_bar_padding',
        'label'       => __( 'Top Bar Padding', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'dimension',
        'section'     => 'top_bar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'top_bar_enable_disable:is(on)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'top_bar_margin',
        'label'       => __( 'Top Bar Margin', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'dimension',
        'section'     => 'top_bar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'top_bar_enable_disable:is(on)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'header_enable',
        'label'       => __( 'Header Enable / Disable', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'logo_position',
        'label'       => __( 'Header Style', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'header_enable:is(on)',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'left_logo_right_navbar',
            'label'       => __( 'Left Logo & Right Navbar', 'deliciousrestaurant' ),
            'src'         => ''
          ),
          array(
            'value'       => 'bottom_navbar_top_logo',
            'label'       => __( 'Bottom Navbar & Top Logo', 'deliciousrestaurant' ),
            'src'         => ''
          ),
          array(
            'value'       => 'top_navbar_centered_logo',
            'label'       => __( 'Top Navbar & Centered Logo', 'deliciousrestaurant' ),
            'src'         => ''
          ),
          array(
            'value'       => 'centered_inline_logo',
            'label'       => __( 'Centered Inline Logo', 'deliciousrestaurant' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'header_image',
        'label'       => __( 'Header Image', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'background',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'header_enable:is(on)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'header_top_padding',
        'label'       => __( 'Header Padding', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'dimension',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'header_enable:is(on)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'header_margin',
        'label'       => __( 'Header Margin', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'dimension',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'header_enable:is(on)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'sticky_header_on',
        'label'       => __( 'Sticky Header on Scroll', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'sticky_header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'sticky_header_logo',
        'label'       => __( 'Sticky Header Logo', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'sticky_header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'sticky_header_background_color',
        'label'       => __( 'Sticky Header Background Color', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'background',
        'section'     => 'sticky_header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'menu_background',
        'label'       => __( 'Menu Background', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'background',
        'section'     => 'menu_bar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'menu_font_size',
        'label'       => __( 'Menu Font size', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'measurement',
        'section'     => 'menu_bar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'menu_link_color',
        'label'       => __( 'Menu Link Color', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'link-color',
        'section'     => 'menu_bar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'menu_link_background_color',
        'label'       => __( 'Menu Link Dropdown Background Color', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'colorpicker-opacity',
        'section'     => 'menu_bar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'menu_dropdown_link_color',
        'label'       => __( 'Menu Dropdown Link Color', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'menu_bar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'menu_bar_search',
        'label'       => __( 'Menu Search', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'menu_bar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'menu_bar_cart_icon',
        'label'       => __( 'Menu Cart Icon', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'menu_bar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'sticky_header_font_color',
        'label'       => __( 'Sticky Menu Link Color', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'link-color',
        'section'     => 'sticky_menu',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'sticky_header_dropdown_background_color',
        'label'       => __( 'Sticky Dropdown Background Color', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'colorpicker-opacity',
        'section'     => 'sticky_menu',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'sticky_header_dropdown_link_color',
        'label'       => __( 'Sticky Menu Dropdown Link Color', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'sticky_menu',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'mm_font_size',
        'label'       => __( 'Mobile Menu Font Size', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'measurement',
        'section'     => 'mobile_menu',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'mm_bg_color',
        'label'       => __( 'Mobile Menu Background Color', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'background',
        'section'     => 'mobile_menu',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'mm_link_color',
        'label'       => __( 'Mobile Menu Link Color', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'link-color',
        'section'     => 'mobile_menu',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'mm_link_border',
        'label'       => __( 'Mobile Menu Link Border Bottom', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'border',
        'section'     => 'mobile_menu',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'custom_header',
        'label'       => __( 'Custom Header', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'custom_page_builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'select_custom_header',
        'label'       => __( 'Select Header', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'page-select',
        'section'     => 'custom_page_builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'custom_footer',
        'label'       => __( 'Custom Footer', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'custom_page_builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

      array(
        'id'          => 'select_custom_footer',
        'label'       => __( 'Select Footer', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'page-select',
        'section'     => 'custom_page_builder',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

      array(
        'id'          => 'custom_css',
        'label'       => __( 'Custom Css', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'css',
        'section'     => 'custom_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'custom_js',
        'label'       => __( 'Custom Js', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'javascript',
        'section'     => 'custom_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'footer_area',
        'label'       => __( 'Footer Area', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'footer_background',
        'label'       => __( 'Footer Background', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'background',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'footer_font_size',
        'label'       => __( 'Footer Font Size', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'measurement',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'footer_text_color',
        'label'       => __( 'Footer Text Color', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'footer_link_color',
        'label'       => __( 'Footer Link Color', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'link-color',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'bottom_footer_area',
        'label'       => __( 'Footer Bottom Area', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'footer_bottom',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'footer_bottom_background',
        'label'       => __( 'Footer Bottom Background', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'background',
        'section'     => 'footer_bottom',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'footer_bottom_text_color',
        'label'       => __( 'Footer Bottom Text Color', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'footer_bottom',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'fb_link_color',
        'label'       => __( 'Footer Bottom Link Color', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'link-color',
        'section'     => 'footer_bottom',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'copyright_text',
        'label'       => __( 'Copyright Text', 'deliciousrestaurant' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'footer_bottom',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      )
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;
  
}