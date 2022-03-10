<?php
/**
 * Block Patterns
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern/
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 * @package WordPress
 * @subpackage Rose_Rabbit
 * @since Rose Rabbit 3.4
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'roserabbit',
		array( 'label' => esc_html__( 'Rose Rabbit', 'roserabbit' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {

	// Images and spacer blocks inside of columns.
	register_block_pattern(
		'roserabbit/floating-images',
		array(
			'title'         => esc_html__( 'Floating Images Gallery', 'roserabbit' ),
			'categories'    => array( 'roserabbit' ),
			'viewportWidth' => 700,
			'content'       => '<!-- wp:group -->
				<div class="wp-block-group"><div class="wp-block-group__inner-container"><!-- wp:columns -->
				<div class="wp-block-columns"><!-- wp:column -->
				<div class="wp-block-column"><!-- wp:spacer -->
				<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				<!-- wp:image {"align":"center","sizeSlug":"large","linkDestination":"none"} -->
				<div class="wp-block-image"><figure class="aligncenter size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/images/pattern-jumble-2.jpg" alt="' . esc_attr__( 'Close up of a yellow and green leaf.', 'roserabbit' ) . '" /></figure></div>
				<!-- /wp:image --></div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"29%"} -->
				<div class="wp-block-column" style="flex-basis:29%"><!-- wp:image {"align":"center","sizeSlug":"large","linkDestination":"none"} -->
				<div class="wp-block-image"><figure class="aligncenter size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/images/pattern-jumble-3.jpg" alt="' . esc_attr__( 'Close up of a yellow leaf.', 'roserabbit' ) . '" /></figure></div>
				<!-- /wp:image -->
				<!-- wp:spacer {"height":25} -->
				<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/images/pattern-jumble-4.jpg" alt="' . esc_attr__( 'Close up of a yellow and green leaf.', 'roserabbit' ) . '" /></figure>
				<!-- /wp:image --></div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"43%"} -->
				<div class="wp-block-column" style="flex-basis:43%"><!-- wp:spacer {"height":37} -->
				<div style="height:37px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/images/pattern-jumble-1.jpg" alt="' . esc_attr__( 'Close up of a yellow and green leaf.', 'roserabbit' ) . '" /></figure>
				<!-- /wp:image --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns --></div></div>
				<!-- /wp:group -->',
		)
	);

	// Heading and paragraph arranged as a large quote.
	register_block_pattern(
		'roserabbit/large-quote',
		array(
			'title'         => esc_html__( 'Left-aligned Large Quote', 'roserabbit' ),
			'categories'    => array( 'roserabbit' ),
			'viewportWidth' => 700,
			'content'       => '<!-- wp:paragraph {"style":{"typography":{"fontSize":"40px","lineHeight":1.5}}} -->
				<p style="font-size:40px;line-height:1.5"><strong><em>' . esc_html__( '"Few people are capable of expressing with equanimity opinions which differ from the prejudices of their social eznvironment. Most people are even incapable of forming such opinions."', 'roserabbit' ) . '</em></strong></p>
				<!-- /wp:paragraph --><!-- wp:paragraph -->
				<p><em>' . esc_html__( '—  Albert Einstein', 'roserabbit' ) . '</em></p>
				<!-- /wp:paragraph -->',
		)
	);

	// Columns block with image in the first column and paragraphs with a drop cap in the second.
	register_block_pattern(
		'roserabbit/mixed-content-columns',
		array(
			'title'         => esc_html__( 'Left-aligned Image and Paragraph', 'roserabbit' ),
			'categories'    => array( 'roserabbit' ),
			'viewportWidth' => 700,
			'content'       => '<!-- wp:columns -->
				<div class="wp-block-columns"><!-- wp:column -->
				<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
				<figure class="wp-block-image size-large is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/images/pattern-jumble-3.jpg" alt="' . esc_attr__( 'Close up of a yellow leaf.', 'roserabbit' ) . '" /></figure>
				<!-- /wp:image --></div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:paragraph {"dropCap":true} -->
				<p class="has-drop-cap">' . esc_html__( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.', 'roserabbit' ) . '</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p>' . esc_html__( 'The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn&#8217;t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then.', 'roserabbit' ) . '</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p>' . esc_html__( 'It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.', 'roserabbit' ) . '</p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->',
		)
	);

}
