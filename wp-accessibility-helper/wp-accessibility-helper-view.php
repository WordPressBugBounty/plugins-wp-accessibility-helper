<?php
/**
 * WAH view template
 *
 * @package WAH
 */

if ( ! wah_analyzer_isset() ) :
	$icon                    = get_option( 'wah_image_url' ) ? get_option( 'wah_image_url' ) : plugins_url( 'assets/images/accessibility-48.jpg', __FILE__ );
	$close_button_title      = get_option( 'wah_close_button_title' ) ? get_option( 'wah_close_button_title' ) : __( 'Close', 'wp-accessibility-helper' );
	$wah_clear_cookies_title = get_option( 'wah_clear_cookies_title' ) ? get_option( 'wah_clear_cookies_title' ) : __( 'Clear cookies', 'wp-accessibility-helper' );
	$wah_on_off_title        = get_option( 'wah_on_off_title' ) ? get_option( 'wah_on_off_title' ) : __( 'ON/OFF', 'wp-accessibility-helper' );
	$wah_darktheme_enable    = get_option( 'wah_darktheme_enable' );
	$dark_theme_class        = 'light_theme';
	if ( $wah_darktheme_enable ) {
		$dark_theme_class = 'dark_theme';
	}
	?>


<div id="wp_access_helper_container" class="accessability_container <?php echo esc_html( $dark_theme_class ); ?>">
	<!-- WP Accessibility Helper (WAH) - https://wordpress.org/plugins/wp-accessibility-helper/ -->
	<!-- Official plugin website - https://accessibility-helper.co.il -->
	<?php do_action( 'before_wah_wrapper' ); ?>
	<button type="button" class="wahout aicon_link"
		accesskey="<?php echo esc_html( apply_filters( 'wah_open_accesskey', 'z' ) ); ?>"
		aria-label="<?php esc_html_e( 'Accessibility Helper sidebar', 'wp-accessibility-helper' ); ?>"
		title="<?php esc_html_e( 'Accessibility Helper sidebar', 'wp-accessibility-helper' ); ?>">
		<img src="<?php echo esc_url( apply_filters( 'wah_icon_url', $icon ) ); ?>"
			alt="<?php esc_html_e( 'Accessibility', 'wp-accessibility-helper' ); ?>" class="aicon_image" />
	</button>


	<div id="access_container" aria-hidden="true">
		<button tabindex="-1" type="button" class="close_container wahout"
			accesskey="<?php echo esc_html( apply_filters( 'wah_close_accesskey', 'x' ) ); ?>"
			aria-label="<?php echo esc_html( $close_button_title ); ?>"
			title="<?php echo esc_html( $close_button_title ); ?>">
			<?php echo esc_html( $close_button_title ); ?>
		</button>

		<div class="access_container_inner">
			<?php wah_render_enabled_widgets_list(); ?>
			<?php wah_render_last_skiplink(); ?>
		</div>
	</div>

	<?php
	include_once dirname( __FILE__ ) . '/inc/js-vars.php';
	include_once dirname( __FILE__ ) . '/inc/custom-font.php';
	include_once dirname( __FILE__ ) . '/inc/custom-css.php';
	include_once dirname( __FILE__ ) . '/inc/custom-logo-position.php';
	include_once dirname( __FILE__ ) . '/inc/author-credits.php';
	?>

	<?php do_action( 'after_wah_wrapper' ); ?>
	<!-- WP Accessibility Helper. Created by Alex Volkov. -->
</div>

<?php endif; ?>
