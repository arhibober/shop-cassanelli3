<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MetroStore
 */

?>

<section class="no-results not-found">	

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'metrostore' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Извините, но Вашему запросу ничего не найдено. Можете попробовать другой поисковый запрос.', 'metrostore' ); ?></p>
			<?php

		else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'metrostore' ); ?></p>
			<?php

		endif; ?>
	</div><!-- .page-content -->

	<div class="backtohome">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" type="button" class="btn-home">
			<span><?php esc_html_e('Назад','metrostore'); ?></span>
		</a>
	</div>

</section><!-- .no-results -->
