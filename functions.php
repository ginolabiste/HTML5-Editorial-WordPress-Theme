<?php
function startwordpress_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/main.css', array());
	wp_enqueue_script( 'jquery-min-js', get_template_directory_uri() . '/assets/js/jquery.min.js', array( 'jquery' ), true );
	wp_enqueue_script( 'skel-min-js', get_template_directory_uri() . '/assets/js/skel.min.js', array( 'jquery' ), true );
	wp_enqueue_script( 'util-js', get_template_directory_uri() . '/assets/js/util.js', array( 'jquery' ), true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), true );
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

add_theme_support( 'title-tag' );

add_theme_support( 'post-thumbnails' );

function startwordpress_wp_title( $title, $sep ) {
	global $paged, $page;
	if ( is_feed() ) {
		return $title;
	} 
// Add the site name.
	$title .= get_bloginfo( 'name' );
	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}
	return $title;
} 

add_filter( 'wp_title', 'startwordpress_wp_title', 10, 2 );

function custom_excerpt_length( $length ) {
	return 22;
}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
    return ' . . . ';
}

add_filter('excerpt_more', 'new_excerpt_more');

// remove width & height attributes from images
//
function remove_img_attr ($html)
{
    return preg_replace('/(width|height)="\d+"\s/', "", $html);
}
 
add_filter( 'post_thumbnail_html', 'remove_img_attr' );

function theme_settings_page() { ?>
		<div class="wrap">
			<h1>Theme Settings</h1>
			<form method="post" action="options.php">
				<?php
					settings_fields( 'section' );
					do_settings_sections( 'theme-options' );
					submit_button();
				?>
			</form>
		</div>
<?php 
}

function custom_setting_add_menu() {
	add_menu_page( 'Theme Settings', 'Theme Settings', 'manage_options', 'theme_settings', 'theme_settings_page', null, 99 );
}

add_action( 'admin_menu', 'custom_setting_add_menu');

function setting_twitter() { ?>
	<input type="text" name="twitter" id="twitter" value="<?php echo get_option(twitter); ?>" />
<?php }

function setting_github() { ?>
	<input type="text" name="github" id="github" value="<?php echo get_option(github); ?>" />
<?php }

function setting_facebook() { ?>
	<input type="text" name="facebook" id="facebook" value="<?php echo get_option(facebook); ?>" />
<?php }

function setting_email() { ?>
	<input type="text" name="site_email" id="site_email" value="<?php echo get_option(site_email); ?>" />
<?php }

function setting_phone() { ?>
	<input type="text" name="site_phone" id="site_phone" value="<?php echo get_option(site_phone); ?>" />
<?php }

function setting_address() { ?>
	<textarea name="site_address" id="site_address"><?php echo get_option(site_address); ?></textarea>
<?php }

function custom_settings_page_setup() {
	add_settings_section( 'section', 'All Settings', null, 'theme-options' );
	add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section' );
	add_settings_field( 'github', 'GitHub URL', 'setting_github', 'theme-options', 'section' );
	add_settings_field( 'facebook', 'Facebook URL', 'setting_facebook', 'theme-options', 'section' );
	add_settings_field( 'site_email', 'Contact Email', 'setting_email', 'theme-options', 'section' );
	add_settings_field( 'site_phone', 'Contact Number', 'setting_phone', 'theme-options', 'section' );
	add_settings_field( 'site_address', 'Address', 'setting_address', 'theme-options', 'section' );

	register_setting( 'section', 'twitter' );
	register_setting( 'section', 'github' );
	register_setting( 'section', 'facebook' );
	register_setting( 'section', 'site_email' );
	register_setting( 'section', 'site_phone' );
	register_setting( 'section', 'site_address' );
}

add_action( 'admin_init', 'custom_settings_page_setup' );

function create_my_custom_updates() {
	register_post_type( 'my-custom-updates',
		array(
			'labels' => array(
				'name' => __( 'Updates' ),
				'singular_name' => __( 'Update' )					
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
			'custom-fields'
			)
		)
	);
}

add_action( 'init', 'create_my_custom_updates' );