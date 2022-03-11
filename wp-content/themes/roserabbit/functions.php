<?php
/**
 * Rose Rabbit functions and definitions
 *
 * Sets up the theme and provides some helper functions, which are used
 * in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @link https://developer.wordpress.org/themes/advanced-topics/child-themes/
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, @link https://developer.wordpress.org/plugins/
 *
 * @package WordPress
 * @subpackage Rose_Rabbit
 * @since Rose Rabbit 1.0
 */

// Set up the content width value based on the theme's design and stylesheet.
if ( ! isset( $content_width ) ) {
	$content_width = 625;
}

/**
 * Rose Rabbit setup.
 *
 * Sets up theme defaults and registers the various WordPress features that
 * Rose Rabbit supports.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To add a Visual Editor stylesheet.
 * @uses add_theme_support() To add support for post thumbnails, automatic feed links,
 *  custom background, and post formats.
 * @uses register_nav_menu() To add support for navigation menus.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since Rose Rabbit 1.0
 */
function roserabbit_setup() {
	/*
	 * Makes Rose Rabbit available for translation.
	 *
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/roserabbit
	 * If you're building a theme based on Rose Rabbit, use a find and replace
	 * to change 'roserabbit' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'roserabbit' );

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// Load regular editor styles into the new block-based editor.
	add_theme_support( 'editor-styles' );

	// Load default block styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );

	// Add support for custom color scheme.
	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => __( 'Blue', 'roserabbit' ),
				'slug'  => 'blue',
				'color' => '#21759b',
			),
			array(
				'name'  => __( 'Dark Gray', 'roserabbit' ),
				'slug'  => 'dark-gray',
				'color' => '#444',
			),
			array(
				'name'  => __( 'Medium Gray', 'roserabbit' ),
				'slug'  => 'medium-gray',
				'color' => '#9f9f9f',
			),
			array(
				'name'  => __( 'Light Gray', 'roserabbit' ),
				'slug'  => 'light-gray',
				'color' => '#e6e6e6',
			),
			array(
				'name'  => __( 'White', 'roserabbit' ),
				'slug'  => 'white',
				'color' => '#fff',
			),
		)
	);

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// This theme supports a variety of post formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) );

	// This theme uses wp_nav_menu() in one location.
	// register_nav_menu( 'primary', __( 'Primary Menu', 'roserabbit' ) );
	register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'roserabbit' ),
        'side' => __( 'Sidebar Menu', 'roserabbit' ),
        'footer'  => __( 'Footer Menu', 'roserabbit' ),
        'footer-2'  => __( 'Footer Menu 2', 'roserabbit' ),
    ) );





	/*
	 * This theme supports custom background color and image,
	 * and here we also set up the default background color.
	 */
	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'e6e6e6',
		)
	);

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 624, 9999 ); // Unlimited height, soft crop.

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'roserabbit_setup' );

/**
 * Add support for a custom header image.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Add block patterns.
 */
require get_template_directory() . '/inc/block-patterns.php';

// Bootstrap Navwalker
require get_template_directory() . '/wp-bootstrap-navwalker.php';

// Menu Navwalker
require get_template_directory() . '/wp-menu-navwalker.php';


/**
 * Return the Google font stylesheet URL if available.
 *
 * The use of Open Sans by default is localized. For languages that use
 * characters not supported by the font, the font can be disabled.
 *
 * @since Rose Rabbit 1.2
 *
 * @return string Font stylesheet or empty string if disabled.
 */
function roserabbit_get_font_url() {
	$font_url = '';

	/*
	 * translators: If there are characters in your language that are not supported
	 * by Open Sans, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'roserabbit' ) ) {
		$subsets = 'latin,latin-ext';

		/*
		 * translators: To add an additional Open Sans character subset specific to your language,
		 * translate this to 'greek', 'cyrillic' or 'vietnamese'. Do not translate into your own language.
		 */
		$subset = _x( 'no-subset', 'Open Sans font: add new subset (greek, cyrillic, vietnamese)', 'roserabbit' );

		if ( 'cyrillic' === $subset ) {
			$subsets .= ',cyrillic,cyrillic-ext';
		} elseif ( 'greek' === $subset ) {
			$subsets .= ',greek,greek-ext';
		} elseif ( 'vietnamese' === $subset ) {
			$subsets .= ',vietnamese';
		}

		$query_args = array(
			'family'  => urlencode( 'Open Sans:400italic,700italic,400,700' ),
			'subset'  => urlencode( $subsets ),
			'display' => urlencode( 'fallback' ),
		);
		$font_url   = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return $font_url;
}

