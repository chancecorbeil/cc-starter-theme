<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CC_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<?php CC_Starter_Theme_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ccstartertheme' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ccstartertheme' ),
				'after'  => '</div>',
			)
		);
		?>

<?php

if ( 'post' === get_post_type() ) :
	?>
	<p class="entry-meta subtitle">
		<?php
		CC_Starter_Theme_posted_on();
		?>
	</p><!-- .entry-meta -->
<?php endif; ?>


	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php CC_Starter_Theme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
