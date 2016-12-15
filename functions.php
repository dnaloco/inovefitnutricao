<?php

function lojablog_setup () {
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'woocommerce' );

	register_nav_menus( array(
		'blog_menu' => __( 'Blog Menu',      'lojablog' ),
		'loja_menu'  => __( 'Loja Menu', 'lojablog' ),
	) );

	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	add_theme_support( 'custom-logo', array(
		'height'      => 244,
		'width'       => 244,
		'flex-height' => true,
	) );
}
add_action( 'after_setup_theme', 'lojablog_setup' );

function lojablog_widgets_init () {
	register_sidebar( array(
		'name'          => __( 'Cardapio Area 01', 'lojablog' ),
		'id'            => 'cardapio01',
		'description'   => __( 'Adicione.', 'lojablog' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="widget-title-decor"><h2 class="widget-title">',
		'after_title'   => '</h2><div class="widget-title-decor-line""></div></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Widget Loja 01', 'lojablog' ),
		'id'            => 'widget01loja',
		'description'   => __( 'Adicione.', 'lojablog' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="widget-title-decor"><h2 class="widget-title">',
		'after_title'   => '</h2><div class="widget-title-decor-line""></div></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Widget Loja 02', 'lojablog' ),
		'id'            => 'widget02loja',
		'description'   => __( 'Adicione.', 'lojablog' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="widget-title-decor"><h2 class="widget-title">',
		'after_title'   => '</h2><div class="widget-title-decor-line""></div></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Widget Loja 03', 'lojablog' ),
		'id'            => 'widget03loja',
		'description'   => __( 'Adicione.', 'lojablog' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="widget-title-decor"><h2 class="widget-title">',
		'after_title'   => '</h2><div class="widget-title-decor-line""></div></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Widget Loja 04', 'lojablog' ),
		'id'            => 'widget04loja',
		'description'   => __( 'Adicione.', 'lojablog' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="widget-title-decor"><h2 class="widget-title">',
		'after_title'   => '</h2><div class="widget-title-decor-line""></div></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Woocommerce Widget', 'lojablog' ),
		'id'            => 'widgetwoo',
		'description'   => __( 'Adicione.', 'lojablog' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="widget-title-decor"><h2 class="widget-title">',
		'after_title'   => '</h2><div class="widget-title-decor-line""></div></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Newsletter Widget', 'lojablog' ),
		'id'            => 'newsletter',
		'description'   => __( 'Adicione.', 'lojablog' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Widget Blog 01', 'lojablog' ),
		'id'            => 'widget01blog',
		'description'   => __( 'Adicione.', 'lojablog' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="widget-title-decor"><h2 class="widget-title">',
		'after_title'   => '</h2><div class="widget-title-decor-line""></div></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Widget Blog 02', 'lojablog' ),
		'id'            => 'widget02blog',
		'description'   => __( 'Adicione.', 'lojablog' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="widget-title-decor"><h2 class="widget-title">',
		'after_title'   => '</h2><div class="widget-title-decor-line""></div></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Widget Blog 03', 'lojablog' ),
		'id'            => 'widget03blog',
		'description'   => __( 'Adicione.', 'lojablog' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="widget-title-decor"><h2 class="widget-title">',
		'after_title'   => '</h2><div class="widget-title-decor-line""></div></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Widget Blog 04', 'lojablog' ),
		'id'            => 'widget04blog',
		'description'   => __( 'Adicione.', 'lojablog' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="widget-title-decor"><h2 class="widget-title">',
		'after_title'   => '</h2><div class="widget-title-decor-line""></div></div>',
	) );
}
add_action( 'widgets_init', 'lojablog_widgets_init' );

function lojablog_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'lojablog_javascript_detection', 0 );

function lojablog_scripts () {
	wp_enqueue_style( 'lojablog-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'lojablog_scripts' );


function shopping_register_plugins() {

	/**
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin from the WordPress Plugin Repository
		array(
			'name' 		=> 'WooCommerce',
			'slug' 		=> 'woocommerce',
			'required' 	=> false,
		),

	);

	/**
	 * Array of configuration settings. Amend each line as needed.
	 * If you want the default strings to be available under your own theme domain,
	 * leave the strings uncommented.
	 * Some of the strings are added into a sprintf, so see the comments at the
	 * end of each line for what each argument will be.
	 */
	$config = array(
		'default_path' 		=> '',                         	// Default absolute path to pre-packaged plugins
		'parent_menu_slug' 	=> 'themes.php', 				// Default parent menu slug
		'parent_url_slug' 	=> 'themes.php', 				// Default parent URL slug
		'menu'         		=> 'install-required-plugins', 	// Menu slug
		'has_notices'      	=> true,                       	// Show admin notices or not
		'is_automatic'    	=> false,					   	// Automatically activate plugins after installation or not
		'message' 			=> '',							// Message to output right before the plugins table
		'strings'      		=> array(
			'page_title'                       			=> __( 'Install Required Plugins', 'shopping' ),
			'menu_title'                       			=> __( 'Install Plugins', 'shopping' ),
			'installing'                       			=> __( 'Installing Plugin: %s', 'shopping' ), // %1$s = plugin name
			'oops'                             			=> __( 'Something went wrong with the plugin API.', 'shopping' ),
			'notice_can_install_required'     			=> _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'shopping' ), // %1$s = plugin name(s)
			'notice_can_install_recommended'			=> _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'shopping' ), // %1$s = plugin name(s)
			'notice_cannot_install'  					=> _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'shopping' ), // %1$s = plugin name(s)
			'notice_can_activate_required'    			=> _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'shopping' ), // %1$s = plugin name(s)
			'notice_can_activate_recommended'			=> _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'shopping' ), // %1$s = plugin name(s)
			'notice_cannot_activate' 					=> _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'shopping' ), // %1$s = plugin name(s)
			'notice_ask_to_update' 						=> _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'shopping' ), // %1$s = plugin name(s)
			'notice_cannot_update' 						=> _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'shopping' ), // %1$s = plugin name(s)
			'install_link' 					  			=> _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'shopping' ),
			'activate_link' 				  			=> _n_noop( 'Activate installed plugin', 'Activate installed plugins', 'shopping' ),
			'return'                           			=> __( 'Return to Required Plugins Installer', 'shopping' ),
			'plugin_activated'                 			=> __( 'Plugin activated successfully.', 'shopping' ),
			'complete' 									=> __( 'All plugins installed and activated successfully. %s', 'shopping' ), // %1$s = dashboard link
			'nag_type'									=> 'updated' // Determines admin notice type - can only be 'updated' or 'error'
		)
	);

	if (function_exists('tgmpa')) {
		tgmpa( $plugins, $config );
	}

}

