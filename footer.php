<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer id="footer" class="footer">
	<div class="footer-container container-flex">
		<div class="footer-grid">
			<?php dynamic_sidebar( 'footer-widgets' ); ?>
		</div>
	</div>
	<div class="footer-cred" style="width:100%;">
		<?php
		$social_icon_one 		= get_theme_mod('facebook_icon_bawx');
		$social_icon_two 		= get_theme_mod('twitter_icon_bawx');
		$social_icon_three	= get_theme_mod('instagram_icon_bawx');
		$social_icon_four		= get_theme_mod('youtube_icon_bawx');
		$social_icon_five		= get_theme_mod('email_icon_bawx');

		echo  '<div class="social-icons-footer">' .
					'<i class="'. $social_icon_one .'"></i>'.'<i class="'. $social_icon_two .'"></i>'.'<i class="'. $social_icon_three .'"></i>'.'<i class="'. $social_icon_four .'"></i>'.'<i class="'. $social_icon_five .'"></i>'.
					'</div>'; ?>
		<p><span class="tfs-copyright">&copy;&nbsp;THE FLY SHOP, INC.&nbsp;&reg;</span>&nbsp;|&nbsp;<span
				class="tfs-footer-date">1978&nbsp;-&nbsp;<?php echo date('Y'); ?></span></p>
	</div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