/**
 * Enqueue scripts and styles for front end.
 *
 * @since Rose Rabbit 1.0
 */
function roserabbit_scripts_styles() {
	global $wp_styles;

	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Adds JavaScript for handling the navigation menu hide-and-show behavior.
	wp_enqueue_script( 'roserabbit-navigation', get_template_directory_uri() . '/js/navigation.js', array( 'jquery' ), '20141205', true );

	$font_url = roserabbit_get_font_url();
	if ( ! empty( $font_url ) ) {
		wp_enqueue_style( 'roserabbit-fonts', esc_url_raw( $font_url ), array(), null );
	}

	// Loads our main stylesheet.
	wp_enqueue_style( 'roserabbit-style', get_stylesheet_uri(), array(), '20190507' );

	// Theme block stylesheet.
	wp_enqueue_style( 'roserabbit-block-style', get_template_directory_uri() . '/css/blocks.css', array( 'roserabbit-style' ), '20190406' );

	// Loads the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'roserabbit-ie', get_template_directory_uri() . '/css/ie.css', array( 'roserabbit-style' ), '20150214' );
	$wp_styles->add_data( 'roserabbit-ie', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'roserabbit_scripts_styles' );

/**
 * Enqueue styles for the block-based editor.
 *
 * @since Rose Rabbit 2.6
 */
function roserabbit_block_editor_styles() {
	// Block styles.
	wp_enqueue_style( 'roserabbit-block-editor-style', get_template_directory_uri() . '/css/editor-blocks.css', array(), '20190406' );
	// Add custom fonts.
	wp_enqueue_style( 'roserabbit-fonts', roserabbit_get_font_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'roserabbit_block_editor_styles' );

/**
 * Add preconnect for Google Fonts.
 *
 * @since Rose Rabbit 2.2
 *
 * @param array   $urls          URLs to print for resource hints.
 * @param string  $relation_type The relation type the URLs are printed.
 * @return array URLs to print for resource hints.
 */
function roserabbit_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'roserabbit-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '>=' ) ) {
			$urls[] = array(
				'href' => 'https://fonts.gstatic.com',
				'crossorigin',
			);
		} else {
			$urls[] = 'https://fonts.gstatic.com';
		}
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'roserabbit_resource_hints', 10, 2 );

/**
 * Filter TinyMCE CSS path to include Google Fonts.
 *
 * Adds additional stylesheets to the TinyMCE editor if needed.
 *
 * @uses roserabbit_get_font_url() To get the Google Font stylesheet URL.
 *
 * @since Rose Rabbit 1.2
 *
 * @param string $mce_css CSS path to load in TinyMCE.
 * @return string Filtered CSS path.
 */
function roserabbit_mce_css( $mce_css ) {
	$font_url = roserabbit_get_font_url();

	if ( empty( $font_url ) ) {
		return $mce_css;
	}

	if ( ! empty( $mce_css ) ) {
		$mce_css .= ',';
	}

	$mce_css .= esc_url_raw( str_replace( ',', '%2C', $font_url ) );

	return $mce_css;
}
add_filter( 'mce_css', 'roserabbit_mce_css' );

/**
 * Filter the page title.
 *
 * Creates a nicely formatted and more specific title element text
 * for output in head of document, based on current view.
 *
 * @since Rose Rabbit 1.0
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string Filtered title.
 */
function roserabbit_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	// Add a page number if necessary.
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		/* translators: %s: Page number. */
		$title = "$title $sep " . sprintf( __( 'Page %s', 'roserabbit' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'roserabbit_wp_title', 10, 2 );

/**
 * Filter the page menu arguments.
 *
 * Makes our wp_nav_menu() fallback -- wp_page_menu() -- show a home link.
 *
 * @since Rose Rabbit 1.0
 */
function roserabbit_page_menu_args( $args ) {
	if ( ! isset( $args['show_home'] ) ) {
		$args['show_home'] = true;
	}
	return $args;
}
add_filter( 'wp_page_menu_args', 'roserabbit_page_menu_args' );

/**
 * Register sidebars.
 *
 * Registers our main widget area and the front page widget areas.
 *
 * @since Rose Rabbit 1.0
 */
function roserabbit_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Main Sidebar', 'roserabbit' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'roserabbit' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'First Front Page Widget Area', 'roserabbit' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'roserabbit' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Second Front Page Widget Area', 'roserabbit' ),
			'id'            => 'sidebar-3',
			'description'   => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'roserabbit' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'roserabbit_widgets_init' );

