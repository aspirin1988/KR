<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Krasivaya_rabota
 */

?>

<section class="no-results not-found container">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Ничего не найдено', 'krasivaya_rabota' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'krasivaya_rabota' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Жаль, но ничего не соответствуют критериям поиска. Пожалуйста, попробуйте еще раз с другими ключевыми словами.', 'krasivaya_rabota' ); ?></p>
			<?php

		else : ?>

			<p><?php esc_html_e( 'Кажется, мы не можем найти то, что ищите. Возможно, поиск может помочь.', 'krasivaya_rabota' ); ?></p>
			<?php

		endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
