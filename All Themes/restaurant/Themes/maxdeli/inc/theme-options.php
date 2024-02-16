<?php
/**
 * Initialize the custom theme options.
 */
add_action( 'init', 'custom_theme_options');

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
        'title'       => __( 'General', 'maxdeli' )
      ),
      array(
        'id'          => 'typography',
        'title'       => __( 'Typography', 'maxdeli' )
      ),
      array(
        'id'          => 'logo',
        'title'       => __( 'Logo', 'maxdeli' )
      ),
      array(
        'id'          => 'top_bar',
        'title'       => __( 'Top Bar', 'maxdeli' )
      ),
      array(
        'id'          => 'header',
        'title'       => __( 'Header', 'maxdeli' )
      ),
      array(
        'id'          => 'sticky_header',
        'title'       => __( 'Sticky Header', 'maxdeli' )
      ),
      array(
        'id'          => 'menu_bar',
        'title'       => __( 'Menu', 'maxdeli' )
      ),
      array(
        'id'          => 'sticky_menu',
        'title'       => __( 'Sticky Menu', 'maxdeli' )
      ),
      array(
        'id'          => 'mobile_menu',
        'title'       => __( 'Mobile Menu', 'maxdeli' )
      ),
      array(
        'id'          => 'custom_settings',
        'title'       => __( 'Custom Settings', 'maxdeli' )
      ),
      array(
        'id'          => 'footer',
        'title'       => __( 'Footer Area', 'maxdeli' )
      ),
      array(
        'id'          => 'footer_bottom',
        'title'       => __( 'Copyright Area', 'maxdeli' )
      )
    ),
    'settings'        => array( 
      array(
        'id'          => 'body_font_family',
        'label'       => __( 'Body Font Family', 'maxdeli' ),
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
        'label'       => __( 'Body Font Size', 'maxdeli' ),
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
        'label'       => __( 'Body Font Color', 'maxdeli' ),
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
        'label'       => __( 'Body Background Color', 'maxdeli' ),
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
        'label'       => __( 'H1', 'maxdeli' ),
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
        'label'       => __( 'H2', 'maxdeli' ),
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
        'label'       => __( 'H3', 'maxdeli' ),
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
        'label'       => __( 'H4', 'maxdeli' ),
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
        'label'       => __( 'Breadcrumbs', 'maxdeli' ),
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
        'label'       => __( 'Sidebar Widget Heading', 'maxdeli' ),
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
        'label'       => __( 'Blog Entry Title', 'maxdeli' ),
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
        'label'       => __( 'Blog Post Title', 'maxdeli' ),
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
        'label'       => __( 'Logo', 'maxdeli' ),
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
        'label'       => __( 'Retina Logo', 'maxdeli' ),
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
        'label'       => __( 'Logo Padding', 'maxdeli' ),
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
        'label'       => __( 'Logo Margin', 'maxdeli' ),
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
        'label'       => __( 'Top Bar Enable / Disable', 'maxdeli' ),
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
        'label'       => __( 'Sticky Top Bar', 'maxdeli' ),
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
        'label'       => __( 'Top Bar Style', 'maxdeli' ),
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
            'label'       => __( 'Left Content & Right Menu', 'maxdeli' ),
            'src'         => ''
          ),
          array(
            'value'       => 'left_menu_right_content',
            'label'       => __( 'Left Menu & Right Content', 'maxdeli' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'top_bar_right_content',
        'label'       => __( 'Top Bar Content', 'maxdeli' ),
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
        'label'       => __( 'Top Bar Background Color', 'maxdeli' ),
        'desc'        => __( 'Top Bar Background Color', 'maxdeli' ),
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
        'label'       => __( 'Top Bar Color', 'maxdeli' ),
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
        'label'       => __( 'Top Bar Font Size', 'maxdeli' ),
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
        'label'       => __( 'Top Bar - Top Border', 'maxdeli' ),
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
        'label'       => __( 'Top Bar -  Bottom Border', 'maxdeli' ),
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
        'label'       => __( 'Top Bar Padding', 'maxdeli' ),
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
        'label'       => __( 'Top Bar Margin', 'maxdeli' ),
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
        'label'       => __( 'Header Enable / Disable', 'maxdeli' ),
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
        'label'       => __( 'Header Style', 'maxdeli' ),
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
            'label'       => __( 'Left Logo & Right Navbar', 'maxdeli' ),
            'src'         => ''
          ),
          array(
            'value'       => 'bottom_navbar_top_logo',
            'label'       => __( 'Bottom Navbar & Top Logo', 'maxdeli' ),
            'src'         => ''
          ),
          array(
            'value'       => 'top_navbar_centered_logo',
            'label'       => __( 'Top Navbar & Centered Logo', 'maxdeli' ),
            'src'         => ''
          ),
          array(
            'value'       => 'centered_inline_logo',
            'label'       => __( 'Centered Inline Logo', 'maxdeli' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'header_image',
        'label'       => __( 'Header Image', 'maxdeli' ),
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
        'label'       => __( 'Header Padding', 'maxdeli' ),
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
        'label'       => __( 'Header Margin', 'maxdeli' ),
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
        'label'       => __( 'Sticky Header on Scroll', 'maxdeli' ),
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
        'label'       => __( 'Sticky Header Logo', 'maxdeli' ),
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
        'label'       => __( 'Sticky Header Background Color', 'maxdeli' ),
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
        'label'       => __( 'Menu Background', 'maxdeli' ),
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
        'label'       => __( 'Menu Font size', 'maxdeli' ),
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
        'label'       => __( 'Menu Link Color', 'maxdeli' ),
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
        'label'       => __( 'Menu Link Dropdown Background Color', 'maxdeli' ),
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
        'label'       => __( 'Menu Dropdown Link Color', 'maxdeli' ),
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
        'label'       => __( 'Menu Search', 'maxdeli' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'menu_bar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'top_bar_enable_disable:is(on)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'menu_bar_cart_icon',
        'label'       => __( 'Menu Cart Icon', 'maxdeli' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'menu_bar',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'top_bar_enable_disable:is(on)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'sticky_header_font_color',
        'label'       => __( 'Sticky Menu Link Color', 'maxdeli' ),
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
        'label'       => __( 'Sticky Dropdown Background Color', 'maxdeli' ),
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
        'label'       => __( 'Sticky Menu Dropdown Link Color', 'maxdeli' ),
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
        'label'       => __( 'Mobile Menu Font Size', 'maxdeli' ),
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
        'label'       => __( 'Mobile Menu Background Color', 'maxdeli' ),
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
        'label'       => __( 'Mobile Menu Link Color', 'maxdeli' ),
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
        'label'       => __( 'Mobile Menu Link Border Bottom', 'maxdeli' ),
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
        'id'          => 'custom_css',
        'label'       => __( 'Custom Css', 'maxdeli' ),
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
        'label'       => __( 'Custom Js', 'maxdeli' ),
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
        'label'       => __( 'Footer Area', 'maxdeli' ),
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
        'label'       => __( 'Footer Background', 'maxdeli' ),
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
        'label'       => __( 'Footer Font Size', 'maxdeli' ),
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
        'label'       => __( 'Footer Text Color', 'maxdeli' ),
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
        'label'       => __( 'Footer Link Color', 'maxdeli' ),
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
        'label'       => __( 'Footer Bottom Area', 'maxdeli' ),
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
        'label'       => __( 'Footer Bottom Background', 'maxdeli' ),
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
        'label'       => __( 'Footer Bottom Text Color', 'maxdeli' ),
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
        'label'       => __( 'Footer Bottom Link Color', 'maxdeli' ),
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
        'label'       => __( 'Copyright Text', 'maxdeli' ),
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