if ( ! function_exists( 'roserabbit_content_nav' ) ) :
	/**
	 * Displays navigation to next/previous pages when applicable.
	 *
	 * @since Rose Rabbit 1.0
	 */
	function roserabbit_content_nav( $html_id ) {
		global $wp_query;

		if ( $wp_query->max_num_pages > 1 ) : ?>
			<nav id="<?php echo esc_attr( $html_id ); ?>" class="navigation" role="navigation">
				<h3 class="assistive-text"><?php _e( 'Post navigation', 'roserabbit' ); ?></h3>
				<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'roserabbit' ) ); ?></div>
				<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'roserabbit' ) ); ?></div>
			</nav><!-- .navigation -->
			<?php
	endif;
	}
endif;

if ( ! function_exists( 'roserabbit_comment' ) ) :
	/**
	 * Template for comments and pingbacks.
	 *
	 * To override this walker in a child theme without modifying the comments template
	 * simply create your own roserabbit_comment(), and that function will be used instead.
	 *
	 * Used as a callback by wp_list_comments() for displaying the comments.
	 *
	 * @since Rose Rabbit 1.0
	 */
	function roserabbit_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		switch ( $comment->comment_type ) :
			case 'pingback':
			case 'trackback':
				// Display trackbacks differently than normal comments.
				?>
		<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
		<p><?php _e( 'Pingback:', 'roserabbit' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'roserabbit' ), '<span class="edit-link">', '</span>' ); ?></p>
				<?php
				break;
			default:
				// Proceed with normal comments.
				global $post;
				?>
		<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<header class="comment-meta comment-author vcard">
				<?php
					echo get_avatar( $comment, 44 );
					printf(
						'<cite><b class="fn">%1$s</b> %2$s</cite>',
						get_comment_author_link(),
						// If current post author is also comment author, make it known visually.
						( $comment->user_id === $post->post_author ) ? '<span>' . __( 'Post author', 'roserabbit' ) . '</span>' : ''
					);
					printf(
						'<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
						esc_url( get_comment_link( $comment->comment_ID ) ),
						get_comment_time( 'c' ),
						/* translators: 1: Date, 2: Time. */
						sprintf( __( '%1$s at %2$s', 'roserabbit' ), get_comment_date(), get_comment_time() )
					);
				?>
				</header><!-- .comment-meta -->

				<?php
				$commenter = wp_get_current_commenter();
				if ( $commenter['comment_author_email'] ) {
					$moderation_note = __( 'Your comment is awaiting moderation.', 'roserabbit' );
				} else {
					$moderation_note = __( 'Your comment is awaiting moderation. This is a preview; your comment will be visible after it has been approved.', 'roserabbit' );
				}
				?>

				<?php if ( '0' == $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation"><?php echo $moderation_note; ?></p>
				<?php endif; ?>

				<section class="comment-content comment">
				<?php comment_text(); ?>
				<?php edit_comment_link( __( 'Edit', 'roserabbit' ), '<p class="edit-link">', '</p>' ); ?>
				</section><!-- .comment-content -->

				<div class="reply">
				<?php
				comment_reply_link(
					array_merge(
						$args,
						array(
							'reply_text' => __( 'Reply', 'roserabbit' ),
							'after'      => ' <span>&darr;</span>',
							'depth'      => $depth,
							'max_depth'  => $args['max_depth'],
						)
					)
				);
				?>
				</div><!-- .reply -->
			</article><!-- #comment-## -->
				<?php
				break;
		endswitch; // End comment_type check.
	}
endif;

