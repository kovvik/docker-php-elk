<?php
/*
 * Admin Options for Theme 
 * File Name: theme-options.php
 * @ontheside
 * @since 1.3
 *
 */
add_action( 'admin_menu', 'ontheside_options_add_page' ); 
function ontheside_options_add_page() {
    add_theme_page( 'On The Side Options', 'Theme Options', 'edit_theme_options', 'ontheside-options', 'ontheside_options_page' );
}

add_action( 'admin_init', 'ontheside_options_init' );
function ontheside_options_init() {
    register_setting( 'ontheside-options', 'ontheside_options', 'ontheside_validate_options' );
} 
// connect stylesheet to options page
add_action('admin_print_scripts-appearance_page_ontheside-options', 'ontheside_add_init'); 
function ontheside_add_init() {
    wp_enqueue_style( 'ontheside-admin-style', get_template_directory_uri() . '/include/admin-style.css', false, '1.0' );
}

function ontheside_options_page() {
?>

    <div class="options-container">
        <div id="icon-themes">
            <p><img src="<?php echo get_template_directory_uri() . '/include/icon32.png'; ?>">  TSW On The Side</p>
        </div>
            <h2>Theme Options</h2>
                <?php // settings_errors(); ?>
                <form action="options.php" method="POST" class="options-table-1">
                <?php settings_fields( 'ontheside-options' ); ?>
                <?php // do_settings_sections('ontheside-options'); ?>
                <?php $options_selected = get_option( 'ontheside_options' ); ?>
                    <fieldset><legend>Change Opacity of Posts Background</legend>
                        <div class="select-options-box">
                        <select name="ontheside_options[opacity]" class="select-options-dropdown">
                        <option value="0.1" <?php if ( $options_selected['opacity'] == 0.1 ) echo 'selected="selected"'; ?>> 1 </option>
                        <option value="0.2" <?php if ( $options_selected['opacity'] == 0.2 ) echo 'selected="selected"'; ?>> 2 </option>  
                        <option value="0.3" <?php if ( $options_selected['opacity'] == 0.3 ) echo 'selected="selected"'; ?>> 3 </option>  
                        <option value="0.4" <?php if ( $options_selected['opacity'] == 0.4 ) echo 'selected="selected"'; ?>> 4 </option>  
                        <option value="0.5" <?php if ( $options_selected['opacity'] == 0.5 ) echo 'selected="selected"'; ?>> 5 </option>  
                        <option value="0.6" <?php if ( $options_selected['opacity'] == 0.6 ) echo 'selected="selected"'; ?>> 6 </option>  
                        <option value="0.7" <?php if ( $options_selected['opacity'] == 0.7 ) echo 'selected="selected"'; ?>> 7 </option>  
                        <option value="0.8" <?php if ( $options_selected['opacity'] == 0.8 ) echo 'selected="selected"'; ?>> 8 </option>  
                        <option value="0.9" <?php if ( $options_selected['opacity'] == 0.9 ) echo 'selected="selected"'; ?>> 9 </option>  
                        <option value="1" <?php if ( $options_selected['opacity'] == 1 ) echo 'selected="selected"'; ?>> 0 </option>  
                        </select>
                        </div><div class="clearme"></div>
                            <?php submit_button(); ?>
                    </fieldset>
                </form>
        </div>
            <table class="options-instruct-table">
                <tr>
                    <td><h2>Instructions on Displaying Front Page Options</h2></td>
                </tr>

                <tr>
                    <td class="options-instruct">
                    <?php get_template_part('/include/ots-instructions'); ?>
                    </td>
                </tr>
            </table>



<?php                    
} 

function ontheside_validate_options( $input ) {
    $valid_options = array( 0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8, 0.9, 1 );
        if( in_array($input['opacity'], $valid_options) )
            return $input;
        else
            return false;
}
    
function ontheside_styles_method() {
    wp_enqueue_style(
    'custom-style',
    get_template_directory_uri() . '/include/custom.css'
    );        
	$opacity = get_option( 'ontheside_options' );
        $custom_css = "
            #main{
                   opacity: {$opacity['opacity']};
                 }";            
    wp_add_inline_style( 'custom-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'ontheside_styles_method' );
 
?>