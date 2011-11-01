<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage John_Walley
 * @since John Walley 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_content(); ?>
	<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'johnwalley' ) . '</span>', 'after' => '</div>' ) ); ?>
	<footer class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'johnwalley' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