if ( ! function_exists( 'roserabbit_entry_meta' ) ) :
	/**
	 * Set up post entry meta.
	 *
	 * Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
	 *
	 * Create your own roserabbit_entry_meta() to override in a child theme.
	 *
	 * @since Rose Rabbit 1.0
	 */
	function roserabbit_entry_meta() {
		/* translators: Used between list items, there is a space after the comma. */
		$categories_list = get_the_category_list( __( ', ', 'roserabbit' ) );

		/* translators: Used between list items, there is a space after the comma. */
		$tags_list = get_the_tag_list( '', __( ', ', 'roserabbit' ) );

		$date = sprintf(
			'<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a>',
			esc_url( get_permalink() ),
			esc_attr( get_the_time() ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() )
		);

		$author = sprintf(
			'<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			/* translators: %s: Author display name. */
			esc_attr( sprintf( __( 'View all posts by %s', 'roserabbit' ), get_the_author() ) ),
			get_the_author()
		);

		if ( $tags_list && ! is_wp_error( $tags_list ) ) {
			/* translators: 1: Category name, 2: Tag name, 3: Date, 4: Author display name. */
			$utility_text = __( 'This entry was posted in %1$s and tagged %2$s on %3$s<span class="by-author"> by %4$s</span>.', 'roserabbit' );
		} elseif ( $categories_list ) {
			/* translators: 1: Category name, 3: Date, 4: Author display name. */
			$utility_text = __( 'This entry was posted in %1$s on %3$s<span class="by-author"> by %4$s</span>.', 'roserabbit' );
		} else {
			/* translators: 3: Date, 4: Author display name. */
			$utility_text = __( 'This entry was posted on %3$s<span class="by-author"> by %4$s</span>.', 'roserabbit' );
		}

		printf(
			$utility_text,
			$categories_list,
			$tags_list,
			$date,
			$author
		);
	}
endif;

/**
 * Extend the default WordPress body classes.
 *
 * Extends the default WordPress body class to denote:
 * 1. Using a full-width layout, when no active widgets in the sidebar
 *    or full-width template.
 * 2. Front Page template: thumbnail in use and number of sidebars for
 *    widget areas.
 * 3. White or empty background color to change the layout and spacing.
 * 4. Custom fonts enabled.
 * 5. Single or multiple authors.
 *
 * @since Rose Rabbit 1.0
 *
 * @param array $classes Existing class values.
 * @return array Filtered class values.
 */
function roserabbit_body_class( $classes ) {
	$background_color = get_background_color();
	$background_image = get_background_image();

	if ( ! is_active_sidebar( 'sidebar-1' ) || is_page_template( 'page-templates/full-width.php' ) ) {
		$classes[] = 'full-width';
	}

	if ( is_page_template( 'page-templates/front-page.php' ) ) {
		$classes[] = 'template-front-page';
		if ( has_post_thumbnail() ) {
			$classes[] = 'has-post-thumbnail';
		}
		if ( is_active_sidebar( 'sidebar-2' ) && is_active_sidebar( 'sidebar-3' ) ) {
			$classes[] = 'two-sidebars';
		}
	}

	if ( empty( $background_image ) ) {
		if ( empty( $background_color ) ) {
			$classes[] = 'custom-background-empty';
		} elseif ( in_array( $background_color, array( 'fff', 'ffffff' ), true ) ) {
			$classes[] = 'custom-background-white';
		}
	}

	// Enable custom font class only if the font CSS is queued to load.
	if ( wp_style_is( 'roserabbit-fonts', 'queue' ) ) {
		$classes[] = 'custom-font-enabled';
	}

	if ( ! is_multi_author() ) {
		$classes[] = 'single-author';
	}

	return $classes;
}
add_filter( 'body_class', 'roserabbit_body_class' );

/**
 * Adjust content width in certain contexts.
 *
 * Adjusts content_width value for full-width and single image attachment
 * templates, and when there are no active widgets in the sidebar.
 *
 * @since Rose Rabbit 1.0
 */
function roserabbit_content_width() {
	if ( is_page_template( 'page-templates/full-width.php' ) || is_attachment() || ! is_active_sidebar( 'sidebar-1' ) ) {
		global $content_width;
		$content_width = 960;
	}
}
add_action( 'template_redirect', 'roserabbit_content_width' );

/**
 * Register postMessage support.
 *
 * Add postMessage support for site title and description for the Customizer.
 *
 * @since Rose Rabbit 1.0
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function roserabbit_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'            => '.site-title > a',
				'container_inclusive' => false,
				'render_callback'     => 'roserabbit_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'            => '.site-description',
				'container_inclusive' => false,
				'render_callback'     => 'roserabbit_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'roserabbit_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Rose Rabbit 2.0
 *
 * @see roserabbit_customize_register()
 *
 * @return void
 */
function roserabbit_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Rose Rabbit 2.0
 *
 * @see roserabbit_customize_register()
 *
 * @return void
 */
