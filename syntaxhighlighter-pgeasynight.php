<?php
/**
 * Plugin Name: SyntaxHighlighter Evolved: pgEasyNight Theme
 * Plugin URI: https://github.com/pgsfredda/syntaxhighlighter-pgeasynight
 * Description: pg Easy Night Theme for the SyntaxHighligher Evolved plugin
 * Author: P.G.Sfredda
 * Version: 1.0.0
 * Author URI: https://paologabrielesfredda.it
 * License: MIT
 */

/**
 * Learn how to build your own syntaxhighlighter theme here:
 * http://www.viper007bond.com/wordpress-plugins/syntaxhighlighter/adding-a-new-theme/
 */

/**
 * Register our new stylesheet, on the site and in the admin.
 */
function pg_register_easynight_style() {
	wp_register_style( 'syntaxhighlighter-theme-pgeasynight',
		content_url( 'pgEasyNight.css' , __FILE__ ),
		array( 'syntaxhighlighter-core' ),
		'1.0.0'
	);
}
add_action( 'wp_register_style', 'pg_register_easynight_style' );

/**
 * Add that new stylesheet as an option for the SyntaxHighligher Evolved plugin.
 *
 * @param array $themes Array of SyntaxHighligther themes.
 */
function pg_new_syntax_theme( $themes ) {
	$themes['pgeasynight'] = 'pg Easy Night';

	return $themes;
}
add_filter( 'syntaxhighlighter_themes', 'pg_new_syntax_theme' );
