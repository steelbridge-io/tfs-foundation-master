<?php
/**
 * Created by PhpStorm.
 * User: chrisparsons
 * Date: 2019-02-27
 * Time: 10:55
 */

// CSS output for cutomizer CSS modifications
if ( is_customize_preview() ) {

	function output()
	{
		echo '<style>';

		$fptopbgcolor_color = get_theme_mod('fp-top-widget-bg-color');
		$fptoptxtcolor			= get_theme_mod('fp-top-widget-txt-color');
		echo '#top-cta {
						background-color: ' . $fptopbgcolor_color . ';
						}' .
					'#top-cta, #top-cta h2, #top-cta p {
						color: ' . $fptoptxtcolor . ';
						}';

		echo '</style>';
	}

	add_action('wp_head', 'output');
}