function roserabbit_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Enqueue JavaScript postMessage handlers for the Customizer.
 *
 * Binds JS handlers to make the Customizer preview reload changes asynchronously.
 *
 * @since Rose Rabbit 1.0
 */
function roserabbit_customize_preview_js() {
	wp_enqueue_script( 'roserabbit-customizer', get_template_directory_uri() . '/js/theme-customizer.js', array( 'customize-preview' ), '20141120', true );
}
add_action( 'customize_preview_init', 'roserabbit_customize_preview_js' );

/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 *
 * @since Rose Rabbit 2.4
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array The filtered arguments for tag cloud widget.
 */
function roserabbit_widget_tag_cloud_args( $args ) {
	$args['largest']  = 22;
	$args['smallest'] = 8;
	$args['unit']     = 'pt';
	$args['format']   = 'list';

	return $args;
}
add_filter( 'widget_tag_cloud_args', 'roserabbit_widget_tag_cloud_args' );

if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Fire the wp_body_open action.
	 *
	 * Added for backward compatibility to support pre-5.2.0 WordPress versions.
	 *
	 * @since Rose Rabbit 3.0
	 */
	function wp_body_open() {
		/**
		 * Triggered after the opening <body> tag.
		 *
		 * @since Rose Rabbit 3.0
		 */
		do_action( 'wp_body_open' );
	}
endif;


// 
function dequeue_my_css() {
  wp_dequeue_style('roserabbit-style');
  wp_deregister_style('roserabbit-style');

  // wp_dequeue_style('roserabbit-block-style');
  // wp_deregister_style('roserabbit-block-style');
}
add_action('wp_enqueue_scripts','dequeue_my_css');



// 
add_filter( 'wp_enqueue_scripts', 'change_default_jquery', 1 );

function change_default_jquery( ){
    // wp_dequeue_script( 'jquery');
    // wp_deregister_script( 'jquery');

    // wp_dequeue_script( 'jquery-core');
    // wp_deregister_script( 'jquery-core');

}


/**
 * Enqueue scripts and styles.
 */
// function roserabbit_scripts() {
	
	
// }
// add_action( 'wp_enqueue_scripts', 'roserabbit_scripts' );






function myscript_jquery() {
  
//  	wp_enqueue_style( 'roserabbit-bootstrap-min', get_template_directory_uri().'/assets/css/bootstrap.min.css', array() );	
// 	wp_enqueue_style( 'roserabbit-swiper-bundle-min', get_template_directory_uri().'/assets/css/swiper-bundle.min.css', array() );	
// 	wp_enqueue_style( 'roserabbit-owl-carousel-min', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array() );	
// 	wp_enqueue_style( 'roserabbit-owl-theme-min', get_template_directory_uri().'/assets/css/owl.theme.min.css', array() );	
// 	wp_enqueue_style( 'roserabbit-owl-transitions', get_template_directory_uri().'/assets/css/owl.transitions.css', array() );	
// 	wp_enqueue_style( 'roserabbit-styless', get_template_directory_uri().'/assets/css/style.css', array() );
	
// 	wp_enqueue_style( 'responsive', get_template_directory_uri().'/assets/css/responsive.css', array() );
// 	wp_enqueue_style( 'googleapis', 'https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap', array() );	

// 	wp_enqueue_style( 'font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array() );	

}
add_action( 'wp_head' , 'myscript_jquery', 1 );





function foot_theme_scripts() {
 
// 	wp_enqueue_script( 'roserabbit-js', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', array(), true );

// 	wp_enqueue_script( 'roserabbit-popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), true );
// 	wp_enqueue_script( 'roserabbit-bootstrap-min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), true );
// 	wp_enqueue_script( 'roserabbit-owl-carousel-min', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), true );
// 	wp_enqueue_script( 'roserabbit-swiper-bundle-min', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), true );
// 	wp_enqueue_script( 'roserabbit-script', get_template_directory_uri() . '/assets/js/script.js', array(), true );
	
	// wp_deregister_script('jquery');
 }

add_action( 'wp_footer', 'foot_theme_scripts' );





