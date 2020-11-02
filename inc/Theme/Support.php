<?php

namespace WPEssential\Plugins\Theme;

final class Support
{
	public static function constructor ()
	{
		self::html5();
		self::custom_header();
		self::custom_logo();
		self::custom_background();
		self::formats();
		self::thumbnails();
		self::excerpt();
		self::woocommerce();
		self::gutanbarg();
		self::starter_content();
		self::other();
	}

	public static function html5 ()
	{
		$default = apply_filters(
			'wpe/themes/support/allow/html5',
			[
				'comment-list',
				'comment-form',
				'search-form',
				'gallery',
				'caption',
				'style',
				'script'
			]
		);
		if ( $default && is_array( $default ) ) {
			add_theme_support( 'html5', $default );
		}
	}

	public static function custom_header ()
	{
		$defaults = apply_filters(
			'wpe/themes/support/allow/custom_header',
			[
				'default-image'          => '',
				'random-default'         => false,
				'width'                  => 0,
				'height'                 => 0,
				'flex-height'            => false,
				'flex-width'             => false,
				'default-text-color'     => '',
				'header-text'            => true,
				'uploads'                => true,
				'wp-head-callback'       => '',
				'admin-head-callback'    => '',
				'admin-preview-callback' => '',
				'video'                  => false,
				'video-active-callback'  => 'is_front_page',
			]
		);
		if ( $defaults && is_array( $defaults ) ) {
			add_theme_support( 'custom-header', $defaults );
		}
	}

	public static function custom_logo ()
	{
		$default = apply_filters(
			'wpe/themes/support/allow/custom_logo',
			[
				'height'      => null,
				'width'       => null,
				'flex-height' => true,
				'flex-width'  => true,
				'header-text' => [ 'site-title', 'site-description' ],
			]
		);
		if ( $default && is_array( $default ) ) {
			add_theme_support( 'custom-logo', $default );
		}
	}

	public static function custom_background ()
	{
		$defaults = apply_filters(
			'wpe/themes/support/allow/custom_bakcground',
			[
				'default-color'          => 'f5efe0',
				'default-image'          => '',
				'default-preset'         => 'default', // 'default', 'fill', 'fit', 'repeat', 'custom'
				'default-position-x'     => 'left',    // 'left', 'center', 'right'
				'default-position-y'     => 'top',     // 'top', 'center', 'bottom'
				'default-size'           => 'auto',    // 'auto', 'contain', 'cover'
				'default-repeat'         => 'repeat',  // 'repeat-x', 'repeat-y', 'repeat', 'no-repeat'
				'default-attachment'     => 'scroll',  // 'scroll', 'fixed'
				'wp-head-callback'       => '_custom_background_cb',
				'admin-head-callback'    => '',
				'admin-preview-callback' => '',
			]
		);
		if ( $defaults && is_array( $defaults ) ) {
			add_theme_support( 'custom-background', $defaults );
		}
	}

	public static function formats ()
	{
		$allow_fotmates = apply_filters(
			'wpe/themes/support/allow/formates',
			[
				'aside',
				'gallery',
				'link',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			]
		);
		if ( $allow_fotmates && is_array( $allow_fotmates ) ) {
			add_theme_support( 'post-formats', $allow_fotmates );
		}

		$allwo_post_type_to_post_format = apply_filters( 'wpe/themes/support/allow/post_types/formats', [ 'post' ] );
		if ( $allwo_post_type_to_post_format && is_array( $allwo_post_type_to_post_format ) ) {
			foreach ( $allwo_post_type_to_post_format as $post_type ) {
				add_post_type_support( $post_type, 'post-formats' );
			}
		}
	}

	public static function thumbnails ()
	{
		$allow_post_types = apply_filters( 'wpe/themes/support/allow/post_types/thumbnails', [] );
		if ( $allow_post_types && is_array( $allow_post_types ) ) {
			add_theme_support( 'post-thumbnails', $allow_post_types );
			return;
		}

		add_theme_support( 'post-thumbnails' );
	}

