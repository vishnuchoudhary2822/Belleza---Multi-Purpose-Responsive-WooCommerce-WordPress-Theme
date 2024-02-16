<?php
/**
 * Initialize the custom Page options.
 */

add_action("add_meta", "add_custom_meta_box");
function add_custom_meta_box()
{
    add_meta("page_option", "Page Options", "custom_meta_box_markup", "page", "side", "high", null);
}

function custom_meta_box_markup()
{
   $values = get_post_custom( $post->ID );
    $selected = isset( $values['mpt_overlay_header'] ) ? esc_attr( $values['mpt_overlay_header'][0] ) : 'Default';
     $style = isset( $values['mpt_header_style'] ) ? esc_attr( $values['mpt_header_style'][0] ) : 'Default';

    // We'll use this nonce field later on when saving.
    wp_nonce_field( 'mpt_meta_box_nonce', 'meta_box_nonce' );
?>
                <p class="post-attributes-label-wrapper"><label class="post-attributes-label" for="mpt_overlay_header">Overlay Header</label></p>
                <select name="mpt_overlay_header" id="mpt_overlay_header">
                    <option value="Default" <?php selected( $selected, 'Default' ); ?>>Default</option>
                    <option value="Disable" <?php selected( $selected, 'Disable' ); ?>>Disable</option>
                    <option value="Enable" <?php selected( $selected, 'Enable' ); ?>>Enable</option>
                </select>
                <p class="post-attributes-label-wrapper"><label class="post-attributes-label" for="mpt_header_style">Overlay Header Style</label></p>
                <select name="mpt_header_style" id="mpt_header_style">
                    <option value="Default" <?php selected( $style, 'Default' ); ?>>Default</option>
                    <option value="Light" <?php selected( $style, 'Light' ); ?>>Light</option>
                    <option value="Dark" <?php selected( $style, 'Dark' ); ?>>Dark</option>
                </select>

<?php 
}

add_action( 'save_post', 'mpt_meta_box_save' );
function mpt_meta_box_save( $post_id )
{
    // Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
     
    // if our nonce isn't there, or we can't verify it, bail
    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'mpt_meta_box_nonce' ) ) return;
     
    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post' ) ) return;
     
    // now we can actually save the data
    $allowed = array( 
        'a' => array( // on allow a tags
            'href' => array() // and those anchors can only have href attribute
        )
    );
     
    // Make sure your data is set before trying to save it
    if( isset( $_POST['mpt_header_style'] ) )
        update_post_meta( $post_id, 'mpt_header_style', wp_kses( $_POST['mpt_header_style'], $allowed ) );
         
    if( isset( $_POST['mpt_overlay_header'] ) )
        update_post_meta( $post_id, 'mpt_overlay_header', esc_attr( $_POST['mpt_overlay_header'] ) );
        
}