if( function_exists('acf_add_options_page') ) {
    // Theme General Settings
    $general_settings   = array(
          'page_title' 	=> __( 'Theme General Settings', 'glasierwellness' ),
          'menu_title'	=> __( 'Theme Settings', 'glasierwellness' ),
          'menu_slug' 	=> 'theme-general-settings',
          'capability'	=> 'edit_posts',
          'redirect'	=> true
        );
    acf_add_options_page( $general_settings );

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Header',
		'menu_title'	=> 'Theme Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Theme Footer',
		'parent_slug'	=> 'theme-general-settings',
	));


	// $slider   = array(
 //          'page_title' 	=> __( 'Sliders Settings', 'glasierwellness' ),
 //          'menu_title'	=> __( 'Sliders', 'glasierwellness' ),
 //          'menu_slug' 	=> 'sliders-settings',
 //          'capability'	=> 'edit_posts',
 //          'icon_url' => 'dashicons-images-alt2', 
	// 	  'position' => 4,
 //          'redirect'	=> true
 //        );
 //    acf_add_options_page( $slider );
 //    acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Slider',
	// 	'menu_title'	=> 'Slider',
	// 	'parent_slug'	=> 'sliders-settings',
	// ));

	
}


// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

  global $wp_version;
  if ( $wp_version !== '4.7.1' ) {
     return $data;
  }

  $filetype = wp_check_filetype( $filename, $mimes );

  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );



/*
 * Shortcode for WooCommerce Cart Icon for Menu Item
 */
add_shortcode ('woocommerce_cart_icon', 'woo_cart_icon' );
function woo_cart_icon() {
    ob_start();
        $cart_count = WC()->cart->cart_contents_count; // Set variable for cart item count
        $cart_url = wc_get_cart_url();  // Set variable for Cart URL
        echo '<a data-toggle="toggle" class="cart-contents header-button" href="'.$cart_url.'" title="Cart">';
        echo '<span class="material-icons">shopping_basket</span>';
        echo '<span class="header-button-text"></span>';
        // if ( $cart_count > 0 ) {
            echo '<span class="count d-inline-block text-center">'.$cart_count.'</span>';
        // }
        echo '</a>';
    return ob_get_clean();
}



// 
// 
// add_shortcode ('woocommerce_cart_icon', 'woo_cart_icon' );
// function woo_cart_icon() {
//     ob_start();
//         $cart_count = WC()->cart->cart_contents_count; // Set variable for cart item count
//         $cart_url = wc_get_cart_url();  // Set variable for Cart URL
//         echo '<a data-toggle="toggle" class="cart-contents header-button" href="'.$cart_url.'" title="Cart">';
//         echo '<span class="material-icons">shopping_basket</span>';
//         echo '<span class="header-button-text"></span>';
//         // if ( $cart_count > 0 ) {
//             echo '<span class="count d-inline-block text-center">'.$cart_count.'</span>';
//         // }
//         echo '</a>';
//     return ob_get_clean();
// }

/*
 * Append Cart Icon Particular Menu
 */
// add_filter('wp_nav_menu_items','woo_cart_icon_menu', 10, 2);
// function woo_cart_icon_menu($menu, $args) {

//     if($args->theme_location == 'primary') { // 'primary' is my menu ID
//         $cart = do_shortcode("[woocommerce_cart_icon]");
//         return $cart . $menu;
//     }

//     return $menu;
// }


// add_filter('wp_nav_menu_items','new_item', 10, 2);
// function new_item($menu, $args) {

//     if($args->theme_location == 'footer') { // 'primary' is my menu ID
//     	$cart_count = WC()->cart->cart_contents_count;
//     	$cart_url = wc_get_cart_url();
//         $item = "<li><a href='".$cart_url."'><i class='fa fa-shopping-bag'></i><span>Cart ".$cart_count."</span></a></li>";
//         return $item . $menu;
//     }

//     return $menu;
// }


//Add a filter to get the cart count
add_filter('woocommerce_add_to_cart_fragments', 'woo_cart_but_count');
/**
 * Add AJAX Shortcode when cart contents update
 */
function woo_cart_but_count($fragments)
{
    ob_start();
    $cart_count = WC()->cart->cart_contents_count;
    $cart_url = wc_get_cart_url(); ?>
    <a class="cart-item" href="<?php echo $cart_url; ?>" data-count="<?php echo $cart_count; ?>" title="<?php _e('View your shopping cart'); ?>">
        <span class="cart-contents-count"><?php echo $cart_count; ?></span>
    <span class="material-icons">shopping_basket</span></a>
    <?php
    $fragments['a.cart-item'] = ob_get_clean();

    return $fragments;
}