	public static function excerpt ()
	{
		$allow_excerpt = apply_filters( 'wpe/themes/support/allow/post_types/excerpt', [ 'post' ] );
		if ( $allow_excerpt && is_array( $allow_excerpt ) ) {
			foreach ( $allow_excerpt as $post_type ) {
				add_post_type_support( $post_type, 'excerpt' );
			}
		}
	}

	public static function woocommerce ()
	{
		$allow_woo = apply_filters( 'wpe/themes/support/allow/woocommerce', [
			'wc-product-gallery-zoom',
			'wc-product-gallery-lightbox',
			'wc-product-gallery-slider',
			'woocommerce'
		] );
		if ( $allow_woo && is_array( $allow_woo ) ) {
			foreach ( $allow_woo as $woo ) {
				add_theme_support( $woo );
			}
		}
	}

	public static function gutanbarg ()
	{
		$default = apply_filters(
			'wpe/themes/support/allow/editor/color/palette',
			[
				[
					'name'  => __( 'strong magenta', 'wpessential' ),
					'slug'  => 'strong-magenta',
					'color' => '#a156b4',
				],
				[
					'name'  => __( 'light grayish magenta', 'wpessential' ),
					'slug'  => 'light-grayish-magenta',
					'color' => '#d0a5db',
				],
				[
					'name'  => __( 'very light gray', 'wpessential' ),
					'slug'  => 'very-light-gray',
					'color' => '#eee',
				],
				[
					'name'  => __( 'very dark gray', 'wpessential' ),
					'slug'  => 'very-dark-gray',
					'color' => '#444',
				],
			]
		);
		if ( $default && is_array( $default ) ) {
			add_theme_support( 'editor-color-palette', $default );
		}

		add_theme_support( 'align-wide' );    //align-wide or align-full
		add_theme_support( 'wp-block-styles' );

		$default = apply_filters( 'wpe/themes/support/allow/editor/gradient/presets',
			[
				[
					'name'     => __( 'Vivid cyan blue to vivid purple', 'wpessential' ),
					'gradient' => 'linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%)',
					'slug'     => 'vivid-cyan-blue-to-vivid-purple'
				],
				[
					'name'     => __( 'Vivid green cyan to vivid cyan blue', 'wpessential' ),
					'gradient' => 'linear-gradient(135deg,rgba(0,208,132,1) 0%,rgba(6,147,227,1) 100%)',
					'slug'     => 'vivid-green-cyan-to-vivid-cyan-blue',
				],
				[
					'name'     => __( 'Light green cyan to vivid green cyan', 'wpessential' ),
					'gradient' => 'linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%)',
					'slug'     => 'light-green-cyan-to-vivid-green-cyan',
				],
				[
					'name'     => __( 'Luminous vivid amber to luminous vivid orange', 'wpessential' ),
					'gradient' => 'linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%)',
					'slug'     => 'luminous-vivid-amber-to-luminous-vivid-orange',
				],
				[
					'name'     => __( 'Luminous vivid orange to vivid red', 'wpessential' ),
					'gradient' => 'linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%)',
					'slug'     => 'luminous-vivid-orange-to-vivid-red',
				],
			]
		);
		if ( $default && is_array( $default ) ) {
			add_theme_support( 'editor-gradient-presets', $default );
		}

		$default = apply_filters(
			'wpe/themes/support/allow/editor/font/sizes',
			[
				[
					'name' => __( 'Small', 'wpessential' ),
					'size' => 12,
					'slug' => 'small'
				],
				[
					'name' => __( 'Regular', 'wpessential' ),
					'size' => 16,
					'slug' => 'regular'
				],
				[
					'name' => __( 'Large', 'wpessential' ),
					'size' => 36,
					'slug' => 'large'
				],
				[
					'name' => __( 'Huge', 'wpessential' ),
					'size' => 50,
					'slug' => 'huge'
				]
			]
		);
		if ( $default && is_array( $default ) ) {
			add_theme_support( 'editor-font-sizes', $default );
		}

		add_theme_support( 'custom-line-height' );
		add_theme_support( 'custom-units', implode( ', ', array_keys( wpe_style_unites() ) ) );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'dark-editor-style' );
		add_editor_style( 'style-editor.css' );
		add_theme_support( 'custom-spacing' );
	}

	public static function starter_content ()
	{
		$starter_content = [
			'widgets'     => [
				// Place one core-defined widgets in the first footer widget area.
				'sidebar-1' => [
					'text_about',
				],
				// Place one core-defined widgets in the second footer widget area.
				'footer'    => [
					'text_about',
				],
			],

			// Create the custom image attachments used as post thumbnails for pages.
			'attachments' => [
				'image-opening' => [
					'post_title' => _x( 'The New UMoMA Opens its Doors', 'Theme starter content', 'wpessential' ),
					'file'       => WPE_URL . 'assets/images/landscape-1.png', // URL relative to the template directory.
				],
			],

			// Specify the core-defined pages to create and add custom thumbnails to some of them.
			'posts'       => [
				'front' => [
					'post_type'    => 'page',
					'post_title'   => __( 'The New UMoMA Opens its Doors', 'wpessential' ),
					// Use the above featured image with the predefined about page.
					'thumbnail'    => '{{image-opening}}',
					'post_content' => join(
						'',
						[
							'<!-- wp:group {"align":"wide"} -->',
							'<div class="wp-block-group alignwide"><div class="wp-block-group__inner-container"><!-- wp:heading {"align":"center"} -->',
							'<h2 class="has-text-align-center">' . __( 'The premier destination for modern art in Northern Sweden. Open from 10 AM to 6 PM every day during the summer months.', 'wpessential' ) . '</h2>',
							'<!-- /wp:heading --></div></div>',
							'<!-- /wp:group -->',
							'<!-- wp:columns {"align":"wide"} -->',
							'<div class="wp-block-columns alignwide"><!-- wp:column -->',
							'<div class="wp-block-column"><!-- wp:group -->',
							'<div class="wp-block-group"><div class="wp-block-group__inner-container">',
							'<!-- wp:image {"align":"full","id":37,"sizeSlug":"full"} -->',
							'<figure class="wp-block-image alignfull size-full"><img src="' . WPE_URL . 'assets/images/three-quarters-1.png" alt="three quarters 1" class="wp-image-37"/></figure>',
							'<!-- /wp:image -->',
							'<!-- wp:heading {"level":3} -->',
							'<h3>' . __( 'Works and Days', 'wpessential' ) . '</h3>',
							'<!-- /wp:heading -->',
							'<!-- wp:paragraph -->',
							'<p>' . __( 'August 1 -- December 1', 'wpessential' ) . '</p>',
							'<!-- /wp:paragraph -->',
							'<!-- wp:button {"className":"is-style-outline"} -->',
							'<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="https://make.wordpress.org/core/2019/09/27/block-editor-theme-related-updates-in-wordpress-5-3/">' . __( 'Read More', 'wpessential' ) . '</a></div>',
							'<!-- /wp:button --></div></div>',
							'<!-- /wp:group -->',
							'<!-- wp:group -->',
							'<div class="wp-block-group"><div class="wp-block-group__inner-container">',
							'<!-- wp:image {"align":"full","id":37,"sizeSlug":"full"} -->',
							'<figure class="wp-block-image alignfull size-full"><img src="' . WPE_URL . 'assets/images/three-quarters-3.png" alt="three quarters 3" class="wp-image-37"/></figure>',
							'<!-- /wp:image -->',
							'<!-- wp:heading {"level":3} -->',
							'<h3>' . __( 'Theatre of Operations', 'wpessential' ) . '</h3>',
							'<!-- /wp:heading -->',
							'<!-- wp:paragraph -->',
							'<p>' . __( 'October 1 -- December 1', 'wpessential' ) . '</p>',
							'<!-- /wp:paragraph -->',
							'<!-- wp:button {"className":"is-style-outline"} -->',
							'<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="https://make.wordpress.org/core/2019/09/27/block-editor-theme-related-updates-in-wordpress-5-3/">' . __( 'Read More', 'wpessential' ) . '</a></div>',
							'<!-- /wp:button --></div></div>',
							'<!-- /wp:group --></div>',
							'<!-- /wp:column -->',
							'<!-- wp:column -->',
							'<div class="wp-block-column"><!-- wp:group -->',
							'<div class="wp-block-group"><div class="wp-block-group__inner-container">',
							'<!-- wp:image {"align":"full","id":37,"sizeSlug":"full"} -->',
							'<figure class="wp-block-image alignfull size-full"><img src="' . WPE_URL . 'assets/images/three-quarters-2.png" alt="three quarters 2" class="wp-image-37"/></figure>',
							'<!-- /wp:image -->',
							'<!-- wp:heading {"level":3} -->',
							'<h3>' . __( 'The Life I Deserve', 'wpessential' ) . '</h3>',
							'<!-- /wp:heading -->',
							'<!-- wp:paragraph -->',
							'<p>' . __( 'August 1 -- December 1', 'wpessential' ) . '</p>',
							'<!-- /wp:paragraph -->',
							'<!-- wp:button {"className":"is-style-outline"} -->',
							'<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="https://make.wordpress.org/core/2019/09/27/block-editor-theme-related-updates-in-wordpress-5-3/">' . __( 'Read More', 'wpessential' ) . '</a></div>',
							'<!-- /wp:button --></div></div>',
							'<!-- /wp:group -->',
							'<!-- wp:group -->',
							'<div class="wp-block-group"><div class="wp-block-group__inner-container">',
							'<!-- wp:image {"align":"full","id":37,"sizeSlug":"full"} -->',
							'<figure class="wp-block-image alignfull size-full"><img src="' . WPE_URL . 'assets/images/three-quarters-4.png" alt="three quarters 4" class="wp-image-37"/></figure>',
							'<!-- /wp:image -->',
							'<!-- wp:heading {"level":3} -->',
							'<h3>' . __( 'From Signac to Matisse', 'wpessential' ) . '</h3>',
							'<!-- /wp:heading -->',
							'<!-- wp:paragraph -->',
							'<p>' . __( 'October 1 -- December 1', 'wpessential' ) . '</p>',
							'<!-- /wp:paragraph -->',
							'<!-- wp:button {"className":"is-style-outline"} -->',
							'<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="https://make.wordpress.org/core/2019/09/27/block-editor-theme-related-updates-in-wordpress-5-3/">' . __( 'Read More', 'wpessential' ) . '</a></div>',
							'<!-- /wp:button --></div></div>',
							'<!-- /wp:group --></div>',
							'<!-- /wp:column --></div>',
							'<!-- /wp:columns -->',
							'<!-- wp:image {"align":"full","id":37,"sizeSlug":"full"} -->',
							'<figure class="wp-block-image alignfull size-full"><img src="' . WPE_URL . 'assets/images/landscape-2.png" alt="landscape 2" class="wp-image-37"/></figure>',
							'<!-- /wp:image -->',
							'<!-- wp:group {"align":"wide"} -->',
							'<div class="wp-block-group alignwide"><div class="wp-block-group__inner-container"><!-- wp:heading {"align":"center","textColor":"accent"} -->',
							'<h2 class="has-accent-color has-text-align-center">' . __( '&#8220;Cyborgs, as the philosopher Donna Haraway established, are not reverent. They do not remember the cosmos.&#8221;', 'wpessential' ) . '</h2>',
							'<!-- /wp:heading --></div></div>',
							'<!-- /wp:group -->',
							'<!-- wp:paragraph {"dropCap":true} -->',
							'<p class="has-drop-cap">' . __( 'With seven floors of striking architecture, UMoMA shows exhibitions of international contemporary art, sometimes along with art historical retrospectives. Existential, political and philosophical issues are intrinsic to our programme. As visitor you are invited to guided tours artist talks, lectures, film screenings and other events with free admission', 'wpessential' ) . '</p>',
							'<!-- /wp:paragraph -->',
							'<!-- wp:paragraph -->',
							'<p>' . __( 'The exhibitions are produced by UMoMA in collaboration with artists and museums around the world and they often attract international attention. UMoMA has received a Special Commendation from the European Museum of the Year, and was among the top candidates for the Swedish Museum of the Year Award as well as for the Council of Europe Museum Prize.', 'wpessential' ) . '</p>',
							'<!-- /wp:paragraph -->',
							'<!-- wp:paragraph -->',
							'<p></p>',
							'<!-- /wp:paragraph -->',
							'<!-- wp:group {"customBackgroundColor":"#ffffff","align":"wide"} -->',
							'<div class="wp-block-group alignwide has-background" style="background-color:#ffffff"><div class="wp-block-group__inner-container"><!-- wp:group -->',
							'<div class="wp-block-group"><div class="wp-block-group__inner-container"><!-- wp:heading {"align":"center"} -->',
							'<h2 class="has-text-align-center">' . __( 'Become a Member and Get Exclusive Offers!', 'wpessential' ) . '</h2>',
							'<!-- /wp:heading -->',
							'<!-- wp:paragraph {"align":"center"} -->',
							'<p class="has-text-align-center">' . __( 'Members get access to exclusive exhibits and sales. Our memberships cost $99.99 and are billed annually.', 'wpessential' ) . '</p>',
							'<!-- /wp:paragraph -->',
							'<!-- wp:button {"align":"center"} -->',
							'<div class="wp-block-button aligncenter"><a class="wp-block-button__link" href="https://make.wordpress.org/core/2019/09/27/block-editor-theme-related-updates-in-wordpress-5-3/">' . __( 'Join the Club', 'wpessential' ) . '</a></div>',
							'<!-- /wp:button --></div></div>',
							'<!-- /wp:group --></div></div>',
							'<!-- /wp:group -->',
							'<!-- wp:gallery {"ids":[39,38],"align":"wide"} -->',
							'<figure class="wp-block-gallery alignwide columns-2 is-cropped"><ul class="blocks-gallery-grid"><li class="blocks-gallery-item"><figure><img src="' . get_theme_file_uri() . '/assets/images/2020-square-2.png" alt="" data-id="39" data-full-url="' . get_theme_file_uri() . '/assets/images/2020-square-2.png" data-link="assets/images/2020-square-2/" class="wp-image-39"/></figure></li><li class="blocks-gallery-item"><figure><img src="' . get_theme_file_uri() . '/assets/images/2020-square-1.png" alt="" data-id="38" data-full-url="' . get_theme_file_uri() . '/assets/images/2020-square-1.png" data-link="' . get_theme_file_uri() . '/assets/images/2020-square-1/" class="wp-image-38"/></figure></li></ul></figure>',
							'<!-- /wp:gallery -->',
						]
					),
				],
				'about',
				'contact',
				'blog',
			],

			// Default to a static front page and assign the front and posts pages.
			'options'     => [
				'show_on_front'  => 'page',
				'page_on_front'  => '{{home}}',
				'page_for_posts' => '{{blog}}',
			],

			// Set the front page section theme mods to the IDs of the core-registered pages.
			/*'theme_mods'  => [
				'panel_1' => '{{homepage-section}}',
				'panel_2' => '{{about}}',
				'panel_3' => '{{blog}}',
				'panel_4' => '{{contact}}',
			],*/

			// Set up nav menus for each of the two areas registered in the theme.
			'nav_menus'   => [
				// Assign a menu to the "top" location.
				'top-menu' => [
					'name'  => __( 'Top Menu', 'twentyseventeen' ),
					'items' => [
						'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
						'page_about',
						'page_blog',
						'page_contact',
					],
				],

				// Assign a menu to the "social" location.
				'primary'  => [
					'name'  => __( 'Primary', 'twentyseventeen' ),
					'items' => [
						'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
						'page_about',
						'page_blog',
						'page_contact',
					],
				],
			],
		];
		$starter_content = apply_filters( 'wpe/themes/support/allow/starter_content', $starter_content );
		if ( $starter_content && is_array( $starter_content ) ) {
			add_theme_support( 'starter-content', $starter_content );
		}
	}

	public static function other ()
	{
		$default = apply_filters(
			'wpe/themes/support/allow/others',
			[
				'title-tag',
				'widgets',
				'automatic-feed-links',
				'customize-selective-refresh-widgets',
				'buddypress'
			]
		);

		if ( $default && is_array( $default ) ) {
			foreach ( $default as $set ) {
				add_theme_support( $set );
			}
		}
	}
}
