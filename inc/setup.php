<?php
/**
 * Set-up Functions
 */
namespace Quincy_Institute\Inc;

function setup() {
	load_theme_textdomain( 'quincy', get_template_directory() . '/build/languages' );

	// Register navigation menus.
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'quincy' ),
			'footer'  => esc_html__( 'Footer Menu', 'quincy' ),
			'privacy' => esc_html__( 'Privacy Menu', 'quincy' ),
			'mobile'  => esc_html__( 'Mobile Menu', 'quincy' ),
		)
	);
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @author WebDevStudios
 */
function widgets_init() {

	$sidebars = array(
		'sidebar'        => esc_html__( 'Post Sidebar', 'quincy' ),
		'content-top'    => esc_html__( 'Facet Search', 'quincy' ),
		'content-bottom' => esc_html__( 'Content Bottom', 'quincy' ),
		'footer'         => esc_html__( 'Footer', 'quincy' ),
	);

	foreach ( $sidebars as $sidebar_id => $sidebar_name ) {
		register_sidebar(
			array(
				'name'          => $sidebar_name,
				'id'            => $sidebar_id,
				'description'   => /* translators: the sidebar name */ sprintf( esc_html__( 'Widget area for %s', 'quincy' ), $sidebar_name ),
				'before_widget' => '<div class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
	}

}
\add_action( 'widgets_init', __NAMESPACE__ . '\widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function scripts() {
	$asset_file_path = \get_stylesheet_directory() . '/assets/index.asset.php';
	$theme           = wp_get_theme();

	if ( is_readable( $asset_file_path ) ) {
		$asset_file = include $asset_file_path;
	} else {
		$asset_file = array(
			'version'      => $theme->get( 'Version' ),
			'dependencies' => array( 'wp-polyfill' ),
		);
	}

	\wp_enqueue_style( 'quincy', \get_stylesheet_directory_uri() . '/assets/css/index.css', array(), $asset_file['version'], 'screen' );
	\wp_enqueue_style( 'quincy-print', \get_stylesheet_directory_uri() . '/assets/css/print.css', array(), $asset_file['version'], 'print' );
	\wp_enqueue_script( 'quincy-scripts', \get_stylesheet_directory_uri() . '/assets/js/index.js', $asset_file['dependencies'], $asset_file['version'], true );
}
\add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\scripts' );

/**
 * Preload styles and scripts.
 */
function preload_scripts() {
	$asset_file_path = \get_stylesheet_directory() . '/assets/index.asset.php';
	$theme           = wp_get_theme();

	if ( is_readable( $asset_file_path ) ) {
		$asset_file = include $asset_file_path;
	} else {
		$asset_file = array(
			'version'      => $theme->get( 'Version' ),
			'dependencies' => array( 'wp-polyfill' ),
		);
	}

	?>
	<link rel="preload" href="<?php echo \esc_url( \get_stylesheet_directory_uri() ); ?>/assets/css/index.css?ver=<?php echo \esc_html( $asset_file['version'] ); ?>" as="style">
	<link rel="preload" href="<?php echo \esc_url( \get_stylesheet_directory_uri() ); ?>/assets/js/index.js?ver=<?php echo \esc_html( $asset_file['version'] ); ?>" as="script">
	<?php
}
\add_action( 'wp_head', __NAMESPACE__ . '\preload_scripts', 1 );

/**
 * Preload assets.
 *
 * @author Corey Collins
 */
function preload_assets() {
	?>
	<?php
	if ( \has_custom_logo() ) :
		$custom_logo = \esc_url( \wp_get_attachment_url( \get_theme_mod( 'custom_logo' ) ) );
		?>
		<link rel="preload" href="<?php echo $custom_logo; ?>" as="image">
	<?php endif; ?>
	<?php
}
\add_action( 'wp_head', __NAMESPACE__ . '\preload_assets', 1 );
