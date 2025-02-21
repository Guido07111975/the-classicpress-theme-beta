<?php

/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Susty
 */
?>

	</div>

	<?php if ( is_active_sidebar( 'footer' ) ) { ?>
	<footer id="colophon" role="complementary">
		<div class="classic">
			<?php dynamic_sidebar( 'footer' ); ?>
		</div>
	</footer>
	<?php } ?>

	<footer id="legal" role="contentinfo">
		<div class="cplegal">
			<div class="cpcopyright">
				<p><?php esc_html_e( 'Copyright', 'the-classicpress-theme' ); ?> <?php echo esc_attr( gmdate( 'Y' ) ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a></p>
			</div>
			<div class="cppolicy">
				<?php if ( ! empty( get_privacy_policy_url() ) ) { ?>
					<p><a href="<?php echo esc_url( get_privacy_policy_url() ); ?>"><?php esc_html_e( 'Privacy Policy', 'the-classicpress-theme' ); ?></a></p>
				<?php } ?>
			</div>
		</div>
	</footer>

</div>

<?php wp_footer(); ?>

</body>

</html>