add_action( 'tgmpa_register', 'shopping_register_plugins' );

if ( ! function_exists( 'woocommerce_content' ) ) {

	/**
	 * Output WooCommerce content.
	 *
	 * This function is only used in the optional 'woocommerce.php' template.
	 * which people can add to their themes to add basic woocommerce support.
	 * without hooks or modifying core templates.
	 *
	 */
	function woocommerce_content() {

	    if ( is_singular( 'product' ) ) {

	        while ( have_posts() ) : the_post();

	            // Template depends from category slug

	            if ( has_term( 'my-cat-slug', 'product_cat' ) ) {

	              woocommerce_get_template_part( 'content', 'single-product-dogs' );  

	            } else {

	              woocommerce_get_template_part( 'content', 'single-product' ); 

	            }

	        endwhile;

	    } else { ?>

	        <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

	            <h1 class="page-title"><?php woocommerce_page_title(); ?></h1>

	        <?php endif; ?>

	        <?php do_action( 'woocommerce_archive_description' ); ?>

	        <?php if ( have_posts() ) : ?>

	            <?php do_action('woocommerce_before_shop_loop'); ?>

	            <?php woocommerce_product_loop_start(); ?>

	                <?php woocommerce_product_subcategories(); ?>

	                <?php $countItems = 0; ?>
	                <?php $rowClosed = false; ?>
	                <?php while ( have_posts() ) : the_post(); ?>
	                	<?php if ( $countItems == 0 ): ?>
	                	<div class="row">
	                	<?php $rowClosed = false; ?>
	                	<?php endif; ?>

	                	<div class="da-product large-3 columns">
	                    <?php wc_get_template_part( 'content', 'product' ); ?>
	                    </div>

	                    <?php if ($countItems == 3): ?>
	                    </div>
	                    <?php $rowClosed = true; ?>
	                    <?php endif; ?>

	                    <?php $countItems += 1; ?>

	                    <?php if ($countItems == 4) $countItems = 0; ?>
	                <?php endwhile; // end of the loop. ?>
	                <?php if (!$rowClosed) echo "</div>"; ?>
	            <?php woocommerce_product_loop_end(); ?>

	            <?php do_action('woocommerce_after_shop_loop'); ?>

	        <?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

	            <?php wc_get_template( 'loop/no-products-found.php' ); ?>

	        <?php endif;

	    }
	  }
}




function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'woocommerce_support' );

